<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Categories</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                <div class="panel-heading">
                  <?php if(isset($id)){ echo "Edit";} else {echo "Add";}?> Categories
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <form role="form" class="form-specialities" action="<?php echo base_url('update_cat'); ?>" method="post">
                      <div class="form-group">
                      <input  name="id" class="form-control" value="<?php if(isset($id)) echo $id; ?>" style="display: none" readonly>
                      <label>Name *</label>
                      <input id="name" autocomplete="off" required name="cat_name" class="form-control" class="alphaonly" maxlength="30" value="<?php if(isset($details[0])) echo $details[0]['cat_name'];?>">
                      <span id="error" class="name_error"></span>
                      <div class="success" ></div>
                      </div>
                                        
                    <div class="box-footer">
                    <a href="<?php echo base_url('categories'); ?>"><button type="button" class="btn btn-info">Cancel</button></a>
                    <button type="submit" id="category" class="btn btn-warning">Submit</button>
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

$("#category").on('click',function(){
  //alert();
  $("#error").html('');
  if($("#name").val() == ''|| $.trim($("#name").val()) == ''){
    $(".name_error").html("Name is Required");
    return false;
  }
  // if($.trim($("#name").val()) == ''){
  //   $(".name_error").html("Name is Required");
  //   return false;
  // }


  var name_exp=/^[A-Za-z ]+$/;
  if(!(name_exp.test($("#name").val())))
  {
        $("#name").focus().val('');
        $("#error").html("Enter only alphabets");
        return false;
  }


// $("#name").on('keyup',function(){
// var name =$("#name").val();
// //alert(name);
//   $.ajax({
//                   url: "check_category_name",
//                   type: "POST",
//                   data: {name:name},
//                   success: function(res){
//                  if (res=="success")
//                      { 
//                   //alert("ok");
//     //$("#success").append("Name is Required");
//     $(".success").html("name is available");
//     //return false;

//                      }else if(res=="fail"){

//     $(".success").html("ok");
//                      }                   
//           }
//       });

// });




  



   
}).submit();
</script>


<script type="text/javascript">
//$(document).ready(function() {  
$("#name").on('keyup',function(){
var name =$("#name").val();
  $.ajax({
                  url:"check_category_name",
                  type: "POST",
                  data: {name:name},
                  success: function(res){
                 if (res=="success")
                     { 
    $(".name_error").html("Category name is already exists");
    $(".name_error").css("color", "red");
    $('#category').attr('disabled',true);
     $(".success").hide();
                     }else if(res=="fail"){
        $(".name_error").html("");
    //$(".name_error").html('<img style="height:30px;width:50px" src="<?php echo base_url();?>check.png">');
    $('#category').attr('disabled', false);

                     }                   
          }
      });

});
//});

  </script>
  <style type="text/css">
  
 .name_error{
color:#FF0000;
background-color:#FFFFFF;
}


  </style>