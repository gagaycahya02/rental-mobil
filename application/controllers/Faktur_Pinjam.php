<?php
	class Faktur_Pinjam extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function index()
		{

			$this->load->view('parts/transaction/faktur_pinjam');
		}
	}
?>