<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Home | RMC">
    <meta name="keywords" content="RMC,Home,Home RMC">
    <link rel="author" content="Garsa Cahya Sukmana">

	<title>Laporan Karyawan</title>
	 <!-- Bootstrap CSS -->
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css'); ?>">
</head>
<body>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 style="text-align:center;">Laporan Karyawan</h2>
				<h4 style="text-align:center;">Data Karyawan</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered" id="lKaryawan">
					<thead>
						<tr>
							<th>NIK</th>
							<th>NAMA KARYAWAN</th>
							<th>ALAMAT KARYAWAN</th>
							<th>TELP KARYAWAN</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($karyawan as $x)
							{
								echo "<tr>";
								echo "<td>".$x->NIK."</td>";
								echo "<td>".$x->NmKaryawan."</td>";
								echo "<td>".$x->AlmtKaryawan."</td>";
								echo "<td>".$x->TelpKaryawan."</td>";
								echo "</tr>";	
							} 
						?>
					</tbody>
				</table>
			</div>
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
    		window.print();
    	});
    </script>
</body>
</html>