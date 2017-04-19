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
    		<div class="col-md-3">Tanggal Pinjam</div>
    		<div class="col-md-1">:</div>
    		<div class="col-md-2 tglpin"></div>
    	</div>
        <div class="row">
            <div class="col-md-3">Tanggal Kembali Realisasi</div>
            <div class="col-md-1">:</div>
            <div class="col-md-2 tglkemrel"></div>
            <div class="col-md-3">Jam Kembali Realisasi</div>
            <div class="col-md-1">:</div>
            <div class="col-md-2 jamkemrel"></div>
        </div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-12" style="text-align:center;">Mobil</div>
    	</div>
        <div class="row" style="text-align:center;">
            <div class="col-md-6" style="text-align:center;">No Plat</div>
            <div class="col-md-6 nplat" style="text-align:center;"></div>
        </div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">BBM Pinjam</div>
    		<div class="col-md-6 bbmpinjam" style="text-align:center;"></div>
    	</div>
        <div class="row" style="text-align:center;">
            <div class="col-md-6" style="text-align:center;">BBM Kembali</div>
            <div class="col-md-6 bbmkembali" style="text-align:center;"></div>
        </div>
        <div class="row" style="text-align:center;">
            <div class="col-md-6" style="text-align:center;">Kilometer Kembali</div>
            <div class="col-md-6 kmkembali" style="text-align:center;"></div>
        </div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Kondisi Mobil Kembali</div>
    		<div class="col-md-6 konmobkem" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Kerusakan Mobil</div>
    		<div class="col-md-6 krsnmob" style="text-align:center;"></div>
    	</div>
        <div class="row" style="text-align:center;">
            <div class="col-md-6" style="text-align:center;">Denda</div>
            <div class="col-md-6 dnda" style="text-align:center;"></div>
        </div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Biaya Kerusakan</div>
    		<div class="col-md-6 byakrsn" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Biaya BBM</div>
    		<div class="col-md-6 byabbm" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Biaya Sewa</div>
    		<div class="col-md-6 byasewa" style="text-align:center;"></div>
    	</div>
        <div class="row">
            <div class="col-md-12" style="text-align:center;">
                <hr>
            </div>
        </div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Total Bayar</div>
    		<div class="col-md-6 totbay" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Dibayar</div>
    		<div class="col-md-6 dibyr" style="text-align:center;"></div>
    	</div>
    	<div class="row" style="text-align:center;">
    		<div class="col-md-6" style="text-align:center;">Kembali</div>
    		<div class="col-md-6 kmbali" style="text-align:center;"></div>
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
         	$(".tglpin").text(tglpin); 
            $(".tglkemrel").text(tglkemrel); 
            $(".jamkemrel").text(jamkemrel); 

         	//Mob
            $(".nplat").text(nplat);
            $(".bbmkembali").text(bbmkembali);
            $(".bbmpinjam").text(bbmpinjam); 
            $(".kmkembali").text(kmkembali);
         	$(".konmobkem").text(konmobkem); 
         	$(".krsnmob").text(krsnmob); 
            $(".dnda").text(dnda);
         	$(".byakrsn").text(byakrsn); 
         	$(".byabbm").text(byabbm);
            $(".byasewa").text(byasewa); 

         	//Sop 
         	$(".totbay").text(totbay); 
         	$(".dibyr").text(dibyr); 
         	$(".kmbali").text(kmbali); 
        });
    </script>
</body>
</html>