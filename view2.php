<?php include_once('conn.php'); 
include_once('classlist.php');
require_once('classhotel.php');
require_once('classvehicle.php');
$packobj=new Package;
$destname=$_POST['destname'];

$b=array();
$b=$packobj->getpackage($destname);

	
		?>
		
	
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Package view</title> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Staple Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Yantramanav:100,300,400,500,700,900" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body> 
	<!-- banner -->
	<div class="banner">
		<!-- header -->
		<div class="header">
			<div class="w3ls-header"><!-- header-one --> 
				<div class="container">
					<div class="w3ls-header-left">
						
					</div>
					<div class="w3ls-header-right">
						<ul> 
							
							<li class="head-dpdn">
								<a href="offers.html"><i class="fa fa-gift" aria-hidden="true"></i> New Offers</a>
							</li> 
							<li class="head-dpdn">
								<a href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div> 
				</div>
			</div>
			<!-- //header-one -->    
			<!-- navigation -->
			<div class="navigation agiletop-nav">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header w3l_logo">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>  
							<h1><a href="#"><img src="log.png" /></a></h1>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index1.php" class="active">Home</a></li>	
								
								<li><a href="about.html">About</a></li> 
								  
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</div>
						
					</nav>
				</div>
			</div>
			<!-- //navigation --> 
		</div>
		<!-- //header-end --> 
		<!-- banner-text -->
		<div class="banner-text">	
			<div class="container">
				<h2>Travel......</h2><br> <span><h2>Along with us!!!</h2></span>
				
			</div>
		</div>
	</div>
	<div class="container">	
		<ol class="breadcrumb w3l-crumbs">
			<li><a href="index1.php"><i class="fa fa-home"></i> Home</a></li> 
			<li class="active">Packages</li>
		</ol>
	</div>
	<div class="products">	 
		<div class="container">
								<div class="products">	 
		                            <h3 class="w3ls-title w3ls-title1">Available Packages</h3>  
				    </div>
				</div>
				</div>
	<!-- //banner -->   
	<!-- add-products -->
	<div class="products">	 
		<div class="container">
			
					
					<div class="clearfix"> </div>
				</div>
				<?php for($k=0;$k<$b[1];$k++)
                  {
	                  
							?>
				<div class="products-row">
					<div class="col-sm-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
								  <img src="<?php echo $b[0][$k][1]?>" class="img-responsive" alt="img">
									<div class="agile-product-text">              
										<h5>Packageid:<?php echo $b[0][$k][0];
										$res=$b[0][$k][0];?></h5>  
										
									</div> 
								</div>
								<div class="back">
									<h4><?php $hid= $b[0][$k][5];
									$hotelobj=new Hotel;
									$y=array();
									$y=$hotelobj->gethotel($hid);
									echo $y[0][0]; echo ','; echo  $y[0][1];?></h4>
									<p><?php $vid= $b[0][$k][6];
									$vehicleobj=new Vehicle;
									$y=$vehicleobj->getvehicle($vid);?>Vehicle in package:
									<?php echo $y;?></p>
									<p><?php echo $b[0][$k][3]?> Nights and<?php echo $b[0][$k][2]?> Days.</p>
									<h6><?php echo $b[0][$k][4]?><sup></sup></h6>
									
									
										
										<button type="submit"  name="sub" class="w3ls-cart pw3ls-cart" >
										
										Delete Package</button>
										<?php
										if(isset($_POST['sub']))
										{
											$x1= new Connect;
											$c1=$x1->getconnect();
											$sql2="Delete  from package where package_id='$res'";
											echo $sql2;
											$result1= $c1->query($sql2);
											
											if($result1->num_rows>0)
											{
												
													
													echo "<script type='text/javascript'>alert('Package Successfully Deleted');</script>";
												include('admin.php');
											}
										}
										?>
										<p></p>
								
									
								</div>
							</div>
						</div> 
					</div> 
					<?php }
                               ?>
					<div class="clearfix"> </div>
				</div>
		 <div class="clearfix"> </div> 
	</div>
	
	<!-- //add-products --> 
	<!-- order -->   	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="wthree-order">  
		<!--<img src="images/i2.jpg" class="w3order-img" alt=""/>-->
		<div class="container">
			<h3 class="w3ls-title">How To book package online </h3>
			<p class="w3lsorder-text">Get to your favourite destination in just 4 steps.</p>
			<div class="order-agileinfo">  
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-map" aria-hidden="true"></i> 
						<h5>Search Destination</h5>
						<span>1</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-cutlery" aria-hidden="true"></i> 
						<h5>Choose Package</h5>
						<span>2</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-credit-card" aria-hidden="true"></i>
						<h5>confirm booking</h5>
						<span>3</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 order-w3lsgrids"> 
					<div class="order-w3text"> 
						<i class="fa fa-truck" aria-hidden="true"></i>
						<h5>just travel</h5>
						<span>4</span>
					</div>
				</div>
				<div class="clearfix"> </div> 
			</div>
		</div>
	</div>
	
	<br>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="copyw3-agile"> 
		<div class="container">
			<p>All rights reserved | Design by <a href="https://vacxcursion.herokuapp.com">vacXcursion</a></p>
		</div>
	</div>
	<!-- //footer --> 
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) { 
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->	
	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->  
	<!-- start-smooth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>  
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	  
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>