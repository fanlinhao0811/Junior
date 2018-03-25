<?php

class Email_model extends CI_Model
{

    public function get_email_list(){
			
							$this->db->select('*');
							$this->db->from('t_email a');
							$this->db->join('t_user t', 'a.no = t.no');
			
							$query = $this->db->get();
			
			//        $query = $this->db->query($sql);
							return $query->result();
					}

   

}