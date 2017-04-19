<form class="form-signin" role="form" id="fBorrow" accept-charset="UTF-8" method="post">
	<div class="form-group">
		<a href="" id="cntbooking" style="text-decoration:none;float:right;">+</a>
		<label for="ntbooking">NO TRANSAKSI</label>
		<input type="text" name="ntbooking" id="ntbooking" class="form-control" placeholder="No Transaksi" autocomplete="off" required style="float:left;" readonly>
	</div>
	<div class="form-group">
		<label for="ntbooking">TANGGAL BOOKING</label>
		<input type="text" name="tglbooking" id="tglbooking" class="form-control" placeholder="Tgl Booking" autocomplete="off" required readonly>
	</div>
	<div class="form-group">
		<label for="ntbooking">TANGGAL PINJAM</label>
		<input type="text" name="tglpinjam" id="tglpinjam" class="form-control" placeholder="Tgl Pinjam" autocomplete="off" value="<?php echo date('Y-m-d'); ?>" readonly required>
	</div>
	<div class="form-group">
		<label for="ntbooking">JAM PINJAM</label>
		<input type="text" name="jpinjam" id="jpinjam" class="form-control" placeholder="Jam Pinjam" autocomplete="off" required readonly>
	</div>
	<div class="form-group">
		<label for="ntbooking">KILOMETER PINJAM</label>
		<input type="text" name="kmpinjam" id="kmpinjam" class="form-control" placeholder="Kilometer Pinjam" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label for="ntbooking">BBM PINJAM / LITER</label>
		<input type="text" name="bbmpinjam" id="bbmpinjam" class="form-control" placeholder="BBM Pinjam" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label for="ntbooking">KONDISI MOBIL PINJAM</label>
		<input type="text" name="konmobilpinjam" id="konmobilpinjam" class="form-control" placeholder="Kondisi Mobil Pinjam" autocomplete="off" value="Baik" readonly required>
	</div>
	<div class="form-group">
		<input type="submit" name="utpinjam" id="utpinjam" class="btn btn-lg btn-primary btn-block" value="PINJAM">        	
	</div>
</form>

<div id="dPinjam">
	<table class="table table-bordered" id="sBorrow">
		<thead>
			<tr>
				<th>NO TRANSAKSI</th>
				<th>NIK</th>
				<th>NO KTP</th>
				<th>TGL PESAN</th>
				<th>ACTION</th>
			</tr>
		</thead>

		<tbody>
			<?php  
				foreach ($booData as $x) {
					echo "<tr>";
					echo "<td>".$x->NoTransaksi."</td>";
					echo "<td>".$x->NIK."</td>";
					echo "<td>".$x->NoKTP."</td>";
					echo "<td>".$x->TglPesan."</td>";
					echo "<td><button id='getDtOtd' class='btn btn-success'>AMBIL</button></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
		var tborrow = $("#sBorrow").dataTable();

		var x = setInterval(myTimer,1000);

		function myTimer()
		{
			var d = new Date();
			var a = d.toTimeString();
			var y = $("#jpinjam").val(a.substr(0,8));
		}

		$("#cntbooking").click(function(event)
		{
			event.preventDefault();
			$( "#dPinjam").dialog('open');
		});

		$("#dPinjam").dialog(
		{	
			autoOpen : false,
			resizable : false,
			dialogClass : 'alert',
			title : 'Data Transaksi',
			autoOpen : false,
			modal : true,
			width : 650,
			buttons : {
				"Tutup" : function ()
				{
					$(this).dialog('close');
				}
			}
		});	

		$('#sBorrow').on('click','#getDtOtd',function(x)
		{
			var cRow = $(this).closest("tr");
			var n = cRow.find("td:eq(0)").text();
			var y = cRow.find("td:eq(1)").text();
			var m = cRow.find("td:eq(2)").text();
			var o = cRow.find("td:eq(3)").text();

			$("#ntbooking").val(n);
			$("#nik").val(y);
			$("#nktp").val(m);
			$("#tglbooking").val(o);

			$("#dPinjam").dialog('close');
		});


		$("#kmpinjam").on('keyup',function(e)
	    {
	      if(isNaN($("#kmpinjam").val()))
	      {
	        swal("Info","Harus Berupa Angka","info");
	        $("#kmpinjam").val("");
	      }
	    });

	    $("#bbmpinjam").on('keyup',function(e)
	    {
	      if(isNaN($("#bbmpinjam").val()))
	      {
	        swal("Info","Harus Berupa Angka","info");
	        $("#bbmpinjam").val("");
	      }
	    });

	    $("#fBorrow").on('submit',function(e)
	    {
	      e.preventDefault();

	      swal({
	        title: "Yakin mau pinjam mobil ?",
	        text: "",
	        type: "warning",
	        showCancelButton: true,
	        confirmButtonColor: "#DD6B55",
	        confirmButtonText: "Ya,mau pinjam",
	        cancelButtonText: "Tidak jadi",
	        closeOnConfirm: false,
	        closeOnCancel: false
	      },
	      function(isConfirm){
	        if (isConfirm) {
	          var a = $.ajax(
	          {
	            url : "<?php echo site_url('TBorrow_Car/uPinjamMob') ?>",
	            type : "POST",
	            data : $("#fBorrow").serialize(),
	            beforeSend : function()
	            {
	              $("#utpinjam").val("SENDING...");
	            }
	          }).done(function()
	          {
	            sweetAlert("Success Pinjam Gan","","success");
	            $("#utpinjam").val("PINJAM");
	            $("#fBorrow")[0].reset();
	          });

	          $.when(a);

	          var fktur = window.open("<?php echo site_url('Faktur_Pinjam'); ?>","");
	          fktur.ntransaksi = $("#ntbooking").val();
	          fktur.tbooking = $("#tglbooking").val();
	          fktur.tglpinjam = $("#tglpinjam").val();

	          //Mob
	          fktur.kmpinjam = $("#kmpinjam").val();
	          fktur.bbmpinjam = $("#bbmpinjam").val();
	          fktur.konmopin = $("#konmobilpinjam").val();
	        } else {
	          swal("Cancelled", "Your imaginary file is safe :)", "error");
	        }
	      });
	    });

	});
</script>