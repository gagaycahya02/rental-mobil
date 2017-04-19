<?php
	class MReturnKendaraan extends CI_Model
	{
		function updateKendaraan()
		{
			$query = $this->db->query("CALL uTransKembali(
							'".$this->input->post('tglkembalireal')."',
							'".$this->input->post('jkembalireal')."',
							'".$this->input->post('dnda')."',
							'".$this->input->post('kmkembali')."',
							'".$this->input->post('bbmkembali')."',
							'".$this->input->post('konmobilkembali')."',
							'".$this->input->post('krsknmobil')."',
							'".$this->input->post('byakerusakan')."',
							'".$this->input->post('byabbm')."',
							'".$this->input->post('ntbooking')."',
							'".$this->input->post('nplat')."'
				)");
		}
	}
?>