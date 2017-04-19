<?php
	class M_Data extends CI_Model
	{
		function showData()
		{
			return $this->db->get('karyawan');
		}

		function inputDataKaryawan($x)
		{
			$this->db->insert("karyawan",$x);
			//$this->db->insert("login",$y);
		}

		function deleteDataKaryawan()
		{

		}

		function updateDataKaryawan()
		{

		}

		function checkUserData()
		{
			$sql = "SELECT * FROM karyawan WHERE Username = '".$this->input->post('euname')."' AND Password = '".$this->input->post('upass')."'";
			// Execute query

			$remember = $this->input->post('reme');

			$query = $this->db->query($sql);
			// To Array
			$arr = $query->row_array();

			// Get Num Rows
			$nm  = $query->num_rows();

			// Check num of row if equal 1
			if($nm == 1)
			{
				// Insert to array
				$data = array(
					'nik' => $arr['NIK'] ,
					'username' => $arr['Username'],
					'typeuser' => $arr['Hak_Akses'],
					'logged_in' => TRUE
				);

				if($remember)
				{

					$this->session->set_userdata('remember_me',TRUE);
				}

				$this->session->set_userdata($data);

				redirect("home");
			}else
			{
				$this->session->set_flashdata('message','* Username or password incorrect');
				redirect("Login");
			}
		}

		function getKaryawan()
		{
			$query = $this->db->query("SELECT * FROM karyawan")->result();
			//$result = $query->result();
			return $query;
		}
	}
?>