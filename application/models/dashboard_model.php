<?php 
/**
  * 
  */
 class dashboard_model extends CI_Model
 {
 	public function StoreRegistration(){
 		$data = [
 			"NIK" => $this->input->post('NIK',true),
 			"nama_pelanggan" => $this->input->post('nama_pelanggan',true),
 			"username" => $this->input->post('username',true),
 			"password" => $this->input->post('password2',true),
 			"alamat" => $this->input->post('alamat',true),
 			"no_telp" => $this->input->post('no_telp',true)];
 		$this->db->insert('tbl_pelanggan',$data);
 	}
 	public function getTotalGain(){
 		$query = $this->db->query("SELECT SUM(total_tagihan) as gain from tbl_transaksi");
			$gain = $query->row();
			return $gain;
 	}
 	public function getTotalTransaksi(){
 		$query = $this->db->query("SELECT count(id_transaksi) as transaksi from tbl_transaksi");
			$transaksi = $query->row();
			return $transaksi;
 	}
 	public function getTotalMember(){
 		$query = $this->db->query("SELECT count(id_pelanggan) as member from tbl_pelanggan");
			$member = $query->row();
			return $member;
 	}
 	public function getTodayTransaksi(){
 		$query = $this->db->query("SELECT count(id_transaksi) as today from tbl_transaksi where tgl_transaksi ='".date('Y-m-d')."'");
			$today = $query->row();
			return $today;
 	}
 } ?>