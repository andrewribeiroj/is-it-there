<?php include 'header.php'; ?>

<div class="cover">
    <h1 class="whiteHeader">Let's check if it's there.</h1>
    <form class="flex-form" method="post" action="result.php">
        <input name="furl" type="text" placeholder="What's the URL to check?">
        <textarea name="fcode" placeholder="Paste the wanted code here."></textarea>

        <select name="targetPart" id="targetPart">
            <option value="head">

                Check code in head section &darr;
            </option>
            <option value="body">
                Check code in body section
            </option>
        </select>

        <input type="submit" value="Check!">
    </form>
    <div id="madeby">

    </div>
</div>

<?php include 'footer.php'; ?>