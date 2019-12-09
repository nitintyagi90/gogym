<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Adminmodel');
        if(!$this->session->userdata('session_id')){
            redirect('login/admin');
        }
    }

    public function index()
    {
        if (!empty($this->session->userdata('session_admin'))) {
            redirect('Admin/dashboard');
        }
        $this->load->view('Admin/index');
    }

    public function admin_login()
    {
        $data = array(
            'name' => $this->input->post('username'),
            'pass' => md5($this->input->post('password'))
        );
        $table = 'admin';
        $login = $this->Adminmodel->admin_log($data, $table);

        if ($login) {

            $newdata = array('session_id' => $login->id,
                'session_admin' => $login->email
            );
            $this->session->set_userdata($newdata);
            redirect('Admin/dashboard');
        } else {
            $this->session->set_flashdata('message_name1', 'Invalid UserID or Password');
            redirect("Admin/index");

        }
    }

    public function listamienities()
    {
        $amentities_id = $_POST['amentities_id'];
        $data = $this->AdminModel->editamienities($amentities_id);

    }
    public function ListGym_details($id)
    {
        $this->db->select('*');
        $this->db->from('gym');
        $this->db->join('user', 'user.id = gym.user_id');
        $this->db->where('gym.user_id', $id);
        $query = $this->db->get();
        $result = $query->result();
        $data['gym']=$result;
        $this->load->view('Admin/ListGym_details.php',$data);
    }
    public function Userlist_details($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('profile_user', 'profile_user.user_id = user.id');
        $this->db->where('user.id', $id);
        $query = $this->db->get();
        //echo $this->db->last_query();die();
        $result = $query->result();
        $data['user']=$result;
        $this->load->view('Admin/Userlist_details.php',$data);
    }

    public function dashboard()
    {
        $data = $this->Adminmodel->totalgym();
        $data1=$this->Adminmodel->totaluser();
        $data2=$this->Adminmodel->transaction();
        $result['message'] =count($data);
        $result['message1'] =count($data1);
        $result['message2'] =count($data2);
        $this->load->view('Admin/dashboard.php',$result);
    }

    public function cupcon()
    {
        $data['message'] = $this->Adminmodel->allgym();
        $this->load->view('Admin/cupcon.php', $data);
    }

    public function cupconlist()
    {
        $data['message'] = $this->Adminmodel->cupconlist();
        $this->load->view('Admin/cupconlist.php', $data);
    }

    public function carrer()
    {
        $data['message'] = $this->Adminmodel->carrer();
        $this->load->view('Admin/carrer.php', $data);
    }

    public function testimonial()
    {
        $data['message'] = $this->Adminmodel->testimonial();
        $this->load->view('Admin/testimonial.php', $data);
    }

    public function edit_testimonial($id)
    {
        $table = 'testimonial';
        $where = 'tes_id';
        $data['test'] = $this->Adminmodel->select_com_where($table, $where, $id);
        $this->load->view('Admin/edit_testimonial', $data);
    }

    public function logout()
    {
        session_destroy();
        redirect('Admin/index');
    }

    public function editamenities()
    {
        $id = $this->uri->segment(3);
        $where = 'amentities_id';
        $table = 'amenities';
        $data['amenities'] = $this->Adminmodel->select_com_where($table, $where, $id);
        $this->load->view('Admin/editamenties.php', $data);
    }

    public function editactivity()
    {
        $id = $this->uri->segment(3);
        $where = 'activity_id';
        $table = 'activity';
        $data['activity'] = $this->Adminmodel->select_com_where($table, $where, $id);
        $this->load->view('Admin/editactivity.php', $data);
        //$this->load->view('Admin/editamenties.php');
    }

    public function editprofession()
    {
        $id = $this->uri->segment(3);
        $where = 'profession_id';
        $table = 'profession';
        $data['profession'] = $this->Adminmodel->select_com_where($table, $where, $id);
        $this->load->view('Admin/editprofession.php', $data);
    }

    public function amenities()
    {
        is_protected();
        $data['message'] = $this->Adminmodel->amenities();
        $this->load->view('Admin/amenities.php', $data);
    }

    public function profession()
    {
        is_protected();
        $data['message'] = $this->Adminmodel->profession();
        $this->load->view('Admin/profession.php', $data);
    }

    public function insert_amenities()
    {
        $name1 = $_POST['amentities_name'];
        $table = 'amenities';
        $data = array(
            'amentities_name' => $name1
        );
        $login = $this->Adminmodel->insert_common($table, $data);
        redirect('Admin/amenities');
    }

    public function insert_health()
    {
        $day = $_POST['day'];
        $breakfast = $_POST['breakfast'];
        $lunch = $_POST['lunch'];
        $dinner = $_POST['dinner'];
        $table = 'health';
        $data = array(
            'health_day' => $day,
            'health_breakfast' => $breakfast,
            'health_lunch' => $lunch,
            'health_dinner' => $dinner,
        );
        $login = $this->Adminmodel->insert_common($table, $data);
        redirect('Admin/healthcheckup');
    }

    public function insert_activity()
    {
        $name1 = $_POST['activity_name'];
        $table = 'activity';
        $data = array(
            'activity_name' => $name1
        );
        $login = $this->Adminmodel->insert_common($table, $data);
        redirect('Admin/activity');
    }

    public function insert_event()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $this->input->post('name');
            $address = $this->input->post('address');
            $date = $this->input->post('date');
            $price = $this->input->post('price');
            $description = $this->input->post('description');
            $path1 = base_url() . 'images/';
            if (!empty($_FILES["event_pic"])) {
                $upload_image1 = $_FILES["event_pic"]["name"];
                $upload1 = move_uploaded_file($_FILES["event_pic"]["tmp_name"], "./images/" . $upload_image1);
                if ($upload1) {
                    $img_name1 = $path1 . $upload_image1;
                } else {
                    $img_name1 = '';
                }
            } else {
                $img_name1 = '';
            }


            $data = array(
                'event_name' => $name,
                'event_address' => $address,
                'event_date' => $date,
                'event_price' => $price,
                'event_description' => $description,
                'event_pic' => $img_name1,

            );
            $this->db->insert('event', $data);

            redirect('Admin/event_list');
        }
    }

    public function insert_profession()
    {
        $name1 = $_POST['profession_name'];
        $table = 'profession';
        $data = array(
            'profession_name' => $name1
        );
        $login = $this->Adminmodel->insert_common($table, $data);
        redirect('Admin/profession');
    }

    public function update_amenities()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $this->input->post('amentities_name');
            $amentities_id = $this->input->post('id');
            $data = array(
                'amentities_name' => $title
            );
            $this->db->where('amentities_id', $amentities_id);
            $this->db->update('amenities', $data);
            redirect("Admin/amenities");
        }
    }

    public function update_activity()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $this->input->post('activity_name');
            $activity_id = $this->input->post('id');
            $data = array(
                'activity_name' => $title
            );
            $this->db->where('activity_id', $activity_id);
            $this->db->update('activity', $data);
            redirect("Admin/activity");
        }
    }

    public function update_profession()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $this->input->post('profession_name');
            $profession_id = $this->input->post('id');
            $data = array(
                'profession_name' => $title
            );
            $this->db->where('profession_id', $profession_id);
            $this->db->update('profession', $data);
            redirect("Admin/profession");
        }
    }

    public function delete_amenities($id)
    {
        $this->db->where('amentities_id', $id);
        $this->db->delete('amenities');
        redirect('Admin/amenities');
    }

    public function delete_testimonial($id)
    {
        $this->db->where('tes_id', $id);
        $this->db->delete('testimonial');
        redirect('Admin/testimonial');
    }

    public function delete_healthcheckup($id)
    {
        $this->db->where('health_id', $id);
        $this->db->delete('health');
        redirect('Admin/healthcheckup');
    }

    public function delete_activity($id)
    {
        $this->db->where('activity_id', $id);
        $this->db->delete('activity');
        redirect('Admin/activity');
    }

    public function delete_profession($id)
    {
        $this->db->where('profession_id', $id);
        $this->db->delete('profession');
        redirect('Admin/profession');
    }

    public function ListGym()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_type', 2);
        $query = $this->db->get();
        $result = $query->result();
        $data = array(
            'gymowner' => $result,
        );
        $this->load->view('Admin/listGym.php', $data);
    }
    public function userlist()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_type', 1);
        $query = $this->db->get();
        $result = $query->result();
        $data = array(
            'userlist' => $result,
        );
        $this->load->view('Admin/userlist.php', $data);
    }
    public function viewPofile($id)
    {
        $this->db->select('*');
        $this->db->from('profile_owner');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        $result = $query->result();
        $data = array(
            'ownerProfile' => $result,
        );
        $this->load->view('Admin/ownerProfile.php', $data);
    }

    public function viewGym($id)
    {
        $this->db->select('*');
        $this->db->from('gym');
        $this->db->where('user_profile_id', $id);
        $query = $this->db->get();
        $result = $query->result();
        $data = array(
            'gym' => $result,
        );
        $this->load->view('Admin/viewGym.php', $data);
    }

    public function gymDetail()
    {
        $this->db->select('*');
        $this->db->from('gym');
        $query = $this->db->get();
        $result = $query->result();
        $data = array(
            'gymorowner' => $result,
        );
        $this->load->view('Admin/gymDetail.php', $data);
    }

    public function blockGym($id)
    {
        $ownerData = $this->Adminmodel->profile_approve($id);
        if ($ownerData[0]['is_active'] == 0) {
            $result = array(
                'is_active' => '1'
            );
            $this->db->where('gym_id', $id);
            $this->db->update('gym', $result);
            $this->session->set_flashdata('message_name', 'Profile has been Active successfully!');
            redirect('Admin/gymDetail');
        }
        if ($ownerData[0]['is_active'] == 1) {
            $result = array(
                'is_active' => '0'
            );
            $this->db->where('gym_id', $id);
            $this->db->update('gym', $result);
            $this->session->set_flashdata('message_name', 'Profile has been Deactive successfully!');
            redirect('Admin/gymDetail');

        }

    }

    public function healthcheckup()
    {
        $data['message'] = $this->Adminmodel->healthcheckup();
        $this->load->view('Admin/healthcheckup.php', $data);
    }

    public function edit_healthcheckup()
    {
        $this->load->view('Admin/edit_healthcheckup');
    }

    public function event()
    {
        $this->load->view('Admin/event.php');
    }

    public function edit_event($id)
    {
        $where = 'event_id';
        $table = 'event';
        $data['event'] = $this->Adminmodel->select_com_where($table, $where, $id);
        $this->load->view('Admin/edit_event', $data);
    }

    public function activity()
    {
        $data['message'] = $this->Adminmodel->activity();
        $this->load->view('Admin/activity.php', $data);
    }

    public function event_list()
    {
        is_protected();
        $data['message'] = $this->Adminmodel->eventlist();
        $this->load->view('Admin/event_list.php', $data);
    }

    public function enquiry()
    {
        $data['message'] = $this->Adminmodel->enquiry();
        $this->load->view('Admin/enquiry.php', $data);
    }

    public function contact()
    {
        $data['message'] = $this->Adminmodel->contact();
        $this->load->view('Admin/contact.php', $data);
    }

    public function team()
    {
        $query = $this->db->get('team');
        $result = $query->result();
        $data['team'] = $result;
        $this->load->view('Admin/team.php', $data);
    }

    public function editteam($id)
    {
        $query = $this->db->get('team');
        $this->db->where('id', $id);
        $result = $query->result();
        $data['team'] = $result;
        $this->load->view('Admin/editteam.php', $data);
    }

    public function gogyms_diet()
    {
        $query = $this->db->get('diet');
        $result = $query->result();
        $data['diet'] = $result;
        $this->load->view('Admin/gogyms_diet.php', $data);
    }

    public function edit_gogyms_diet()
    {
        $this->load->view('Admin/edit_gogyms_diet.php');
    }
    public function edit_cupconlist($id)
    {
        $where = 'coupon_id';
        $table = 'coupon';
        $data['coupon'] = $this->Adminmodel->select_com_where($table, $where, $id);
        $data['message'] = $this->Adminmodel->allgym();
        $this->load->view('Admin/edit_cupconlist.php',$data);
    }

    public function launch_offer()
    {
        $data['message'] = $this->Adminmodel->allgym();
        $this->load->view('Admin/launch_offer.php', $data);
    }

    public function launch_offer_list()
    {
        $data['message'] = $this->Adminmodel->lauch_offerlist();
        $this->load->view('Admin/launch_offer_list.php', $data);
    }

    public function edit_launch_offer($id)
    {
        $where = 'deal_id';
        $table = 'launch_offer';
        $data['offer'] = $this->Adminmodel->select_com_where($table, $where, $id);
        $data['message'] = $this->Adminmodel->allgym();
        $this->load->view('Admin/edit_launch_offer.php', $data);
    }

    public function category()
    {
        is_protected();
        $data['message'] = $this->Adminmodel->category();
        $this->load->view('Admin/category.php', $data);
    }

    public function saveCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $categoryName = $this->input->post('categoryName');
            $path1 = base_url() . 'images/';
            if (!empty($_FILES["categoryImage"])) {
                $upload_image1 = $_FILES["categoryImage"]["name"];
                $upload1 = move_uploaded_file($_FILES["categoryImage"]["tmp_name"], "./images/" . $upload_image1);
                if ($upload1) {
                    $img_name1 = $path1 . $upload_image1;
                } else {
                    $img_name1 = '';
                }
            } else {
                $img_name1 = '';
            }
            $data = array(
                'categoryName' => $categoryName,
                'categoryImage' => $img_name1,

            );
            $this->db->insert('category', $data);
            redirect('Admin/category');
        }
    }

    public function deleteCategory($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('category');
        redirect('Admin/category');
    }

    public function delete_event($id)
    {
        $this->db->where('event_id', $id);
        $this->db->delete('event');
        redirect('Admin/event_list');
    }

    public function delete_launch_offer($id)
    {
        $this->db->where('deal_id', $id);
        $this->db->delete('launch_offer');
        redirect('Admin/launch_offer_list');
    }
    public function delete_cupconlist($id)
    {
        $this->db->where('coupon_id', $id);
        $this->db->delete('coupon');
        redirect('Admin/cupconlist');
    }
    public function editCategory($id)
    {
        $where = 'id';
        $table = 'category';
        $data['category'] = $this->Adminmodel->select_com_where($table, $where, $id);
        $this->load->view('Admin/editCategory.php', $data);
    }

    public function updateCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $categoryName = $this->input->post('categoryName');
            $id = $this->input->post('id');
            $upload_image1 = $_FILES["categoryImage"]["name"];
            if (empty($upload_image1)) {
                $data = array(
                    'categoryName' => $categoryName,
                );
                $this->db->where('id', $id);
                $this->db->update('category', $data);
                redirect('Admin/category');
            } else {
                $path1 = base_url() . 'images/';
                if (!empty($_FILES["categoryImage"])) {
                    $upload_image1 = $_FILES["categoryImage"]["name"];
                    $upload1 = move_uploaded_file($_FILES["categoryImage"]["tmp_name"], "./images/" . $upload_image1);
                    if ($upload1) {
                        $img_name1 = $path1 . $upload_image1;
                    } else {
                        $img_name1 = '';
                    }
                } else {
                    $img_name1 = '';
                }
                $data = array(
                    'categoryName' => $categoryName,
                    'categoryImage' => $img_name1,
                 );
                $this->db->where('id', $id);
                $this->db->update('category', $data);
                redirect('Admin/category');
            }

        }
    }

    public function saveTeam()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $memberName = $this->input->post('memberName');
            $designation = $this->input->post('designation');
            $description = $this->input->post('description');
            $path1 = base_url() . 'images/';
            if (!empty($_FILES["image"])) {
                $upload_image1 = $_FILES["image"]["name"];
                $upload1 = move_uploaded_file($_FILES["image"]["tmp_name"], "./images/" . $upload_image1);
                if ($upload1) {
                    $img_name1 = $path1 . $upload_image1;
                } else {
                    $img_name1 = '';
                }
            } else {
                $img_name1 = '';
            }
            $data = array(
                'memberName' => $memberName,
                'designation' => $designation,
                'description' => $description,
                'image' => $img_name1,

            );
            $this->db->insert('team', $data);
            redirect('Admin/team');
        }
    }

    public function saveTestimonial()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $memberName = $this->input->post('memberName');
            $designation = $this->input->post('designation');
            $description = $this->input->post('description');
            $path1 = base_url() . 'images/';
            if (!empty($_FILES["image"])) {
                $upload_image1 = $_FILES["image"]["name"];
                $upload1 = move_uploaded_file($_FILES["image"]["tmp_name"], "./images/" . $upload_image1);
                if ($upload1) {
                    $img_name1 = $path1 . $upload_image1;
                } else {
                    $img_name1 = '';
                }
            } else {
                $img_name1 = '';
            }

            $data = array(
                'tes_name' => $memberName,
                'tes_designation' => $designation,
                'tes_description' => $description,
                'tes_image' => $img_name1,
            );
            $this->db->insert('testimonial', $data);
            redirect('Admin/testimonial');
        }
    }

    public function deleteTeam($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('team');
        redirect('Admin/team');
    }

    public function updateTeam()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $memberName = $this->input->post('memberName');
            $designation = $this->input->post('designation');
            $description = $this->input->post('description');
            $id = $this->input->post('id');
            $upload_image1 = $_FILES["categoryImage"]["name"];
            if (empty($upload_image1)) {
                $data = array(
                    'memberName' => $memberName,
                    'designation' => $designation,
                    'description' => $description,
                );
                $this->db->where('id', $id);
                $this->db->update('team', $data);
                redirect('Admin/team');
            } else {
                $path1 = base_url() . 'images/';
                if (!empty($_FILES["categoryImage"])) {
                    $upload_image1 = $_FILES["categoryImage"]["name"];
                    $upload1 = move_uploaded_file($_FILES["categoryImage"]["tmp_name"], "./images/" . $upload_image1);
                    if ($upload1) {
                        $img_name1 = $path1 . $upload_image1;
                    } else {
                        $img_name1 = '';
                    }
                } else {
                    $img_name1 = '';
                }
                $data = array(
                    'memberName' => $memberName,
                    'designation' => $designation,
                    'description' => $description,
                    'image' => $img_name1,
                );
                $this->db->where('id', $id);
                $this->db->update('team', $data);
                redirect('Admin/team');
            }

        }
    }

    public function updateDiet()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $this->input->post('title');
            $url = $this->input->post('url');
            $description = $this->input->post('description');
            $id = $this->input->post('id');
            $upload_image1 = $_FILES["categoryImage"]["name"];
            if (empty($upload_image1)) {
                $data = array(
                    'title' => $title,
                    'url' => $url,
                    'description' => $description,
                );
                $this->db->where('id', $id);
                $this->db->update('diet', $data);
                redirect('Admin/gogyms_diet');
            } else {
                $path1 = base_url() . 'images/';
                if (!empty($_FILES["categoryImage"])) {
                    $upload_image1 = $_FILES["categoryImage"]["name"];
                    $upload1 = move_uploaded_file($_FILES["categoryImage"]["tmp_name"], "./images/" . $upload_image1);
                    if ($upload1) {
                        $img_name1 = $path1 . $upload_image1;
                    } else {
                        $img_name1 = '';
                    }
                } else {
                    $img_name1 = '';
                }
                $data = array(
                    'title' => $title,
                    'url' => $url,
                    'description' => $description,
                    'image' => $img_name1,

                );
                $this->db->where('id', $id);
                $this->db->update('diet', $data);
                redirect('Admin/gogyms_diet');
            }

        }
    }

    public function saveDiet()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $this->input->post('title');
            $url = $this->input->post('url');
            $description = $this->input->post('description');
            $path1 = base_url() . 'images/';
            if (!empty($_FILES["image"])) {
                $upload_image1 = $_FILES["image"]["name"];
                $upload1 = move_uploaded_file($_FILES["image"]["tmp_name"], "./images/" . $upload_image1);
                if ($upload1) {
                    $img_name1 = $path1 . $upload_image1;
                } else {
                    $img_name1 = '';
                }
            } else {
                $img_name1 = '';
            }
            $data = array(
                'title' => $title,
                'url' => $url,
                'description' => $description,
                'image' => $img_name1,

            );
            $this->db->insert('diet', $data);

            redirect('Admin/gogyms_diet');
        }
    }

    public function deletediet($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('diet');
        redirect('Admin/gogyms_diet');
    }

    public function editDiet($id)
    {
        $where = 'id';
        $table = 'diet';
        $data['diet'] = $this->Adminmodel->select_com_where($table, $where, $id);
        $this->load->view('Admin/edit_gogyms_diet.php', $data);
    }


    public function insurance()
    {
        $query = $this->db->get('insurance');
        $result = $query->result();
        $data['insurance'] = $result;
        $this->load->view('Admin/insurance.php', $data);
    }

    public function editInsurance($id)
    {
        $query = $this->db->get('insurance');
        $this->db->where('id', $id);
        $result = $query->result();
        $data['insurance'] = $result;
        $this->load->view('Admin/editInsurance.php', $data);
    }

    public function updateInsurance()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $insurance_value = $this->input->post('insurance_value');
            $id = $this->input->post('id');
            $data = array(
                'insurance_value' => $insurance_value,
            );
            $this->db->where('id', $id);
            $this->db->update(' insurance', $data);
            redirect('Admin/insurance');
        }
    }

    public function save_coupon()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $gymName = $this->input->post('gymName');
            $coupconcode = $this->input->post('coupcon');
            $coupconpercent = $this->input->post('percent');
            $coupcondiscount = $this->input->post('maxdiscount');
            $coupconvalue = $this->input->post('minvalue');
            foreach ($gymName as $gym) {
            $data = array(
                    'coupon_gym' => $gym,
                    'coupon_code' => $coupconcode,
                    'coupon_percent' => $coupconpercent,
                    'coupon_max_discount' => $coupcondiscount,
                    'coupon_min_value' => $coupconvalue,
                );
                $this->db->insert('coupon', $data);
                redirect('Admin/cupconlist');
            }
        }
    }
    public function saveLaunch_offer()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $this->input->post('name');
            $gymName = $this->input->post('gymName');
            $percent = $this->input->post('percent');
            $discount = $this->input->post('discount');
            foreach ($gymName as $gym) {
                $path1 = base_url() . 'images/';


                if (!empty($_FILES["image"])) {
                    $upload_image1 = $_FILES["image"]["name"];
                    $upload1 = move_uploaded_file($_FILES["image"]["tmp_name"], "./images/" . $upload_image1);
                    if ($upload1) {
                        $img_name1 = $path1 . $upload_image1;
                    } else {
                        $img_name1 = '';
                    }
                } else {
                    $img_name1 = '';
                }
                $data = array(
                    'deal_name' => $name,
                    'deal_gym' => $gym,
                    'deal_percent' => $percent,
                    'deal_discount' => $discount,
                    'deal_image' => $img_name1,

                );
                $this->db->insert('launch_offer', $data);
                redirect('Admin/launch_offer_list');
            }

        }
    }
    public function updateCoupon()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $gymName = $this->input->post('gymName');
            $coupcon = $this->input->post('coupcon');
            $percent = $this->input->post('percent');
            $maxdiscount = $this->input->post('maxdiscount');
            $minvalue = $this->input->post('minvalue');
            $id = $this->input->post('id');
            foreach ($gymName as $gym) {
                $data = array(
                    'coupon_gym' => $gym,
                    'coupon_code' => $coupcon,
                    'coupon_percent' => $percent,
                    'coupon_max_discount' => $maxdiscount,
                    'coupon_min_value' => $minvalue,
                );
                $this->db->where('coupon_id', $id);
                $this->db->update('coupon', $data);
                redirect('Admin/cupconlist');
            }

        }
    }
    public function updateLaunch_offer()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $this->input->post('name');
            $gymName = $this->input->post('gymName');
            $percent = $this->input->post('percent');
            $discount = $this->input->post('discount');
            $id = $this->input->post('id');
            foreach ($gymName as $gym) {
                $path1 = base_url() . 'images/';
                if (!empty($_FILES["image"])) {
                    $upload_image1 = $_FILES["image"]["name"];
                    $upload1 = move_uploaded_file($_FILES["image"]["tmp_name"], "./images/" . $upload_image1);
                    if ($upload1) {
                        $img_name1 = $path1 . $upload_image1;
                    } else {
                        $img_name1 = '';
                    }
                } else {
                    $img_name1 = '';
                }
                $data = array(
                    'deal_name' => $name,
                    'deal_gym' => $gym,
                    'deal_percent' => $percent,
                    'deal_discount' => $discount,
                    'deal_image' => $img_name1,
                );
                $this->db->where('deal_id', $id);
                $this->db->update('launch_offer', $data);
                redirect('Admin/launch_offer_list');
            }

        }
    }

    public function updateEvent()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $this->input->post('name');
            $address = $this->input->post('address');
            $date = $this->input->post('date');
            $price = $this->input->post('price');
            $description = $this->input->post('description');
            $id = $this->input->post('id');
            if (empty($_FILES["event_pic"]["name"])) {

                $data = array(
                    'event_name' => $name,
                    'event_address' => $address,
                    'event_date' => $date,
                    'event_price' => $price,
                    'event_description' => $description,
                );
                $this->db->where('event_id', $id);
                $this->db->update('event', $data);
                redirect('Admin/event_list');
            } else {
                $path1 = base_url() . 'images/';
                if (!empty($_FILES["event_pic"])) {
                    $upload_image1 = $_FILES["event_pic"]["name"];
                    $upload1 = move_uploaded_file($_FILES["event_pic"]["tmp_name"], "./images/" . $upload_image1);
                    if ($upload1) {
                        $img_name1 = $path1 . $upload_image1;
                    } else {
                        $img_name1 = '';
                    }
                } else {
                    $img_name1 = '';
                }

                $data = array(
                    'event_name' => $name,
                    'event_address' => $address,
                    'event_date' => $date,
                    'event_price' => $price,
                    'event_description' => $description,
                    'event_pic' => $img_name1,

                );
                $this->db->where('event_id', $id);
                $this->db->update('event', $data);

                redirect('Admin/event_list');
            }


        }
    }

    public function updateTestimonial()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $memberName = $this->input->post('memberName');
            $designation = $this->input->post('designation');
            $description = $this->input->post('description');
            $id = $this->input->post('id');
            if (empty($_FILES["event_pic"]["name"])) {
                $data = array(
                    'tes_name' => $memberName,
                    'tes_designation' => $designation,
                    'tes_description' => $description
                );
                $this->db->where('tes_id', $id);
                $this->db->update('testimonial', $data);
                redirect('Admin/testimonial');
            } else {
                $path1 = base_url() . 'images/';
                if (!empty($_FILES["image"])) {
                    $upload_image1 = $_FILES["image"]["name"];
                    $upload1 = move_uploaded_file($_FILES["image"]["tmp_name"], "./images/" . $upload_image1);
                    if ($upload1) {
                        $img_name1 = $path1 . $upload_image1;
                    } else {
                        $img_name1 = '';
                    }
                } else {
                    $img_name1 = '';
                }

                $data = array(
                    'tes_name' => $memberName,
                    'tes_designation' => $designation,
                    'tes_description' => $description,
                    'tes_image' => $img_name1,
                );
                $this->db->where('tes_id', $id);
                $this->db->update('testimonial', $data);
                redirect('Admin/testimonial');
            }
        }

    }

    public function transaction(){

        $q= $this->db->select()
            ->from('gym')
            ->get();

        $result = $q->result();

        $data['gym'] = $result ;
        $data['message'] = $this->Adminmodel->transaction();
        $this->load->view('Admin/transaction.php', $data);

    }
    //===============date filter========

    function datefilter()
    {
        $date1 = $this->input->post('date1');
        $date2 = $this->input->post('date2');
        $gymid = $this->input->post('gymid');

// if($date1 == null) {
//
// $new_date1 = $this->input->post('date1');
// $new_date2 = $this->input->post('date2');
// }
//
// else{
// $new1 = explode("-", $date1);
// $new2 = explode("-", $date2);
//
// $new_date1 = $new1[2] . "-" . $new1[1] . "-" . $new1[0];
// $new_date2 = $new2[2] . "-" . $new2[1] . "-" . $new2[0];
//
// }

        $data['message'] = $this->Adminmodel->datefilter($gymid ,$date1 , $date2) ;
        $data['gym'] = $this->Adminmodel->gym_detail() ;

        $this->load->view('Admin/transaction.php', $data);

    }
//==================================
}

