<?php
include_once 'functions.php';

$first = getValue($_POST, "fist");
$last = getValue($_POST, "last");
$date = getValue($_POST, "date");
$child = getValue($_POST, "child");
$color = getValue($_POST, "color");

var_dump($first,$last,$date,$child,$color);


//drug nachi za da stane e prosto da se izvika post method i posled da se prezapishat promenlivite v $_get method-a 

// $first = getValue($_GET, "fist");
// $last = getValue($_GET, "last");
// $date = getValue($_GET, "date");
// $child = getValue($_GET, "child");
// $color = getValue($_GET, "color");

// var_dump($first,$last,$date,$child,$color);