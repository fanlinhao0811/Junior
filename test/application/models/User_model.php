<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/1/11
 * Time: 11:30
 */

class User_model extends CI_Model
{

    public function add($name){
    $this->db->insert('test',array(
    'name'=>$name
    ));
    return $this->db->affected_rows();
    }
    public function user_list(){
        $query = $this -> db -> get_where("test",array('name'=>'61'));

        return $query->result();
    }
    public function del_user($id){
        $this->db->delete('test', array('id' => $id));
        return $this->db->affected_rows();
    }

    public function get_user_by_id($id){
        $query = $this->db->get_where('test', array('id' => $id));
        return $query->row();
    }

    public function update($id,$name){
        $this->db->where('id', $id);
        $this->db->update('test', array(
            "name" => $name,
        ));
        return $this->db->affected_rows();
    }
}
?>