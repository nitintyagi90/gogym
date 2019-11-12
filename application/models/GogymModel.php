<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class GogymModel extends CI_Model
{
	public function select_common_where($table,$where,$id){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where,$id);		
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	public function userdetails($user_id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id',$user_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function profiledetails($user_id){
		$this->db->select('*');
		$this->db->from('profile_user');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		//echo $this->db->last_query();die();
		$result = $query->result();
		return $result;
	}
	public function profileownerdetails($user_id){
		$this->db->select('*');
		$this->db->from('gym');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
    public function healthcheckup(){
        $this->db->select('*');
        $this->db->from('health');
        $this->db->order_by("health_id", "desc");
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function launchoffer(){
        $this->db->select('*');
        $this->db->from('launch_offer');
        $this->db->order_by("deal_id", "desc");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
	public function admin_log($data,$table)
	{
		$ads = array();
		$this->db->select('*');
		$this->db->where('mobile',$data['mobile']);
		$this->db->where('password',md5($data['password']));
		$fetch_query= $this->db->get($table);
		$query=$fetch_query->result();
		foreach ($query as $row)
		{
			$ads = $row;
		}
		return $ads;
	}
}

