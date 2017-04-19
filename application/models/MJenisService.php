<?php
	class MJenisService extends CI_Model
	{
		function getDataJenisService()
		{
			$query = $this->db->query("SELECT * FROM jenisservice")->result();
			return $query;
		}

		function setInsertJenisService()
		{
			$query = $this->db->query("call insertJenisService(
							'".$this->input->post('')."',
							'".$this->input->post('')."'
				)");
		}

		function setUpdateJenisService()
		{
			$query = $this->db->query("call updateJenisService(
							'".$this->input->post('')."',
							'".$this->input->post('')."'
				)");
		}

		function setDeleteJenisService($x)
		{
			$query = $this->db->query("call deleteJenisService('".$x."')");
		}
	}
?>