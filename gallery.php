<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>


    <!-- Le styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery.lightbox-0.5.css" />
	
	<script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/jcarousellite.js" type="text/javascript"></script>
	<script src="js/slider-dropdown.js"></script>
	<script src="js/jquery.lightbox-0.5.pack.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  </head>

  <body id="p2">
    <div class="container">
	<header>
		<div class="head-content">
			<div class="row-fluid">
			
			
				<div class="span10 pull-right nav-align">
						<ul class="nav nav-pills nav-property">
							<li><a href="index.php">Home</a></li>
							<li id="about"><a href="#" class="account">about us</a>
								<div class="submenu">
								<ul class="root">
									<li ><a href="about.php">Vision</a></li>
									<li ><a href="about.php">Mission</a></li>
									<li ><a href="about.php">About Department</a></li>
									<li ><a href="about.php">Our Staffs</a></li>
									<li ><a href="course.php">Course Details</a></li>
								<li ><a href="admission.php">Admission</a></li>
								<li ><a href="contact.php">Contact Us</a></li>
								</ul>
								</div>
							</li>
							
							<li id="beyond"><a href="#" class="account">Beyond Syllabus</a>
								<div class="submenu">
								<ul class="root">
									<li ><a href="lifeskill.php">Life Skills</a></li>
									<li ><a href="extra.php">Extra Curricular</a></li>
									<li ><a href="counseling.php">Counseling</a></li>
									<li ><a href="guest.php">Guest Lectures</a></li>
									<li ><a href="icp.php">ICP Process</a></li>
									<li ><a href="newsletter.php">NewsLetter</a></li>
									<li ><a href="social.php">Social Concern</a></li>
									<li ><a href="technical.php">Technical Fest</a></li>
								</ul>
								</div>
								</li>
								<li><a href="placement.php">Placement</a></li>
							<li><a href="research.php">Research Initiatives</a></li>
							<li><a href="achievements.php">Achievements</a></li>
							<li><a href="alumni.php">Distinguished Alumni</a></li>
						</ul>    								
				</div>
				
				<div class="span2 pull-left logo-align">
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
			<h2>Gallery</h2>
			<hr />
			

<?php

$files = glob("images/gallery/".$_GET['album']."/*.*");

$title='';
for ($i=0; $i<count($files); $i++)
{
$num = $files[$i];

echo '
<div class="gallery-pic" style="background:url('.$num.') no-repeat 50% 50%;">
		<a href="'.$num.'" title="'.$title.'" target="_blank">'.$title.'</a>
		</div>
';
}
?>

			
			<div class="clear"></div>
		
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
  </body>
</html>
