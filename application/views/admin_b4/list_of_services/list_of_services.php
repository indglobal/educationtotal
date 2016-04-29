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
                    <h1 class="page-header">List of Services</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List of services
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="box-header">
                    </div>
                    <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Service ID</th>
                    <th>Title</th>
                    <th>CatID</th>
                    <th>SubcatId</th>
                    <th>Subcat2ndId</th>
                    <th>Subcat3rdID</th>
                    <th>Date/Time</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php if(count($list_of_services)>0):  
                     $i=1;?>
                    <?php foreach($list_of_services as $val): ?>
                    <tr>   
                    <td><?php echo $i;?></td>
                    <td><?php echo $val['service_id'];?></td>
                    <td><?php echo $val['title'];?></td>
                    <td><?php echo cetegory_name_by_id($val['cat_id']);?></td>
                    <td><?php echo subcategory_name_by_id($val['subcat_id']);?></td>
                    <td><?php echo subcategory2_name_by_id($val['sub_cat_second_id']);?></td>
                    <td><?php echo subcategory3_name_by_id($val['sub_cat_thired_id']);?></td>
                    <td><?php echo $val['created_date'];?></td>
                    <td>
                    <a href="<?php echo base_url(); ?>admin/list_of_services/view_list_of_services/<?php echo $val['service_id']; ?>" class="btn btn-info">View</a>&nbsp;&nbsp;
                    </td></tr>

                    <?php 
                     $i++;
                     endforeach;?>
                    <?php else: ?>
                    <tr>
                    <td colspan="3">No Data Found</td>
                     </tr>
                    <?php endif;?>
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
