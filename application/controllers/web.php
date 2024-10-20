<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 10/10/23
 * Time: 12:49 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web extends CI_Controller
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
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $ip=$_SERVER['REMOTE_ADDR'];

        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));

        $this->load->Model('Web_model');

        $DBHitCheck=$this->Web_model->hit_check($ip,$date);
        if(count($DBHitCheck)>0)
        {
            foreach($this->Web_model->hit_data($ip,$date) as $HitLogData)
            {
                $BeForeHit=$HitLogData['total_hits'];
            }
            $NewHit=$BeForeHit+1;
            $this->Web_model->hit_log_update($NewHit,$ip,$date,$time);
        }
        else
        {
            $DbModelHitData=array(
                'user_ip'=>$ip,
                'user_agent'=>$u_agent,
                'device'=>'mobile',
                'country'=>'not found',
                'total_hits'=>1,
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1
            );
            $this->Web_model->new_hit_log($DbModelHitData);
        }

        $this->load->Model('Web_model');
        $this->data['Slider']=$this->Web_model->home_slider();
        $this->data['AboutCompany']=$this->Web_model->home_about_company();
        $this->data['CountryOffer']=$this->Web_model->home_country_offer();
        $this->data['Video']=$this->Web_model->home_video();
        $this->data['Immigration']=$this->Web_model->immigration_service();
        $this->data['Contact']=$this->Web_model->home_contact();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_home',$this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function company_profile()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['Profile']=$this->Web_model->company_profile_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_company_profile', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function mission_vision()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['MissionVision']=$this->Web_model->mission_vision_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_mission_vision', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function director_message()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->load->view('web/v_director_message', $this->data);
    }
    public function expert()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_expert', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    /*************Visa Consultant Start*************************/
    public function student_visa()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['StudentVisa']=$this->Web_model->student_visa_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_student_visa', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function student_visa_details()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['StudentVisa']=$this->Web_model->student_visa_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_student_visa_details', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function student_visa_details_au()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['StudentVisa']=$this->Web_model->student_visa_data();
        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/student_visa/student_visa_details_au', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function student_visa_details_nu()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['StudentVisa']=$this->Web_model->student_visa_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/student_visa/student_visa_details_nu', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function student_visa_details_ca()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['StudentVisa']=$this->Web_model->student_visa_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/student_visa/student_visa_details_ca', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function student_visa_details_sw()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['StudentVisa']=$this->Web_model->student_visa_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/student_visa/student_visa_details_sw', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function work_permit_visa()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['WorkPermit']=$this->Web_model->work_permit_visa_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_work_permit', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function work_visa_details_au()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['WorkPermit']=$this->Web_model->work_permit_visa_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/work_visa_details_au', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function training_visa()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['TrainingVisa']=$this->Web_model->training_visa_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_training_visa', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function investment_visa()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['InvestmentVisa']=$this->Web_model->investment_visa_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_investment_visa', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function tourist_visa()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['TouristVisa']=$this->Web_model->tourist_visa_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_tourist_visa', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    /*************Visa Consultant End*************************/

    /*************Job Recruitment Start*************************/
    public function resume_building()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['ResumeBuilding']=$this->Web_model->resume_building_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_resume_building', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function interview_matching()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['InterviewMatching']=$this->Web_model->interview_matching_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_interview_matching', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function interview_preparation()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['InterviewPreparation']=$this->Web_model->interview_preparation_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_interview_preparation', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function career_counseling()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['CareerCounseling']=$this->Web_model->career_counseling_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_career_counseling', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function hire_staff()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['HireStaff']=$this->Web_model->hire_staff_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_hire_staff', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    /*************Job Recruitment End*************************/

    public function country_australia()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['ServeAustralia']=$this->Web_model->country_australia_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_country_australia', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function country_newzealand()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['ServeNewzealand']=$this->Web_model->country_newzealand_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_country_newzealand', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function country_canada()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['ServeCanada']=$this->Web_model->country_canada_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_country_canada', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function country_sweden()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['ServeSweden']=$this->Web_model->country_sweden_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_country_sweden', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function country_malaysia()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['ServeMalaysia']=$this->Web_model->country_malaysia_data();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_country_malaysia', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function visa_australia()
   {
       $this->load->Model('Web_model');
       $this->data['Contact']=$this->Web_model->home_contact();
       $this->data['VisaCategory']=$this->Web_model->visa_category();
       $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

       $this->load->view('web/pages/v_header',$this->data);
       $this->load->view('web/v_visa_australia', $this->data);
       $this->load->view('web/pages/v_footer',$this->data);
   }
    public function visa_newzealand()
   {
       $this->load->Model('Web_model');
       $this->data['Contact']=$this->Web_model->home_contact();
       $this->data['VisaCategory']=$this->Web_model->visa_category_newzealand();
       $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_newzealand();

       $this->load->view('web/pages/v_header',$this->data);
       $this->load->view('web/v_visa_newzealand', $this->data);
       $this->load->view('web/pages/v_footer',$this->data);
   }
    public function visa_canada()
   {
       $this->load->Model('Web_model');
       $this->data['Contact']=$this->Web_model->home_contact();
       $this->data['VisaCategory']=$this->Web_model->visa_category_canada();
       $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_canada();

       $this->load->view('web/pages/v_header',$this->data);
       $this->load->view('web/v_visa_canada', $this->data);
       $this->load->view('web/pages/v_footer',$this->data);
   }
    public function visa_sweden()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['VisaCategory']=$this->Web_model->visa_category_sweden();
        $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_sweden();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_visa_sweden', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function visa_malaysia()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['VisaCategory']=$this->Web_model->visa_category_malaysia();
        $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_malaysia();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_visa_malaysia', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function student_assessment()
   {
       $this->load->Model('Web_model');
       $this->data['Contact']=$this->Web_model->home_contact();
       $this->data['VisaCategory']=$this->Web_model->visa_category();
       $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

       $this->load->view('web/pages/v_header',$this->data);
       $this->load->view('web/student_visa/student_assessment_new', $this->data);
//       $this->load->view('web/v_student_assessment', $this->data);
       $this->load->view('web/pages/v_footer',$this->data);
   }

   public function visitor_visa()
   {
       $this->load->Model('Web_model');
       $this->data['Contact']=$this->Web_model->home_contact();
       $this->data['VisaCategory']=$this->Web_model->visa_category();
       $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

       $this->load->view('web/pages/v_header',$this->data);
       $this->load->view('web/visitor_visa/visitor_visa', $this->data);
//       $this->load->view('web/v_student_assessment', $this->data);
       $this->load->view('web/pages/v_footer',$this->data);
   }
    public function guardian_visa_assessment()
   {
       $this->load->Model('Web_model');
       $this->data['Contact']=$this->Web_model->home_contact();
       $this->data['VisaCategory']=$this->Web_model->visa_category();
       $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

       $this->load->view('web/pages/v_header',$this->data);
       $this->load->view('web/v_guardian_visa_assessment', $this->data);
       $this->load->view('web/pages/v_footer',$this->data);
   }
    public function guardian_applicants_section()
   {
       $applicants=$_REQUEST['q'];
       if($applicants==2)
       {
           $this->load->view('web/v_guardian_applicants_section2');
       }
       elseif($applicants==3)
       {
           $this->load->view('web/v_guardian_applicants_section3');
       }
   }
    public function contact()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_contact', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function assessment()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['VisaCategory']=$this->Web_model->visa_category();
        $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/v_assessment', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }

    /*****************Attachment Start************************/
    public function au_student_attachment()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['VisaCategory']=$this->Web_model->visa_category();
        $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/attachment/au_student_attachment', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function au_student_attachment590()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['VisaCategory']=$this->Web_model->visa_category();
        $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/attachment/au_student_attachment_590', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function nz_student_attachment()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['VisaCategory']=$this->Web_model->visa_category();
        $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/attachment/nz_student_attachment', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function ca_student_attachment()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['VisaCategory']=$this->Web_model->visa_category();
        $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/attachment/ca_student_attachment', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function sw_student_attachment()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['VisaCategory']=$this->Web_model->visa_category();
        $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/attachment/sw_student_attachment', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function sn_student_attachment()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['VisaCategory']=$this->Web_model->visa_category();
        $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/attachment/sn_student_attachment', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    public function ma_student_attachment()
    {
        $this->load->Model('Web_model');
        $this->data['Contact']=$this->Web_model->home_contact();
        $this->data['VisaCategory']=$this->Web_model->visa_category();
        $this->data['VisaCategoryItems']=$this->Web_model->visa_category_items_australia();

        $this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/attachment/ma_student_attachment', $this->data);
        $this->load->view('web/pages/v_footer',$this->data);
    }
    /*****************Attachment End************************/

    public function success()
    {
        $this->load->view('web/v_success');
    }
    public function form_category()
    {
        $form_category=$_REQUEST['q'];
        if($form_category=="Student Visa")
        {
            $this->load->view('web/assessment_form/v_assessment_student');
        }
        elseif($form_category=="Work Visa")
        {
            $this->load->view('web/assessment_form/v_work_visa');
        }
        elseif($form_category=="Job Seeker Visa")
        {
            $this->load->view('web/assessment_form/v_work_visa');
        }
        elseif($form_category=="PR Visa")
        {
            $this->load->view('web/assessment_form/v_pr_visa');
        }
        elseif($form_category=="Visitor Business Visa")
        {
            $this->load->view('web/assessment_form/v_visitor_business_visa');
        }
        elseif($form_category=="Student Guardian Visa")
        {
            $this->load->view('web/assessment_form/v_guardian_visa');
        }
        else
        {
            echo "Form is under construction";
        }
    }
    public function who_country_apply()
    {
        $country_apply=$_REQUEST['q'];

        if($country_apply=="Inside")
        {
            echo " <option value=\"Bangladesh\">Bangladesh</option>";
        }
        else
        {
            echo
            "
            <option value=\"Australia\">Australia</option>
            <option value=\"NewZealand\">New Zealand</option>
            <option value=\"Canada\">Canada</option>
            <option value=\"Sweden\">Sweden</option>
            <option value=\"Malaysia\">Malaysia</option>
            ";
        }
    }
    public function martial_status()
    {
        $status=$_REQUEST['q'];
        if($status=="Married")
        {
            $this->load->view('web/assessment_form/v_married');
        }
        elseif($status=="Husband")
        {
           $this->load->view('web/assessment_form/v_husband');
        }
        elseif($status=="Wife")
        {
            $this->load->view('web/assessment_form/v_wife');
        }
        elseif($status=="Children")
        {
            $this->load->view('web/assessment_form/v_select_children');
        }
        elseif($status=="HusbandChildren")
        {
            $this->load->view('web/assessment_form/v_husband_children');
        }
        elseif($status=="WifeChildren")
        {
            $this->load->view('web/assessment_form/v_wife_children');
        }
    }
    public function children_form()
    {
        $status=$_REQUEST['q'];
        if($status==1)
        {
           // echo "1st Children";
            $this->load->view('web/assessment_form/1st_children');
        }
        elseif($status==2)
        {
            $this->load->view('web/assessment_form/2nd_children');
        }
        elseif($status==3)
        {
            $this->load->view('web/assessment_form/3rd_children');
        }

    }
    public function user_login()
    {
        //$this->load->view('web/pages/v_header',$this->data);
        $this->load->view('web/pages/v_user_login',$this->data);
       // $this->load->view('web/pages/v_footer',$this->data);
    }
    public function sign_up()
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));

        $username=$_REQUEST['username'];
        $useremail=$_REQUEST['useremail'];
        $userpassword=$_REQUEST['userpassword'];

        $this->load->Model('Web_model');
        $DBUserCheck=$this->Web_model->user_ac_check($useremail);
        if(count($DBUserCheck)>0)
        {
            $this->session->set_flashdata('message', "<div class='infoMessageError'>Email already exited try another</div>");
            redirect(base_url().'user_panel');
        }
        else
        {
            $UserLoginData=array(
                'user_name'=>$useremail,
                'user_password'=>md5($userpassword),
                'user_type'=>'user',
                'full_name'=>$username,
                'user_image'=>'user.png',
                'status'=>1
            );
            $this->Web_model->new_user_create($UserLoginData);
            $this->session->set_flashdata('message', "<div class='infoMessage'>Account created successfully, please login</div>");
            redirect(base_url().'user_panel');
        }
    }





}