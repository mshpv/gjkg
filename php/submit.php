<?php


$name = htmlentities($_POST['name']);
$street = htmlentities($_POST['street']);
$building = htmlentities($_POST['building']);
$appartments = htmlentities($_POST['appartments']);
$problems = htmlentities($_POST['problems']);

if ($problems == "Ржавая вода")
{
    $output = include 'lettertemplate/water.php';
    echo $output;
} elseif ($problems == "Яма на дороге") {
    $output = include 'lettertemplate/pitonroad.php';
    echo $output;
} else {   
    echo "Введенные данные некорректны";
}
?>