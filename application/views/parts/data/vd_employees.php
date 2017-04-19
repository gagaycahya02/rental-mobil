<div class="row">
	<div class="col-md-1">
		<button class="btn" id="inputMbl">TAMBAH</button>
	</div>
	<div class="col-md-1">
		<button class="btn" id="uMbl">UPDATE</button><br><br>
	</div>
</div>

<table class="table table-condensed" id="tkaryawan">
 	<thead>
 		<tr>
 			<th>NIK</th>
 			<th>NAMA KARYAWAN</th>
 			<th>ALAMAT KARYAWAN</th>
 			<th>TELP KARYAWAN</th>
 			<th>Username</th>
 			<th>Password</th>
 			<th>Hak Akses</th>
 			<th>ACTION</th>
 		</tr>
 	</thead>
 	<tbody>
<?php 
	foreach($karyawan as $test)
	{
		echo "<tr>";
		echo "<td>".$test->NIK."</td>";
		echo "<td>".$test->NmKaryawan."</td>";
		echo "<td>".$test->AlmtKaryawan."</td>";
		echo "<td>".$test->TelpKaryawan."</td>";
		echo "<td>".$test->Username."</td>";
		echo "<td>".$test->Password."</td>";
		echo "<td>".$test->Hak_Akses."</td>";
		echo "<td><button id='tKarUpdate' class='btn btn-update'>UPDATE</button> <br>
		<br> <button id='tKarDel' class='btn btn-update'>DELETE</button></td>";
		echo "</tr>";
	}
?>
	</tbody>
</table>

<div class="row">
	<div class="col-md-4">
		<form role="form" accept-charset="UTF-8" id="fUMbl" method="post">
			<div class="form-group">
				<label>NIK</label>
				<input type="text" class="form-control" name="nik" id="nik" placeholder="No PLAT" readonly="">
			</div>
			<div class="form-group">
				<label>NAMA KARYAWAN</label>
				<input type="text" class="form-control" name="nmkaryawan" id="nmkaryawan" placeholder="Tahun Mobil">
			</div>
			<div class="form-group">
				<label>ALAMAT KARYAWAN</label>
				<input type="text" class="form-control" name="almtkaryawan" id="almtkaryawan" placeholder="Tarif Per Hari">
			</div>
			<div class="form-group">
				<label>TELP KARYAWAN</label>
				<input type="text" class="form-control" name="telp" id="telp" placeholder="Status Rental">
			</div>
			<div class="form-group">
				<label>USERNAME</label>
				<input type="text" class="form-control" name="uname" id="uname" placeholder="Tahun Mobil">
			</div>
			<div class="form-group">
				<label>PASSWORD</label>
				<input type="text" class="form-control" name="pwd" id="pwd" placeholder="Tarif Per Hari">
			</div>
			<div class="form-group">
				<label>HAK AKSES</label>
				<select name="hakses" class="form-control">
					<option>---</option>
					<option value="admin" id="admin">Admin</option>
					<option value="operator" id="operator">operator</option>
				</select>
			</div>
			<input type="submit" name="updateKaryawan" class="btn btn-lg btn-primary btn-block" id="updateMbl" value="UPDATE">
		</form>


		<form role="form" accept-charset="UTF-8" id="fIMbl" method="post">
			<div class="form-group">
				<label>NIK</label>
				<input type="text" class="form-control" name="nik" id="nik" placeholder="No PLAT" readonly=""  value="<?php echo $this->MData->getKdKaryawan(); ?>">
			</div>
			<div class="form-group">
				<label>NAMA KARYAWAN</label>
				<input type="text" class="form-control" name="nmkaryawan" id="nmkaryawan" placeholder="Tahun Mobil">
			</div>
			<div class="form-group">
				<label>ALAMAT KARYAWAN</label>
				<input type="text" class="form-control" name="almtkaryawan" id="almtkaryawan" placeholder="Tarif Per Hari">
			</div>
			<div class="form-group">
				<label>TELP KARYAWAN</label>
				<input type="text" class="form-control" name="telp" id="telp" placeholder="Status Rental">
			</div>
			<div class="form-group">
				<label>USERNAME</label>
				<input type="text" class="form-control" name="uname" id="uname" placeholder="Tahun Mobil">
			</div>
			<div class="form-group">
				<label>PASSWORD</label>
				<input type="text" class="form-control" name="pwd" id="pwd" placeholder="Tarif Per Hari">
			</div>
			<div class="form-group">
				<label>HAK AKSES</label>
				<select name="hakses" class="form-control">
					<option>---</option>
					<option value="admin" id="admin">Admin</option>
					<option value="operator" id="operator">operator</option>
				</select>
			</div>
			<input type="submit" name="inKaryawan" class="btn btn-lg btn-primary btn-block" id="inMbl" value="TAMBAH">
		</form>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{	
		$("#fUMbl").hide();
		$("#fIMbl").hide();

		$("#tkaryawan").DataTable();

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

		$('#tkaryawan').on('click','#tKarUpdate',function(x)
	    {
	      var cRow = $(this).closest("tr");
	      var n = cRow.find("td:eq(0)").text();
	      var x = cRow.find("td:eq(1)").text();
	      var y = cRow.find("td:eq(2)").text();
	      var z = cRow.find("td:eq(3)").text();
	      var a = cRow.find("td:eq(4)").text();
	      var b = cRow.find("td:eq(5)").text();
	      var c = cRow.find("td:eq(6)").text();

	      $("#nik").val(n);
	      $("#nmkaryawan").val(x);
	      $("#almtkaryawan").val(y);
	      $("#telp").val(z);
	      $("#uname").val(a);
	      $("#pwd").val(b);

	      if(c == "operator")
	      {
	      	$("#operator").attr('selected',true);
	      }else
	      {
	      	$("#admin").attr('selected',true);
	      }
	    });

	    $('#tkaryawan').on('click','#tKarDel',function(x)
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
			      		url : "<?php echo site_url('D_Employees/delKaryawan'); ?>/" + n
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
		        title: "Yakin tambah karyawan ?",
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
					url : "<?php echo site_url('D_Employees/inpKaryawan'); ?>",
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
		        title: "Yakin update karyawan ?",
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
					url : "<?php echo site_url('D_Employees/updaKaryawan'); ?>",
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