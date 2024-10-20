<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/25/24
 * Time: 11:42 AM
 */


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_panel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->library('pagination');         /* load pagination Library */
        $this->load->library('form_validation');    /* load validation Library */
//        $this->load->helper('function_helper');
//        $this->load->Model('m_home');
        $this->load->model('user_login_model');
        $this->load->library('session');
    }
    public function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('UserName', 'UserName', 'trim|required|xss_clean');
        $this->form_validation->set_rules('UserPassword', 'UserPassword', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page
            $this->session->set_flashdata('message', "<div class='infoMessageError'>Wrong Username & Password</div>");
            $this->load->view('web/pages/v_user_login');
          //  echo "Wrong Username & Password";

        }
        else
        {
            //Go to private area
            redirect('user_log_process', 'refresh');
            //echo "Go to private area";
        }

    }
    function check_database($UserPassword)
    {
        $UserName = $this->input->post('UserName');

        $result = $this->user_login_model->login($UserName, $UserPassword);
        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'user_name' => $row->user_name,
                    'user_type' => $row->user_type,
                    'full_name' => $row->full_name,
                    'user_image' => $row->user_image,
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

}