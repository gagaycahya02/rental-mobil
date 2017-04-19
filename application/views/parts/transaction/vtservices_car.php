<form class="form-signin" id="fServices" role="form" accept-charset="UTF-8" method="post">
	<div class="form-group">
		<label for="ntbooking">KODE SERVICES</label>
		<input type="text" name="ntranservices" id="ntranservices" class="form-control" placeholder="Kode Service" value="<?php echo $this->MData->getFakturService(); ?>" readonly autocomplete="off" required>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="ntbooking">PRIODE SERVICE</label>
				<input type="text" name="tgl" id="tgl" class="form-control" placeholder="Priode Service" autocomplete="off" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="ntbooking">SERVICE SELANJUT</label>
				<input type="text" name="tglselanjutnya" id="tglselanjutnya" class="form-control" placeholder="Services Selanjut" autocomplete="off" required>
			</div>
		</div>
	</div>
	<a href="" id="sPlat"  data-toggle="modal" style="text-decoration:none;float:right;">+</a>
	<div class="form-group">
		<label for="ntbooking">PLAT NOMOR</label>
		<input type="text" name="nplat" id="nplat" class="form-control" placeholder="No Plat" autocomplete="off" required readonly style="float:left;">
	</div>
	<a href="" id="sServices" data-toggle="modal" style="text-decoration:none;float:right;">+</a>
	<div class="form-group">
		<label for="ntbooking">KETERANGAN SERVICES</label>
		<input type="hidden" name="njservices" id="njservices" class="form-control" placeholder="No Jenis Services" autocomplete="off" required readonly style="float:left;">
		<input type="text" name="nmservice" id="nmservice" class="form-control" placeholder="Keterangan Services" autocomplete="off" required readonly style="float:left;">
	</div>
	
	<div class="form-group">
		<label for="ntbooking">BIAYA SERVICES</label>
		<input type="text" name="byservices" id="byservices" class="form-control" placeholder="Biaya Services" autocomplete="off" required>
	</div>
	<div class="form-group">
		<input type="submit" name="ctservices" id="ctservices" class="btn btn-lg btn-primary btn-block" value="SERVICE">        	
	</div>
</form>

<div id="dMobil">
  <table class="table table-bordered" id="tMobil">
    <thead>
      <tr>
        <th>NO PLAT</th>
        <th>NAMA MERK</th>
        <th>NAMA TYPE</th>
        <th>TAHUN</th>
        <th>OPSI</th>
      </tr>
    </thead>

    <tbody>
      <?php  
        foreach ($mobil as $x) {
          echo "<tr>";
          echo "<td>".$x->NoPlat."</td>";
          echo "<td>".$x->NmMerk."</td>";
          echo "<td>".$x->NmType."</td>";
          echo "<td>".$x->Tahun."</td>";
          echo "<td><button id='getDPlat' class='btn btn-success'>AMBIL</button></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<div id="dServices">
  <table class="table table-bordered" id="tServices">
    <thead>
      <tr>
        <th>KODE JENIS SERVICES</th>
        <th>JENIS SERVICES</th>
        <th>OPSI</th>
      </tr>
    </thead>

    <tbody>
      <?php  
        foreach ($jServices as $x) {
          echo "<tr>";
          echo "<td>".$x->IDJenisService."</td>";
          echo "<td>".$x->NmJenisService."</td>";
          echo "<td><button id='getDServices' class='btn btn-success'>AMBIL</button></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
		$("#sPlat").on('click',function(event)
		{
			event.preventDefault();	
			$("#dMobil").dialog('open');
		});	

		$("#tMobil").dataTable();

		$("#dMobil").dialog(
	    { 
	      autoOpen : false,
	      resizable : false,
	      dialogClass : 'alert',
	      title : 'Data Sopir',
	      autoOpen : false,
	      modal : true,
	      width : 680,
	      buttons : {
	        "Tutup" : function ()
	        {
	          $(this).dialog('close');
	        }
	      }
	    });

	    $('#tMobil').on('click','#getDPlat',function(x)
	    {
	      var cRow = $(this).closest("tr");
	      var n = cRow.find("td:eq(0)").text();

	      $("#nplat").val(n);
	      
	      $("#dMobil").dialog('close');
	    });

		$("#sServices").on('click',function(event)
		{
			event.preventDefault();
			$("#dServices").dialog('open');
		});

		$("#tServices").dataTable();

		$("#dServices").dialog(
	    { 
	      autoOpen : false,
	      resizable : false,
	      dialogClass : 'alert',
	      title : 'Data Sopir',
	      autoOpen : false,
	      modal : true,
	      width : 680,
	      buttons : {
	        "Tutup" : function ()
	        {
	          $(this).dialog('close');
	        }
	      }
	    });

	    $('#tServices').on('click','#getDServices',function(x)
	    {
	      var cRow = $(this).closest("tr");
	      var n = cRow.find("td:eq(0)").text();
	      var m = cRow.find("td:eq(1)").text();

	      $("#njservices").val(n);
	      $("#nmservice").val(m);
	      
	      $("#dServices").dialog('close');
	    });

	    $("#byservices").on('keyup',function(e)
	    {
	    	if(isNaN($("#byservices").val()))
	      	{
	       		swal("Info","Harus Berupa Angka","info");
	        	$("#byservices").val("");
	     	}
	    });

	    $("#ntranservices").on('keyup',function(e)
	    {
	    	if(isNaN($("#ntranservices").val()))
	      	{
	        	swal("Info","Harus Berupa Angka","info");
	        	$("#ntranservices").val("");
	      	}
	    });

	    $("#fServices").on('submit',function(e)
	    {
	      e.preventDefault();

	      swal({
	        title: "Yakin mau services mobil ?",
	        text: "",
	        type: "warning",
	        showCancelButton: true,
	        confirmButtonColor: "#DD6B55",
	        confirmButtonText: "Ya,mau services",
	        cancelButtonText: "Tidak jadi",
	        closeOnConfirm: false,
	        closeOnCancel: false
	      },
	      function(isConfirm){
	        if (isConfirm) {
	          var a = $.ajax(
	          {
	            url : "<?php echo site_url('TServices_Car/insertServices') ?>",
	            type : "POST",
	            data : $("#fServices").serialize(),
	            beforeSend : function()
	            {
	              $("#ctservices").val("SENDING...");
	            }
	          }).done(function()
	          {
	            sweetAlert("Success Services Gan","","success");
	            $("#ctservices").val("SERVICE");
	            $("#fServices")[0].reset();
	          });

	          $.when(a);

	        } else {
	          swal("Cancelled", "Your imaginary file is safe :)", "error");
	        }
	      });
	    });

	    // Datetimepicker
	    $("#tgl").datepicker(
	    {
	      dateFormat : 'yy-mm-dd'
	    });
	    
	    $("#tglselanjutnya").datepicker(
	    {
	      dateFormat : 'yy-mm-dd'
	    });
	});
</script>