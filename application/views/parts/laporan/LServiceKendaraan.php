<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.css'); ?>">
    <!-- Timeline -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/timeline.css'); ?>">
    <!-- Admin -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sb-admin-2.css'); ?>">
    <!-- Sweetalert -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
    <!-- JQUERY UI CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jquery-ui/jquery-ui.css'); ?>">
    <!-- JQUERY UI CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jquery-ui/jquery-ui.theme.css'); ?>">
    <!-- Time Dropper CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/timepickerdrop/timedropper.css'); ?>">
    <!-- Time Dropper CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-timepicker.min.css'); ?>">

    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jquerytimepicker/jquery.timepicker.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jquerytimepicker/lib/bootstrap-datepicker.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12" style="text-align:center;">RMC | Rental Mobil Cianjur</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12" style="text-align:center;">Bukti Service Mobil</div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-12" style="text-align:center;"><?php echo $this->session->username; ?></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-12" style="text-align:center;">Service</div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Kode Service</div>
    		<div class="col-md-6 kdservice" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Tanggal Service Sebelumnya</div>
    		<div class="col-md-6 tglserseb" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Tanggal Service Berikutnya</div>
    		<div class="col-md-6 tglserber" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Plat Mobil</div>
    		<div class="col-md-6 nplat" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Nama Type</div>
    		<div class="col-md-6 nmtype" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Jenis Service</div>
    		<div class="col-md-6 jsservice" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Biaya Servide</div>
    		<div class="col-md-6 byaservice" style="text-align:center;"></div>
    	</div>
    </div>

    <div class="container">
    	<div class="row" style="margin-bottom:50px;">
    		<div class="col-md-10" style="text-align:right;">Hormat Kami</div>
    	</div>
    	<div class="row">
    		<div class="col-md-10" style="text-align:right;">.....................</div>
    	</div>
    </div>
    
<!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- Jquery UI -->
    <script src="<?php echo base_url('assets/jquery-ui/jquery-ui.js'); ?>"></script>
    <!-- Jquery TimePicker -->
    <script type="text/javascript" src="<?php echo base_url('assets/jquerytimepicker/jquery.timepicker.js'); ?>"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/metisMenu/dist/metisMenu.min.js'); ?>"></script>
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/raphael/raphael-min.js'); ?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/js/sb-admin-2.js'); ?>"></script>
    <!-- DataTable -->
    <script src="<?php echo base_url('assets/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/datatables/media/js/dataTables.bootstrap.js'); ?>"></script>
    <!-- Sweetalert -->
    <script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
    <!-- TimeDropper -->
    <script type="text/javascript" scr="<?php echo base_url('assets/timepickerdrop/timedropper.js'); ?>"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
         	$(".kdservice").text(kdservice);
         	$(".tglserseb").text(tglserseb); 
         	$(".tglserber").text(tglserber); 
         	$(".nplat").text(nplat); 
         	$(".nmtype").text(nmtype); 
         	$(".jsservice").text(jsservice); 
         	$(".byaservice").text(byaservice); 
        });
    </script>
</body>
</html>