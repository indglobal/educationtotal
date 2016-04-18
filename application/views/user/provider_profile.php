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
  <script src="<?php echo base_url('js/jquery.form.js'); ?>"></script>

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
	

<br><br><br>
<!-- Start body content.............................................. -->
	<div class="container-fluid main_body">
		<div class="row main_face">

			<div class="col-sm-1 left_cont">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#profile"><img src="<?php echo base_url();?>user_panel_design/images/profile.png" alt="profile"><p>Profile</p></a></li>
					<li><a  href="<?php echo base_url();?>service/add_service"><img src="http://115.118.113.154/edutotal/wp-content/uploads/2015/10/download.png" alt="profile"><p> Add Service</p></a></li>
			     	<li><a  href="<?php echo base_url();?>service/list_service"><img src="<?php echo base_url();?>user_panel_design/images/doc.png" alt="profile"><p>List Services</p></a></li>		
					<li><a  href="#"><img src="<?php echo base_url();?>user_panel_design/images/doc.png" alt="profile"><p>Document</p></a></li>

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
								  <li class="active">Provider Profile Pages</li>
								</ol>
					      </div>

						  <div class="col-sm-12 body_header_caption">
						      	<h2>My Profile</h2>
						  </div>

						   <div class="col-sm-2 left_panel">
							  <div class="col-sm-12 body_left">
									<div class="col-sm-12 line_border">
									</div>
									<!--<div class="col-sm-12 text-right">
										<p><a href="#"> Change Password</a></p><br>
									</div>-->
									<div class="col-sm-12 ">
										<img src="<?php echo base_url();?>user_panel_design/images/ramesh.png" alt="ramesh" class="img-responsive"><br>
										<h4><?php echo $getDetails_fromsignup[0]['fname'];?></h4><br>
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
							      <!--	<div class="col-sm-1">
							      		<button class="btn btn-primary btnEdit">
							      			<i class="fa fa-pencil"></i> Edit
										</button>
							      	</div>-->
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
                            </article><!-- End of my profile section -->
						  </div> <!-- End of the innner tab content -->
					  </div> <!-- End of body_right section -->
						 

						    	</div><!-- End of myprofile tab -->		
						  </div> <!-- End of the innner tab content -->
					  </div> <!-- End of body_right section -->
					</article><!-- End of my profile section -->
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