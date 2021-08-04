<?php 
 class Item extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('item_model');
 		$this->load->library('form_validation');
 		$this->load->helper('form','url');
 	}
 	public function index(){
 		$data['item'] = $this->item_model->getAll();
 		$this->load->view('admin/templates/header');
 		$this->load->view('admin/templates/sidebar');
 		$this->load->view('admin/templates/navbar');
 		$this->load->view('admin/data/data-items',$data);
 		$this->load->view('admin/templates/footer');
 	}


 	/* Insert Data */
 	public function add(){
 		$item = $this->item_model;

 			$item->save();
 			$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save Data Succesfull!</div>');
 		
 		
	 	redirect('Admin/Item');	
	}
	
	/* Update Data */
	public function getData(){
		$this->id = $_POST['id'];
		$get = $this->db->get_where('tbl_item', ['id_item' =>$this->id])->row_array();
		echo json_encode($get);
	}
	public function edit($id=null){
        $item = $this->item_model;
        $item->update();
		$this->session->set_flashdata('success', '<div class="alert alert-primary" role="alert">Update Data Succesfull!</div>');
        
		redirect('Admin/Item');
	}
	public function updateStok(){
		$this->item_model->updateStock();
		$this->session->set_flashdata('success', '<div class="alert alert-primary" role="alert">Update Stock Succesfull!</div>');
		redirect('Admin/Item');
	}

	/* Delete Data */
 	public function delete($id=null){
 		if (!isset($id)) show_404();
        
        if ($this->item_model->delete($id)) {

 			$this->session->set_flashdata('success', '<div class="alert alert-danger" role="alert">Delete Data Succesfull!</div>');
 			redirect('Admin/Item');
        }
 	}
 	
 	}

?>