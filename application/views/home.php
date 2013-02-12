<!DOCTYPE html>
<html lang="en">
<head>
	<title>CMR MCA</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/style.css">
	
	<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic' rel='stylesheet' type='text/css'>

    <script src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>js/tms-0.4.1.js"></script>
    <script src="<?php echo base_url(); ?>js/jcarousellite.js" type="text/javascript"></script>
</head>
<body>
<div class="main">
<!--==============================header=================================-->
<header>
	<div class="head-content">
		<div class="container_12">
			<div class="grid_12">
				<div class="fright">
					<div class="clear"></div>
					<nav>
						<ul class="sf-menu">
							<li class="current"><a href="<?php echo base_url(); ?>index.html">Home</a></li>
							<li><a href="<?php echo base_url(); ?>">admission</a>
							</li>
							<li><a href="<?php echo base_url(); ?>">programs</a></li>
							<li><a href="<?php echo base_url(); ?>">about us</a></li>
							<li><a href="<?php echo base_url(); ?>">news</a></li>
							<li><a href="<?php echo base_url(); ?>">Contacts</a></li>
						</ul>    
					</nav>
				</div>
				<div class="extra-wrap">
					<img src=<?php echo base_url(); ?>images/logo-small.png />
					
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	            <div id="slide">
				<div class="slider">
					<ul class="items">
				    <li><img src="<?php echo base_url(); ?>images/slide.jpg" alt="" />
						 <div class="banner">
                             <div class="banner-inner">
                                <span><strong>Career</strong> opportunities</span>
                                <p>Vivamus et metus non lorem ullamcorper aliquam tempus molestie nunc.</p>
                             </div>
                         </div>
					</li>
				    <li><img src="<?php echo base_url(); ?>images/slide-1.jpg" alt="" />
						<div class="banner">
							<div class="banner-inner">
							        <span><strong>Knowledge</strong>  is power!</span>
							        <p>Vivamus et metus non lorem ullamcorper aliquam tempus molestie nunc.</p>
							</div>
						</div>
					</li>
                    <li><img src="<?php echo base_url(); ?>images/slide-2.jpg" alt="" />
						<div class="banner">
							<div class="banner-inner">
							        <span><strong>It's never </strong>too late to study!</span>
							        <p>Vivamus et metus non lorem ullamcorper aliquam tempus molestie nunc.</p>
							</div>
						</div>
					</li>
					</ul>
				</div>
			 </div>
	
</header>
<div class="blocks wrapper">
	<div class="container_12">
		          <div class="carousel-box">
            <span>Upcoming Events</span>
            <a id="prev"></a>
	  	    <a id="next"></a>
            <div class="carousel">
                <ul>
                    <li>
                        <img src="<?php echo base_url(); ?>images/page-img.jpg" alt="">
                        <a href="#">Class aptent taciti<br> sociosqu ad litora torquent.</a>
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>images/page-img.jpg" alt="">
                        <a href="#">Phasellus pharetra<br>interdum ante sit amettinc. </a>
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>images/page-img.jpg" alt="">
                        <a href="#">Aenean pulvinar porta velit <br> quis scelerisque.</a>
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>images/page-img.jpg" alt="">
                        <a href="#">dolore magna aliquam <br> erat volutpat.</a>
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>images/page-img.jpg" alt="">
                        <a href="#">Class aptent taciti<br> sociosqu ad litora torquent.</a>
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>images/page-img.jpg" alt="">
                        <a href="#">Phasellus pharetra<br>interdum ante sit amettinc. </a>
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>images/page-img.jpg" alt="">
                        <a href="#">Aenean pulvinar porta velit <br> quis scelerisque.</a>
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>images/page-img.jpg" alt="">
                        <a href="#">dolore magna aliquam <br> erat volutpat.</a>
                    </li>
                </ul>
            </div>
	</div>
</div>
</div>
<section id="content">
	<div class="container_12 wrapper">
		<div class="grid_4">
			<div class="block">
				<p class="font-3">Block 1</p>
				<ul class="top-1 list">
					<li><a href="#">List1</a></li>
					<li><a href="#">List2</a></li>
					<li><a href="#">List3</a></li>
					<li><a href="#">List3</a></li>
					<li><a href="#">List4</a></li>
				</ul>
			</div>
		</div>
		<div class="grid_4">
			<h2>Block 2</h2>
		</div>
		<div class="grid_4">
			<h2>Block 3</h2>
		</div>
	</div>
	<div class="clear"></div>
</section> 
<aside class="wrapper">
	<div class="container_12">
		<div class="grid_12">
		All Rights Reserved &copy;		
		</div>
	</div>
</aside>
</div>
<br />
	    <script>
      $(window).load(function(){
          $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:1000,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:'fromRight',
		      waitBannerAnimation:false,
			  progressBar:false
          })
		  $(function() {
             $(".carousel").jCarouselLite({	
                  btnNext: "#next",
                  btnPrev: "#prev",
                  easing:"easeOutBack",
                  speed: 700
             });
          });		
		  $('.cycle-div').cycle({ 
		    fx:     'fade', 
		    speed:  1000, 
		    timeout: 0, 
		    next:   '#next2', 
		    prev:   '#prev2' 
		 });
      })
    </script>
</body>
</html>