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
        $this->db->join('gymPrice', 'gymPrice.user_id = gym.user_id');
        $this->db->where('gym.is_active', 1);
        $this->db->order_by("gym.createdAt", "desc");
        $this->db->limit(6);
        $query = $this->db->get();

        $result = $query->result();
        $this->db->select('*');
        $this->db->from('category');
        $this->db->order_by("createdAt", "desc");
        $this->db->limit(8);
        $category = $this->db->get();
        $categoryList = $category->result();

        $this->db->select('*');
        $this->db->from('testimonial');
        $this->db->order_by("tes_id", "desc");
        $testimonial = $this->db->get();
        $testimonial = $testimonial->result();

        $response= array(
            'gym'=>$result,
            'category'=>$categoryList,
            'testimonial'=>$testimonial
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
        $this->db->from('gymPrice');
        $this->db->where('gym_id', $id);
        $query = $this->db->get();
        $gymprice = $query->result();


        $this->db->select('*');
        $this->db->from('gym_amenities');
        $this->db->where('gym_id', $id);
        $query = $this->db->get();
        $aminities = $query->result();
        $data['gym']=$result;
        $data['aminities']=$aminities;
        $data['gymprice']=$gymprice;
        $this->load->view('list_detail',$data);
    }
    public function payment()
    {
        if ($_SESSION['session_id'])
        {
            $gender = $_POST['gender'];
            $checkIn = $_POST['checkIn'];
            $checkOut = $_POST['checkOut'];
            $gymId = $_POST['gymId'];
            $gymPrice = $_POST['gymPrice'];
            $gymImage = $_POST['gymImage'];
            $gym_address = $_POST['gym_address'];
            $gymName = $_POST['gymName'];
            $gymUserID = $_POST['gymUserID'];
            $personValue = $_POST['personValue'];
            $query = $this->db->get('insurance');
            $result = $query->result();

            $userProfile = $this->db->get_where('profile_user', array('user_id' => $_SESSION['session_id']));
            $userPhone = $this->db->get_where('user', array('id' => $_SESSION['session_id']));

            $userData = $userProfile->result();
            $userMobile = $userPhone->result();

            $this->db->select('*');
            $this->db->from('gymPrice');
            $this->db->where('gym_id', $gymId);
            $query = $this->db->get();
            $allprice = $query->result();

            $data=array(
                'gender'=>$gender,
                'gymId'=>$gymId,
                'price'=>$gymPrice,
                'allprice'=>$allprice,
                'image'=>$gymImage,
                'address'=>$gym_address,
                'gymName'=>$gymName,
                'gymUserID'=>$gymUserID,
                'person'=>$personValue,
                'checkIn'=>$checkIn,
                'checkOut'=>$checkOut,
                'user'=>$userData,
                'insurance'=>$result[0]->insurance_value,
                'userMobile'=>$userMobile[0]->mobile,
                'userName'=>$userMobile[0]->owner_name,
            );
            $this->load->view('payment',$data);
        }
        else
        {
            redirect('Auth/login');
        }

    }
    public function bmi(){
        $this->load->view('bmi.php');
    }
    public function story()
    {
        $this->load->view('story');
    }
    public function login()
    {
        $this->load->view('login');
    }
    public function register()
    {
        $this->load->view('register');
    }
    public function forgot()
    {
        $this->load->view('forgot');
    }
    public function forgototp()
    {
        $this->load->view('forgototp');
    }
    public function password()
    {
        $this->load->view('password');
    }
    public function otpverify()
    {
	    $this->load->view('otpverify');
    }
    public function healthcheckup()
    {
        $data['message']=$this->GogymModel->healthcheckup();

        $this->load->view('healthcheckup.php',$data);
    }
    public function thankyou()
    {
        $this->load->view('thankyou');
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
        $data['message']=$this->Adminmodel->eventlist();
        $this->load->view('upcoming_event.php',$data);
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
        $data['message']=$this->GogymModel->launchoffer();
        $this->load->view('launch_offer.php',$data);
    }
    public function carrer()
    {
        $this->load->view('carrer');
    }
	public function dashboard()
	{
		$user_id=$_SESSION['session_id'];
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

        $categoryList = $this->db->get('category');
        $category = $categoryList->result();

        $gymPrice = $this->db->get_where('gymPrice', array('user_id' => $user_id));
        $gym_gallery = $this->db->get_where('gym_gallery', array('user_id' => $user_id));
        $listgymPrice = $gymPrice->result();
        $listGallery = $gym_gallery->result();

        $bookingQuery = $this->db->get_where('booking', array('gymUserID' => $user_id));
        $booking = $bookingQuery->result();

        $response= array(
			'user'=>$data,
			'profile_user'=>$data1,
			'amenities'=>$result,
			'gym'=>$result2,
			'category'=>$category,
			'gymPrice'=>$listgymPrice,
			'galleryList'=>$listGallery,
            'booking'=>$booking,
		);
		$this->load->view('dashboard.php',$response);
	}
	public function user_dashboard()
	{
		$user_id=$_SESSION['session_id'];
		$table='user';
		$where='id';
		$data=$this->GogymModel->userdetails($user_id);
		$table='profile_user';
		$where='id';
		$data1=$this->GogymModel->profiledetails($user_id);
        $query = $this->db->get('profession');
        $result = $query->result();
        $data2=$this->GogymModel->activitydetails();

        $this->db->where('user_id', $user_id); // OTHER CONDITIONS IF ANY
        $this->db->from('booking'); //TABLE NAME
        $bookingCount = $this->db->count_all_results();

        $query = $this->db->get_where('booking', array('user_id' => $_SESSION['session_id']));
        $result_booking = $query->result();
        $response= array(
			'user'=>$data,
			'profile_user'=>$data1,
            'profession'=>$result,
            'activity'=>$data2,
            'loginPop'=>true,
            'booking'=>$result_booking,
            'bookingCount'=>$bookingCount
		);
        $this->session->set_flashdata('message_name', 'Profile has been Deactive successfully!');
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
    public function delete_gallerys($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('gym_gallery');
        redirect('Gogym/dashboard');
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
        $subject1= $_POST['subject'];
        $msg= $_POST['msg'];
        $to = $_POST['email'];
        $subject = "Enquiry Details";
        $txt = "Name-".$_POST['name']."\n Mobile-".$_POST['mobile']."\n Email -".$_POST['email']."\n Subject -".$_POST['subject']."\n Message -".$_POST['msg'];
        $headers = "From: info@gogyms.in";
        mail($to,$subject,$txt,$headers);
        $table='enquiry';
        $data= array(
            'enq_name' => $name,
            'enq_email' => $email,
            'enq_mobile' => $mobile,
            'enq_subject' => $subject1,
            'enq_message' => $msg
        );
        $login=$this->Adminmodel->insert_common($table,$data);
        redirect('Gogym/index');
    }
    public function insert_carrer()
    {
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $email= $_POST['email'];
        $mobile= $_POST['mobile'];
        $dob= $_POST['dob'];
        $gender= $_POST['gender'];
        $msg= $_POST['msg'];
        $path1=  base_url().'images/';
        if(!empty($_FILES["file"]))
        {
            $upload_image1=$_FILES["file"]["name"];
            $upload1 = move_uploaded_file($_FILES["file"]["tmp_name"], "./images/".$upload_image1);
            if($upload1){
                $img_name1 = $path1.$upload_image1;
            }else{
                $img_name1 = '';
            }
        }else{
            $img_name1 = '';
        }
        $to = $_POST['email'];
        $subject = "Carrer Details";
        $txt = "First Name-".$_POST['fname']."\n Last Name-".$_POST['lname']."\n Email -".$_POST['email']."\n Mobile -".$_POST['mobile']."\n DOB -".$_POST['dob']."\n Gender -".$_POST['gender']."\n Message -".$_POST['msg'];
        $headers = "From: info@gogyms.in";
        mail($to,$subject,$txt,$headers);
        $table='carrer';
        $data= array(
            'ca_fname' => $fname,
            'ca_lname' => $lname,
            'ca_email' => $email,
            'ca_mobile' => $mobile,
            'ca_dob' => $dob,
            'ca_gender' => $gender,
            'ca_msg' => $msg,
            'ca_resume' => $img_name1
        );
        $login=$this->Adminmodel->insert_common($table,$data);
        $this->session->set_flashdata('Successfully','We Will be approve shorthly');
        redirect('Gogym/carrer');
    }
    public function insert_contact()
    {
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $email= $_POST['cemail'];
        $mobile= $_POST['cmobile'];
        $msg= $_POST['cmsg'];
        $to = $_POST['cemail'];
        $subject = "Contact Details";
        $txt = "First Name-".$_POST['fname']."\n Last Name-".$_POST['lname']."\n Email -".$_POST['cemail']."\n Mobile -".$_POST['cmobile']."\n Message -".$_POST['cmsg'];
        $headers = "From: info@gogyms.in";
        mail($to,$subject,$txt,$headers);
        $table='contact';
        $data= array(
            'c_fname' => $fname,
            'c_lname' => $lname,
            'c_email' => $email,
            'c_mobile' => $mobile,
            'c_msg' => $msg
        );
        $login=$this->Adminmodel->insert_common($table,$data);
        redirect('Gogym/contact');
    }

    public function saveGymplan (){
        $dailyprice = $this->input->post('dailyprice');
        $weeklyprice = $this->input->post('weeklyprice');
        $monthlyprice = $this->input->post('monthlyprice');
        $yearlyprice = $this->input->post('yearlyprice');
        $user_id = $_SESSION['session_id'];
        if(empty($dailyprice)&& empty($weeklyprice)&& empty($monthlyprice) && empty($yearlyprice)){
            $this->session->set_flashdata('Successfully','All fields are required!');
            redirect('Gogym/dashboard');
        }else{
            $data = array(
                'dailyPrice'=>$dailyprice,
                'weeklyPrice'=>$weeklyprice,
                'monthlyPrice'=>$monthlyprice,
                'yearlyPrice'=>$yearlyprice,
                'user_id'=>$user_id,
            );
            $this->db->select('*');
            $this->db->where('user_id', $user_id);
            $query = $this->db->get('gymPrice');
            $cnt= $query->num_rows();
            if($cnt===0){
                $table='gymPrice';
                $login=$this->Adminmodel->insert_common($table,$data);
                $this->session->set_flashdata('Successfully','Price save successfully');
                redirect('Gogym/dashboard');
            }else{
                $this->db->where('user_id', $user_id);
                $this->db->update('gymPrice', $data);
                $this->session->set_flashdata('Successfully','Price update successfully');
                redirect('Gogym/plan_add');
            }


        }

    }
    public function saveGallery (){
        $user_id = $this->input->post('id');
        $path1=  base_url().'images/';
        $upload_image1=$_FILES["gallery"]["name"];
        if(!empty($upload_image1)){
            if(!empty($_FILES["gallery"]))
            {
                $upload_image1=$_FILES["gallery"]["name"];
                $upload1 = move_uploaded_file($_FILES["gallery"]["tmp_name"], "./images/".$upload_image1);
                if($upload1){
                    $img_name1 = $path1.$upload_image1;
                }else{
                    $img_name1 = '';
                }
            }else{
                $img_name1 = '';
            }

            $data = array(
                'user_id'=>$user_id,
                'gym_gallery'=>$img_name1,
            );

            $table='gym_gallery';
            $this->Adminmodel->insert_common($table,$data);
            $this->session->set_flashdata('Successfully','Gallery Save successfully');
            redirect('Gogym/dashboard');
        }else{
            $this->session->set_flashdata('Successfully','Please fill all required fields');
            redirect('Gogym/dashboard');
        }

    }
    public function forgotPassword(){
        $mobileNo = $this->input->post('mobileNo');

        if(empty($mobileNo)){
            $this->session->set_flashdata('Successfully','Soory! Mobile number is required!');
            redirect('Gogym/forgot');
        }else{
            $checkMobile = $this->db->get_where('user', array('mobile' =>$mobileNo));
            $result = $checkMobile->result();
            if(empty($result)){
                $this->session->set_flashdata('Successfully','Soory! This mobile number is not register!');
                redirect('Gogym/forgot');
            }else{
                $otp=rand(1000,9999);
                sms91($result[0]->mobile,$otp);
                $response = array(
                    'mobile'=>$mobileNo,
                );
                $data = array(
                    'otp'=>$otp,
                );
                $this->db->where('mobile', $mobileNo);
                $this->db->update('user', $data);
                $this->load->view('forgototp',$response);
            }
        }

    }

    public function forgotVerify(){
        $otp = $_POST['otp'];
        $mobile = $_POST['mobile'];
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('mobile', $mobile);
        $query = $this->db->get();
        $result = $query->result_array();
        $existsotp = $result[0]['otp'];
        if($existsotp==$otp) {
            $data = array(
                'is_forgot' => '1',
            );
            $this->db->where('mobile', $mobile);
            $this->db->update('user', $data);
            $this->session->set_flashdata('Successfully','Otp verify please enter password and confirm password');
            $respone = array(
                'mobile' => $mobile,
            );
            $this->load->view('password',$respone);
        }else{
            $this->session->set_flashdata('Successfully','Soory! Otp is wrong!');
            redirect('Gogym/forgototp');

        }
    }
    public function changePassword(){
        $password = $_POST['password'];
        $confirm_password = $_POST['confirmPassword'];
        $mobile = $_POST['mobile'];
        if($password!=$confirm_password){
            $this->session->set_flashdata('Successfully','Soory! password and confirm password not matched!');
            redirect('Gogym/password');
        }else{
            $data = array(
                'password'=>md5($password),
            );
            $this->db->where('mobile', $mobile);
            $this->db->update('user', $data);
            $this->session->set_flashdata('Successfully','Thanks! password reset successfully');
            redirect('Auth/login');
        }
    }

    public function booking(){
        $name = $_POST['name'];
        $checkIn = $_POST['checkIn'];
        $checkout = $_POST['checkout'];
        $person = $_POST['person'];
        $gymId = $_POST['gymId'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $gymUserID = $_POST['gymUserID'];
        $user_id = $_SESSION['session_id'];
        $plan_type = $_POST['plantype'];
        $bookingDate = $date = date('d-m-Y');




        $order_id = 'ORD'.$otp=rand(1000,9999);

        $query = $this->db->get_where('gym', array('gym_id' => $gymId));

        $result = $query->result();

        $gymuser = $this->db->get_where('user', array('id' => $result[0]->user_id));

        $result2 = $gymuser->result();

        $gymMobile = $result2[0]->mobile;

        $verification=rand(1000,9999);
        $query = $this->db->get_where('user',array('id' => $_SESSION['session_id']));

        $result = $query->result();

        $ownername = $result[0]->owner_name;

        ownerSms($gymMobile,$verification,$ownername,$order_id);

        sms91($mobile,$verification);
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'user_id'=>$user_id,
            'mobile'=>$mobile,
            'checkin'=>$checkIn,
            'checkout'=>$checkout,
            'gymUserID'=>$gymUserID,
            'no_person'=>$person,
            'order_id'=>$order_id,
            'cur_date'=>$bookingDate,
            'gym_id'=>$gymId,
            'verificationCode'=>$otp,
            'plan_type'=>$plan_type,
        );
        $this->db->insert('booking', $data);
        $response = array(
          'userName'=>$name,
          'bookingId'=>$order_id,
          'Verification'=>$verification,
        );
        $this->load->view('thankyou',$response);
    }

    public function user_profile($id){
        $table='user';
        $where='id';
        $data=$this->GogymModel->userdetails($id);
        $table='profile_user';
        $where='id';
        $data1=$this->GogymModel->profiledetails($id);
        $res = array(
            'user'=>$data,
            'profile_user'=>$data1,
        );
        $this->load->view('user_profile.php',$res);
    }
    public function dailytrackreport(){
        $data2=$this->GogymModel->activitydetails();
        $query = $this->db->get_where('booking', array('user_id' => $_SESSION['session_id']));
        $result = $query->result();
        $data =array(
            'booking'=>$result,
            'activity'=>$data2
        );
        $this->load->view('dailytrackreport.php',$data);
    }
    public function dailytrackreportlist(){
        $query = $this->db->get_where('trackReport',array('user_id' => $_SESSION['session_id']));
        $result = $query->result();
        $data =array(
            'report'=>$result
        );
	    $this->load->view('dailytrackreportlist.php',$data);
    }
    public function partner_profile(){
        $query = $this->db->get_where('user',array('id' => $_SESSION['session_id']));
        $result = $query->result();
        $data =array(
            'user'=>$result
        );
        $this->load->view('partner_profile.php',$data);
    }
    public function addgallery(){
        $query = $this->db->get_where('user',array('id' => $_SESSION['session_id']));
        $result = $query->result();
        $data =array(
            'user'=>$result
        );
        $this->load->view('addgallery.php',$data);
    }
    public function listgallery(){
        $query = $this->db->get_where('user',array('id' => $_SESSION['session_id']));
        $query1 = $this->db->get_where('gym_gallery',array('user_id' => $_SESSION['session_id']));
        $result = $query->result();
        $result1 = $query1->result();
        $data =array(
            'user'=>$result,
            'galleryList'=>$result1,
        );
        $this->load->view('listgallery.php',$data);
    }
    public function bookingdetails(){
        $query = $this->db->get_where('booking',array('gymUserID' => $_SESSION['session_id']));
        $result = $query->result();


        $query1 = $this->db->get_where('user',array('id' => $_SESSION['session_id']));
        $result1 = $query1->result();



        $data =array(
            'bookingDetail'=>$result,
            'user'=>$result1
        );
        $this->load->view('bookingdetails.php',$data);
    }
    public function gym_details(){
        $query = $this->db->get_where('user',array('id' => $_SESSION['session_id']));
        $query1 = $this->db->get_where('gym',array('user_id' => $_SESSION['session_id']));

        $result = $query->result();
        $result1 = $query1->result();
        $data =array(
            'user'=>$result,
            'gym'=>$result1,
        );
        $this->load->view('gym_details.php',$data);
    }
    public function plan(){
        $query = $this->db->get_where('user',array('id' => $_SESSION['session_id']));
        $query1 = $this->db->get_where('gymPrice',array('user_id' => $_SESSION['session_id']));
        $result = $query->result();
        $result1 = $query1->result();
        $data =array(
            'user'=>$result,
            'plan'=>$result1,
        );
        $this->load->view('plan.php',$data);
    }
    public function plan_add(){
        $this->load->view('plan_add.php');
    }
    public function plan_edit(){
        $query1 = $this->db->get_where('gymPrice',array('user_id' => $_SESSION['session_id']));
        $result1 = $query1->result();
        $data =array(
            'gymPrice'=>$result1,
        );
	    $this->load->view('plan_edit.php',$data);
    }
    public function gym_edit($id){

        $query = $this->db->get_where('gym',array('gym_id' => $id));
        $result = $query->result();
        $data =array(
            'profile_user'=>$result
        );
        $this->load->view('gym_edit.php',$data);
    }
    public function gym_add(){

        $query = $this->db->get('amenities');
        $result = $query->result();

        $this->db->select('*');
        $this->db->from('gym');
        $this->db->join('gym_amenities', 'gym_amenities.gym_id = gym.gym_id');
        $query2 = $this->db->get();
        $result2 = $query2->result();

        $categoryList = $this->db->get('category');
        $category = $categoryList->result();
        $data = array(
            'amenities'=>$result,
            'gym'=>$result2,
            'category'=>$category,
        );

        $this->load->view('gym_add.php',$data);
    }
    public function gym_view($id){
        $query = $this->db->get_where('gym',array('gym_id' => $id));
        $result = $query->result();
        $data =array(
            'profile_user'=>$result
        );
        $this->load->view('gym_view.php',$data);
    }


    public function search(){
        $address = $_POST['address'];
        $gymCategory = $_POST['gymCategory'];
    }
    public function trackReport(){
        $data = array(
            'weight'=>$_POST['weight'],
            'user_id'=>$_SESSION['session_id'],
            'checkinDate'=>$_POST['checkinDate'],
            'checkIntime'=>$_POST['checkIntime'],
            'pressurehigh'=>$_POST['pressurehigh'],
            'pressurelow'=>$_POST['pressurelow'],
            'heartrate'=>$_POST['heartrate'],
            'activity1'=>$_POST['activity1'],
            'activity2'=>$_POST['activity2'],
            'activity3'=>$_POST['activity3'],
            'activity4'=>$_POST['activity4'],
            'activity5'=>$_POST['activity5'],
            'activity6'=>$_POST['activity6'],
            'activity7'=>$_POST['activity7'],
            'activity8'=>$_POST['activity8'],
            'activity9'=>$_POST['activity9'],
            'activity10'=>$_POST['activity10'],
            'remark'=>$_POST['remark'],
            'outtime'=>$_POST['outtime'],

    );
        $this->db->insert('trackReport', $data);
        $this->session->set_flashdata('Successfully','Report save successfully');
        redirect('Gogym/user_dashboard');
    }
    public function login_partner(){
	    $this->load->view('login_partner.php');
    }
    public function register_partner(){
	    $this->load->view('register_partner.php');
    }
    public function tokenmoney(){
        $this->load->view('tokenmoney/TxnTest');
    }
    public function placeorderonline(){
        $this->load->view('TxnTest.php');
    }
    public function pgRedirect(){
        $this->load->view('pgRedirect.php');
    }
    public function pgresoponse(){
         $this->load->view('pgResponse.php');
    }
}
