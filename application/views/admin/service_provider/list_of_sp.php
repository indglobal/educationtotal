<head>
     <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet');?>">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css');?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('bower_components/datatables-responsive/css/dataTables.responsive.css');?>" rel="stylesheet">
 </head>

<body>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Service Provider</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Service Provider Table
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="box-header">
<!--                         <h3 class="box-title"><div> <a href="<?php echo base_url('create_cat'); ?>"><button class='btn btn-success'>Add Categories</button></a></h3>
 -->                    </div>
                    <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>email</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php if(count($allservice_provider)>0):  ?>
                    <?php foreach($allservice_provider as $val): 
                    $status =$val['status'];
                    $id=$val['user_id'];
                    ?>
                    <tr>   

                    <td id="id_<?php echo $id;?>"><?php echo $val['user_id'];?></td>
                    <td><?php echo $val['fname'];?></td>
                    <td><?php echo $val['phone'];?></td>
                    <td><?php echo $val['email'];?></td>
                    <td>
                <button id="approved_review_<?php echo $id;?>" <?php if($status=="0"){?>class="btn btn-default"<?php }else{?>class="btn btn-success"<?php } ?>>Approved</button></td>
<!--                     <a href="<?php echo base_url(); ?>admin/categories/delete_cat/<?php echo $cat['cat_id']; ?>" class="btn btn-danger" onclick = "return delConfirm()">Delete</a>
 -->                    </td></tr>



                     <script type="text/javascript">
              $(document).ready(function() {
                $("#approved_review_"+<?php echo $id;?>).click(function(e){
                  e.preventDefault();
                  var id =$("#id_"+<?php echo $id;?>).text();
               
                // alert(id);
                  $.ajax({
                  //url: "<?php echo base_url(); ?>" + "index.php/service_provider/approved",
                  url: "approved",
                  type: "POST",
                  data: {id:id},
                  success: function(res){
                 if (res=="success")
                     { 
                        // alert("okk");
                       $("#approved_review_"+<?php echo $id;?>).removeClass("btn btn-success");
                       $("#approved_review_"+<?php echo $id;?>).addClass("btn btn-default"); 

                     }else if(res=="fail"){
                        // alert("notok");
                      $("#approved_review_"+<?php echo $id;?>).removeClass("btn btn-default");
                       $("#approved_review_"+<?php echo $id;?>).addClass("btn btn-success"); 
                     }                   
          }
      });

                 });

                          });


  </script>


                    <?php endforeach;?>
                    <?php else: ?>
                    <tr>
                    <td colspan="3">No Data Found</td>
                     </tr>
                    <?php endif; ?>
                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
            
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('bower_components/metisMenu/dist/metisMenu.min.js');?>"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('bower_components/datatables/media/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js');?>"></script>

   

   <script>

    function delConfirm()
    {
        var r=confirm('Do you want to delete');
        if( r == true )
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    </script>

</body>

</html>
