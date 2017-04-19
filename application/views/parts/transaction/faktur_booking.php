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
    		<div class="col-md-12" style="text-align:center;">Bukti Booking Mobil</div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-12" style="text-align:center;"><?php echo $this->session->username; ?></div>
    	</div>
    	<div class="row">
    		<div class="col-md-2" style="text-align:center;">No Transaksi </div>
    		<div class="col-md-1" style="text-align:center;">:</div>
    		<div class="col-md-1 ntrans" style="text-align:center;"></div>
    		<div class="col-md-2" style="text-align:center;">Tanggal Booking</div>
    		<div class="col-md-1" style="text-align:center;">:</div>
    		<div class="col-md-2 tglbooking" style="text-align:center;"></div>
    	</div>
    	<div class="row">
    		<div class="col-md-3">Tanggal Kembali Rencana</div>
    		<div class="col-md-1">:</div>
    		<div class="col-md-2 tglkemren"></div>
    		<div class="col-md-3">Jam Kembali Rencana</div>
    		<div class="col-md-1">:</div>
    		<div class="col-md-2 jamkemren"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-12" style="text-align:center;">Pelanggan</div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">KTP</div>
    		<div class="col-md-6 nktp" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Nama Pelanggan</div>
    		<div class="col-md-6 nmpel" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Alamat Pelanggan</div>
    		<div class="col-md-6 almtpel" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Telp Pelanggan</div>
    		<div class="col-md-6 telppel" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-12" style="text-align:center;">Mobil</div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Plat Mobil</div>
    		<div class="col-md-6 nplat" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Tahun</div>
    		<div class="col-md-6 thnmob" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Tarif Per Hari</div>
    		<div class="col-md-6 trfperhari" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Merk Mobil</div>
    		<div class="col-md-6 mrkmob" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Type Mobil</div>
    		<div class="col-md-6 typemob" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-12" style="text-align:center;">Sopir</div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Nama Sopir</div>
    		<div class="col-md-6 nmsop" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Alamat Sopir</div>
    		<div class="col-md-6 almtsop" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Telp Sopir</div>
    		<div class="col-md-6 telpsop" style="text-align:center;"></div>
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
         	$(".ntrans").text(ntransaksi);
         	$(".tglbooking").text(tbooking); 
         	$(".tglkemren").text(tkemren); 
         	$(".jamkemren").text(jkemren); 

         	//Pel
         	$(".nktp").text(ktp); 
         	$(".nmpel").text(nmpel); 
         	$(".almtpel").text(almtpel); 
         	$(".telppel").text(telpel); 
         	//Mob
         	$(".nplat").text(plat); 
         	$(".thnmob").text(thn); 
         	$(".trfperhari").text(tfh); 
         	$(".mrkmob").text(mrkmob); 
         	$(".typemob").text(tpmob); 
         	//Sop 
         	$(".nmsop").text(nmsop); 
         	$(".almtsop").text(almtsop); 
         	$(".telpsop").text(telpsop); 
        });
    </script>
</body>
</html>