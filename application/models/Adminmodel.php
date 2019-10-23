<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Adminmodel extends CI_Model{

	public function admin_log($data,$table)
	{
		$ads = array();
		$this->db->select('*');
		$this->db->where('email',$data['name']);
		$this->db->where('password',$data['pass']);

		$fetch_query= $this->db->get($table);

		$query=$fetch_query->result();
		foreach ($query as $row)
		{
			$ads = $row;
		}
		return $ads;
	}

	public function listcust(){

		$this->db->select('*');
		$this->db->from('user_account');
		$this->db->order_by("id", "desc");
		$query = $this->db->get();

		$result = $query->result_array();
		return $result;
	}
	public function update_common($data,$table,$where,$amentities_id){
		$this->db->where($where,$amentities_id);
		$this->db->update($table,$data);
	}
	public function updatecust($data,$id){
		$this->db->where('id',$id);
		$this->db->update('user_account',$data);
	}
	public function DeleteMember($id){
		$this->db->where('id',$id);
		$this->db->delete('user_account');
	}
	public function insertcust($data){
		$this->db->insert('user_account',$data);
	}
	public function select_cut($id){
		$this->db->select('*');
		$this->db->where('id',$id);

		$this->db->from('user_account');

		$query = $this->db->get();

		$result = $query->result_array();
		return $result;
	}
	public function Enquiry(){
		$this->db->select('*');
		$this->db->from('enquiry');
		$this->db->order_by("id", "desc");
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	public function select_com_where($table,$where,$id){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where,$id);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	public function editamienities($amentities_id){
		$this->db->select('*');
		$this->db->from('amenities');
		$this->db->where('amentities_id', $amentities_id);
		$this->db->order_by("amentities_id", "desc");
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	public function insert_common($table,$data){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
	public function amenities(){
		$this->db->select('*');
		$this->db->from('amenities');
		$this->db->order_by("amentities_id", "desc");
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	public function profession(){
		$this->db->select('*');
		$this->db->from('profession');
		$this->db->order_by("profession_id", "desc");
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

    public function profile_approve($id){
        $this->db->select('*');
        $this->db->from('gym');
        $this->db->where('gym_id', $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    public function category(){
        $this->db->select('*');
        $this->db->from('category');
        $this->db->order_by("createdAt", "desc");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

}
