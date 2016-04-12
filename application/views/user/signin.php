
<section class="signin-all-wrap">
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
<input type="radio" checked="checked" name="category" value="3" id="radio3" class="css-checkbox" />
<label for="radio3" class="css-label radGroup1">USER</label>
</span>

<span class="radio-provodr">
<input type="radio" name="category" value="2" id="radio2" class="css-checkbox" /><!-- checked="checked" -->
<label for="radio2" class="css-label radGroup1">PROVIDER</label>

</span>
</div>

<div class="form-group" id="user-data-grp">
<label>USER NAME</label>
<input id="userID" type="text"  name="uname"
value="<?php if(isset($_POST['uname'])) echo htmlentities($_POST['uname']); ?>" placeholder="User Name">
<?php echo form_error('uname'); ?>
<label>PASSWORD</label>
<input id="password" type="text"  name="pass" placeholder="Password">
<?php echo form_error('pass'); ?>
</div>

<input type="submit" name="submit" value="SIGNIN" id="btn-signin">
<a href="<?php echo base_url();?>register_cont/recover" 
style="color:purple";>FORGOT PASSWORD</a>

</form>

</div>

</article>
</div>
</div>


</section>

