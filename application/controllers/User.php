<?php 

	class User extends CI_Controller{
		
		public function index(){
			
			$this->load->model('user_model');
			$data['category'] = $this->user_model->getCategory();
			$this->load->view('user/templates/header');
			$this->load->view('user/index',$data);
			$this->load->view('user/templates/footer');
		}
		public function getBookingCode()
		{
			//jumlah panjang karakter angka dan huruf.
			$abjad_length = "2";
			$number_length = "4";
			//huruf yg dimasukan, kecuali I,L dan O
			$words = "ABCDEFGHJKMNPRSTUVWXYZ";

			//mulai proses generate huruf
			$i = 1;
			$text = "";
			while ($i <= $abjad_length) {
				$text .= $words{mt_rand(0,strlen($words))};
				$i++;
			}

			//mulai proses generate angka
			$datejam = date("His");
			$time_md5 = rand(time(), $datejam);
			$cut = substr($time_md5, 0, $number_length);	

			//mennggabungkan dan mengacak hasil generate huruf dan angka
			$random = str_shuffle($text.$cut);

			//menghitung dan memeriksa hasil generate di database menggunakan fungsi getTotalRow(),
			//jika hasil generate sudah ada di database maka proses generate akan diulang
			
			return $random;
		}
		public function listItem($id){
			$this->load->model('user_model');
			$data['item'] = $this->user_model->getListItem($id);
			$this->load->view('user/templates/header');
			$this->load->view('user/list-item',$data);
			$this->load->view('user/templates/footer');
		}
		public function checkoutItem($id){
			$this->load->model('user_model');
 			$this->load->library('form_validation');

 			$this->form_validation->set_rules('jml_beli', 'jml_beli', 'required');

	 		if($this->form_validation->run() == false){
	 			$data['item'] = $this->user_model->getDetailItem($id);
				$this->load->view('user/templates/header');
				$this->load->view('user/checkout',$data);
				$this->load->view('user/templates/footer');

	 		}else{
	 			$this->load->library('session');

	 			$array = ['kode' => $this->getBookingCode()];
			$this->session->set_userdata($array);
	 			$this->user_model->saveorder();
	 			redirect('user/confirm');
			}
		}
		public function confirm(){
			$this->load->library('session');
			if($this->session->userdata('status') == ''){
				redirect('');
			}else{
				$this->load->model('user_model');
				$data['transaksi'] = $this->user_model->getListTransaksi($this->session->userdata('kode'));
				
				$this->load->view('user/templates/header');
				$this->load->view('user/confirm',$data);
				$this->load->view('user/templates/footer');
			}
		}
		public function payment(){
			$this->load->model('user_model');
			$this->user_model->uploadstruk();
			redirect('user/');
		}
		public function myorder(){
			$id = $this->session->userdata('id');
			$data['transaksi'] = $this->db->get_where('tbl_transaksi', ['id_pelanggan' =>$id])->result_array();
			$this->load->view('user/templates/header');
			$this->load->view('user/myorder',$data);
			$this->load->view('user/templates/footer');
		}
	
}
 ?>