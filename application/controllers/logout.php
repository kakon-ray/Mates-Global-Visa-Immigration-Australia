<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 7/2/2015
 * Time: 10:40 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller
{
    public function __construct()
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
        $this->session->unset_userdata('logged_in');
        redirect('cms', 'refresh');
    }
    public function user_logout()
    {
        $this->session->unset_userdata('logged_in');
        redirect('user_panel', 'refresh');
    }

}