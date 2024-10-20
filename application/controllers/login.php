<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 12/5/2014
 * Time: 7:50 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_login_model','',TRUE);
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
            //redirect('login/UserLogin');
            $this->load->view('user_login');
            //echo "Ashsih";
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
        //Field validation succeeded.  Validate against database
        $UserName = $this->input->post('UserName');
        //query the database
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