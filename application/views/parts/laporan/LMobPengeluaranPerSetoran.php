    <div class="container-fluid" style="margin-top:10px;">
        <div class="row">
            <div class="col-md-3">
                <form method="post" accept-charset="UTF-8" class="form-signin" role="form" id="lmobpenperset">
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
        var total = [0,0,0];

        $(document).ready(function()
        {
            $("#tglsatu").datepicker({
                'dateFormat' : 'yy-mm-dd'
            });
            $("#tgldua").datepicker({
                'dateFormat' : 'yy-mm-dd'
            });

            $("#tgldua").on('change',function()
            {
                $.ajax({
                    url : "<?php echo site_url('LMobPengeluaranPerSetoran/getSetoran'); ?>/"+ $("#tglsatu").val() + "/" + $("#tgldua").val(),
                    type : "POST",
                    data : $("#lmobpenperset").serialize(),
                    success : function(data)
                    {
                        var obj = JSON.parse(data);
                        console.log(data);

                        $(".data").append("<table class='table table-bordered' id='sum_table'><thead><tr class='titleRow'><th>No Setoran</th><th>Tgl</th><th>Kode Pemilik</th><th>Nama Pemilik</th><th>Jumlah Setoran</th></tr></thead><tbody class='output'></tbody><tfoot><tr class='totalColumn'><th colspan='3'>Total</th><th>:</th><th class='totalCols'></th><tr></tfoot></table>");

                        for(var key in obj)
                        {
                            if(obj.hasOwnProperty(key))
                            {
                                var htm = "<tr><td>"+obj[key].NoSetoran+"</td><td>"+obj[key].TglSetoran+"</td><td>"+obj[key].KodePemilik+"</td><td>"+obj[key].NmPemilik+"</td><td class='rowDataSd'>"+obj[key].Jumlah+"</td></tr>";
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