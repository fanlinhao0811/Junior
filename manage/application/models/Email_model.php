<?php

class Email_model extends CI_Model
{
			public function add($email,$title,$plus,$content,$user){
				$this->db->insert('t_email',array(
					'email_name'=>$email,
					'title'=>$title,
					'plus'=>$plus,
					'content'=>$content,
					'no'=>$user->no

				));
				return $this->db->affected_rows();
		}

		public function get_email_list($offset,$page_size,$user){
						$this->db->select('*');
						$this->db->from('t_email a');
						$this->db->where('a.no',$user->no);
						// $this->db->join('t_user t', 'a.no = t.no');
						$this->db->limit($page_size, $offset);
						$query = $this->db->get();
		
						return $query->result();
				}
		public function get_count_email(){
						
						return $this->db->count_all('t_email');
								}
								public function del_book($no){
									$this->db->where_in('no',$no);
									$this->db->delete('t_book');
									return $this->db->affected_rows();
											}

								
		public function get_book_list(){
					
						$this->db->select('*');
						$this->db->from('t_book');
						$query = $this->db->get();
						return $query->result();
								}

								public function get_info_list(){
									
										$this->db->select('*');
										$this->db->from('t_check');
										$query = $this->db->get();
										return $query->result();
												}

							

}