<!DOCTYPE html>
<html>
<head>
	<title>Educationtotal | Course details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

   
 	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>font-awesome-4.5.0/css/font-awesome.min.css">
    
    <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
 	<link href="<?php echo base_url();?>css/jquery-ui.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style3.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/jquery.lightbox-0.5.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/star-rating-svg.css" rel="stylesheet">

   	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
 	
  	<style type="text/css">
  	.stars i{
  		font-size: 26px;
  		color: #FFD203;
  	}
  	.stars i:hover{
  		color: #FFD203;
  	}
	#chartdiv {
	width		: 100%;
	height		: 435px;
	font-size	: 11px;
	 background: linear-gradient(to bottom, rgba(102, 140, 255,1), rgba(255, 217, 102,1));
    }

    @import url(https://fonts.googleapis.com/css?family=Bree+Serif);

      body {
       
      }
      ul {
          padding:0 0 0 0;
          margin:0 0 40px 0;
      }
      ul li {
          list-style:none;
          margin-bottom:10px;
      }
      ul li.bspHasModal {
          cursor: pointer;
      }
      .modal-body {
          padding:5px !important;
      }
      .modal-content {
          border-radius:0;
      }
      .modal-dialog img {
          text-align:center;
          margin:0 auto;
      }
    .controls{
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold;
    }
    .next {
        float:right;
        text-align:right;
    }
    .text {
      font-family: 'Bree Serif';
      color:#666;
      font-size:11px;
      margin-bottom:10px;
      padding:12px;
      background:#fff;
    }
    .glyphicon-remove-circle:hover {
      cursor: pointer;
    }
    @media screen and (max-width: 380px){
       .col-xxs-12 {
         width:100%;
       }
       .col-xxs-12 img {
         width:100%;
       }
    }
  </style>

</head>

<body >
	
<?php	foreach($result as $res)
		{   ?>
		<input type="hidden" id="ip_address" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">

	<div class="container">
		<div class="row">
			<div class="thebread"><div class="breadcrumb"><a href="education.html">Education</a> >> >><?php echo  $res->school_name; ?></div></div>			 
		</div>
	</div>

	<div class="header_banner">
		<div class="header-img">
			<img src="<?php echo  base_url().$res->profile_image; ?>"> 
		</div>

		<div class="container maincontent" >
			<div class="row">
				<div class="main_info">
					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-7">
								<div class="row">
									<div class="col-sm-5 small_image">
										<img src="<?php echo  base_url().$res->logo; ?>" class="attachment-small wp-post-image" alt="bookinvester" height="2560" width="1667">									</div>
									<div class="col-sm-7 sitename">
										<h2><?php echo  $res->school_name; ?></h2>
										<span><?php echo  $res->district; ?></span>
									</div>
								</div>
							</div>
							<div class="col-sm-5 detailed_info">
								<span>Established In: <?php echo  $res->year_established; ?></span> | <span>Accredited By: AICTE</span> <br>
								<span>Affiliated to:  <?php echo  $res->university_affialiated; ?> </span>
							</div>
						</div>
					</div>
					<!--div class="col-sm-3">
						<div id="post-ratings-163" class="post-ratings">
							<img src="<?php //echo base_url();?>images/rating_on.gif" alt="" class="post-ratings-image">
							<img src="<?php //echo base_url();?>images/rating_on.gif" alt="" class="post-ratings-image">
							<img src="<?php //echo base_url();?>images/rating_on.gif" alt="" class="post-ratings-image">
							<img src="<?php //echo base_url();?>images/rating_off.gif" alt="" class="post-ratings-image">
							<img src="<?php //echo base_url();?>images/rating_off.gif" alt="" class="post-ratings-image"><em>3 Reviews</em>
						</div>					
					</div-->
				</div>
			</div>
		</div>

	</div>  <!-- End of header_banner Section -->

	<div class="container-fluid" data-spy="scroll" data-target="#one" data-offset="20" >
		<div class="row">
			<div class="col-sm-2">
			</div>
			<div class="col-sm-7 abut_sec">				
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
					<h2>About <?php echo  $res->school_name; ?></h2>
				<?php echo $res->about_school;  ?>
				</div>

				<div id="postprograms">
					<h2>Courses</h2>
					<div class="contentBlockSec mar-btm-20">
						<?php $c_t = explode(",",$res->class_type);
           
						 $c_t = explode(",",$res->class_type);
						 $d_n = explode(",",$res->degree_name);
						 $t_i = explode(",",$res->total_admission_intake);
						 ?>
						 <input type="hidden" id="service_id" name="service_id" value="<?php echo $res->service_id; ?>" >
						<h4 class="blockSubHeading">Number of Courses Available:<?php echo count($c_t); ?></h4>
						<div class="ugAndPgCourses">
							<div class="ratingUgAndPg ">
								<div id="btn_ug" class="text-left test innerUgAndUg">UG (<?php echo   count( array_keys( $c_t, "UG" )); ?>)</div>
								<!-- <div class="innerUgAndUg " id="btn_ug" >UG (<?php// echo   count( array_keys( $c_t, "UG" )); ?>)</div> -->
								<!-- <div class="innerUgAndPg bar-show " id="btn_pg">PG (<?php //echo   count( array_keys( $c_t, "UG" )); ?>)</div> -->
								<div id="btn_pg" class="text-right test">PG (<?php echo   count( array_keys( $c_t, "PG" )); ?>)</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div>
							</br>
						<div class="" id="chartdiv">
							
						</div>
		
						</div>
                    </div>


				<div id="postcampusfacilities">
					<h2>Facilities</h2>
                  <?php echo $res->facilities_available;  ?>

				</div>

				<div id="postgallery">
					<h2>Gallery</h2>
					<div class="container">
                    <ul class="row first">
		                <li>
		                    <img  src="<?php echo base_url();?>images/b1.jpg">
		                </li>
		                <li>
		                    <img  src="<?php echo base_url();?>images/b2.jpg">
		                </li>
		                <li>
		                	<img  src="<?php echo base_url();?>images/b3.jpg">
		                </li>
		                <li>
		               	    <img  src="<?php echo base_url();?>images/b4.jpg">
		                </li>
		            </ul>      
				    </div>
				</div>

				<div id="postplacement">
					<h2>Placement</h2>
					<div id="thumbnails">
				     	<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				     	</p>
				    </div>
				</div>

				<div id="postcontact">
					<h2>Contact</h2>
					<div id="thumbnails">
				     	<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				     	</p>
				    </div>
				</div>

				<div id="postreview">
					<h2>Review</h2>
					<div id="thumbnails">
				     	<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				     	</p>
				    </div>
				</div>

				<div id="postcurrricular">
					<h2>Extra Currricular</h2>
					<div id="thumbnails">
				     	<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				     	</p>
				    </div>
				</div>

			</div>
			</div>

			<div class="col-sm-3 right_side" style="margin-top: 25px;">
				<div id="block-college-rate-review-right-block" class="block block-college first odd">
					<div class="review-rating-block customBlock alignCenter">
						<div class="reviewHead">
							<h2>Have you studied in this college? </h2>
							<span class="space_text">Rate it Now </span>
						</div>
						<a target="_blank" href="#">
							<div class="stars myavg_review">
								<i class="fa fa-star"></i>
								<i class="fa fa-star" ></i>
								<i class="fa fa-star" ></i>
								<i class="fa fa-star-half-o" ></i>
								<i class="fa fa-star-o" ></i>

							</div>
						</a>
						<h2><a target="_blank" class="btn-review btn-green" data-toggle="modal" data-target="#myModal" id="test">Write a review</a></h2>
						 <!-- Modal -->
						  <div class="modal fade" id="myModal" role="dialog">
						    <div class="modal-dialog modal-lg">
						      <!-- Modal content-->
						      <div class="modal-content text-left">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h3 class="modal-title">Write a Review</h3>
						        </div>
						        <div class="modal-body">
						           <form role="form">
									  <div class="form-group">
									    <label>College Name <span class="star">&#42;</span></label>
									    <input type="text" class="form-control" placeholder="Manipal Institute of Technology, Manipal">
									  </div>
									  <div class="form-group">
									    <label>Course Name</label>
									    <input type="text" class="form-control" placeholder="Select your course">
									    <label>Graduation Year <span class="star">&#42;</span></label><br>
									     	<select class="selectyear" data-style="btn btn-primary">
										      <option>Select Graduation Year</option>
										      <option>2021</option>
										      <option>2020</option>
										      <option>2019</option>
										      <option>2018</option>
										      <option>2017</option>
										      <option>2016</option>
										      <option>2015</option>
										      <option>2014</option>
										      <option>2013</option>
										      <option>2012</option>
										      <option>2011</option>
										      <option>2010</option>
										      <option>2009</option>
										      <option>2008</option>
										      <option>2007</option>
										      <option>2006</option>
										      <option>2005</option>
										      <option>2004</option>
										      <option>2003</option>
										      <option>2002</option>
										      <option>2001</option>
										      <option>2000</option>
										      <option>1999</option>
										      <option>1998</option>
										      <option>1997</option>
										      <option>1996</option>
										      <option>1995</option>
										  	</select>
									  </div>
									 <!--  start rating part  -->
									<div class="form-field-single form-field collgename-field">
										<label class="college_heading"> Rate your College <span class="star">*</span>
										</label>
										<div class="overall-rating_main-container">
											<div class="form-field-single form-field overall overall-rating_field">
												<div class="form-field-type-fivestar form-field-name-field-overall-rating field-widget-stars form-wrapper" id="edit-field-overall-rating">
													<div class="halfstar halfstar clearfix fivestar-user-stars fivestar-form-item fivestar-basic fivestar-processed">
														<div class="form-item form-type-fivestar form-item-field-overall-rating-und-0-rating" style="display: flex;">
															<label for="edit-field-overall-rating-und-0-rating"> Your overall rating for this college <span class="star">*</span>
															</label>
															<span class="my-rating-7"></span>
															<span class="live-rating"></span>
															<!-- <div class="form-item form-type-select form-item-field-overall-rating-und-0-rating">
																<select style="display: none;" id="edit-field-overall-rating-und-0-rating--2" class="form-select required">
																	<option value="-">Select rating</option>
																	<option value="10">poor</option>
																	<option value="20">poor</option>
																	<option value="30">Average</option>
																	<option value="40">Average</option>
																	<option value="50">Good</option>
																	<option value="60">Good</option>
																	<option value="70">Very Good</option>
																	<option value="80">Very Good</option>
																	<option value="90">Excellent</option>
																	<option value="100">Excellent</option>
																</select>
																<div class="fivestar-widget clearfix fivestar-widget-10">
																	<div class="star star-1 odd star-first on">
																		<a href="#10">poor</a>
																	</div>
																	<div class="star star-2 even on">
																		<a href="#20">poor</a>
																	</div>
																	<div class="star star-3 odd on">
																		<a href="#30">Average</a>
																	</div>
																	<div class="star star-4 even on">
																		<a href="#40">Average</a>
																	</div>
																	<div class="star star-5 odd on">
																		<a href="#50">Good</a>
																	</div>
																	<div class="star star-6 even on">
																		<a href="#60">Good</a>
																	</div>
																	<div class="star star-7 odd on">
																		<a href="#70">Very Good</a>
																	</div>
																	<div class="star star-8 even on">
																		<a href="#80">Very Good</a>
																	</div>
																	<div class="star star-9 odd on">
																		<a href="#90">Excellent</a>
																	</div>
																	<div class="star star-10 even star-last on">
																		<a href="#100">Excellent</a>
																	</div>
																</div>
															</div> -->
														</div>
													</div>
												</div>
												<div id="title_hover_rating" class="hover-rating"></div>
												<div id="title_click_rating" class="click-rating"></div>
											</div>
											</div>
										</div>
									 <!-- End rating part -->
									  <div class="form-group">
									    <label>Your Review Title <small class="smtext">( max 60 characters )</small> <span class="star">&#42;</span></label>
									    <input type="text" class="form-control" placeholder="Describe your college experience">
									  </div>
									  <div class="form-group">
									    <label>Your Review <small class="smtext">( at least 250 characters ) </small><span class="star">&#42;</span></label><br>
									    <textarea rows="5" cols="98" placeholder="Your Review should answer the questions in the right-hand side box to wholistically express your college experience"></textarea>
									  </div>
									  <center><button type="submit" class="btn btn-default" id="btnSubmit">Submit</button></center>
									</form>
						        </div>
						      </div>
						      
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>

			</div> <!-- End of the right side column -->
		</div> <!-- End of the main row -->
	</div> <!-- End of main Container -->


<?php  }  ?>   <!-- result foreach end 	bower_components/jquery/dist -->

	<script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
	
	<script src="<?php echo base_url();?>ui/jquery-ui-1.11.4/jquery-ui.min.js"></script>
  	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
  	<script src="<?php echo base_url();?>js/jquery.lightbox-0.5.min.js"></script>
  	<script src="<?php echo base_url();?>js/jquery.bsPhotoGallery.js"></script>
  	<script>
$(function() {

  // basic use comes with defaults values
  $(".my-rating").starRating({
    initialRating: 4,
    starSize: 25
  });

  // example grabing rating from markup, and custom colors
  $(".my-rating-2").starRating({
    totalStars: 5,
    starSize: 40,
    emptyColor: 'lightgray',
    hoverColor: 'salmon',
    activeColor: 'crimson',
    useGradient: false
  });

  // specify the gradient start and end for the selected stars
  $(".my-rating-3").starRating({
    starSize: 80,
    strokeWidth: 9,
    strokeColor: 'black',
    initialRating: 2,
    starGradient: {
      start: '#93BFE2',
      end: '#105694'
    },
  });

  $(".my-rating-4").starRating({
    totalStars: 5,
    emptyColor: 'lightgray',
    hoverColor: 'salmon',
    activeColor: 'cornflowerblue',
    initialRating: 4,
    strokeWidth: 0,
    useGradient: false,
    callback: function(currentRating, $el){
      alert('rated ' +  currentRating);
      console.log('DOM Element ', $el);
    }
  });

  $(".my-rating-5").starRating({
    initialRating: 4,
    readOnly: true
  });

  $(".my-rating-6").starRating({
    useFullStars: true
  });

  $(".my-rating-7").starRating({
    initialRating: 3.5,
    disableAfterRate: false,
    onHover: function(currentIndex, currentRating, $el){
      console.log('index: ', currentIndex, 'currentRating: ', currentRating, ' DOM element ', $el);
      $('.live-rating').text(currentIndex);
    },
    onLeave: function(currentIndex, currentRating, $el){
      console.log('index: ', currentIndex, 'currentRating: ', currentRating, ' DOM element ', $el);
      $('.live-rating').text(currentRating);
    }
  });

});
</script>
  	<script src="<?php echo base_url();?>js/jquery.star-rating-svg.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/amcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/pie.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/dark.js"></script>
  	<script >
  	var chart = "";
  	
  		$(function() {
		    $('#thumbnails a').lightBox();
		});
		$('#btnSubmit').on('click',function(e){
			e.preventDefault();
			var rating = $('.live-rating').text();
			 $.ajax({
            url:"<?php echo base_url(); ?>" + "review_save",
            data:{rating:rating},
            type:'POST',
            success:function(result){
            	var j = 0;
               myval = result.split(".");
               $('.myavg_review').children().removeClass('fa fa-star-o fa-star fa-star-half-o');
               $.each($('.myavg_review').children(),function(key,val){
                   if(key < myval[0]){
                       $(this).addClass('fa fa-star');
                       j = key+1;
                   }else if(key == j){
                   	if(myval[1] !== null && typeof(myval[1]) != "undefined"){
                   	 if(myval[1][0] > 0  && myval[1][0] < 5){
                         $(this).addClass('fa fa-star-o');
                   	 }else{
                   	 	$(this).addClass('fa fa-star-half-o');
                   	 }}else{
                   	 	 $(this).addClass('fa fa-star-o');
                   	 }

                   }else{
                   	  $(this).addClass('fa fa-star-o');
                   }
               });
               $('#myModal').hide();
               $('.modal-backdrop').removeClass('modal-backdrop fade in');
               $('#test').trigger('click');
            }
        });
		});
		
		$('#btn_ug').on('click',function(e){
			var s_id = $('#service_id').val();
			$('.ratingUgAndPg ').children().removeClass('innerUgAndPg');
			$(this).addClass('innerUgAndUg');
		//alert(s_id);
		    $.ajax({
            url:"<?php echo base_url(); ?>" + "ug",
            data:{service_id:s_id},
            type:'POST',
            success:function(result){

            	  var chart = AmCharts.makeChart( "chartdiv", {
					  "type": "pie",
					  "theme": "dark",
					  "dataProvider": $.parseJSON(result),
					  "valueField": "total_intake",
					  "titleField": "degree_name",
					  "outlineAlpha": 0.4,
					  "depth3D": 15,
					  "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
					  "angle": 30,
					  "export": {
					    "enabled": true
					  }
					} );
            }
        });
		
		});
		
		$('#btn_pg').on('click',function(e){
			var s_id = $('#service_id').val();
			$('.ratingUgAndPg ').children().removeClass('innerUgAndUg');
			$(this).addClass('innerUgAndPg');

		$.ajax({
            url:"<?php echo base_url(); ?>" + "pg",
            data:{service_id:s_id},
            type:'POST',
            success:function(result){
            	 var chart = AmCharts.makeChart( "chartdiv", {
					  "type": "pie",
					  "theme": "dark",
					  "dataProvider": $.parseJSON(result),
					  "valueField": "total_intake",
					  "titleField": "degree_name",
					  "outlineAlpha": 0.4,
					  "depth3D": 15,
					  "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
					  "angle": 30,
					  "export": {
					    "enabled": true
					  }
					} );
            }
        });
		});

		$(document).ready(function(){
    var s_id = $('#service_id').val();
    $.ajax({
            url:"<?php echo base_url(); ?>" + "ug",
            data:{service_id:s_id},
            type:'POST',
            success:function(result){
         var chart = AmCharts.makeChart( "chartdiv", {
            "type": "pie",
            "theme": "dark",
            "dataProvider": $.parseJSON(result),
            "valueField": "total_intake",
            "titleField": "degree_name",
            "outlineAlpha": 0.4,
            "depth3D": 15,
            "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
            "angle": 30,
            "export": {
              "enabled": true
            }
          } );
            }
        }); 
});
// jQuery( '.chart-input' ).off().on( 'input change', function() {
//   var property = jQuery( this ).data( 'property' );
//   var target = chart;
//   var value = Number( this.value );
//   chart.startDuration = 0;

//   if ( property == 'innerRadius' ) {
//     value += "%";
//   }

//   target[ property ] = value;
//   chart.validateNow();
// } );
	
//   	</script>
 <script>
  	$( document ).ready(function() {
  		//alert($('#ip_address').val());
  		var ip =  $('#ip_address').val();
  		 $.ajax({
            url:"<?php echo base_url(); ?>" + "visitors_count",
            data:{ip:ip},
            type:'POST',
            success:function(result){
            }
        });
   // console.log(ip);
});
  	</script>
<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->

<script>
      $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
          "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
          "hasModal" : true
        });
      });
    </script>

<script type="text/javascript" src="<?php echo base_url();?>js/costom.js"></script> 
</body>
</html>
