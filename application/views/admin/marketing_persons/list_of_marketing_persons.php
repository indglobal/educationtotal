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
                    <h1 class="page-header">Marketing Persons</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Marketing Persons Table
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="box-header">
                        <h3 class="box-title"><div> <a href="<?php echo base_url('create_marketing_persons'); ?>"><button class='btn btn-success'>Add Marketing Persons</button></a></h3>
                    </div>
                    <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php if(count($allmarketing_persons)>0): 
                     $i=1; ?>
                    <?php foreach($allmarketing_persons as $val): ?>
                    <tr>   

                    <td><?php echo $i;?></td>
                    <td><?php echo $val['fname'].' '.$val['lname'];?></td>
                    <td><?php echo $val['phone'];?></td>
                    <td><?php echo $val['email'];?></td>
                    <td>
                    <a href="<?php echo base_url(); ?>admin/marketing_persons/edit_marketing_persons/<?php echo $val['user_id']; ?>" class="btn btn-info">Edit</a>&nbsp;&nbsp;
                    <a href="<?php echo base_url(); ?>admin/marketing_persons/delete_marketing_persons/<?php echo $val['user_id']; ?>" class="btn btn-danger" onclick = "return delConfirm()">Delete</a>
                    </td></tr>
                    <?php 
                    $i ++;
                    endforeach;?>
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
            
   
   