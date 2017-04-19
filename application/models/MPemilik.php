<?php
	class MPemilik extends CI_Model
	{
		function getDataPemilik()
		{
			$query = $this->db->query("SELECT * FROM pemilik")->result();
			return $query;
		}

		function setInsertPemilik()
		{
			$query = $this->db->query("call insertPemilik(
							'".$this->input->post('')."',
							'".$this->input->post('')."',
							'".$this->input->post('')."',
							'".$this->input->post('')."'
							)");
		}

		function setUpdatePemilik()
		{
			$query = $this->db->query("call updatePemilik(
							'".$this->input->post('')."',
							'".$this->input->post('')."',
							'".$this->input->post('')."',
							'".$this->input->post('')."'
							)");
		}

		function setDeletePemilik($x)
		{
			$query = $this->db->query("call deletePemilik('".$x."')");
		}
	}
?>