<?php
	class MTypeMobil extends CI_Model
	{
		function getDataTypeMobil()
		{
			$query = $this->db->query("SELECT * FROM type")->result();
			return $query;
		}

		function setInsertTypeMobil()
		{
			$query = $this->db->query("call insertTypeMobil(
							'".$this->input->post('')."',
							'".$this->input->post('')."',
							'".$this->input->post('')."'
				)");
		}

		function setUpdateTypeMobil()
		{
			$query = $this->db->query("call insertTypeMobil(
							'".$this->input->post('')."',
							'".$this->input->post('')."'
				)");
		}

		function setDeleteTypeMobil($x)
		{
			$query = $this->db->query("call deleteTypeMobil('".$x."')");
		}
	}
?>