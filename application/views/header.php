<!DOCTYPE html>
<html lang="en">
<head>
	<title>Education</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Style Sheets -->
	<link href="<?php echo base_url();?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>font-awesome-4.5.0/css/font-awesome.min.css">
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
							
	<select id="child" style="font-family: 'FontAwesome'">
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

<input type="text" id="serch_area" name="serch-area" placeholder="search colleges, notes,stores..">
<input id="serch-btn" type="submit" value="SEARCH">
<ul class="dropdown-menu txtcountry" style="margin-left:15px;margin-right:0px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry">					
							
						</div>
					</article>
					<article class="col-sm-3" >
						<div class="header-signin-wrp">
							<span><a href="#">List Services</a></span>
							<ul>
<li><a href="<?php echo base_url();?>register_cont/signin">Sign in </a></li>
<li><a href="<?php echo base_url();?>register_cont/user_signup"> Sign up </a></li>
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
                        $('#DropdownCountry').append('<li role="presentation" >' + value['subcat_thired_name'] + '</li>');
                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#serch_area').val($(this).text());
    });
});
</script>
