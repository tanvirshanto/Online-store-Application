<?php

$link = mysql_connect('localhost', 'root', '') or die('Connection error');
mysql_select_db("letsshop");

 $res=mysql_query("INSERT INTO customer_contact(Firstname, Lastname, Email,Subject,Message) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[subject]','$_POST[message]')",$link)or die(mysql_error());

 header("Location:contact.html");
 mysql_close($link);


?>
 