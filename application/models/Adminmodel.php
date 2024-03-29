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
	public function enquiry(){
		$this->db->select('*');
		$this->db->from('enquiry');
		$this->db->order_by("enq_id", "desc");
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
    public function contact(){
        $this->db->select('*');
        $this->db->from('contact');
        $this->db->order_by("c_id", "desc");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function carrer(){
        $this->db->select('*');
        $this->db->from('carrer');
        $this->db->order_by("ca_id", "desc");
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function testimonial(){
        $this->db->select('*');
        $this->db->from('testimonial');
        $this->db->order_by("tes_id", "desc");
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
    public function editactivity($activity_id){
        $this->db->select('*');
        $this->db->from('activity');
        $this->db->where('activity_id', $activity_id);
        $this->db->order_by("activity_id", "desc");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
	public function insert_common($table,$data){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}
    public function insert_gallery($table,$img_name1,$user_id)
    {

        if($img_name1){
            foreach ($img_name1 as $img) {

                $data = array(
                    'user_id'=>$user_id,
                    'gym_gallery'=>$img,
                );

                $query = $this->db->insert($table,$data);
            }

            if($query==true)
            {
                return true;
            }
            else
            {
                return false;
            }
        }else{
            return false;

        }
    }
//================================================

	public function amenities(){
		$this->db->select('*');
		$this->db->from('amenities');
		$this->db->order_by("amentities_id", "desc");
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
    public function activity(){
        $this->db->select('*');
        $this->db->from('activity');
        $this->db->order_by("activity_id", "desc");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function healthcheckup(){
        $this->db->select('*');
        $this->db->from('health');
        $this->db->order_by("health_id", "desc");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
	public function eventlist(){
    $this->db->select('*');
    $this->db->from('event');
    $this->db->order_by("event_id", "desc");
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
    public function transaction(){
        $this->db->select('*');
        $this->db->from('booking');
        $this->db->where('status=1');
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
    public function allgym(){
        $this->db->select('*');
        $this->db->from('gym');
        $this->db->order_by("gym_id", "desc");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function lauch_offerlist(){
        $this->db->select('*');
        $this->db->from('launch_offer');
        $this->db->order_by("deal_id", "desc");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    public function totalgym(){

        $this->db->select('*');
        $this->db->from('gym');
        $this->db->order_by("id", "desc");
        $query = $this->db->get();

        $result = $query->result_array();
        return $result;
    }
    public function totaluser(){

        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by("id", "desc");
        $this->db->where('user_type=1');
        $query = $this->db->get();

        $result = $query->result_array();
        return $result;
    }

    public function cupconlist(){
        $this->db->select('*');
        $this->db->from('coupon');
        $this->db->order_by("coupon_id", "desc");
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    function gym_detail(){

        $q= $this->db->select()
            ->from('gym')
            ->get();

        return $q->result();
    }

//=======date filter ===============
    public function datefilter($gymid, $date1 ,$date2){

        if($date1 && $date2) {

            $query = $this->db->select()
                ->where(array('gym_id'=> $gymid, 'status'=>'1'))
                ->where('cur_date >=', $date1)
                ->from('booking')
                ->where('cur_date <=', $date2)
                ->get();
            $result = $query->result_array();
        }else{
            $query = $this->db->select()
                ->where(array('gym_id'=> $gymid, 'status'=>'1'))
                ->from('booking')
                ->get();

            $result = $query->result_array();
        }
        return $result;

    }
//====================================
}
