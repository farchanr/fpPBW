<?php  

class crud extends CI_Controller {
 
 public function __construct() {
  parent::__construct();
  $this->load->model('My_Model');
 }

    public function index(){
        $data = $this->My_Model->get_barang();
        $this->load->view('Tabels', array('data' => $data));
    }

   public function do_upload($kode_barang){
        $imagee = $_FILES['image']['name'];
        
        $type = explode('.', $imagee);
		$type = strtolower($type[count($type)-1]);
		$url = "./assets/images/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
		return "";
    }

function create(){
	if (isset($_POST['btnSubmit'])){
            $target = "./assets/images/".basename($_FILES['image']['name']);
            
            $kode_barang = $_POST['kode_barang'];
            $nama_barang = $_POST['nama_barang'];
            $komposisi = $_POST['komposisi'];
            $harga = $_POST['harga'];
            $gambar = $_FILES['image']['name'];

            $data_insert = array(
                'kode_barang' => $kode_barang,
                'nama_barang' => $nama_barang,
                'komposisi' => $komposisi,
                'harga' => $harga,
                'image' => $target

            );

            
            if(is_uploaded_file($_FILES['image']['tmp_name'])){
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
                redirect ('index.php/Admin/Input');
            }
            $res = $this->db->insert('daftar_barang', $data_insert) or trigger_error(mysql_error().$sql);

            
        }
}
public function edit_data($kode_barang){
        $barang = $this->My_Model->get_barang("where kode_barang = $kode_barang");
        $data = array(
            "kode_barang" => $barang[0]['kode_barang'],
            "nama_barang" => $barang[0]['nama_barang'],
            "komposisi" => $barang[0]['komposisi'],
            
            "harga" => $barang[0]['harga'],
            
             );
        $this->load->view('mimin/Head');
        $this->load->view('mimin/Form_edit',$data);
            $this->load->view('mimin/Sidebar');

    }

    public function do_update(){
        
        $kode_barang = $this->input->post('kode_barang');
        $nama_barang = $this->input->post('nama_barang');
        $komposisi = $this->input->post('komposisi');
            
        $harga = $this->input->post('harga');
        
        $data_update = array(
            'kode_barang' => $kode_barang,
            'nama_barang' => $nama_barang,
            'komposisi' => $komposisi,
            'harga' => $harga
            ); 
        $where = $_POST['kode_barang'];
        $this->My_Model->update($data_update, $kode_barang);
        redirect('index.php/admin/tabels');

        // if($res>=1){
        //     redirect('index.php/admin/tabels');
        // }
    }

    public function do_delete($kode_barang){
        $wheree = array('kode_barang' => $kode_barang);
        $res = $this->My_Model->delete('daftar_barang',$wheree);
        if($res>=1){
            redirect('index.php/Crud/index');
        }
    }
    public function saran(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');

        $notif['status'] = "Saran anda telah kami terima";

        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['charset'] = "utf-8";
        $config['smtp_user'] = "farchan1998@gmail.com";
        $config['smtp_pass'] = "farchan614";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $config['validation'] = TRUE;

        $this->email->initialize($config);
        $this->email->to('farchan1998@gmail.com');
        $this->email->from('farchan1998@gmail.com' , 'farchan');
        $this->email->subject('Booking diterima !');
        $this->email->message('Hai, anda menerima pesan dari ' . $nama . " !" . "email : " . $email . "pesan : " . $pesan);
        $this->email->send();

        $this->load->view('Contact', $notif);
        }

 }?>