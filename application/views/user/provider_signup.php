<section class="provdr-sinup-wrp">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<article class="col-sm-12 pad-top">

				<div class="provdr-signup-form">

					<div class="form-head">
						<h3><span>PROVIDER REGISTRATION</span></h3>
					</div>
					
					<form class="form-usr-signup" id="form-usr-signup"
						action="javascript:void(0)"
						onsubmit="return formValidationprovider()">

						<div class="form-group" id="provdr-signup-data-grp">

							<div class="row">
								<article class="col-md-12">

									<!-- <div class="form-group" id="radio-grp">
										<span class="radio-usr">
											<input type="radio" name="radiog_lite" id="radio3" class="css-checkbox" />
											<label for="radio3" class="css-label radGroup1">provdr</label>
										</span>
										
										<span class="radio-provodr">
											<input type="radio" name="radiog_lite" id="radio2" class="css-checkbox" checked="checked"/>
											<label for="radio2" class="css-label radGroup1">PROVIDER</label>
										</span>
									</div> -->

								</article>
								
							</div>

							<div class="row">
								<article class="col-sm-6">
									<label>FIRST NAME</label>
									<input id="pvdrNameF" type="text" placeholder="First Name">
								</article>
								<article class="col-sm-6">
									<label>LAST NAME</label>
									<input id="pvdrNameL" type="text" placeholder="Last Name">
								</article>
							</div>

							<div class="row">
								<article class="col-sm-6">
									<label>PASSWORD</label>
									<input id="paswrd" type="password" placeholder="Enter Password">
								</article>
								<article class="col-sm-6">
									<label>CONFIRM PASSWORD</label>
									<input id="Cpaswrd" type="password" placeholder="Confirm Password">
								</article>
							</div>

							<div class="row">
								<article class="col-sm-6">
									<label>EMAIL</label>
									<input id="email" type="email" placeholder="Enter Mail">
								</article>
								<article class="col-sm-6">
									<label>MOBILE NUMBER</label>
									<input id="Mnumber" onkeypress="return IsNumeric(event);"  maxlength="10" type="text" placeholder="Mobile Number">
								</article>
							</div>

							<input type="submit" value="SIGNUP" id="btn-signup" 
								class="user-btn">

						</div>
					</form>

				</div>

			</article>
		</div>
	</div>

</section>
