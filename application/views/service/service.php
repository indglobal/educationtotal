<!DOCTYPE html>
<html>
<head>
	<title>Education Total</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="<?php echo base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
 	<link href="<?php echo base_url();?>css/style3.css" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>font-awesome-4.5.0/css/font-awesome.min.css">
</head>
<body>
	
	<div class="container">
		<?php	foreach($result as $res)
		{   ?>
		<div class="row">
			<div class="thebread"><div class="breadcrumb"><a href="education.html">Education</a> >> <?php echo  $res->title; ?></div></div>			 
		</div>
	</div>

	<div class="header_banner">
		<div class="header-img">
			<img src="<?php echo  base_url().$res->profile_image; ?>"> 
		</div>
		<div class="container maincontent">
			<div class="row">
				<div class="main_info">
					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-7">
								<div class="row">
									<div class="col-sm-5 small_image">
										<img src="<?php echo  base_url().$res->logo; ?>" class="attachment-small wp-post-image" alt="bookinvester" height="2560" width="1667">									</div>
									<div class="col-sm-7 sitename">
										<h2><?php echo  $res->title; ?></h2>
										<span><?php echo  $res->district; ?></span>
									</div>
								</div>
							</div>
							<div class="col-sm-5 detailed_info">
								<span>Established In:<?php echo  $res->year_established; ?></span> | <!--span>Accredited By: AICTE</span> <br>
								<span>Affiliated to: Visheshwarya Technology University</span-->
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div id="post-ratings-163" class="post-ratings">
							<img src="<?php echo base_url();?>images/rating_on.gif" alt="" class="post-ratings-image">
							<img src="<?php echo base_url();?>images/rating_on.gif" alt="" class="post-ratings-image">
							<img src="<?php echo base_url();?>images/rating_on.gif" alt="" class="post-ratings-image">
							<img src="<?php echo base_url();?>images/rating_off.gif" alt="" class="post-ratings-image">
							<img src="<?php echo base_url();?>images/rating_off.gif" alt="" class="post-ratings-image"><em>2 Reviews</em>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 abut_sec">				
				<ul class="links">
					<li><a href="#postoverview">Overview</a></li>
					<li><a href="#postprograms">Programs</a></li>
					<li><a href="#postcampusfacilities">Campus Facilities</a></li>
					<li><a href="#postgallery">Gallery</a></li>
					<li><a href="#postplacement">Placement</a></li>
					<li><a href="#postcontact">Contact</a></li>
					<li><a href="#postreview">Review</a></li>
					<li><a href="#postcurrricular">Extra Currricular</a></li>
				</ul>
				<div id="postoverview">
					<h2>About <?php echo  $res->title; ?></h2>
						<?php echo  $res->about_school; ?>
				</div>
				<div id="postprograms">
					<h2>Programs</h2>

					Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
				</div>
				<div id="postcampusfacilities">
					<h2>Facilities</h2>
					<?php echo  $res->facilities_available; ?>				
				</div>
				<div id="postgallery">
					<h2>Gallery</h2>
								
				</div>
				<div id="postcontact">
					<h2>Contact</h2>
					<?php echo "contact number : ". $res->contact_number; ?>	
					<?php echo "<br>contact mail : ". $res->contact_mail_id; ?>			
				</div>
				<div id="postreview">
					<h2>Review</h2>
								
				</div>
</div>
	<div class="col-sm-3 rigt_side">
		<a href="">Download Prospectus</a>
			<div id="secondary" class="secondary">
				<nav id="site-navigation" class="main-navigation" role="navigation">
				</nav><!-- .main-navigation -->
				<div id="widget-area" class="widget-area" role="complementary">
					<aside id="recent-posts-2" class="widget widget_recent_entries">		
						<h2 class="widget-title">Recent Posts</h2>		
						<ul>
							<li>
								<a href="#">hi</a>
							</li>
							<li>
								<a href="#">hello123456</a>
							</li>
							<li>
								<a href="#">New Test</a>
							</li>
							<li>
								<a href="#">test2</a>
							</li>
							<li>
								<a href="#">test1</a>
							</li>
						</ul>
					</aside>			
				</div><!-- .widget-area -->
			</div><!-- .secondary -->

	</div>
</div>
</div>

<?php  }  ?>   <!-- result foreach end  -->
<!-- js files -->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js" ></script> 
	<!--script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script-->
</body>
</html>