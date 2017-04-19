<div class="row">
	<div class="col-md-1">
		<button class="btn" id="inputPelanggan">TAMBAH</button>
	</div>
	<div class="col-md-1">
		<button class="btn" id="uPelanggan">UPDATE</button><br><br>
	</div>
</div>

<table class="table table-condensed" id="tSop">
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>NAMA SOPIR</th>
 			<th>ALAMAT SOPIR</th>
 			<th>TELP SOPIR</th>
 			<th>NO SIM</th>
 			<th>TARIF PER JAM</th>
 			<th>ACTION</th>
 		</tr>
 	</thead>
 	<tbody>
<?php 
	foreach($sop as $test)
	{
		echo "<tr>";
		echo "<td>".$test->IDSopir."</td>";
		echo "<td>".$test->NmSopir."</td>";
		echo "<td>".$test->AlmSopir."</td>";
		echo "<td>".$test->TelpSopir."</td>";
		echo "<td>".$test->NoSim."</td>";
		echo "<td>".$test->TarifPerHari."</td>";
		echo "<td><button id='sopUpdate' class='btn'>UPDATE</button> <br>
		<br> <button id='sopDelete' class='btn'>DELETE</button></td>";
		echo "</tr>";
	}
?>
	</tbody>
</table>

<div class="row">
	<div class="col-md-4">
		<form role="form" accept-charset="UTF-8" id="fUSopir" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="idSop" id="idSop" placeholder="Id Sopir" readonly="">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="nsop" id="nsop" placeholder="Nama Sopir">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="almtsop" id="almtsop" placeholder="Alamat Sopir">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="telpsop" id="telpsop" placeholder="Telp Sopir">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="nosim" id="nosim" placeholder="No SIM">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="tarifsop" id="tarifsop" placeholder="Tarif Sopir">
			</div>
			<input type="submit" name="updatePelanggan" class="btn btn-lg btn-primary btn-block" id="updateSop" value="UPDATE">
		</form>


		<form role="form" accept-charset="UTF-8" id="fISopir" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="idSop" id="idSop" placeholder="No KTP" readonly value="<?php echo $this->MData->getKdSopir(); ?>">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="nsop" id="nsop" placeholder="Nama Sopir">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="almtsop" id="almtsop" placeholder="Alamat Sopir">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="telpsop" id="telpsop" placeholder="Telp Sopir">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="nosim" id="nosim" placeholder="No SIM">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="tarifsop" id="tarifsop" placeholder="Tarif Sopir">
			</div>
			<input type="submit" name="inPelanggan" class="btn btn-lg btn-primary btn-block" id="inSop" value="TAMBAH">
		</form>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
		$("#tSop").dataTable();

		$("#fUSopir").hide();
		$("#fISopir").hide();

		$("#inputPelanggan").on('click',function()
		{
			$("#fUSopir").hide();
			$("#fISopir").show();
		});

		$("#uPelanggan").on('click',function()
		{
			$("#fISopir").hide();
			$("#fUSopir").show();
		});

		$('#tSop').on('click','#sopUpdate',function(x)
	    {
	      var cRow = $(this).closest("tr");
	      var n = cRow.find("td:eq(0)").text();
	      var x = cRow.find("td:eq(1)").text();
	      var y = cRow.find("td:eq(2)").text();
	      var z = cRow.find("td:eq(3)").text();
	      var a = cRow.find("td:eq(4)").text();
	      var b = cRow.find("td:eq(5)").text();

	      $("#idSop").val(n);
	      $("#nsop").val(x);
	      $("#almtsop").val(y);
	      $("#telpsop").val(z);
	      $("#nosim").val(a);
	      $("#tarifsop").val(b);
	    });


	    $("#fISopir").on('submit',function(e)
		{
			e.preventDefault();

			swal({
		        title: "Yakin tambah sopir ?",
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
					url : "<?php echo site_url('D_Sopir/inpSopir'); ?>",
					data : $("#fISopir").serialize(),
					beforeSend : function()
					{
						$("#inSop").val("SENDING...");
					}}).done(function()
					{
						sweetAlert("Success","","success");
						$("#inSop").val("Tambah");
						$("form")[0].reset();
					});
		        } else {
		          swal("Cancelled", "Your imaginary file is safe :)", "error");
		        }
		   	});
		});

		$("#fUSopir").on('submit',function(e)
		{
			e.preventDefault();

			swal({
		        title: "Yakin update sopir ?",
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
					url : "<?php echo site_url('D_Sopir/updaSopir'); ?>",
					data : $("#fUSopir").serialize(),
					beforeSend : function()
					{
						$("#updateSop").val("SENDING...");
					}
					}).done(function()
					{
						sweetAlert("Success","","success");
						$("#updateSop").val("Update");
						$("form")[0].reset();
						$("form")[0].reset();
					});
		        } else {
		          swal("Cancelled", "Your imaginary file is safe :)", "error");
		        }
		   	});
		});


		$('#tSop').on('click','#sopDelete',function(x)
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
			      		url : "<?php echo site_url('D_Sopir/delSopir'); ?>/" + n
			      	}).done(function()
			      	{
			      		sweetAlert("Success Hapus Gan","","success");
			      	});
		        } else {
		          swal("Cancelled", "Your imaginary file is safe :)", "error");
		        }
		      });
	    });
	});
</script>