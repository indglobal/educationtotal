
<section class="signin-all-wrap">
<div class="overlay"></div>
<div class="container">
<div class="row">
<article class="col-sm-12 pad-top">

<div class="signin-form-wrp">

<div class="form-head">
<h2><span>SIGN-IN</span></h2>
</div>

<form class="form-signin" id="form-signin" 
action="<?php echo base_url();?>register_cont/login"
method="POST" >

<div class="form-group" id="radio-grp">
<span class="radio-usr">
<input type="radio" checked="checked" name="category" value="3" id="radio3" class="css-checkbox" />
<label for="radio3" class="css-label radGroup1">USER</label>
</span>

<span class="radio-provodr">
<input type="radio" name="category" value="2" id="radio2" class="css-checkbox" /><!-- checked="checked" -->
<label for="radio2" class="css-label radGroup1">PROVIDER</label>
</span>
</div>
  <?php $msg = $this->session->flashdata('message'); 
                           echo $msg;
                           
                        
                        ?>

<div class="form-group" id="user-data-grp">
<label>USER NAME</label>
<input id="uame" type="text"  name="uname" placeholder="User Name"><?php echo form_error('uname', '<div class="error" style="color:red;">', '</div>');?>
<?php //echo form_error('uname'); ?>
<label>PASSWORD
</label>
<input id="password" type="password"  name="pass" placeholder="Password"><?php echo form_error('pass', '<div class="error" style="color:red;">', '</div>');?>
<?php //echo form_error('pass'); ?>
</div>

<input type="submit" name="submit" value="SIGNIN" id="btn-signin">
<a id="forget_pass" href="<?php echo base_url();?>register_cont/recover";>FORGOT PASSWORD</a>

</form>
<style>
	#forget_pass{
		color:rgba(38, 37, 36, 0.8); 
		font-size: 16px; 
		font-weight: bold;
	}
	#forget_pass:hover{
		color: #FFAD00;
		opacity: 1;
	}
	
</style>

</div>

</article>
</div>
</div>


</section>

