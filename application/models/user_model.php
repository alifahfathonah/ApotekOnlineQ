<?php 
/**
  * 
  */
 class user_model extends CI_Model
 {
 	
 	public function getCategory(){
 		$query = $this->db->query('SELECT * FROM tbl_kategori');
 		$data = $query->result_array();

 		return $data;
 		
 	}
 	public function getListItem($id){
 		$query = $this->db->query("SELECT * FROM tbl_item WHERE id_kategori = '".$id."'");
 		$data = $query->result_array();

 		return $data;
 		
 	}
 	public function getListTransaksi($id){
 		$query = $this->db->query("SELECT * FROM tbl_transaksi WHERE kode = '".$id."'");
 		$data = $query->row_array();

 		return $data;
 		
 	}
 	public function getDetailItem($id){
 		$query = $this->db->query("SELECT * FROM tbl_item WHERE id_item = '".$id."'");
 		$data = $query->row_array();

 		return $data;
 		
 	}
 	public function saveorder(){

 		$this->load->library('session');

 		$id_pelanggan = $this->session->userdata('id');
 		$post = $this->input->post();
 		$this->id_item = $post['id_item'];
 		$this->id_pelanggan = $id_pelanggan;
 		$this->tgl_transaksi = date('Y-m-d	');
 		$this->kode = $this->session->userdata('kode');
 		$this->jumlah_beli = $post['jml_beli'];
 		$this->id_item = $post['id_item'];
 		$this->total_tagihan = $post['harga'] * $post['jml_beli'];
 		$this->db->insert('tbl_transaksi', $this);

 		$data = ['stok' => $post['stok'] - $this->jumlah_beli];

 		$this->db->update('tbl_item', $data, array('id_item' => $this->id_item));

 	}
 	public function uploadstruk(){
 		$this->kode_booking = $this->session->userdata('kode');
 		

 		$config['upload_path']          = './assets/img/payment/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['file_name']			= $this->kode_booking;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    // $config['max_width']            = 1024;
	    // $config['max_height']           = 768;
	    $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    if ($this->upload->do_upload("image")) {
	    	$data = ['img' => $this->upload->data("file_name")]; 
 			$this->db->update('tbl_transaksi' ,$data,  array('kode' => $this->kode_booking));
	        redirect('user/');
	    }else{
	    	$data = ['img' => 'default.png']; 
 			$this->db->update('tbl_transaksi',$data,  array('kode' => $this->kode_booking));
 			redirect('user/');
		}
 	}

 } ?>