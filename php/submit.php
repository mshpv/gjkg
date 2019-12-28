<?php
if(isset($_POST['name']) && isset($_POST['street']) && 
isset($_POST['building']) && isset($_POST['appartments']) && isset($_POST['problems'])) 
{
    $name = htmlentities($_POST['name']);
    $street = htmlentities($_POST['street']);
    $building = htmlentities($_POST['building']);
    $appartments = htmlentities($_POST['appartments']);
    $problems = htmlentities($_POST['problems']);
    $output = include 'lettertemplate/water.php';
    echo $output;
}
else
{   
    echo "Введенные данные некорректны";
}
?>
    