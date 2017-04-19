<?php
	class MPelanggan extends CI_Model
	{
		function getPelanggan($id)
		{
			$query = $this->db->query("CALL getDataPelanggan('".$id."')")->result();
			return $query;
		}

		function setInputPelanggan()
		{
			$query = $this->db->query("CALL inptPelanggan(
										'".$this->input->post('nktp')."',
										'".$this->input->post('npelanggan')."',
										'".$this->input->post('almtpelanggan')."',
										'".$this->input->post('telppelanggan')."')");
		}

		function setUpdatePelanggan()
		{
			$query = $this->db->query("CALL updatePelanggan(
										'".$this->input->post('nktp')."',
										'".$this->input->post('npelanggan')."',
										'".$this->input->post('almtpelanggan')."',
										'".$this->input->post('telppelanggan')."')");
		}

		function setDeletePelanggan($x)
		{
			$query = $this->db->query("CALL deletePelanggan('".$x."')");
		}
	}
?>