<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Subcategories</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-12">
                <div class="panel panel-default">
                <div class="panel-heading">
                  <?php if(isset($id)){ echo "Edit";} else {echo "Add";}?> Subcategories
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-6">
                      <form role="form" class="form-specialities" action="<?php echo base_url('update_subcat'); ?>" method="post">
                      <div class="form-group">
                      <input  name="id" class="form-control" value="<?php if(isset($id)) echo $id; ?>" style="display: none" readonly>

                    <label id="label">category: *</label>
                    <select title="Choose Category" class="form-control parsley-validated parsley-success" name="cat_id" id="cat_id" style="width:200px;">
                    <option value="">Select</option>
                    <?php foreach ($all_category as $cat) { ?>
                         <?php if($cat['cat_id'] == $details[0]['cat_id']) { ?>
                        <option value="<?php echo $cat['cat_id']; ?>" selected><?php echo $cat['cat_name']; ?></option>
                    <?php } else { ?>

                        <option value="<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></option>
                    <?php } ?>
                    <?php } ?>
                    </select> 

                  
                      <label>Subcategory*</label>
                      <input id="name" name="subcat_name" class="form-control" class="alphaonly" value="<?php if(isset($details[0])) echo $details[0]['subcat_name'];?>">
                      <span id="error" class="name_error"></span>
                      </div>
                                        
                    <div class="box-footer">
                    <a href="<?php echo base_url('subcategories'); ?>"><button type="button" class="btn btn-info">Cancel</button></a>
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

  var name_exp=/^[A-Za-z ]+$/;
    //var name_exp=/^[a-z\d\-_\s]+$/i;
  if(!(name_exp.test($("#name").val())))
  {
        $("#name").focus().val('');
        $("#error").html("Enter only alphabets");
        return false;
  }
   
}).submit();
</script>