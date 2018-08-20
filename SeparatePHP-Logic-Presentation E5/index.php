<?php
//index.php will be the auto starting point of the server when the folder is opened from what I am noticing. This is the main file which then references others with "require"
$greeting = 'Hello World';

require 'index.view.php';
//The require function will render the data from index.view.php onto the browser screen

?>