<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Extra Curricular</title>


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
	<script src="js/bootstrap.js"></script>
	

	<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  </head>

  <body id="p3">

    <div class="container">
	<header>
		<div class="head-content">
			<div class="row-fluid">
			
				<div class="span9 pull-right nav-align">
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
							
							<li id="beyond" class="active"><a href="#" class="account">Beyond Syllabus</a>
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
							<li><a href="alumni.php">Alumni</a></li>
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
<div class="span4 pull-right">
			<h2>&nbsp;</h2>
			<hr />
							<img src="images/extra.jpg" class="thumbnail"/>
		</div>
			<h2>Extra Curricular</h2>
			<hr />
			<h3>
			‘All Work and No Play Makes Jack a Dull Boy’. 
</h3>
<p>
To build our students on the essential additional skills like competitive spirit, teamwork, tolerance, discipline, etc. we encourage the students to participate in several extra-curricular activities including sports, music, dance, art and many more that would help me realize those values that cannot be imparted, by just teaching – they need to be experienced.
</p>
<p>
The students actively participate in sports events and cultural fests in other colleges as well as in the Cultura held every year in our own college that gives enough exposure to their creative abilities.
</p>
<p>
Our students have always set high standards by winning several individual events as well as also the all-over championships in many colleges over the past few years.

			</p>

			<div class="blocks">
	<div class="span10">
		          <div class="carousel-box">
            <span>Gallery</span>
            <a id="prev"></a>
	  	    <a id="next"></a>
            <div class="carousel img-gallery">
                <ul>
				<?php

$files = glob("images/extra/*.*");
$thumb = glob("images/extra-thumb/*.*");
$files  = array_reverse($files);
$thumb  = array_reverse($thumb);

$title='';
for ($i=0; $i<count($files); $i++)
{
$t = $thumb[$i];
$num = $files[$i];

echo '
					<li>		
						<a href="'.$num.'" rel="lightbox">
                        <img src="'.$t.'" alt="" class="thumbnail">
                        </a>
                    </li>
';
}
?>
                </ul>
            </div>
</div>
</div>
</div>
			<div class="tabbable tabs-left">
			<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a href="#2012-13" data-toggle="tab">YEAR : 2012-13</a></li>
        <li><a href="#2011-12" data-toggle="tab">YEAR : 2011-12</a></li>
		<li><a href="#2010-11" data-toggle="tab">YEAR : 2010-11</a></li>
		<li><a href="#2009-10" data-toggle="tab">YEAR : 2009-10</a></li>
		<li><a href="#2008-09" data-toggle="tab">YEAR : 2008-09</a></li>
		<li><a href="#2007-08" data-toggle="tab">YEAR : 2007-08</a></li>
    </ul>
    <div id="tab-content" class="tab-content">

        <div class="tab-pane active" id="2012-13">
		
		<table class="table table-bordered">
			<tr>
			<td>Sl No</td>
			<td>College Name</td>
			<td>Event</td>
			<td>Number of Students Participated</td>
			<td>Recognition</td>
			</tr>
			<tr>
			<td>1.</td>
			<td>Dayanand Sagar College of Engineering Bangalore</td>
			<td>Web Designing</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>2.</td>
			<td>Dayanand Sagar College of Engineering Bangalore</td>
			<td>Ice Breaker</td>
			<td>4</td>
			<td>Second Prize</td>
			</tr>
			<tr>
			<td>3.</td>
			<td>Garden City College</td>
			<td>Web Designing</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>4.</td>
			<td>Garden City College</td>
			<td>Drapping</td>
			<td>2</td>
			<td>First Prize & Second Prize</td>
			</tr>
			<tr>
			<td>5.</td>
			<td>Garden City College</td>
			<td>Painting</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>6.</td>
			<td>Garden City College</td>
			<td>Brain Stretchers</td>
			<td>2</td>
			<td>Second Prize</td>
			</tr>
			<tr>
			<td>7.</td>
			<td>Garden City College</td>
			<td>Encryption/Decryption</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>8.</td>
			<td>RV College</td>
			<td>Web Designing</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>9.</td>
			<td>RV College</td>
			<td>Product Launch</td>
			<td>4</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>10.</td>
			<td>RV College</td>
			<td>Toggle</td>
			<td>1</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>11.</td>
			<td>RV College</td>
			<td>Treasure Hunt</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>12.</td>
			<td>Oxford College</td>
			<td>Web Designing</td>
			<td>2</td>
			<td>Second Prize</td>
			</tr>
			<tr>
			<td>13.</td>
			<td>Oxford College</td>
			<td>Mad Ads</td>
			<td>5</td>
			<td>Third Prize</td>
			</tr>
			<tr>
			<td>14.</td>
			<td>Oxford College</td>
			<td>Khoj</td>
			<td>2</td>
			<td>Third Prize</td>
			</tr>
			<tr>
			<td>15.</td>
			<td>Oxford College</td>
			<td>Tech- Talk</td>
			<td>1</td>
			<td>Third Prize</td>
			</tr>
			<tr>
			<td>16.</td>
			<td>Reva College</td>
			<td>Web Designing</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>17.</td>
			<td>RNSIT College</td>
			<td>Web Designing</td>
			<td>1</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>18.</td>
			<td>NITTE MEENAKSHI College</td>
			<td>Web Designing</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>19.</td>
			<td>NITTE MEENAKSHI College</td>
			<td>Gaming</td>
			<td>1</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>20.</td>
			<td>NITTE MEENAKSHI College</td>
			<td>Paper Presentation</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			</table>
        </div>
        <div class="tab-pane" id="2011-12">
			<table class="table table-bordered">
			<tr>
			<td>Sl No</td>
			<td>College Name</td>
			<td>Event</td>
			<td>Number of Students Participated</td>
			<td>Recognition</td>
			</tr>
			</tr>
			<tr>
			<td>1.</td>
			<td>MSRIT College of Engineering Bangalore</td>
			<td>Web Designing</td>
			<td>1</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>2.</td>
			<td>MSRIT College of Engineering Bangalore</td>
			<td>Naatech</td>
			<td>6</td>
			<td>Third Prize</td>
			</tr>
			<tr>
			<td>3.</td>
			<td>Garden City College Bangalore</td>
			<td>Web Designing</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>4.</td>
			<td>Garden City College of Engineering Bangalore</td>
			<td>Rangoli</td>
			<td>2</td>
			<td>Second Prize</td>
			</tr>
			<tr>
			<td>5.</td>
			<td>Garden City College Bangalore</td>
			<td>Technical Skit</td>
			<td>7</td>
			<td>First Place</td>
			</tr>
			<tr>
			<td>6.</td>
			<td>Garden City College Bangalore</td>
			<td>Creative Writing</td>
			<td>2</td>
			<td>Second Prize</td>
			</tr>
			</table>

        </div>
		<div class="tab-pane" id="2010-11">
		<table class="table table-bordered">
			<tr>
			<td>Sl No</td>
			<td>College Name</td>
			<td>Event</td>
			<td>Number of Students Participated</td>
			<td>Recognition</td>
			</tr>
			<tr>
			<td>1.</td>
			<td>Dayanand Sagar College of Engineering Bangalore</td>
			<td>Pixellate</td>
			<td>1</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>2.</td>
			<td>Dayanand Sagar College of Engineering Bangalore</td>
			<td>Best Manager</td>
			<td>1</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>3.</td>
			<td>Dayanand Sagar College of Engineering Bangalore</td>
			<td>Mad Ads</td>
			<td>7</td>
			<td>Second Prize</td>
			</tr>
			</table>
		</div>
		<div class="tab-pane" id="2009-10">
		<table class="table table-bordered">
			<tr>
			<td>Sl No</td>
			<td>College Name</td>
			<td>Event</td>
			<td>Number of Students Participated</td>
			<td>Recognition</td>
			</tr>
			<tr>
			<td>1.</td>
			<td>Mount Carmels</td>
			<td>Plunder Chase</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>2.</td>
			<td>Mount Carmels</td>
			<td>Theme Flick</td>
			<td>2</td>
			<td>Second Prize</td>
			</tr>
			</table>
		</div>
		<div class="tab-pane" id="2008-09">
		<table class="table table-bordered">
			<tr>
			<td>Sl No</td>
			<td>College Name</td>
			<td>Event</td>
			<td>Number of Students Participated</td>
			<td>Recognition</td>
			</tr>
			<tr>
			<td>1.</td>
			<td>CMRIMS</td>
			<td>Coding & Debugging</td>
			<td>3</td>
			<td>Second prize</td>
			</tr>
			<tr>
			<td>2.</td>
			<td>CMRIMS</td>
			<td>Gaming</td>
			<td>4</td>
			<td>Third Prize</td>
			</tr>
			<tr>
			<td>3.</td>
			<td>MSRIT</td>
			<td>IT Quiz</td>
			<td>4</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>4.</td>
			<td>MSRIT</td>
			<td>Singing Competition</td>
			<td>2</td>
			<td>Third Prize</td>
			</tr>
			<tr>
			<td>5.</td>
			<td>MSRIT</td>
			<td>Web Designing</td>
			<td>4</td>
			<td>First Prize</td>
			</tr>
			</table>
		</div>
		<div class="tab-pane" id="2007-08">
		<table class="table table-bordered">
			<tr>
			<td>Sl No</td>
			<td>College Name</td>
			<td>Event</td>
			<td>Number of Students Participated</td>
			<td>Recognition</td>
			</tr>
			<tr>
			<td>1.</td>
			<td>KSIT</td>
			<td>Coding & Debugging</td>
			<td>2</td>
			<td>Second Prize</td>
			</tr>
			<tr>
			<td>2.</td>
			<td>KSIT</td>
			<td>IT Quiz</td>
			<td>2</td>
			<td>Fourth Place</td>
			</tr>
			<tr>
			<td>3.</td>
			<td>AL AMEEN</td>
			<td>IT Quiz</td>
			<td>2</td>
			<td>Second Prize</td>
			</tr>
			<tr>
			<td>4.</td>
			<td>CHRIST COLLEGE</td>
			<td>Group Song</td>
			<td>2</td>
			<td>First Prize</td>
			</tr>
			<tr>
			<td>5.</td>
			<td>CHRIST COLLEGE</td>
			<td>Quizine (IT Quiz)</td>
			<td>2</td>
			<td>Third Prize</td>
			</tr>
			</table>
		</div>
    </div>
	</div>
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
