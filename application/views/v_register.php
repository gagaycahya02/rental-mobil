<!DOCTYPE html>
<html>
<head>
	<title>Register | RMC - Rental Mobil Cianjur</title>
	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Home | Register">
	<meta name="keywords" content="RMC,Register,Signup RMC">
	<link rel="author" content="Garsa Cahya Sukmana">
	<!-- CSS Library Imported -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/signin.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom-page.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert/sweetalert.css'); ?>">
	<!-- Page Config -->
	<style type="text/css">
		body
		{
			background-color:rgba(43,53,61,50);
		}

		/* Font Config */
		@font-face
		{
			font-family:'Montserrat-Bold';
			src:url(<?php echo base_url('assets/fonts/Montserrat-Bold.ttf'); ?>);
		}

		@font-face
		{
			font-family:'Lobster';
			src:url(<?php echo base_url('assets/fonts/Lobster_1.3.otf'); ?>);
		}

		@font-face
		{
			font-family:'Montserrat-Regular';
			src:url(<?php echo base_url('assets/fonts/Montserrat-Regular.ttf'); ?>);
		}

		.form-control {
		    display: block;
		    width: 100%;
		    height: 34px;
		    padding: 6px 12px;
		    font-size: 10px;
		    line-height: 1.42857143;
		    color: #555;
		    background-color: #fff;
		    background-image: none;
		    border: 1px solid #ccc;
		    border-radius:1px; 
		    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
		    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
		    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
		    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
		   	border:2px solid #00A3E7;
		}

		.btn {
		    display: inline-block;
		    padding: 6px 12px;
		    margin-bottom: 0;
		    font-size: 14px;
		    font-weight: 400;
		    line-height: 1.42857143;
		    text-align: center;
		    white-space: nowrap;
		    vertical-align: middle;
		    cursor: pointer;
		    -webkit-user-select: none;
		    -moz-user-select: none;
		    -ms-user-select: none;
		    user-select: none;
		    background-image: none;
		    border: 1px solid transparent;
		    border-radius: 1px;
		    height:auto;
		    padding:10px;
		}

		.btn-default, .btn-primary, .btn-success, .btn-info, .btn-warning, .btn-danger {
		     text-shadow:none; 
		    -webkit-box-shadow:none; 
		    box-shadow:none; 
		}


		.form-control:focus {
		     border-color:none; 
		     outline:0; 
		     -webkit-box-shadow:none; 
		     box-shadow:none; 
		}

		.btn-primary:hover, .btn-primary:focus {
		    background-color: none;
		    background-position: 0 -15px;
		    outline:0;
		}

		.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary {
		    color: #fff;
		    background-color:none;
		    border-color:#30ace0;
		    outline:0;
		}

		#lf input[type="text"],input[type="password"]
		{
			color:white;
			border-radius:20px 20px 20px 20px;
		}

		#nik::-webkit-input-placeholder
		{
			color:#ddd;
			font-size:12px;
		}

		#nm::-webkit-input-placeholder
		{
			color:#ddd;
			font-size:12px;
		}

		#almt::-webkit-input-placeholder
		{
			color:#ddd;
			font-size:12px;
		}

		#telp::-webkit-input-placeholder
		{
			color:#ddd;
			font-size:12px;
		}
	</style>
	<!-- End of Page Config-->
</head>
<body>
	<!-- Form Container -->
	<div class="f-custom">
		<div class="container">
			<div class="logo">
				<h3>RMC</h3>
			</div>

			<div class="title-form">
		        <h4 class="form-signin-heading">Welcome Back</h4>
		    </div>

	      	<form class="form-signin" role="form" accept-charset="UTF-8" method="post" id="lf">
		        <div class="login-form-custom">
		        	<div class="form-group">
		        		<input type="text" name="unik" id="nik" class="form-control" placeholder="NIK" autocomplete="off" required>
		        	</div>

		        	<div class="form-group">
		        		<input type="text" name="unm" id="nm" class="form-control" placeholder="NAMA" autocomplete="off" required>
		        	</div>
		        	
		        	<div class="form-group">
		        		<input type="text" name="ualmt" id="almt" class="form-control" placeholder="ALAMAT" required>
		        	</div>

		        	<div class="form-group">
		        		<input type="text" name="utelp" id="telp" class="form-control" placeholder="TELP" autocomplete="off" required>
		        	</div>

		        	<div class="form-group">
		        		<input type="text" name="username" id="euname" class="form-control" placeholder="USERNAME" autocomplete="off" required>
		        	</div>

		        	<div class="form-group">
		        		<input type="password" name="upass" id="upass" class="form-control" placeholder="PASSWORD" autocomplete="off" required>
		        	</div>

		        	<div class="submit-button-custom">
		        		<input type="submit" name="subLogin" id="subLogin" class="btn btn-lg btn-primary btn-block" value="Register Here">
		        	</div>
		        </div>
	      	</form>

	      <div class="or-design">
	      	<p>
	      		or
	      	</p>
	      </div>

	      <div class="sosmed-login">
			<div id="facebook">Login with Facebook</div>
			<div id="gmail">Login with Google</div>
	      </div>

	      <div class="new-user">
	      	<div class="description-of-card">
	      		<a href="" id="btn-register">Login</a>
	      	</div>
	      </div>
	    </div> <!-- /container -->
    </div>

	<!-- JavaScript Library imported -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/login_js.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/sweetalert/sweetalert.min.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			// variable config
			var nik = $("#nik");
			var nm = $("#nm");
			var almt = $("#almt");
			var telp = $("#telp");
			var unma = $("#euname");
			var upass = $("#upass");

			var fsub = $("#subLogin");
			var lf = $("#lf");
			var btnRegister = $("#btn-register");
			var lRedirect = "<?php echo site_url('login'); ?>";

			$(lf).on('submit',function(e)
			{
				e.preventDefault();

				$.ajax({
					type : "POST",
					url : "<?php echo site_url('Register/createUserData'); ?>",
					data : $(lf).serialize(),
					beforeSend : function()
					{
						$(fsub).val("SENDING...");
					},
					success : function(response)
					{
						//window.location.assign(lRedirect);
					}
				}).done(function()
				{
					swal("Daftar Berhasil","","success");
					$(fsub).val("Register Here");
					setTimeout(function()
					{
						window.location.assign(lRedirect);
					},2000);
				});	
			});


			$(telp).on('keyup',function(event)
			{
				if(isNaN(telp.val()))
				{
					telp.val("");
					window.alert("Harus berupa angka");
				}
			});

			$(nik).on('keyup',function(event)
			{
				if(isNaN(nik.val()))
				{
					nik.val("");
					window.alert("Harus berupa angka");
				}
			});

			$("a").on('click',function(event)
			{
				event.preventDefault();
			});

			$(btnRegister).on('click',function()
			{
				window.location.assign(lRedirect);
			});
		});
	</script>
</body>
</html>