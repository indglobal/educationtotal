<!DOCTYPE html>
<html lang="en">
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
    </style>
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
				<li><a data-toggle="tab" href="<?php echo base_url();?>user/provider_panel"><img src="<?php echo base_url();?>user_panel_design/images/profile.png" alt="profile"><p>Profile</p></a></li>
				<li class="active"><a data-toggle="tab" href="<?php echo base_url();?>service/add_service"><img src="http://115.118.113.154/edutotal/wp-content/uploads/2015/10/download.png" alt="profile"><p> Add Service</p></a></li>
				<li><a data-toggle="tab" href="<?php echo base_url();?>service/list_service"><img src="<?php echo base_url();?>user_panel_design/images/doc.png" alt="profile"><p>List Services</p></a></li>
				<li><a data-toggle="tab" href="#"><img src="<?php echo base_url();?>user_panel_design/images/doc.png" alt="profile"><p>Document</p></a></li>
			</ul>
		</div>

		<div class="col-sm-11 mid_cont">
		<div class="tab-content">
		<div id="profile" class="tab-pane fade in active">
		 
			<div class="col-sm-12 body_header">
			    <ol class="breadcrumb">
				    <li><a href="#">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active">Provider Profile Pages</li>
				</ol>
			</div>
			<div class="col-sm-12 body_header_caption">
				<h2>Add Service</h2>
			</div>

		    <div class="col-sm-10 body_right">
		    	<div class="col-sm-12 ">

                    <div id="f_success" class="success"></div>
                    <div id="f_error" class="error"></div>

						<div class="forum-wrp">
							<form id="search" method="post" enctype="multipart/form-data" class="forum-form">
               
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
                             -->   <button type="submit" >submit</button>  
							</form>
						</div>
				</div>	
			</div>	
	    </div>	
		</div>
	    </div>	
	</div>	
	</div>	

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
    alert(value);
    if(value != 0){	 
    	if(value == 1)
    	{
    		var url = "<?php echo base_url()?>regular_playschool";
        }
        if(value == 2)
    	{
    		var url = "<?php echo base_url()?>regular_school";
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