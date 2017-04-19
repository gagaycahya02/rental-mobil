<form class="form-signin" role="form" accept-charset="UTF-8" method="post" id="fSetoran">
	<div class="form-group">
		<label for="ntbooking">NO SETORAN</label>
		<input type="text" name="ntsetoran" id="ntsetoran" class="form-control" placeholder="No Setoran" autocomplete="off" value="<?php echo $this->MData->getFakturSetoran(); ?>" readonly required>
	</div>
	<div class="form-group">
		<a href="" id="sPem" style="text-decoration:none;float:right;">+</a>
		<label for="ntbooking">KODE PEMILIK</label>
		<input type="text" name="npemilik" id="npemilik" class="form-control" placeholder="Kode Pemilik" autocomplete="off" required style="float:left;" readonly>
	</div>
	<div class="form-group">
		<label for="ntbooking">NIK</label>
		<input type="text" name="nik" id="nik" class="form-control" placeholder="NIK" autocomplete="off" value="<?php echo $this->session->nik; ?>" readonly required>
	</div>
	<div class="form-group">
		<label for="ntbooking">TANGGAL SETORAN</label>
		<input type="text" name="tgl" id="tgl" class="form-control" placeholder="Tgl Setoran" autocomplete="off" value="<?php echo date('Y-m-d'); ?>" readonly required>
	</div>
	<div class="form-group">
		<label for="ntbooking">JUMLAH SETORAN</label>
		<input type="text" name="jml" id="jml" class="form-control" placeholder="Jumlah" autocomplete="off" required readonly="">
	</div>
	<div class="form-group">
		<input type="submit" name="ctsetoran" id="ctsetoran" class="btn btn-lg btn-primary btn-block" value="SETOR">        	
	</div>
</form>

<div id="dPemilik">
  <table class="table table-bordered" id="tDataPemilik">
    <thead>
      <tr>
        <th>NO PLAT</th>
        <th>KODE PEMILIK</th>
        <th>NAMA PEMILIK</th>
        <th>JUMLAH SETORAN</th>
        <th>OPSI</th>
      </tr>
    </thead>

    <tbody>
      <?php  
        foreach ($setoran as $x) {
          echo "<tr>";
          echo "<td>".$x->NoPlat."</td>";
          echo "<td>".$x->KodePemilik."</td>";
          echo "<td>".$x->NmPemilik."</td>";
          echo "<td>".$x->JMLTotalSetoran."</td>";
          echo "<td><button id='getPemilik' class='btn btn-success'>AMBIL</button></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
		$("#sPem").on('click',function(e)
		{
			e.preventDefault();
		});

		$("#ntsetoran").on('keyup',function(e)
	    {
	      if(isNaN($("#ntsetoran").val()))
	      {
	        swal("Info","Harus Berupa Angka","info");
	        $("#ntsetoran").val("");
	      }
	    });

	    $("#jml").on('keyup',function(e)
	    {
	      if(isNaN($("#jml").val()))
	      {
	        swal("Info","Harus Berupa Angka","info");
	        $("#jml").val("");
	      }
	    });

	    $('#tDataPemilik').dataTable();

	    $("#dPemilik").dialog(
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

	    $("#sPem").on('click',function()
	    {
	    	event.preventDefault();
      		$( "#dPemilik").dialog('open');
	    });

	    $('#tDataPemilik').on('click','#getPemilik',function(x)
	    {
	      var cRow = $(this).closest("tr");
	      var n = cRow.find("td:eq(0)").text();
	      var m = cRow.find("td:eq(1)").text();
	      var o = cRow.find("td:eq(2)").text();
	      var p = cRow.find("td:eq(3)").text();

	      $("#nktp").val(n);
	      $("#npemilik").val(m);
	      $("#jml").val(p);
	      
	      $("#dPemilik").dialog('close');
	    });

	    $("#fSetoran").on('submit',function(e)
	    {
	    	e.preventDefault();

	    	swal({
		        title: "Yakin mau setor ?",
		        text: "",
		        type: "warning",
		        showCancelButton: true,
		        confirmButtonColor: "#DD6B55",
		        confirmButtonText: "Ya,mau setor",
		        cancelButtonText: "Tidak jadi",
		        closeOnConfirm: false,
		        closeOnCancel: false
		      },
		      function(isConfirm){
		        if (isConfirm) {
		          var a = $.ajax(
		          {
		            url : "<?php echo site_url('TDeposit_Car/inputSetoran') ?>",
		            type : "POST",
		            data : $("#fSetoran").serialize(),
		            beforeSend : function()
		            {
		              $("#ctsetoran").val("SENDING...");
		            }
		          }).done(function()
		          {
		            sweetAlert("Success Setor Gan","","success");
		            $("#ctsetoran").val("BOOKING");
		            $("#fSetoran")[0].reset();
		          });

		          $.when(a);
		        } else {
		          swal("Cancelled", "Your imaginary file is safe :)", "error");
		        }
		      });
	    });
	});
</script>