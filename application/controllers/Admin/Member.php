<?php 
 class Member extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('member_model');
 		$this->load->library('form_validation');
 		$this->load->helper('form');
 	}
 	public function index(){
 		$data['member'] = $this->member_model->getAll();
 		$this->load->view('admin/templates/header');
 		$this->load->view('admin/templates/sidebar');
 		$this->load->view('admin/templates/navbar');
 		$this->load->view('admin/data/data-member',$data);
 		$this->load->view('admin/templates/footer');
 	}

	
	/* Update Data */
	public function getData(){
		echo json_encode($this->member_model->getWhereId($_POST['id']));
	}
	public function EditData(){
		$this->member_model->UpdateData();
		redirect('Admin/Member');
	}

	/* Delete Data */
 	public function DeleteData($id){
 		$this->member_model->DropData($id);
 		redirect('Admin/Member');
 	}
 	
 } ?>