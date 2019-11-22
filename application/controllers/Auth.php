<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'form');
		$this->load->model('GogymModel');
	}
	public function login(){
		$user_mobile = $_POST['user_mobile'];
		$user_password= $_POST['user_password'];
		$data= array(
			'mobile' => $user_mobile,
			'password' => $user_password
		);
		$table='user';
		$login=$this->GogymModel->admin_log($data,$table);
        $query = $this->db->get('profession');
        $profession = $query->result();

        if($login){
            if($login->user_type==1){
                $newdata = array(
                    'session_id'  => $login->id,
                    'session_name'  => $login->owner_name,
                    'user_type'  => $login->user_type,
                    'response' => 'true',
                );
                $table='user';
                $where='id';
                $data=$this->GogymModel->userdetails($login->id);
                $profileData=$this->GogymModel->profiledetails($login->id);

                $table='profile_user';
                $where='id';
                $response= array(
                    'user'=>$data,
                    'profession'=>$profession,
                    'profile_user'=>$profileData,
                );
                $this->session->set_userdata($newdata);
                $this->session->set_flashdata('Successfully','Login Successfully');
                $this->load->view('user_dashboard.php',$response);
            }elseif ($login->user_type==2){
                $newdata = array(
                    'session_id'  => $login->id,
                    'session_name'  => $login->owner_name,
                    'user_type'  => $login->user_type,
                    'response' => 'true',
                );
                $table='user';
                $where='id';
                $data=$this->GogymModel->userdetails($login->id);

                $table='gym';
                $where='user_id';
                $data1=$this->GogymModel->profileownerdetails($login->id);
                $query = $this->db->get('amenities');
                $result = $query->result();

                $this->db->select('*');
                $this->db->from('gym');
                $this->db->join('gym_amenities', 'gym_amenities.gym_id = gym.gym_id');
                $query2 = $this->db->get();
                $result2 = $query2->result();

                $categoryList = $this->db->get('category');
                $category = $categoryList->result();

                $bookingQuery = $this->db->get_where('booking', array('gymUserID' => $login->id));
                $booking = $bookingQuery->result();

                $response= array(
                    'user'=>$data,
                    'profile_user'=>$data1,
                    'amenities'=>$result,
                    'gym'=>$result2,
                    'category'=>$category,
                    'booking'=>$booking,
                );
                $this->session->set_userdata($newdata);
                $this->session->set_flashdata('Successfully','Login Successfully');
                $this->load->view('dashboard.php',$response);

            }
        }else{
            $this->session->set_flashdata('fail','Invalid login detail');
            redirect('gogym/login');
        }
        }


	public function logout()
	{
		session_destroy();
		redirect();
	}
	public function register()
	{
		$purpose = $_POST['purpose'];
		$otp=rand(1000,9999);
		if($purpose==1){
			$userMobile = $_POST['userMobile'];
			$userPassword=$_POST['userPassword'];
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('mobile', $userMobile);
			$query = $this->db->get();
			$result = $query->result_array();
			$existsmobile = $result[0]['mobile'];
			if($userMobile==$existsmobile){
                $this->session->set_flashdata('fail','Mobile Number already exists!');
                redirect('gogym/register');
            }else{
				$otp=rand(1000,9999);
				sms91($userMobile,$otp);

				$data = array(
					'mobile' => $userMobile,
					'password'=>md5($userPassword),
					'otp' =>$otp,
					'user_type' => $purpose,
				);
				$result = $this->db->insert('user', $data);
				$insert_id = $this->db->insert_id();
				$response = array(
				    'user_id'=>$insert_id,
                );
                $this->session->set_flashdata('Successfully','Register Successfully');
                $this->load->view('otpverify',$response);
            }
		}elseif ($purpose==2){
			$mobile = $_POST['mobile'];
			$owner_name = $_POST['owner_name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('mobile', $mobile);
			$query = $this->db->get();
			$result = $query->result_array();
			@$existsmobile = $result[0]['mobile'];
			if($existsmobile==$_POST['mobile']) {
				echo "false";
				exit();
			}else{
				$otp=rand(1000,9999);
				sms91($mobile,$otp);
				$data = array(
					'user_type' => $purpose,
					'owner_name' => $owner_name,
					'email' => $email,
					'mobile' => $mobile,
					'password'=>md5($password),
					'otp' =>$otp
				);
				$result = $this->db->insert('user', $data);
				$insert_id = $this->db->insert_id();
                $response = array(
                    'user_id'=>$insert_id,
                );
                $this->session->set_flashdata('Successfully','Register Successfully');
                $this->load->view('otpverify',$response);
			}
		}
	}
	public function otpverify(){
		$otp = $_POST['otp'];
		$id = $_POST['id'];
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('otp', $otp);
		$query = $this->db->get();
		$result = $query->result_array();
		$existsotp = $result[0]['otp'];
		$userType = $result[0]['user_type'];
		if($existsotp==$otp) {
			$data = array(
				'is_verify' => '1',
			);
			$this->db->where('id', $id);
			$this->db->update('user', $data);
            $this->session->set_flashdata('fail','Verification Done please login');
            redirect('gogym/login');
		}
		else{

			echo "false";
		}
	}
	public function profileowner(){
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$ownerName = $this->input->post('ownerName');
			$ownerEmail = $this->input->post('ownerEmail');
			$ownerMobile = $this->input->post('ownerMobile');
			$password = $this->input->post('password');
			$user_id = $this->input->post('id');
            $upload_image1=$_FILES["profileImage"]["name"];
            if(empty($upload_image1)){
                $data = array(
                    'owner_name' => $ownerName,
                    'email' => $ownerEmail,
                    'mobile' => $ownerMobile,
                    'password' => md5($password),

                );
                $this->db->where('id', $user_id);
                $this->db->update('user', $data);
                redirect("Gogym/dashboard");

            }else{
                $path1=  base_url().'images/';
                if(!empty($_FILES["profileImage"]))
                {
                    $upload_image1=$_FILES["profileImage"]["name"];
                    $upload1 = move_uploaded_file($_FILES["profileImage"]["tmp_name"], "./images/".$upload_image1);
                    if($upload1){
                        $img_name1 = $path1.$upload_image1;
                    }else{
                        $img_name1 = '';
                    }
                }else{
                    $img_name1 = '';
                }
                $data = array(
                    'owner_name' => $ownerName,
                    'email' => $ownerEmail,
                    'mobile' => $ownerMobile,
                    'password' => md5($password),
                    'profileImage' => $img_name1,
                );
                $this->db->where('id', $user_id);
                $this->db->update('user', $data);
                $userData=$this->GogymModel->userdetails($user_id);

                $response= array(
                    'user'=>$data,
                );
                redirect("Gogym/dashboard",$response);

            }
		}
	}
	public function profileuser(){
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$user_name = $this->input->post('user_name');
			$user_gender = $this->input->post('user_gender');
			$user_email = $this->input->post('user_email');
			$user_dob= $this->input->post('user_dob');
			$user_location= $this->input->post('user_location');
			$user_profession= $this->input->post('user_profession');
			$user_bloodgroup= $this->input->post('user_bloodgroup');
			$user_height_cm= $this->input->post('user_height_cm');
			$user_height_cm1 = $user_height_cm/30.48;
			$user_height_fit= $this->input->post('user_height_fit');
			$user_height_fit1 = $user_height_fit*30.48;
			$user_weight= $this->input->post('user_weight');
			$user_heart_rate= $this->input->post('user_heart_rate');
			$user_bp_low= $this->input->post('user_bp_low');
			$user_bp_high= $this->input->post('user_bp_high');
			$user_smoking= $this->input->post('user_smoking');
			$user_drinking= $this->input->post('user_drinking');
			$user_disease= $this->input->post('user_disease');
			$disease_details=$this->input->post('disease_details');
			$user_address= $this->input->post('user_address');
			$user_mobile= $this->input->post('user_mobile');
			$user_password= $this->input->post('user_password');
			$user_id= $_SESSION['session_id'];
			$path1=  base_url().'images/';
            $upload_image1=$_FILES["user_images"]["name"];
			if(empty($upload_image1)){
                $data = array(
                    'user_name' => $user_name,
                    'user_gender' => $user_gender,
                    'user_email' => $user_email,
                    'user_dob' => $user_dob,
                    'user_location' => $user_location,
                    'user_profession'=>$user_profession,
                    'user_bloodgroup' => $user_bloodgroup,
                    'user_height_cm' => $user_height_cm1,
                    'user_height_fit' => $user_height_fit1,
                    'user_weight' => $user_weight,
                    'user_heart_rate' => $user_heart_rate,
                    'user_bp_low' => $user_bp_low,
                    'user_bp_high' => $user_bp_high,
                    'user_smoking' => $user_smoking,
                    'user_drinking' => $user_drinking,
                    'user_disease' => $user_disease,
                    'disease_details' => $disease_details,
                    'user_address' => $user_address,
                    'user_id'=>$user_id
                );

                 $userdata = array(
                    'mobile' => $user_mobile,
                    'password' => $user_password,

                );
                $this->db->select('user_id');
                $this->db->where('user_id', $user_id);
                $query = $this->db->get('profile_user');
                $cnt = $query->row_array();
                $existuser = $cnt['user_id'];
                if($existuser!=$user_id){
                    $this->db->insert('profile_user', $data);
                    redirect("Gogym/user_dashboard");
                }else{
                    $this->db->where('user_id', $user_id);
                    $this->db->update('profile_user', $data);
                    $this->db->where('id', $user_id);
                    $this->db->update('user', $userdata);
                    redirect("Gogym/user_dashboard");
                }
            }else{
                if(!empty($_FILES["user_images"]))
                {
                    $upload_image1=$_FILES["user_images"]["name"];
                    $upload1 = move_uploaded_file($_FILES["user_images"]["tmp_name"], "./images/".$upload_image1);

                    if($upload1){
                        $img_name1 = $path1.$upload_image1;
                    }else{
                        $img_name1 = '';
                    }
                }else{
                    $img_name1 = '';
                }

                $data = array(
                    'user_name' => $user_name,
                    'user_gender' => $user_gender,
                    'user_email' => $user_email,
                    'user_dob' => $user_dob,
                    'user_location' => $user_location,
                    'user_profession'=>$user_profession,
                    'user_bloodgroup' => $user_bloodgroup,
                    'user_height_cm' => $user_height_cm1,
                    'user_height_fit' => $user_height_fit1,
                    'user_weight' => $user_weight,
                    'user_heart_rate' => $user_heart_rate,
                    'user_bp_low' => $user_bp_low,
                    'user_bp_high' => $user_bp_high,
                    'user_smoking' => $user_smoking,
                    'user_drinking' => $user_drinking,
                    'user_disease' => $user_disease,
                    'disease_details' => $disease_details,
                    'user_address' => $user_address,
                    'user_images' => $img_name1,
                    'user_id'=>$user_id
                );

                $userdata = array(
                    'mobile' => $user_mobile,
                    'password' => $user_password,

                );

                $this->db->select('user_id');
                $this->db->where('user_id', $user_id);
                $query = $this->db->get('profile_user');
                $cnt = $query->row_array();
                $existuser = $cnt['user_id'];
                if($existuser!=$user_id){
                    $this->db->insert('profile_user', $data);
                    redirect("Gogym/user_dashboard");
                }else{
                    $this->db->where('user_id', $user_id);
                    $this->db->update('profile_user', $data);
                    $this->db->where('id', $user_id);
                    $this->db->update('user', $userdata);
                    redirect("Gogym/user_dashboard");
                }
            }

		}
	}
    public function FacebookLogin(){

        $this->load->library('facebook'); // Automatically picks appId and secret from config
        // OR
        // You can pass different one like this
        //$this->load->library('facebook', array(
        //    'appId' => 'APP_ID',
        //    'secret' => 'SECRET',
        //    ));

        $user = $this->facebook->getUser();

        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }

        if ($user) {

            $data['logout_url'] = site_url('Auth/logout'); // Logs off application
            // OR
            // Logs off FB!
            // $data['logout_url'] = $this->facebook->getLogoutUrl();

        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('Auth/FacebookLogin'),
                'scope' => array("email") // permissions here
            ));
        }
        $this->load->view('index',$data);

    }
    public function saveGym(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $gymName = $this->input->post('gymName');
            $totalavailability = $this->input->post('totalavailability');
            $contact_name = $this->input->post('contact_name');
            $contact_no = $this->input->post('contact_no');
            $gym_pin = $this->input->post('gym_pin');
            $gymCity = $this->input->post('gymCity');
            $gymdescription = $this->input->post('gymdescription');
            $account_name = $this->input->post('account_name');
            $account_type = $this->input->post('account_type');
            $account_no = $this->input->post('account_no');
            $account_ifsc = $this->input->post('account_ifsc');
            $org_name = $this->input->post('org_name');
            $gym_gstno = $this->input->post('gym_gstno');
            $gym_panno = $this->input->post('gym_panno');
            $amenities = $this->input->post('amenities');
            $allowGym = $this->input->post('allowGym');
            $categoryName = $this->input->post('categoryName');
            $gymaddress = $this->input->post('gymaddress');
            $user_id = $this->input->post('id');
            $omorning = $this->input->post('omorning');
            $cmorning = $this->input->post('cmorning');
            $oafternoon = $this->input->post('oafternoon');
            $cafternoon = $this->input->post('cafternoon');
            $oevening = $this->input->post('oevening');
            $cevening = $this->input->post('cevening');
            $path1=  base_url().'images/';
            $upload_image1=$_FILES["gymImage"]["name"];

            if(empty($upload_image1)){
                $data = array(
                    'contact_name' => $contact_name,
                    'contact_no' => $contact_no,
                    'gstNumber' => $gym_gstno,
                    'gymName' => $gymName,
                    'allowGym' => $allowGym,
                    'accountHolderName' => $account_name,
                    'accountType' => $account_type,
                    'accountNumber' => $account_no,
                    'ifsc' => $account_ifsc,
                    'organization' => $org_name,
                    'gym_address' => $gymaddress,
                    'pinCode' => $gym_pin,
                    'gymCity' => $gymCity,
                    'totalavailability' => $totalavailability,
                    'gymdescription' => $gymdescription,
                    'panCard' => $gym_panno,
                    'user_id'=>$user_id,
                    'open_mg_time'=>$omorning,
                    'close_mg_time'=>$cmorning,
                    'after_open_time'=>$oafternoon,
                    'after_close_time'=>$cafternoon,
                    'open_evng_time'=>$oevening,
                    'close_evng_time'=>$cevening,

                );
                $this->db->select('*');
                $this->db->where('user_id', $user_id);
                $query = $this->db->get('gym');
                $cnt= $query->num_rows();
                if($cnt==0) {
                    $this->db->insert('gym', $data);
                    $insert_id = $this->db->insert_id();
                    foreach ($amenities as $am){
                        $dataresult = array(
                            'gym_id' => $insert_id,
                            'user_id' => $user_id,
                            'aminitiesName' => $am,

                        );
                        $this->db->insert('gym_amenities', $dataresult);
                    }
                    foreach ($categoryName as $cat){
                        $categoryarray = array(
                            'gym_id' => $insert_id,
                            'user_id' => $user_id,
                            'categoryName' => $cat,

                        );
                        $this->db->insert('gym_category', $categoryarray);
                    }
                    redirect("Gogym/dashboard");

                }
                else{
                    $this->db->where('user_id', $user_id);
                    $this->db->update('gym', $data);

                    redirect("Gogym/dashboard");
                }
            }else{
                if(!empty($_FILES["gymImage"]))
                {
                    $upload_image1=$_FILES["gymImage"]["name"];
                    $upload1 = move_uploaded_file($_FILES["gymImage"]["tmp_name"], "./images/".$upload_image1);
                    if($upload1){
                        $img_name1 = $path1.$upload_image1;
                    }else{
                        $img_name1 = '';
                    }
                }else{
                    $img_name1 = '';
                }
                $data = array(
                    'contact_name' => $contact_name,
                    'contact_no' => $contact_no,
                    'gstNumber' => $gym_gstno,
                    'gymName' => $gymName,
                    'allowGym' => $allowGym,
                    'accountHolderName' => $account_name,
                    'accountType' => $account_type,
                    'accountNumber' => $account_no,
                    'ifsc' => $account_ifsc,
                    'organization' => $org_name,
                    'gym_address' => $gymaddress,
                    'pinCode' => $gym_pin,
                    'gymCity' => $gymCity,
                    'totalavailability' => $totalavailability,
                    'gymdescription' => $gymdescription,
                    'panCard' => $gym_panno,
                    'user_id'=>$user_id,
                    'open_mg_time'=>$omorning,
                    'close_mg_time'=>$cmorning,
                    'after_open_time'=>$oafternoon,
                    'after_close_time'=>$cafternoon,
                    'open_evng_time'=>$oevening,
                    'close_evng_time'=>$cevening,
                    'gymImage'=>$img_name1,
                );
                $this->db->select('*');
                $this->db->where('user_id', $user_id);
                $query = $this->db->get('gym');
                $cnt= $query->num_rows();
                if($cnt==0) {
                    $this->db->insert('gym', $data);

                    $insert_id = $this->db->insert_id();
                    foreach ($amenities as $am){
                        $dataresult = array(
                            'gym_id' => $insert_id,
                            'user_id' => $user_id,
                            'aminitiesName' => $am,

                        );
                        $this->db->insert('gym_amenities', $dataresult);
                    }

                    foreach ($categoryName as $cat){
                        $categoryarray = array(
                            'gym_id' => $insert_id,
                            'user_id' => $user_id,
                            'categoryName' => $cat,

                        );
                        $this->db->insert('gym_category', $categoryarray);
                    }
                    redirect("Gogym/dashboard");

                }else{
                    $this->db->where('user_id', $user_id);
                    $this->db->update('gym', $data);
                    redirect("Gogym/dashboard");

                }
            }
        }
    }

}
