<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CMR MCA</title>


    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
	
	<script src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>

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
							<li class="active drpdwn"><a href="#" class="account">about us</a>
								<div class="submenu">
								<ul class="root">
									<li ><a href="#Dashboard" >Dashboard</a></li>
									<li ><a href="#Profile" >Profile</a></li>
									<li ><a href="#settings">Settings</a></li>
									<li ><a href="#feedback">Send Feedback</a></li>
								</ul>
								</div>
							</li>
							<li><a href="<?php echo base_url(); ?>">admission</a></li>
							<li><a href="<?php echo base_url(); ?>">programs</a></li>
							<li><a href="<?php echo base_url(); ?>">news</a></li>
							<li><a href="<?php echo base_url().'contact'; ?>">Contacts</a></li>
						</ul>    				
				</div>
				
				<div class="span3 pull-left logo-align">
				<img src="<?php echo base_url(); ?>images/logo-small.png" />
			</div>
		</div>	
		</div>
	</header>
	
	<div class="mca">
Department Of <span style="color:#a6b032;"> MCA</span>
</div>

<div class="content">
<div class="span10">
<div class="span6 pull-right">
			<h2>About Department</h2>
			<hr />
			<p>
				The CMR Jnanadhara Trust was established in 1991 as a tribute to the late Sri Chikka Muniyappa Reddy, a great visionary and philanthropist who believed that every individual deserves access to a quality education. In accordance with this vision, the CMR educational institutes were founded, to give every student a chance at an outstanding, value-based and well-rounded education. The Trust supports and manages all the activities of the CMR Group of Institutions. The CMR Group is a unique educational conglomerate, which comprises twelve Higher Education institutions, three schools, a Pre-University College, and various Centres of Excellence in Research. The CMR campuses are located in prominent and easily accessible areas across the city of Bangalore, India. CMR has also partnered with the National Education Trust to found the NPS International School on a lush 6 acre campus in Singapore.

CMR Group of Institutions offers a wide range of courses from the Montessori level, K-12 Schools to Post Graduate and PhD programmes. Areas of study include engineering, education, law, management, media studies, biosciences, business administration, psychology, nursing and paramedical. Overall, there are 23 different courses offered at the undergraduate level, and 22 courses at the postgraduate level. These institutions promote academic and professional excellence in their respective fields.

At CMR, we are continuously innovating our curriculum delivery, and strive to bring the best educational experience to the classroom. Our students benefit from the vast network of resources and cross competencies that the CMR Group has to offer. With a total of approximately 15000 students from across India and an international student body from over 58 countries, the academic environment is incredibly diverse and offers many rich opportunities for learning.
			</p>
		</div>
			<h2>Vision</h2>
			<hr />
			<p>
			To create, build and provide value added educational services through teaching, training, 
			research, consultancy and entrepreneurship within and beyond the curriculum, by means of quality 
			infrastructure, material and human resources to attain intellectual heights.
			</p>
			
			<div class="clear"></div>
		
			<h2>Mission Statement</h2>
			<hr />
			<p>
				<ul>
				<li>Give the community genuine, talented, upto date, motivated and trained professionals.</li>
<li>Develop all institutions as model institutions which will enable the students or the parents to realise their ambition / dream in a more structured and positive manner.</li>
<li>Inculcate the right values, scientific temperament and social commitment amongst the students and ensure they become right partners of progress.</li>
				</ul>
			</p>
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
	<script type="text/javascript" >
$(document).ready(function()
{

$(".drpdwn").mouseenter(function()
{
$(".submenu").show();
}).mouseleave(function(){
setTimeout(function(){
$(".submenu").hide();
}, 800);
});

//Mouse click on sub menu
$(".submenu").mouseup(function()
{
return false
});

//Mouse click on my account link
$(".account").mouseup(function()
{
return false
});


//Document Click
$(document).mouseup(function()
{
$(".submenu").hide();
$(".account").attr('id', '');
});
});
</script>
  </body>
</html>
