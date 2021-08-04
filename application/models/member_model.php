<?php 
/**
  * 
  */
 class member_model extends CI_Model
 {	
 	public function getWhereId($id){
 		return $this->db->get_where('tbl_pelanggan', ['id_pelanggan' =>$id])->row_array();
 	}
 	
 	public function getAll(){
 		return $this->db->get('tbl_pelanggan')->result_array();
 	}
 	
 	public function StoreData(){
 		$data = [
 			"id_pelanggan" => $this->input->post('id_pelanggan',true),
 			"nama_item" => $this->input->post('nama_item',true),
 			"id_kategori" => $this->input->post('id_kategori',true),
 			"stok" => $this->input->post('stok',true),
 			"satuan" => $this->input->post('satuan',true),
 			"harga" => $this->input->post('harga',true)];
 		$this->db->insert('tbl_pelanggan',$data);
 	}
 	public function DropData($id){
 		return $this->db->delete('tbl_pelanggan',array('id_pelanggan'=>$id));
 	}
 	public function UpdateData(){
 		$data = [
 			"id_pelanggan" => $this->input->post('id_pelanggan',true),
 			"nama_item" => $this->input->post('nama_item',true),
 			"id_kategori" => $this->input->post('id_kategori',true),
 			"stok" => $this->input->post('stok',true),
 			"satuan" => $this->input->post('satuan',true),
 			"harga" => $this->input->post('harga',true)];
 		$this->db->replace('tbl_pelanggan',$data);
 	}
 } ?>