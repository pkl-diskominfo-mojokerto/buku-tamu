<?php 

	class User extends CI_Controller {
		public function index()
		{
			
			 $this->load->view('user/head');
			 $this->load->view('user/search');
			 $this->load->view('user/index');
			// $this->load->view('admin/_partials/navbar');
			// $this->load->view('admin/_partials/sidebar');
			// $this->load->view('admin/_partials/js');
			

		
		}
	}




 ?>