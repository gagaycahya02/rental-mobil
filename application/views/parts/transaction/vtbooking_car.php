<form class="form-signin" role="form" accept-charset="UTF-8" id="f-i-booking" method="post">
	<div class="form-group">
    <label for="ntbooking">NO TRANSAKSI</label>
		<input type="text" name="ntbooking" id="ntbooking" class="form-control" placeholder="No Transaksi" autocomplete="off" value="<?php echo $this->MData->getFakturTransaksiSewa(); ?>" required readonly>
	</div>
  <div class="form-group">
    <label for="ntbooking">TANGGAL PESAN</label>
    <input type="text" name="tglbooking" id="tglbooking" value="<?php echo date('Y-m-d'); ?>" class="form-control" placeholder="Date" autocomplete="off" required readonly>
  </div>
  <div class="form-group">
    <label for="ntbooking">TANGGAL KEMBALI RENCANA</label>
    <input type="text" name="tglkembalirencana" id="tglkembalirencana" class="form-control" placeholder="Tgl Kembali Rencana" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label for="ntbooking">JAM KEMBALI RENCANA</label>
    <input type="text" name="jamkembalirencana" id="jamkembalirencana" class="form-control" placeholder="Jam Kembali Rencana" autocomplete="off" required>
  </div>

  <!--Karyawan-->
	<div class="form-group">
    <label for="ntbooking">Karyawan</label>
		<input type="hidden" name="nik" id="nik" class="form-control" placeholder="NIK" autocomplete="off" required value="<?php echo $this->session->nik; ?>" readonly>
    <input type="text" name="username" id="username" class="form-control" placeholder="NIK" autocomplete="off" required value="<?php echo $this->session->username; ?>" readonly>
	</div>
  <!--Karyawan-->

  <!--Pelanggan-->
	<div class="form-group">
    <a href="" id="sKTP" style="text-decoration: none;float:right;" data-toggle="modal">+</a>
    <label for="ntbooking">KTP</label>
		<input type="text" name="nktp" id="nktp" class="form-control" placeholder="NO KTP" autocomplete="off" required readonly="" style="float:left;">
	</div>
  <div class="form-group">
    <label for="ntbooking">NAMA PELANGGAN</label>
    <input type="text" name="nmpelanggan" id="nmpelanggan" class="form-control" placeholder="Nama Pelanggan" autocomplete="off" required readonly="" style="float:left;">
  </div>
  <div class="form-group">
    <label for="ntbooking">ALAMAT PELANGGAN</label>
    <input type="text" name="almtpelanggan" id="almtpelanggan" class="form-control" placeholder="Alamat Pelanggan" autocomplete="off" required readonly="" style="float:left;">
  </div>
  <div class="form-group">
    <label for="ntbooking">TELP PELANGGAN</label>
    <input type="text" name="telppelanggan" id="telppelanggan" class="form-control" placeholder="Telp Pelanggan" autocomplete="off" required readonly="" style="float:left;">
  </div>
  <!--Pelanggan-->

  <!--Mobil-->
	<div class="form-group">
    <a href="" id="sPlat" style="text-decoration: none;float:right;" data-toggle="modal">+</a>
    <label for="ntbooking">PLAT MOBIL</label>
		<input type="text" name="nplat" id="nplat" class="form-control" placeholder="No Plat" autocomplete="off" required readonly style="float:left;">
	</div>
  <div class="form-group">
    <label for="ntbooking">TAHUN</label>
    <input type="text" name="thnmobil" id="thnmobil" class="form-control" placeholder="Tahun Mobil" autocomplete="off" required readonly style="float:left;">
  </div>
  <div class="form-group">
    <label for="ntbooking">TARIF PER HARI</label>
    <input type="text" name="trfperhari" id="trfperhari" class="form-control" placeholder="Tarif Per Hari" autocomplete="off" required readonly style="float:left;">
  </div>
  <div class="form-group">
    <label for="ntbooking">MERK</label>
    <input type="text" name="mrkmobil" id="mrkmobil" class="form-control" placeholder="Merk Mobil" autocomplete="off" required readonly style="float:left;">
  </div>
  <div class="form-group">
    <label for="ntbooking">TYPE</label>
    <input type="text" name="typemobil" id="typemobil" class="form-control" placeholder="Type Mobil" autocomplete="off" required readonly style="float:left;">
  </div>
  <!--Mobil -->

  <!--Sopir-->
  <div class="form-group" style="margin-bottom:50px;">
    <input type="hidden" name="nsopir" id="nsopir" class="form-control" placeholder="No Sopir" autocomplete="off" required readonly style="float:left;">
  </div>
  <div class="form-group">
    <a href="" id="sSopir" style="text-decoration: none;float:right;" data-toggle="modal">+</a>
    <label for="ntbooking">NAMA SOPIR</label>
    <input type="text" name="nmsopir" id="nmsopir" class="form-control" placeholder="No Sopir" autocomplete="off" required readonly style="float:left;">
  </div>
  <div class="form-group">
    <label for="ntbooking">ALAMAT SOPIR</label>
    <input type="text" name="almtsopir" id="almtsopir" class="form-control" placeholder="No Sopir" autocomplete="off" required readonly style="float:left;">
  </div>
  <div class="form-group">
    <label for="ntbooking">TELP SOPIR</label>
    <input type="text" name="telpsopir" id="telpsopir" class="form-control" placeholder="No Sopir" autocomplete="off" required readonly style="float:left;">
  </div>
  <!--Sopir-->

	<div class="form-group">
		<input type="submit" name="ctbooking" id="ctbooking" class="btn btn-lg btn-primary btn-block" value="BOOKING">        	
	</div>
</form>

<div id="dKTP">
  <table class="table table-bordered" id="tKTP">
    <thead>
      <tr>
        <th>NO KTP</th>
        <th>NAMA PELANGGAN</th>
        <th>ALAMAT PELANGGAN</th>
        <th>TELP PELANGGAN</th>
        <th>OPSI</th>
      </tr>
    </thead>

    <tbody>
      <?php  
        foreach ($nktp as $x) {
          echo "<tr>";
          echo "<td>".$x->NoKTP."</td>";
          echo "<td>".$x->NamaPel."</td>";
          echo "<td>".$x->AlamatPel."</td>";
          echo "<td>".$x->TelpPel."</td>";
          echo "<td><button id='getNKtp' class='btn btn-success'>AMBIL</button></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<div id="dMob">
  <table class="table table-bordered" id="tMob">
    <thead>
      <tr>
        <th>NO PLAT</th>
        <th>TAHUN</th>
        <th>TARIF PER HARI</th>
        <th>STATUS RENTAL</th>
        <th>NAMA MERK</th>
        <th>NAMA TYPE</th>
        <th>OPSI</th>
      </tr>
    </thead>

    <tbody>
      <?php  
        foreach ($plMob as $x) {
          if($x->StatusRental == 0)
          {
            $z = "Tersedia";
          }else
          {
            $z = "Tidak Tersedia";
          }

          echo "<tr>";
          echo "<td>".$x->NoPlat."</td>";
          echo "<td>".$x->Tahun."</td>";
          echo "<td>".$x->TarifPerHari."</td>";
          echo "<td>".$z."</td>";
          echo "<td>".$x->NmMerk."</td>";
          echo "<td>".$x->NmType."</td>";
          echo "<td><button id='getMob' class='btn btn-success'>AMBIL</button></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<div id="dSop">
  <table class="table table-bordered" id="tSop">
    <thead>
      <tr>
        <th>NO SOPIR</th>
        <th>NAMA SOPIR</th>
        <th>ALAMAT SOPIR</th>
        <th>TELP SOPIR</th>
        <th>NO SIM</th>
        <th>OPSI</th>
      </tr>
    </thead>

    <tbody>
      <?php  
        foreach ($idSop as $x) {
          echo "<tr>";
          echo "<td>".$x->IDSopir."</td>";
          echo "<td>".$x->NmSopir."</td>";
          echo "<td>".$x->AlmSopir."</td>";
          echo "<td>".$x->TelpSopir."</td>";
          echo "<td>".$x->NoSim."</td>";
          echo "<td><button id='getSop' class='btn btn-success'>AMBIL</button></td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
</div>

<script type="text/javascript">
	$(document).ready(function()
	{
    

    $("#f-i-booking").on('submit',function(e)
    {
      e.preventDefault();

      swal({
        title: "Yakin mau booking ?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya,mau booking",
        cancelButtonText: "Tidak jadi",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {
          var a = $.ajax(
          {
            url : "<?php echo site_url('TBooking_Car/inputBooking') ?>",
            type : "POST",
            data : $("#f-i-booking").serialize(),
            beforeSend : function()
            {
              $("#ctbooking").val("SENDING...");
            }
          }).done(function()
          {
            sweetAlert("Success Booking Gan","","success");
            $("#ctbooking").val("BOOKING");
            $("#f-i-booking")[0].reset();
          });

          $.when(a);

          var fktur = window.open("<?php echo site_url('Faktur_Booking'); ?>","");
          fktur.ntransaksi = $("#ntbooking").val();
          fktur.tbooking = $("#tglbooking").val();
          fktur.tkemren = $("#tglkembalirencana").val();
          fktur.jkemren = $("#jamkembalirencana").val();

          //Pel
          fktur.ktp = $("#nktp").val();
          fktur.nmpel = $("#nmpelanggan").val();
          fktur.almtpel = $("#almtpelanggan").val();
          fktur.telpel = $("#telppelanggan").val();
          //Mob
          fktur.plat = $("#nplat").val();
          fktur.thn = $("#thnmobil").val();
          fktur.tfh = $("#trfperhari").val();
          fktur.mrkmob = $("#mrkmobil").val();
          fktur.tpmob = $("#typemobil").val();
          //Sop
          fktur.nmsop = $("#nmsopir").val();
          fktur.almtsop = $("#almtsopir").val();
          fktur.telpsop = $("#telpsopir").val();

        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });
    });
    
    // Show TimePicker
    $("#jamkembalirencana").timepicker(
    {
      timeFormat : 'H:i:s',
      step : '15'
    });

    // DataTable
    var tmob = $("#tMob").dataTable();

    $("#tSop").dataTable();
    $("#tKTP").DataTable(
    {
      'scrollY' : '250px',
      'scrollCollapse' : true,
      'paging' : false
    });


    // Data KTP
    $("#sKTP").click(function(event)
    {
      event.preventDefault();
      $( "#dKTP").dialog('open');
    });

    $("#dKTP").dialog(
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

    // Data Mobil
    $("#sPlat").click(function(event)
    {
      event.preventDefault();
      $( "#dMob").dialog('open');
    });

    $("#dMob").dialog(
    { 
      autoOpen : false,
      resizable : false,
      dialogClass : 'alert',
      title : 'Data Sopir',
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

    // Data Sopir
    $("#sSopir").click(function(event)
    {
      event.preventDefault();
      $( "#dSop").dialog('open');
    });

    $("#dSop").dialog(
    { 
      autoOpen : false,
      resizable : false,
      dialogClass : 'alert',
      title : 'Data Sopir',
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

		$('#tKTP').on('click','#getNKtp',function(x)
    {
      var cRow = $(this).closest("tr");
      var n = cRow.find("td:eq(0)").text();
      var m = cRow.find("td:eq(1)").text();
      var o = cRow.find("td:eq(2)").text();
      var p = cRow.find("td:eq(3)").text();

      $("#nktp").val(n);
      $("#nmpelanggan").val(m);
      $("#almtpelanggan").val(o);
      $("#telppelanggan").val(p);
      
      $("#dKTP").dialog('close');
    });

    $('#tMob').on('click','#getMob',function(x)
    {
      var cRow = $(this).closest("tr");
      var n = cRow.find("td:eq(0)").text();
      var m = cRow.find("td:eq(1)").text();
      var o = cRow.find("td:eq(2)").text();
      var p = cRow.find("td:eq(4)").text();
      var q = cRow.find("td:eq(5)").text();

      $("#nplat").val(n);
      $("#thnmobil").val(m);
      $("#trfperhari").val(o);
      $("#mrkmobil").val(p);
      $("#typemobil").val(q);

      $("#dMob").dialog('close');
    });

    $('#tSop').on('click','#getSop',function(x)
    {
      var cRow = $(this).closest("tr");
      var n = cRow.find("td:eq(0)").text();
      var m = cRow.find("td:eq(1)").text();
      var o = cRow.find("td:eq(2)").text();
      var p = cRow.find("td:eq(3)").text();

      $("#nsopir").val(n);
      $("#nmsopir").val(m);
      $("#almtsopir").val(o);
      $("#telpsopir").val(p);

      $("#dSop").dialog('close');  
    });

    // Datetimepicker
    $("#tglpinjamrencana").datepicker(
    {
      dateFormat : 'yy-mm-dd'
    });
    
    $("#tglkembalirencana").datepicker(
    {
      dateFormat : 'yy-mm-dd'
    });
	});
</script>