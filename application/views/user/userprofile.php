<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="<?php echo base_url();?>user_panel_design/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>user_panel_design/font-awesome-4.5.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>user_panel_design/css/style.css">


  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


  <script>
      $(document).ready(function(){

  $(function() {
    $( "#datepicker" ).datepicker();
    //e.preventDefault();
  });


    $('body').on('focus',"#dob", function(){
        $(this).datepicker({dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true, yearRange: '1900:+0'});
    });
});
  </script>

 </head>

<body>
	<!-- Start header content.............................................. -->
	<div class="container-fluid header_cont">
		<div class="row">
			<div class="col-sm-10">
				<h2><img src="<?php echo base_url();?>user_panel_design/images/logo.png" alt="logo" width="40" height="40">   Educationtotal</h2>
			</div>
			<div class="col-sm-2 chip dropdown">
				<img src="<?php echo base_url();?>user_panel_design/images/ra.png" alt="ra" class="img-circle img-responsive" width="50" height="50"> Ramesh
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">My Profile</a></li>
		            <li><a href="#">Edit Profile</a></li>
		            <li><a href="#">Logout</a></li>
		          </ul>
			</div>
		</div>
	</div>
<!-- End header content.............................................. -->


<!-- Start body content.............................................. -->
	<div class="container-fluid main_body">
		<div class="row main_face">
			<div class="col-sm-1 left_cont">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#profile"><img src="<?php echo base_url();?>user_panel_design/images/profile.png" alt="profile"><p>Profile</p></a></li>
					<li><a data-toggle="tab" href="#"><img src="<?php echo base_url();?>user_panel_design/images/forum.png" alt="profile"><p> Forum</p></a></li>
					<li><a data-toggle="tab" href="#"><img src="<?php echo base_url();?>user_panel_design/images/doc.png" alt="profile"><p>Document</p></a></li>
				</ul>
			</div>
			<div class="col-sm-11 mid_cont">
				<div class="tab-content">
				    <div id="profile" class="tab-pane fade in active">
				     <article id="about_profile">
					      <div class="col-sm-12 body_header">
					      		<ol class="breadcrumb">
								  <li><a href="#">Home</a></li>
								  <li><a href="#">Pages</a></li>
								  <li class="active">User Profile Pages</li>
								</ol>
					      </div>
						  <div class="col-sm-12 body_header_caption">
						      	<h2>My Profile</h2>
						  </div>
						   <div class="col-sm-2 left_panel">
							  <div class="col-sm-12 body_left">
									<div class="col-sm-12 line_border">
									</div>
									<div class="col-sm-12 text-right">
										<p><a href="#"> Change Password</a></p><br>
									</div>
									<div class="col-sm-12 ">
										<img src="<?php echo base_url();?>user_panel_design/images/ramesh.png" alt="ramesh" class="img-responsive"><br>
										<h4>Ramesh Krishnan</h4><br>
									</div>
							  	</div>
						 	 	<br><br>
								<div class="clear"></div>
					 		</div>
					 <!--  End of Left content.................................................... -->
					  		<div class="col-sm-10 body_right">
							  	 <ul class="nav nav-tabs">
								    <li class="active"><a data-toggle="tab" href="#myprofile">My Profile</a></li>
								    <li><a data-toggle="tab" href="#cour">My Courses</a></li>
								    <li><a data-toggle="tab" href="#orders">My Orders</a></li>
								    <li><a data-toggle="tab" href="#fav">Favourates</a></li>
								    <li><a data-toggle="tab" href="#group">Groups</a></li>
								    <li><a data-toggle="tab" href="#review">Reviews</a></li>
								 </ul>
							  <div class="tab-content mycontent">
							    <div id="myprofile" class="tab-pane fade in active">
							   
							      	<section id="about">
							      	<div class="col-sm-8">
							      		<h2>About</h2>
							      	</div>
							      	<div class="col-sm-3">
							      	</div>
							      	<div class="col-sm-1">
							      		<button class="btn btn-primary btnEdit">
							      			<i class="fa fa-pencil"></i> Edit
										</button>
							      	</div>
							      	<div class="clear"></div>
							      	<div class="row">
							      		<div class="col-sm-2">
							      			<p>First Name</p>
							      		</div>
							      		<div class="col-sm-2">
							      			<p><?php echo $getDetails_fromsignup[0]['fname'];?></p>
							      		</div>
							      		<div class="col-sm-2">
							      			<p>Birthday</p>
							      		</div>
							      		<div class="col-sm-3">
							      			<p>N/A</p>
							      		</div>
							      	</div>
							      	<div class="row">
							      		<div class="col-sm-2">
							      			<p>User Name</p>
							      		</div>
							      		<div class="col-sm-2">
							      			<p><?php echo $getDetails_fromsignup[0]['user_name'];?></p>
							      		</div>
							      		<div class="col-sm-2">
							      			<p>Interests</p>
							      		</div>
							      		<div class="col-sm-3">
							      			<p><?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['interest'];?></p>
							      		</div>
							      	</div>
							      	<div class="row">
							      		<div class="col-sm-2">
							      			<p>Email</p>
							      		</div>
							      		<div class="col-sm-2">
							      			<p><?php echo $getDetails_fromsignup[0]['email'];?></p>
							      		</div>
							      		<div class="col-sm-2">
							      			<p>Website</p>
							      		</div>
							      		<div class="col-sm-3">
							      			<p>N/A</p>
							      		</div>
							      	</div>
							      	<div class="row">
							      		<div class="col-sm-2">
							      			<p>City</p>
							      		</div>
							      		<div class="col-sm-2">
							      			<p><?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['city'];?></p>
							      		</div>
							      		<div class="col-sm-2">
							      			<p> Phone</p>
							      		</div>
							      		<div class="col-sm-3">
							      			<p>+91 <?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['phone'];?></p>
							      		</div>
							      	</div>
							      	<div class="row">
							      		<div class="col-sm-2">
							      			<p> Country</p>
							      		</div>
							      		<div class="col-sm-2">
							      			<p><?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['country'];?></p>
							      		</div>
							      	</div>
									</section> <!-- End of about section -->
									<section id="education" class="col-sm-6">
										<div class="col-sm-12">
											<h2> <i class="fa fa-graduation-cap"></i> Education</h2>
											<ul>
												<li>
													<p><i class="fa fa-circle-thin circle_font"></i> Bachelor's degree ,E-Commerce/Electronic Commerce at <a href="#">PSET</a><br> <span>August 2003 ~ july 2008</span></p>
												</li>
												<li>
													<p><i class="fa fa-circle-thin circle_font"></i> Student at Web Design Education<br> <span>March 2006 ~ February 2007</span></p>
												</li>
												<li>
													<p><i class="fa fa-circle-thin circle_font"></i> Student at St. Louis High School <br><span>August 2000 ~ july 2003</span></p>
												</li>
												<li>
													<p><i class="fa fa-circle-thin circle_font"></i> Student at St. Monica Junior High School <br><span>August 1998 ~ july 2000</span></p>
												</li>
											</ul>
										</div>
									</section> <!-- End of Education section -->
									<section id="skill" class="col-sm-6">
										<div class="col-sm-12">
											<h2> <img src="<?php echo base_url();?>user_panel_design/images/skill.png" alt=""> Skills</h2>
										</div>
										<div class="col-sm-10">
											<p>Photoshop</p>
											<div class="progress">
											  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
											  aria-valuemin="0" aria-valuemax="100" style="width:90%">
											  </div>
											</div>
										</div>
										<div class="col-sm-10">
											<p>Illustrator</p>
											<div class="progress">
											  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40"
											  aria-valuemin="0" aria-valuemax="100" style="width:20%">
											    
											  </div>
											</div>
										</div>
										<div class="col-sm-10">
											<p>PHP</p>
											<div class="progress">
											  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40"
											  aria-valuemin="0" aria-valuemax="100" style="width:50%">
											  </div>
											</div>
										</div>
										<div class="col-sm-10">
											<p>Javascript</p>
											<div class="progress">
											  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40"
											  aria-valuemin="0" aria-valuemax="100" style="width:60%">
											    
											  </div>
											</div>
										</div>
										<div class="col-sm-10">
											<p>Communication</p>
											<div class="progress">
											  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
											  aria-valuemin="0" aria-valuemax="100" style="width:95%">
											  </div>
											</div>
										</div>
										<div class="col-sm-10">
											<p>Writing</p>
											<div class="progress">
											  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40"
											  aria-valuemin="0" aria-valuemax="100" style="width:45%">
											    
											  </div>
											</div>
										</div>
									</section> <!-- End of skill section -->
						    	</div><!-- End of myprofile tab -->
						   <div id="cour" class="tab-pane fade in ">
						      <section id="about">
						      	<div class="col-sm-8">
						      		<h2>Courses</h2>
						      	</div>
						      	<div class="col-sm-4">
						      		<button class="btn btn-primary btnEdit">
						      			<i class="fa fa-pencil"></i> Edit
									</button>
						      	</div>
						      	<div class="clear"></div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>First Name</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Ramesh</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Birthday</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>Jan 22,1984</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>User Name</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Rameshk12</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Interests</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>Basketball, Web Design, etc</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>Email</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>rameshzz@gmail.com</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Website</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>www.educationtotal.com</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>City</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Bangalore</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p> Phone</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>+91 9845698456</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p> Country</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p> India</p>
						      		</div>
						      	</div>
								</section><!-- End of about section -->
								</div>
								 <div id="orders" class="tab-pane fade in ">
						      <section id="about">
						      	<div class="col-sm-8">
						      		<h2>My Orders</h2>
						      	</div>
						      	<div class="col-sm-4">
						      		<button class="btn btn-primary btnEdit">
						      			<i class="fa fa-pencil"></i> Edit
									</button>
						      	</div>
						      	<div class="clear"></div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>First Name</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Ramesh</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Birthday</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>Jan 22,1984</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>User Name</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Rameshk12</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Interests</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>Basketball, Web Design, etc</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>Email</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>rameshzz@gmail.com</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Website</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>www.educationtotal.com</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>City</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Bangalore</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p> Phone</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>+91 9845698456</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p> Country</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p> India</p>
						      		</div>
						      	</div>
								</section><!-- End of about section -->
								</div>
								 <div id="fav" class="tab-pane fade in ">
						      <section id="about">
						      	<div class="col-sm-8">
						      		<h2>My favourate</h2>
						      	</div>
						      	<div class="col-sm-4">
						      		<button class="btn btn-primary btnEdit">
						      			<i class="fa fa-pencil"></i> Edit
									</button>
						      	</div>
						      	<div class="clear"></div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>First Name</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Ramesh</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Birthday</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>Jan 22,1984</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>User Name</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Rameshk12</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Interests</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>Basketball, Web Design, etc</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>Email</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>rameshzz@gmail.com</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Website</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>www.educationtotal.com</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>City</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Bangalore</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p> Phone</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>+91 9845698456</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p> Country</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p> India</p>
						      		</div>
						      	</div>
								</section><!-- End of about section -->
								</div>
									 <div id="group" class="tab-pane fade in ">
						      <section id="about">
						      	<div class="col-sm-8">
						      		<h2>My groups</h2>
						      	</div>
						      	<div class="col-sm-4">
						      		<button class="btn btn-primary btnEdit">
						      			<i class="fa fa-pencil"></i> Edit
									</button>
						      	</div>
						      	<div class="clear"></div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>First Name</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Ramesh</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Birthday</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>Jan 22,1984</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>User Name</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Rameshk12</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Interests</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>Basketball, Web Design, etc</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>Email</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>rameshzz@gmail.com</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Website</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>www.educationtotal.com</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>City</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Bangalore</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p> Phone</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>+91 9845698456</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p> Country</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p> India</p>
						      		</div>
						      	</div>
								</section><!-- End of about section -->
								</div>
								 <div id="review" class="tab-pane fade in ">
						      <section id="about">
						      	<div class="col-sm-8">
						      		<h2>My reviews</h2>
						      	</div>
						      	<div class="col-sm-4">
						      		<button class="btn btn-primary btnEdit">
						      			<i class="fa fa-pencil"></i> Edit
									</button>
						      	</div>
						      	<div class="clear"></div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>First Name</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Ramesh</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Birthday</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>Jan 22,1984</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>User Name</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Rameshk12</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Interests</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>Basketball, Web Design, etc</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>Email</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>rameshzz@gmail.com</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Website</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>www.educationtotal.com</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p>City</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p>Bangalore</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p> Phone</p>
						      		</div>
						      		<div class="col-sm-3">
						      			<p>+91 9845698456</p>
						      		</div>
						      	</div>
						      	<div class="row">
						      		<div class="col-sm-2">
						      			<p> Country</p>
						      		</div>
						      		<div class="col-sm-2">
						      			<p> India</p>
						      		</div>
						      	</div>
								</section><!-- End of about section -->
								</div>
						  </div> <!-- End of the innner tab content -->
					  </div> <!-- End of body_right section -->
					</article><!-- End of my profile section -->
					  <article id="edit_profile">
								<div class="col-sm-12 body_header">
					      		<ol class="breadcrumb">
								  <li><a href="#">Home</a></li>
								  <li><a href="#">Pages</a></li>
								  <li class="active">User Profile Pages</li>
								</ol>
					      </div>
						  <div class="col-sm-10 body_header_caption">
						  <h2>Edit Profile</h2>
						  </div>
<form class="myForm" method="post" action="<?php echo site_url('user/user_panel/user_edit_myprofile_section/'); ?>">
						  <div class="col-sm-2 body_header_caption">
						  	<button class="btn btn-primary btnSave">Save</button>
						  	<button class="btn btn-primary btnCancel">Cancel</button>
						  </div>
						  <div class="clear"></div>
							<div class="row" id="main_cont">
							  	<div class="container-fluid edit_profile_body">
								  	<div class="row profile_img">
									  	<div class="col-sm-1">
											<div class="ImageProfile">
												<img id="image_upload_preview" src="<?php echo base_url();?>user_panel_design/images/ra.png" alt="your image" class="img-rounded" width="80" height="120" />
											    <input type='file' id="inputFile"/ style="visibility: hidden;">
											   <i class="fa fa-camera change_pic_btn"></i>
											</div>
									  	</div>
									  	<div class="col-sm-5 name_details">
									  		<h3>Rameshk12</h3>
									  		<p>rameshzz@gmail.com<br><br>
									  		<a href="#" id="cpass">Change Password</a>
									  		</p>
									  	</div>
									  	<div class="col-sm-6 address_details">
									  		<h3>Delivery Address <a href="#"><span id="cp" align="right">Change Address</span></a></h3>
									  		<address>
									  			Indglobal Consultancy Solutions<br>
									  			No. 60 &amp; 61 1st Floor, Dr. Rajkumar Road,<br> Bengaluru 560021, Prakash Nagar, <br>Bengaluru, Karnataka 560021
									  		</address>
									  	</div>
								  	</div>
								  	<div class="row edit_about">
								  		<div class="col-sm-12">
									  		<h2><i class="fa fa-user"></i>About</h2>
									  		<div class="border"></div>
								  		</div>
<!-- 							  		<form class="myForm" method="post" action="">
 -->							  			

							  				<div class="col-sm-3">
							  					<label>First Name</label><br>
							  					<input type="text" class="form-control special_text" name="fname_of_user" placeholder="&nbsp; Ramesh" value="<?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['fname'];?>">
							  				</div>
							  				<div class="col-sm-3">
							  					<label>Last Name</label><br>
<!-- 							  				<p>Date: <input type="text" id="datepicker"></p>
 -->							  					<input type="text" class="form-control special_text" name="lname_of_user" placeholder="&nbsp; Krishnan" value="<?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['lname'];?>">

							  				</div>
						  				<div class="col-sm-3">
							  					<label>Birth Date</label><br>
                                              <input type="text" class="form-control" style="width:200px" id="dob" name="dob" placeholder="Enter Date of Birth:">

							  					<!-- <select>
							  						<option>01</option>
							  						<option>02</option>
							  						<option>03</option>
							  						<option>04</option>
							  						<option>05</option>
							  						<option>06</option>
							  						<option>07</option>
							  						<option>08</option>
							  						<option>09</option>
							  						<option>10</option>
							  						<option>11</option>
							  						<option>12</option>
							  						<option>13</option>
							  						<option>14</option>
							  						<option>15</option>
							  						<option>16</option>
							  						<option>17</option>
							  						<option>18</option>
							  						<option>19</option>
							  						<option>20</option>
							  						<option>21</option>
							  						<option>22</option>
							  						<option>23</option>
							  						<option>24</option>
							  						<option>25</option>
							  						<option>26</option>
							  						<option>27</option>
							  						<option>28</option>
							  						<option>29</option>
							  						<option>30</option>
							  						<option>31</option>
							  					</select>
							  					<select>
							  						<option>Jan</option>
							  						<option>Feb</option>
							  						<option>Mar</option>
							  						<option>April</option>
							  						<option>May</option>
							  						<option>Jun</option>
							  						<option>July</option>
							  						<option>Aug</option>
							  						<option>Sep</option>
							  						<option>Oct</option>
							  						<option>Nov</option>
							  						<option>Dec</option>
							  					</select>
							  					<select>
							  						<option>1984</option>
							  						<option>1985</option>
							  						<option>1986</option>
							  						<option>1987</option>
							  						<option>1988</option>
							  						<option>1989</option>
							  						<option>1990</option>
							  						<option>1991</option>
							  						<option>1992</option>
							  						<option>1993</option>
							  						<option>1994</option>
							  						<option>1995</option>
							  						<option>1996</option>
							  						<option>1997</option>
							  						<option>1998</option>
							  						<option>1999</option>
							  						<option>2000</option>
							  						<option>2001</option>
							  						<option>2002</option>
							  						<option>2003</option>
							  						<option>2004</option>
							  						<option>2005</option>
							  						<option>2006</option>
							  						<option>2007</option>
							  						<option>2008</option>
							  						<option>2009</option>
							  						<option>2010</option>
							  						<option>2011</option>
							  						<option>2012</option>
							  						<option>2013</option>
							  						<option>2014</option>
							  						<option>2015</option>
							  						<option>2016</option>
							  					</select> -->
							  				</div>
							  				<div class="clear">
							  				</div>
							  				<div class="col-sm-3">
							  					<label>User Name</label><br>
	<input type="hidden" name="user_id" placeholder="&nbsp; Rameshk12" value="<?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['user_id'];?>">

			<input type="text" name="user_name" class="form-control special_text" placeholder="&nbsp; Rameshk12" value="<?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['user_name'];?>">
							  				</div>
							  				<div class="col-sm-3">
							  					<label>Email</label><br>
							  					<input type="text" name="email" class="form-control special_text" placeholder="&nbsp; rameshzz@gmail.com" value="<?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['email'];?>">
							  				</div>
							  				<div class="col-sm-3">
							  					<label>Phone Number</label><br>
							  					 <div class="input-group">
											      <div class="input-group-addon">+91</div>
											      <input type="text" name="phone" class="form-control special_text"  placeholder="7829721660" value="<?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['phone'];?>">
									
											    </div>
							  				</div>
							  				<div class="clear">
							  				</div>
							  				<div class="col-sm-3">
							  					<label> Interest</label><br>
							  					<input type="text" name="interest" class="form-control special_text" placeholder="&nbsp; Rameshk12" value="<?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['interest'];?>">
							  				</div>
							  				<div class="col-sm-3">
							  					<label>City</label><br>
							  					<input type="text" name="city" class="form-control special_text" placeholder="&nbsp; Bangalore" value="<?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['city'];?>">
							  				</div>
							  				<div class="col-sm-3">
							  					<label>Country</label><br>
							  					<input type="text" name="country" class="form-control special_text" placeholder="&nbsp; India" value="<?php if(isset($getDetails_fromsignup[0]['user_id'])) echo $getDetails_fromsignup[0]['country'];?>">
							  				</div>
							  				
						<!--  </form> -->
								  	</div> <!-- End of edit about row -->
								  	<div class="row edit_education">
								  		<div class="col-sm-12">
									  		<h2> <i class="fa fa-graduation-cap"></i> Education</h2>
									  		<div class="border"></div>
								  		</div>
								  		<!-- <div class="col-sm-12 edu_cont">
									  		<div class="col-sm-5 listItems"> -->
					<input type="hidden" name="count_edu" id="count_edu" value="<?php echo count($edu_details);?>">
					   <div class="col-sm-12 container">
                       <div id="row0" class=" col-sm-5 rowIndex fixedRow">
<!--                   <input  id="edu_0" type="text" name="edu_0"  value="hhh"/>
 --> 
                   <?php if(empty($getDetails_fromedu_user)){ 
                   	?>
                 <?php }else{
                 	$i=1;
                      foreach ($edu_details as $key => $value) {?>
                    <div id="row<?php echo $i?>" class="rowIndex fixedRow">
                    <input  id="edu_<?php echo $i?>" type="text"  name="edu_<?php echo $i;?>"  value="<?php echo $value;?>" style="display:none;"/>
                    </div>
                     <?php  
                     $i++;
                    }
                  }
                 ?>
           
				<ul class="justList" name="education">
		              <?php if(empty($getDetails_fromedu_user)){ 
                   	?>
                 <?php }else{
                 	$i=1;
                      foreach ($edu_details as $key => $value) { ?>
                 <li class="justlist" id="<?php echo $i;?>">
		   <p><i class="fa fa-circle-thin circle_font" ></i>&nbsp<?php echo $value;?>&nbsp<i class='close fa fa-times'></i> <br></p>
			     </li>

                     <?php  
                     $i++;
                    }?>

            <?php  }
                 ?>

                  



									  				<!-- <li class="active">
														<p> <i class="fa fa-circle-thin circle_font"></i>
Bachelor's degree ,E-Commerce/Electronic Commerce at <a href="#">PSET</a>&nbsp;<i class='close fa fa-times'></i><br> <span>August 2003 ~ july 2008</span></p>
													</li>
													<li>
														<p> <i class="fa fa-circle-thin circle_font"></i>
Student at Web Design Education&nbsp;<i class='close fa fa-times'></i><br> <span>March 2006 ~ February 2007</span></p>
													</li>
													<li>
														<p> <i class="fa fa-circle-thin circle_font"></i>
Student at St. Louis High School&nbsp;<i class='close fa fa-times'></i> <br><span>August 2000 ~ july 2003</span></p>
													</li>
													<li>
														<p><i class="fa fa-circle-thin circle_font"></i>
Student at St. Monica Junior High School&nbsp;<i class='close fa fa-times'></i> <br><span>August 1998 ~ july 2000</span></p>
													</li> -->

									  			</ul>

									  		</div>
									  		<div class="col-sm-4">
									  		</div>
									  		<div class="col-sm-3">
									  			<button id="btnCollege" type="button" class="btn btn-primary">+ ADD<br>COLLEGE/INSTITUTE</button>
					
<!--  <a href="#" id="btnCollege" class="btn btn-primary">+ ADD<br>COLLEGE/INSTITUTE</a>
 -->
									  		</div>
								  		</div>
								  	</div> <!-- End of edit education row -->
								  </form>
								  	<div class="row edit_skill">
								  		<div class="col-sm-12">
									  		<h2> <img src="<?php echo base_url();?>user_panel_design/images/skill.png" alt=""> Skills</h2>
									  		<div class="border"></div>
								  		</div>
								  		<div class="col-sm-12 skill_cont">
									  		<div class="col-sm-7 listItems2">
									  			<ul class="justList1">
									  				<li>2d Drawing&nbsp;<i class='close fa fa-times'></i></li>
									  				<li>Web Design&nbsp;<i class='close fa fa-times'></i></li>
									  				<li>Graphic Design&nbsp;<i class='close fa fa-times'></i></li>
									  				<li>Logo Design&nbsp;<i class='close fa fa-times'></i></li>
									  				<li>UI/UX Design&nbsp;<i class='close fa fa-times'></i></li>

									  			</ul>
									  		</div>
									  		<div class="col-sm-2">
									  		</div>
									  		<div class="col-sm-3">
									  			<button id="btnSkill" class="btn btn-primary">+ ADD SKILLS</button>
									  		</div>
									  	</div>
								  	</div> <!-- End of edit skill row -->
								</div>
							</div>
						</article> <!-- End of edit profile section -->
				    </div> <!-- End of first tab-content -->
				   
  				</div>
			</div>
		</div>
	</div>
<!-- End body content.............................................. -->
 


<!-- Start footer content.............................................. -->
	<div class="container-fluid footer_cont">
		<div class="row">
			<div class="col-sm-4">
				<p>Copyright &copy;15-2016 Education Total.. All Rights Reserved</p>
			</div>
			<div class="col-sm-4 footer_menu">
				<ul>
					<li>Career &#124;</li>
					<li>About Us &#124;</li>
					<li>Blog &#124;</li>
					<li>Contact Us</li>
				</ul>
			</div>
			<div class="col-sm-4">
				Designed &amp; Developed by www.indglobal.in
			</div>
		</div>
	</div>
<!-- End footer content.............................................. -->
	<script src="<?php echo base_url();?>user_panel_design/js/jquery.min.js"></script>
  	<script src="<?php echo base_url();?>user_panel_design/js/bootstrap.min.js"></script>

 	 <script type"text/Javascript">
//  $(document).ready(function(){
// 	$('.close').on('click',function(){
//  	alert("ok");
// 	});
// });
//  // //    </script>
  	<script type"text/Javascript">
		 $(function(){
    $(".dropdown").hover(            
            function() {
                $('.header_cont .dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.header_cont.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
		$("#edit_profile").hide();
		 $('.btnEdit').click(function(){
		 		$("#about_profile").hide();
		 		$("#edit_profile").show();
		 });
		 $('.btnCancel').click(function(){
		 		$("#about_profile").show();
		 		$("#edit_profile").hide();
		 });
		 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image_upload_preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputFile").change(function () {
        readURL(this);
    });
    $(document).ready(function(){
    	$('.change_pic_btn').click(function(){
    		$('#inputFile').trigger('click');
    	});
    });
    $('#btnCollege').click(function(){
    var i = $('.container .rowIndex:last').attr('id').replace("row","");
    i++;
   // alert(i);
   $('#count_edu').val(i);
    var text = prompt("Enter your college/ Institute details !");
    var row = '<div id="row'+i+'" class="rowIndex addedRow"><input type="text" id="edu'+i+'"  style="display:none" name="edu_'+i+'" value="'+text+'"/></div>';
    $('.container').append(row);
      
    if(text.length){
    	var a='<li class="justlist" id="'+i+'"><p><i class="fa fa-circle-thin circle_font"></i>&nbsp'+text+'&nbsp<i class="close fa fa-times"></i><br></p>';
    	$('ul.justList').append(a);
   // <li class="justlist_<?php echo $i;?>">
		 //   <p><i class="fa fa-circle-thin circle_font" ></i><?php echo $value;?>&nbsp;<i class='close fa fa-times'></i> <br><span></span></p>
         //$('<li/>', {html:"<i class='fa fa-circle-thin circle_font'></i> &nbsp;"+ text + " &nbsp;<i class='close fa fa-times'></i>"}).appendTo('ul.justList')
    }
	});



	$('.justList').on('click', '.close',function(){
	// var currentId = $(this).attr('id');
	// alert(currentId);
	//$('.justlist_1').on('click','.close',function(){
      var i = $('.container .rowIndex:last').attr('id').replace("row","");
     // alert(i);
       $('#row'+i).remove();
       i--;
       //alert(i);
		//alert("ok");
     $(this).parent().remove();
    $('#count_edu').val(i);

	});
	$('#btnSkill').click(function(){
    var text = prompt("Enter your skill details!");
    if(text.length){
        $('<li />',{html: text + " &nbsp;<i class='close fa fa-times'></i>"}).appendTo('ul.justList1')
    }
	});

	$('.justList1').on('click', '.close',function(el){
	    $(this).parent().remove();
	});
    


	  // $('body').on('focus',"#dob", function(){
   //      $(this).datepicker({dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true, yearRange: '1900:+0'});
   //  });
	</script>
	 
</body>
</html>