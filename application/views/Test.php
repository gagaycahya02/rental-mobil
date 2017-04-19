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
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No Transaksi</th>
                <th>No Transaksi</th>
            </tr>
        </thead>
        <tbody id="output">
        </tbody>
    </table>

    <input type="" name="" class="form-control age" placeholder="AGE" title="Hei">
    
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
                $.ajax({
                    url : '<?php echo site_url('Test/showServices'); ?>',
                    type : 'POST',
                    success : function(data)
                    {
                        var obj = JSON.parse(data);
                        //console.log(obj);

                        // for(var i = 0;i < obj.length;i++)
                        // {
                        //     var a = obj[i];
                        //     $("#show").text(a.NoTransaksi);
                        // }

                        var $output = $("#output");

                        for(var key in obj)
                        {
                            if(obj.hasOwnProperty(key))
                            {
                                //$("#show").text(obj[key].NoTransaksi);
                                var htm = '<tr><td>'+obj[key].TglPinjam+'</td><td>'+obj[key].TglPinjam+'</td></tr>';
                                $output.append(htm);
                            }
                        }

                        //$("#show").text(obj[2].NoTransaksi);
                    }

                
            });

                $(".age").on('keyup',function(e)
                {
                    $(".age").tooltip({
                        content : "Wow"
                    });
                }); 

                $(".age").tooltip();
        });
    </script>
</body>
</html>