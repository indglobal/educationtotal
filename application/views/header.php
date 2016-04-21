<!DOCTYPE html>
<html lang="en">
<head>
	<title>Education</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Style Sheets -->
	<link href="<?php echo base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>font-awesome-4.5.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <style type="text/css">
	.dropdown img{
	   width: 60px;
	   float: left;
	}
	.dropdown a.dropdown-toggle{
		line-height: 50px;
		margin-left: 5px;
		font-size: 14px;
	}

	
	input[type=text],textarea{
    display: block;
    width: 50%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
input[type="file"]{
	 display: block;
    width: 50%;
    height: 34px;
    font-size: 12px;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
 select{
	
	 width: 50%;
	background:url(../images/down.png) no-repeat, #fff;
	background-size: 10px;
	background-position: 98% 50%;
	padding-right: 30px;
	border-top-left-radius: 5px;
	border-bottom-left-radius: 5px;
	font-size: 15px;
	color: #666;
	border-radius: 4px;

}

textarea {
    width: 50%;
    height: 8em;
    border-radius: 4px;
}
.form-head h3{
	padding: 10px 0px 30px;
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
				<a href="#"><img src="<?php echo base_url();?>images/logo.jpg" class="img-responsive"></a>
			</div>
		</article>
		<article class="col-sm-6" >
			<div class="header-serch-wrp">
		        <form action="<?php echo base_url();?>service/search_result"  method="post" >	

			        <select id="child" name="category" style="font-family: 'FontAwesome'">
					    <option>&#xf036; All Categories</option>
						<?php 
		                foreach($cat as $cut){
		                ?>			
					    <option value="<?php echo $cut['sub_cat_second_id'];?>">
						<?php echo $cut['subcat_second_name'];?>
						</option>		 
		                <?php
		                } ?>
		            </select>
			        <input type="select" id="serch_area" name="serch-area" placeholder="search colleges, notes,stores..">
					<input type="hidden" id="sub_cat" value="" name="sub_cat">
					<input id="serch-btn" type="submit" value="SEARCH">
					<ul class="dropdown-menu txtcountry" style="left:32%;margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry">					
				</form>
			</div>
		</article>
  				    

                    <?php if(isset($this->session->userdata['is_userlogged_in']['UN']) )  
	                { ?>
                 	<article class="col-sm-3" >
           			<div class="col-sm-12 chip dropdown" style="padding:0;">
				    <img src="<?php echo base_url();?>user_panel_design/images/ra.png" alt="ra" class="img-circle img-responsive" width="50" height="50"> <?php echo $this->session->userdata['is_userlogged_in']['UN']; ?>
				     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
		            <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url();?>logout">Logout</a></li>
		            </ul>
			        </div>
			        </article>
		       <?php   }else
		       {  ?>
					<article class="col-sm-3" >
						<div class="header-signin-wrp">
							<span><a href="#">List Services</a></span>
							<ul>
<li><a href="<?php echo base_url();?>register_cont/signin">Sign in </a></li>
<li><a href="<?php echo base_url();?>register_cont/user_signup"> Sign up </a></li>
							</ul>
						</div>
					</article>
    			<?php } ?>

			
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

<script type="text/javascript">

$(document).ready(function () {
    $("#serch_area").keyup(function () {
    	$.ajax({
            type: "POST",
            url: "<?php echo base_url();?>register_cont/GetCatename",
            data: {
                cat_id: $("#child").val(),
                keyword: $("#serch_area").val()
            },
            dataType: "json",
            success: function (data) {
				//alert(1);
                if (data.length > 0) {
                    $('#DropdownCountry').empty();
                    $('#serch_area').attr("data-toggle", "dropdown");
                    $('#DropdownCountry').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#serch_area').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownCountry').append('<li role="presentation" class="autosuggests" id="'+value['sub_cat_thired_id'] +'">' + value['subcat_thired_name'] + '</li>');
                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#serch_area').val($(this).text());
    });
    $('#DropdownCountry').on('click','.autosuggests',function(){
    	$('#serch_area').attr('data_id',$(this).attr('id'));
    	$('#serch_area').val($(this).html());
    	$('#sub_cat').val($(this).attr('id'));
    //var data	$('#serch_area').attr('data_id');

    })
});
</script>
