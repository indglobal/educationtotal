<!DOCTYPE html>
<html lang="en">
<head>
	<title>Education</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo base_url('js/jquery.form.js'); ?>"></script>
	<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.css'); ?>" rel="stylesheet">
	 <!-- Custom Fonts -->
    <link href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet"  type="text/css">
	<!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> -->
	<link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="font-awesome-4.5.0/css/font-awesome.min.css">--> 
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    
    <style>
.error {
color: #D8000C;
font-size:120%;
/*background-color: #FFBABA;*/
/*background-image: url('error.png');*/
}
.success {
color: #4F8A10;
background-color: #DFF2BF;
/*background-image:url('success.png');*/
}
.reg_success{
color: #4F8A10;
background-color: #DFF2BF;
}

.reg_error {
color: #D8000C;
font-size:120%;
/*background-color: #FFBABA;*/
/*background-image: url('error.png');*/
}
</style>

</head>

<body style="font-family: 'Open Sans', sans-serif;">

<section class="fullwidth fixed"><!-- full width starts -->

	<div class="all-header-wrp" ><!-- all header wrap start -->

		<div class="header-top"><!-- header top start -->
			<div class="container" >
				<div class="row">
					<article class="col-sm-3" >
						<!-- <h3>Educationtotal</h3> -->
						<div class="logo-wrp">
							<a href="#"><img src="<?php echo base_url('images/logo.jpg'); ?>" class="img-responsive"></a>
						</div>
					</article>
					<article class="col-sm-6" >
						<div class="header-serch-wrp">
							<select style="font-family: 'FontAwesome'">
								<option>&#xf036; All Categories</option>
								<option>option 1</option>
								<option>option 2</option>
								<option>option 3</option>
								<option>option 4</option>
								<option>option 5</option>
								<option>option 6</option>

							</select>
							<input type="text" id="serch-area" placeholder="search colleges, notes,stores..">
							<input id="serch-btn" type="submit" value="SEARCH">
						</div>
					</article>
					<article class="col-sm-3" >
						<div class="header-signin-wrp">
							<span><a href="#">List Services</a></span>
							<ul>
								<li><a href="#"> Signin </a></li>
								<li><a href="#"> signup </a></li>
							</ul>
						</div>
					</article>
				</div>
			</div>
		</div><!-- header top end -->

		<div class="header-bottom"><!-- header bottom start -->
			<div class="container">
				<div class="row">
					<article class="col-sm-3" >
					</article>
					<article class="col-sm-6" >
					</article>
					<article class="col-sm-3" >
					</article>
				</div>
			</div>
		</div><!-- header bottom end -->

	</div><!-- all header wrap End -->

</section><!-- full width end -->
	<br><br><br><br><br>
		<div class="container" style="padding: 0;">
			<div class="row">

				<article class="col-md-2"></article>

				<article class="col-md-10" style="padding:0; ">
					<section class="forum-outer">
						<div class="forum-wrp">
							<form id="search" method="post" enctype="multipart/form-data" class="forum-form">
                                
                                <div id="f_success" class="success"></div>
                                <div id="f_error" class="error"></div>
       
								<div class="form-head">
									<h3><span>ADD SERVICE</span></h3>
								</div>
	                            <input type="hidden" name="user_id" value="1">
								
								<div class="form-group"> 
									<input type="text" id="title" name="title" placeholder="Title">
								</div>

								<div class="form-group"> 
									<select  id="cat_id" name="cat_id" data-placeholder="Choose a Main Category">
                                        <option required value="0">Choose a menu</option>
                                        <?php foreach ($menu as $m) {//echo"<pre>";print_r($categories); ?>
                                        <option value="<?php echo $m->cat_id ?>"><?php echo $m->cat_name ?></option>
                                        <?php } ?>
                                   </select>
								</div>

                                <div id="menu_sub" style="display:none;" class="form-group"> 
									<select  id="subcat_id" name="subcat_id">
                                        <option value="0">Select Sub-menu</option>
                                    </select>
								</div>

								<div id="menu_category"  style="display:none;" class="form-group"> 
									<select  id="sub_cat_second_id" name="sub_cat_second_id">
                                       <option value="0">Select category</option>
                                    </select>
								</div>

								<div id="menu_sub_category"  style="display:none;"  class="form-group"> 
									<select  id="sub_cat_thired_id" name="sub_cat_thired_id">
                                        <option value="0">Select sub category</option>
                                    </select>
								</div>


								<div class="form-group"> 
									<textarea name="about" id="about" placeholder="About"></textarea>
								</div>

								<div style="height:auto;" id="result">
									

								</div>

                          <!--  <input id="save_add_service" type="submit" value="SEARCH">
                             -->   <button type="submit" >search</button>  
							</form>
						</div>
					</section>
				</article>
			</div>
		</div>

		



<!-- ALL FOOTER STARTS -->

<!-- footer top start -->
<section class="footer-top">
	<div class="wraper">
		<div class="container">
			<div class="row">
				<article class="col-sm-3">
					<h4>Register For Newsletter</h4>
				</article>

				<article class="col-sm-3">
					<input type="text" placeholder="Name" id="newsltr-name"> 
				</article>

				<article class="col-sm-3">
					<input type="email" placeholder="email" id="newsltr-email">
				</article>

				<article class="col-sm-3">
					<input type="submit" value="Register Now" id="newsltr-regstr">
				</article>

			</div>
		</div>
	</div>
</section>
<!-- footer top ends -->


<!-- footer starts -->
<section class="footer-outer">

<div class="overlay"></div>

	<div class="footer-wrp">
		<div class="container">
			<div class="row">
				<article class="col-sm-2">
					<div class="futer-each-col">
						<h5>Education Total</h5>
						<p><a href="#">About Us</a></p>
						<p><a href="#">In The Media</a></p>
						<p><a href="#">Contact Us</a></p>
						<p><a href="#">Customer Speak</a></p>
						<p><a href="#">Grievance Redresseal</a></p>
					</div>
				</article>

				<article class="col-sm-2">
					<div class="futer-each-col">
						<h5>Article</h5>
						<p><a href="#">About Us</a></p>
						<p><a href="#">In The Media</a></p>
						<p><a href="#">Contact Us</a></p>
						<p><a href="#">Customer Speak</a></p>
						<p><a href="#">Grievance Redresseal</a></p>
					</div>
				</article>

				<article class="col-sm-2">
					<div class="futer-each-col">
						<h5>Work with us</h5>
						<p><a href="#">Post A Add</a></p>
						<p><a href="#">Become A vender</a></p>
						<p><a href="#">Become Service Provider</a></p>
						<p><a href="#">Add Service Provider</a></p>
						<p><a href="#">Grievance Redresseal</a></p>
					</div>
				</article>

				<article class="col-sm-2">
					<div class="futer-each-col">
						<h5>For business</h5>
						<p><a href="#">Corporate Training</a></p>
						<p><a href="#">Training Partner</a></p>
						
					</div>
				</article>


			</div>
		</div>

	</div>

	<div class="footer-bottom">
		<div class="">
			<div class="row">
				<article class="fut-botm-left">
					<p>@ 2009-2015-Education Total. All Right Reserved</p>
				</article>
				<article class="fut-botm-right">
					<p>Terms of use &#8226; Disclaimer &#8226; Privacy Policy</p>
				</article>
			</div>
		</div>
	</div>

</section>




<script>
	$(document).ready(function(){

		var wH = $(window).height();

		$('.forum-outer').css("min-height", wH);
	});
</script>

<script>
$(document).on('change','#cat_id',function(){
	$('#menu_sub').hide();
	$('#menu_category').hide();
	$('#menu_sub_category').hide(); 
    $('#subcat_id').val(''); 
    $('#sub_cat_second_id').val('');   
    $('#sub_cat_thired_id').val('');
    var value = $(this).val();
    if(value != 0){
        var url = "<?php echo base_url()?>sub_menu/"+value;
        $.ajax({
        url: url,
        success: function(data)
            {  
                $('#menu_sub').show();       
                if(data) $('#subcat_id').html(data); 
            }
        });
  
    }else{
       
    }
});

$(document).on('change','#subcat_id',function(){
	$('#menu_category').hide();
	$('#menu_sub_category').hide(); 
    $('#sub_cat_second_id').val('');   
    $('#sub_cat_thired_id').val('');
    var value = $(this).val();
    if(value != 0){
        var url = "<?php echo base_url()?>get_category/"+value;
        $.ajax({
        url: url,
        success: function(data)
            {  
                $('#menu_category').show();      
              	if(data) $('#sub_cat_second_id').html(data); 
           	}
        });
    }else
    {

    }
  
});

$(document).on('change','#sub_cat_second_id',function(){
	$('#menu_sub_category').hide(); 
    $('#sub_cat_thired_id').val('');
    var value = $(this).val();
    if(value != 0){
    	var url = "<?php echo base_url()?>get_sub_category/"+value;
        $.ajax({
        url: url,
        dataType: 'html',
        success: function(data)
           {  
     
             	$('#menu_sub_category').show();      
              	if(data) $('#sub_cat_thired_id').html(data); 
           }
        });
    }else
    {
    
    }
  
});

$(document).on('change','#sub_cat_thired_id',function(){

var value = $(this).val();
//alert(value);
    if(value != 0){	 
    	if(value == 1)
    	{
    		var url = "<?php echo base_url()?>regular_playschool";
        }		
    	
        $.ajax({
        url: url,	   	
        dataType: 'html',
        success: function(data)
           { 
                $('#result').html(data);
           }
        });


    }else
    {
    
    } 
});

$("#search").ajaxForm({ 
			
	type:"POST",
	url: "<?php echo base_url(); ?>" + "save_service",
	datatype : "data",
	success: function(data){
		if(data == 1)
		{    $('#title').val('');
	         $('#about').val('');
	         $('#cat_id').val('');

	         $('#sub_cat_thired_id').hide();
             $('#sub_cat_second_id').hide();
             $('#subcat_id').hide();

			 $('#result').hide();

             $("#f_error").hide();
          $("#f_success").append("Service added successfully");
          setTimeout(function(){
            window.location = data;
          }, 5000);
		}
					 
      }
           });

</script>

</body>
</html>