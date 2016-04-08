<section class="provdr-sinup-wrp">
<<<<<<< HEAD
<div class="overlay"></div>
<div class="container">
<div class="row">
<article class="col-sm-12 pad-top">

<div class="provdr-signup-form">

<div class="form-head">
<h3><span>SERVICE PROVIDER REGISTRATION</span></h3>
</div>

<form class="form-usr-signup" id="form-usr-signup"
action="<?php echo base_url();?>register_cont/add_sp_user" method="POST">

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
<input id="pvdrNameF" name="pvdrNameF" type="text" placeholder="First Name">
<?php echo form_error('pvdrNameF'); ?>
</article>
<article class="col-sm-6">
<label>LAST NAME</label>
<input id="pvdrNameL" name="pvdrNameL" type="text" placeholder="Last Name">
<?php echo form_error('pvdrNameL'); ?>
</article>
</div>

<div class="row">
<article class="col-sm-6">
<label>PASSWORD</label>
<input id="paswrd" name="paswrd" type="password" placeholder="Enter Password">
<?php  echo form_error('paswrd'); ?>
</article>
<article class="col-sm-6">
<label>CONFIRM PASSWORD</label>
<input id="Cpaswrd" name="Cpaswrd" type="password" placeholder="Confirm Password">
<?php echo form_error('Cpaswrd'); ?>
</article>
</div>

<div class="row">
<article class="col-sm-6">
<label>EMAIL</label>
<input id="pvdremail" name="pvdremail" type="email" placeholder="Enter Mail">
<?php echo form_error('pvdremail'); ?>
</article>
<article class="col-sm-6">
<label>MOBILE NUMBER</label>
<input id="pvdrMnumber" name="pvdrMnumber" onkeypress="return IsNumeric(event);"  maxlength="10" type="text" placeholder="Mobile Number">
<?php echo form_error('pvdrMnumber'); ?>
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
	<script src="<?php echo base_url();?>js/jquery.min.js"></script>
	
	<script type="text/javascript">
(document).ready(function()
{
  //alert();
  $("#form-usr-signup").submit(function(event){
    event.preventDefault();
    
    var usnameF_sp   = $("#pvdrNameF").val();
    var usnameL_sp   = $("#pvdrNameL").val();
    var uspasw_sp    = $("#paswrd").val();
    var uscnpasw_sp  = $("#Cpaswrd").val();
    var usemail_sp   = $("#pvdremail").val();
    var usmobnum_sp  = $("#pvdrMnumber").val();
    
    $.ajax({

      url : '<?php echo base_url();?>register_cont/add_sp_user',
      type : 'POST',
      data: { fc_name_sp   : usnameF_sp,
              fc_lname_sp  : usnameL_sp,
              fc_pass_sp   : uspasw_sp,
              fc_cnpass_sp : uscnpasw_sp,
              fc_mail_sp   : usemail_sp,
              fc_mobn_sp   : usmobnum_sp},
      success : function()
      {
             alert('USER ADD SUCCESSFULLY');
           

            // location.reload();
      },
      failure : function()
      {
        alert('SOMETHING WENT WRONG');
      }
    });
  });
});
</script>

=======
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
>>>>>>> 2d350eb2779d0e206d980e1b86020288d28cbe51
