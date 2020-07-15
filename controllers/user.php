<?php 

class User extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('UserModel');
	}

	public function index(){
		$model = new UserModel();
		$data['user'] = $model->getUser();
		
		return view('user_view',$data);
	}

	public function add_new(){
		echo view('add_user_view');
	}

	public function save(){
		$model = new UserModel();
		$data = array(
			'user_id' => $this->request->getPost('user_id'),
			'user_nama' => $this->request->getPost('user_nama'),
			'user_email' => $this->request->getPost('user_email')
		);
		$model->saveUser($data);
		return redirect()->to('/user');
	}
}