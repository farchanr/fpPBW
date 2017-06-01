<?php 
class ShoppingCart extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
	}
	public function buy($kode_barang){
		$barang = $this->My_Model->get_barang("where kode_barang = " . $kode_barang);
		$data = array(
			'id' => $barang[0]['kode_barang'],
			'qty' =>1,
			'price' =>$barang[0]['harga'],
			'name' =>$barang[0]['nama_barang']);
		$this->cart->insert($data);
		redirect(base_url('index.php/MyController/pesan'));

	}

	function delete($rowid){
		$this->cart->update(array('rowid' => $rowid, 'qty' => 0));
		redirect(base_url('index.php/MyController/pesan'));
			}

	function update(){
		$i = 1;
		foreach ($this->cart->contents() as $barang) {
			# code...
			$this->cart->update(array('rowid' => $barang['rowid'], 'qty' => $this ->input-> post('qty'.$i)));
			$i++;
		}
		$this->load->view('Cart');
		
	}

	function order(){
		$notif['status'] = "";
		$this->load->view('Checkout', $notif);
	}

	function insert_cart(){

	
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
		
		$isProcess = $this->My_Model->addOrder($nama, $email, $address);
		
		if($isProcess) {
            $this->cart->destroy();
            redirect('index.php/MyController/Formbeli');
        } else {
            $this->session->set_flashdata('error', 'Maaf, order Anda tidak dapat diproses');
        }
	}
}