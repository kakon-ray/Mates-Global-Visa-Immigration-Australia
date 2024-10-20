<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index (){
        return view('index');
    }
    public function about (){
        return view('about');
    }
    public function educationadmission (){
        return view('educationadmission');
    }
    public function migration (){
        return view('migration');
    }
    public function jobassisstance (){
        return view('jobassisstance');
    }
    public function accomidation (){
        return view('accomidation');
    }
    public function careerdevelopmentservices (){
        return view('careerdevelopmentservices');
    }
    public function shortcoarse (){
        return view('shortcoarse');
    }
    public function carrerconsultancy (){
        return view('carrerconsultancy');
    }
    public function contact (){
        return view('contact');
    }

    public function employer_login()
    {
        $jsonData = file_get_contents('php://input');
        $post = json_decode(file_get_contents('php://input'), TRUE);

        if($jsonData=="")
        {
            $result=array(
                'result'=>'invalid request'
            );
            echo json_encode($result);
        }
        else
        {
            echo "<pre>";
            print_r($post);
            $email=$post['email'];
            $password=$post['password'];
        }
    }

    
}
