<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct()
{
	parent::__construct();
	require_once APPPATH.'third_party/src/Google_Client.php';
	require_once APPPATH.'third_party/src/contrib/Google_Oauth2Service.php';
}

    //=========================Facebook signin==================

    public function index(){
        $this->load->library('facebook');
        $userData = array();
        if($this->facebook->is_authenticated()){
            $userProfile = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,gender,locale,picture');
            echo "<pre>";
// print_r($userProfile);
// die;
            $email = $userProfile['email'] ;

            $data = array(
                'user_type' => 2,
                'is_verify' => 1,
                'email' =>$userProfile['email'] ,
                'owner_name' =>$userProfile['first_name'] ." ".$userProfile['last_name']  ,
// 'profileImage'=>$userProfile['picture']  ,


            );




            $q= $this->db->select()
                ->where('email', $email)
                ->from('user')
                ->get();


            if($q->row())
            {

                $insert_id = $q->row()->id;


            }
            else{


                $result = $this->db->insert('user', $data);
                $insert_id = $this->db->insert_id();

            }
            redirect("Auth/Urllogin/".$insert_id ) ;


        }
        else
        {
            $data['authUrl'] =  $this->facebook->login_url();


        }


        redirect('auth/login') ;

        // $this->load->view('login',$data);
    }

//=========================================
	
	public function google_login()
	{
		$clientId = '423096548529-l6ou4stcu69cm8t2ns95ccedh7raamv4.apps.googleusercontent.com'; //Google client ID
		$clientSecret = 'BICw2j0PtOVVr00Rufoc4yjP'; //Google client secret
		$redirectURL = base_url() . 'Login/google_login/';
		
		//Call Google API
		$gClient = new Google_Client();
		$gClient->setApplicationName('Login');
		$gClient->setClientId($clientId);
		$gClient->setClientSecret($clientSecret);
		$gClient->setRedirectUri($redirectURL);
		$google_oauthV2 = new Google_Oauth2Service($gClient);
		
		if(isset($_GET['code']))
		{
			$gClient->authenticate($_GET['code']);
			$_SESSION['token'] = $gClient->getAccessToken();
			header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
		}

		if (isset($_SESSION['token'])) 
		{
			$gClient->setAccessToken($_SESSION['token']);
		}
		
		if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
			echo "<pre>";

			 // print_r($userProfile);

				$email = $userProfile['email'] ;

			$data = array(
				'user_type' => 2,
                'is_verify' => 1,
				'email' =>$userProfile['email'] ,
				'owner_name' =>$userProfile['name']  , 
				'profileImage'=>$userProfile['picture']  ,


			);


				$q= $this->db->select()
							->where('email', $email)
							->from('user')
							->get();


					if($q->row())
					{

						$insert_id = $q->row()->id;


					}
					else{

		
			$result = $this->db->insert('user', $data);
            $insert_id = $this->db->insert_id();

           }
           redirect("Auth/Urllogin/".$insert_id ) ;


			die;
        } 
		else 
		{
            $url = $gClient->createAuthUrl();
		    header("Location: $url");
            exit;
        }
	}
    public function google_login2()
    {
        $clientId = '854953527288-saphdpvmqge5h7np1i0j4983op8fs5ur.apps.googleusercontent.com'; //Google client ID
        $clientSecret = 'leP_T-wvCPOYrCVqIxSWgWLn'; //Google client secret
        $redirectURL = base_url() . 'Login/google_login2/';

        //Call Google API
        $gClient = new Google_Client();
        $gClient->setApplicationName('Login');
        $gClient->setClientId($clientId);
        $gClient->setClientSecret($clientSecret);
        $gClient->setRedirectUri($redirectURL);
        $google_oauthV2 = new Google_Oauth2Service($gClient);

        if(isset($_GET['code']))
        {
            $gClient->authenticate($_GET['code']);
            $_SESSION['token'] = $gClient->getAccessToken();
            header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
        }

        if (isset($_SESSION['token']))
        {
            $gClient->setAccessToken($_SESSION['token']);
        }

        if ($gClient->getAccessToken()) {
            $userProfile = $google_oauthV2->userinfo->get();
            echo "<pre>";

            // print_r($userProfile);

            $email = $userProfile['email'] ;

            $data = array(
                'user_type' => 1,
                'is_verify' => 1,
                'email' =>$userProfile['email'] ,
                'owner_name' =>$userProfile['name']  ,
                'profileImage'=>$userProfile['picture']  ,


            );


            $q= $this->db->select()
                ->where('email', $email)
                ->from('user')
                ->get();


            if($q->row())
            {

                $insert_id = $q->row()->id;


            }
            else{


                $result = $this->db->insert('user', $data);
                $insert_id = $this->db->insert_id();

            }
            redirect("Auth/Urllogin/".$insert_id ) ;


            die;
        }
        else
        {
            $url = $gClient->createAuthUrl();
            header("Location: $url");
            exit;
        }
    }
}
