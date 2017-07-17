 
<?php
//session_start();
$link = mysql_connect('localhost', 'root', '') or die('Connection error');
mysql_select_db("letsshop");

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$res=mysql_query("select * from users where Username='".$uname." ' && Password='".$pass."'",$link)or die(mysql_error);

$m=0;

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
	header("Location:customer-orders.php?u=".$_SESSION["inf"]);
	
}

/*else
{


    echo "<script type=\"text/javascript\">window.alert('Wrong Password Or Username.');window.location.href = 'index.html';</script>"; 
   exit;
  
          

   
	
}*/

}
echo "<script type=\"text/javascript\">window.alert('Wrong Password Or Username.');window.location.href = 'index.html';</script>"; 
//header("Location:index.html");


mysql_close($link);

?>
 
	
	
	
	
	
	
	
	
	

    


