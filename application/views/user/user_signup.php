<section class="provdr-sinup-wrp">
<div class="overlay"></div>
<div class="container">
<div class="row">
<article class="col-sm-12 pad-top">

<div class="provdr-signup-form">

<div class="form-head">
<h3><span>USER REGISTRATION</span></h3>
</div>

<form class="form-usr-signup" id="form-usr-signup"
action="<?php echo base_url();?>register_cont/add_user" method="POST">

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
<input type="hidden" id="idtype" name="idtype" value="3" >
<div>
<input id="usnameF"  name="usnameF" value="<?php if(isset($_POST['usnameF'])) echo htmlentities($_POST['usnameF']); ?>"  type="text" placeholder="First Name">
<?php echo form_error('usnameF'); ?>
</article>
<article class="col-sm-6">
<label>LAST NAME</label>
<input id="usnameL"  name="usnameL"  value="<?php if(isset($_POST['usnameL'])) echo htmlentities($_POST['usnameL']); ?>" type="text" placeholder="Last Name">
<?php echo form_error('usnameL'); ?>
</article>
</div>

<div class="row">
<article class="col-sm-6">
<label>PASSWORD</label>
<input id="uspasw"  name="uspasw"  type="password" 
value="<?php if(isset($_POST['uspasw'])) echo htmlentities($_POST['uspasw']); ?>" placeholder="Enter Password"><?php echo form_error('uspasw'); ?>
</article>
<article class="col-sm-6">
<label>CONFIRM PASSWORD</label>
<input id="uscnpasw"  name="uscnpasw" type="password" value="<?php if(isset($_POST['uscnpasw'])) echo htmlentities($_POST['uscnpasw']); ?>" placeholder="Confirm Password"><?php echo form_error('uscnpasw');  ?>
</article>
</div>

<div class="row">
<article class="col-sm-6">
<label>EMAIL</label>
<input id="usemail"  name="usemail"  value="<?php if(isset($_POST['usemail'])) echo htmlentities($_POST['usemail']); ?>" type="email" placeholder="Enter Mail">
<?php echo form_error('usemail'); ?>
</article>
<article class="col-sm-6">
<label>MOBILE NUMBER</label>
<input id="usmobnum"  name="usmobnum" value="<?php if(isset($_POST['usmobnum'])) echo htmlentities($_POST['usmobnum']); ?>"  maxlength="10" type="text"
 placeholder="Mobile Number"  >
<?php echo form_error('usmobnum'); ?>
</article>
</div>

<input type="submit" value="SIGNUP" id="btn-signup" 
class="user-btn">

</div>
</div>
</form>

</div>

</article>
</div>
</div>

</section>


</section>
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
	
	<script type="text/javascript">

</script>