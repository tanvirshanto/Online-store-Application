
<?php

$link = mysql_connect('localhost', 'root', '') or die('Connection error');
mysql_select_db("letsshop");

$uname=$_POST['uname'];

$res=mysql_query("select * from users where Username='".$uname."'",$link)or die(mysql_error);

$m=0;
while($row=mysql_fetch_array($res)){
	
	
	$m=1;

	
}

if($m==1)
{
	
	   echo "<script type=\"text/javascript\">window.alert('Username Already Exists');window.location.href = 'register.html';</script>"; 
   exit;
	
	
}


else
{


 
          
$res=mysql_query("INSERT INTO users(Name,Email,Contact_Number,Gender,Address,Date_of_birth,Username,Password) VALUES
 ('$_POST[name]','$_POST[email]','$_POST[contact]','$_POST[gender]','$_POST[address]','$_POST[birthdate]','$_POST[uname]','$_POST[password]')",$link)or die(mysql_error());

 header("Location:register.html");
   
	
}

 
 mysql_close($link);


?>
 