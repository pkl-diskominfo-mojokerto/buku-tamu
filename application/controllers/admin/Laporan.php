<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Laporan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Tamu_model');
			$this->load->library('Template_Admin', 'template_admin');
		}

		function index()
		{
			$this->template_admin->display('admin/content/viewlaporan_user');
		}


	}



?>