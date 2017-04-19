<?php
	class D_Pelanggan extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("MData");
			$this->load->model("MPelanggan");
		}

		function index()
		{
			$data['plgn'] = $this->MData->showDataPlgn();
			$this->load->view("parts/data/vd_pelanggan",$data);
		}

		function showPelanggan($id)
		{
			$x = $this->MPelanggan->getPelanggan($id);
			echo json_encode($x);
		}

		function delPelanggan($x)
		{
			$x = $this->MPelanggan->setDeletePelanggan($x);
		}	

		function inpPelanggan()
		{
			$y = $this->MPelanggan->setInputPelanggan();
		}

		function updaPelanggan()
		{
			$y = $this->MPelanggan->setUpdatePelanggan();
		}
	}
?>