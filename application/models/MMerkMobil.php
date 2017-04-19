<?php
	class MMerkMobil extends CI_Model
	{
		function getDataMerk()
		{
			$query = $this->db->query("SELECT * FROM merk")->result();
			return $query;
		}

		function setInsertMerkMobil()
		{
			$query = $this->db->query(("call insertMerkMobil(
							'".$this->input->post('')."',
							'".$this->input->post('')."'
				)");
		}

		function setUpdateMerkMobil()
		{
			$query = $this->db->query(("call updateMerkMobil(
							'".$this->input->post('')."',
							'".$this->input->post('')."'
				)");
		}

		function setDeleteMerkMobil($x)
		{
			$query = $this->db->query("call deleteMerkMobil('".$x."')");
		}
	}
?>