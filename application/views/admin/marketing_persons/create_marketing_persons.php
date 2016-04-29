<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Marketing Persons</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                <div class="panel-heading">
                  <?php if(isset($id)){ echo "Edit";} else {echo "Add";}?> Marketing Persons
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <form role="form" class="form-specialities" action="<?php echo site_url('admin/marketing_persons/update_marketing_persons'); ?>" method="post">
                      <div class="form-group">
                      <input  name="id" class="form-control" value="<?php if(isset($id)) echo $id; ?>" style="display: none" readonly>
                      <label>First Name *</label>
                      <input id="fname_marketing" autocomplete="off" maxlength="30" name="fname_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])){echo $details[0]['fname'];}else{echo set_value('fname_marketing');}?>"> 
                      <span id="fname_error" class="fname_error"></span><br>
                     <?php echo form_error('fname_marketing', '<div class="error" style="color:red;">', '</div>');?>  
                      <label>Last Name*</label>
                      <input id="lname_marketing" maxlength="30" autocomplete="off" name="lname_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['lname'];?>"><span id="lname_error" class="fname_error"></span><br>
                      <?php echo form_error('lname_marketing', '<div class="error" style="color:red;">', '</div>');?>  

                      <label>Email *</label>
                      <input id="email_marketing" autocomplete="off" name="email_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['email'];?>">
                      <span id="error_email" class="error_email"></span>
<!--                  <span id="error" class="name_error"></span>
 -->                  <div class="success" ></div><br>
                      <label>Phone *</label>
                      <input id="phone_marketing" autocomplete="off" name="phone_marketing" maxlength="10" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['phone'];?>">
                      <span id="error_phone" class="error_phone"></span>
                      <div class="success" ></div><br>
                      <label>User Name *</label>
                      <input id="userid_marketing" autocomplete="off" maxlength="20" name="userid_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['user_name'];?>">
                      <span id="error_userid" class="error_userid"></span>
                      <div class="success" ></div><br>
                      <label>Password *</label>
                      <input id="password_marketing" maxlength="20" name="password_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['password'];?>"><span id="error_password" class="error_password"></span><br>
                      <label>Address *</label>
                      <textarea class="form-control" rows="3" cols="8"  id="address_marketing" name="address_marketing"><?php if(isset($details[0])) echo $details[0]['address'];?></textarea> <span id="error_address" class="error_address"></span><br>
<!--                       <input id="name" name="cat_name" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['cat_name'];?>"> -->
                      </div>
                    <?php echo form_error('fname_marketing', '<div class="error" style="color:red;">', '</div>');?>  
              
                    <div class="box-footer">
                    <a href="<?php echo base_url('marketing_persons'); ?>"><button type="button" class="btn btn-info">Cancel</button></a>
                    <button type="submit" id="submit"  class="category btn btn-warning">Submit</button>
 
                    </div>
                                                                           
                  </form> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<script type="text/javascript">

$("#submit").on('click',function(){
  //alert();
  $("#error").html('');

  if($("#fname_marketing").val() == '' || $.trim($("#fname_marketing").val()) == ''){
    $("#fname_error").html("first Name is Required");
    $('#fname_error').css('color', 'red');
    return false;
  }
  if($("#lname_marketing").val() == '' || $.trim($("#lname_marketing").val()) == ''){
    $("#lname_error").html("last Name is Required");
    $('#lname_error').css('color', 'red');
    return false;
  }

  var name_exp=/^[A-Za-z ]+$/;
  if(!(name_exp.test($("#name_marketing").val())))
  {
        $("#name_marketing").focus().val('');
        $("#error").html("Enter only alphabets");
        $('#error').css('color', 'red');
        return false;
  }

  if($("#email_marketing").val() == '')
    {
      $("#error_email").html("email is Required");
      $('#error_email').css('color', 'red');

      return false;
    }

    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(!(emailReg.test($("#email_marketing").val())))
    {
      $("#error_email").html("Enter Valid Email");
      $('#error_email').css('color', 'red');
      return false;
    }

    // var phn=[0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4};
  
  if($("#phone_marketing").val() == ''){
    $("#error_phone").html("mobile no is Required");
    $('#error_phone').css('color', 'red');

    return false;
  }

    var phone = $('input[name="phone_marketing"]').val(),
    intRegex = /[0-9 -()+]+$/;
    if((phone.length < 10) || (!intRegex.test(phone)))
{
        $("#error_phone").html("Enter valid phone no");
      $('#error_phone').css('color', 'red');
     return false;
}


if($("#userid_marketing").val() == ''){
    $("#error_userid").html("userid is Required");
    $('#error_userid').css('color', 'red');

    return false;
  }
  if($("#password_marketing").val() == ''){
    $("#error_password").html("Password is Required");
    $('#error_password').css('color', 'red');

    return false;
  }

  if($("#address_marketing").val() == ''){
    $("#error_address").html("Address is Required");
    $('#error_address').css('color', 'red');

    return false;
  }

  

   
}).submit();
</script>

<script type="text/javascript">
//$(document).ready(function() {  
$("#email_marketing").on('keyup',function(){
var email =$("#email_marketing").val();
//alert(email);
  $.ajax({
                  url: "check_email_marketing",
                  type: "POST",
                  data: {email:email},
                  success: function(res){
                 if (res=="success")
                     { 
    $(".error_email").html("this email  already exists");
    $(".error_email").css("color", "red");
    $('.category').attr('disabled', true);
     
                     }else if(res=="fail"){
    // $(".error_email").html('<img src="<?php echo base_url();?>check.png">');
    // // <img src="<?php echo base_url();?>bookmyplot_design/images/logo.png"
    $(".error_email").html("");
    $('.category').attr('disabled', false);

                     }                   
          }
      });

});


$("#phone_marketing").on('keyup',function(){
var phone =$("#phone_marketing").val();
  $.ajax({
                  url: "check_phone_marketing",
                  type: "POST",
                  data: {phone:phone},
                  success: function(res){
                 if (res=="success")
                     { 

      $(".error_phone").html("Phone no already exists");
    $(".error_phone").css("color", "red");
    $('#category').attr('disabled',true);
     $(".success").hide();
     
                     }else if(res=="fail"){
      $(".error_phone").html("");

    $('#category').attr('disabled', false);

                     }                   
          }
      });

});

$("#userid_marketing").on('keyup',function(){
var username =$("#userid_marketing").val();
  $.ajax({
                  url: "check_username_marketing",
                  type: "POST",
                  data: {username:username},
                  success: function(res){
                 if (res=="success")
                     { 
    $(".error_userid").html("Username already exists");
    $(".error_userid").css("color", "red");
    $('#category').attr('disabled', true);
     
                     }else if(res=="fail"){
    $(".error_userid").html("");
    $('#category').attr('disabled', false);

                     }                   
          }
      });

});



  </script>
  <style type="text/css">
  .success{
color: #4F8A10;
background-color: #DFF2BF;
}
 .name_error{
color:#FF0000;
background-color:#FFFFFF;
}


  </style>