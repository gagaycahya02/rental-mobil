    <div class="container-fluid" style="margin-top:10px;">
        <div class="row">
            <div class="col-md-3">
                <form method="post" accept-charset="UTF-8" class="form-signin" role="form" id="lmobpemperser">
                    <div class="form-group">
                        <input type="text" name="tglsatu" id="tglsatu" class="form-control" placeholder="Tanggal Satu" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="tgldua" id="tgldua" class="form-control" placeholder="Tanggal Dua" autocomplete="off" required>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="data"></div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        

        $(document).ready(function()
        {
            var total = [0,0,0];

            $("#tglsatu").datepicker({
                'dateFormat' : 'yy-mm-dd'
            });

            $("#tgldua").datepicker({
                'dateFormat' : 'yy-mm-dd'
            });

            $("#tgldua").on('change',function()
            {
                $.ajax({
                    async: true,
                    url : "<?php echo site_url('LMobPemasukanPer/getMobPemasukan'); ?>/"+ $("#tglsatu").val() + "/" + $("#tgldua").val(),
                    type : "POST",
                    data : $("#lmobpemperser").serialize(),
                    success : function(data)
                    {
                        var obj = JSON.parse(data);

                        $(".data").append("<table class='table table-bordered' id='sum_table'><thead><tr class='titleRow'><th>No Transaksi</th><th>Tgl</th><th>No KTP</th><th>Pelanggan</th><th>Sub Total</th></tr></thead><tbody class='output'></tbody><tfoot><tr class='totalColumn'><th colspan='3'>Total</th><th>:</th><th class='totalCols'></th><tr></tfoot></table>");

                        for(var key in obj)
                        {
                            if(obj.hasOwnProperty(key))
                            {
                                var htm = "<tr><td>"+obj[key].NoTransaksi+"</td><td>"+obj[key].TglKembaliRealisasi+"</td><td>"+obj[key].NoKTP+"</td><td>"+obj[key].NamaPel+"</td><td class='rowDataSd'>"+obj[key].SubTotal+"</td></tr>";
                                $(".output").append(htm);
                            }
                        }


                        var $dataRows = $("#sum_table tr:not('.totalColumn, .titleRow')");

                        $dataRows.each(function()
                        {
                            $(this).find('.rowDataSd').each(function(i)
                            {
                                total[i] += parseInt($(this).html());
                            }); 
                        });

                        $("#sum_table th.totalCols").each(function(i)
                        {
                            $(this).html(total[i]);
                        });
                    }
                },"JSON");
            });
        });
    </script>