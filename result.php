<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Is it there?</title>
</head>

<body>
    <div class="container">

        <header>
            <h2><a href="#"><i class="ion-plane"></i>Is it there?</a></h2>
            <nav>
                <ul>
                    <li>
                        <a href="#" title="a">Nothing</a>
                    </li>
                    <li>
                        <a href="#" title="b">None</a>
                    </li>
                    <li>
                        <a href="#" title="c">Nein</a>
                    </li>
                    <li>
                        <a class="btn" href="#" title="d">Not as well</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="cover">
            <p class="whitetxt">
                <?php
                function ensureHttp($url)
                {
                    // Check if the string starts with 'http://' or 'https://'
                    if (strpos($url, 'http://') !== 0 && strpos($url, 'https://') !== 0) {
                        // Prepend 'http://' if neither is found
                        $url = 'http://' . $url;
                    }
                    return $url;
                }

                try {
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($_POST['furl']) && $_POST['furl'] !== '' && isset($_POST['fcode'])) {
                            // Get the URL from the GET parameter
                            $url = ensureHttp($_POST['furl']);

                            // Get the script to search for from the POST parameter
                            $searchCode = htmlspecialchars($_POST['fcode']); // valid script tag

                            //echo $searchCode;

                            $content = @file_get_contents($url);

                            if ($content === FALSE) {
                                echo "Failed to retrieve the content. Please check the URL.";
                            } else {
                                // Extract the content inside the <head> tags
                                if (preg_match('/<head[^>]*>(.*?)<\/head>/si', $content, $matches)) {
                                    $headContent = $matches[1]; // Extracted content inside the <head> tag

                                    $normalizedSearchCode = preg_replace('/\s+/', ' ', trim($searchCode));
                                    $normalizedHeadContent = preg_replace('/\s+/', ' ', $headContent);

                                    // Check if the JavaScript code exists in the <head> section
                                    $pos = strpos(htmlspecialchars($normalizedHeadContent), trim($normalizedSearchCode));

                                    if ($pos === false) {
                                        echo "It is NOT there... :(";
                                    } else {
                                        echo "It is there! :D";
                                    }
                                } else {
                                    echo "Failed to extract the <head> section.";
                                }
                            }
                        } else {
                            echo 'Something went terribly and unexpectedly wrong, jeez';
                        }
                    }
                } catch (Exception $e) {
                    // Handle the exception
                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                }

                ?>
            </p>
        </div>
    </div>
</body>

</html>