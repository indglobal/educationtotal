  <!-- jQuery -->
    <script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js'); ?>"> </script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
      
      <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('dist/js/sb-admin-2.js'); ?>"></script>
	
	         
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('bower_components/metisMenu/dist/metisMenu.min.js');?>"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url('bower_components/datatables/media/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js');?>"></script>

   

   <script>
$(document).ready(function() {
     $("#dataTables-example").dataTable(  "paging":   true,
        "ordering": false,
        "info":     true);
    });
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
