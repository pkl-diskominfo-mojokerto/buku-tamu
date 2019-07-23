<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

	class Data extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('pagination');
			$this->load->model('Tamu_model');
			$this->load->library('Template_Admin', 'template_admin');
			$this->load->model('Admin_model');
			
		}

		function index()
		{
				
					if($this->Admin_model->logged_id())
		        {

					    $config['base_url'] = site_url('index.php/admin/data'); 
						$config['total_rows'] =  $this->db->count_all('tamu');
						$config['per_page'] = 5; 			
						$config["uri_segment"] = 3; 
						$choice = $config["total_rows"] / $config["per_page"]; 
						$config["num_links"] = floor($choice);

						$config['first_link']       = 'First';
			        	$config['last_link']        = 'Last';
			        	$config['next_link']        = 'Next';
			        	$config['prev_link']        = 'Prev';
			        	$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			        	$config['full_tag_close']   = '</ul></nav></div>';
			        	$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
				        $config['num_tag_close']    = '</span></li>';
				        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
				        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
				        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
				        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
				        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
				        $config['prev_tagl_close']  = '</span>Next</li>';
				        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
				        $config['first_tagl_close'] = '</span></li>';
				        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
				        $config['last_tagl_close']  = '</span></li>'; 

				        $this->pagination->initialize($config);
			        $data['page'] = ($this->uri->segment(1)) ? $this->uri->segment(3) : 0;
			 
			        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
			        $data['data'] = $this->Tamu_model->get_tamu_list($config["per_page"], $data['page']);           
			 
			        $data['pagination'] = $this->pagination->create_links();

					$data['tamu'] = $this->Tamu_model->getAll();
				
			 
			        //load view mahasiswa view
			       	$this->template_admin->display('admin/content/viewdata_user', $data);        

		        }else{

		            //jika session belum terdaftar, maka redirect ke halaman login
		            redirect("admin/login");

		        }
		       


		}
		 public function hapus($id)
				{
					$this->Tamu_model->hapusDataTamu($id);
					$this->session->set_flashdata('flash', 'Dihapus');
					redirect('admin/data');
				}

	}



?>