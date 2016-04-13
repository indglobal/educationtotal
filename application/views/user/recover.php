<section class="provdr-sinup-wrp">
<div class="overlay"></div>
<div class="container">
<div class="row">
<article class="col-sm-12 pad-top">

<div class="provdr-signup-form">

<div class="form-head">
<h3><span>Forget Password</span></h3>
</div>

<form class="form-usr-signup" id="form-usr-signup"
action="<?php echo base_url();?>register_cont/recover_password" method="POST">

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

<center><div class="row">
<article class="col-sm-6">
<label>EMAIL</label>
<center><input id="usemail" name="usemail"  value="<?php if(isset($_POST['usemail'])) echo htmlentities($_POST['usemail']); ?>" type="email" placeholder="Enter Mail">
</center>
<?php echo form_error('usemail'); ?>
</article>
</div></center>

<input type="submit" value="Recover" id="btn-signup" 
class="user-btn">

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