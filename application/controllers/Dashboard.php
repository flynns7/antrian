<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$session_login = $this->session->userdata('isLogin');
		$session_nama  = $this->session->userdata('nama');
		if ($session_login != 'yes') {
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$user_id  = $this->session->userdata('user_id');
		$tanggal = date('Y-m-d');
		$data['data_waiting'] = $this->get_waiting($tanggal);
		$data['data_servicing'] = $this->get_servicing($tanggal,$user_id);
		$this->load->view('view_dashboard',$data);
	}

	public function panggil_antrian(){

	$user_id  = $this->session->userdata('user_id');
	$tanggal_sekarang = date('Y-m-d');
	$get_min_waiting = $this->db->query('SELECT min(nomor) as nomor FROM antrian where status = "waiting" AND tanggal = "'.$tanggal_sekarang.'"')->row();
	$min_nomor = $get_min_waiting->nomor;

	if (empty($min_nomor)) {
		echo '0';
	}else{
	$update_status = $this->db->query('UPDATE antrian SET user_id = '.$user_id.', status = "servicing" WHERE nomor = '.$min_nomor);
	$data_waiting = $this->get_waiting($tanggal_sekarang);
	$data_servicing = $this->get_servicing($tanggal_sekarang,$user_id);
	echo json_encode(array('data_waiting' => $data_waiting, 'data_servicing' => $data_servicing));		
	}

	}

	public function get_waiting($tanggal){

		$query = $this->db->query('SELECT min(nomor) as nomor,status FROM antrian WHERE tanggal = "'.$tanggal.'" AND status = "waiting"');	
		return $query->row();	
	}

	public function get_servicing($tanggal,$user_id){

		$query = $this->db->query('SELECT max(nomor) as nomor,status FROM antrian WHERE tanggal = "'.$tanggal.'" AND status = "servicing" AND user_id = '.$user_id);	
		return $query->row();	
	}

}
