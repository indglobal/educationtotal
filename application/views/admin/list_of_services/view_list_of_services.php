<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Service</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                <div class="panel-heading">
                  <?php if(isset($id)){ echo "View";} else {echo "Add";}?> Service
                </div>
                <?php $date = new DateTime($details[0]['created_date']);
                $created_date=$date->format('d/m/Y');?>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <form role="form" class="form-specialities" action="<?php echo base_url('update_marketing_persons'); ?>" method="post">
                      <div class="form-group">
                      <label>Service ID  </label>
                      <input id="fname_marketing" readonly maxlength="30" name="fname_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['service_id'];?>"><span id="fname_error" class="fname_error"></span><br>
                      <label>Title</label>
                      <input id="lname_marketing" readonly maxlength="30" name="lname_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['title'];?>"><span id="lname_error" class="fname_error"></span><br>
                      <label>Category </label>
                      <input id="email_marketing"  readonly name="email_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo cetegory_name_by_id($details[0]['cat_id']);?>"><span id="error_email" class="error_email"></span><br>
                      <label>Subcategory </label>
                      <input id="phone_marketing" readonly name="phone_marketing" maxlength="10" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo subcategory_name_by_id($details[0]['subcat_id']);?>"><span id="error_phone" class="error_phone"></span><br>
                      <label>Subcategory_1 </label>
                      <input id="userid_marketing" readonly maxlength="10" name="userid_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo subcategory2_name_by_id($details[0]['sub_cat_second_id']);?>"><span id="error_userid" class="error_userid"></span><br>
                      <label>Subcategory_2</label>
                      <input id="password_marketing" readonly maxlength="10" name="password_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo subcategory3_name_by_id($details[0]['sub_cat_thired_id']);?>"><span id="error_password" class="error_password"></span><br>
                      <label>About</label>
                      <input id="password_marketing" readonly maxlength="10" name="password_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['about'];?>"><span id="error_password" class="error_password"></span><br>
                      <label>Created Date</label>
                      <input id="password_marketing" readonly maxlength="10" name="password_marketing" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $created_date;?>"><span id="error_password" class="error_password"></span><br>
                     
<!--                       <input id="name" name="cat_name" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['cat_name'];?>"> -->
                      </div>
                                        
                    <div class="box-footer">
                    <a href="<?php echo base_url('list_of_services'); ?>"><button type="button" class="btn btn-info">Cancel</button></a>
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