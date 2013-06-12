<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guest Lectures</title>


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

  <body id="p4">

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
<div class="span4 pull-right">
			<h2>&nbsp;</h2>
			<hr />
							<img src="images/guest.jpg" class="thumbnail"/>
		</div>
			<h2>Guest Lectures</h2>
			<hr />
<p>
Knowledge is not just gathered from books; it is also gained from experience. In order to provide our students that extra edge, we regularly conduct guest lectures to complement our regular sessions, in turn helping the students to gain more knowledge on a particular topic. 
</p>
<p>
The speakers are usually those with a proven expertise in the Industry, who can share their experiences and insights on how students should be prepared for the challenges of the workplace, career requirements and the Industry in general, while relating it to the domain-specific expert knowledge.
</p>
<p>
Their insights are truly valuable to the students who get immense ideas about what to expect from the Industry and as to how to make themselves more employable. Also, they get a clear idea about how to chart their careers so as to balance their work and personal issues, helping them lead a satisfying life. 

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

$files = glob("images/guest/*.*");
$thumb = glob("images/guest-thumb/*.*");
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
			<div class="clear"></div>
				<div class="tabbable tabs-left">
			<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a href="#2013" data-toggle="tab">Guest Lectures - 2013</a></li>
        <li><a href="#2012" data-toggle="tab">Guest Lectures - 2012</a></li>
		<li><a href="#2011" data-toggle="tab">Guest Lectures - 2011</a></li>
		<li><a href="#2010" data-toggle="tab">Guest Lectures - 2010</a></li>
		<li><a href="#2009" data-toggle="tab">Guest Lectures - 2009</a></li>
		<li><a href="#2008" data-toggle="tab">Guest Lectures - 2008</a></li>
		<li><a href="#2007" data-toggle="tab">Guest Lectures - 2007</a></li>
		<li><a href="#2006" data-toggle="tab">Guest Lectures - 2006</a></li>
    </ul>
    <div id="tab-content" class="tab-content">

        <div class="tab-pane active" id="2013">
		<table class="table table-bordered">
			<tr>
			<td>Date</td>
			<td>Topic</td>
			</tr>
			<tr>
			<td>23.02.13</td>
			<td>Development of Enterprise Application using J2EE</td>
			</tr>
			<tr>
			<td>15.03.13</td>
			<td>IT Application Web Enabled in Education and Health Care</td>
			</tr>
			</table>
	
        </div>
        <div class="tab-pane" id="2012">
			<table class="table table-bordered">
			<tr>
			<td>Date</td>
			<td>Topic</td>
			</tr>
			<tr>
			<td>18.10.12</td>
			<td>Guest Lecture on Project Development Using RAD</td>
			</tr>
			<tr>
			<td>03/10/12</td>
			<td>Guest Lecture on Java</td>
			</tr>
			</table>
        </div>
		<div class="tab-pane" id="2011">
		<table class="table table-bordered">
			<tr>
			<td>Date</td>
			<td>Topic</td>
			</tr>
			<tr>
			<td>19.02.11</td>
			<td>Advance Java</td>
			</tr>
			<tr>
			<td>05.03.11</td>
			<td>Web Programming</td>
			</tr>
			<tr>
			<td>19.03.11</td>
			<td>Management Information Systems</td>
			</tr>
			<tr>
			<td>26.03.11</td>
			<td>Soft Skill</td>
			</tr>
			<tr>
			<td>26.03.11</td>
			<td>Rich Internet Application</td>
			</tr>
			<tr>
			<td>16.08.11</td>
			<td>How to start developing an application using .NET</td>
			</tr>
			<tr>
			<td>25.08.11</td>
			<td>How to develop an Application using PhP</td>
			</tr>
			<tr>
			<td>08.09.11</td>
			<td>Android Application </td>
			</tr>
			<tr>
			<td>08.10.11</td>
			<td>Introduction to Cloud Computing</td>
			</tr>
			</table>
		</div>
		<div class="tab-pane" id="2010">
		<table class="table table-bordered">
			<tr>
			<td>Date</td>
			<td>Topic</td>
			</tr>
			<tr>
			<td>06.03.10</td>
			<td>Web Application Development</td>
			</tr>
			<tr>
			<td>20.03.10</td>
			<td>Enterprise Java Beans</td>
			</tr>
			<tr>
			<td>24.04.10</td>
			<td>Web Programming</td>
			</tr>
			<tr>
			<td>04.04.09</td>
			<td>Supply Chain Management</td>
			</tr>
			<tr>
			<td>21.08.10</td>
			<td>Data Base Management System</td>
			</tr>
			<tr>
			<td>04.09.10</td>
			<td>Web Programming 2.0</td>
			</tr>
			<tr>
			<td>09.10.10</td>
			<td>Dot Net</td>
			</tr>
			</table>
		</div>
		<div class="tab-pane" id="2009">
		<table class="table table-bordered">
			<tr>
			<td>Date</td>
			<td>Topic</td>
			</tr>
			<tr>
			<td>11.02.09</td>
			<td>Web Programming</td>
			</tr>
			<tr>
			<td>14.02.09</td>
			<td>Web Programming</td>
			</tr>
			<tr>
			<td>28.02.09</td>
			<td>Web Programming</td>
			</tr>
			<tr>
			<td>04.04.09</td>
			<td>Analysis & Design of Algorithms</td>
			</tr>
			<tr>
			<td>18.04.09</td>
			<td>J2EE</td>
			</tr>
			<tr>
			<td>18.04.09</td>
			<td>Management Information System</td>
			</tr>
			<tr>
			<td>18.04.09</td>
			<td>UNIX Programming</td>
			</tr>
			</table>
		</div>
		<div class="tab-pane" id="2008">
		<table class="table table-bordered">
			<tr>
			<td>Date</td>
			<td>Topic</td>
			</tr>
			<tr>
			<td>09.02.08</td>
			<td>Application of DBMS</td>
			</tr>
			<tr>
			<td>06.10.07</td>
			<td>Unix Programming</td>
			</tr>
			<tr>
			<td>01.03.08</td>
			<td>Design and Analysis of Algorithm, Unix Administration</td>
			</tr>
			<tr>
			<td>15.03.08</td>
			<td>System Engineering</td>
			</tr>
			<tr>
			<td>05.04.08</td>
			<td>Future Trends in Technologies</td>
			</tr>
			<tr>
			<td>22.08.08</td>
			<td>Embedded System</td>
			</tr>
			<tr>
			<td>20.09.08</td>
			<td>System Programming</td>
			</tr>
			</table>
		</div>
		<div class="tab-pane" id="2007">
		<table class="table table-bordered">
			<tr>
			<td>Date</td>
			<td>Topic</td>
			</tr>
			<tr>
			<td>29.03.07</td>
			<td>Real Time System</td>
			</tr>
			<tr>
			<td>06.10.07</td>
			<td>Unix Programming</td>
			</tr>
			<tr>
			<td>03.11.07</td>
			<td>Socket Programming,JDBC,Swings </td>
			</tr>
			</table>
		</div>
		<div class="tab-pane" id="2006">
		<table class="table table-bordered">
			<tr>
			<td>Date</td>
			<td>Topic</td>
			</tr>
			<tr>
			<td>13.03.06</td>
			<td>Data Warehousing Principles</td>
			</tr>
			<tr>
			<td>24.04.06</td>
			<td>E-Security</td>
			</tr>
			<tr>
			<td>20.11.06</td>
			<td>Survey of Software Engineering Methods</td>
			</tr>
			<tr>
			<td>25.11.06</td>
			<td>Corporate Communication</td>
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
