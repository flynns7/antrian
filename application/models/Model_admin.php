<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function get_antrian_week()
	{
		$query = $this->db->query('SELECT count(nomor) AS jumlah_antrian FROM antrian WHERE tanggal BETWEEN CURDATE() - INTERVAL 7 DAY AND CURDATE()')->row();
		return $query->jumlah_antrian;
	}


	public function get_antrian_today()
	{

		$query = $this->db->query('SELECT count(nomor) AS jumlah_antrian FROM antrian WHERE tanggal = CURDATE()')->row();
		return $query->jumlah_antrian;

	}


	public function get_antrian_month()
	{
		$bulan = date('m');
		$query = $this->db->query('SELECT count(nomor) AS jumlah_antrian FROM antrian WHERE MONTH(tanggal) = '.$bulan)->row();
		return $query->jumlah_antrian;
	}


	public function get_antrian_year()
	{
		$tahun = date('Y');
		$query = $this->db->query('SELECT count(nomor) AS jumlah_antrian FROM antrian WHERE YEAR(tanggal) = '.$tahun)->row();
		return $query->jumlah_antrian;
	}

	public function get_user(){
		return $this->db->get('user')->result_array();
	}

	public function insert_user($data){
		return $this->db->insert('user',$data);
	}

	public function delete_user($user_id){
		return $this->db->where(array('user_id' => $user_id))->delete('user');
	}

	public function update_user($data,$user_id){
		return $this->db->where(array('user_id' => $user_id))->update('user',$data);
	}

	public function delete_slider($slider_id){
		return $this->db->where(array('slider_id' => $slider_id))->delete('slider');
	}

	public function get_file_slider($slider_id){
		$query = $this->db->select('gambar')->from('slider')->where(array('slider_id' => $slider_id))->get()->row();
		return $query->gambar;
	}

	public function insert_slider($data){
		return $this->db->insert('slider',$data);
	}

	public function get_slider(){
		return $this->db->get('slider')->result_array();
	}	

	public function get_loket(){
		return $this->db->get('loket')->result_array();
	}


	public function get_loket_rows(){
		return $this->db->get('loket')->num_rows();
	}

	public function insert_loket($data){
		return $this->db->insert('loket',$data);
	}

	public function update_loket($data,$loket_id){
		return $this->db->where(array('loket_id' => $loket_id))->update('loket',$data);
	}

	public function delete_loket($loket_id){
		return $this->db->where(array('loket_id' => $loket_id))->delete('loket');
	}	

}