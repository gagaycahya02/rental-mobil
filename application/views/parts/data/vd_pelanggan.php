<div class="row">
	<div class="col-md-1">
		<button class="btn" id="inputPelanggan">TAMBAH</button>
	</div>
	<div class="col-md-1">
		<button class="btn" id="uPelanggan">UPDATE</button><br><br>
	</div>
</div>

<table class="table table-condensed" id="tPlgn">
 	<thead>
 		<tr>
 			<th>NO KTP</th>
 			<th>NAMA PELANGGAN</th>
 			<th>ALAMAT PELANGGAN</th>
 			<th>TELP PELANGGAN</th>
 			<th>ACTION</th>
 		</tr>
 	</thead>
 	<tbody>
<?php 
	foreach($plgn as $test)
	{
		echo "<tr>";
		echo "<td>".$test->NoKTP."</td>";
		echo "<td>".$test->NamaPel."</td>";
		echo "<td>".$test->AlamatPel."</td>";
		echo "<td>".$test->TelpPel."</td>";
		echo "<td><button class='btn' id='plgnUpdate'>UPDATE</button> <br>
		<br> <button  class='btn'id='plgnDelete'>DELETE</button></td>";
		echo "</tr>";
	}
?>
	</tbody>
</table>

<div class="row">
	<div class="col-md-4">
		<form role="form" accept-charset="UTF-8" id="fUPelanggan" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="nktp" id="nktp" placeholder="No KTP" readonly="">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="npelanggan" id="npelanggan" placeholder="Nama Pelanggan">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="almtpelanggan" id="almtpelanggan" placeholder="Alamat Pelanggan">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="telppelanggan" id="telppelanggan" placeholder="Telp Pelanggan">
			</div>
			<input type="submit" name="updatePelanggan" class="btn btn-lg btn-primary btn-block" id="updatePelanggan" value="UPDATE">
		</form>


		<form role="form" accept-charset="UTF-8" id="fIPelanggan" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="nktp" id="nktp" placeholder="No KTP">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="npelanggan" id="npelanggan" placeholder="Nama Pelanggan">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="almtpelanggan" id="almtpelanggan" placeholder="Alamat Pelanggan">
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="telppelanggan" id="telppelanggan" placeholder="Telp Pelanggan">
			</div>
			<input type="submit" name="inPelanggan" class="btn btn-lg btn-primary btn-block" id="inPelanggan" value="TAMBAH">
		</form>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
		$("#fUPelanggan").hide();
		$("#fIPelanggan").hide();

		$("#inputPelanggan").on('click',function()
		{
			$("#fUPelanggan").hide();
			$("#fIPelanggan").show();
		});

		$("#uPelanggan").on('click',function()
		{
			$("#fIPelanggan").hide();
			$("#fUPelanggan").show();
		});

		$("#fIPelanggan").on('submit',function(e)
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
					url : "<?php echo site_url('D_Pelanggan/inpPelanggan'); ?>",
					data : $("#fIPelanggan").serialize(),
					beforeSend : function()
					{
						$("#inPelanggan").val("SENDING...");
					}}).done(function()
					{
						sweetAlert("Success","","success");
						$("#inPelanggan").val("Tambah");
						$("form")[0].reset();
					});
		        } else {
		          swal("Cancelled", "Your imaginary file is safe :)", "error");
		        }
		   	});
		});

		$("#fUPelanggan").on('submit',function(e)
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
					url : "<?php echo site_url('D_Pelanggan/updaPelanggan'); ?>",
					data : $("#fUPelanggan").serialize(),
					beforeSend : function()
					{
						$("#updatePelanggan").val("SENDING...");
					}
					}).done(function()
					{
						sweetAlert("Success","","success");
						$("#updatePelanggan").val("Update");
						$("form")[0].reset();
						$("form")[0].reset();
					});
		        } else {
		          swal("Cancelled", "Your imaginary file is safe :)", "error");
		        }
		   	});
		});

		$("#tPlgn").DataTable();

		$('#tPlgn').on('click','#plgnUpdate',function(x)
	    {
	      var cRow = $(this).closest("tr");
	      var n = cRow.find("td:eq(0)").text();
	      var x = cRow.find("td:eq(1)").text();
	      var y = cRow.find("td:eq(2)").text();
	      var z = cRow.find("td:eq(3)").text();

	      $("#nktp").val(n);
	      $("#npelanggan").val(x);
	      $("#almtpelanggan").val(y);
	      $("#telppelanggan").val(z);
	    });

	    $('#tPlgn').on('click','#plgnDelete',function(x)
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
			      		url : "<?php echo site_url('D_Pelanggan/delPelanggan'); ?>/" + n
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