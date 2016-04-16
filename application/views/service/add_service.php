<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>user_panel_design/css/style.css">	

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="<?php echo base_url('js/jquery.form.js'); ?>"></script>
	<link href="<?php echo base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">

  </head>

<body>

<br><br><br>
	<!-- Start body content.............................................. -->
	<div class="container-fluid main_body">
	<div class="row main_face">

	<?php include("left_panel_provider.php");?>
		<div class="col-sm-11 mid_cont">
		<div class="tab-content">
		<div id="profile" class="tab-pane fade in active">
		 
			<div class="col-sm-12 body_header">
			    <ol class="breadcrumb">
				    <li><a href="#">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active">Add Service</li>
				</ol>
			</div>
			<div class="col-sm-12 body_header_caption">
				<h2>Add Service</h2>
			</div>
<br>
		    <div class="col-sm-12 body_right">
		    	<div class="col-sm-12 ">

                    <div id="f_success" class="success"></div>
                    <div id="f_error" class="error"></div>

						<div class="forum-wrp">
							<form id="search" method="post" enctype="multipart/form-data" class="forum-form">
               <?php if(isset($this->session->userdata['is_userlogged_in']['IID']) )  
               $user_id = $this->session->userdata['is_userlogged_in']['IID'];
               ?>
	                            <input type="hidden" name="user_id" value="<?php echo  $user_id; ?> ">
								<br>

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
									<select   id="sub_cat_second_id" name="sub_cat_second_id">
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
                                
                                <div id="submit" style="display:none;">
								<button type="submit" >submit</button> 
                                </div> 
                          <!--  <input id="save_add_service" type="submit" value="SEARCH">
                             -->   
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
//$('#result').hide(); 
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
                $('#submit').show();
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
            window.location = "<?php echo base_url(); ?>" + "list_service";
          }, 5000);
		}
					 
      }
           });

</script>

</body>
</html>