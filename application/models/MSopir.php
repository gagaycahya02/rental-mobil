<?php  
	class MSopir extends CI_Model
	{
		function setInputSopir()
		{
			$query = $this->db->query("CALL insertSop(
										'".$this->input->post('idSop')."',
										'".$this->input->post('nsop')."',
										'".$this->input->post('almtsop')."',
										'".$this->input->post('telpsop')."',
										'".$this->input->post('nosim')."',
										'".$this->input->post('tarifsop')."')");
		}

		function getSopir($x)
		{
			$query = $this->db->query("CALL getSopir('".$x."')");
		}

		function setUpdateSopir()
		{
			$query = $this->db->query("CALL updateSopir(
										'".$this->input->post('idSop')."',
										'".$this->input->post('nsop')."',
										'".$this->input->post('almtsop')."',
										'".$this->input->post('telpsop')."',
										'".$this->input->post('nosim')."',
										'".$this->input->post('tarifsop')."')");
		}

		function setDeleteSopir($x)
		{
			$query = $this->db->query("CALL delSopir('".$x."')");
		}		
	}
?>