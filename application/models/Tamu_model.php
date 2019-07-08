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
	
	public function get_tamu_list($limit, $start)
	{
		$query = $this->db->get($this->_table, $limit, $start);
		return $query;
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id_tamu" => $id])->row();
	}
  }

 ?>