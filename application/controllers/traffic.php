<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2/17/24
 * Time: 4:42 PM
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Traffic extends CI_Controller
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
        header('Content-Type: text/html; charset=utf-8');
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->load->Model('Admin_model');

        if(isset($_REQUEST['sign']))
        {
            $sign=$_REQUEST['sign'];
            $click=$_REQUEST['click'];
           // $msisdn=$this->msisdn();
            $TrafficData=array(
                'msisdn'=>"null",
                'sign_value'=>$sign,
                'click_value'=>$click,
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );
            $this->Admin_model->add_traffic($TrafficData);
           echo "ok";
        }
        else
        {
            echo "invalid";
        }

    }

    public function msisdn()
    {
        $_HEADER = apache_request_headers();

        if ( isset( $_SERVER['HTTP_X_UP_CALLING_LINE_ID'] ) )
        {
            $msisdn = $_SERVER['HTTP_X_UP_CALLING_LINE_ID'];
        }
        else if ( isset( $_SERVER['HTTP_X_HTS_CLID'] ) )
        {
            $msisdn = $_SERVER['HTTP_X_HTS_CLID'];
        }
        else if ( isset( $_SERVER['HTTP_MSISDN'] ) )
        {
            $msisdn = $_SERVER['HTTP_MSISDN'];
        }
        else if ( isset( $_SERVER['X_MSISDN'] ) )
        {
            $msisdn = $_SERVER['X_MSISDN'];
        }
        else if ( isset( $_SERVER['X-MSISDN'] ) )
        {
            $msisdn = $_SERVER['X-MSISDN'];
        }
        else if ( isset( $_SERVER['HTTP_X_WAP_NETWORK_CLIENT_MSISDN'] ) )
        {
            $msisdn = $_SERVER['HTTP_X_WAP_NETWORK_CLIENT_MSISDN'];
        }
        else if ( isset( $_COOKIE['User-Identity-Forward-msisdn'] ) )
        {
            $msisdn = $_COOKIE['User-Identity-Forward-msisdn'];
        }
        else if ( isset( $_HEADER['x-msisdn'] ) )
        {
            $msisdn = $_HEADER['x-msisdn'];
        }
        return $msisdn;
    }

}

//https://globalconnex.com.au/demo/traffic/?sign=xossbbb3761ec36eb45e72ed5c0143bdfd5b&click={click}






//https://livetraffic.xyz/?sign=xossbbb3761ec36eb45e72ed5c0143bdfd5b&click={click}&income=1