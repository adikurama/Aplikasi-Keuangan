<?php

class M_login extends CI_Model{
function cek_login($table,$where){
     return $this->db->get_where($table,$where);
}
public function database_input($table,$data)
{
	return $this->db->insert($table,$data);
}
}