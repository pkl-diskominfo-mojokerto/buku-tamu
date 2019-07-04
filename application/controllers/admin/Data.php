<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Data extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Tamu_model');
			$this->load->library('form_validation');
			$this->load->library('Template_Admin', 'template_admin');
		}

		function index()
		{
			$data['tamu'] = $this->Tamu_model->getAll();
			$this->template_admin->display('admin/content/viewdata_user', $data);
		}


	}



?>