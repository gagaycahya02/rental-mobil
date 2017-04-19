<?php
	class Faktur_Pengembalian extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}

		function index()
		{

			$this->load->view('parts/transaction/faktur_pengembalian');
		}
	}
?>