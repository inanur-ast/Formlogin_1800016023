<?php 

class UserModel extends CI_Model{
	protected $table = 'user';

	public function getUser($id = false){
		if ($id === false){
			return $this->findAll();
		}
		return $this->getWhere( ['user_id'=>$id] );
	}

	public function saveUser($data){
		$query = $this->db->table($this->table)->insert($data);
		return $query;
	}
}