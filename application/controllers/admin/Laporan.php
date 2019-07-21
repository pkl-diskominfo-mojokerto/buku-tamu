<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Laporan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Tamu_model');
			$this->load->library('Template_Admin', 'template_admin');
			$this->load->model('Admin_model');
		}

		function index()
		{
				if($this->Admin_model->logged_id())
	        {

	            $this->template_admin->display('admin/content/viewlaporan_user');    

	        }else{

	            //jika session belum terdaftar, maka redirect ke halaman login
	            redirect("admin/login");

	        }
		}


	}



?>