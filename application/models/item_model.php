<?php 
/**
  * 
  */
 class item_model extends CI_Model
 {	
 	private $_table = 'tbl_item';

 	public function getAll(){
 		return $this->db->get($this->_table)->result_array();
 	}

 	public function getById($id){
 		return $this->db->get_where($this->_table, ['id_item' =>$id])->row_array();
 	}
 	
 	
 	public function save(){
 		$post = $this->input->post();
 		$this->nama_item = $post['nama_item'];
 		$this->id_kategori = $post['id_kategori'];
 		$this->stok = $post['stok'];
 		$this->satuan = $post['satuan'];
 		$this->harga = $post['harga'];
 		$this->image = $this->_uploadImage();

 		$this->db->insert($this->_table,$this);
 	}
 	public function update(){
 		$post = $this->input->post();
        $this->id_item = $post["id_item"];
        $this->nama_item = $post["nama_item"];
        $this->id_kategori = $post["id_kategori"];
        $this->stok = $post["stok"];
        $this->satuan = $post['satuan'];
        $this->harga = $post['harga'];
		
		if (!empty($_FILES["image"]["name"])) {
		    $this->image = $this->_uploadImage();
		} else {
		    $this->image = $post["old_image"];
		}
        return $this->db->update($this->_table, $this, array('id_item' => $this->id_item));
 		
 	}
 	public function updateStock(){
 		$id = $this->input->post('id_itemStock',true);
 		$sum = $this->input->post('inputstock',true) + $this->input->post('stock',true);

 		$data = array(
 			"stok" => $sum);
 		$this->db->where('id_item',$id);
 		$this->db->update('tbl_item',$data);
 	}

 	public function delete($id){
 		return $this->db->delete($this->_table,array('id_item'=>$id));
 	}

 	public function _uploadImage(){
 		$config['upload_path']          = './assets/img/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['file_name']			= $this->nama_item;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    // $config['max_width']            = 1024;
	    // $config['max_height']           = 768;
	    $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    if ($this->upload->do_upload("image")) {
	        return $this->upload->data("file_name");
	    }else{


	    
	   // return "default.jpg";
		return 'default.png';	
	}
}
 } ?>