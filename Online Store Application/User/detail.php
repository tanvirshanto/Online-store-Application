
<?php

$link = mysql_connect('localhost', 'root', '') or die('Connection error');
mysql_select_db("letsshop");
$res=mysql_query("UPDATE views SET Hits=Hits+1 WHERE product_name='$_GET[v]'",$link)or die(mysql_error());



?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Let's Shop:Just Order Everything
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
     <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="index.html" class="btn btn-success btn-sm" data-animate-hover="shake">Welcome</a>  
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="register.html">Register</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="username" name="uname" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password" name="pass" required>
                            </div>
							



                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>
							

                        </form>

                        <p class="text-center text-muted"><a href="Forget_Password.html"><strong>Forget Password?</strong></a>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

   <!-- *** NAVBAR ***
 _________________________________________________________ -->

   <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="img/logo.gif" alt="Obaju logo" class="hidden-xs">
                    <img src="img/logo-small.gif" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
               <!-- <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div> -->
            </div>
            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.html">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Furniture <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Bedroom</h5>
                                            <ul>
                                                <li><a href="category.php?u=Double Bed">Double Bed</a>
                                                </li>
                                                <li><a href="category.php?u=Single Bed">Single Bed</a>
                                                </li>
                                                <li><a href="category.php?u=Cupboard">Cupboard</a>
                                                </li>
                                                <li><a href="category.php?u=Dressing Table">Dressing Table</a>
                                                </li>
												<li><a href="category.php?u=Wardrobe">Wardrobe</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Diningroom</h5>
                                            <ul>
                                                <li><a href="category.php?u=Dining Set">Dining Set</a>
                                                </li>
                                                <li><a href="category.php?u=Chair">Chair</a>
                                                </li>
                                                <li><a href="category.php?u=ShowCase">ShowCase</a>
                                                </li>
                                                <li><a href="category.php?u=Dinner Wagon">Dinner Wagon</a>
                                                </li>
												<li><a href="category.php?u=Dinner Table">Dinner Table</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Office</h5>
                                            <ul>
                                                <li><a href="category.php?u=Office Chair">Chair</a>
                                                </li>
                                                <li><a href="category.php?u=Table">Table</a>
                                                </li>
                                                <li><a href="category.php?u=Drawer">Drawer</a>
                                                </li>
                                                <li><a href="category.php?u=Shelf">Shelf</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Living Room</h5>
                                            <ul>
                                                <li><a href="category.php?u=Center Table">Center Table</a>
                                                </li>
                                                <li><a href="category.php?u=Sofa">Sofa</a>
                                                </li>
												<li><a href="category.php?u=Tv Cabinet">Tv Cabinet</a>
                                                </li>
                                            </ul>
                                            <h5>Miscellaneous</h5>
                                            <ul>
                                                <li><a href="category.php?u=Kitchen Cabinet">Kitchen Cabinet</a>
                                                </li>
                                                <li><a href="category.php?u=Children bed">Children bed </a>
                                                </li>
                                                <li><a href="category.php?u=Others">Others</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Fashion<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Men</h5>
                                            <ul>
                                                <li><a href="category.php?u=Men T-shirts">T-shirts</a>
                                                </li>
                                                <li><a href="category.php?u=Men Shirts">Shirts</a>
                                                </li>
                                                <li><a href="category.php?u=Men Pants">Pants</a>
                                                </li>
                                                <li><a href="category.php?u=Watches">Watches</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Women</h5>
                                            <ul>
                                                <li><a href="category.php?u=Salwar Kameez">Salwar Kameez </a>
                                                </li>
                                                <li><a href="category.php?u=Saree">Saree</a>
                                                </li>
                                                <li><a href="category.php?u=Women Shirts">Shirts</a>
                                                </li>
                                                <li><a href="category.php?u=Women Pants">Pants</a>
                                                </li>
                                               
												
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="category.php?u=Men Shoes">Men Shoes</a>
                                                </li>
                                                <li><a href="category.php?u=Men Sandals">Men Sandals</a>
                                                </li>
                                                <li><a href="category.php?u=Women Sandals">Women Sandals</a>
                                                </li>
                                            </ul>
                                        
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="img/banner.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="img/banner2.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Home Decor<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Decoration</h5>
                                            <ul>
                                                <li><a href="category.php?u=Curtain">Curtain</a>
                                                </li>
                                                <li><a href="category.php?u=Show Pieces">Show Pieces</a>
                                                </li>
                                                <li><a href="category.php?u=Home Lighting">Home Lighting</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Electronics</h5>
                                            <ul>
                                                <li><a href="category.php?u=Refrigerator">Refrigerator</a>
                                                </li>
                                                <li><a href="category.php?u=Television">Television</a>
                                                </li>
                                                <li><a href="category.php?u=Washing Machine">Washing Machine</a>
                                                </li>
												<li><a href="category.php?u=Air Conditioner">Air Conditioner</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
										
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    
                </div>
                <!--/.nav-collapse -->

                
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home></a>
                        </li>
                        
						<?php/*
                        
						echo  $name;
						*/
                    
					    ?>
						
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                     <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <a href="#">Men <span class="badge pull-right"></span></a>
                                    <ul>
                                        <li><a href='category.php?u=Men T-Shirts'>T-shirts</a>
                                        </li>
                                        <li><a href="category.php?u=Men Shirts">Shirts</a>
                                        </li>
                                        <li><a href="category.php?u=Men Pants">Pants</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Ladies  <span class="badge pull-right"></span></a>
                                    <ul>
                                        <li><a href="category.php?u=Women Shirts">Shirts</a>
                                        </li>
                                        <li><a href="category.php?u=Salwar Kameez">Salwar Kameez </a>
                                        </li>
                                        <li><a href="category.php?u=Women Pants">Pants</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Furniture <span class="badge pull-right"></span></a>
                                    <ul>
                                        <li><a href="category.php?u=Double Bed">Double Bed</a>
                                        </li>
                                        <li><a href="category.php?u=Dining Set">Dining Set</a>
                                        </li>
                                        <li><a href="category.php?u=Dressing Table">Dressing Table</a>
                                        </li>
                                        <li><a href="category.php?u=Sofa">Sofa</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>


                    

					
					<div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>
				
				<!-- *** MENUS AND FILTERS END *** -->
				
				<!--product details-->
				
				<?php
                     $link = mysql_connect('localhost', 'root', '') or die('Connection error');
mysql_select_db("letsshop");
$id=$_GET['u'];
$name=$_GET['v'];
 $res=mysql_query("SELECT * FROM products Where product_id='".$id."'",$link)or die(mysql_error);


	// mysql_close($link);
							
					            // while($rows as $fieldinfo)
							//foreach($rows as $fieldinfo)
							
								/*$price=stripslashes($fieldinfo['price']);
								$desc=stripslashes($fieldinfo['description']);
								$loc=stripslashes($fieldinfo['img_loc']);*/
						         while($row=mysql_fetch_array($res)){
						  
						         $price=$row['price'];
								$desc=$row['description'];
								$loc=$row['img_loc']
		
						  
						  ?>
				
				
				
				
				
                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="Admin/<?php echo $loc ?>" alt="" class="img-responsive">
                            </div>

                           

                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center"><?php print $desc; ?></h1>
                                <p class="goToDescription">Price & Details Are Given According to the Shop's Orginal Product
                                </p>
                                <p class="price"><?php print 'Tk '.$price.' /-'; ?></p>

                                <p class="text-center buttons">
                                    <a href="basket.php?u=<?php echo $id  ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a> 
                                    <!--<a href="basket.php" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>  -->
                                </p>
								
								
								<div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <a href="<?php echo $loc ?>" class="thumb">
                                        <img src="Admin/<?php echo $loc ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="<?php echo $loc ?>" class="thumb">
                                         <img src="Admin/<?php echo $loc ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                
                            </div>
								
								
								
								
								
								


                            </div> 
                        </div>
                    </div>

							<?php 
							} mysql_close($link);?>
				

                 

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
      
	  
	  <!-- *** BLOG HOMEPAGE ***
 _________________________________________________________ -->

            <div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-12">
                        
						<img src="img/letshop2.png" alt="letshop2 logo" class="hidden-xs"><br/>

                        
                        </p>
                    </div>
                </div>
            </div>


        </div>
		
		
        <!-- /#content -->

       <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="faq.html">FAQ</a>
                            </li>
                            <li><a href="contact.php">Contact us</a>
                            </li>
                        </ul>

                        

                     

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>What's New</h4>

                       

                        <h5>Difficult To Use?</h5>
                        <ul>
                            <li><a href="register.html">Register Now</a>
                            </li>
                            <li><a href="category.php?u=Television">Discounted Products</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Let's Shop Ltd.</strong>
                            <br>American International University-Bangladesh (AIUB) 
                            <br>House 83/B, Road 4, 
                            <br>Kemal Ataturk Avenue, Banani,
                            <br>Dhaka 1213
                            <br>
                            <strong>Bangladesh</strong>
                        </p>


                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>

                        <p class="text-muted">We are Trying To make your life more easy & comfortable with our greater effort. Thank You for visiting us.</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

			    <button class="btn btn-default" type="button">Subscribe!</button>

			</span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

       
<!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2016 Root Over Sixteen.</p>
                </div>
                
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



      



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>






</body>

</html>