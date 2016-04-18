


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

<p><a href="<?php echo base_url();?>register_cont/provider_signup">
Become A Service Provider
</a></p>
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
<!-- footer ends -->


<!-- ALL FOOTER ENDS -->




<!-- js files -->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js" ></script> 

<script>
	$(document).ready(function(){
		var wH = $(window).height();
		$('.signin-all-wrap').css("min-height", wH);
	});
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
</script>






</body>

</html>