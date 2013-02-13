<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>


    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
	
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic' rel='stylesheet' type='text/css'>
	
    <script src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>js/tms-0.4.1.js"></script>
    <script src="<?php echo base_url(); ?>js/jcarousellite.js" type="text/javascript"></script>
  </head>

  <body>

    <div class="container">
	<header>
		<div class="head-content">
			<div class="row-fluid">
			
				<div class="span6 pull-right nav-align">
						<ul class="nav nav-pills nav-property">
							<li class="active"><a href="<?php echo base_url(); ?>index.html">Home</a></li>
							<li><a href="<?php echo base_url(); ?>">admission</a></li>
							<li><a href="<?php echo base_url(); ?>">programs</a></li>
							<li><a href="<?php echo base_url(); ?>">about us</a></li>
							<li><a href="<?php echo base_url(); ?>">news</a></li>
							<li><a href="<?php echo base_url(); ?>">Contacts</a></li>
						</ul>    				
				</div>
				
				<div class="span3 pull-left logo-align">
				<img src="images/logo-small.png" />
			</div>
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
	
	<div class="mca">
Department Of <span style="color:#a6b032;"> MCA</span>
</div>
	
	
	
    </div> <!-- /container -->
	<script>
      $(window).load(function(){
          $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              playBu:false,
              duration:1000,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:6000,
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
