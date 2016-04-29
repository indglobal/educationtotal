

<!-- home first View  ends-->

<!-- ALL FOOTER STARTS -->

<!-- footer top start -->
<!-- <section class="footer-top">
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
</section> -->
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
						<p><a href="#" data-toggle="modal" data-target="#SignInModelPro">Add Service Provider</a></p>
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
<!-- footer ends -->



<!-- MODELS STARTS -->
<!-- Modal -->
<div class="login_modal">
<div class="modal fade" id="SignUpModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        	</button>
 		<div class="row">
 			<div class="col-md-6">
 				<img class="img-responsive"  src="images/edu-stdnt2.jpg">
 			</div>

 			<div class="col-md-6 modl_form text-center">
 			<div class="conjust">
 			
 				<h1>Student Signup</h1>
 				<form id="user_sign_up" onsubmit="return signUpvalidate();">
 					<div class="form-group">
 					   <div class="Fname space col-md-6">
      						<input type="text" class="form-control" id="Fname" placeholder="First Name">
    					</div>
 					</div>
 					<div class="form-group">
 					   <div class="space col-md-6">
      						<input type="" class="form-control" id="Lname" placeholder="Last Name">
    					</div>
 					</div>
 					<div class="form-group">
 					   	<div class="space col-md-12">
      						<input type="text" class="form-control" id="uemail" placeholder="Email">
    					</div>
 					</div>
 					<div class="form-group">
 					   <div class="space col-md-12">
      						<input type="password" class="form-control" id="upassword" placeholder="password">
    					</div>
 					</div>

 					<div class="form-group">
 					   <div class="space col-md-12">
      						<input type="password" class="form-control" id="Cupassword" placeholder="Confirm">
    					</div>
 					</div>
 					
 					<div class="form-group">
 					   <div class="space col-md-12">
      						<button type="submit" class="btn btn-default">Sign Up</button>
    					</div>
 					</div>
 				</form>	
 				</div>
 			</div>
 			<center>
 			<p>Don't have an account..?Sign In</p>
 			<span class="enter_mail">Social Sign In</span>
 			<div class="face_goog">
 					<button type="button" class="btn btn-default"><i class="fa fa-facebook" aria-hidden="true"></i> connect <i class="fa fa-angle-right" aria-hidden="true"></i>
					</button>
					<button type="button" class="btn btn-default1"><i class="fa fa-google" aria-hidden="true"></i> connect <i class="fa fa-angle-right" aria-hidden="true"></i>
					</button>
			</div>
			</center>

 		</div>

      </div>
    </div>
  </div>
</div>

</div>



<!-- Modal -->
<div class="sign_modal">
<div class="modal fade" id="SignInModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        	</button>
 		<div class="row">
 			<div class="col-md-6">
 				<img class="img-responsive"  src="images/edu-stdnt.jpg">
 			</div>

 			<div class="col-md-6 modl_form text-center">
 			<div class="conjust">
 			
 				<h1>Education Total</h1>
 					<h4>USER SIGN IN</h4>
 				<form id="user_signin" onsubmit="return uservalidate();">
 					<div class="form-group">
 					   	<div class="space col-md-12">
      						<input id="uemail" type="email" class="form-control" id="email" placeholder="Enter Email">
    					</div>
 					</div>
 					<div class="form-group">
 					   <div class="space col-md-12">
      						<input id="upassword" type="password" class="form-control" id="pwd" placeholder="Enter password">
    					</div>
 					</div>
 					<div class="form-group">
 					   <div class="space col-md-12">
      						<button type="submit" class="btn btn-default">Sign In</button>
    					</div>
 					</div>
 				</form>	
 				</div>
 			</div>
 			<center>
 			<!-- <p>Don't have an account..?Sign In</p> -->
 			<span class="enter_mail">Sign In With..</span>
 			<div class="face_goog">
 					<button type="button" class="btn btn-default"><i class="fa fa-facebook" aria-hidden="true"></i> connect <i class="fa fa-angle-right" aria-hidden="true"></i>
					</button>
					<button type="button" class="btn btn-default1"><i class="fa fa-google" aria-hidden="true"></i> connect <i class="fa fa-angle-right" aria-hidden="true"></i>
					</button>
			</div>
			</center>

 		</div>

      </div>
    </div>
  </div>
</div>

</div>

<!-- Modal -->
<div class="sign_modal">
<div class="modal fade" id="SignInModelPro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        	</button>
 		<div class="row">
 			<div class="col-md-6">
 				<img class="img-responsive"  src="images/edu-clg.jpg">
 			</div>

 			<div class="col-md-6 modl_form text-center">
 			<div class="conjust">
 			
 				<h1>Education Total</h1>
 				<form id="pro_sign_up" onsubmit="return prosignUpvalidate();">
 					<div class="form-group">
 					   <div class="Fname space col-md-6">
      						<input type="text" class="form-control" id="Fname" placeholder="First Name">
    					</div>
 					</div>
 					<div class="form-group">
 					   <div class="space col-md-6">
      						<input type="" class="form-control" id="Lname" placeholder="Last Name">
    					</div>
 					</div>
 					<div class="form-group">
 					   	<div class="space col-md-12">
      						<input type="text" class="form-control" id="uemail" placeholder="Email">
    					</div>
 					</div>
 					<div class="form-group">
 					   <div class="space col-md-12">
      						<input type="password" class="form-control" id="upassword" placeholder="password">
    					</div>
 					</div>

 					<div class="form-group">
 					   <div class="space col-md-12">
      						<input type="password" class="form-control" id="Cupassword" placeholder="Confirm">
    					</div>
 					</div>
 					
 					<div class="form-group">
 					   <div class="space col-md-12">
      						<button type="submit" class="btn btn-default">Sign Up</button>
    					</div>
 					</div>
 				</form>	
 				</div>
 			</div>
 			<center>
 			<!-- <p>Don't have an account..?Sign In</p> -->
 			<span class="enter_mail">Sign In With..</span>
 			<div class="face_goog">
 					<button type="button" class="btn btn-default"><i class="fa fa-facebook" aria-hidden="true"></i> connect <i class="fa fa-angle-right" aria-hidden="true"></i>
					</button>
					<button type="button" class="btn btn-default1"><i class="fa fa-google" aria-hidden="true"></i> connect <i class="fa fa-angle-right" aria-hidden="true"></i>
					</button>
			</div>
			</center>

 		</div>

      </div>
    </div>
  </div>
</div>

</div>
<!-- MODELS ENDS -->

<script src="bootstrap/js/bootstrap.js" ></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/validate.js"></script>

<script type="text/javascript">
	
$(document).ready(function(){
		var wH = $(window).height();
		var vW = $(window).width();
		$('.fullwidth-owl-wrp .each-slide').css("height", wH);
		$('.fullwidth-owl-wrp .each-slide').css("width", vW);
		
	// $('.home-botm-owl').owlCarousel({
	//     loop:true,
	//     nav:false,
	//     pagination: false,
	//     dots: false,
	//     autoplay:false,
	//     responsive:{
	//         0:{
	//             items:1
	//         },
	//         600:{
	//             items:2
	//         },
	//         1000:{
	//             items:4
	//         }
	//     }
	// })

	// owl custome nav
	var slider = $('.home-botm-owl').owlCarousel();
    // Custom Navigation Events
    $(".next").on('click', function(){
        slider.trigger('next.owl.carousel');
    });
    $(".prev").on('click', function(){
        slider.trigger('prev.owl.carousel');
    });


	$('.menu-bar').click(function(){
		 $(".all-header-wrp.fixed").css("top","0");
		 $(this).hide(700);
	});


	$(".myCarousel").owlCarousel({
		 loop:true,
	    nav:false,
	    pagination: false,
	    dots: false,
	    autoplay:true,
	    animateOut: 'fadeOut',
	    autoplayTimeout:1500,
	    // autoplaySpeed: 100,
	    items:1
	});


	$('.owl-carousel1').owlCarousel({
    loop:true,
    margin:10,
    // autoplay:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

		$('.owl-carousel2').owlCarousel({
   loop:true,
    margin:10,
    // autoplay:true,
    dots: false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});

		
});




$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 30) {
        $(".all-header-wrp.fixed").css("top","0");

    } else {

        $(".all-header-wrp.fixed").css("top","-70px");
        $('.menu-bar').show();
    }

}).scroll();


	$(document).ready(function(){


		

setInterval(function()
{
	$.each($('.test').children(),function(key,val){
		if($(this).children().children().next().hasClass('active')){
			if($('.test').children().length-1 > key){
			 	$(this).next().children().children('p').addClass('active');
			 	$(this).children().children('p').removeClass('active');
			 	console.log('enjoy bro'+key);
			 	return false;
			}else{
				$(this).children().children().next().removeClass('active');
				$('.test').children().first().children().children().next().addClass('active');
				console.log('enjoy bro'+key);
				return false;
			}
		}
	});
}, 3000);




 $(document).ready(function(){
  $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(300).slideDown(300);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(300).slideUp(300);
});
    
});
});



</script>
<script>
    window.jQuery || document.write('<script src="js/jquery-1.12.0.min.js"><\/script>')


    /*global $ */
$(document).ready(function () {

    "use strict";

   /* $('.footermenu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
    //Checks if li has sub (ul) and adds class for toggle icon - just an UI


    $('.footermenu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
    //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

    $(".footermenu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");
*/
    //Adds menu-mobile class (for mobile toggle menu) before the normal menu
    //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
    //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
    //Done this way so it can be used with wordpress without any trouble

    $(".footermenu > ul > li").hover(function (e) {
        if ($(window).width() > 943) {
            $(this).children("ul").stop(true, false).fadeToggle(150);
            e.preventDefault();
        }
    });
    //If width is more than 943px dropdowns are displayed on hover

    $(".footermenu > ul > li").click(function () {
        if ($(window).width() <= 943) {
            $(this).children("ul").fadeToggle(150);
        }
    });
    //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

    $(".footermenu-mobile").click(function (e) {
        $(".footermenu > ul").toggleClass('show-on-mobile');
        e.preventDefault();
    });
    //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

});
</script> 




