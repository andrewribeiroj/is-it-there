<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="modal.css">
    <title>Is it there?</title>

    <!-- MailerLite Universal -->
    <script>
        (function(w, d, e, u, f, l, n) {
            w[f] = w[f] || function() {
                    (w[f].q = w[f].q || [])
                    .push(arguments);
                }, l = d.createElement(e), l.async = 1, l.src = u,
                n = d.getElementsByTagName(e)[0], n.parentNode.insertBefore(l, n);
        })
        (window, document, 'script', 'https://assets.mailerlite.com/js/universal.js', 'ml');
        ml('account', '912035');
    </script>
    <!-- End MailerLite Universal -->
</head>

<body>
    <div id="instructions" class="modal">
        <div class="modal__content">
            <h1>Checking if your piece of code is added</h1>

            <p>
            <ol>
                <li>
                    Add the URL of the website you wish to check in the first field;
                </li>
                <li>
                    Paste the code you wish to check if added into the second field;
                </li>
                <li>
                    Select the website section you wish to check (head/body);
                </li>
                <li>
                    Press "check"!
                </li>
            </ol>
            </p>

            <div class="modal__footer">
                Have a nice hunt!
            </div>

            <a href="#" class="modal__close">&times;</a>
        </div>
    </div>
    
    <div class="container">
        <header>
            <h2><a href="/">Is it there?</a></h2>
            <nav>
                <ul>
                    <li>
                        <a href="#instructions">Open Instructions</a>
                    </li>
                    <li>
                        <a href="https://github.com/andrewribeiroj/is-it-there" target="_blank" title="github">GitHub
                            Repository</a>
                    </li>
                    <li>
                        <a class="btn" title="newsletter" class="ml-onclick-form" href="javascript:void(0)"
                            onclick="ml('show', 'tpJQuU', true)">Newsletter</a>
                    </li>
                </ul>
            </nav>
        </header>
        
    </div>