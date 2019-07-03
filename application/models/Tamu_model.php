<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Tamu_model extends CI_Model
	{
		private $_table = "tamu";
public $id;
public $nama;
public $jabatan;
public $instansi;
public $tujuan;
public $gambar = "default.jpg";

	public function rules()
	{
		return [
				['field' => 'nama_tamu',
				'label' => 'nama',
				'rules' => 'required'],

				['field' => 'jabatan_tamu',
				'label' => 'jabatan',
				'rules' => 'required'],

				['field' => 'instansi_tamu',
				'label' => 'instansi',
				'rules' => 'required'],

				['field' => 'tujuan_tamu',
				'label' => 'tujuan',
				'rules' => 'required'],
		];
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