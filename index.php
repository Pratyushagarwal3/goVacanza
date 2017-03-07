
<!DOCTYPE html>
<html>
<head>
	<title>vacXcursion</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

</head>
<body>
<!--header-->
<!--sticky-->
	 <div class="header-top">
		 <!--container-->
		  <div class="container">
			 <div class="top-nav">
						<div class="logo">
						<a href="#"><img src="images/log.png" id="section-1" class="img-responsive" alt=""/></a>
						</div>
						<div class="menu">
						<ul id="nav">
							 <li><a href="#section-1">Home</a></li>
							 <li><a href="#section-2">About</a></li>
							 <li><a href="#section-3">Top tours</a></li>
							 <li><a href="#section-4">Contact</a></li>
							 
 <div class="clearfix"></div>
						 </ul>
						 </div>
			 </div>
			  <div class="clearfix"> </div>
			

		 </div>
		 <!--/container-->
	 </div>
<!--/sticky-->
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/banner.png" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">HEAVEN BEACH RESORT</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/beach2.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">HEAVEN BEACH RESORT</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/beach3.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">HEAVEN BEACH RESORT</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/beach4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Get Away On This Weekend</a></h2>
							<lable></lable>
							<h1><a href="#">HEAVEN BEACH RESORT</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	
<!--About-->
     <div class="about section" id="section-2">
	  <div class="about-head text-center">
	  <h3>ABOUT US</h3>
	  <span></span><img src="images/about-img.png" alt=""><span></span>
	  </div>
	   <div class="container">		  
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon1"></span>Best Destinations</h4>
			 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
			 doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
		 </div>
		 <div class="col-md-4 about-grids grid2">
			 <h4><span class="icon2"></span>Trust & Safety</h4>
			 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
			 doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
		 </div>
		 <div class="col-md-4 about-grids">
			 <h4><span class="icon3"></span>Combine & Save</h4>
			 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
			 doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
		 </div>
	 </div>
</div>
<!--/About-->
<!--top-tours-->	
<div  class="section" id="section-3">
<div id="portfolio" class="portfolio">
   <div class="top-tours-head text-center">
		  <h3>TOP TOURS</h3>
		  <span></span><img src="images/star.png" alt=""><span></span>
		  
		  </div>
	   
	     <div id="portfoliolist">
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<!a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t1.jpg" class="img-responsive" alt=""/></a>
							<div class="tour-caption">
							<span> </span>
							<p>Phu Quoc Resort & Spa</p>
							</div>

						</div>
					</div>				
					<div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t2.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Phu Quoc Resort & Spa</p>
						     </div>

						</div>
					</div>		
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t3.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Phu Quoc Resort & Spa</p>
							 </div>
						</div>
					</div>				
					<div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t4.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							<p>Phu Quoc Resort & Spa</p>
							</div>
						</div>
					</div>	
					<div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t5.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Phu Quoc Resort & Spa</p>
							 </div>
						</div>
					</div>			
					<div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t6.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							<p>Phu Quoc Resort & Spa</p>
							</div>
						</div>
			      </div>
				  <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t7.jpg" class="img-responsive" alt=""/></a>
							<div class="tour-caption">
							<span> </span>
							<p>Phu Quoc Resort & Spa</p>
							</div>
						</div>
			      </div>
				  <div class="portfolio icon mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">		
							<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
						     <img src="images/t8.jpg" class="img-responsive" alt=""/></a>
							 <div class="tour-caption">
							 <span> </span>
							 <p>Phu Quoc Resort & Spa</p>
							 </div>
					   </div>
			      </div>
		   <div class="clearfix"></div>	
	  </div>
</div>
</div>  
<div  class="section" id="section-4">
<div class="fotter">	
	 <div class="container">
		 <div class="fotter-grids">
			 <div class="col-md-4 fotter-left">
			 <img src="images/log.png" alt="">
			
			 </div>
			 
			 </div>
			 <div class="col-md-4 fotter-right">
			 <h3>Contact Us -</h3>
			 <div class="social-icons">
			 <a href="#"><span class="facebook"> </span></a>
			 <a href="#"><span class="twitter"> </span></a>
			 <a href="#"><span class="googleplus"> </span></a>
			 <a href="#"><span class="pinterest"> </span></a>
			 <a href="#"><span class="instagram"> </span></a>
			 </div>
			 <div class="clearfix"></div>
	     </div>
		 <div class="clearfix"></div>
	 </div>
</div>
</div>  

 <div class="copyright text-center">
<p><a href="https://vacxcursion.herokuapp.com">www.vacXcursion.com</a></p>
</div> 
</body>
</html>






