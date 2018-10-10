<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       <title>PLN Malang | <?php echo $title;?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url()?>assets/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/bootstrap-responsive.css">
        <link href="<?php echo base_url()?>assets/dist/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/dist/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url()?>assets/dist/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon.ico"/>
    </head>
    <body class="skin-black">
	 <?php echo $_header;?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
	        <aside class="left-side sidebar-offcanvas">
	            <?php echo $_sidebar;?>
			</aside>
	        <aside class="right-side">
	            <?php echo $_content;?>
	        </aside>
        </div>

      
        <script type="text/javascript" src="<?php echo base_url()?>vendor/jquery-2.1.0-beta2.js"></script>
        <script src="<?php echo base_url()?>assets/dist/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/dist/js/AdminLTE/app.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/dist/js/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/dist/js/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
		<script type="text/javascript">
            $(function() {
                $("#lok_rejtm").dataTable();
            });
        </script>
    </body>
</html>