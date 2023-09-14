<?php
$theconfig = include_once("config.php");
$thefooter = include_once("footer.php");
$theheader = include_once("header.php");
$thecontent = include_once("content.php");

$myText = "cualquier cosa";


$html = "

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>

$theheader
$thecontent     
$thefooter
$myText
</body>
</html>";

echo $html;

echo ($database_name);