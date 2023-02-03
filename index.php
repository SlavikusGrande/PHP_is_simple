<?php

$connect = mysqli_connect('localhost', 'root', '', 'box');

$query = "SELECT * FROM users";

$result = mysqli_query($connect, $query);

$users = mysqli_fetch_all($result);

mysqli_close($connect);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



</head>
<title> Пример простой страницы html</title>
<body>
 <h1> Имена </h1>
<?php

foreach($users as $key => $value){

    echo '<a href="edit.php?id='.$value[0].'"> '.$value[1].' '.$value[2].'</a> <br>';

}
?>

<form action="insert.php" method="post">
    <input type="text" name="firstname">
    <input type="text" name="lastname">
    <input type="submit" value="Создать">

</form>
 
</body>

</html>

