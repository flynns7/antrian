<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitor extends CI_Controller {

	public function index()
	{
		$data['data_slider'] = $this->db->where(array('status' => 'Enable'))->order_by('sort_order','DESC')->get('slider')->result_array();
		$this->load->view('view_monitor',$data);
	}

	public function get_data(){

		$array_monitor = array();
		$tanggal = date('Y-m-d');
		$data_user = $this->db->where(array('status' => 'on'))->get('user')->result_array();
		foreach ($data_user as $data) {
		$query = $this->db->query('SELECT max(nomor) as nomor,antrian.status as status, antrian.user_id as user_id, nama, loket_temp FROM antrian LEFT JOIN user ON antrian.user_id = user.user_id WHERE tanggal = "'.$tanggal.'" AND antrian.status = "servicing" AND antrian.user_id = '.$data['user_id']);	

		if (in_array('null', $query->result_array())) {
			
		}else{
			array_push($array_monitor, $query->row());
		}

		}
		echo json_encode($array_monitor);

	}
}
