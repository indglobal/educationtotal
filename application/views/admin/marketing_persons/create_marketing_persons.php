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
                      <form role="form" class="form-specialities" action="<?php echo base_url('update_marketing_persons'); ?>" method="post">
                      <div class="form-group">
                      <input  name="id" class="form-control" value="<?php if(isset($id)) echo $id; ?>" style="display: none" readonly>
                      <label>first Name *</label>
                      <input id="fname_marketing" name="fname_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['fname'];?>"><span id="fname_error" class="fname_error"></span><br>
                      <label>Last Name*</label>
                      <input id="lname_marketing" name="lname_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['lname'];?>"><span id="lname_error" class="fname_error"></span><br>
                      <label>Email *</label>
                      <input id="email_marketing" name="email_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['email'];?>"><span id="error_email" class="error_email"></span><br>
                      <label>Phone *</label>
                      <input id="phone_marketing" name="phone_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['phone'];?>"><span id="error_phone" class="error_phone"></span><br>
                      <label>Userid *</label>
                      <input id="userid_marketing" name="userid_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['user_name'];?>"><span id="error_userid" class="error_userid"></span><br>
                      <label>Password *</label>
                      <input id="password_marketing" name="password_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['password'];?>"><span id="error_password" class="error_password"></span><br>
                      <label>Address *</label>
                      <textarea class="form-control" rows="3" cols="8"  id="address_marketing" name="address_marketing"><?php if(isset($details[0])) echo $details[0]['address'];?></textarea> <span id="error_address" class="error_address"></span><br>
<!--                       <input id="name" name="cat_name" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['cat_name'];?>"> -->
                      </div>
                                        
                    <div class="box-footer">
                    <a href="<?php echo base_url('marketing_persons'); ?>"><button type="button" class="btn btn-info">Cancel</button></a>
                    <button type="submit" id="submit" class="btn btn-warning">Submit</button>
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

  if($("#fname_marketing").val() == ''){
    $("#fname_error").html("first Name is Required");
    $('#fname_error').css('color', 'red');

    return false;
  }
  if($("#lname_marketing").val() == ''){
    $("#lname_error").html("last Name is Required");
    $('#lname_error').css('color', 'red');

    return false;
  }

  var name_exp = /^[A-Za-z]+$/;
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
   
    // if(!(phn.test($("#phone_marketing").val())))
    // {
    //   $("#error_phone").html("Enter valid phone no");
    //   $('#error_phone').css('color', 'red');
    //   return false;
    // }
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
     //alert('Please enter a valid phone number.');
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