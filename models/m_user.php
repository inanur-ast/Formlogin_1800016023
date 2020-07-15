<?php 

class M_user extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}
}