<!-- It is best practice to keep the HTML part of the site separate from PHP portion. Along with other parts such as separate CSS and JS. -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>

header {
    background: #e3e3e3;
    padding: 2em;
    text-align: center;
}
</style>
    
</head>
<body>

    <header>

        <h1>
            <?= //"<?=" is the same as "<?php echo" good for putting onto the html portion for referencing a variable to echo.
            $greeting; ?>
        </h1>
    </header>
    
</body>
</html>
