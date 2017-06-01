<?php  

class MyController extends CI_Controller {
 
 public function __construct() {
  parent::__construct();
  $this->load->model('My_Model');
 }
 
function index() {
  
 // $data = $this->My_Model->getData();
 	//$this->load->view('index', array('data' => $data));
 $this->load->view('Header');
 $this->load->view('Beranda');
 $this->load->view('Footer');
 $this->load->view('Adminhome');
 
 }

}