<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


</style>
    
</head>
<body>

    <ul>

        <!--Option1-->

        <?php

            
            foreach($names as $name) {
                echo "<li>$name</li>";
            }

        ?>
        
        <!--Option2 or Alt way-->
        
        <?php foreach ($names as $name) : ?>
    
            <li><?= $name; ?></li>

        <?php endforeach; ?>    

        
    </ul>    
    
</body>
</html>
