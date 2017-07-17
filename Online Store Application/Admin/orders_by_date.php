<?php
session_start();

 
 if ($_SESSION["inf"]=="")
 {
	header("Location:/Lets/index.html");
	 
	 
 }
 
 

 ?>
 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Lets Shop</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
			setSidebarHeight();


        });
    </script>
	
	<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
	padding: 15px;
}

tr:hover{background-color:#00FFFF}
</style>
</head>
<body>
    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft">
                    <img src="img/logo@2x.png" width="200px" height="50px" alt="Logo" /></div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li><?php
				     $d=$_SESSION["inf"];
					
					echo "Hello, "  .$d;
					?> </li>
                           
                            <li><a href="admin_logout.php">Logout</a></li>
                        </ul>
                        <br />
                       
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="index.php"><span>Home</span></a> </li>
				</li>
                 <li class="ic-notifications"><a href="notifications.php"><span>Notifications</span></a></li>
                <!--<li class="ic-form-style"><a href="javascript:"><span>Controls</span></a>
                    <ul>
                        <li><a href="form-controls.html">Forms</a> </li>
                        <li><a href="buttons.html">Buttons</a> </li>
                        <li><a href="form-controls.html">Full Page Example</a> </li>
                        <li><a href="table.html">Page with Sidebar Example</a> </li>
                    </ul>
                </li>
				<li class="ic-typography"><a href="typography.html"><span>Typography</span></a></li>
                <li class="ic-charts"><a href="charts.html"><span>Charts & Graphs</span></a></li>
                <li class="ic-grid-tables"><a href="table.html"><span>Data Table</span></a></li>
                <li class="ic-gallery dd"><a href="javascript:"><span>Image Galleries</span></a>
               		 <ul>
                        <li><a href="image-gallery.html">Pretty Photo</a> </li>
                        <li><a href="gallery-with-filter.html">Gallery with Filter</a> </li>
                    </ul>-->
                

            </ul>
        </div>
        <div class="clear">
        </div>
        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                        <li><a class="menuitem">Menu</a>
                            <ul class="submenu">
                               <li><a href="add_product.php"><h5>Add Products<h5></a> </li>
                                <li><a href="product_view.php"><h5> View Products</h5></a> </li>
								 <li> <a href="view_orders.php"><h5>View Orders<h5></a> </li>
                                 <li><a href="customer_view.php"><h5>View Customer<h5> </li>
                                 
                              
                            </ul>
                        </li>
                        <li><a class="menuitem">Analysis</a>
                            <ul class="submenu">
                                 <li><a href="analysis_report.php"><h5>Star customer<h5></li> 
                               <li><a href="regular_customer_analysis.php"><h5>Regular Customer<h5></li>
                               <li><a href=" total_sales.php"><h5>Total Sales<h5></li> 
							   <li><a href=" orders_by_date.php"><h5>Order BY Date<h5></li> 
								<li><a href="product_hits.php"><h5>Most viewed Products<h5></li> 
								<li><a href="orders_by_location.php"><h5>Orders By Location<h5></li> 						   
								 
                                
                            </ul>
                        </li>
                        <li><a class="menuitem">Admin</a>
                            <ul class="submenu">
                              
							   
							   <li><a href="add_admin.php"><h5>ADD Admin<h5></li>	
                                
                            </ul>
                        </li>
                     <li><a class="menuitem"></a>
                            <ul class="submenu">
                             
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>
                    WELCOME TO THE ADMIN PANEL</h2>
					<form method="post" action="orders_by_date.php">
					<input onfocus="(this.type='date')" name="birthdate" placeholder="Enter your date" id="birthdate" required>
					TO
					<input onfocus="(this.type='date')" name="birthdate1" placeholder="Enter your date" id="birthdate" required> 
					
					<input type="submit" name="submit" value="Search">
					<br/> <br/>
					
					
					
					
					</form>
					
					 
                    <table width="1050" align="center" border="1px" color="pink" cellspacing="50px">
					
					<tr align="center" bgcolor="skyblue">
					<th><h4>S.N</h4></th>
					
					<!--<th><h4>Total order</h4></th>-->
					<th><h4>Customer Name</h4></th>
					<th><h4>Product Id</h4></th>
					<th><h4>Total Amount</h4></th>
					<th><h4>Order Date</h4></th>
					
					
					
					</tr>
					
					<?php
					
					if(isset($_POST['submit']))
					{
						
					
              $link = mysql_connect('localhost', 'root', '') or die('Connection error');
                 mysql_select_db("letsshop");
				 
				  $b1=$_POST['birthdate'];
				   $b2=$_POST['birthdate1'];


                  $res=mysql_query("select customer_name,product_id,total_amount,order_date from orders where order_date BETWEEN '$_POST[birthdate]' AND '$_POST[birthdate1]' ",$link)or die(mysql_error);

                    
                     $i=0;
                   while($row=mysql_fetch_array($res))
				   {
					    $cemail=$row['customer_name'];
						$cid=$row['product_id'];
						$camount=$row['total_amount'];
						$od=$row['order_date'];
						
				
					   
					 
					  
					   
					   
					   $i++;
					
					   
					   
					   
				   
					
					?>
					
					
					<tr align="center">
					<td><h6><?php  echo $i ;?></h6> </td>
					
					<td><h6><?php  echo $cemail ;?></h6>  </td>
					<td><h6><?php  echo $cid ;?></h6> </td> 
					<td><h6><?php  echo $camount ;?></h6> </td> 
					<td><h6><?php  echo $od ;?></h6> </td> 
					
					
					
					
					
					
					
					
					</tr>
					
					
					
				   <?php } ?>
				   
				   
				 
				   
				   
				
				   
					<?php } ?>
					
					
					   </table>
                <div class="block">
                    
                   

                        
                    
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
        <p>
            Copyright <a href="">LetsSHOP Admin</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
