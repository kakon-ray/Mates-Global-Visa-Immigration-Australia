<?php

/**
 * Created by PhpStorm.
 * User: hp
 * Date: 10/16/23
 * Time: 11:28 AM
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Web_model extends CI_Model
{
    public function home_slider()
    {
        $this->db->select('*');
        $query = $this->db->get('cms_slider');
        return $query->result_array();
    }
    public function home_about_company()
    {
        $this->db->select('*');
        $query = $this->db->get('home_about_company');
        return $query->result_array();
    }
    public function home_country_offer()
    {
        $this->db->select('*');
        $this->db->limit(6);
        $query = $this->db->get('home_country_offer');
        return $query->result_array();
    }
    public function home_video()
    {
        $this->db->select('*');
        $this->db->limit(6);
        $query = $this->db->get('home_video');
        return $query->result_array();
    }
    public function immigration_service()
    {
        $this->db->select('*');
        $this->db->limit(4);
        $query = $this->db->get('immigration_service');
        return $query->result_array();
    }
    public function home_contact()
    {
        $this->db->select('*');
        $query = $this->db->get('home_contact');
        return $query->result_array();
    }
    public function company_profile_data()
    {
        $this->db->select('*');
        $query = $this->db->get('company_profile');
        return $query->result_array();
    }
    public function mission_vision_data()
    {
        $this->db->select('*');
        $query = $this->db->get('mission_vision');
        return $query->result_array();
    }
    public function student_visa_data()
    {
        $this->db->select('*');
        $query = $this->db->get('student_visa');
        return $query->result_array();
    }
    public function work_permit_visa_data()
    {
        $this->db->select('*');
        $query = $this->db->get('work_permit_visa');
        return $query->result_array();
    }
    public function training_visa_data()
    {
        $this->db->select('*');
        $query = $this->db->get('training_visa');
        return $query->result_array();
    }
    public function investment_visa_data()
    {
        $this->db->select('*');
        $query = $this->db->get('investment_visa');
        return $query->result_array();
    }
    public function tourist_visa_data()
    {
        $this->db->select('*');
        $query = $this->db->get('tourist_visa');
        return $query->result_array();
    }
    public function resume_building_data()
    {
        $this->db->select('*');
        $query = $this->db->get('resume_building');
        return $query->result_array();
    }
    public function interview_matching_data()
    {
        $this->db->select('*');
        $query = $this->db->get('interview_matching');
        return $query->result_array();
    }
    public function interview_preparation_data()
    {
        $this->db->select('*');
        $query = $this->db->get('interview_preparation');
        return $query->result_array();
    }
    public function career_counseling_data()
    {
        $this->db->select('*');
        $query = $this->db->get('career_counseling');
        return $query->result_array();
    }
    public function hire_staff_data()
    {
        $this->db->select('*');
        $query = $this->db->get('hire_staff');
        return $query->result_array();
    }
    public function country_australia_data()
    {
        $this->db->select('*');
        $query = $this->db->get('country_serve_australia');
        return $query->result_array();
    }
    public function country_newzealand_data()
    {
        $this->db->select('*');
        $query = $this->db->get('country_serve_newzealand');
        return $query->result_array();
    }
    public function country_canada_data()
    {
        $this->db->select('*');
        $query = $this->db->get('country_serve_canada');
        return $query->result_array();
    }
    public function country_sweden_data()
    {
        $this->db->select('*');
        $query = $this->db->get('country_serve_sweden');
        return $query->result_array();
    }
    public function country_malaysia_data()
    {
        $this->db->select('*');
        $query = $this->db->get('country_serve_malaysia');
        return $query->result_array();
    }
    public function visa_category()
    {
        $this->db->select('*');
        $this->db->where('country', 'Australia');
        $query = $this->db->get('visa_category');
        return $query->result_array();
    }
    public function visa_category_newzealand()
    {
        $this->db->select('*');
        $this->db->where('country', 'NewZealand');
        $query = $this->db->get('visa_category');
        return $query->result_array();
    }
    public function visa_category_canada()
    {
        $this->db->select('*');
        $this->db->where('country', 'Canada');
        $query = $this->db->get('visa_category');
        return $query->result_array();
    }
    public function visa_category_sweden()
    {
        $this->db->select('*');
        $this->db->where('country', 'Sweden');
        $query = $this->db->get('visa_category');
        return $query->result_array();
    }
    public function visa_category_malaysia()
    {
        $this->db->select('*');
        $this->db->where('country', 'Malaysia');
        $query = $this->db->get('visa_category');
        return $query->result_array();
    }
    public function visa_category_items_australia()
    {
        $this->db->select('*');
        $query = $this->db->get('visa_australia');
        return $query->result_array();
    }
    public function visa_category_items_newzealand()
    {
        $this->db->select('*');
        $query = $this->db->get('visa_newzealand');
        return $query->result_array();
    }
    public function visa_category_items_canada()
    {
        $this->db->select('*');
        $query = $this->db->get('visa_canada');
        return $query->result_array();
    }
    public function visa_category_items_sweden()
    {
        $this->db->select('*');
        $query = $this->db->get('visa_sweden');
        return $query->result_array();
    }
    public function visa_category_items_malaysia()
    {
        $this->db->select('*');
        $query = $this->db->get('visa_malaysia');
        return $query->result_array();
    }

    /******student_assessment********************/
    public function new_student_assessment($StudentAssessmentFormData)
    {
        $this->db->insert('student_assessment_request', $StudentAssessmentFormData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    /******student_assessment new********************/
    public function new_student_assessment_submit($StudentAssessmentFormData)
    {
        $this->db->insert('study_visa_application_form_main', $StudentAssessmentFormData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    /******student_assessment submit child********************/
    public function new_student_assessment_submit_child($StudentAssessmentChildFormData)
    {
        $this->db->insert('study_visa_application_form_child', $StudentAssessmentChildFormData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    /****** Visitor Visa Application Submit ********************/
    public function visitor_visa_submit($VisitorFormData)
    {
        $this->db->insert('visitor_visa_application_form', $VisitorFormData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    public function new_user_create($UserLoginData)
    {
        $this->db->insert('user_basic', $UserLoginData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function user_ac_check($useremail)
    {
        $this->db->select('*');
        $this->db->where('user_name', $useremail);
        $this->db->where('user_type', 'user');
        $query = $this->db->get('user_basic');
        return $query->row_array();
    }
    /******student_assessment********************/

    /*******************Hit Log******************/
    public function new_hit_log($DbModelHitData)
    {
        $this->db->insert('hits_info', $DbModelHitData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function hit_check($ip, $date)
    {
        $this->db->select('*');
        $this->db->where('user_ip', $ip);
        $this->db->where('d_date', $date);
        $query = $this->db->get('hits_info');
        return $query->row_array();
    }
    public function hit_data($ip, $date)
    {
        $sql = "SELECT * FROM hits_info WHERE user_ip='$ip' AND d_date='$date'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function hit_log_update($NewHit, $ip, $date, $time)
    {
        $this->db->where('user_ip', $ip);
        $this->db->where('d_date', $date);
        $this->db->set('total_hits', $NewHit);
        $this->db->set('d_time', $time);
        $this->db->update('hits_info');
    }
    /*******************Hit Log******************/
}
