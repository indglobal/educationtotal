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
                    <h1 class="page-header">Userlist</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Userlist Table
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
                     <?php if(count($alluser)>0):  ?>
                    <?php foreach($alluser as $val): ?>
                    <tr>   
                    <td><?php echo $val['id'];?></td>
                    <td><?php echo $val['fname'];?></td>
                    <td><?php echo $val['phone'];?></td>
                    <td><?php echo $val['email'];?></td>
                    <td>
                    <!-- <a href="<?php echo base_url(); ?>admin/categories/edit_cat/<?php echo $val['usid']; ?>" class="btn btn-info">Edit</a>
                    <a href="<?php echo base_url(); ?>admin/categories/delete_cat/<?php echo $val['usid']; ?>" class="btn btn-danger" onclick = "return delConfirm()">Delete</a> -->
                    </td>
                </tr>
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
