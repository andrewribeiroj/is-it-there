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
            <h1>Let's check if it's there.</h1>
            <form class="flex-form" method="post" action="result.php">
                <input name="furl" type="text" placeholder="What's the URL to check?">
                <textarea name="fcode" placeholder="Paste the wanted code here."></textarea>
                <input type="submit" value="Check!">
            </form>
            <div id="madeby">

            </div>
        </div>

    </div>
</body>

</html>