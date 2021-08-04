<?php 
 class Page extends CI_Controller
 {
 	public function index(){

 		redirect('page/Login');
 	}
 	public function Login(){
 		$this->load->library('form_validation');
 		$this->load->library('session');

 		$this->form_validation->set_rules('username', 'Username', 'required');
 		$this->form_validation->set_rules('password', 'Password', 'required');
 		if($this->form_validation->run() == false){

	 		$this->load->view('auth/templates/header');
	 		$this->load->view('auth/login');
	 		$this->load->view('auth/templates/footer');

 		}else{

	 		$username = $this->input->post('username',true);
	 		$password = $this->input->post('password',true);

	 		$user = $this->db->get_where('tbl_pelanggan', ['username' => $username])->row_array();
	 		$admin = $this->db->get_where('tbl_admin', ['username' => $username])->row_array();
	 		if($user){
	 			$log = $this->db->get_where('tbl_pelanggan', ['username' => $username,'password' => $password])->row_array();
	 			if($log){
	 				$this->db->select('id_pelanggan, NIK, nama_pelanggan');
					$this->db->from('tbl_pelanggan');
					$this->db->where('username', $username);
					$result = $this->db->get()->row();
	 				$data = ['status' => "active",'nama' => $result->nama_pelanggan,'nik' => $result->NIK, 'id' => $result->id_pelanggan];

	 				$this->session->set_userdata($data);
	 				$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Login Sukses!</div>');
	 				redirect('user/');
	 			}else{
	 				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
	 				redirect('Page/Login');
	 			}
	 		}else if($admin){
	 			$log = $this->db->get_where('tbl_admin', ['username' => $username,'password' => $password])->row_array();
	 			if($log){
	 				
	 				$data = ['status' => "active"];

	 				$this->session->set_userdata($data);
	 				$this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Login Sukses!</div>');
	 				redirect('Page/Dashboard');
	 			}else{
	 				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
	 				redirect('Page/Login');
	 			}
	 		}else{
	 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username dan Password doesnt match</div>');
	 			redirect('Page/Login');
	 		}
 		}

 	}
 	public function Logout(){
 		$this->load->library('session');
 		$data = ['status' => '','nama' => '','nik'=> '','id_pelanggan' => ''];
 		$this->session->set_userdata($data);

 		redirect('user/');
 	}
 	
 	public function Registration(){ 		
 		$this->load->library('form_validation');

 		$this->form_validation->set_rules('NIK', 'NIK', 'required|numeric|min_length[16]|max_length[16]');
 		$this->form_validation->set_rules('nama_pelanggan', 'Customer Name', 'required');
 		$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]');
 		$this->form_validation->set_rules('password1', 'Password1', 'required|min_length[8]');
 		$this->form_validation->set_rules('password2', 'Password2', 'required|matches[password1]');
 		$this->form_validation->set_rules('alamat', 'Address', 'required');
 		$this->form_validation->set_rules('no_telp', 'Phone Number', 'required|numeric|min_length[12]|max_length[14]');
 		if($this->form_validation->run() == false){

	 		$this->load->view('auth/templates/header');
	 		$this->load->view('auth/registration');
	 		$this->load->view('auth/templates/footer');
 		}else{
 			$this->load->model('dashboard_model');
 			$this->dashboard_model->StoreRegistration();
 			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Registration Succesfull!</div>');
 			redirect('Page/Login');
 		}
 	}

 	
 	/* Access */
 	public function Dashboard(){
 		$this->load->model('dashboard_model');

 		$data = array(
 			"gain" => $this->dashboard_model->getTotalGain(),
 			"transaksi" => $this->dashboard_model->getTotalTransaksi(),
 			"member" => $this->dashboard_model->getTotalMember(),
 			"today_transaksi" => $this->dashboard_model->getTodayTransaksi()

 		);
 		$this->load->view('admin/templates/header');
 		$this->load->view('admin/templates/sidebar');
 		$this->load->view('admin/templates/navbar');
 		$this->load->view('admin/data/dashboard',$data);
 		$this->load->view('admin/templates/footer');
 	}
		

 } ?>