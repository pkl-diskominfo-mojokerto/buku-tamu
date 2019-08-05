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
	        	if($this->input->get('Tampil')){
	        		$tahun = $this->input->get('Tampil');
	        	}else{
	        		$tahun = date('Y');
	        	}
	        	
	        	$query =  $this->db->query("SELECT COUNT(id_tamu) as count,MONTHNAME(tanggal) as month_name FROM tamu WHERE YEAR(tanggal) = '" . $tahun . "' GROUP BY YEAR(tanggal),MONTH(tanggal)"); 
			 
			      $record = $query->result();
			      $data = [];
			 		 
			      foreach($record as $row) {
			            $data['label'][] = $row->month_name;
			            $data['data'][] = (int) $row->count;
			      }
			      $data['chart_data'] = json_encode($data);
			      $data['tahun_selected'] = $tahun;
			      $this->template_admin->display('admin/content/viewchart_user', $data);

	        	}
			            // Ambil record dari data base
			     
			// Apabila session tidak terdaftar
	        else{

	            //jika session belum terdaftar, maka redirect ke halaman login
	            redirect("admin/login");

	        }	
	      
		}
 
	}



?>