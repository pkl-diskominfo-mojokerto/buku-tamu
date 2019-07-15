<?php 
	class User extends CI_Controller {
		 
	public function __construct()
	{
		parent::__construct();
	 
		$this->load->model('Tamu_model');
		$this->load->library('form_validation');
	}
		public function index()
		{
			/* $this->load->view('user/head');
			 $this->load->view('user/search');
			 $this->load->view('user/index');*/
			/*$data['tamu'] = $this->Tamu_model->getAll();
			
			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
			$this->form_validation->set_rules('instansi', 'Instansi', 'required');
			$this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
 		 
			if( $this->form_validation->run() != FALSE ){	
			$this->Tamu_model->tambahDataUser();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('user');
			 
			} else {*/
				$this->load->view('user/head');
				$this->load->view('user/search');
				$this->load->view('user/index');
			
			// $this->load->view('admin/_partials/navbar');
			// $this->load->view('admin/_partials/sidebar');
			// $this->load->view('admin/_partials/js');
			
		
		}
		function generateRandomString($length = 15)
			{
			    return substr(sha1(rand()), 0, $length);
			}
		function save(){
			$base64string = $this->input->post('base64string');
			$output_file = 'upload/tamu/'.$this->generateRandomString().'.jpg';
			/*var_dump($this->input->post());*/
			$this->base64_to_jpeg($base64string, $output_file);
			$this->tambahDataUser($output_file);
			redirect('user/index');
		}
		public function tambahDataUser($filename)
	{
			
		$data = [
			"nama_tamu" => $this->input->post('nama', true),
			"jabatan_tamu" => $this->input->post('jabatan', true),
			"instansi_tamu" => $this->input->post('instansi', true),
			"tujuan_tamu" => $this->input->post('tujuan', true),
			"gambar_tamu" => $filename
			/*"gambar_tamu" => $this->input->post('base64string'),*/
			/*"gambar_tamu" => $this->input->post(_uploadImage()),*/
			/*$this->"gambar_tamu" = $this->_uploadImage(); */
			/*"gambar_tamu" => $this->input->post('gambar', true),*/
			];
			/*$gambar_tamu = $this->input->post('image'),*/
			/*$gambar_tamu = str_replace('data:image/jpeg;base64,','', $image),
			$gambar_tamu = base64_decode($image),
			$filename = 'image_'.time().'.png',
			file_put_contents(FCPATH.'/uploads/'.$filename,$gambar_tamu),
			
			$data = array(
			'image' => $gambar_tamu );*/
		$this->db->insert('tamu', $data); 
	}
		function base64_to_jpeg($base64_string, $output_file) {
		    // open the output file for writing
		    $ifp = fopen( $output_file, 'wb' ); 
		    // split the string on commas
		    // $data[ 0 ] == "data:image/png;base64"
		    // $data[ 1 ] == <actual base64 string>
		    $data = explode( ',', $base64_string );
		    // we could add validation here with ensuring count( $data ) > 1
		    fwrite( $ifp, base64_decode( $data[ 1 ] ) );
		    // clean up the file resource
		    fclose( $ifp ); 
		    return $output_file; 
		}
	}
 ?>