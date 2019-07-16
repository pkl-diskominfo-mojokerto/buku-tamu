<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Chart extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			
			
		}

		function index()
		{
			$this->load->library('Template_Admin', 'template_admin');
			$this->template_admin->display('admin/content/viewchart_user', FALSE);
		}

		function getChart()
		{
			$this->load->model('Tamu_model');
			$x = $this->Tamu_model->get_data_chart();
		   	echo json_encode($x);
		    // print_r($cek);
		    // exit();
		}
	}



?>