<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');

		$data = array(
			'id' => $id,
			'nama' => $nama,
			'email' => $email
			);
		$this->m_data->input_data($data,'user');
		redirect('index.php/crud/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
	}
	
	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
	
		$data = array(
			'nama' => $nama,
			'email' => $email
		);
	
		$where = array(
			'id' => $id
		);
	
		$this->m_data->update_data($where,$data,'user');
		redirect('index.php/crud/index');
	}

	function delete($id){
		$where = array('id' => $id);
		$this->m_data->delete_data($where,'user');
		redirect('index.php/crud/index');
	}

}
