<?php
		
		   if(isset($_GET['delete_id']))
		   {
			   
			   $id=$_GET['delete_id'];
			   $link = mysql_connect('localhost', 'root', '') or die('Connection error');
                 mysql_select_db("letsshop");


                  $res=mysql_query("delete from products where product_id='" .$id." '",$link)or die(mysql_error);

				  
				  
				  echo"<script>alert('Successfully Deleted') </script>";
				  header("Location:product_view.php");
                mysql_close($link);

                
			   
			   
			   
		   }
		
		
		?>