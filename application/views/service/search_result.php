<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link href="<?php echo base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
 	<link href="<?php echo base_url();?>css/style2.css" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>font-awesome-4.5.0/css/font-awesome.min.css">
 <!--  	<link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="css/style2.css"> -->
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="">
				<div class="col-sm-3 left_cont">
						<fieldset class="checkbox">
							<legend>Course Type</legend>	
							<div class="sf-checkbox-wrapper">
								<label><input type="checkbox"> Full Time Classroom</label><br>
								<label><input type="checkbox"> Others</label><br>
								<label><input type="checkbox"> Others<br></label><br>
							</div>
						</fieldset>
						<fieldset class="checkbox">
							<legend>Course Duration</legend>	
							<div class="">
								<label><input type="checkbox"> 1-2 year</label> <br>
								<label><input type="checkbox"> 1-2 year<br></label><br>
								<label><input type="checkbox"> 3-4 year</label><br>
								<label><input type="checkbox"> 5-6 year</label><br>
								<label><input type="checkbox"> 7-8 year</label><br>
							</div>
						</fieldset>
						<fieldset class="checkbox">
							<legend>Course Fee</legend>	
							<div class="">
								
								<label><input type="checkbox"> 1 to 2 lacks</label><br>
								<label><input type="checkbox"> 2 to 3 lacks</label><br>
								<label><input type="checkbox"> 6 to 7 lacks</label><br>
								<label><input type="checkbox"> 1 to 2 lacks</label><br>
								<label><input type="checkbox"> 2 to 3 lacks</label><br>
								<label><input type="checkbox"> 6 to 7 lacks</label><br>
								<label><input type="checkbox"> 1 to 2 lacks</label><br>
								<label><input type="checkbox"> 2 to 3 lacks</label><br>
								<label><input type="checkbox"> 6 to 7 lacks</label><br>
								<label><input type="checkbox"> 6 to 7 lacks</label><br>
								<label><input type="checkbox"> 8 to 10 lacks</label><br>
							
							</div>
						</fieldset>
						<fieldset class="checkbox">
							<legend>College Type</legend>	
							<div class="">
								<label><input type="checkbox"> Private College</label><br>
								<label><input type="checkbox"> Trustee College</label><br>
								<label><input type="checkbox"> University College</label><br>
								<label><input type="checkbox"> Goverment College</label><br>
								<label><input type="checkbox"> Deemed University</label><br>
							</div>
						</fieldset>
						<fieldset class="checkbox">
							<legend>Location</legend>	
							<div class="">
								<label><input type="checkbox"> Delhi</label><br>
								<label><input type="checkbox"> Electronic City</label><br>
								<label><input type="checkbox"> Hubli</label><br>
								<label><input type="checkbox"> jaipur</label><br>
								<label><input type="checkbox"> Koramangala</label><br>
								<label><input type="checkbox"> Maharashtra</label><br>
								<label><input type="checkbox"> Delhi</label><br>
								<label><input type="checkbox"> Electronic City</label><br>
								<label><input type="checkbox"> Hubli</label><br>
								<label><input type="checkbox"> Rajasthan</label><br>
							</div>
						</fieldset>
						<fieldset class="checkbox">
							<legend></legend>	
							<div class="">
								<label><input type="checkbox"> Delhi</label> <br>
								<label><input type="checkbox"> Jaipur</label><br>
								<label><input type="checkbox"> Pune</label><br>
							</div>
						</fieldset>
						
					</div>
					<div class="col-sm-9">
				<!-- slider banner  -->
						<div class="col-sm-12">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner" role="listbox">
								    <div class="item active">
								      <img src="<?php echo base_url();?>images/banner.jpg" alt="banner">
								    </div>
								    <div class="item">
								      <img src="<?php echo base_url();?>images/banner.jpg" alt="banner">
								    </div>

								    <div class="item">
								      <img src="<?php echo base_url();?>images/banner.jpg" alt="banner">
								    </div>

								    <div class="item">
								      <img src="<?php echo base_url();?>images/banner.jpg" alt="banner">
								    </div>
								</div>
							</div>
						</div>
						<div class="col-sm-8 top_header">
								<span class="foundcount">Showing 1 results in Under-graduation</span>				
						</div>
						<div class="col-sm-8 postdata">
								<ul class="result">
									<li style="height: auto;"><div style="float:left;">
									<a href="edu.html">
										<img src="<?php echo base_url();?>images/bookinvester.jpg" alt="Demo other" height="150" width="98">
									</a>
								</div>
							<?php	foreach($result as $res)
								{   ?>
 
							
								<div class="search_content">
								<h3><a href="edu.html"><?php echo  $res->title; ?></a></h3>
								<p> Pune, Hubli</p>
								<p class="rating"></p>
								<div id="post-ratings-163" class="post-ratings">
									<img src="<?php echo base_url();?>images/rating_on.gif" alt="2 votes, average: 3.00 out of 5" title="2 votes, average: 3.00 out of 5" class="post-ratings-image">
									<img src="<?php echo base_url();?>images/rating_on.gif" alt="2 votes, average: 3.00 out of 5" title="2 votes, average: 3.00 out of 5" class="post-ratings-image">
									<img src="<?php echo base_url();?>images/rating_on.gif" alt="2 votes, average: 3.00 out of 5" title="2 votes, average: 3.00 out of 5" class="post-ratings-image">
									<img src="<?php echo base_url();?>images/rating_off.gif" alt="2 votes, average: 3.00 out of 5" title="2 votes, average: 3.00 out of 5" class="post-ratings-image">
									<img src="<?php echo base_url();?>images/rating_off.gif" alt="2 votes, average: 3.00 out of 5" title="2 votes, average: 3.00 out of 5" class="post-ratings-image">
									<em>2 Reviews</em>
								</div>
								<div id="post-ratings-163-loading" class="post-ratings-loading">
									<img src="<?php echo base_url();?>images/loading.gif" alt="Loading..." title="Loading..." class="post-ratings-image" height="16" width="16">Loading...
								</div><p></p>

								<small>Established 1974</small>
								<small>Avaliable Facility:</small>
								<ul>
									<li><img class="tooltip tooltipstered" src="<?php echo base_url();?>images/books.jpg"> </li>
								<li><img class="tooltip tooltipstered" src="<?php echo base_url();?>images/bad.jpg">  </li>
								<li> <img class="tooltip tooltipstered" src="<?php echo base_url();?>images/lemp.jpg"> </li>
								<li><img class="tooltip tooltipstered" src="<?php echo base_url();?>images/food.jpg">  </li>
								</ul>
  								</div>
                          <?php  }  ?>
							</li></ul>	
						</div>
						<div class="col-sm-4 postImage">
								
									<img class="first_img" src="<?php echo base_url();?>images/currer.jpg">
									<img class="second_img" src="<?php echo base_url();?>images/true1.jpg">		
						</div> <!-- End of postImage column -->
						
						<div class="col-sm-12 iwell">
							<img src="<?php echo base_url();?>images/iwell-imge.jpg">
						</div>
						<div class="col-sm-12">
							<form id="myForm">
								<h3> Confused about Which college choose </h3>
								<div class="row textboxes">
									<div class="col-sm-12 text-center">
										<input type="text" placeholder=" Your Name">
										<input type="text" placeholder=" Email Id">
										<input type="text" placeholder=" Mobile Number">
									</div>
								</div>
								<div class="row selectbox">
									<div class="col-sm-12 text-center">
										<select>
											<option>B.com</option>
											<option>M.com</option>
											<option>B.A</option>
										</select>
										<select>
											<option>Telecourse</option>
											<option>Telecourse</option>
											<option>Telecourse</option>
										</select>
										<select>
											<option>Locality1</option>
											<option>Locality2</option>
											<option>Locality3</option>
										</select>
									</div>
									<div class="col-sm-12 text-center confirm">
										<label><input type="checkbox"> I accept T&amp;C and allow HTCampus to contact me </label>
									</div>
									<div class="col-sm-12 text-center">
										<button class="btn btn-primary btnSubmit">SUBMIT</button>
									</div>
								</div>
							</form>
						</div>
						
					</div><!--  End of column weight 9 -->
					
				</div> <!-- End of black column -->
			</div> <!-- End of row -->
		</div> <!-- End of container -->
		<div class="container-fluid news">
			<div class="row">
				<div class="col-sm-12">
					<form id="newsForm" class="text-center">
						<label>Register for Newletters</label>
						<input type="text" placeholder=" Name">
						<input type="text" placeholder=" Email">
						<button class="btn btn-primary btnSignup">Register Now</button>
					</form>
				</div>
			</div>
		</div>
		
		<div class="clear">
		</div>
		
	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script>
		$('.postdata').hover(function(){
			$(this).css("background-color","#FAFAFA");
			$(this).css("border-top", "1px solid #cccccc");
			$(this).css("border-bottom", "1px solid #cccccc");
		},
		function(){
			$(this).css("background-color","#FFFFFF");
			$(this).css("border", "none");
		}
		);
	</script>
</body>
</html>