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
                    <h1 class="page-header">Visitors</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Visitors Table
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="box-header">
                        <h3 class="box-title"><div> <a href="<?php echo base_url('create_cat'); ?>"><button class='btn btn-success'>Total Visitors- <?php echo count($all_visitors);?></button></a></h3>
                    </div>
                    <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>IP </th>
                    <th>Last accessed </th>
                    <th>Visited(nooftimes)</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php if(count($all_visitors)>0):  
                     $i=1;?>
                    <?php foreach($all_visitors as $val): ?>
                    <tr>   
                    <td><?php echo $i;?></td>
                    <td><?php echo $val['visitor_ip'];?></td>
                     <td><?php echo $val['modified_data'];?></td>
                    <td><?php echo $val['visitor_count'];?></td>
                    <!-- <td>
                    <a href="<?php echo base_url(); ?>admin/categories/edit_cat/<?php echo $cat['cat_id']; ?>" class="btn btn-info">Edit</a>&nbsp;&nbsp;
                    <a href="<?php echo base_url(); ?>admin/categories/delete_cat/<?php echo $cat['cat_id']; ?>" class="btn btn-danger" onclick = "return delConfirm()">Delete</a>
                    </td> -->
                </tr>

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
   
</body>

</html>
