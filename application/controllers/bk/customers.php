<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 8/27/23
 * Time: 12:10 PM
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller
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
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Customers_model');
            $this->data['Customers']=$this->Customers_model->customer();
            $this->load->view('admin/v_customers', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }
    public function customers_edit()
    {
        echo "customer edit options under develop";
    }
    public function customers_delete()
    {
        echo "customer delete options under develop";
    }

    public function add_customers()
    {
        $jsonData = file_get_contents('php://input');
        $post = json_decode(file_get_contents('php://input'), TRUE);

        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->load->Model('Customers_model');

        //$jsonData = '{"name":"Md. Mahbubur Rahman","picture":"","mobile":"01719023054","latitude":0.0,"longitude":0.0}';

        if($jsonData=="")
        {
            echo "data not found";
        }
        else
        {
            $customers_id=time();
            $NewCustomerData=array(
                'customer_id'=>$customers_id,
                'name'=>$post['name'],
                'picture'=>$post['picture'],
                'mobile'=>$post['mobile'],
                'password'=>$post['password'],
                'address'=>$post['address'],
                'lattitude'=>$post['latitude'],
                'longitude'=>$post['longitude'],
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );
            $this->Customers_model->add_new_customer($NewCustomerData);

            $RequestData=array(
                  'test_value'=>$jsonData,
                  'd_date'=>$date,
                  'd_time'=>$time,
            );
            $this->Customers_model->add_test_customers($RequestData);
            echo "new customer add successfully";
        }
    }

    public function login()
    {
        $jsonData = file_get_contents('php://input');
        $post = json_decode(file_get_contents('php://input'), TRUE);

        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->load->Model('Customers_model');

        if($jsonData=="")
        {
            $result=array(
                'result'=>'invalid request'
            );
         echo json_encode($result);
        }
        else
        {
            $mobile=$post['mobile'];
            $password=$post['password'];
            $DBCustomerCheck=$this->Customers_model->customer_login_check($mobile,$password);
            if(count($DBCustomerCheck)>0)
            {
               foreach ($this->Customers_model->customer_login_data($mobile,$password) as $CustomersData)
               {
                   $customer_id=$CustomersData['customer_id'];
                   $name=$CustomersData['name'];
                   $picture=$CustomersData['picture'];
                   $mobile=$CustomersData['mobile'];
               }

               $PreviewData=array(
                   'customer_id'=>$customer_id,
                   'name'=>$name,
                   'picture'=>'https://globalconnex.com.au/admin/others/upload/customers/sample.png',
                   'mobile'=>$mobile,
               );
              echo  json_encode($PreviewData);
            }
            else
            {
                $result=array(
                    'result'=>'wrong number & password'
                );
               echo json_encode($result);
            }
        }
    }
    public function forget_password()
    {
        $jsonData = file_get_contents('php://input');
        $post = json_decode(file_get_contents('php://input'), TRUE);

        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->load->Model('Customers_model');

        if($jsonData=="")
        {
            $result=array(
                'result'=>'invalid request'
            );
            echo json_encode($result);
        }
        else
        {
            $otp= rand ( 1000 , 9999 );
            $password=1234;
            $mobile=$post['mobile'];
            $this->Customers_model->reset_password($mobile,$password);


            $PreviewData=array(
                'mobile'=>$mobile,
                'password'=>$password,
                'otp'=>$otp,
            );
            echo  json_encode($PreviewData);

        }
    }
    public function reset_password()
    {
        $jsonData = file_get_contents('php://input');
        $post = json_decode(file_get_contents('php://input'), TRUE);

        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->load->Model('Customers_model');

        if($jsonData=="")
        {
            $result=array(
                'result'=>'invalid request'
            );
            echo json_encode($result);
        }
        else
        {
            $mobile=$post['mobile'];
            $password=$post['password'];
            $confirm_password=$post['confirm_password'];
            if($password==$confirm_password)
            {
                $this->Customers_model->reset_password($mobile,$password);
                $result=array(
                    'result'=>'password reset successfully'
                );
                echo json_encode($result);
            }
            else
            {
                $result=array(
                    'result'=>'password not match'
                );
                echo json_encode($result);
            }

        }
    }
    public function dashboard()
    {
        $jsonData = file_get_contents('php://input');
        $post = json_decode(file_get_contents('php://input'), TRUE);

        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->load->Model('Customers_model');

        if($jsonData=="")
        {
            $result=array(
                'result'=>'invalid request'
            );
            echo json_encode($result);
        }
        else
        {
            $mobile=$post['mobile'];
            $PreviewData=array(
                'mobile'=>$mobile,
                'purchase'=>0,
                'discount'=>0,
                'dues'=>0,
                'reward'=>0,
            );
            echo  json_encode($PreviewData);

        }
    }
    public function shop_slider()
    {
        $jsonData = file_get_contents('php://input');
        $post = json_decode(file_get_contents('php://input'), TRUE);

        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->load->Model('Customers_model');

        if($jsonData=="")
        {
            $result=array(
                'result'=>'invalid request'
            );
            echo json_encode($result);
        }
        else
        {
            $mobile=$post['mobile'];
            echo "[";
            foreach($this->Customers_model->shop_slider() as $SliderData)
            {
                $slider_image=$SliderData['slider_image'];
                $PreviewData=array(
                    'slider'=>'https://globalconnex.com.au/admin/others/upload/shop_slider/'.$slider_image,
                );
             //   echo  json_encode($PreviewData, JSON_UNESCAPED_SLASHES);
                echo json_encode($PreviewData, JSON_UNESCAPED_SLASHES), ','."\n";
            }
            $PreviewData2=array(
                'slider'=>'https://globalconnex.com.au/admin/others/upload/shop_slider/banner1.png',
            );
            echo json_encode($PreviewData2, JSON_UNESCAPED_SLASHES);
            echo "]";
        }
    }
    public function slider()
    {
        if($this->session->userdata('logged_in'))
        {
           // echo "Slider data show here";
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Customers_model');
            $this->data['Slider']=$this->Customers_model->slider_data();
            $this->load->view('admin/v_slider', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function add_banner()
    {
        if($this->session->userdata('logged_in'))
        {
            // echo "Slider data show here";
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Customers_model');
            $this->data['Slider']=$this->Customers_model->slider_data();
            $this->load->view('admin/v_add_banner', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function retailer_shop()
    {
        $jsonData = file_get_contents('php://input');
        $post = json_decode(file_get_contents('php://input'), TRUE);

        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->load->Model('Customers_model');

        if($jsonData=="")
        {
            $result=array(
                'result'=>'invalid request'
            );
            echo json_encode($result);
        }
        else
        {
            $mobile=$post['mobile'];
            echo '{"retailer_shop":[';
            $PreviewData=array(
                'store_name'=>'BismillahStore',
                'store_image'=>'http://globalconnex.com.au/admin/others/upload/store_picture/0fa3c8e27df9c8fc4c65248758fcf61e.jpg',
                'date'=> $date,
                'amount'=>500,
                'discount'=>200,
            );
            echo  json_encode($PreviewData, JSON_UNESCAPED_SLASHES);
            echo '],"status": 200}';

        }

    }


    public function dev()
    {
       echo  rand ( 1000 , 9999 );

        exit();

        $string = '{"projectnumber" : "4444","projecdescription" : "4444", "articles" : [{"position":1, "article_id" : 676, "online_text" : "### Behälter; Band I-III nach indiv. Stückliste, Sprache: DE
 - Sprache: de"},{"position":2, "article_id" : 681, "online_text" : "### Behälter; Band I-III nach indiv. Stückliste, Sprache: ###
 - Sprache: en"}]}';


        $string = preg_replace("/[\r\n]+/", " ", $string);
        $json = utf8_encode($string);
        $json = json_decode($json);
        var_dump($json);
    }


}