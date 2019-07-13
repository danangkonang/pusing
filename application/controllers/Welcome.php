<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		//
		$this->db->select('*');
		$this->db->from('biodata');
		$this->db->join('cities', 'cities.id = biodata.place_of_birtd_id', 'left');
		$data['hasil']= $this->db->get()->result_array();
		$this->load->view('welcome_message', $data);
	}

	public function tambah()
	{
		$this->load->view('tambah');
	}

	public function input()
	{
		$data = [
			'full_name' => $this->input->post('nama'),
			'date_of_birth' => $this->input->post('tanggal'),
			'phone_number' => $this->input->post('hp'),
			'addres' => $this->input->post('alamat'),
			'place_of_birtd_id' => $this->input->post('tempat'),
			'last_education' => $this->input->post('pendidikan'),
			'riligion' => $this->input->post('agama'),
			'hobby' => implode(",",$this->input->post('hobi'))
		];
		$this->db->insert('biodata',$data);
		redirect('welcome');
		
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$this->db->select('*');
		$this->db->from('biodata');
		$this->db->join('cities', 'cities.id = biodata.place_of_birtd_id', 'left');
		$this->db->where('id_biodata',$id);
		$data['hasil']= $this->db->get()->row_array();
		//echo '<pre>';
		//print_r($data);
		$this->load->view('update', $data);
	}

	public function hapus()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id_biodata',$id);
		$this->db->delete('biodata');
		redirect('welcome');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$data = [
			'full_name' => $this->input->post('nama'),
			'date_of_birth' => $this->input->post('tanggal'),
			'phone_number' => $this->input->post('hp'),
			'addres' => $this->input->post('alamat'),
			'place_of_birtd_id' => $this->input->post('tempat'),
			'last_education' => $this->input->post('pendidikan'),
			'riligion' => $this->input->post('agama'),
			'hobby' => implode(",",$this->input->post('hobi'))
		];
		$this->db->where('id_biodata',$id);
		$this->db->update('biodata',$data);
		redirect('welcome');
	}
}
