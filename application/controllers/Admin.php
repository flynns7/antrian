<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$session_login = $this->session->userdata('isLogin');
		$session_nama  = $this->session->userdata('nama');
		if ($session_login != 'yes') {
			redirect(site_url('login'));
		}
		$this->load->model('model_admin');
	}

	public function index(){

		$data['halaman'] = 'view_dashboard';
		$data['jumlah_perhari']   = $this->model_admin->get_antrian_today();
		$data['jumlah_perminggu'] = $this->model_admin->get_antrian_week();
		$data['jumlah_perbulan']  = $this->model_admin->get_antrian_month();
		$data['jumlah_pertahun']  = $this->model_admin->get_antrian_year();
		$this->load->view('admin/page',$data);

	}

	public function login(){

		$this->load->view('admin/view_login');

	}

	public function cek_login(){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == 'adminantrian' AND $password == 'passwordantrian') {
			$array_session = array('username' => $username, 'isLogin' => 'true');
			$this->session->set_userdata($array_session);
			echo '1';
		}else{

			echo '0';
		}

	}

/////slider
	public function slider(){
		$data['data_slider'] = $this->model_admin->get_slider();
		$data['halaman'] = 'view_slider';
		$this->load->view('admin/page',$data);
	}

	public function insert_slider(){
		$judul 		      = $_POST['judul'];
		$sort_order 	  = $_POST['sort_order'];
		$path 			  = $_FILES['foto']['name'];
		$ext 			  = pathinfo($path, PATHINFO_EXTENSION);
		$gambar    		  = implode('-', explode(' ', str_replace(array('"',",","?","!","(",")"), '', $judul))).'.'.$ext;
		$status			  = $_POST['status'];

		$data = array('judul' => $judul,
					  'sort_order' => $sort_order,
					  'gambar' => $gambar,
					  'status' => $status);

		$insert = $this->model_admin->insert_slider($data);
		if (!$insert) {
			echo '0';
		}else{
			echo '1';
		}
	}

	public function edit_slider(){

	}

	public function delete_slider($slider_id){

		$file_slider = $this->model_admin->get_file_slider($slider_id);
		// $path = './asset/image/'.$file_slider;
		// if (file_exists($path)) {
		// 	echo 'it works';
		// }
		if (unlink('./asset/image/thumb/'.$file_slider) OR unlink('./asset/image/'.$file_slider)) {
		 	
		 	$delete_slider = $this->model_admin->delete_slider($slider_id);
		 	if ($delete_slider) {
		 		echo '1'; //jika berhasil delete slider di database
		 	}else{
		 		echo '0'; //jika tidak berhasil delete slider di database
		 	}
		 }else{
		 	echo '2'; //jika tidak berhasil delete file
		 } 

	}

	public function upload(){

	    $judul 			  = $_POST['judul'];
	    $nama 			  = implode('-', explode(' ', $judul));
		$path 			  = $_FILES['foto']['name'];
		$ext 			  = pathinfo($path, PATHINFO_EXTENSION);
		$foto    		  = implode('-', explode(' ', str_replace(array('"',",","?","!","(",")"), '', $judul))).'.'.$ext;

		$config['upload_path'] = './asset/image/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']	= '1000';
		$config['overwrite'] = TRUE;
		// $picture = implode('-', array_slice(explode(" ",$_FILES['article_picture']['name']),0,10));
		$config['file_name'] = $nama;	//nama_file
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';


		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto'))
		{


		$pesan_error = $this->upload->display_errors('<p>', '</p>');
		echo json_encode(array('msg' => '0', 'pesan' => $pesan));

		}else{
				//Image Resizing
		$config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
		$config['maintain_ratio'] = FALSE;
		$config['new_image']	= './asset/image/thumb/';
		$config['width'] = 350;
		$config['height'] = 233;
		$config['thumb_marker'] = '_thumb';

		$this->load->library('image_lib', $config);

		if ( ! $this->image_lib->resize()){
			$this->session->set_flashdata('message', $this->image_lib->display_errors('', ''));
		}else{

		echo json_encode(array('msg' => '1', 'pesan' => $foto));

		}

	}

	}
////// end of slider

///// user	
	public function user(){

		$data['data_user'] = $this->model_admin->get_user();
		$data['halaman'] = 'view_user';
		$this->load->view('admin/page',$data);
	}

	public function insert_user(){

		$username = $_POST['username'];
		$nama	  = $_POST['nama'];
		$password = $_POST['password'];

		$cek_username = $this->db->where(array('username' => $username))->get('user')->num_rows();

		if ($cek_username > 0) {
			echo '2';
		}else{
		$data = array('username' => $username, 'nama' => $nama, 'password' => $password, 'status' => 'off');
		$insert = $this->model_admin->insert_user($data);
		if ($insert) {
			echo '1';
		}else{
			echo '0';
		}

		}

	}

	public function edit_user($user_id){

		$query = $this->db->where(array('user_id' => $user_id))->get('user')->row();
		echo json_encode($query);

	}

	public function delete_user($user_id){

		$delete = $this->model_admin->delete_user($user_id);
		if ($delete) {
			echo '1';
		}else{
			echo '0';
		}

	}

	public function update_user(){

		$user_id 	= $_POST['user_id'];
		$username 	= $_POST['username'];
		$nama 		= $_POST['nama'];
		$password 	= $_POST['password'];
		$data = array('nama' => $nama, 'password' => $password);
		$update = $this->model_admin->update_user($data,$user_id);
		if ($update) {
			echo '1';
		}else{
			echo '0';
		}

	}
////// end of user


///// loket	
	public function loket(){

		$data['data_loket'] = $this->model_admin->get_loket();
		$data['halaman'] = 'view_loket';
		$this->load->view('admin/page',$data);
	}

	public function insert_loket(){

		$no_loket 	  = $_POST['no_loket'];
		$ip_address	  = $_POST['ip_address'];
		//cek apakah no loket sudah di input atau belum
		$cek_loket = $this->db->where(array('no_loket'=> $no_loket))->get('loket')->num_rows();
		if ($cek_loket > 0) {
			//maka loket sudah di input
			echo '3';

		}else{

		$jumlah_loket = $this->model_admin->get_loket_rows();
		if($jumlah_loket > 9){
		//jika jumlah loket yang di input melebihi 9 loket
		echo '2';	
		
		}else{

		$data = array('no_loket' => $no_loket, 'ip_address' => $ip_address);
		$insert = $this->model_admin->insert_loket($data);
		if ($insert) {
			echo '1';
		}else{
			echo '0';
		}

		}//end of validasi no loket

		}//end of validasi jumlah loket

	}

	public function edit_loket($loket_id){

		$query = $this->db->where(array('loket_id' => $loket_id))->get('loket')->row();
		echo json_encode($query);
	}

	public function update_loket(){

		$loket_id 	= $_POST['loket_id'];
		$no_loket 	= $_POST['no_loket'];
		$ip_address	= $_POST['ip_address'];

		$update = $this->model_admin->update_loket($data,$loket_id);
		if ($update) {
			echo '1';
		}else{
			echo '0';
		}

	}

	public function delete_loket($loket_id){

		$delete = $this->model_admin->delete_loket($loket_id);
		if ($delete) {
			echo '1';
		}else{
			echo '0';
		}

	}
////// end of loket

	public function laporan(){

		$data['halaman'] = 'view_laporan';
		$this->load->view('admin/page',$data);
	}


}