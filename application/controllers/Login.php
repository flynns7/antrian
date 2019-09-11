<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('view_login');
	}

	public function cek_login(){

		$username = $_POST['username'];
		$password = $_POST['password'];

		//login admin hardcode
		if ($username == 'adminantrian' AND $password == 'passwordantrian') {
			$data_session = array('nama' => $username, 'isLogin' => 'yes' );
			$this->session->set_userdata($data_session);			
		echo '3';	
		}else{//end of login admin hardcode

		$cek_ip = $this->db->query('SELECT no_loket, ip_address FROM loket WHERE ip_address = "'.$_SERVER['REMOTE_ADDR'].'"');
		if ($cek_ip->num_rows() > 0) {
		$data_loket = $cek_ip->row();
		$no_loket = $data_loket->no_loket;	
		$query_cek = $this->db->where(array('username' => $username))->where(array('password' => $password))->get('user');
		if ($query_cek->num_rows() > 0) {
			$data = $query_cek->row();
			$data_session = array('nama' => $data->nama, 'isLogin' => 'yes', 'user_id' => $data->user_id, 'loket_temp' => $no_loket);
			$this->session->set_userdata($data_session);
			//update status jadi on user dan temp_loket
			$update_status = $this->db->where(array('user_id' => $data->user_id))->update('user',array('status' => 'on', 'loket_temp' => $no_loket)); 
			if (!$update_status) {
				echo '0';
			}
			echo '1';
		}else{
			echo '0';
		}


		}else{
			echo '2';
			// echo $_SERVER['REMOTE_ADDR'];
		} //end of cek loket


		}


	}

	public function logout(){
		$user_id = $this->session->userdata('user_id');
		$update_status = $this->db->where(array('user_id' => $user_id))->update('user',array('status' => 'off'));
		if (!$update_status) {
			echo '0';
		}
		$destroy = $this->session->sess_destroy();
		if (!$destroy) {
			echo '1';
		}else{
			echo '0';
		}

	}

	public function login_admin(){
		
	}
}
