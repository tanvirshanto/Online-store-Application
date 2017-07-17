<?php
session_start();

$d=$_SESSION['inf'];


$link = mysql_connect('localhost', 'root', '') or die('Connection error');
mysql_select_db("letsshop");

 $res=mysql_query("UPDATE users SET Password='$_POST[password]' WHERE Username='".$d."'",$link)or die(mysql_error());

header("Location:customer-account.php");
mysql_close($link);


?>
 