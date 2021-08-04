<?php 
/**
  * 
  */
 class transaksi_model extends CI_Model
 {	
 	public function getWhereId($id){
 		return $this->db->get_where('tbl_transaksi', ['id_transaksi' =>$id])->row_array();
 	}
 	
 	public function getAll(){
 		return $this->db->get('tbl_transaksi')->result_array();
 	}
 	public function getDetail($id){
 		return $this->db->get_where('tbl_transaksidetail', ['id_transaksi' =>$id])->result_array();
 	}

 	public function StoreData(){
 		$data = [
 			"id_transaksi" => $this->input->post('id_transaksi',true)];
 		$this->db->insert('tbl_transaksi',$data);
 	}
 	public function DropData($id){
 		return $this->db->delete('tbl_transaksi',array('id_transaksi'=>$id));
 	}
 	public function UpdateData(){
 		$data = [
 			"id_transaksi" => $this->input->post('id_transaksi',true)];
 		$this->db->replace('tbl_transaksi',$data);
 	}
 } ?>