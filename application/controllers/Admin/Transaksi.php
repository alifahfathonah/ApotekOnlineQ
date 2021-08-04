<?php 
 class Transaksi extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('transaksi_model');
 		$this->load->library('form_validation');
 		$this->load->helper('form');
 	}
 	public function index(){
 		$data['transaksi'] = $this->transaksi_model->getAll();
 		$this->load->view('admin/templates/header');
 		$this->load->view('admin/templates/sidebar');
 		$this->load->view('admin/templates/navbar');
 		$this->load->view('admin/data/data-transaksi',$data);
 		$this->load->view('admin/templates/footer');
 	}

	
	/* Update Data */
	public function getData(){
		echo json_encode($this->transaksi_model->getWhereId($_POST['id']));
	}
	public function EditData(){
		$this->transaksi_model->UpdateData();
		redirect('Admin/Transaksi');
	}

	/* Delete Data */
 	public function DeleteData($id){
 		$this->transaksi_model->DropData($id);
 		redirect('Admin/Transaksi');
 	}

 	public function Detail($id){
 		$data['detail'] = $this->transaksi_model->getDetail($id);
 		$this->load->view('admin/templates/header');
 		$this->load->view('admin/templates/sidebar');
 		$this->load->view('admin/templates/navbar');
 		$this->load->view('admin/data/data-detail-transaksi',$data);
 		$this->load->view('admin/templates/footer');
 	}
 	
 } ?>