    <div class="container" style="margin-top:10px;"> 
       <div class="row">
            <div class="col-md-10">
                <div class="data">
                    <div id="dKTP">
  <table class="table table-bordered" id="tKTP">
    <thead>
      <tr>
        <th>NO PLAT</th>
        <th>TANGGAL SERVICE SEBELUMNYA</th>
        <th>TANGGAL SERVICE BERIKUTNYA</th>
        <th>TINDAKAN</th>
      </tr>
    </thead>

    <tbody>
      <?php  
        foreach ($ser as $x) {
          echo "<tr>";
          echo "<td>".$x->NoPlat."</td>";
          echo "<td>".$x->TglService."</td>";
          echo "<td>".$x->tglservice_berikutnya."</td>";
          echo "<td><button id='getNKtp' class='btn btn-success'>VIEW DETAIL</button></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>
                </div>
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
                    url : "<?php echo site_url('LService/getMobServ'); ?>",
                    type : "POST",
                    data : $("#lmobpenperser").serialize(),
                    success : function(data)
                    {
                        var obj = JSON.parse(data);

                        $(".data").append("<table class='table table-bordered' id='sum_table'><thead><tr class='titleRow'><th>NoPlat</th><th>Tanggal Service Sebelumnya</th><th>Tgl Service Berikutnya</th><th style='display:none;'>Kode Service</th><th style='display:none;'>Nama Type</th><th style='display:none;'>Jenis Service</th><th style='display:none;'>Biaya Service</th><th>Tindakan</th></tr></thead><tbody class='output'></tbody><tfoot style='display:none;'><tr class='totalColumn'><th colspan='5'>Total</th><th>:</th><th class='totalCols'></th><th></th><tr></tfoot></table>");

                        for(var key in obj)
                        {
                            if(obj.hasOwnProperty(key))
                            {
                                var htm = "<tr><td >"+obj[key].NoPlat+"</td><td>"+obj[key].TglService+"</td><td>"+obj[key].tglservice_berikutnya+"</td><td style='display:none;'>"+obj[key].KodeService+"</td><td style='display:none;'>"+obj[key].NmType+"</td><td style='display:none;'>"+obj[key].NmJenisService+"</td><td class='rowDataSd' style='display:none;'>"+obj[key].BiayaService+"</td><td><button class='btn tt'>VIEW DETAIL</button></td></tr>";
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

                        $('#sum_table').on('click','.tt',function(x)
                        {
                          var cRow = $(this).closest("tr");
                          var n = cRow.find("td:eq(0)").text();
                          var m = cRow.find("td:eq(1)").text();
                          var o = cRow.find("td:eq(2)").text();
                          var p = cRow.find("td:eq(3)").text();
                          var q = cRow.find("td:eq(4)").text();
                          var r = cRow.find("td:eq(5)").text();
                          var s = cRow.find("td:eq(6)").text();

                          swal({
                                    title: "View Data Detail ?",
                                    text: "",
                                    type: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "Ya",
                                    cancelButtonText: "Tidak jadi",
                                    closeOnConfirm: false,
                                    closeOnCancel: false
                                  },
                                  function(isConfirm){
                                    if (isConfirm) {
                                      var fktur = window.open("<?php echo site_url('LServiceKendaraan'); ?>","");

                                      fktur.kdservice = p;
                                      fktur.tglserseb = m
                                      fktur.tglserber = o;
                                      fktur.nplat = n;
                                      fktur.nmtype = q;
                                      fktur.jsservice = r;
                                      fktur.byaservice = s;
                                      sweetAlert("Success Gan","","success");

                                    } else {
                                      swal("Cancelled", "Your imaginary file is safe :)", "error");
                                    }
                                }); 
                        });
                    }
                },"JSON");
            }); 
        });
    </script>