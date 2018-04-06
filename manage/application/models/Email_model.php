<?php

class Email_model extends CI_Model
{
			public function add($email,$title,$plus,$content,$user){
				$this->db->insert('t_email',array(
					'email_name'=>$email,
					'title'=>$title,
					'plus'=>$plus,
					'content'=>$content,
					's_email'=>$user->email
				));
				return $this->db->affected_rows();
	    	}
			public function add_job($no,$name,$job,$job_class){
		  	$this->db->insert('t_job',array(
				  'no'=>$no,
			  	'name'=>$name,
			  	'job'=>$job,
			  	'class'=>$job_class
		  	));
		  	return $this->db->affected_rows();
				}
			public function add_data($data,$content1,$content2){
				$this->db->insert('t_data',array(
					'data'=>data,
					'content1'=>$content1,
					'content2'=>$content2
				));
				return $this->db->affected_rows();
				}
			public function add_book($name,$pwd,$privilege,$tel,$email,$job,$address){
				$this->db->insert('t_book',array(
					'name'=>$name,
					'password'=>$pwd,
					'privilege'=>$privilege,
					'tel'=>$tel,
					'email'=>$email,
					'job'=>$job,
					'address'=>$address
				));
				return $this->db->affected_rows();
				}
	    public function add_dep($no,$name,$leader,$plus){
	    	$this->db->insert('t_department',array(
		    	'dep_no'=>$no,
		    	'name'=>$name,
          'leader'=>$leader,
		    	'plus'=>$plus
	    	));
  	  	return $this->db->affected_rows();
				}
			public function add_adv($short,$class,$content){
				$this->db->insert('t_rules',array(
					'short'=>$short,
					'class'=>$class,
					'content'=>$content
				));
				return $this->db->affected_rows();
				}
			public function add_suggest($name,$content,$uname,$time){
				$this->db->insert('t_suggest',array(
					'name'=>$name,
					'content'=>$content,
					'uname'=>$uname,
					'time'=>$time
				));
				return $this->db->affected_rows();
				}
			public function apply_m($no,$job,$name,$content){
				$this->db->insert('t_apply_m',array(
					'no'=>$no,
					'job'=>$job,
					'name'=>$name,
					'content'=>$content
				));
				return $this->db->affected_rows();
				}
			public function apply_r($no,$job,$name,$content){
				$this->db->insert('t_apply_r',array(
					'no'=>$no,
					'job'=>$job,
					'name'=>$name,
					'content'=>$content
				));
				return $this->db->affected_rows();
				}
		  public function apply_re($no,$job,$name,$content){
			  $this->db->insert('t_apply_re',array(
				  'no'=>$no,
				  'job'=>$job,
				  'name'=>$name,
			  	'content'=>$content
			  ));
		  	return $this->db->affected_rows();	}
	
	
		  public function get_email_list($offset,$page_size,$user){
				$this->db->select('*');
				$this->db->from('t_email a');
				$this->db->where('a.email_name',$user->email);
				// $this->db->join('t_user t', 'a.no = t.no');
				$this->db->limit($page_size, $offset);
				$query = $this->db->get();
		
						return $query->result();
				}
			public function get_email($user){
					$this->db->select('*');
					$this->db->from('t_email a');
					$this->db->where('a.s_email',$user->email);
					$this->db->order_by('email_no','desc');
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
			public function del_adv($no){
				$this->db->where_in('no',$no);
				$this->db->delete('t_rules');
				return $this->db->affected_rows();
					}
			public function del_job($no){
				$this->db->where_in('no',$no);
				$this->db->delete('t_job');
				return $this->db->affected_rows();
				}
			public function agree($no){
					$this->db->where('no',$no);
					$this->db->update('t_apply_m', array(
						"flag" => 2,
					));
					return $this->db->affected_rows();
					}
			public function del($no){
			  	$this->db->where('no',$no);
					$this->db->update('t_apply_m', array(
						"flag" => 0,
					));
					return $this->db->affected_rows();
					}
			public function agree1($no){
						$this->db->where('no',$no);
						$this->db->update('t_apply_r', array(
							"flag" => 2,
						));
						return $this->db->affected_rows();
						}
			public function del1($no){
						$this->db->where('no',$no);
						$this->db->update('t_apply_r', array(
							"flag" => 0,
						));
						return $this->db->affected_rows();
						}
			public function agree2($no){
							$this->db->where('no',$no);
							$this->db->update('t_apply_re', array(
								"flag" => 2,
							));
							return $this->db->affected_rows();
							}
			public function del2($no){
							$this->db->where('no',$no);
							$this->db->update('t_apply_re', array(
								"flag" => 0,
							));
							return $this->db->affected_rows();
							}
			public function del_dep($no){
				$this->db->where_in('dep_no',$no);
				$this->db->delete('t_department');
				return $this->db->affected_rows();
				}
								
			public function get_book_list(){
				$this->db->select('*');
				$this->db->from('t_book');
				$query = $this->db->get();
				return $query->result();
				}
			public function get_data_a(){
				$this->db->select('*');
				$this->db->from('t_data');
				$query = $this->db->get();
				return $query->result();
				}
			public function get_apply_r(){
				$this->db->select('*');
				$this->db->from('t_apply_r a');
				$this->db->where('a.flag',1);
				$query = $this->db->get();
				return $query->result();
				}
			public function get_apply_re(){
				$this->db->select('*');
				$this->db->from('t_apply_re a');
				$this->db->where('a.flag',1);
				$query = $this->db->get();
				return $query->result();
				}
			public function get_apply_m(){
				$this->db->select('*');
				$this->db->from('t_apply_m a');
				$this->db->where('a.flag',1);
				$query = $this->db->get();
				return $query->result();
				}
			public function get_suggest(){
				$this->db->select('*');
				$this->db->from('t_suggest');
				$this->db->order_by('time','desc');
				$query = $this->db->get();
				return $query->result();
				}
			public function get_adv_list(){
				$this->db->select('*');
				$this->db->from('t_rules');
				$query = $this->db->get();
				return $query->result();
				}
			public function get_department(){
				$this->db->select('*');
				$this->db->from('t_department');
				$query = $this->db->get();
				return $query->result();
				}
			public function get_job_list(){
				$this->db->select('*');
				$this->db->from('t_job');
				$query = $this->db->get();
				return $query->result();
				}
  		public function get_info_list($user){					
				$this->db->select('*');
				$this->db->from('t_check_in a');
				$this->db->where('a.UID',$user->no);
				$this->db->order_by('time_in','desc');
				$query = $this->db->get();
				return $query->result();
				}
			public function check_in($a){
				$this->db->insert('t_check_in',$a);
				return $this->db->affected_rows();
							}

}