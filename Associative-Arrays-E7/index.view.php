<!DOCTYPE html>
<html>
<head>
    
    <title>Page Title</title>
    
</head>
<body>

    <ul>

        <?php foreach ($person as $key => $value) : ?>

            <li><strong><?= $key; ?></strong> <?= $value?></li>

        <?php endforeach; ?>

    </ul>
    
</body>
</html>