<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Specialities</h1>
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
                      <input id="name" name="cat_name" class="form-control" class="alphaonly" maxlength="30" value="<?php if(isset($details[0])) echo $details[0]['cat_name'];?>">
                      <span id="error" class="name_error"></span>
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
  if($("#name").val() == ''){
    $(".name_error").html("Name is Required");
    return false;
  }

  //var name_exp =/^[A-Za-z],+$/;
  var name_exp=/^[A-Za-z ]+$/;
  if(!(name_exp.test($("#name").val())))
  {
        $("#name").focus().val('');
        $("#error").html("Enter only alphabets");
        return false;
  }
   
}).submit();
</script>