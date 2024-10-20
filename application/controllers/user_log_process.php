<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 12/6/2014
 * Time: 2:48 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_log_process extends CI_Controller
{
    public function __construct() {
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
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');


            $user_id=$session_data['id'];
            $user_name=$session_data['user_name'];
            $user_type=$session_data['user_type'];

            if($user_type=="admin")
            {
                redirect('cms/dashboard', 'refresh');
            }
            if($user_type=="user")
            {
                redirect('user/dashboard', 'refresh');
              //  echo "go to user panel";
            }

            else
            {
                $this->load->view('errors/cli/error_404');
            }

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

}