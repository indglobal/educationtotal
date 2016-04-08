
<section class="signin-all-wrap">
<<<<<<< HEAD
<div class="overlay"></div>
<div class="container">
<div class="row">
<article class="col-sm-12 pad-top">

<div class="signin-form-wrp">

<div class="form-head">
<h3><span>SIGN-IN</span></h3>
</div>

<form class="form-signin" id="form-signin" 
action="<?php echo base_url();?>register_cont/login"
method="POST" >

<div class="form-group" id="radio-grp">
<span class="radio-usr">
<input type="radio" checked="checked" name="category" value="user" id="radio3" class="css-checkbox"required />
<label for="radio3" class="css-label radGroup1">USER</label>
</span>

<span class="radio-provodr">
<input type="radio" name="category" value="provider" id="radio2" class="css-checkbox" /><!-- checked="checked" -->
<label for="radio2" class="css-label radGroup1">PROVIDER</label>

</span>
</div>

<div class="form-group" id="user-data-grp">
<label>USER NAME</label>
<input id="userID" type="text" required name="uname" placeholder="User Name">
<label>PASSWORD</label>
<input id="password" type="text" required name="pass" placeholder="Password">
</div>

<input type="submit" name="submit" value="SIGNIN" id="btn-signin">
<a href="<?php echo base_url();?>register_cont/provider_signup" 
style="color:purple";>FORGOT PASSWORD</a>

</form>

</div>

</article>
</div>
</div>
=======
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<article class="col-sm-12 pad-top">

				<div class="signin-form-wrp">

					<div class="form-head">
						<h3><span>SIGNIN</span></h3>
					</div>
					
					<form class="form-signin" id="form-signin" 
						action="javascript:void(0)"
						onsubmit="return formValidationSingnIn()" >

						<div class="form-group" id="radio-grp">
							<span class="radio-usr">
								<input type="radio" name="radiog_lite" id="radio3" class="css-checkbox" />
								<label for="radio3" class="css-label radGroup1">USER</label>
							</span>
							
							<span class="radio-provodr">
								<input type="radio" name="radiog_lite" id="radio2" class="css-checkbox" /><!-- checked="checked" -->
								<label for="radio2" class="css-label radGroup1">PROVIDER</label>
								
							</span>
						</div>

						<div class="form-group" id="user-data-grp">
							<label>USER NAME</label>
							<input id="userID" type="text" placeholder="User Name">
							<label>PASSWORD</label>
							<input id="password" type="text" placeholder="Password">
						</div>

						<input type="submit" value="SIGNIN" id="btn-signin">

					</form>

				</div>

			</article>
		</div>
	</div>
>>>>>>> 2d350eb2779d0e206d980e1b86020288d28cbe51

</section>

