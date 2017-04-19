<form class="form-signin" role="form" accept-charset="UTF-8" id="fReturnMobil" method="post">
	<div class="form-group">
		<a href="" id="cntbooking" style="text-decoration:none;float:right;">+</a>
		<label for="ntbooking">No Transaksi</label>
		<input type="text" name="ntbooking" id="ntbooking" class="form-control" placeholder="No Transaksi" autocomplete="off" required readonly style="float:left;">
	</div>
	<div class="form-group">
		<label for="ntbooking">No PLAT</label>
		<input type="text" name="nplat" id="nplat" class="form-control" placeholder="No PLAT" autocomplete="off" required readonly style="float:left;">
	</div>
	<div class="form-group">
		<label for="ntbooking">Tanggal Kembali Rencana</label>
		<input type="text" name="tglkembalirencana" id="tglkembalirencana" class="form-control" placeholder="Tanggal Kembali Rencana" autocomplete="off" required readonly style="float:left;">
	</div>
	<div class="form-group">
		<label for="ntbooking">Tanggal Pinjam</label>
		<input type="text" name="TglPinjam" id="TglPinjam" class="form-control" placeholder="Tanggal Pinjam" autocomplete="off" required readonly style="float:left;">
	</div>
	<div class="form-group">
		<label for="ntbooking">TANGGAL KEMBALI REALISASI</label>
		<input type="text" name="tglkembalireal" id="tglkembalireal" class="form-control" placeholder="Tgl Kembali Real" autocomplete="off" value="<?php echo date('Y-m-d'); ?>" readonly required>
	</div>
	<div class="form-group">
		<label for="ntbooking">JAM KEMBALI REALISASI</label>
		<input type="text" name="jkembalireal" id="jkembalireal" class="form-control" placeholder="Jam Kembali Real" autocomplete="off" readonly required>
	</div>
	<div class="form-group">
		<label for="ntbooking">DENDA</label>
		<input type="text" name="dnda" id="dnda" class="form-control" placeholder="Denda" autocomplete="off" required readonly>
	</div>
	<div class="form-group">
		<label for="ntbooking">KILOMETER KEMBALI</label>
		<input type="text" name="kmkembali" id="kmkembali" class="form-control" placeholder="Kilometer Kembali" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label for="ntbooking">BBM PINJAM</label>
		<input type="text" name="bbmpinjam" id="bbmpinjam" class="form-control" placeholder="BBM Pinjam" autocomplete="off" required readonly="">
	</div>
	<div class="form-group">
		<label for="ntbooking">BBM KEMBALI</label>
		<input type="text" name="bbmkembali" id="bbmkembali" class="form-control" placeholder="BBM Kembali" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label for="ntbooking">KONDISI MOBIL KEMBALI (BAIK/RUSAK)</label>
		<input type="text" name="konmobilkembali" id="konmobilkembali" class="form-control" placeholder="Kondisi Mobil Kembali" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label for="ntbooking">KERUSAKAN MOBIL</label>
		<input type="text" name="krsknmobil" id="krsknmobil" class="form-control" placeholder="Kerusakan Mobil" autocomplete="off" required readonly="">
	</div>
	<div class="form-group">
		<label for="ntbooking">BIAYA KERUSAKAN</label>
		<input type="text" name="byakerusakan" id="byakerusakan" class="form-control" placeholder="Biaya Kerusakan" autocomplete="off" required readonly value="0">
	</div>
	<div class="form-group">
		<label for="ntbooking">BIAYA BBM</label>
		<input type="text" name="byabbm" id="byabbm" class="form-control" placeholder="Biaya BBM" autocomplete="off" required readonly>
	</div>
	<div class="form-group">
		<label for="ntbooking">BIAYA SEWA</label>
		<input type="text" name="byasewa" id="byasewa" class="form-control" placeholder="Biaya Sewa" autocomplete="off" required readonly="">
	</div>
	<div class="form-group">
		<label for="ntbooking">TOTAL BAYAR</label>
		<input type="text" name="totbay" id="totbay" class="form-control" placeholder="Total Bayar" autocomplete="off" required readonly>
	</div>
	<div class="form-group">
		<label for="ntbooking">DIBAYAR</label>
		<input type="text" name="dibayar" id="dibayar" class="form-control" placeholder="Dibayar" autocomplete="off" required>
	</div>
	<div class="form-group">
		<label for="ntbooking">KEMBALI</label>
		<input type="text" name="kembali" id="kembali" class="form-control" placeholder="Kembali" autocomplete="off" required readonly>
	</div>
	<div class="form-group">
		<input type="submit" name="ctkembali" id="ctkembali" class="btn btn-lg btn-primary btn-block" value="KEMBALIKAN MOBIL">        	
	</div>
</form>

<div id="dKembali">
	<table class="table table-bordered" id="sKembali">
		<thead>
			<tr>
				<th>NO TRANSAKSI</th>
				<th>TANGGAL PESAN</th>
				<th>TANGGAL PINJAM</th>
				<th>JAM PINJAM</th>
				<th>TANGGAL KEMBALI RENCANA</th>
				<th>JAM KEMBALI RENCANA</th>
				<th>BBM PINJAM</th>
				<th>NIK</th>
				<th>NO PLAT</th>
				<th>ID SOPIR</th>
				<th>NO KTP</th>
				<th>ACTION</th>
			</tr>
		</thead>

		<tbody>
			<?php  
				foreach ($dKembali as $x) {
					echo "<tr>";
					echo "<td>".$x->NoTransaksi."</td>";
					echo "<td>".$x->TglPesan."</td>";
					echo "<td>".$x->TglPinjam."</td>";
					echo "<td>".$x->JamPinjam."</td>";
					echo "<td>".$x->tglkembalirencana."</td>";
					echo "<td>".$x->JamKembaliRencana."</td>";
					echo "<td>".$x->BBMPinjam."</td>";
					echo "<td>".$x->NIK."</td>";
					echo "<td>".$x->NoPlat."</td>";
					echo "<td>".$x->IDSopir."</td>";
					echo "<td>".$x->NoKTP."</td>";
					echo "<td><button id='getDtKembali' class='btn btn-success'>AMBIL</button></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
		$("#bbmkembali").on('keyup',function(e)
		{
			var x = parseInt($("#bbmpinjam").val()) - parseInt($("#bbmkembali").val());
			var y = x * 9000;
			var z = $("#byabbm").val(y);
			var a = $("#totbay").val();

			var b = $("#byasewa").val();
			var c = $("#dnda").val();
			var d = $("#byabbm").val();
			var e = $("#byakerusakan").val();
			
			var getTot = parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e);

			$("#totbay").val(getTot);
		});

		$("#sKembali").dataTable();

		var x = setInterval(time,1000);

		function time()
		{
			var y = new Date();
			var z = y.toTimeString();

			$("#jkembalireal").val(z.substr(0,8));
		}


		$("#cntbooking").click(function(event)
		{
			event.preventDefault();
			$( "#dKembali" ).dialog('open');
		});

		$("#dKembali").dialog(
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

		$('#sKembali').on('click','#getDtKembali',function(x)
		{
			var cRow = $(this).closest("tr");
			var a = cRow.find("td:eq(0)").text();
			var b = cRow.find("td:eq(6)").text();
			var c = cRow.find("td:eq(2)").text();
			var d = cRow.find("td:eq(4)").text();
			var e = cRow.find("td:eq(8)").text();

			var tarifMobil;
			//var url;
			// Get Tarif
			$.ajax({
				url : "<?php echo site_url('TReturns_Car/getTarif'); ?>/"+e,
				type : "POST",
				success : function(data)
				{
					var obj = JSON.parse(data);
					console.log(data);

					for(var key in obj)
                        {
                            if(obj.hasOwnProperty(key))
                            {
                               	tarifMobil = obj[key].TarifPerHari;

                               	// Biaya Sewa = (Tgl Kembali Rencana – tgl pinjam) * tafir
								// Denda = Tgl kembali Realisasi – Tgl Kembali Rencana) * tafir + 50.000
								// Total = biayasewa + denda + biayakerusakan + bbm

                               	var tkembaren = $("#tglkembalirencana").val();
								var tkembapin = $("#TglPinjam").val();
								var tkembarel = $("#tglkembalireal").val();

								var byasewre;

								var biayasewa = parseInt(tkembaren.substr(8,2)) - parseInt(tkembapin.substr(8,2));

								if(biayasewa == 0)
								{
									byasewre = tarifMobil;
								}else
								{
									byasewre = biayasewa * tarifMobil;
								}

								var denda = parseInt(tkembarel.substr(8,2)) - parseInt(tkembaren.substr(8,2));
								var dndare = (denda * tarifMobil) + 50000;

								var totalbiaya = parseFloat(biayasewa) + parseFloat(dndare) + parseFloat($("#byakerusakan").val()) + parseFloat($("#byabbm").val());

								if($("#totbay").val("NaN"))
								{
									$("#totbay").val("0");
								}

								$("#byasewa").val(byasewre);
								$("#dnda").val(dndare);
								$("#totbay").val(totalbiaya);

								if($("#dnda").val() <= 0)
								{	
									$("#dnda").val("0");
								}
                            }
                        }
				}
			},"JSON");

			$("#ntbooking").val(a);
			$("#bbmpinjam").val(b);
			$("#TglPinjam").val(c);
			$("#tglkembalirencana").val(d);
			$("#nplat").val(e);
			
			$("#dKembali").dialog('close');
		});

		$("#konmobilkembali").on('keyup',function(e)
		{
			if($("#konmobilkembali").val() == "rusak" || $("#konmobilkembali").val() == "RUSAK")
			{
				$("#krsknmobil").removeAttr('readonly');
				$("#byakerusakan").removeAttr('readonly');
				$("#byakerusakan").val('');
			}else if($("#konmobilkembali").val() == "baik" || $("#konmobilkembali").val() == "BAIK")
			{
				$("#krsknmobil").attr('readonly');
				$("#byakerusakan").attr('readonly');
			}
		});

		$("#byakerusakan").on('keyup',function()
		{
			if(isNaN($("#byakerusakan").val()))
	      	{
	      	  swal("Info","Harus Berupa Angka","info");
	        	$("#byakerusakan").val("");
	      	}

			$("#totbay").val(totalbiaya);
		});

		$("#fReturnMobil").on('submit',function(e)
		{
			e.preventDefault();

			swal({
		        title: "Yakin mau kembalikan mobil ?",
		        text: "",
		        type: "warning",
		        showCancelButton: true,
		        confirmButtonColor: "#DD6B55",
		        confirmButtonText: "Ya,mau kembalikan mobil",
		        cancelButtonText: "Tidak jadi",
		        closeOnConfirm: false,
		        closeOnCancel: false
     		 },
	      function(isConfirm){
	        if (isConfirm) {
	          $.ajax(
	          {
	            url : "<?php echo site_url('TReturns_Car/uKembaliMob') ?>",
	            type : "POST",
	            data : $("#fReturnMobil").serialize(),
	            beforeSend : function()
	            {
	              $("#ctkembali").val("SENDING...");
	            }
	          }).done(function()
	          {
	            sweetAlert("Success Pengembalian Mobilnya Gan","","success");
	            $("#ctkembali").val("BOOKING");
	            $("#fReturnMobil")[0].reset();
	          });

	          var fktur = window.open("<?php echo site_url('Faktur_Pengembalian'); ?>","");
	          fktur.ntransaksi = $("#ntbooking").val();
	          fktur.tbooking = $("#tglbooking").val();
	          fktur.tkemren = $("#tglkembalirencana").val();
	          fktur.tglpin = $("#TglPinjam").val();
	          fktur.tglkemrel = $("#tglkembalireal").val();
	          fktur.jamkemrel = $("#jkembalireal").val();

	          //Mob
	          fktur.nplat = $("#nplat").val();
	          fktur.bbmkembali = $("#bbmkembali").val();
	          fktur.bbmpinjam = $("#bbmpinjam").val();
	          fktur.kmkembali = $("#kmkembali").val();
	          fktur.konmobkem = $("#konmobilkembali").val();
	          fktur.krsnmob = $("#krsknmobil").val();
	          fktur.dnda = $("#dnda").val();
	          fktur.byakrsn = $("#byakerusakan").val();
	          fktur.byabbm = $("#byabbm").val();
	          fktur.byasewa = $("#byasewa").val();
	          //Calculation
	          fktur.totbay = $("#totbay").val();
	          fktur.dibyr = $("#dibayar").val();
	          fktur.kmbali = $("#kembali").val();
	        } else {
	          swal("Cancelled", "Your imaginary file is safe :)", "error");
	        }
	      });
		});

		$("#kmkembali").on('keyup',function(e)
	    {
	      if(isNaN($("#kmkembali").val()))
	      {
	        swal("Info","Harus Berupa Angka","info");
	        $("#kmkembali").val("");
	      }
	    });

	    $("#bbmkembali").on('keyup',function(e)
	    {
	      if(isNaN($("#bbmkembali").val()))
	      {
	        swal("Info","Harus Berupa Angka","info");
	        $("#bbmkembali").val("");
	      }
	    });

	    $("#totbay").on('keyup',function(e)
	    {
	      if(isNaN($("#totbay").val()))
	      {
	        swal("Info","Harus Berupa Angka","info");
	        $("#totbay").val("");
	      }
	    });

	   $("#dibayar").on({
	   	keypress : function(e)
	   	{
	   			if(isNaN($("#dibayar").val()))
			    {
			        swal("Info","Harus Berupa Angka","info");
			        $("#dibayar").val("");
			    }

			 //    var x = $(this).val() - $("#totbay").val();
				// $("#kembali").val(x);

				// if($("#dibayar").val() <= $("#totbay").val())
				// {
				// 	swal("Info","Kurang Gan","info");
				// }

				// if($("#kembali").val() <= 0)
			 //    {
			 //    	swal("Info","Kurang Gan","info");
			 //    }
	   	},
	   	keyup : function(event)
	   	{
			var keycode = (event.keyCode ? event.keyCode : event.which);

			if(keycode == '13'){
				//alert('You pressed a "enter" key in textbox');
				var x = $(this).val() - $("#totbay").val();
				$("#kembali").val(x);

				if($("#dibayar").val() <= $("#totbay").val())
				{
					swal("Info","Kurang Gan","info");
				}

				if($("#kembali").val() <= 0)
			    {
			    	swal("Info","Kurang Gan","info");
			    }
			}	   		
	   	},
	   	keydown : function(event)
	   	{
			var keycode = (event.keyCode ? event.keyCode : event.which);

			if(keycode == '13'){
				//alert('You pressed a "enter" key in textbox');
				var x = $(this).val() - $("#totbay").val();
				$("#kembali").val(x);

				if($("#dibayar").val() <= $("#totbay").val())
				{
					swal("Info","Kurang Gan","info");
				}

				if($("#kembali").val() <= 0)
			    {
			    	swal("Info","Kurang Gan","info");
			    }
			}
	   	}
	   });
	});
</script>