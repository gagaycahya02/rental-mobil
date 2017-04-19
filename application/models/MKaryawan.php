<?php
	class MKaryawan extends CI_Model
	{
		function setInsertKaryawan()
		{
			$query = $this->db->query("call insertKaryawan(
						'".$this->input->post('nik')."',
						'".$this->input->post('nmkaryawan')."',
						'".$this->input->post('almtkaryawan')."',
						'".$this->input->post('telp')."',
						'".$this->input->post('uname')."',
						'".$this->input->post('pwd')."',
						'".$this->input->post('hakses')."'
					)");
		}

		function setUpdateKaryawan()
		{
			$query = $this->db->query("call updateKaryawan(
						'".$this->input->post('nik')."',
						'".$this->input->post('nmkaryawan')."',
						'".$this->input->post('almtkaryawan')."',
						'".$this->input->post('telp')."',
						'".$this->input->post('uname')."',
						'".$this->input->post('pwd')."',
						'".$this->input->post('hakses')."'
					)");
		}

		function setDeleteKaryawan($x)
		{
			$query = $this->db->query("call deleteKaryawan('".$x."')");
		}
	}
?>