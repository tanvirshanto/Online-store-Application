<?php
session_start();

$d=$_SESSION['inf'];


$link = mysql_connect('localhost', 'root', '') or die('Connection error');
mysql_select_db("letsshop");

 $res=mysql_query("UPDATE users SET Name='$_POST[name]',Email='$_POST[mail]',Contact_Number='$_POST[contact]',Address='$_POST[address]' WHERE Username='".$d."'",$link)or die(mysql_error());


mysql_close($link);
header("Location:customer-account.php");

?>
 