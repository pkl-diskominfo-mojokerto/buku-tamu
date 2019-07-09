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

	public function tambahDataUser()
	{
		/*$data = [*/
			$nama_tamu = $this->input->post('nama', true);
			$jabatan_tamu = $this->input->post('jabatan', true);
			$instansi_tamu = $this->input->post('instansi', true);
			$tujuan_tamu = $this->input->post('tujuan', true);
			$gambar_tamu = str_replace('data:image/jpeg;base64,','', $gambar_tamu);
			$gambar_tamu = base64_decode($gambar_tamu);
			$filename = 'image_'.time().'.png';
			file_put_contents(FCPATH.'/uploads/'.$filename,$gambar_tamu);
			$gambar_tamu = $this->input->post('image');
			
			$data = array(
				'nama' => $nama_tamu,
				'jabatan' => $jabatan_tamu,
				'instansi' => $instansi_tamu,
				'tujuan' => $tujuan_tamu,
				'image' => $filename,
			);
			

			/*];*/

		$this->db->insert('tamu', $data); 	
	}
  }

 ?>