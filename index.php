<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POO 101</title>
</head>
<body>
<?php

include 'StrUtils.php';

$myStr = new StrUtils('php is awesome !');

echo $myStr->bold().'<br>';
echo $myStr->italic().'<br>';
echo $myStr->underline().'<br>';
echo $myStr->capitalize().'<br>';
echo $myStr->uglify().'<br>';
?>
</body>
</html>