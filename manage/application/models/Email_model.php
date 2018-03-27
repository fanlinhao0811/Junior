<?php

class Email_model extends CI_Model
{

					
					public function get_count_email(){
						
										return $this->db->count_all('t_email');
								}

					public function get_book_list(){
						
										$this->db->select('*');
										$this->db->from('t_book');
						
										$query = $this->db->get();
										return $query->result();
								}

								public function get_email_list($offset,$page_size){
									
													$this->db->select('*');
													$this->db->from('t_email a');
													$this->db->join('t_user t', 'a.no = t.no');
													$this->db->limit($page_size, $offset);
													$query = $this->db->get();
									
									//        $query = $this->db->query($sql);
													return $query->result();
											}

}