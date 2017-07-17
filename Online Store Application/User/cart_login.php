 
<?php
//session_start();
$link = mysql_connect('localhost', 'root', '') or die('Connection error');
mysql_select_db("letsshop");

$uname=$_POST['uname'];
$pass=$_POST['pass'];
$id=$_GET['u'];

$res=mysql_query("select * from users where Username='".$uname." ' && Password='".$pass."'",$link)or die(mysql_error);



while($row=mysql_fetch_array($res)){

if($row['user_type']=='Admin')
{
	session_start();
	$_SESSION["inf"]=$row["Username"];
	
	header("Location:Admin/index.php?u=".$_SESSION["inf"]);
	
	
}


elseif($row['user_type']=='user')
{
	session_start();
	$_SESSION["inf"]=$row["Username"];
	header("Location:basket.php?u=".$id);
	//echo $id;
	
}



}
echo "<script type=\"text/javascript\">window.alert('Wrong Password Or Username.');window.location.href = 'index.html';</script>"; 



mysql_close($link);

?>
 
	
	
	
	
	
	
	
	
	

    


