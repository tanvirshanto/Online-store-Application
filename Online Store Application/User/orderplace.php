<?php
  session_start();


 
 if ($_SESSION["inf"]=="")
 {
	
	header("Location:register.php");
	 
	 
 }
 elseif(isset($_POST['submit1']))
								 {
	 
$d=$_SESSION["inf"];
$link = mysql_connect('localhost', 'root', '') or die('Connection error');
mysql_select_db("letsshop");

/*$id=$_GET['u'];
$quantity=$_POST['quantity'];
$total=$_POST['total'];*/
 
 $res=mysql_query("INSERT INTO orders(product_id, customer_name, quantity,total_amount) VALUES ('$_GET[u]','$_SESSION[inf]','$_POST[quantity]','$_POST[total]')",$link)or die(mysql_error());

 header("Location:4041.php");
 mysql_close($link);
								 }
					


?>
 