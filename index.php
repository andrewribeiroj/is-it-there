<?php include 'header.php'; ?>

<div class="cover">
    <h1 class="whiteHeader">Let's check if it's there.</h1>
    <form class="flex-form" method="post" action="result.php">
        <input name="furl" type="text" placeholder="What's the URL to check?">
        <textarea name="fcode" placeholder="Paste the wanted code here."></textarea>

        <select name="targetPart" id="targetPart">
            <option value="headPart">Check code in head section</option>
            <option value="bodyPart">Check code in body section</option>
        </select>

        <input type="submit" value="Check!">
    </form>
    <div id="madeby">

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

<?php include 'footer.php'; ?>