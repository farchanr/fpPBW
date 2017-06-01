<?php  

class My_Model extends CI_Model {

 function getData() {
 	$query = $this->db->get('daftar_barang');
 	return $query->result_array();

 }

  function getPesanan() {
    $query = $this->db->get('pesanan');
    return $query->result_array();

 }

 function get_barang($where="") {
 	$data = $this->db->query('SELECT * FROM daftar_barang ' . $where);
 	return $data->result_array();
 	echo var_dump($data);

 }

 function addData($tableName,$data) {
 	$this->db->insert($tableName, $data);  
// insert $data ke tabel ‘barang’
 }
 function cek_login($table,$where){
 	return $this->db->get_where($table,$where);
 }

function delete_item($item){
 $this->db->where_in('kode_barang', $item);
 $this->db->delete('daftar_barang');
}
public function save($url){
		$this->db->set('pic', $url);
		$this->db->insert('daftar_barang');
	}

public function update($data_update, $kode_barang){
		$this->db->where('kode_barang', $kode_barang);
		return $this->db->update('daftar_barang', $data_update);
	}
public function delete($tableName, $where){
		$res = $this->db->delete($tableName, $where);
		return $res;
	}

public function addOrder($email,$address, $nama){
	  $order_id = mt_rand(1,999);
        $order = array(
        	'id' => $order_id,
        	'nama' => $nama,
            'email' => $email,
            'address' => $address,
            'status' => 'Proses'
        );
        $this->db->insert('pesanan', $order);
        $this->db->where('id', $order_id);
        foreach($this->cart->contents() as $item) {
            $data = array(
                'id_detail' => $order_id,
                'barangkode' => $item['id'],
                'harga' => $item['price'],
                'qty' => $item['qty']
            );
            $this->db->insert('detail_pesanan', $data);
        }
        return TRUE;
}
}
?>
