<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Tamu_model extends CI_Model
	{

		private $_table = "tamu";
		public $id_tamu;
		public $nama_tamu;
		public $jabatan_tamu;
		public $instansi_tamu;
		public $tujuan_tamu;
		public $gambar_tamu = "default.jpg";
		public $tanggal;
		
	public function rules()
	{
		return [
				['field' => 'nama_tamu',
				'label' => 'Nama_Tamu',
				'rules' => 'required'],

				['field' => 'jabatan_tamu',
				'label' => 'Jabatan_Tamu',
				'rules' => 'required'],

				['field' => 'instansi_tamu',
				'label' => 'Instansi_Tamu',
				'rules' => 'required'],

				['field' => 'tujuan_tamu',
				'label' => 'Tujuan_Tamu',
				'rules' => 'required'],
		];
	}

	public function get_data_chart()
	{
		
	}
	
	public function get_tamu_list($limit, $start)
	{
		$query = $this->db->get($this->_table, $limit, $start);
		return $query;
	}

	public function getAll()
	{

		return $this->db->get($this->_table)->result();
	}

	public function getById()
	{
		return $this->db->get_where($this->_table, ["id_tamu" => $id])->row();
	}

	public function getByName($name)
	{
		return $this->db->get_where($this->_table, ["nama_tamu" => $name])->row();
	}

	public function cariDataTamu()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('nama_tamu', $keyword);
		/*$this->db->or_like('nrp', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('jurusan', $keyword);*/
		return $this->db->get('tamu')->result_array();
	}
	
	/*private function _uploadImage()
	{
		    $config['upload_path']          = './upload/tamu/';
		    $config['allowed_types']        = 'gif|jpg|png';
		    $config['file_name']            = $this->nama_tamu;
		    $config['overwrite']			= true;
		    $config['max_size']             = 1024; // 1MB
		    // $config['max_width']            = 1024;
		    // $config['max_height']           = 768;

		    $this->load->library('upload', $config);

		    if ($this->upload->do_upload('gambar_tamu')) {
		        return $this->upload->data("file_name");
		    }
		    
		    return "default.jpg";
		/*}*/
 
	
		
	
  }

 ?>