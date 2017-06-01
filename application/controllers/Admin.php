<?php  

class admin extends CI_Controller {
 
 public function __construct() {
  parent::__construct();
  $this->load->model('My_Model');
  if($this->session->userdata('status') != "admin"){
    redirect(base_url("login"));
  }
 }

  function index(){
    
      $data = $this->My_Model->getPesanan();
       $this->load->view('mimin/Head');
        $this->load->view('mimin/Sidebar');
        $this->load->view('mimin/Index',array('data' => $data));
  	
	//$datatampil = array('data' => $data);
 
 
 }

  function tabels(){
  $data = $this->My_Model->getData();
 	$this->load->view('mimin/Tabels',array('data' => $data));
 	$this->load->view('mimin/Sidebar');
 }
   function input(){
    $this->load->view('mimin/Head');
 	$this->load->view('mimin/Input');
 	$this->load->view('mimin/Sidebar');
 }
 
  function icons(){
    $this->load->view('mimin/Head');
 	$this->load->view('mimin/Icons');
 	$this->load->view('mimin/Sidebar');
 }



 function readData() {
	
 	$this->load->view('View',$datatampil);
 }

}
?>