<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Chart extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
        	$this->load->helper(array('url','html','form'));
			$this->load->library('Template_Admin', 'template_admin');
			$this->load->model('Admin_model');
			
		}

		 public function index() 

		{
			// Cek Session
			if($this->Admin_model->logged_id())
	        {

			            // Ambil record dari data base
			      $query =  $this->db->query("SELECT COUNT(id_tamu) as count,MONTHNAME(tanggal) as month_name FROM tamu WHERE YEAR(tanggal) = '" . date('Y') . "' GROUP BY YEAR(tanggal),MONTH(tanggal)"); 
			 
			      $record = $query->result();
			      $data = [];
			 		 
			      foreach($record as $row) {
			            $data['label'][] = $row->month_name;
			            $data['data'][] = (int) $row->count;
			      }
			      $data['chart_data'] = json_encode($data);
			      $this->template_admin->display('admin/content/viewchart_user', $data);

			// Apabila session tidak terdaftar
	        }else{

	            //jika session belum terdaftar, maka redirect ke halaman login
	            redirect("admin/login");

	        }	
	      
		}
 
	}



?>