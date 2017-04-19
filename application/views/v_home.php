<!DOCTYPE html>
<html lang="en">
<head>  
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Home | RMC">
    <meta name="keywords" content="RMC,Home,Home RMC">
    <link rel="author" content="Garsa Cahya Sukmana">

    <title>Home | RMC</title>
    
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/timepickerdrop/timedropper.css'); ?>">
    <!-- Time Dropper CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-timepicker.min.css'); ?>">

    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jquerytimepicker/jquery.timepicker.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jquerytimepicker/lib/bootstrap-datepicker.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.dataTables.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/dataTables.bootstrap.min.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

    .ui-state-default .ui-icon {
        background-image: url(<?php echo base_url('assets/images/ui-icons_777777_256x240.png'); ?>);
    }

    .ui-widget-overlay {
    background: #aaaaaa url(<?php echo base_url('assets/images/ui-bg_highlight-hard_40_aaaaaa_1x100.png'); ?>) 50% top repeat-x;
    opacity: .3;
    filter: Alpha(Opacity=30);
    }

    .ui-widget-shadow {
        margin: -8px 0 0 -8px;
        padding: 8px;
        background: #aaaaaa url(<?php echo base_url('assets/images/ui-bg_highlight-soft_50_aaaaaa_1x100.png'); ?>) 50% top repeat-x;
        opacity: .2;
        filter: Alpha(Opacity=20);
        border-radius: 8px;
    }
    </style>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><?php echo $this->session->username; ?></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?php echo $this->session->username; ?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('Home/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="<?php echo base_url(); ?>" id="dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <!-- Transaction -->
                        <li id="transac">
                            <a href="#"><i class="fa fa-money fa-fw"></i> Transaction<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo site_url(''); ?>" id="t-booking">Booking Mobil</a>
                                </li>
                                <li>
                                    <a href="" id="t-borrow">Pinjam Mobil</a>
                                </li>
                                <li>
                                    <a href="" id="t-returns">Pengembalian Mobil</a>
                                </li>
                                <li>
                                    <a href="" id="t-services">Services Mobil</a>
                                </li>
                                <li>
                                    <a href="" id="t-deposit">Setor Mobil</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- End of Transaction -->

                        <!-- Data -->
                        <li id="alldata">
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="" id="d-car">Kendaraan</a>
                                </li>
                                <li>
                                    <a href="" id="d-sopir">Sopir</a>
                                </li>
                                <li>
                                    <a href="" id="d-pelanggan">Pelanggan</a>
                                </li>
                                <li>
                                    <a href="" id="d-employees">Karyawan</a>
                                </li>
                                <li>
                                    <a href="" id="d-pemimobil">Pemilik</a>
                                </li>
                                <li>
                                    <a href="" id="d-jsservice">Jenis Service</a>
                                </li>
                                <li>
                                    <a href="" id="d-typemobil">Type Mobil</a>
                                </li>
                                <li>
                                    <a href="" id="d-merkmobil">Merk Mobil</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li id="reports">
                            <a href="#"><i class="fa fa-money fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Mobil <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#" id="pmsukanper">Pemasukan Per</a>
                                        </li>
                                        <li>
                                            <li>
                                                <a href="#">Laporan Pengeluaran <span class="fa arrow"></span></a>
                                                <ul class="nav nav-third-level">
                                                    <li>
                                                        <a href="#" id="perawatan">Perawatan</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" id="setoran">Setoran</a>
                                                    </li>
                                                </ul>
                                                <!-- /.nav-third-level -->
                                            </li>            
                                        </li>
                                        <li>
                                            <li>
                                                <a href="#">Laporan Status Mobil <span class="fa arrow"></span></a>
                                                <ul class="nav nav-third-level">
                                                    <li>
                                                        <a href="#" id="booked">Booked</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" id="available">Available</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" id="mobstatus">Status Mobil</a>
                                                    </li>
                                                </ul>
                                                <!-- /.nav-third-level -->
                                            </li>            
                                        </li>
                                        <li>
                                            <a href="#" id="serv">Service</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- End of Data -->   
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" id="show-title">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row" id="stat">
                
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div id="s-load-data"></div>
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
        var ty = <?php echo json_encode($this->session->typeuser); ?>;
        
        if(ty == "operator")
        {
            $("#reports").remove();
            $("#alldata").remove();
        } 
    </script>

    <script type="text/javascript">

        $(window).load(function()
        {
            $('.loader').fadeOut(1000);
            $("#stat").load("<?php echo base_url().'S_Dashboard'; ?>");
            $(".form-control[readonly]").css('cursor','default');

            function updateService()
            {
                $.ajax({
                    url : ""
                }).done(function()
                {
                  $.post("<?php echo site_url('Home/uMobOtomatisService'); ?>",function()
                    {

                    });
                });  
            }

            window.setInterval(updateService,2000);
        });

        //Jquery
        $(document).ready(function()
        {
            $('#dashboard').on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text("Dashboard");
                $("#stat").load("<?php echo base_url().'S_Dashboard'; ?>");
                // Empty Transaction Menu
                $("#s-load-data").empty();
            });

            // Transaction
            $("#t-booking").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text("Booking Mobil");
                $("#s-load-data").load("<?php echo base_url().'TBooking_Car'; ?>");
                $("#stat").empty();
                $("#s-load-data").parent().addClass('col-lg-4').removeClass('col-lg-12');
            });

            $("#t-borrow").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").load("<?php echo base_url().'TBorrow_Car'; ?>");
                $("#stat").empty();
                $("#s-load-data").parent().addClass('col-lg-4').removeClass('col-lg-12');
            });

            $("#t-services").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").load("<?php echo base_url().'TServices_Car'; ?>");
                $("#stat").empty();
                $("#s-load-data").parent().addClass('col-lg-4').removeClass('col-lg-12');
            });

            $("#t-returns").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").load("<?php echo base_url().'TReturns_Car'; ?>");
                $("#stat").empty();
                $("#s-load-data").parent().addClass('col-lg-4').removeClass('col-lg-12');
            });

            $("#t-deposit").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").load("<?php echo base_url().'TDeposit_Car'; ?>");
                $("#stat").empty();
                $("#s-load-data").parent().removeClass('col-lg-12').addClass('col-lg-4');
            });

            //Data
            $("#d-employees").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").parent().removeClass('col-lg-4').addClass('col-lg-12');
                $("#s-load-data").load("<?php echo base_url().'D_Employees'; ?>");
                $("#stat").empty();
            });

            $("#d-car").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").parent().removeClass('col-lg-4').addClass('col-lg-12');
                $("#s-load-data").load("<?php echo base_url().'D_Car'; ?>");
                $("#stat").empty();;
            });

            $("#d-sopir").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").parent().removeClass('col-lg-4').addClass('col-lg-12');
                $("#s-load-data").load("<?php echo base_url().'D_Sopir'; ?>");
                $("#stat").empty();
            });

            $("#d-pelanggan").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").parent().removeClass('col-lg-4').addClass('col-lg-12');
                $("#s-load-data").load("<?php echo base_url().'D_Pelanggan'; ?>");
                $("#stat").empty();
            });

            // Laporan
            $("#pmsukanper").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").parent().removeClass('col-lg-4').addClass('col-lg-12');
                $("#s-load-data").load("<?php echo base_url().'LMobPemasukanPer'; ?>");
                $("#stat").empty();
            });

            $("#perawatan").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").parent().removeClass('col-lg-4').addClass('col-lg-12');
                $("#s-load-data").load("<?php echo base_url().'LMobPengeluaranPerServices'; ?>");
                $("#stat").empty();
            });

            $("#setoran").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").parent().removeClass('col-lg-4').addClass('col-lg-12');
                $("#s-load-data").load("<?php echo base_url().'LMobPengeluaranPerSetoran'; ?>");
                $("#stat").empty();
            });

            $("#booked").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").parent().removeClass('col-lg-4').addClass('col-lg-12');
                $("#s-load-data").load("<?php echo base_url().'LMobBooked'; ?>");
                $("#stat").empty();
            });

            $("#available").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").parent().removeClass('col-lg-4').addClass('col-lg-12');
                $("#s-load-data").load("<?php echo base_url().'LMobAvailable'; ?>");
                $("#stat").empty();
            });

            $("#mobstatus").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").parent().removeClass('col-lg-4').addClass('col-lg-12');
                $("#s-load-data").load("<?php echo base_url().'LStatusMobil'; ?>");
                $("#stat").empty();
            });

            $("#serv").on('click',function(event)
            {
                event.preventDefault();
                $("#show-title").text($(this).text());
                $("#s-load-data").parent().removeClass('col-lg-4').addClass('col-lg-12');
                $("#s-load-data").load("<?php echo base_url().'LService'; ?>");
                $("#stat").empty();
            });
        });
    </script>
</body>
</html>