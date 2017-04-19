<?php
	class MTransaction extends CI_Model
	{
		// Get KTP
		function getNKTP()
		{
			$query = $this->db->query("SELECT * FROM getNKTP")->result();
			return $query;
		}

		// Booking Data
		function getBooData()
		{
			$query = $this->db->query("SELECT * FROM transaksisewa WHERE TglPinjam = '0000-00-00' AND JamPinjam = '00:00:00'")->result();
			return $query;
		}

		// Get No Sopir
		function getIdSop()
		{
			$query = $this->db->query("SELECT * FROM getIdSop")->result();
			return $query;
		}

		// Get No Plat
		function getPlMob()
		{
			$query = $this->db->query("SELECT * FROM getPlMob")->result();
			return $query;
		}

		// Get Data Kembali
		function getDKembali()
		{
			$query = $this->db->query("SELECT * FROM transaksisewa WHERE TglKembaliRealisasi = '0000-00-00' AND JamKembaliReal = '00:00:00'")->result();
			return $query;
		}

		// Booking
		function setInputBooking()
		{
			$query = $this->db->query("CALL inBooking(
									'".$this->input->post('ntbooking')."',
									'".$this->input->post('nik')."',
									'".$this->input->post('nktp')."',
									'".$this->input->post('tglbooking')."',
									'".$this->input->post('tglkembalirencana')."',
									'".$this->input->post('jamkembalirencana')."',
									'".$this->input->post('nplat')."',
									'".$this->input->post('nsopir')."')");
		}

		// Pinjam
		function setUpdatePinjam()
		{
			$query = $this->db->query("CALL uTranSewa(
				'".$this->input->post('tglpinjam')."',
				'".$this->input->post('jpinjam')."',
				'".$this->input->post('kmpinjam')."',
				'".$this->input->post('bbmpinjam')."',
				'".$this->input->post('konmobilpinjam')."',
				'".$this->input->post('ntbooking')."')");
		}

		// Services
		function setInputServices()
		{
			$query = $this->db->query("CALL tranServices(
										'".$this->input->post('ntranservices')."',
										'".$this->input->post('nplat')."',
										'".$this->input->post('njservices')."',
										'".$this->input->post('tgl')."',
										'".$this->input->post('tglselanjutnya')."',
										'".$this->input->post('byservices')."')");
		}

		// Pengembalian
		function setUpdatePengembalian()
		{
			$query = $this->db->query("CALL inBooking('".$this->input->post('ntbooking')."','".$this->input->post('nik')."','".$this->input->post('nktp')."',
									'".$this->input->post('tglbooking')."')");
		}

		// Setor
		function setInputSetoran()
		{
			$query = $this->db->query("INSERT INTO setoran VALUES(
										'".$this->input->post('ntsetoran')."',
										'".$this->input->post('npemilik')."',
										'".$this->input->post('nik')."',
										'".$this->input->post('tgl')."',
										'".$this->input->post('jml')."')
									");
		}

		function setUpdateMobil($x)
		{
			$query = $this->db->query("CALL updateMobil('".$x."')");
		}

		function getDenda($x)
		{
			$query = $this->db->query("CALL getDataDenda('".$x."')");
		}
	}
?>


