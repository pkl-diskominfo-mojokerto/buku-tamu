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

	// public function get_data_chart()
	// {
	// 	$sql = "SELECT date_format(tanggal, '%d-%b-%Y') as waktu, count(id_tamu) as jumlah from tamu where YEAR(tanggal) = '2019'";
	// 	return $this->db->query($sql)->result();
	// }
	
	public function get_tamu_list($limit, $start)
	{
		return $this->db->get('tamu', $limit, $start)->result_array();
		/*return $query;*/
	}

	public function getAll()
	{

		return $this->db->get($this->_table)->result();
	}

	public function tampil_tgl($tgl_a, $tgl_b)
	{/*
		$db = $this->mysqli->conn;*/
		/*$sql = "SELECT * FROM tamu WHERE tanggal BETWEEN 'tgl_a' AND 'tgl_b'";
		$query = $db->query($sql) or die ($db->error);*/
		

		/*$this->db->select('tanggal');
		$this->db->from('tamu');
		$this->db->between("tgl_a","tgl_b");
		$query=$this->db->get();*/

		$query = $this->db->query("select * from tamu WHERE tanggal BETWEEN '$tgl_a' AND '$tgl_b 23:59:59'");
		return $query->result();

	}

	function tgl_indonesia($date){
   /* ARRAY u/ hari dan bulan */
		   $Hari = array ("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu",);
		   $Bulan = array ("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

		/* Memisahkan format tanggal bulan dan tahun menggunakan substring */
		$tahun 	 = substr($date, 0, 4);
		$bulan 	 = substr($date, 5, 2);
		$tgl	 = substr($date, 8, 2);
		$waktu	 = substr($date,11, 5);
		$hari	 = date("w", strtotime($date));

		$result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu." WIB";
		return $result;
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
	
	public function hapusDataTamu($id)
	{
		$this->db->where('id_tamu', $id);
		$this->db->delete('tamu');
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