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
                    <th>SP_ID</th>
                    <th>Title</th>
                    <!-- <th>CatID</th>
                    <th>SubcatId</th>
                    <th>Subcat2ndId</th> -->
                    <th>Services</th>
                    <th>Date/Time</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php if(count($list_of_services)>0):  
                     $i=1;?>
                    <?php foreach($list_of_services as $val): 
                    $status =$val['status'];
                    $service_id=$val['service_id'];
                    $user_id=$val['user_id'];
                    ?>
                    <tr> 
                    <td><?php echo $i;?></td>
                    <td id="service_id_<?php echo $service_id;?>"><?php echo $val['service_id'];?></td>
                    <td id="user_id_<?php echo $user_id;?>"><?php echo $val['user_id'];?></td>
                    <td><?php echo $val['title'];?></td>
                    <td><?php echo subcategory3_name_by_id($val['sub_cat_thired_id']);?></td>
                    <td><?php echo $val['modified_date'];?></td>
                    <td>
                    <a href="<?php echo base_url(); ?>admin/list_of_services/view_list_of_services/<?php echo $val['service_id']; ?>" class="btn btn-info">View</a>&nbsp;&nbsp;
                    <button id="approved_review_<?php echo $user_id;?>" <?php if($status=="0"){?>class="btn btn-default"<?php }else{?>class="btn btn-success"<?php } ?>>Approved</button>

                    </td></tr>

                     <script type="text/javascript">
                $(document).ready(function() {
                $("#approved_review_"+<?php echo $user_id;?>).click(function(){
                  //e.preventDefault();
                  var user_id =$("#user_id_"+<?php echo $user_id;?>).text();
                  var service_id =$("#service_id_"+<?php echo $service_id;?>).text();
				   alert(service_id);

                 $.ajax({
                 url: "approved_services",
                 type: "POST",
                  data: {user_id:user_id,service_id:service_id},
                  success: function(res){     
                    if (res=="success")
                     { 
                        $("#approved_review_"+<?php echo $user_id;?>).removeClass("btn btn-success");
                       $("#approved_review_"+<?php echo $user_id;?>).addClass("btn btn-default"); 

                     }else if(res=="fail"){
                       

                        $("#approved_review_"+<?php echo $user_id;?>).removeClass("btn btn-default");
                       $("#approved_review_"+<?php echo $user_id;?>).addClass("btn btn-success"); 
                     
                     }

                                        }
       });
 
                
                  
                 });

                          });


                  </script>

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
            
    