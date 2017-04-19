<?php
	class Register extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			// Load model
			$this->load->model("M_Data");	
		}

		public function index()
		{
			$this->load->view('v_register');
		}

		public function createUserData()
		{
			$unik = $this->input->post('unik');
			$unm = $this->input->post('unm');
			$ualmt = $this->input->post('ualmt');
			$utelp = $this->input->post('utelp');
			$username = $this->input->post('username');
			$password = $this->input->post('upass');
			//$utuser = $this->input->post('utuser');


			$dataKaryawan = array(
					'nik'	=> $unik,
					'nmkaryawan'	=> $unm,
					'almtkaryawan'	=> $ualmt,
					'telpkaryawan'	=> $utelp,
					'nik'	=> $unik,
					'username'	=> $username,	
					'password'	=> $password,
					'typeuser'	=> "operator"
			);

			// $dataLogin = array(
			// 		'nik'	=> $unik,
			// 		'username'	=> $username,	
			// 		'password'	=> $password,
			// 		'typeuser'	=> $utuser
			// 	);

			$this->M_Data->inputDataKaryawan($dataKaryawan);
			redirect("Login");
		}
	}
?>