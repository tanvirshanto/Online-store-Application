<?php
		
		   if(isset($_GET['approve_id']))
		   {
			   
			   $id=$_GET['approve_id'];
			   $link = mysql_connect('localhost', 'root', '') or die('Connection error');
                 mysql_select_db("letsshop");


                  $res=mysql_query("UPDATE `orders` SET `status`='Approved ' where order_id='" .$id." '",$link)or die(mysql_error);

				  
				  
				  echo"<script>alert('Successfully Updated') </script>";
				  header("Location:view_orders.php");
                  mysql_close($link);

                
			   
			   
			   
		   }
		
		
		?>