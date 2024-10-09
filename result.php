<?php include 'header.php'; ?>

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


                    if ($_POST['targetPart'] === "head") {
                        $targetPart = '/<head[^>]*>(.*?)<\/head>/si';
                    } else if ($_POST['targetPart'] === "body") {
                        $targetPart = '/<body[^>]*>(.*?)<\/body>/si';
                    } else {
                        $targetPart = '/<html[^>]*>(.*?)<\/html>/si';
                    }

                    $content = @file_get_contents($url);

                    if ($content === FALSE) {
                        echo "Failed to retrieve the content. Please check the URL.";
                    } else {
                        // Extract the content inside the <head> tags
                        if (preg_match($targetPart, $content, $matches)) {
                            $websiteContent = $matches[1]; // Extracted content inside the <head> tag
                            
                            $normalizedSearchCode = preg_replace('/\s+/', ' ', trim($searchCode));
                            $normalizedWebsiteContent = preg_replace('/\s+/', ' ', $websiteContent);

                            // Check if the JavaScript code exists in the <head> section
                            $pos = strpos(htmlspecialchars($normalizedWebsiteContent), trim($normalizedSearchCode));

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

<?php include 'footer.php'; ?>