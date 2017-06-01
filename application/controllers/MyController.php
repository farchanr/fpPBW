<?php  

class MyController extends CI_Controller {
 
 public function __construct() {
  parent::__construct();
  $this->load->model('My_Model');
 }
 
function index() {
  
 // $data = $this->My_Model->getData();
 	//$this->load->view('index', array('data' => $data));

 $this->load->view('Beranda');
 $this->load->view('Footer');
 
 }

function pesan() {
  
 // $data = $this->My_Model->getData();
 	//$this->load->view('index', array('data' => $data));
 	

 $this->load->view('Checkout');
 $this->load->view('Footer');
 
 }

  function formBeli()
 {
 	
 
 	 $this->load->view('Form_beli');
 	 $this->load->view('Footer');
 }



 function products()
 {
 	$data['barang'] = $this->My_Model->getData();

 	 $this->load->view('Products',$data);
 	 $this->load->view('Footer');
 }

 function contact()
 {
 	 $notif['status'] = "";
 	 $this->load->view('Contact',$notif);
 	 $this->load->view('Footer');
 	 
 }

function article($kode_barang)
 {
 	$detail = $this->My_Model->get_barang("where kode_barang = $kode_barang");
  $data = array(
   "nama_barang" => $detail[0]['nama_barang'],
   "komposisi" => $detail[0]['komposisi'],
   "harga" => $detail[0]['harga'],
   "image" => $detail[0]['image']
   
    );
 
 	 $this->load->view('Single',$data);
 	 $this->load->view('Footer');
 }



 function admin() {
  
 // $data = $this->My_Model->getData();
 	//$this->load->view('index', array('data' => $data));
 	$data['err_message'] = "";
 	if($this->session->userdata('status') ==! 'admin'){
		$this->load->view('login1', $data);
 	}else{
 		redirect(base_url('index.php/Admin'));
 	}
 }
  

  
function readData() {
	$data = $this->My_Model->getData();
	$datatampil = array('data' => $data);
 	$this->load->view('View',$datatampil);
 }

 function login(){
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$where = array(
		'username' => $username,
		'password' => $password
		);
	$cek = $this->My_Model->cek_login('useradmin',$where);
	if($cek->num_rows()==1){
		$data_session = array(
			'nama' => $username,
			'status' => "admin"
			);

		$this->session->set_userdata($data_session);
		//redirect(base_url('index.php/login'));
		//$this->load->view('log/sidebar');
		redirect(base_url("index.php/Admin"));
	}else{
		echo "gagal";
	}

}

function logout(){
	$this->session->sess_destroy();
	redirect(base_url('index.php/MyController/admin'));
}

 function delete_barang(){
 $delete = $this->input->post('daftar_barang');
 $this->My_Model->delete_item($delete);
 $this->readData();
}

}
?> 