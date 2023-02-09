<?php

$id = $_GET[id];
$connect = mysqli_connect('localhost', 'root', '', 'box');

$query = "SELECT * FROM users WHERE id=".$id;

$result = mysqli_query($connect, $query);

$users = mysqli_fetch_row($result);

mysqli_close($connect);

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



</head>
<title> Пример простой страницы html</title>
<body>
 <h1> 
   
 <?php
echo "$users[1] $users[2]";

 ?>

     <form action="update.php" method="post">
         <input type="hidden" name="id" value = "<?php echo $users [0]?>">
         <input type="text" name="firstname">
         <input type="text" name="lastname">
         <input type="submit" value="Обновить">

     </form>

</body>

</html>



