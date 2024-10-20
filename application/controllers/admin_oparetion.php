<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 2/18/2017
 * Time: 7:53 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_oparetion extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('function_helper');
        $this->load->library('pagination');         /* load pagination Library */
        $this->load->library('form_validation');    /* load validation Library */
//        $this->load->helper('function_helper');
//        $this->load->Model('m_home');
        $this->load->model('user_login_model');
        $this->load->library('session');
        $this->load->library('pagination');
    }

    public function index()
    {
        if($this->session->userdata('logged_in'))
        {
            redirect('admin', 'refresh');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function cms_slider_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $id=$_REQUEST['SiliderId'];
            $Title=$_REQUEST['Title'];
            $BigText=$_REQUEST['BigText'];
            $SmallText=$_REQUEST['SmallText'];

            $config['upload_path'] = './others/upload/cms/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $this->session->set_flashdata('message', "<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please check your image size</div>");
                redirect(base_url().'cms/slider_update/'.$id);
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 1894;
                $config['height'] = 380;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }


            $this->Admin_model->cms_slider_update($id,$file_name,$Title,$BigText,$SmallText);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Slider update successfully</div>");
            redirect(base_url().'cms/slider');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function cms_about_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Details=$_REQUEST['Details'];
            $Link=$_REQUEST['Link'];
            $Phone=$_REQUEST['Phone'];


            $config['upload_path'] = './others/upload/about/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $this->session->set_flashdata('message', "<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please check your image size</div>");
                redirect(base_url().'cms/about_company');
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 712;
                $config['height'] = 492;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }


            $this->Admin_model->home_about_update($id,$file_name,$Title,$Details,$Link,$Phone);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Home about company content update successfully</div>");
            redirect(base_url().'cms/about_company');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function cms_home_country()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/country/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $this->session->set_flashdata('message', "<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please check your image size</div>");
                redirect(base_url().'cms/country_offer');
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 200;
                $config['height'] = 200;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $HomeAddCountryData=array(
                'country_image'=>$file_name,
                'country_name'=>$_REQUEST['CountryName'],
                'details'=>$_REQUEST['Details'],
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );

            $this->Admin_model->add_new_country($HomeAddCountryData);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>New country add successfully</div>");
            redirect(base_url().'cms/country_offer');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function home_country_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/country/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 200;
                $config['height'] = 200;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $CountryName=$_REQUEST['CountryName'];
            $Details=$_REQUEST['Details'];

            $this->Admin_model->home_country_update($Id,$file_name,$CountryName,$Details);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Country offer update successfully</div>");
            redirect(base_url().'cms/country_offer');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function country_delete($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $this->Admin_model->country_delete($id);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Categories delete successfully</div>");
            redirect(base_url().'cms/country_offer');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function form_delete($user_basic_id_form)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $this->Admin_model->form_delete($user_basic_id_form);
            $this->Admin_model->user_data_delete($user_basic_id_form);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Form delete successfully</div>");
            redirect(base_url().'cms/total_apply');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function cms_video_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $id=$_REQUEST['Id'];
            $Text=$_REQUEST['Text'];
            $ExploreLink=$_REQUEST['ExploreLink'];
            $VideoLink=$_REQUEST['VideoLink'];

            $config['upload_path'] = './others/upload/home-video/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $this->session->set_flashdata('message', "<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please check your image size</div>");
                redirect(base_url().'cms/video');
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 1894;
                $config['height'] = 550;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }
            $this->Admin_model->home_video_update($id,$file_name,$Text,$ExploreLink,$VideoLink);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Home video update successfully</div>");
            redirect(base_url().'cms/video');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function cms_home_immigration()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/home-service/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $this->session->set_flashdata('message', "<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please check your image size</div>");
                redirect(base_url().'cms/immigration_service');
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 270;
                $config['height'] = 279;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $HomeServiceData=array(
                'image'=>$file_name,
                'title'=>$_REQUEST['Title'],
                'text'=>$_REQUEST['Text'],
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );
            $this->Admin_model->add_new_service($HomeServiceData);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>New service add successfully</div>");
            redirect(base_url().'cms/immigration_service');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function home_immigration_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/home-service/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 270;
                $config['height'] = 279;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->immigration_service_update($Id,$file_name,$Title,$Text);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Service update successfully</div>");
            redirect(base_url().'cms/immigration_service');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function service_delete($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $this->Admin_model->service_delete($id);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Service delete successfully</div>");
            redirect(base_url().'cms/immigration_service');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function cms_contact_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $id=$_REQUEST['Id'];
            $Address=$_REQUEST['Address'];
            $Email=$_REQUEST['Email'];
            $Phone=$_REQUEST['Phone'];

            $this->Admin_model->home_contact_update($id,$Address,$Email,$Phone);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Contact update successfully</div>");
            redirect(base_url().'cms/contact');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function company_profile_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Details=$_REQUEST['Details'];

            $this->Admin_model->company_profile_update($id,$Title,$Details);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Company profile update successfully</div>");
            redirect(base_url().'cms/company_profile');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function mission_vision_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Details=$_REQUEST['Details'];

            $this->Admin_model->mission_vision_update($id,$Title,$Details);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Mission & vision update successfully</div>");
            redirect(base_url().'cms/mission_vision');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function cms_new_message()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/about_message/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $this->session->set_flashdata('message', "<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Please check your image size</div>");
                redirect(base_url().'cms/director_message');
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 200;
                $config['height'] = 200;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $MessageData=array(
                'image'=>$file_name,
                'name'=>$_REQUEST['Name'],
                'designation'=>$_REQUEST['Designation'],
                'message'=>$_REQUEST['Message'],
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );

            $this->Admin_model->add_new_message($MessageData);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>New message add successfully</div>");
            redirect(base_url().'cms/director_message');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function message_delete($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $this->Admin_model->message_delete($id);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Message delete successfully</div>");
            redirect(base_url().'cms/director_message');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function message_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/about_message/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 200;
                $config['height'] = 200;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Name=$_REQUEST['Name'];
            $Designation=$_REQUEST['Designation'];
            $Message=$_REQUEST['Message'];

            $this->Admin_model->about_message_update($Id,$file_name,$Name,$Designation,$Message);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Message update successfully</div>");
            redirect(base_url().'cms/director_message');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function student_visa_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 570;
                $config['height'] = 530;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->student_visa_update($Id,$file_name,$Title,$Text);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Student visa content update successfully</div>");
            redirect(base_url().'cms/student_visa');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function work_permit_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 570;
                $config['height'] = 530;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->work_permit_update($Id,$file_name,$Title,$Text);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Work permit content update successfully</div>");
            redirect(base_url().'cms/work_permit');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function training_visa_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 570;
                $config['height'] = 530;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->training_visa_update($Id,$file_name,$Title,$Text);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Training visa content update successfully</div>");
            redirect(base_url().'cms/training_visa');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function investment_visa_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 570;
                $config['height'] = 530;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->investment_visa_update($Id,$file_name,$Title,$Text);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Investment visa content update successfully</div>");
            redirect(base_url().'cms/investment_visa');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function tourist_visa_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 570;
                $config['height'] = 530;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->tourist_visa_update($Id,$file_name,$Title,$Text);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Tourist visa content update successfully</div>");
            redirect(base_url().'cms/tourist_visa');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function resume_building_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 570;
                $config['height'] = 530;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->resume_building_update($Id,$file_name,$Title,$Text);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Resume building content update successfully</div>");
            redirect(base_url().'cms/resume_building');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function interview_matching_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 570;
                $config['height'] = 530;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->interview_matching_update($Id,$file_name,$Title,$Text);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Interview matching content update successfully</div>");
            redirect(base_url().'cms/interview_matching');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function interview_preparation_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 570;
                $config['height'] = 530;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->interview_preparation_update($Id,$file_name,$Title,$Text);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Interview preparation content update successfully</div>");
            redirect(base_url().'cms/interview_preparation');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function career_counseling_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 570;
                $config['height'] = 530;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->career_counseling_update($Id,$file_name,$Title,$Text);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Career Counseling content update successfully</div>");
            redirect(base_url().'cms/career_counseling');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function hire_staff_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 570;
                $config['height'] = 530;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Title=$_REQUEST['Title'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->hire_staff_update($Id,$file_name,$Title,$Text);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Career Counseling content update successfully</div>");
            redirect(base_url().'cms/hire_staff');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function country_australia_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 600;
                $config['height'] = 600;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->country_australia_update($Id,$Text,$file_name);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Country serve australia content update successfully</div>");
            redirect(base_url().'cms/country_australia');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function country_newzealand_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 600;
                $config['height'] = 600;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->country_newzealand_update($Id,$Text,$file_name);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Country serve New Zealand content update successfully</div>");
            redirect(base_url().'cms/country_newzealand');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function country_canada_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $config['upload_path'] = './others/upload/common/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '20971520';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('userfile'))
            {
                $file_name = $_REQUEST['Image'];
            }
            else
            {
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['maintain_ratio'] = FALSE;
                $config['width'] = 600;
                $config['height'] = 600;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $file_name =   $upload_data['file_name'];
            }

            $Id=$_REQUEST['Id'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->country_canada_update($Id,$Text,$file_name);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Country serve Canada content update successfully</div>");
            redirect(base_url().'cms/country_canada');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function country_sweden_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $Id=$_REQUEST['Id'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->country_sweden_update($Id,$Text);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Country serve Sweden content update successfully</div>");
            redirect(base_url().'cms/country_sweden');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function country_malaysia_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $Id=$_REQUEST['Id'];
            $Text=$_REQUEST['Text'];

            $this->Admin_model->country_malaysia_update($Id,$Text);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Country serve Malaysia content update successfully</div>");
            redirect(base_url().'cms/country_malaysia');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function cms_visa_category()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');


            $CategoryData=array(
                'category_name'=>$_REQUEST['CategoryName'],
                'country'=>$_REQUEST['Country'],
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );

            $this->Admin_model->add_new_category($CategoryData);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>New visa category add successfully</div>");
            redirect(base_url().'cms/visa_category');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function visa_category_delete($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $this->Admin_model->category_delete($id);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Category delete successfully</div>");
            redirect(base_url().'cms/visa_category');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function visa_category_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');


            $Id=$_REQUEST['Id'];
            $CategoryName=$_REQUEST['CategoryName'];
            $Country=$_REQUEST['Country'];

            $this->Admin_model->visa_category_update($Id,$CategoryName,$Country);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Visa category update successfully</div>");
            redirect(base_url().'cms/visa_category');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function cms_visa_australia()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');


            $VisaItemsData=array(
                'visa_category_id'=>$_REQUEST['CategoryId'],
                'title'=>$_REQUEST['Title'],
                'details'=>$_REQUEST['Details'],
                'hrflink'=>$_REQUEST['hrflink'],
                'link'=>$_REQUEST['Link'],
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );

            $this->Admin_model->visa_australia_items_add($VisaItemsData);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>New visa items add successfully</div>");
            redirect(base_url().'cms/visa_australia');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function visa_australia_delete($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $this->Admin_model->visa_australia_delete($id);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Australia visa items delete successfully</div>");
            redirect(base_url().'cms/visa_australia');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function visa_australia_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');


            $Id=$_REQUEST['Id'];
            $CategoryId=$_REQUEST['CategoryId'];
            $Title=$_REQUEST['Title'];
            $Details=$_REQUEST['Details'];
            $hrflink=$_REQUEST['hrflink'];
            $Link=$_REQUEST['Link'];

            $this->Admin_model->visa_australia_update($Id,$CategoryId,$Title,$Details,$hrflink,$Link);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Australia visa items update successfully</div>");
            redirect(base_url().'cms/visa_australia');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function cms_visa_newzealand()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');


            $VisaItemsData=array(
                'visa_category_id'=>$_REQUEST['CategoryId'],
                'title'=>$_REQUEST['Title'],
                'details'=>$_REQUEST['Details'],
                'hrflink'=>$_REQUEST['hrflink'],
                'link'=>$_REQUEST['Link'],
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );

            $this->Admin_model->visa_newzealand_items_add($VisaItemsData);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>New visa items add successfully</div>");
            redirect(base_url().'cms/visa_newzealand');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function visa_newzealand_delete($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $this->Admin_model->visa_newzealand_delete($id);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>New Zealand visa items delete successfully</div>");
            redirect(base_url().'cms/visa_newzealand');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function visa_newzealand_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');


            $Id=$_REQUEST['Id'];
            $CategoryId=$_REQUEST['CategoryId'];
            $Title=$_REQUEST['Title'];
            $Details=$_REQUEST['Details'];
            $hrflink=$_REQUEST['hrflink'];
            $Link=$_REQUEST['Link'];

            $this->Admin_model->visa_newzealand_update($Id,$CategoryId,$Title,$Details,$hrflink,$Link);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>New Zealand visa items update successfully</div>");
            redirect(base_url().'cms/visa_newzealand');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function cms_visa_canada()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');


            $VisaItemsData=array(
                'visa_category_id'=>$_REQUEST['CategoryId'],
                'title'=>$_REQUEST['Title'],
                'details'=>$_REQUEST['Details'],
                'hrflink'=>$_REQUEST['hrflink'],
                'link'=>$_REQUEST['Link'],
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );

            $this->Admin_model->visa_canada_items_add($VisaItemsData);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>New visa items add successfully</div>");
            redirect(base_url().'cms/visa_canada');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function visa_canada_delete($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $this->Admin_model->visa_canada_delete($id);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Canada visa items delete successfully</div>");
            redirect(base_url().'cms/visa_canada');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function visa_canada_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');


            $Id=$_REQUEST['Id'];
            $CategoryId=$_REQUEST['CategoryId'];
            $Title=$_REQUEST['Title'];
            $Details=$_REQUEST['Details'];
            $hrflink=$_REQUEST['hrflink'];
            $Link=$_REQUEST['Link'];

            $this->Admin_model->visa_canada_update($Id,$CategoryId,$Title,$Details,$hrflink,$Link);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Canada visa items update successfully</div>");
            redirect(base_url().'cms/visa_canada');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function cms_visa_sweden()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $VisaItemsData=array(
                'visa_category_id'=>$_REQUEST['CategoryId'],
                'title'=>$_REQUEST['Title'],
                'details'=>$_REQUEST['Details'],
                'hrflink'=>$_REQUEST['hrflink'],
                'link'=>$_REQUEST['Link'],
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );

            $this->Admin_model->visa_sweden_items_add($VisaItemsData);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>New visa items add successfully</div>");
            redirect(base_url().'cms/visa_sweden');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function visa_sweden_delete($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $this->Admin_model->visa_sweden_delete($id);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Sweden visa items delete successfully</div>");
            redirect(base_url().'cms/visa_sweden');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function visa_sweden_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');


            $Id=$_REQUEST['Id'];
            $CategoryId=$_REQUEST['CategoryId'];
            $Title=$_REQUEST['Title'];
            $Details=$_REQUEST['Details'];
            $hrflink=$_REQUEST['hrflink'];
            $Link=$_REQUEST['Link'];

            $this->Admin_model->visa_sweden_update($Id,$CategoryId,$Title,$Details,$hrflink,$Link);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Sweden visa items update successfully</div>");
            redirect(base_url().'cms/visa_sweden');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function cms_visa_malaysia()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');


            $VisaItemsData=array(
                'visa_category_id'=>$_REQUEST['CategoryId'],
                'title'=>$_REQUEST['Title'],
                'details'=>$_REQUEST['Details'],
                'hrflink'=>$_REQUEST['hrflink'],
                'link'=>$_REQUEST['Link'],
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );

            $this->Admin_model->visa_malaysia_items_add($VisaItemsData);
            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>New visa items add successfully</div>");
            redirect(base_url().'cms/visa_malaysia');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function visa_malaysia_delete($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $this->Admin_model->visa_malaysia_delete($id);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Malaysia visa items delete successfully</div>");
            redirect(base_url().'cms/visa_malaysia');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function visa_malaysia_update()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            $Id=$_REQUEST['Id'];
            $CategoryId=$_REQUEST['CategoryId'];
            $Title=$_REQUEST['Title'];
            $Details=$_REQUEST['Details'];
            $hrflink=$_REQUEST['hrflink'];
            $Link=$_REQUEST['Link'];

            $this->Admin_model->visa_malaysia_update($Id,$CategoryId,$Title,$Details,$hrflink,$Link);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Malaysia visa items update successfully</div>");
            redirect(base_url().'cms/visa_malaysia');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }




}