<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CMR MCA</title>


    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  </head>

  <body id="p2">

    <div class="container">
	<header>
		<div class="head-content">
			<div class="row-fluid">
			
				<div class="span6 pull-right nav-align">
						<ul class="nav nav-pills nav-property">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li><a href="<?php echo base_url().'about'; ?>">about us</a></li>
							<li><a href="<?php echo base_url(); ?>">admission</a></li>
							<li><a href="<?php echo base_url(); ?>">programs</a></li>
							<li><a href="<?php echo base_url(); ?>">news</a></li>
							<li class="active"><a href="<?php echo base_url().'contact'; ?>">Contacts</a></li>
						</ul>    				
				</div>
				
				<div class="span3 pull-left logo-align">
				<img src="images/logo-small.png" />
			</div>
		</div>	
		</div>
	</header>
	
	<div class="mca">
Department Of <span style="color:#a6b032;"> MCA</span>
</div>

<div class="content">
<div class="span10">
	<div class="span3 pull-right">
			<h2>Address</h2>
			<hr />
				<strong>CMR Institute of Technology</strong>
<p>132 AECS Layout,<br />
IT Park Road<br />
Bangalore - 560 037<br />
Telephone : 28524477, 28524466<br />
Telefax : 28524477<br />
E-Mail : <a href="mailto:info@cmredu.com">info@cmredu.com</a></p>
		</div>
				<div class="span4 pull-right">
			<h3>&nbsp;</h3>
			
<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?hl=en&amp;ie=UTF8&amp;q=cmrit&amp;fb=1&amp;gl=in&amp;hq=cmrit&amp;hnear=0x3bae1670c9b44e6d:0xf8dfc3e8517e4fe0,Bangalore,+Karnataka&amp;cid=0,0,8689206662462636658&amp;ll=12.966619,77.711763&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe>
</small>
		</div>
			<h2>Contact</h2>
			<hr />
					  <form action="" method="POST" id="contact_form">
						<div id="js-messages"></div>
            <div class="control-group">
                          
                <input type="text" class="input-large" id="inputFullname" placeholder="Name :">
             
            </div>

            <div class="control-group">
                         
                <input type="text" class="input-large" id="inputEmail" placeholder="Email :">
              
            </div>

            <div class="control-group">
                           
                <input type="text" class="input-large" id="inputSubject" placeholder="Phone :">
              
            </div>

            <div class="control-group">
                           
                <textarea rows="6" class="input-large" placeholder="Message :" id="inputMessage"></textarea>
              
            </div>

            <div class="control-group">
    			
     				 <input type="submit" class="btn" value="Send Message">
    			       
        		<br class="clear">                
        	</div>
            </form>
		</div>
</div>



<footer>
	<div class="container_12">
		<div class="span8">
		All Rights Reserved &copy;		
		</div>
	</div>
</footer>

	
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
