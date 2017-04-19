<?php  
	class MKendaraan extends CI_Model
	{
		function setInputKendaraan()
		{
			$query = $this->db->query("insert into kendaraan values(
							'".$this->input->post('noplat')."',
							'".$this->input->post('idtype')."',
							'".$this->input->post('kodepemilik')."',
							'".$this->input->post('tahun')."',
							'".$this->input->post('tarifperhari')."',
							'".$this->input->post('status')."')");
		}

		function setUpdateKendaraan()
		{
			$query = $this->db->query("CALL updateKendaraan(
										'".$this->input->post('noplat')."',
										'".$this->input->post('tahun')."',
										'".$this->input->post('tperhari')."',
										'".$this->input->post('status')."')");
		}

		function setDeleteKendaraan($x)
		{
			$query = $this->db->query("CALL delKendaraan('".$x."')");
		}		
	}
?>