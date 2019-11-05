<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gogym extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('GogymModel');
        $this->load->model('Gympagination');
        $this->load->library('pagination');
        $this->load->model('Adminmodel');
    }
	public function index()
	{
        $this->db->select('*');
        $this->db->from('gym');
        $this->db->where('is_active', 1);
        $this->db->order_by("createdAt", "desc");
        $this->db->limit(6);
        $query = $this->db->get();
        $result = $query->result();
        $this->db->select('*');
        $this->db->from('category');
        $this->db->order_by("createdAt", "desc");
        $this->db->limit(8);
        $category = $this->db->get();
        $categoryList = $category->result();

        $response= array(
            'gym'=>$result,
            'category'=>$categoryList,
        );
        $this->load->view('index',$response);
	}
	public function about()
	{
		$this->load->view('about');
	}
    public function contact()
    {
        $this->load->view('contact');
    }
    public function lists()
    {
        $config = array();
        $config["base_url"] = base_url() . "lists";
        $config["total_rows"] = $this->Gympagination->get_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 2;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['gym'] = $this->Gympagination->get_authors($config["per_page"], $page);
        $this->db->select('*');
        $this->db->from('category');
        $this->db->order_by("createdAt", "desc");
        $this->db->limit(8);
        $category = $this->db->get();
        $categoryList = $category->result();
        $data['category']=$categoryList;
        $this->load->view('list',$data);
    }

    public function list_detail($id)
    {
        $this->db->select('*');
        $this->db->from('gym');
        $this->db->where('is_active', 1);
        $this->db->where('gym_id', $id);
        $query = $this->db->get();
        $result = $query->result();

        $this->db->select('*');
        $this->db->from('gym_amenities');
        $this->db->where('gym_id', $id);
        $query = $this->db->get();
        $aminities = $query->result();
        $data['gym']=$result;
        $data['aminities']=$aminities;
        $this->load->view('list_detail',$data);
    }
    public function payment()
    {
        $query = $this->db->get('insurance');
        $result = $query->result();
        $data['insurance']=$result;
        $this->load->view('payment',$data);
    }
    public function story()
    {
        $this->load->view('story');
    }
    public function team()
    {
        $query = $this->db->get('team');
        $result = $query->result();
        $data['team']=$result;
        $this->load->view('team',$data);
    }
    public function rules_regulation()
    {
        $this->load->view('rules_regulation');
    }
    public function rules_regulation_policy()
    {
        $this->load->view('rules_regulation_policy');
    }
    public function termination_policy()
    {
        $this->load->view('termination_policy');
    }
    public function refund_cancellation_policy()
    {
        $this->load->view('refund_cancellation_policy');
    }
    public function disclaimer()
    {
        $this->load->view('disclaimer');
    }
    public function upcoming_event()
    {
        $this->load->view('upcoming_event');
    }
    public function gogyms_diet()
    {
        $query = $this->db->get('diet');
        $result = $query->result();
        $data['diet']=$result;
        $this->load->view('gogyms_diet',$data);
    }
    public function launch_offer()
    {
        $this->load->view('launch_offer');
    }
    public function carrer()
    {
        $this->load->view('carrer');
    }
	public function dashboard()
	{
		$user_id=$_GET['user_id'];
		$table='user';
		$where='id';
		$data=$this->GogymModel->userdetails($user_id);
		$table='gym';
		$where='user_id';
		$data1=$this->GogymModel->profileownerdetails($user_id);
        $query = $this->db->get('amenities');
        $result = $query->result();
        $this->db->select('*');
        $this->db->from('gym');
        $this->db->join('gym_amenities', 'gym_amenities.gym_id = gym.gym_id');
        $query2 = $this->db->get();
        $result2 = $query2->result();
        $categoryList = $this->db->get('category');  // Produces: SELECT * FROM mytable
        $category = $categoryList->result();

        $response= array(
			'user'=>$data,
			'profile_user'=>$data1,
			'amenities'=>$result,
			'gym'=>$result2,
			'category'=>$category,
		);
		$this->load->view('dashboard.php',$response);
	}
	public function user_dashboard()
	{
		$user_id=$_GET['user_id'];
		$table='user';
		$where='id';
		$data=$this->GogymModel->userdetails($user_id);
		$table='profile_user';
		$where='id';
		$data1=$this->GogymModel->profiledetails($user_id);
        $query = $this->db->get('profession');
        $result = $query->result();
        $response= array(
			'user'=>$data,
			'profile_user'=>$data1,
            'profession'=>$result
		);
		$this->load->view('user_dashboard.php',$response);
	}

    public function gym($id)
    {
        $user_id=$_GET['user_id'];
        $table='user';
        $where='id';
        $data=$this->GogymModel->userdetails($user_id);
        $table='profile_user';
        $where='id';
        $data1=$this->GogymModel->profiledetails($user_id);
        $query = $this->db->get('profession');
        $result = $query->result();
        $response= array(
            'user'=>$data,
            'profile_user'=>$data1,
            'profession'=>$result
        );
        $this->load->view('user_dashboard.php',$response);
    }

    public function filter(){
        $id = $this->input->post('id');
        $this->db->select('*');
        $this->db->from('gym');
        $this->db->join('gym_category', 'gym_category.gym_id = gym.gym_id');
        $this->db->where('gym_category.categoryName',$id);
        $this->db->where('gym.is_active',1);
        $category = $this->db->get();
        $categoryList = $category->result();
        $data['gym']=$categoryList;
        $this->load->view('filter',$data);
    }
    public function locationFilter(){
        $location = $this->input->post('location');
        $this->db->select('*');
        $this->db->from('gym');
        $this->db->where('gymCity',$location);
        $this->db->where('gym.is_active',1);
        $category = $this->db->get();
        $categoryList = $category->result();
        $data['gym']=$categoryList;
        $this->load->view('filter',$data);
    }

    public function searchLocation(){
        $location = $this->input->post('location');
        $data = $this->Gympagination->searchLocation($location);
        echo json_encode($data);
    }
    public function insert_enquiry()
    {
        $name= $_POST['name'];
        $email= $_POST['email'];
        $mobile= $_POST['mobile'];
        $subject= $_POST['subject'];
        $msg= $_POST['msg'];

        $table='enquiry';
        $data= array(
            'enq_name' => $name,
            'enq_email' => $email,
            'enq_mobile' => $mobile,
            'enq_subject' => $subject,
            'enq_message' => $msg
        );
        $login=$this->Adminmodel->insert_common($table,$data);
        redirect('Gogym/index');
    }

}
