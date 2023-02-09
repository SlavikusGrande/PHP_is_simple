<?php

$id = $_POST('id');
$firstname = $_POST ["firstname"];
$lastname = $_POST ["lastname"];

$connect = mysqli_connect('localhost', 'root', '', 'box');

$query  = 'UPDATE users SET firstname = "'.$firstname.'", lastname = "'.$lastname.'" WHERE id = '.$id;

$result = mysqli_query($connect, $query);

mysqli_close($connect);


?>

<meta http-equiv="refresh" content="1; url=index.php">
