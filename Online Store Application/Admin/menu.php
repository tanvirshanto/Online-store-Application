

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
                               
							    <li><a href=" regular_customer_analysis.php"><h5>Regular Customer<h5></li> 
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
                <div class="block">
                    
                    
                    <h4>ABOUT LETS SHOP</h4>
					
					
					<p><h6><font size="20" >THE Letsshop  SERVICES AND ALL INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) AND OTHER S
ERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE Letsshop  SERVICES ARE PROVIDED BY AMA
ZON ON AN "AS IS" AND "AS AVAILABLE" BASIS, UNLESS OTHERWISE SPECIFIED IN WRITING. Letsshop  MAKES NO
 REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THE Letsshop  
 SERVICES, OR THE INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) OR OTHER SERVICES
 INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE Letsshop  SERVICES, UNLESS OTHERWISE SPECIFIED 
 IN WRITING. YOU EXPRESSLY AGREE THAT YOUR USE OF THE Letsshop  SERVICES IS AT YOUR SOLE RISK.

TO THE FULL EXTENT PERMISSIBLE BY APPLICABLE LAW, Letsshop  DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, 
INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.
 Letsshop  DOES NOT WARRANT THAT THE Letsshop  SERVICES, INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE)
 OR OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE Letsshop  SERVICES, Letsshop 'S SERVERS 
 OR ELECTRONIC COMMUNICATIONS SENT FROM Letsshop  ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. Letsshop  WILL NOT 
 BE LIABLE FOR ANY DAMAGES OF ANY KIND ARISING FROM THE USE OF ANY Letsshop  SERVICE, OR FROM ANY INFORMATION, 
 CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) OR OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE
 TO YOU THROUGH ANY Letsshop  SERVICE, INCLUDING, BUT NOT LIMITED TO DIRECT, 
INDIRECT, INCIDENTAL, PUNITIVE, AND CONSEQUENTIAL DAMAGES, UNLESS OTHERWISE SPECIFIED IN WRITING.

CERTAIN STATE LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR 
LIMITATION OF CERTAIN DAMAGES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS, 
EXCLUSIONS, OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MIGHT HAVE ADDITIONAL RIGHTS.
THE Letsshop  SERVICES AND ALL INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) AND OTHER S
ERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE Letsshop  SERVICES ARE PROVIDED BY AMA
ZON ON AN "AS IS" AND "AS AVAILABLE" BASIS, UNLESS OTHERWISE SPECIFIED IN WRITING. Letsshop  MAKES NO
 REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THE Letsshop  
 SERVICES, OR THE INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) OR OTHER SERVICES
 INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE Letsshop  SERVICES, UNLESS OTHERWISE SPECIFIED 
 IN WRITING. YOU EXPRESSLY AGREE THAT YOUR USE OF THE Letsshop  SERVICES IS AT YOUR SOLE RISK.</br> </br>
 Copyright LetsSHOP Admin. All Rights Reserved.</font></h6></p>


                    
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
