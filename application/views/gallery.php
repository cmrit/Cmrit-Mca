<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CMR MCA</title>


    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.lightbox-0.5.css" />
	
	<script src="<?php echo base_url(); ?>js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>js/tms-0.4.1.js"></script>
    <script src="<?php echo base_url(); ?>js/jcarousellite.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>js/slider-dropdown.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.lightbox-0.5.pack.js"></script>

	<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  </head>

  <body id="p2">
    <div class="container">
	<header>
		<div class="head-content">
			<div class="row-fluid">
			
			
				<div class="span9 pull-right nav-align">
						<ul class="nav nav-pills nav-property">
							<li><a href="<?php echo base_url(); ?>">Home</a></li>
							<li id="about"><a href="#" class="account">about us</a>
								<div class="submenu">
								<ul class="root">
									<li ><a href="<?php echo base_url().'about'; ?>">Vision</a></li>
									<li ><a href="<?php echo base_url().'about'; ?>">Mission</a></li>
									<li ><a href="<?php echo base_url().'about'; ?>">About Department</a></li>
									<li ><a href="<?php echo base_url().'about'; ?>">Our Staffs</a></li>
									<li ><a href="<?php echo base_url().'course'; ?>">Course Details</a></li>
									<li ><a href="<?php echo base_url().'about'; ?>">Admission</a></li>
								<li ><a href="<?php echo base_url().'about'; ?>">Admission</a></li>
								</ul>
								</div>
							</li>
							<li><a href="<?php echo base_url(); ?>">Placement</a></li>
							<li id="beyond" class="active"><a href="#" class="account">Beyond Syllabus</a>
								<div class="submenu">
								<ul class="root">
									<li ><a href="<?php echo base_url().'lifeskill'; ?>">Life Skills</a></li>
									<li ><a href="<?php echo base_url().'extra'; ?>">Extra Curricular</a></li>
									<li ><a href="<?php echo base_url().'counseling'; ?>">Counseling</a></li>
									<li ><a href="<?php echo base_url().'guest'; ?>">Guest Lectures</a></li>
									<li ><a href="<?php echo base_url().'icp'; ?>">ICP Process</a></li>
									<li ><a href="<?php echo base_url().'newsletter'; ?>">News letter</a></li>
									<li ><a href="<?php echo base_url().'social'; ?>">Social Concern</a></li>
									<li ><a href="<?php echo base_url().'technical'; ?>">Technical Fest</a></li>
								</ul>
								</div>
								</li>
							<li><a href="<?php echo base_url(); ?>">Research Initiatives</a></li>
							<li><a href="<?php echo base_url(); ?>">Achievements</a></li>
							<li><a href="<?php echo base_url().'contact'; ?>">Contacts</a></li>
						</ul>    				
				</div>
				
				<div class="span2 pull-left logo-align">
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
			<h2>Gallery</h2>
			<hr />
			

<?php

$files = glob("images/gallery/".$album."/*.*");

$title='';
for ($i=1; $i<count($files); $i++)
{
$num = base_url();
$num .= $files[$i];

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
