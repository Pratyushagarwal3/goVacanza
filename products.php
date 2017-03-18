
<!DOCTYPE html>
<html lang="en">
<head>
<title>vacXcursion</title>
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
	
	<!-- //banner -->    
	
	<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right"> 
				
				<div class="products-row">
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
								<div class="front"> 
									<img src="images/g6.jpg" class="img-responsive" alt="img">
									<div class="agile-product-text">              
										<h5>Package 1</h5>  
									</div> 
								</div>
								<div class="back">
									<h4>GOA</h4>
									
							<br>
							
							<br>
							<br>
							<br><br>
										
										<a href="#" data-toggle="modal" data-target="#myModal1">More</a>
									
								</div>
							</div>
						</div> 
					</div> 
					
					
					
					 
					
					
					
					<div class="clearfix"> </div>
				</div>
			</div>
			
			<div class="clearfix"> </div> 

	
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div>
				<section>
				<div class="modal-body">
				  <div><h3>Details of package</h3>
					<div class="row">
                        <div id="ha"> 
					        <div class="col-md-6">fdsaf
										  <div class="row">
										  <div class="col-md-6"><h4>Destination name</h4></div>
										  <div class="col-md-6"> c\sd</div></div>
										
																	
											
								  
											<div class="row">
												
												  
												  <div class="col-md-6"><h4>name of hotel</h4></div>
												  <div class="col-md-6"> c\sd</div>
																			
													
											</div>
									<div class="row">
										
										  
										  <div class="col-md-6"><h4>type of hotel</h4></div>
										  <div class="col-md-6"> c\sd</div>
										
																	
											
									</div>
									<div class="row">
										
										  
										  <div class="col-md-6"><h4>no. of rooms</h4></div>
										  <div class="col-md-6"><input input class="form-control" type ="number" name="nor" placeholder="" > </div>
										
																	
											
									</div>
									<div class="row">
										
										  
										  <div class="col-md-6"><h4>ttype of room</h4></div>
										  <div class="col-md-6"> c\sd</div>
										
																	
											
									</div>
									<div class="row">
									   
										  
										  <div class="col-md-6"><h4>vehicle</h4></div>
										  <div class="col-md-6"> c\sd</div>
									</div>
										<input type ="button" id="show" value="Customize Package">
										<button type="submit"class="btn btn-primary">Book Package</button>									
																	
											
						    </div>
						</div>
					
					
					
					
					
					
						<div id="nr">		 <div class="col-md-6"><h3>customize your package</h3>
												  <div class="row">
												  <div class="col-md-6"><h4>change hotel</h4></div>
												  <div class="col-md-6"> <input type ="button" id="chot" value="change hotel"></div></div>
												
																			
													
										  
													<div class="row">
														
														  <div class="col-md-6"><h4>change type of room</h4></div>
														  <div class="col-md-6"> c\sd</div>
														
																					
															
													</div>
													<div class="row">
													   
														  <div class="col-md-6"><h4>change type of vehicle</h4></div>
														  <div class="col-md-6"> c\sd</div>
														
																					
															
													</div>
													
											</div>
						</div>					
											
					</div></div><br><br><br><br><br>
					<div><div><div class="col-ld-12">
					    <div id="pr"><div class ="row">
						     <h3>list of hotels</h3>
						    
						        
								  <div class="row">
									  <div class="row-height">
										<div class="col-xs-3 col-height">
										    <div class="col-md-3">
											   fetch image from db</div>
											<div class="col-md-6">
                                               name of hotel
                                               type of hotel</div>
											  <div class="col-md-3">
											  <input type ="button" id="show" value="price of package from db">
											  </div>
										</div>
									  </div>
								  </div>
							</div>
						</div>	
					
				        </div></div></div>
			</div>
		</div>
			</div>
	</div>	</div>									
											
											<script>
		$(document).ready(function()
		{
		       
			   $("#nr").hide();
			   $("#pr").hide();
			   
			$("#show").click(function()
			{
			$("#nr").show();
			}
			)
			$("#chot").click(function()
			{
			$("#pr").show();
			}
			)
		});
</script>

    <script src="js/bootstrap.js"></script>
</body>
</html>