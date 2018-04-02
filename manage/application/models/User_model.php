<?php

class User_model extends CI_Model
{

    public function get_user_by_name($name){
        $query = $this->db->get_where('t_book', array('name' => $name));
        return $query->result();
    }

   

}