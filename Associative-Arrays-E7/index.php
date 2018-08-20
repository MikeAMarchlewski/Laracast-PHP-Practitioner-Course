<?php

//Normal Array such as in previous lesson.
//$person = [
//    31,
//    'brown',
//    'aspiring developer'
//];

//Associative Array
$person = [
  //Key  =>  Value  
    'age' => 27,
    'hair' => 'brown',
    'career' => 'aspiring developer'
];
//adding to associative array, basic
$person ['name'] = 'Mike';

echo $person['age'];
//echo looks for a string to echo out

var_dump($person);
//var_dump drops everything located within () example above is the entire array in ()

//HW Associative Array = title, due, assigned_to, completed
$task = [
    'Title' => 'Homework',
    'Due' => 'Today',
    'Assigned_to' => 'Joe',
    'Completed' => 'No'
];

var_dump($task);

echo $task['Completed'];
//End Homework Part. Easy
die();
//Doesn't show anything after, everything after the die function "dies"

require 'index.view.php';

?>