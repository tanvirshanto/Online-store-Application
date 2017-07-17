<?php
		
		   if(isset($_GET['delete_id']))
		   {
			   
			   $id=$_GET['delete_id'];
			   $link = mysql_connect('localhost', 'root', '') or die('Connection error');
                 mysql_select_db("letsshop");


                  $res=mysql_query("delete from users where Name='" .$id." '",$link)or die(mysql_error);

				  
				  
				  echo"<script>alert('Successfully Deleted') </script>";
				  header("Location:customer_view.php");
                mysql_close($link);

                
			   
			   
			   
		   }
		
		
		?>