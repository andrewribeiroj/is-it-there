<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                        Select the website part you wish to check (head/body);
                    </li>
                    <li>
                        Select if you're looking for a perfect match or similar code;
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