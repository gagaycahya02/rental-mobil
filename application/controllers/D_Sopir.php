<?php
	class D_Sopir extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model("MData");
			$this->load->model("MSopir");
		}

		function index()
		{
			$data['sop'] = $this->MData->showDataSop();
			$this->load->view('parts/data/vd_sop',$data);
		}

		function delSopir($x)
		{
			$x = $this->MSopir->setDeleteSopir($x);
		}	

		function inpSopir()
		{
			$y = $this->MSopir->setInputSopir();
		}

		function updaSopir()
		{
			$y = $this->MSopir->setUpdateSopir();
		}
	}
?>