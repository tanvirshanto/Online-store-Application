
<?php

$link = mysql_connect('localhost', 'root', '') or die('Connection error');
mysql_select_db("letsshop");

 $res=mysql_query("INSERT INTO users(Name,Email,Contact_Number,Gender,Address,Date_of_birth,Username,Password) VALUES
 ('$_POST[name]','$_POST[email]','$_POST[contact]','$_POST[gender]','$_POST[address]','$_POST[birthdate]','$_POST[uname]','$_POST[password]')",$link)or die(mysql_error());

 header("Location:customer-account.php");
 mysql_close($link);


?>
 