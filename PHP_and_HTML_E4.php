<!DOCTYPE html>

    <head>
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
                <?php 

                    //THe following allows "/?name = 'name input'" in URL to change $name

                    //name in $_GET['name'] cane be changed to anything else and done the same in URL

                   //$name = $_GET['name'];

                    //echo 'Hello, ' . $name; 

                    //Can also do the same as the following:

                    echo "Hello, " . htmlspecialchars($_GET['name']);

                    //htmlspecialchars is a built in PHP function to keep user from making input a URL

                ?> 
                
            </h1>

        </header>
  
    </body>
</html>