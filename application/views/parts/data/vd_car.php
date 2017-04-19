<div class="row">
	<div class="col-md-1">
		<button class="btn" id="inputMbl">TAMBAH</button>
	</div>
	<div class="col-md-1">
		<button class="btn" id="uMbl">UPDATE</button><br><br>
	</div>
</div>

<table class="table table-condensed" id="tMbl">
 	<thead>
 		<tr>
 			<th>NO PLAT</th>
 			<th>ID</th>
 			<th>TAHUN</th>
 			<th>TARIF PER JAM</th>
 			<th>STATUS</th>
 			<th>ACTION</th>
 		</tr>
 	</thead>
 	<tbody>
<?php 
	foreach($car as $test)
	{
		$s = "";
		$x = $test->StatusRental;

		if($x == 1)
		{
			$s = "Booked";
		}else
		{
			$s = "Available";
		}

		echo "<tr>";
		echo "<td>".$test->NoPlat."</td>";
		echo "<td>".$test->IDType."</td>";
		echo "<td>".$test->Tahun."</td>";
		echo "<td>".$test->TarifPerHari."</td>";
		echo "<td>".$s."</td>";
		echo "<td><button id='carUpdate' class='btn'>UPDATE</button> <br>
		<br> <button id='carDelete' class='btn'>DELETE</button></td>";
		echo "</tr>";
	}
?>
	</tbody>
</table>

<div class="row">
	<div class="col-md-4">
		<form role="form" accept-charset="UTF-8" id="fUMbl" method="post">
			<div class="form-group">
				<label>NO PLAT</label>
				<input type="text" class="form-control" name="noplat" id="noplat" placeholder="No PLAT" readonly="">
			</div>
			<div class="form-group">
				<label>Tahun Mobil</label>
				<input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun Mobil">
			</div>
			<div class="form-group">
				<label>Tarif Per Hari</label>
				<input type="text" class="form-control" name="tperhari" id="tperhari" placeholder="Tarif Per Hari">
			</div>
			<div class="form-group">
				<label>Status Rental (Dipinjam (1)/Tersedia (0))</label>
				<input type="text" class="form-control" name="status" id="status" placeholder="Status Rental">
			</div>
			<input type="submit" name="updatePelanggan" class="btn btn-lg btn-primary btn-block" id="updateMbl" value="UPDATE">
		</form>


		<form role="form" accept-charset="UTF-8" id="fIMbl" method="post">
			<div class="form-group">
				<label>NO PLAT</label>
				<input type="text" class="form-control" name="noplat" id="noplat" placeholder="No PLAT">
			</div>
			<div class="form-group">
				<label>Type Mobil</label>
				<input type="text" class="form-control" name="idtype" id="idtype" placeholder="Type Mobil">
			</div>
			<div class="form-group">
				<label>Tahun Mobil</label>
				<input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun Mobil">
			</div>
			<div class="form-group">
				<label>Tarif Per Hari</label>
				<input type="text" class="form-control" name="tarifperhari" id="tarifperhari" placeholder="Tarif Per Hari">
			</div>
			<div class="form-group">
				<label>Status Mobil</label>
				<input type="text" class="form-control" name="status" id="status" placeholder="Status">
			</div>
			<div class="form-group">
				<label>Pemilik</label>
				<input type="text" class="form-control" name="kodepemilik" id="kodepemilik" placeholder="Pemilik">
			</div>
			<input type="submit" name="inPelanggan" class="btn btn-lg btn-primary btn-block" id="inMbl" value="TAMBAH">
		</form>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{	
		$("#fUMbl").hide();
		$("#fIMbl").hide();

		$("#tMbl").DataTable();

		$("#inputMbl").on('click',function()
		{
			$("#fUMbl").hide();
			$("#fIMbl").show();
		});

		$("#uMbl").on('click',function()
		{
			$("#fIMbl").hide();
			$("#fUMbl").show();
		});

		$('#tMbl').on('click','#carUpdate',function(x)
	    {
	      var cRow = $(this).closest("tr");
	      var n = cRow.find("td:eq(0)").text();
	      var x = cRow.find("td:eq(2)").text();
	      var y = cRow.find("td:eq(3)").text();
	      var z = cRow.find("td:eq(4)").text();

	      var dataMobil = "";

	      if(z == "Dipinjam")
	      {
	      	dataMobil = "1";
	      }else
	      {
	      	dataMobil = "0";
	      }

	      $("#noplat").val(n);
	      $("#tahun").val(x);
	      $("#tperhari").val(y);
	      $("#status").val(dataMobil);
	    });

	    $('#tMbl').on('click','#carDelete',function(x)
	    {
	      var cRow = $(this).closest("tr");
	      var n = cRow.find("td:eq(0)").text();

	      swal({
		        title: "Yakin mau dihapus ?",
		        text: "",
		        type: "info",
		        showCancelButton: true,
		        confirmButtonColor: "#DD6B55",
		        confirmButtonText: "Ya",
		        cancelButtonText: "Tidak",
		        closeOnConfirm: false,
		        closeOnCancel: false
		      },
		      function(isConfirm){
		        if (isConfirm) {
		          	$.ajax(
			      	{
			      		type : "POST",
			      		url : "<?php echo site_url('D_Car/delKendaraan'); ?>/" + n
			      	}).done(function()
			      	{
			      		sweetAlert("Success Hapus Gan","","success");
			      	});
		        } else {
		          swal("Cancelled", "Your imaginary file is safe :)", "error");
		        }
		      });
	    });

	    $("#fIMbl").on('submit',function(e)
		{
			e.preventDefault();

			swal({
		        title: "Yakin tambah pelanggan ?",
		        text: "",
		        type: "info",
		        showCancelButton: true,
		        confirmButtonColor: "#DD6B55",
		        confirmButtonText: "Ya",
		        cancelButtonText: "Tidak",
		        closeOnConfirm: false,
		        closeOnCancel: false
		      },
		      function(isConfirm){
		        if (isConfirm) {
		          	$.ajax({
					type : 'POST',
					url : "<?php echo site_url('D_Car/inpKendaraan'); ?>",
					data : $("#fIMbl").serialize(),
					beforeSend : function()
					{
						$("#inMbl").val("SENDING...");
					}}).done(function()
					{
						sweetAlert("Success","","success");
						$("#inMbl").val("Tambah");
						$("form")[0].reset();
					});
		        } else {
		          swal("Cancelled", "Your imaginary file is safe :)", "error");
		        }
		   	});
		});

		$("#fUMbl").on('submit',function(e)
		{
			e.preventDefault();

			swal({
		        title: "Yakin update pelanggan ?",
		        text: "",
		        type: "info",
		        showCancelButton: true,
		        confirmButtonColor: "#DD6B55",
		        confirmButtonText: "Ya",
		        cancelButtonText: "Tidak",
		        closeOnConfirm: false,
		        closeOnCancel: false
		      },
		      function(isConfirm){
		        if (isConfirm) {
		          	$.ajax({
					type : 'POST',
					url : "<?php echo site_url('D_Car/updaKendaraan'); ?>",
					data : $("#fUMbl").serialize(),
					beforeSend : function()
					{
						$("#updateMbl").val("SENDING...");
					}
					}).done(function()
					{
						sweetAlert("Success","","success");
						$("#updateMbl").val("Update");
						$("form")[0].reset();
						$("form")[0].reset();
					});
		        } else {
		          swal("Cancelled", "Your imaginary file is safe :)", "error");
		        }
		   	});
		});
	});
</script>