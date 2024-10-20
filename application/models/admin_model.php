<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 2/18/2017
 * Time: 8:08 PM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Admin_model extends CI_Model
{

    public function study_Visa_application()
    {
        $date=date('Y-m-d', strtotime('-0 day'));
        
        $this->db->select('*');
        $this->db->where('d_date', $date);
        $query = $this->db->get('study_visa_application_form_main');
        return $query->result_array();
    }

    public function cms_slider()
    {
        $this->db->select('*');
        $query = $this->db->get('cms_slider');
        return $query->result_array();
    }
    public function cms_slider_call($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('cms_slider');
        return $query->result_array();
    }
    public function apply_user_basic_id($email)
    {
        $this->db->select('*');
        $this->db->where('user_name', $email);
        $this->db->where('user_type', 'user');
        $query = $this->db->get('user_basic');
        return $query->result_array();
    }
    public function new_user_notification($NotificationModelData)
    {
        $this->db->insert('user_notifications', $NotificationModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    public function cms_slider_update($id,$file_name,$Title,$BigText,$SmallText)
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->db->where('id', $id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('big_text', $BigText);
        $this->db->set('small_text', $SmallText);
        $this->db->set('d_date', $date);
        $this->db->set('d_date', $date);
        $this->db->set('d_time', $time);
        $this->db->update('cms_slider');
    }
    public function home_about()
    {
        $this->db->select('*');
        $query = $this->db->get('home_about_company');
        return $query->result_array();
    }
    public function home_about_update($id,$file_name,$Title,$Details,$Link,$Phone)
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->db->where('id', $id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('details', $Details);
        $this->db->set('link', $Link);
        $this->db->set('phone', $Phone);
        $this->db->set('d_date', $date);
        $this->db->set('d_date', $date);
        $this->db->set('d_time', $time);
        $this->db->update('home_about_company');
    }
    public function home_country()
    {
        $this->db->select('*');
        $query = $this->db->get('home_country_offer');
        return $query->result_array();
    }
    public function home_country_call($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('home_country_offer');
        return $query->result_array();
    }
    public function home_country_update($Id,$file_name,$CountryName,$Details)
    {
        $this->db->where('id', $Id);
        $this->db->set('country_image', $file_name);
        $this->db->set('country_name', $CountryName);
        $this->db->set('details', $Details);
        $this->db->update('home_country_offer');
    }
    public function  add_new_country($HomeAddCountryData)
    {
        $this->db->insert('home_country_offer', $HomeAddCountryData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function country_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('home_country_offer');
    }
    public function form_delete($user_basic_id_form)
    {
        $this->db->where('user_basic_id', $user_basic_id_form);
        $this->db->delete('student_assessment_request');
    }
    public function user_data_delete($user_basic_id_form)
    {
        $this->db->where('id', $user_basic_id_form);
        $this->db->delete('user_basic');
    }
    public function attachment_data_delete($student_visa_attachment_id)
    {
        $this->db->where('id', $student_visa_attachment_id);
        $this->db->delete('student_visa_attachment');
    }
    public function home_video()
    {
        $this->db->select('*');
        $query = $this->db->get('home_video');
        return $query->result_array();
    }
    public function home_video_update($id,$file_name,$Text,$ExploreLink,$VideoLink)
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->db->where('id', $id);
        $this->db->set('image', $file_name);
        $this->db->set('text', $Text);
        $this->db->set('explore_link', $ExploreLink);
        $this->db->set('video_link', $VideoLink);
        $this->db->set('d_date', $date);
        $this->db->set('d_time', $time);
        $this->db->update('home_video');
    }
    public function immigration_service()
    {
        $this->db->select('*');
        $query = $this->db->get('immigration_service');
        return $query->result_array();
    }
    public function immigration_service_call($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('immigration_service');
        return $query->result_array();
    }
    public function user_attachment($user_basic_id_form)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id_form);
        $query = $this->db->get('student_visa_attachment');
        return $query->result_array();
    }
    public function user_info($user_basic_id_form)
    {
        $this->db->select('*');
        $this->db->where('id', $user_basic_id_form);
        $this->db->where('user_type', 'user');
        $query = $this->db->get('user_basic');
        return $query->result_array();
    }
    public function immigration_service_update($Id,$file_name,$Title,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('text', $Text);
        $this->db->update('immigration_service');
    }
    public function  add_new_service($HomeServiceData)
    {
        $this->db->insert('immigration_service', $HomeServiceData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function service_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('immigration_service');
    }
    public function home_contact()
    {
        $this->db->select('*');
        $query = $this->db->get('home_contact');
        return $query->result_array();
    }
    public function home_contact_update($id,$Address,$Email,$Phone)
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->db->where('id', $id);
        $this->db->set('address', $Address);
        $this->db->set('email', $Email);
        $this->db->set('phone', $Phone);
        $this->db->set('d_date', $date);
        $this->db->set('d_time', $time);
        $this->db->update('home_contact');
    }
    public function company_profile()
    {
        $this->db->select('*');
        $query = $this->db->get('company_profile');
        return $query->result_array();
    }
    public function company_profile_update($id,$Title,$Details)
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->db->where('id', $id);
        $this->db->set('title', $Title);
        $this->db->set('details', $Details);
        $this->db->set('d_date', $date);
        $this->db->set('d_time', $time);
        $this->db->update('company_profile');
    }
    public function mission_vision()
    {
        $this->db->select('*');
        $query = $this->db->get('mission_vision');
        return $query->result_array();
    }
    public function mission_vision_update($id,$Title,$Details)
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->db->where('id', $id);
        $this->db->set('title', $Title);
        $this->db->set('details', $Details);
        $this->db->set('d_date', $date);
        $this->db->set('d_time', $time);
        $this->db->update('mission_vision');
    }
    public function about_message()
    {
        $this->db->select('*');
        $query = $this->db->get('about_message');
        return $query->result_array();
    }
    public function  add_new_message($MessageData)
    {
        $this->db->insert('about_message', $MessageData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function message_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('about_message');
    }
    public function about_message_call($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('about_message');
        return $query->result_array();
    }
    public function about_message_update($Id,$file_name,$Name,$Designation,$Message)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('name', $Name);
        $this->db->set('designation', $Designation);
        $this->db->set('message', $Message);
        $this->db->update('about_message');
    }
    public function student_visa_call()
    {
        $this->db->select('*');
        $query = $this->db->get('student_visa');
        return $query->result_array();
    }
    public function student_visa_update($Id,$file_name,$Title,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('text', $Text);
        $this->db->update('student_visa');
    }
    public function work_permit_call()
    {
        $this->db->select('*');
        $query = $this->db->get('work_permit_visa');
        return $query->result_array();
    }
    public function work_permit_update($Id,$file_name,$Title,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('text', $Text);
        $this->db->update('work_permit_visa');
    }
    public function training_visa_call()
    {
        $this->db->select('*');
        $query = $this->db->get('training_visa');
        return $query->result_array();
    }
    public function training_visa_update($Id,$file_name,$Title,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('text', $Text);
        $this->db->update('training_visa');
    }
    public function investment_visa_call()
    {
        $this->db->select('*');
        $query = $this->db->get('investment_visa');
        return $query->result_array();
    }
    public function investment_visa_update($Id,$file_name,$Title,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('text', $Text);
        $this->db->update('investment_visa');
    }
    public function tourist_visa_call()
    {
        $this->db->select('*');
        $query = $this->db->get('tourist_visa');
        return $query->result_array();
    }
    public function tourist_visa_update($Id,$file_name,$Title,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('text', $Text);
        $this->db->update('tourist_visa');
    }
    public function resume_building_call()
    {
        $this->db->select('*');
        $query = $this->db->get('resume_building');
        return $query->result_array();
    }
    public function resume_building_update($Id,$file_name,$Title,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('text', $Text);
        $this->db->update('resume_building');
    }
    public function interview_matching_call()
    {
        $this->db->select('*');
        $query = $this->db->get('interview_matching');
        return $query->result_array();
    }
    public function interview_matching_update($Id,$file_name,$Title,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('text', $Text);
        $this->db->update('interview_matching');
    }
    public function interview_preparation_call()
    {
        $this->db->select('*');
        $query = $this->db->get('interview_preparation');
        return $query->result_array();
    }
    public function interview_preparation_update($Id,$file_name,$Title,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('text', $Text);
        $this->db->update('interview_preparation');
    }
    public function career_counseling_call()
    {
        $this->db->select('*');
        $query = $this->db->get('career_counseling');
        return $query->result_array();
    }
    public function career_counseling_update($Id,$file_name,$Title,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('text', $Text);
        $this->db->update('career_counseling');
    }
    public function hire_staff_call()
    {
        $this->db->select('*');
        $query = $this->db->get('hire_staff');
        return $query->result_array();
    }
    public function hire_staff_update($Id,$file_name,$Title,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('title', $Title);
        $this->db->set('text', $Text);
        $this->db->update('hire_staff');
    }
    public function serve_australia_call()
    {
        $this->db->select('*');
        $query = $this->db->get('country_serve_australia');
        return $query->result_array();
    }
    public function country_australia_update($Id,$Text,$file_name)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('text', $Text);
        $this->db->update('country_serve_australia');
    }
    public function serve_newzealand_call()
    {
        $this->db->select('*');
        $query = $this->db->get('country_serve_newzealand');
        return $query->result_array();
    }
    public function country_newzealand_update($Id,$Text,$file_name)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('text', $Text);
        $this->db->update('country_serve_newzealand');
    }
    public function serve_canada_call()
    {
        $this->db->select('*');
        $query = $this->db->get('country_serve_canada');
        return $query->result_array();
    }
    public function country_canada_update($Id,$Text,$file_name)
    {
        $this->db->where('id', $Id);
        $this->db->set('image', $file_name);
        $this->db->set('text', $Text);
        $this->db->update('country_serve_canada');
    }
    public function serve_sweden_call()
    {
        $this->db->select('*');
        $query = $this->db->get('country_serve_sweden');
        return $query->result_array();
    }
    public function country_sweden_update($Id,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('text', $Text);
        $this->db->update('country_serve_sweden');
    }
    public function serve_malaysia_call()
    {
        $this->db->select('*');
        $query = $this->db->get('country_serve_malaysia');
        return $query->result_array();
    }
    public function country_malaysia_update($Id,$Text)
    {
        $this->db->where('id', $Id);
        $this->db->set('text', $Text);
        $this->db->update('country_serve_malaysia');
    }
    public function visa_category()
    {
        $this->db->select('*');
        $query = $this->db->get('visa_category');
        return $query->result_array();
    }
    public function visa_category_australia()
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
    public function  add_new_category($CategoryData)
    {
        $this->db->insert('visa_category', $CategoryData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function category_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('visa_category');
    }
    public function visa_category_call($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('visa_category');
        return $query->result_array();
    }
    public function visa_category_update($Id,$CategoryName,$Country)
    {
        $this->db->where('id', $Id);
        $this->db->set('category_name', $CategoryName);
        $this->db->set('country', $Country);
        $this->db->update('visa_category');
    }
    public function visa_australia()
    {
        $this->db->select('*');
        $query = $this->db->get('visa_australia');
        return $query->result_array();
    }
    public function visa_newzealand()
    {
        $this->db->select('*');
        $query = $this->db->get('visa_newzealand');
        return $query->result_array();
    }
    public function visa_canada()
    {
        $this->db->select('*');
        $query = $this->db->get('visa_canada');
        return $query->result_array();
    }
    public function visa_sweden()
    {
        $this->db->select('*');
        $query = $this->db->get('visa_sweden');
        return $query->result_array();
    }
    public function visa_malaysia()
    {
        $this->db->select('*');
        $query = $this->db->get('visa_malaysia');
        return $query->result_array();
    }
    public function  visa_australia_items_add($VisaItemsData)
    {
        $this->db->insert('visa_australia', $VisaItemsData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function  visa_newzealand_items_add($VisaItemsData)
    {
        $this->db->insert('visa_newzealand', $VisaItemsData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function  visa_canada_items_add($VisaItemsData)
    {
        $this->db->insert('visa_canada', $VisaItemsData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function  visa_sweden_items_add($VisaItemsData)
    {
        $this->db->insert('visa_sweden', $VisaItemsData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function  visa_malaysia_items_add($VisaItemsData)
    {
        $this->db->insert('visa_malaysia', $VisaItemsData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function visa_australia_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('visa_australia');
    }
    public function visa_newzealand_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('visa_newzealand');
    }
    public function visa_canada_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('visa_canada');
    }
    public function visa_sweden_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('visa_sweden');
    }
    public function visa_malaysia_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('visa_malaysia');
    }
    public function visa_australia_call($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('visa_australia');
        return $query->result_array();
    }
    public function visa_newzealand_call($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('visa_newzealand');
        return $query->result_array();
    }
    public function visa_canada_call($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('visa_canada');
        return $query->result_array();
    }
    public function visa_sweden_call($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('visa_sweden');
        return $query->result_array();
    }
    public function visa_malaysia_call($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('visa_malaysia');
        return $query->result_array();
    }
    public function visa_australia_update($Id,$CategoryId,$Title,$Details,$hrflink,$Link)
    {
        $this->db->where('id', $Id);
        $this->db->set('visa_category_id', $CategoryId);
        $this->db->set('title', $Title);
        $this->db->set('details', $Details);
        $this->db->set('hrflink', $hrflink);
        $this->db->set('link', $Link);
        $this->db->update('visa_australia');
    }
    public function visa_newzealand_update($Id,$CategoryId,$Title,$Details,$hrflink,$Link)
    {
        $this->db->where('id', $Id);
        $this->db->set('visa_category_id', $CategoryId);
        $this->db->set('title', $Title);
        $this->db->set('details', $Details);
        $this->db->set('hrflink', $hrflink);
        $this->db->set('link', $Link);
        $this->db->update('visa_newzealand');
    }
    public function visa_canada_update($Id,$CategoryId,$Title,$Details,$hrflink,$Link)
    {
        $this->db->where('id', $Id);
        $this->db->set('visa_category_id', $CategoryId);
        $this->db->set('title', $Title);
        $this->db->set('details', $Details);
        $this->db->set('hrflink', $hrflink);
        $this->db->set('link', $Link);
        $this->db->update('visa_canada');
    }
    public function visa_sweden_update($Id,$CategoryId,$Title,$Details,$hrflink,$Link)
    {
        $this->db->where('id', $Id);
        $this->db->set('visa_category_id', $CategoryId);
        $this->db->set('title', $Title);
        $this->db->set('details', $Details);
        $this->db->set('hrflink', $hrflink);
        $this->db->set('link', $Link);
        $this->db->update('visa_sweden');
    }
    public function visa_malaysia_update($Id,$CategoryId,$Title,$Details,$hrflink,$Link)
    {
        $this->db->where('id', $Id);
        $this->db->set('visa_category_id', $CategoryId);
        $this->db->set('title', $Title);
        $this->db->set('details', $Details);
        $this->db->set('hrflink', $hrflink);
        $this->db->set('link', $Link);
        $this->db->update('visa_malaysia');
    }

    public function today_web_hit($date)
    {
        $this->db->select('*');
        $this->db->where('d_date', $date);
        $query = $this->db->get('hits_info');
        return $query->num_rows();
    }
    public function total_web_hit()
    {
        $this->db->select('*');
        $query = $this->db->get('hits_info');
        return $query->num_rows();
    }

    public function today_attachment($date)
    {
        $this->db->select('*');
        $this->db->where('d_date', $date);
        $query = $this->db->get('student_visa_attachment');
        return $query->num_rows();
    }

    public function today_apply($date)
    {
        $date=date('Y-m-d', strtotime('-0 day'));
        
        $this->db->select('*');
        $this->db->where('d_date', $date);
        $query = $this->db->get('study_visa_application_form_main');
        return $query->result_array();
    }
    
    public function total_apply()
    {
        $date=date('Y-m-d', strtotime('-0 day'));
        
        $this->db->select('*');
        $query = $this->db->get('study_visa_application_form_main');
        return $query->result_array();
    }
    public function total_apply_count()
    {
        $this->db->select('*');
        $query = $this->db->get('study_visa_application_form_main');
        return $query->num_rows();
    }
    
    public function today_apply_count()
    {
        $date=date('Y-m-d', strtotime('-0 day'));
        $this->db->select('*');
        $this->db->where('d_date', $date);
        $query = $this->db->get('study_visa_application_form_main');
        return $query->num_rows();
    }
    public function total_attachment()
    {
        $this->db->select('*');
        $query = $this->db->get('student_visa_attachment');
        return $query->num_rows();
    }
    public function attachment_data()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('student_visa_attachment');
        return $query->result_array();
    }
    public function today_attachment_data($date)
    {
        $this->db->select('*');
        $this->db->where('d_date', $date);
        $this->db->order_by("id","desc");
        $query = $this->db->get('student_visa_attachment');
        return $query->result_array();
    }
    public function assessment_request()
    {
        $this->db->select('*');
        $query = $this->db->get('student_assessment_request');
        return $query->result_array();
    }
    public function total_eligible()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('student_assessment_request');
        return $query->num_rows();
    }
    public function total_user()
    {
        $this->db->select('*');
        $this->db->where('user_type', 'user');
        $query = $this->db->get('user_basic');
        return $query->num_rows();
    }

    public function status_update($form_id)
    {
        $this->db->where('id', $form_id);
        $this->db->set('status', 1);
        $this->db->update('student_assessment_request');
    }
    public function today_apply_data($date)
    {
        $this->db->select('*');
        $this->db->where('d_date', $date);
        $this->db->order_by("id","desc");
        $query = $this->db->get('student_assessment_request');
        return $query->result_array();
    }
    public function total_user_data()
    {
        $this->db->select('*');
        $this->db->where('user_type', 'user');
        $this->db->order_by("id","desc");
        $query = $this->db->get('user_basic');
        return $query->result_array();
    }
    public function student_assessment_request_data()
    {
        $this->db->select('*');
        $query = $this->db->get('student_assessment_request');
        return $query->result_array();
    }
    public function total_apply_data()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('student_assessment_request');
        return $query->result_array();
    }
    public function total_eligible_data()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $this->db->order_by("id","desc");
        $query = $this->db->get('student_assessment_request');
        return $query->result_array();
    }
    public function pdf_form_data($form_id)
    {
        $this->db->select('*');
        $this->db->where('id', $form_id);
        $query = $this->db->get('study_visa_application_form_main');
        return $query->row_array();
    }

    public function pdf_form_data_details($form_id)
    {
        $this->db->select('*');
        $this->db->where('study_visa_application_form_main_id', $form_id);
        $querydetails = $this->db->get('study_visa_application_form_child');
        return $querydetails->result_array();
    }

    public function add_traffic($TrafficData)
    {
        $this->db->insert('mobi_traffic', $TrafficData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
























    public function addnew_wholesaler($FormData)
    {
        $this->db->insert('wholesale',$FormData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function wholesaler_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('wholesale');
    }
    public function total_wholesaler()
    {
        $this->db->select('*');
        $query = $this->db->get('wholesale');
        return $query->num_rows();
    }
    public function total_wholesaler_product()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('product');
        return $query->num_rows();
    }
    public function total_customers()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('customer_basic');
        return $query->num_rows();
    }
    public function wholesaler_product()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('product');
        return $query->result_array();
    }
    public function add_wholesaler_product($WholesalerProductData)
    {
        $this->db->insert('product',$WholesalerProductData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function wholesaler_product_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('product');
    }
    public function wholesaler_product_edit($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('product');
        return $query->result_array();
    }






    /******COMPANY ADMIN HOME PAGE MODEL*******/
    public function today_total_sale_taka($CompanyAdminId)
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));

        $this->db->select('*');
        $this->db->where('company_basic_id',$CompanyAdminId);
        $this->db->where('modified_date', $date);
        $query = $this->db->get('final_sale_basic');

        $total_sale_amount=0;
        foreach($query->result_array() as $FinalSaleBasicData)
        {
            $total_sale_amount +=$FinalSaleBasicData['paid_amount'];
        }
        return $total_sale_amount;

    }


    public function today_total_sale_profit_taka($CompanyAdminId)
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->db->select('*');
        $this->db->where('company_basic_id',$CompanyAdminId);
        $this->db->where('modified_date', $date);
        $query = $this->db->get('final_sale_basic');

        $final_sale_basic_id=array();
        foreach($query->result_array() as $FinalSaleBasicData)
        {
            $final_sale_basic_id[]=$FinalSaleBasicData['id'];
        }

        $sql2="SELECT t1.id,t1.fina_sale_basic_id,t1.product_basic_id,t1.product_code_name,t1.product_price,t1.quantity,t2.purchase_product_basic_id,t2.product_cost_price FROM final_sale_product t1
        LEFT JOIN purchase_product_basic t2 ON t1.product_basic_id = t2.purchase_product_basic_id  WHERE t1.fina_sale_basic_id IN ('" . implode("', '", $final_sale_basic_id) . "')";
        $query2=$this->db->query($sql2);

        $total_profit=array();
        foreach($query2->result_array() as $TodayDBProfitData)
        {
            $product_price=$TodayDBProfitData['product_price'];
            $product_quantity=$TodayDBProfitData['quantity'];
            $product_cost_price=$TodayDBProfitData['product_cost_price'];
            $product_profit=$product_price-$product_cost_price;
            $total_profit[]=$product_profit*$product_quantity;


        }
        $total_profit_sub= array_sum($total_profit);
        return $total_profit_sub;
    }
    public function today_total_due_amount($CompanyAdminId)
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));

        $this->db->select('*');
        $this->db->where('company_basic_id',$CompanyAdminId);
        $this->db->where('modified_date', $date);
        $query = $this->db->get('final_sale_basic');

        $total_due_amount=0;
        foreach($query->result_array() as $FinalSaleBasicData)
        {
            $total_due_amount +=$FinalSaleBasicData['due_amount'];
        }
        return $total_due_amount;
    }
    public function today_total_sale_product($CompanyAdminId)
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->db->select('*');
        $this->db->where('company_basic_id',$CompanyAdminId);
        $this->db->where('modified_date', $date);
        $query = $this->db->get('final_sale_basic');

        $final_sale_basic_id=array();
        foreach($query->result_array() as $FinalSaleBasicData)
        {
            $final_sale_basic_id[]=$FinalSaleBasicData['id'];
        }


        $sql2="SELECT t1.id,t1.fina_sale_basic_id,t1.product_basic_id,t1.product_code_name,t1.product_price,t1.quantity,t2.purchase_product_basic_id,t2.product_cost_price FROM final_sale_product t1
        LEFT JOIN purchase_product_basic t2 ON t1.product_basic_id = t2.purchase_product_basic_id  WHERE t1.fina_sale_basic_id IN ('" . implode("', '", $final_sale_basic_id) . "')";
        $query2=$this->db->query($sql2);

        $product_quantity=array();
        foreach($query2->result_array() as $TodayDBProfitData)
        {
            $product_quantity[]=$TodayDBProfitData['quantity'];
        }
        $total_product_quantity= array_sum($product_quantity);
        return $total_product_quantity;
    }
    /******COMPANY ADMIN HOME PAGE MODEL*******/

    public function company_menu($user_basic_id)
    {
        $sql="SELECT t1.id,t1.menu_name,t1.link,t2.user_basic_id FROM menu_categories t1
        LEFT JOIN company_privilege_menu t2 ON t1.id = t2.menu_cat_id WHERE t2.user_basic_id='$user_basic_id'";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function company_menu_active($user_basic_id,$MenuValue)
    {
        $sql="SELECT t1.id,t1.menu_name,t1.link,t2.user_basic_id FROM menu_categories t1
        LEFT JOIN company_privilege_menu t2 ON t1.id = t2.menu_cat_id WHERE t1.menu_name='$MenuValue' AND t2.user_basic_id='$user_basic_id'";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function get_company_menu_active($user_basic_id,$MenuValue)
    {
        $sql="SELECT t1.id,t1.menu_name,t1.link,t2.user_basic_id FROM menu_categories t1
        LEFT JOIN company_privilege_menu t2 ON t1.id = t2.menu_cat_id WHERE t1.menu_name='$MenuValue' AND t2.user_basic_id='$user_basic_id'";
        $query=$this->db->query($sql);
        foreach($query->result_array() as $MenuActiveData)
        {
            $ActiveMenuId=$MenuActiveData['id'];
        }
        return $ActiveMenuId;
    }
    public function company_sub_first($user_basic_id,$menu_id_active)
    {
        $sql="SELECT t1.id,t1.menu_sub_cat_name,t1.link,t2.user_basic_id,t2.menu_cat_id,t2.menu_sub_cat_id FROM menu_sub_categories t1
        LEFT JOIN company_privilege t2 ON t1.id = t2.menu_sub_cat_id WHERE t2.user_basic_id='$user_basic_id' AND t2.menu_cat_id='$menu_id_active' ORDER BY t1.id ASC LIMIT 1";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function company_sub_menu($user_basic_id,$menu_id_active)
    {
        $sql="SELECT t1.id,t1.menu_sub_cat_name,t1.link,t2.user_basic_id,t2.menu_cat_id,t2.menu_sub_cat_id,t2.status FROM menu_sub_categories t1
        LEFT JOIN company_privilege t2 ON t1.id = t2.menu_sub_cat_id WHERE t2.user_basic_id='$user_basic_id' AND t2.menu_cat_id='$menu_id_active' AND t2.status='1'";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function company_basic_edit_set($CompanyName,$CompanyCode,$ShortName,$Email,$Fax,$Phone,$Mobile,$TagLine,$edit_company_logo,$date,$time,$EditCompanyId)
    {
        $this->db->where('id', $EditCompanyId);
        $this->db->set('company_code', $CompanyCode);
        $this->db->set('company_name', $CompanyName);
        $this->db->set('company_tagline', $TagLine);
        $this->db->set('company_short_name', $ShortName);
        $this->db->set('company_logo', $edit_company_logo);
        $this->db->set('email', $Email);
        $this->db->set('fax', $Fax);
        $this->db->set('mobile', $Mobile);
        $this->db->set('phone', $Phone);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('company_basic');
    }
    public function company_address_edit_set($City,$State,$ZipCode,$StreetAddress,$EditCompanyId)
    {
        $this->db->where('company_basic_id', $EditCompanyId);
        $this->db->set('street_address', $StreetAddress);
        $this->db->set('city', $City);
        $this->db->set('state', $State);
        $this->db->set('zip_code', $ZipCode);
        $this->db->update('company_address');
    }
    /******COMPANY ADMIN SISTER CONCERN MODEL*******/
    public function sister_concern_check($CompanyAdminId,$SisterConcernName)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('sister_concern_name', $SisterConcernName);
        $query = $this->db->get('sister_concern');
        return $query->row_array();
    }
    public function add_sister_concern($SisterConcernModelData)
    {
        $this->db->insert('sister_concern',$SisterConcernModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function company_id($user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $query = $this->db->get('company_basic');
        foreach($query->result_array() as $CompanyData)
        {
            $com_id=$CompanyData['id'];
        }
        return $com_id;
    }
    public function company_data($user_basic_id)
    {
        $sql="SELECT t1.id,t1.user_basic_id,t1.company_code,t1.company_name,t1.company_tagline,t1.company_short_name,t1.company_logo,t1.email,t1.fax,t1.mobile,t1.phone,t2.company_basic_id,t2.street_address,t2.city,t2.state,t2.zip_code FROM company_basic t1
        LEFT JOIN company_address t2 ON t1.id = t2.company_basic_id WHERE t1.user_basic_id='$user_basic_id'";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function all_sister_concern($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('sister_concern');
        return $query->result_array();
    }
    public function edit_sister_concern($value,$CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('id',$value);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('sister_concern');
        return $query->result_array();
    }
    public function sister_concern_edit($SisterConcernName,$Email,$Mobile,$Phone,$Fax,$EditId,$CompanyBasicId,$update_logo,$date,$time)
    {
        $this->db->where('id', $EditId);
        $this->db->where('company_basic_id', $CompanyBasicId);
        $this->db->set('sister_concern_name', $SisterConcernName);
        $this->db->set('sister_concern_logo', $update_logo);
        $this->db->set('email', $Email);
        $this->db->set('fax', $Fax);
        $this->db->set('mobile', $Mobile);
        $this->db->set('phone', $Phone);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('sister_concern');
    }
    public function sister_concern_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sister_concern');
    }
    /******COMPANY ADMIN SISTER CONCERN MODEL*******/

    /******COMPANY ADMIN BRANCH MODEL*******/
    public function all_branch($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('branch_basic');
        return $query->result_array();
    }
    public function edit_branch($value,$CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('branch_basic');
        return $query->result_array();
    }
    public function branch_check($BranchName,$BranchCode,$CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('branch_name', $BranchName);
        $this->db->where('branch_code', $BranchCode);
        $query = $this->db->get('branch_basic');
        return $query->row_array();
    }
    public function add_branch($BranchModelData)
    {
        $this->db->insert('branch_basic',$BranchModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function branch_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('branch_basic');
    }
    public function branch_edit($SisterConcern,$BranchName,$BranchCode,$RegistrationNo,$Email,$Mobile,$Phone,$Fax,$FoundedOn,$ContactAddress,$EditBranchID,$CompanyAdminId,$date,$time)
    {
        $this->db->where('id', $EditBranchID);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->set('sister_concern_id', $SisterConcern);
        $this->db->set('branch_name', $BranchName);
        $this->db->set('branch_code', $BranchCode);
        $this->db->set('founded_on', $FoundedOn);
        $this->db->set('registration_no', $RegistrationNo);
        $this->db->set('contact_address', $ContactAddress);
        $this->db->set('phone', $Phone);
        $this->db->set('mobile', $Mobile);
        $this->db->set('fax', $Fax);
        $this->db->set('email', $Email);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('branch_basic');
    }
    /******COMPANY ADMIN BRANCH MODEL*******/
    public function all_company_branch($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('status', 1);
        $query = $this->db->get('branch_basic');
        return $query->result_array();
    }
    public function all_company_user($CompanyAdminId)
    {
        $sql="SELECT t1.id,t1.user_name,t1.user_type,t2.user_basic_id,t2.company_basic_id,t2.branch_basic_id,t2.branch_name,t2.privilege,t2.modified_date,t2.modified_time FROM user_basic t1
        LEFT JOIN user_details t2 ON t1.id = t2.user_basic_id WHERE t2.company_basic_id='$CompanyAdminId'";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function edit_company_user($value,$CompanyAdminId)
    {
        $sql="SELECT t1.id,t1.user_name,t1.user_type,t2.user_basic_id,t2.company_basic_id,t2.branch_basic_id,t2.branch_name,t2.privilege,t2.modified_date,t2.modified_time FROM user_basic t1
        LEFT JOIN user_details t2 ON t1.id = t2.user_basic_id WHERE t1.id='$value' AND t2.company_basic_id='$CompanyAdminId'";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function company_user_branch($BranchId,$CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('id', $BranchId);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('branch_basic');
        foreach($query->result_array() as $BranchData)
        {
            $branch_name=$BranchData['branch_name'];
        }
        return $branch_name;
    }
    public function company_user_check($UserId,$CompanyAdminId,$BranchId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('branch_basic_id', $BranchId);
        $this->db->where('user_id', $UserId);
        $query = $this->db->get('user_details');
        return $query->row_array();
    }
    public function add_user_basic($UserBasicModelData)
    {
        $this->db->insert('user_basic',$UserBasicModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_user_details($UserDetailsModelData)
    {
        $this->db->insert('user_details',$UserDetailsModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function edit_user_basic($UserId,$PasswordMD5,$CompanyUserType,$EditUserBasicId)
    {
        $this->db->where('id', $EditUserBasicId);
        $this->db->set('user_name', $UserId);
        $this->db->set('user_password', $PasswordMD5);
        $this->db->set('user_type', $CompanyUserType);
        $this->db->update('user_basic');
    }
    public function edit_user_details($BranchId,$UserId,$CompanyUserBranch,$CompanyAdminId,$EditUserBasicId,$date,$time)
    {
        $this->db->where('user_basic_id', $EditUserBasicId);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->set('branch_basic_id', $BranchId);
        $this->db->set('branch_name', $CompanyUserBranch);
        $this->db->set('user_id', $UserId);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('user_details');
    }
    public function user_basic_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_basic');
    }
    public function user_details_delete($id,$CompanyAdminId)
    {
        $this->db->where('user_basic_id', $id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->delete('user_details');
    }
    public function user_privilege_delete($id,$CompanyAdminId)
    {
        $this->db->where('user_basic_id', $id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->delete('company_user_privilege_menu');
    }
    public function user_privilege_sub_delete($id,$CompanyAdminId)
    {
        $this->db->where('user_basic_id', $id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->delete('company_privilege_sub_nemu');
    }
    public function all_menu_get($user_basic_id,$CompanyAdminId)
    {
//        $this->db->select('*');
//        $this->db->where('status', 1);
//        $query = $this->db->get('menu_categories');
//        return $query->result_array();
        $sql3="SELECT t1.id,t1.menu_name,t2.user_basic_id,t2.company_basic_id,t2.menu_cat_id,t2.status FROM menu_categories t1
        LEFT JOIN company_privilege_menu t2 ON t1.id = t2.menu_cat_id WHERE t2.user_basic_id='$user_basic_id' AND t2.company_basic_id='$CompanyAdminId' AND t2.status='1'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();

    }
    public function conpany_menu_check_data($CompanyAdminId,$user_basic_id)
    {
        $sql3="SELECT t1.id,t1.menu_cat_id,t1.menu_sub_cat_name,t2.user_basic_id,t2.company_basic_id,t2.menu_sub_cat_id,t2.status FROM menu_sub_categories t1
        LEFT JOIN company_privilege t2 ON t1.id = t2.menu_sub_cat_id WHERE t2.user_basic_id='$user_basic_id' AND t2.company_basic_id='$CompanyAdminId' AND t2.status='1'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function conpany_user_menu_check_data($CompanyAdminId,$company_user_id)
    {
        $sql3="SELECT t1.id,t1.menu_cat_id,t1.menu_sub_cat_name,t2.user_basic_id,t2.company_basic_id,t2.menu_sub_cat_id,t2.status FROM menu_sub_categories t1
        LEFT JOIN company_privilege_sub_nemu t2 ON t1.id = t2.menu_sub_cat_id WHERE t2.user_basic_id='$company_user_id' AND t2.company_basic_id='$CompanyAdminId' AND t2.status='1'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function company_user_basic_get($value)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $value);
        $query = $this->db->get('user_details');
        return $query->result_array();
    }
    public function company_user_privilege_match($SubMenuId)
    {
        $this->db->select('*');
        $this->db->where('id', $SubMenuId);
        $query = $this->db->get('menu_sub_categories');
        return $query->result_array();
    }
    public function company_user_privilege_set_sub_menu($PrivilegeModelData)
    {
        $this->db->insert('company_privilege_sub_nemu',$PrivilegeModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function company_user_menu_privilege_check($CompanyUserBasicId,$CompanyAdminId,$branch_basic_id,$menu_catData)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $CompanyUserBasicId);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('branch_basic_id', $branch_basic_id);
        $this->db->where('menu_cat_id', $menu_catData);
        $query = $this->db->get('company_user_privilege_menu');
        return $query->row_array();
    }
    public function company_user_menu_privilege_set($MenuPrivilegeModelData)
    {
        $this->db->insert('company_user_privilege_menu',$MenuPrivilegeModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function company_user_details_update($CompanyUserBasicId)
    {
        $this->db->where('user_basic_id', $CompanyUserBasicId);
        $this->db->set('privilege', 'set');
        $this->db->update('user_details');
    }
    public function conpany_user_menu_notmatch_data($CompanyAdminId,$company_user_id)
    {
        $sql1="SELECT t2.id,t2.user_basic_id,t2.company_basic_id,t2.menu_sub_cat_id,t2.status FROM company_privilege_sub_nemu t2
         WHERE t2.user_basic_id='$company_user_id' AND t2.company_basic_id='$CompanyAdminId' AND t2.status='1'";
        $query1=$this->db->query($sql1);
        $menu_sub_cat_id=array();
        foreach($query1->result_array() as $permittedData)
        {
            $menu_sub_cat_id[]=$permittedData['menu_sub_cat_id'];
        }

        $sql3="SELECT t1.id,t1.menu_cat_id,t1.menu_sub_cat_name
        FROM menu_sub_categories t1 WHERE t1.id NOT IN (" .implode(',', $menu_sub_cat_id) .")";
        $query2=$this->db->query($sql3);
        return $query2->result_array() ;

    }
    public function unpermitted_sub_menu($CompanyUserBasicId,$UpdateSubMenuId)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.menu_sub_cat_id
        FROM company_privilege_sub_nemu t1 WHERE t1.user_basic_id='$CompanyUserBasicId' AND t1.menu_sub_cat_id NOT IN (" .implode(',', $UpdateSubMenuId) .")";
        $query2=$this->db->query($sql3);
        return $query2->result_array();
    }
    public function unpermitted_previlege_update($CompanyUserBasicId,$un_permitted_sub_menu_id,$un_permitted_menu_sub_cat_id)
    {
        $this->db->where('id', $un_permitted_sub_menu_id);
        $this->db->where('user_basic_id', $CompanyUserBasicId);
        $this->db->set('status', 0);
        $this->db->update('company_privilege_sub_nemu');
    }
    public function user_sub_menu_privilege_check($CompanyUserBasicId,$CompanyAdminId,$SubMenuId)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $CompanyUserBasicId);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('menu_sub_cat_id', $SubMenuId);
        $this->db->where('status', 0);
        $query = $this->db->get('company_privilege_sub_nemu');
        return $query->row_array();
    }
    public function company_privilege_active_update($CompanyUserBasicId,$CompanyAdminId,$SubMenuId)
    {
        $this->db->where('user_basic_id', $CompanyUserBasicId);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('menu_sub_cat_id', $SubMenuId);
        $this->db->set('status', 1);
        $this->db->update('company_privilege_sub_nemu');
    }
    /******COMPANY ADMIN USER MODEL*******/

    /******COMPANY ADMIN PRODUCT CATEGORY MODEL*******/
    public function all_product_category($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('product_categories');
        return $query->result_array();
    }
    public function company_product_categories_check($CompanyAdminId,$CategoryName)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('product_cat_name', $CategoryName);
        $query = $this->db->get('product_categories');
        return $query->row_array();
    }
    public function add_product_category($ProductCategoryModelData)
    {
        $this->db->insert('product_categories',$ProductCategoryModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function edit_product_category($CompanyAdminId,$value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('product_categories');
        return $query->result_array();
    }
    public function company_admin_product_categories_update($CompanyAdminId,$CategoryName,$user_basic_id,$EditProductCatId,$date,$time)
    {
        $this->db->where('id', $EditProductCatId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->set('product_cat_name', $CategoryName);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('product_categories');
    }
    public function product_categories_delete($id,$user_basic_id,$CompanyAdminId)
    {
        $this->db->where('id', $id);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->delete('product_categories');
    }
    /******COMPANY ADMIN PRODUCT CATEGORY MODEL*******/

    /******COMPANY ADMIN PRODUCT SUB CATEGORY MODEL*******/
    public function all_product_sub_category($CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('product_sub_categories');
        return $query->result_array();
    }
    public function all_product_category_select($CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('product_categories');
        return $query->result_array();
    }
    public function product_categories_get($CategoryId,$CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('id', $CategoryId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('product_categories');
        foreach($query->result_array() as $ProductCatData)
        {
            $product_cat_name=$ProductCatData['product_cat_name'];
        }
        return $product_cat_name;
    }
    public function company_product_sub_categories_check($CategoryId,$SubCategoryName,$CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('product_categories_id', $CategoryId);
        $this->db->where('product_sub_cat_name', $SubCategoryName);
        $query = $this->db->get('product_sub_categories');
        return $query->row_array();
    }
    public function add_product_sub_category($ProductSubCategoryModelData)
    {
        $this->db->insert('product_sub_categories',$ProductSubCategoryModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function edit_product_sub_category($value,$CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('product_sub_categories');
        return $query->result_array();
    }
    public function company_admin_product_sub_categories_update($user_basic_id,$CompanyAdminId,$CategoryId,$CategoryName,$SubCategoryName,$EditProductSubCatId,$date,$time)
    {
        $this->db->where('id', $EditProductSubCatId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->set('product_categories_id', $CategoryId);
        $this->db->set('product_categories_name', $CategoryName);
        $this->db->set('product_sub_cat_name', $SubCategoryName);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('product_sub_categories');
    }
    public function product_sub_categories_delete($id,$user_basic_id,$CompanyAdminId)
    {
        $this->db->where('id', $id);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->delete('product_sub_categories');
    }
    public function select_sister_concern($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('sister_concern');
        return $query->result_array();
    }
    public function select_branch($SisterConcernId,$CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('sister_concern_id', $SisterConcernId);
        $query = $this->db->get('branch_basic');
        return $query->result_array();
    }
    public function select_product_category($CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('product_categories');
        return $query->result_array();
    }
    public function select_product_sub_category($ProductCatId,$CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('product_categories_id', $ProductCatId);
        $query = $this->db->get('product_sub_categories');
        return $query->result_array();
    }
    /******COMPANY ADMIN PRODUCT SUB CATEGORY MODEL*******/

    /******COMPANY ADMIN PRODUCT MODEL*******/
    public function sister_concern_name($SisterConcernId,$CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('id', $SisterConcernId);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('sister_concern');
        foreach($query->result_array() as $SisterConcernData)
        {
            $sister_concern_name=$SisterConcernData['sister_concern_name'];
        }
        return $sister_concern_name;
    }
    public function branch_name($SisterConcernId,$BranchId,$CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('id', $BranchId);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('sister_concern_id', $SisterConcernId);
        $query = $this->db->get('branch_basic');
        foreach($query->result_array() as $BranchData)
        {
            $branch_name=$BranchData['branch_name'];
        }
        return $branch_name;
    }
    public function product_cat_name($ProductCategoryId,$CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('id', $ProductCategoryId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('product_categories');
        foreach($query->result_array() as $ProductCatData)
        {
            $product_cat_name=$ProductCatData['product_cat_name'];
        }
        return $product_cat_name;
    }
    public function product_sub_cat_name($ProductSubCategoryId,$ProductCategoryId,$CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('id', $ProductSubCategoryId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('product_categories_id', $ProductCategoryId);
        $query = $this->db->get('product_sub_categories');
        foreach($query->result_array() as $ProductSubCatData)
        {
            $product_sub_cat_name=$ProductSubCatData['product_sub_cat_name'];
        }
        return $product_sub_cat_name;
    }
    public function company_product_check($ProductCategoryId,$ProductSubCategoryId,$ProductCode,$CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('product_cat_id', $ProductCategoryId);
        $this->db->where('product_sub_cat_id', $ProductSubCategoryId);
        $this->db->where('product_code', $ProductCode);
        $query = $this->db->get('product_basic');
        return $query->row_array();
    }
    public function add_product_basic($ProductBasicData)
    {
        $this->db->insert('product_basic', $ProductBasicData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_product_barcode($ProductBarcodeModel)
    {
        $this->db->insert('product_barcode', $ProductBarcodeModel);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_product_opening_stock($ProductOpeningStockModel)
    {
        $this->db->insert('product_opening_stock', $ProductOpeningStockModel);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function all_product($CompanyAdminId,$user_basic_id)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.product_cat_id,t1.product_cat_name,t1.product_sub_cat_id,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.design_code,t1.brand,t1.buffer_limit,t1.vat,t1.image,t1.entered_by,t1.modified_date,t1.modified_time,t1.status,t2.product_basic_id,t2.barcode_image,t2.product_name_size FROM product_basic t1
        LEFT JOIN product_barcode t2 ON t1.id = t2.product_basic_id WHERE t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId' AND t1.status='1'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function edit_product($CompanyAdminId,$user_basic_id,$value)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.product_cat_id,t1.product_cat_name,t1.product_sub_cat_id,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.design_code,t1.brand,t1.buffer_limit,t1.vat,t1.image,t1.entered_by,t1.modified_date,t1.modified_time,t1.status,t2.product_basic_id,t2.barcode_image,t2.product_name_size FROM product_basic t1
        LEFT JOIN product_barcode t2 ON t1.id = t2.product_basic_id WHERE t1.id='$value' AND t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function all_product_barcode($CompanyAdminId,$user_basic_id)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.product_cat_id,t1.product_cat_name,t1.product_sub_cat_id,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.design_code,t1.buffer_limit,t1.entered_by,t2.product_basic_id,t2.barcode_image,t2.product_name_size,t2.modified_date,t2.modified_time,t2.status FROM product_basic t1
        LEFT JOIN product_barcode t2 ON t1.id = t2.product_basic_id WHERE t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId' AND t2.status='1'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function get_barcode($ProductBasicId)
    {
        $this->db->select('*');
        $this->db->where('product_basic_id', $ProductBasicId);
        $query = $this->db->get('product_barcode');
        foreach($query->result_array() as $BarCodeData)
        {
            $barcode_image=$BarCodeData['barcode_image'];
        }
        return $barcode_image;
    }
    public function all_product_barcode_print($ProductBasicId)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.product_cat_id,t1.product_cat_name,t1.product_sub_cat_id,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.design_code,t1.buffer_limit,t1.entered_by,t2.product_basic_id,t2.barcode_image,t2.product_name_size,t2.modified_date,t2.modified_time,t2.status FROM product_basic t1
        LEFT JOIN product_barcode t2 ON t1.id = t2.product_basic_id WHERE t2.product_basic_id='$ProductBasicId'";
        $query3=$this->db->query($sql3);
        foreach($query3->result_array() as $AllBarCodeData)
        {
            $product_code=$AllBarCodeData['product_code'];
        }
        return $product_code;
    }
    public function product_vat_update($user_basic_id,$CompanyAdminId,$ProductVat,$ProductBasicId,$date,$time)
    {
        $this->db->where('id', $ProductBasicId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->set('vat', $ProductVat);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('product_basic');
    }
    public function all_product_opening_stock($CompanyAdminId,$user_basic_id)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.product_cat_id,t1.product_cat_name,t1.product_sub_cat_id,t1.product_sub_cat_name,t1.sister_concern_id,t1.sister_concern_name,t1.branch_id,t1.branch_name,t1.product_name,t1.product_code,t1.design_code,t1.product_size,t1.product_case_size,t1.mrp,t1.cost_price,t1.billing_price,t1.buffer_limit,t1.vat,t1.entered_by,t1.modified_date,t1.modified_time,t1.status,t2.product_basic_id,t2.opening_date,t2.opening_pack,t2.opening_pcs,t2.opening_quantity,t2.opening_value FROM product_basic t1
        LEFT JOIN product_opening_stock t2 ON t1.id = t2.product_basic_id WHERE t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId' AND t1.status='1'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function product_openstock_update($user_basic_id,$CompanyAdminId,$case_size,$cost_price,$opening_date,$opening_pack,$opening_pcs,$opening_qnt,$opening_value,$product_basic_id,$date,$time)
    {
        $this->db->where('product_basic_id', $product_basic_id);
        $this->db->set('opening_date', $opening_date);
        $this->db->set('opening_pack', $opening_pack);
        $this->db->set('opening_pcs', $opening_pcs);
        $this->db->set('opening_quantity', $opening_qnt);
        $this->db->set('opening_value', $opening_value);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('product_opening_stock');
    }
    public function update_product_basic($ProductCategoryId,$ProductCategoryName,$ProductSubCategoryId,$ProductSubCategoryName,$ProductName,$ProductBrand,$BufferLimit,$Vat,$product_image,$EditProductBasicId,$date,$time)
    {
        $this->db->where('id', $EditProductBasicId);
        $this->db->set('product_cat_id', $ProductCategoryId);
        $this->db->set('product_cat_name', $ProductCategoryName);
        $this->db->set('product_sub_cat_id', $ProductSubCategoryId);
        $this->db->set('product_sub_cat_name', $ProductSubCategoryName);
        $this->db->set('product_name', $ProductName);
        $this->db->set('brand', $ProductBrand);
        $this->db->set('buffer_limit', $BufferLimit);
        $this->db->set('vat', $Vat);
        $this->db->set('image', $product_image);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('product_basic');
    }
    /******COMPANY ADMIN PRODUCT MODEL*******/

    /******COMPANY ADMIN VENDOR MODEL*******/
    public function all_vendor($CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('vendor');
        return $query->result_array();
    }
    public function company_vendor_check($user_basic_id,$CompanyAdminId,$VendorName)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('vendor_name', $VendorName);
        $query = $this->db->get('vendor');
        return $query->row_array();
    }
    public function add_new_vendor($VendorModelData)
    {
        $this->db->insert('vendor',$VendorModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function edit_vendor($CompanyAdminId,$user_basic_id,$value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('vendor');
        return $query->result_array();
    }
    public function update_vendor($VendorName,$ContactPerson,$ContactNo,$Address,$EditVendorId,$date,$time)
    {
        $this->db->where('id', $EditVendorId);
        $this->db->set('vendor_name', $VendorName);
        $this->db->set('contact_person', $ContactPerson);
        $this->db->set('contact_no', $ContactNo);
        $this->db->set('address', $Address);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('vendor');
    }
    public function vendor_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('vendor');
    }
    /******COMPANY ADMIN VENDOR MODEL*******/

    /******COMPANY ADMIN COUSTOMER MODEL*******/
    public function all_coustomer($CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('coustomer');
        return $query->result_array();
    }
    public function company_coustomer_check($user_basic_id,$CompanyAdminId,$CoustomerName)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('coustomer_name', $CoustomerName);
        $query = $this->db->get('coustomer');
        return $query->row_array();
    }
    public function add_new_coustomer($CoustomerModelData)
    {
        $this->db->insert('coustomer',$CoustomerModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function edit_coustomer($CompanyAdminId,$user_basic_id,$value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('coustomer');
        return $query->result_array();
    }
    public function update_coustomer($CoustomerName,$ContactNo,$ContactEmail,$Address,$EditCustomerId,$date,$time)
    {
        $this->db->where('id', $EditCustomerId);
        $this->db->set('coustomer_name', $CoustomerName);
        $this->db->set('contact_no', $ContactNo);
        $this->db->set('contact_email', $ContactEmail);
        $this->db->set('address', $Address);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('coustomer');
    }
    public function customer_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('coustomer');
    }
    /******COMPANY ADMIN COUSTOMER MODEL*******/


    /******COMPANY ADMIN PURCHASE MODEL*******/

    public function select_vendor_data($CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('vendor');
        return $query->result_array();
//        $vendor_name=array();
//        foreach($query->result_array() as $vendor_data)
//        {
//            $vendor_name[]=$vendor_data['vendor_name'];
//        }
//        return $vendor_name;
    }
    public function select_branch_data($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('branch_basic');
        return $query->result_array();
    }
    public function select_vendor_data_ajex($user_basic_id,$CompanyAdminId,$VendorName)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('vendor_name', $VendorName);
        $query = $this->db->get('vendor');
        return $query->result_array();
    }
    public function select_product_data($CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('product_basic');
        return $query->result_array();
    }
    public function select_product_data_ajex($user_basic_id,$CompanyAdminId,$ProductCode)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('product_code', $ProductCode);
        $query = $this->db->get('product_basic');
        return $query->result_array();
    }
    public function select_product_all_data_ajex($user_basic_id,$CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('product_basic');
        return $query->result_array();
    }
    public function get_branch_name($BranchId,$CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('id', $BranchId);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('branch_basic');
        foreach($query->result_array() as $BranchData)
        {
            $branch_name=$BranchData['branch_name'];
        }
        return $branch_name;
    }
    public function get_product_basic_id_code($ProductCheckCode,$CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('product_code', $ProductCheckCode);
        $query = $this->db->get('product_basic');
        foreach($query->result_array() as $ProductBasicData)
        {
            $product_basic_id=$ProductBasicData['id'];
        }
        return $product_basic_id;
    }

    public function get_product_basic_id_name($ProductCheckName,$CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('product_name', $ProductCheckName);
        $query = $this->db->get('product_basic');
        foreach($query->result_array() as $ProductBasicData)
        {
            $product_basic_id=$ProductBasicData['id'];
        }
        return $product_basic_id;
    }

    public function all_purchase_bill($CompanyAdminId,$user_basic_id)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.purchase_code,t1.purchase_status,t2.purchase_basic_id,t2.vendor_id,t2.vendor_name,t2.vendor_code,t2.vendor_contact_person,t2.vendor_contact_no,t2.invoice_to_user_id,t2.payable_amount,t2.paid_amount,t2.due_amount FROM purchase_basic t1
        LEFT JOIN purchase_invoice t2 ON t1.id = t2.purchase_basic_id WHERE t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function purchase_product_basic()
    {
        $this->db->select('*');
        $query = $this->db->get('purchase_product_basic');
        return $query->result_array();
    }
    public function select_product_basic($CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('product_basic');
        return $query->result_array();
//        $product_code=array();
//        foreach($query->result_array() as $product_basic_data)
//        {
//            $product_code[]=$product_basic_data['product_code'];
//        }
//        return $product_code;
    }

    public function selected_vendor_get($VendorId)
    {
        $this->db->select('*');
        $this->db->where('id', $VendorId);
        $query = $this->db->get('vendor');
        return $query->result_array();
    }
    public function add_new_purchase_basic($PurchaseBasicModelData)
    {
        $this->db->insert('purchase_basic',$PurchaseBasicModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_new_purchase_product_basic($ProductPurchaseModelData)
    {
        $this->db->insert('purchase_product_basic',$ProductPurchaseModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_new_purchase_stock_product($PurchaseProductStock)
    {
        $this->db->insert('purchase_stock_product',$PurchaseProductStock);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_purchase_invoice($PurchaseInvoiceModelData)
    {
        $this->db->insert('purchase_invoice',$PurchaseInvoiceModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_product_size($ProductSizeModelData)
    {
        $this->db->insert('purchase_product_size',$ProductSizeModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function all_vendor_get($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('vendor');
        return $query->result_array();
    }
    public function selected_product_get($ProductCode)
    {
        $this->db->select('*');
        $this->db->where('product_code', $ProductCode);
        $query = $this->db->get('product_basic');
        return $query->result_array();
    }
    public function company_basic_get($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('id', $CompanyAdminId);
        $query = $this->db->get('company_basic');
        return $query->result_array();
    }
    public function company_details_get($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('company_address');
        return $query->result_array();
    }
    public function purs_bill_contact_person($Contact_user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('id', $Contact_user_basic_id);
        $query = $this->db->get('user_basic');
        foreach( $query->result_array() as $UserBasicData)
        {
            $contact_person=$UserBasicData['user_name'];
        }
        return $contact_person;
    }
    public function purchase_basic_get($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('purchase_basic');
        return $query->result_array();
    }
    public function purchase_vendor_get($purchase_vendor_id)
    {
        $this->db->select('*');
        $this->db->where('id', $purchase_vendor_id);
        $query = $this->db->get('vendor');
        return $query->result_array();
    }

    public function purchase_product_get($purchase_basic_id)
    {
        $sql3="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.brand,t2.purchase_basic_id,t2.purchase_product_basic_id,t2.purchase_product_code_name,t2.product_size,t2.product_cost_price,t2.quantity,t2.total_price FROM product_basic t1
        LEFT JOIN purchase_product_basic t2 ON t1.id = t2.purchase_product_basic_id WHERE t2.purchase_basic_id='$purchase_basic_id'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function purchase_invoice_get($purchase_basic_id)
    {
        $this->db->select('*');
        $this->db->where('purchase_basic_id', $purchase_basic_id);
        $query = $this->db->get('purchase_invoice');
        return $query->result_array();
    }

    public function return_purchase_basic_get($CompanyAdminId,$value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('purchase_basic');
        return $query->result_array();
    }
    public function return_purchase_product_basic($value)
    {
        $this->db->select('*');
        $this->db->where('purchase_basic_id', $value);
        $query = $this->db->get('purchase_product_basic');
        return $query->result_array();
    }
    public function return_purchase_purchase_invoice($value)
    {
        $this->db->select('*');
        $this->db->where('purchase_basic_id', $value);
        $query = $this->db->get('purchase_invoice');
        return $query->result_array();
    }
    public function return_purchase_basic_update($PurchaseBasicId,$PurchaseStatus)
    {
        $this->db->where('id', $PurchaseBasicId);
        $this->db->set('purchase_status', $PurchaseStatus);
        $this->db->update('purchase_basic');
    }
    public function return_purchase_invoice_update($PurchaseInvoiceId,$payable_amount,$paid_amount,$due_amount,$PurchaseBasicId)
    {
        $this->db->where('id', $PurchaseInvoiceId);
        $this->db->where('purchase_basic_id', $PurchaseBasicId);
        $this->db->set('payable_amount', $payable_amount);
        $this->db->set('paid_amount', $paid_amount);
        $this->db->set('paid_amount', $paid_amount);
        $this->db->set('due_amount', $due_amount);
        $this->db->update('purchase_invoice');
    }
    public function return_purchase_product_basic_update($purchase_product_basic_id,$purchase_basic_id,$product_cost_price,$quantity,$total_price)
    {
        $this->db->where('id', $purchase_product_basic_id);
        $this->db->where('purchase_basic_id', $purchase_basic_id);
        $this->db->set('product_cost_price', $product_cost_price);
        $this->db->set('quantity', $quantity);
        $this->db->set('total_price', $total_price);
        $this->db->update('purchase_product_basic');
    }
    public function stock_purchase_product_update($purchase_product_basic_id,$purchase_basic_id,$quantity)
    {
        $this->db->where('purchase_basic_id', $purchase_basic_id);
        $this->db->where('purchase_product_basic_id', $purchase_product_basic_id);
        $this->db->where('status', 1);
        $this->db->set('stock_quantity', $quantity);
        $this->db->update('purchase_stock_product');
    }
    public function edit_purchase_basic_update($user_basic_id,$CompanyAdminId,$SisterConcernId,$SisterConcernName,$BranchId,$BranchName,$VendorId,$vendor_code,$PurchaseStatus,$PurchaseBasicId)
    {
        $this->db->where('id', $PurchaseBasicId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->set('sister_concern_id', $SisterConcernId);
        $this->db->set('sister_concern_name', $SisterConcernName);
        $this->db->set('branch_id', $BranchId);
        $this->db->set('branch_name', $BranchName);
        $this->db->set('vendor_id', $VendorId);
        $this->db->set('vendor_code', $vendor_code);
        $this->db->set('purchase_status', $PurchaseStatus);
        $this->db->update('purchase_basic');
    }
    public function purchase_product_delete($PurchaseBasicId)
    {
        $this->db->where('purchase_basic_id', $PurchaseBasicId);
        $this->db->delete('purchase_product_basic');
    }
    public function stock_purchase_product_delete($PurchaseBasicId)
    {
        $this->db->where('purchase_basic_id', $PurchaseBasicId);
        $this->db->delete('purchase_stock_product');
    }
    public function edit_purchase_invoice_update($PurchaseBasicId,$VendorId,$vendor_name,$vendor_code,$vendor_contact_person,$vendor_contact_no,$payable_amount,$paid_amount,$due_amount)
    {
        $this->db->where('purchase_basic_id', $PurchaseBasicId);
        $this->db->set('vendor_id', $VendorId);
        $this->db->set('vendor_name', $vendor_name);
        $this->db->set('vendor_code', $vendor_code);
        $this->db->set('vendor_contact_person', $vendor_contact_person);
        $this->db->set('vendor_contact_no', $vendor_contact_no);
        $this->db->set('payable_amount', $payable_amount);
        $this->db->set('paid_amount', $paid_amount);
        $this->db->set('paid_amount', $paid_amount);
        $this->db->set('due_amount', $due_amount);
        $this->db->update('purchase_invoice');
    }
    public function purchase_product_basic_details($value)
    {
        $sql3="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.brand,t1.image,t2.purchase_basic_id,t2.purchase_basic_id,t2.purchase_product_basic_id,t2.purchase_product_code_name,t2.product_size,t2.product_cost_price,t2.quantity,t2.total_price,t2.mrp,t2.product_billing_price FROM product_basic t1
        LEFT JOIN purchase_product_basic t2 ON t1.id = t2.purchase_product_basic_id WHERE t2.purchase_basic_id='$value'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    /******COMPANY ADMIN PURCHASE MODEL*******/

    /******COMPANY ADMIN SALE MODEL*******/
    public function final_sale_basic_get($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->order_by('id', 'desc');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('final_sale_basic');
        return $query->result_array();
    }
    public function sale_purchase_basic_get($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('purchase_basic');
        return $query->result_array();
    }
    public function sale_purchase_basic_get_num($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('purchase_basic');
        return $query->num_rows();
    }
    public function search_product_code_name($purchase_basic_id)
    {
        $sql3="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.brand,t1.image,t2.purchase_basic_id,t2.purchase_product_basic_id,t2.purchase_product_code_name,t2.product_size,t2.product_cost_price,t2.quantity,t2.total_price,t2.mrp,t2.product_billing_price FROM product_basic t1
        LEFT JOIN purchase_product_basic t2 ON t1.id = t2.purchase_product_basic_id WHERE t2.purchase_basic_id='$purchase_basic_id'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function select_sale_coustomer($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('coustomer');
        return $query->result_array();
    }
    public function selected_customer_get($CoustomerId,$CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('id', $CoustomerId);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('coustomer');
        return $query->result_array();
    }
    public function search_product_items_get($purchase_basic_id,$ProductCodeName)
    {
        $sql3="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.brand,t1.buffer_limit,t1.image,t2.purchase_basic_id,t2.purchase_product_basic_id,t2.purchase_product_code_name,t2.product_size,t2.product_cost_price,t2.quantity,t2.total_price,t2.mrp,t2.product_billing_price FROM product_basic t1
        LEFT JOIN purchase_product_basic t2 ON t1.id = t2.purchase_product_basic_id WHERE t2.purchase_product_code_name='$ProductCodeName' AND t2.purchase_basic_id='$purchase_basic_id'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function search_stock_purchase_product_get($purchase_basic_id,$purchase_product_basic_id)
    {
        $this->db->select('*');
        $this->db->where('purchase_basic_id', $purchase_basic_id);
        $this->db->where('product_basic_id', $purchase_product_basic_id);
        $this->db->where('status', 1);
        $query = $this->db->get('purchase_stock_product');
        foreach($query->result_array() as $PurchaseStockProductData)
        {
           $stock_quantity=$PurchaseStockProductData['stock_quantity'];
        }
        return $stock_quantity;
    }

    public function sale_store_product_check($user_basic_id,$CompanyAdminId,$purchase_product_basic_id,$purchase_basic_id,$SaleInvoiceId)
    {
        $sql3="SELECT t1.id,t1.company_basic_id,t1.user_basic_id,t1.invoice_id,t1.coustomer_type,t1.coustomer_id,t1.payable_amount,t1.paid_amount,t1.due_amount,t1.pay_status,t1.sale_status,t2.sale_basic_continer_id,t2.purchase_basic_id,t2.product_basic_id,t2.product_code_name,t2.product_price,t2.quantity,t2.total_price FROM sale_basic_continer t1
        LEFT JOIN sale_product_continer t2 ON t1.id = t2.sale_basic_continer_id WHERE t1.company_basic_id='$CompanyAdminId' AND t1.user_basic_id='$user_basic_id'  AND t1.invoice_id='$SaleInvoiceId' AND t2.purchase_basic_id='$purchase_basic_id' AND t2.product_basic_id='$purchase_product_basic_id'";
        $query3=$this->db->query($sql3);
        return $query3->row_array();
    }
    public function sale_for_purchase_product_basic_get($purchase_basic_id,$purchase_product_basic_id)
    {
        $sql3="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.brand,t1.buffer_limit,t1.image,t2.purchase_basic_id,t2.purchase_basic_id,t2.purchase_product_basic_id,t2.purchase_product_code_name,t2.product_size,t2.product_cost_price,t2.quantity,t2.total_price,t2.mrp,t2.product_billing_price FROM product_basic t1
        LEFT JOIN purchase_product_basic t2 ON t1.id = t2.purchase_product_basic_id WHERE t2.purchase_basic_id='$purchase_basic_id' AND t2.purchase_product_basic_id='$purchase_product_basic_id'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }

    public function sale_continer_basic_first_check($user_basic_id,$CompanyAdminId)
    {
        $sql3="SELECT t1.id,t1.company_basic_id,t1.user_basic_id,t1.invoice_id,t1.payable_amount,t2.sale_basic_continer_id,t2.product_basic_id,t2.product_code_name,t2.product_price,t2.quantity,t2.total_price FROM sale_basic_continer t1
        LEFT JOIN sale_product_continer t2 ON t1.id = t2.sale_basic_continer_id WHERE t1.company_basic_id='$CompanyAdminId' AND t1.user_basic_id='$user_basic_id'";
        $query3=$this->db->query($sql3);
        return $query3->row_array();
    }
    public function sale_continer_basic_first_data($user_basic_id,$CompanyAdminId)
    {
        $sql3="SELECT t1.id,t1.company_basic_id,t1.user_basic_id,t1.invoice_id,t1.payable_amount,t2.sale_basic_continer_id,t2.purchase_basic_id,t2.product_basic_id,t2.product_code_name,t2.product_price,t2.quantity,t2.total_price FROM sale_basic_continer t1
        LEFT JOIN sale_product_continer t2 ON t1.id = t2.sale_basic_continer_id WHERE t1.company_basic_id='$CompanyAdminId' AND t1.user_basic_id='$user_basic_id'";
        $query3=$this->db->query($sql3);
        foreach($query3->result_array() as $SaleBasicFirstData)
        {
            $invoice_id=$SaleBasicFirstData['invoice_id'];
        }
        return $invoice_id;
    }
    public function sale_continer_basic_have_data($user_basic_id,$CompanyAdminId,$InvoiceId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('invoice_id', $InvoiceId);
        $this->db->where('sale_status', 'prossing');
        $query = $this->db->get('sale_basic_continer');
        return $query->result_array();
    }
    public function sale_product_continer_have_data()
    {
        $sql3="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.brand,t1.buffer_limit,t1.image,t2.sale_basic_continer_id,t2.purchase_basic_id,t2.product_basic_id,t2.product_code_name,t2.product_size,t2.product_price,t2.quantity,t2.total_price FROM product_basic t1
        LEFT JOIN sale_product_continer t2 ON t1.id = t2.product_basic_id ORDER BY t2.product_basic_id DESC";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function sale_continer_basic_check($user_basic_id,$CompanyAdminId,$SaleInvoiceId)
    {
        $sql3="SELECT t1.id,t1.company_basic_id,t1.user_basic_id,t1.invoice_id,t1.payable_amount,t1.sale_status,t2.sale_basic_continer_id,t2.purchase_basic_id,t2.product_basic_id,t2.product_code_name,t2.product_price,t2.quantity,t2.total_price FROM sale_basic_continer t1
        LEFT JOIN sale_product_continer t2 ON t1.id = t2.sale_basic_continer_id WHERE t1.company_basic_id='$CompanyAdminId' AND t1.user_basic_id='$user_basic_id' AND t1.invoice_id='$SaleInvoiceId'";
        $query3=$this->db->query($sql3);
        return $query3->row_array();
    }

    public function sale_continer_basic_get($user_basic_id,$CompanyAdminId,$SaleInvoiceId)
    {
        $sql3="SELECT t1.id,t1.company_basic_id,t1.user_basic_id,t1.invoice_id,t1.payable_amount,t2.sale_basic_continer_id,t2.purchase_basic_id,t2.product_basic_id,t2.product_code_name,t2.product_price,t2.quantity,t2.total_price FROM sale_basic_continer t1
        LEFT JOIN sale_product_continer t2 ON t1.id = t2.sale_basic_continer_id WHERE t1.company_basic_id='$CompanyAdminId' AND t1.user_basic_id='$user_basic_id' AND t1.invoice_id='$SaleInvoiceId'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function add_new_sale_continer_basic($SalebasicContinerModelData)
    {
        $this->db->insert('sale_basic_continer',$SalebasicContinerModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function purchase_product_qnt_update($purchase_basic_id,$purchase_product_basic_id,$QuantityUpdate)
    {
        $this->db->where('purchase_basic_id', $purchase_basic_id);
        $this->db->where('product_basic_id', $purchase_product_basic_id);
        $this->db->set('stock_quantity', $QuantityUpdate);
        $this->db->update('purchase_stock_product');
    }
    public function purchase_stock_status_update($purchase_basic_id,$purchase_product_basic_id)
    {
        $this->db->where('purchase_basic_id', $purchase_basic_id);
        $this->db->where('product_basic_id', $purchase_product_basic_id);
        $this->db->set('status', 0);
        $this->db->update('purchase_stock_product');
    }
    public function add_new_sale_product_continer($SaleProductContinerModelData)
    {
        $this->db->insert('sale_product_continer',$SaleProductContinerModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function sale_basic_payable_amount_update($user_basic_id,$CompanyAdminId,$SaleInvoiceId,$sale_basic_id,$CalPayableAmount)
    {
        $this->db->where('id', $sale_basic_id);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('invoice_id', $SaleInvoiceId);
        $this->db->set('payable_amount', $CalPayableAmount);
        $this->db->update('sale_basic_continer');
    }
    public function get_all_sale_basic_continer($user_basic_id,$CompanyAdminId,$SaleInvoiceId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('invoice_id', $SaleInvoiceId);
        $this->db->where('sale_status', 'prossing');
        $query = $this->db->get('sale_basic_continer');
        return $query->result_array();
    }
    public function get_all_sale_product_continer($proccsing_sale_basic_id)
    {
        $sql3="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.brand,t1.buffer_limit,t1.image,t2.sale_basic_continer_id,t2.purchase_basic_id,t2.product_basic_id,t2.product_code_name,t2.product_size,t2.product_price,t2.quantity,t2.total_price FROM product_basic t1
        LEFT JOIN sale_product_continer t2 ON t1.id = t2.product_basic_id WHERE t2.sale_basic_continer_id='$proccsing_sale_basic_id' ORDER BY t2.product_basic_id DESC";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function sale_product_continer_item_delete($proccsing_sale_basic_id,$proccsing_sale_product_code_name)
    {
        $this->db->where('sale_basic_continer_id', $proccsing_sale_basic_id);
        $this->db->where('product_code_name', $proccsing_sale_product_code_name);
        $this->db->delete('sale_product_continer');
    }
    public function sale_basic_continer_get_data_del($proccsing_sale_basic_id)
    {
        $this->db->select('*');
        $this->db->where('id', $proccsing_sale_basic_id);
        $query = $this->db->get('sale_basic_continer');
        foreach($query->result_array() as $SaleBasicContinerData)
        {
            $payable_amount=$SaleBasicContinerData['payable_amount'];
        }
        return $payable_amount;
    }
    public function sale_product_continer_get_data_del($proccsing_sale_basic_id,$proccsing_sale_product_code_name)
    {
        $this->db->select('*');
        $this->db->where('sale_basic_continer_id', $proccsing_sale_basic_id);
        $this->db->where('product_code_name', $proccsing_sale_product_code_name);
        $query = $this->db->get('sale_product_continer');
        foreach($query->result_array() as $SaleProductContinerData)
        {
            $total_price=$SaleProductContinerData['total_price'];
        }
        return $total_price;
    }
    public function update_sale_basic_continer_payable($proccsing_sale_basic_id,$update_payable_amount)
    {
        $this->db->where('id', $proccsing_sale_basic_id);
        $this->db->set('payable_amount', $update_payable_amount);
        $this->db->update('sale_basic_continer');
    }

    public function final_sale_check($user_basic_id,$CompanyAdminId,$SaleInvoiceId)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('invoice_id', $SaleInvoiceId);
        $query = $this->db->get('final_sale_basic');
        return $query->row_array();
    }
    public function add_new_final_sale_basic($FinalSaleBasicModelData)
    {
        $this->db->insert('final_sale_basic',$FinalSaleBasicModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_new_final_sale_coustomer($NewCoustomerModelData1)
    {
        $this->db->insert('final_sale_new_coustomer',$NewCoustomerModelData1);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_new_final_sale_coustomer_update($FinalSaleBasicId,$FinalSaleCoustomerId)
    {
        $this->db->where('id', $FinalSaleBasicId);
        $this->db->set('coustomer_id', $FinalSaleCoustomerId);
        $this->db->update('final_sale_basic');
    }
    public function add_new_final_sale_product($FinalSaleProductModelData)
    {
        $this->db->insert('final_sale_product',$FinalSaleProductModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function sale_basic_id_get($SaleInvoiceId,$CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('user_basic_id', $user_basic_id);
        $this->db->where('invoice_id', $SaleInvoiceId);
        $query = $this->db->get('sale_basic_continer');
        foreach($query->result_array() as $SaleBasicContinerData)
        {
            $SaleBasicContinerId=$SaleBasicContinerData['id'];
        }
        return $SaleBasicContinerId;
    }
    public function sale_basic_continer_delete($SaleBasicIdForDel)
    {
        $this->db->where('id', $SaleBasicIdForDel);
        $this->db->delete('sale_basic_continer');
    }
    public function sale_basic_product_continer_delete($SaleBasicIdForDel)
    {
        $this->db->where('sale_basic_continer_id', $SaleBasicIdForDel);
        $this->db->delete('sale_product_continer');
    }
    public function invoice_final_sale_basic_get($FinalSaleBasicId,$user_basic_id,$CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->where('id', $FinalSaleBasicId);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('user_basic_id', $user_basic_id);
        $query = $this->db->get('final_sale_basic');
        return $query->result_array();
    }

    public function invoice_final_sale_new_customer_get($final_sale_basic_id,$coustomer_id)
    {
        $this->db->select('*');
        $this->db->where('id', $coustomer_id);
        $this->db->where('final_sale_basic_id', $final_sale_basic_id);
        $query = $this->db->get('final_sale_new_coustomer');
        return $query->result_array();
    }
    public function invoice_final_sale_customer_get($coustomer_id)
    {
        $this->db->select('*');
        $this->db->where('id', $coustomer_id);
        $query = $this->db->get('coustomer');
        return $query->result_array();
    }
    public function invoice_sale_product_get($final_sale_basic_id)
    {
        $sql3="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.brand,t2.fina_sale_basic_id,t2.purchase_basic_id,t2.product_basic_id,t2.product_code_name,t2.product_size,t2.product_price,t2.quantity,t2.total_price FROM product_basic t1
        LEFT JOIN final_sale_product t2 ON t1.id = t2.product_basic_id WHERE t2.fina_sale_basic_id='$final_sale_basic_id'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function sale_details_final_sale_basic_get($value,$CompanyAdminId,$user_basic_id)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $this->db->where('company_basic_id', $CompanyAdminId);
        $this->db->where('user_basic_id', $user_basic_id);
        $query = $this->db->get('final_sale_basic');
        return $query->result_array();
    }
    public function sale_details_final_product_basic_get($value)
    {
        $sql3="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.brand,t1.image,t2.fina_sale_basic_id,t2.purchase_basic_id,t2.product_basic_id,t2.product_code_name,t2.product_size,t2.product_price,t2.quantity,t2.total_price FROM product_basic t1
        LEFT JOIN final_sale_product t2 ON t1.id = t2.product_basic_id WHERE t2.fina_sale_basic_id='$value'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }

    /******COMPANY ADMIN SALE MODEL*******/

    /******COMPANY ADMIN REPORTS MODEL*******/
    public function all_purchase_bill_reports($CompanyAdminId,$user_basic_id)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.purchase_code,t1.purchase_status,t1.modified_date,t1.modified_time,t2.purchase_basic_id,t2.vendor_id,t2.vendor_name,t2.vendor_code,t2.vendor_contact_person,t2.vendor_contact_no,t2.invoice_to_user_id,t2.payable_amount,t2.paid_amount,t2.due_amount FROM purchase_basic t1
        LEFT JOIN purchase_invoice t2 ON t1.id = t2.purchase_basic_id WHERE t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId' ORDER BY t1.id DESC";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function date_to_date_purchase_bill_reports($CompanyAdminId,$user_basic_id,$StartDate,$EndDate)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.purchase_code,t1.purchase_status,t1.modified_date,t1.modified_time,t2.purchase_basic_id,t2.vendor_id,t2.vendor_name,t2.vendor_code,t2.vendor_contact_person,t2.vendor_contact_no,t2.invoice_to_user_id,t2.payable_amount,t2.paid_amount,t2.due_amount FROM purchase_basic t1
        LEFT JOIN purchase_invoice t2 ON t1.id = t2.purchase_basic_id WHERE t1.modified_date > '$StartDate' AND t1.modified_date < '$EndDate' AND t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function date_to_date_total_purchase_product($CompanyAdminId,$user_basic_id,$StartDate,$EndDate)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.purchase_code,t1.purchase_status,t1.modified_date,t1.modified_time,t2.purchase_basic_id,t2.vendor_id,t2.vendor_name,t2.vendor_code,t2.vendor_contact_person,t2.vendor_contact_no,t2.invoice_to_user_id,t2.payable_amount,t2.paid_amount,t2.due_amount FROM purchase_basic t1
        LEFT JOIN purchase_invoice t2 ON t1.id = t2.purchase_basic_id WHERE t1.modified_date > '$StartDate' AND t1.modified_date < '$EndDate' AND t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId'";
        $query3=$this->db->query($sql3);
       // return $query3->result_array();
        $purchase_basic_id=array();
        foreach($query3->result_array() as $PurchaseBasicData)
        {
            $purchase_basic_id[]=$PurchaseBasicData['id'];
        }

        $sql2 ="SELECT * FROM purchase_product_basic WHERE purchase_basic_id IN ('" . implode("', '", $purchase_basic_id) . "')";

        $query2=$this->db->query($sql2);

        $total_quantity_sub=0;
        foreach($query2->result_array() as $PurchaseProductData)
        {
            $total_quantity_sub +=$PurchaseProductData['quantity'];
        }
        return  $total_quantity_sub;

    }
    public function final_sale_basic_report_get($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->order_by('id', 'desc');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('final_sale_basic');
        return $query->result_array();
    }
    public function date_to_date_sale_reports($CompanyAdminId,$StartDate,$EndDate)
    {
        $sql3="SELECT * FROM final_sale_basic WHERE company_basic_id='$CompanyAdminId' AND modified_date BETWEEN '$StartDate' AND '$EndDate'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function date_to_date_total_sale_product($CompanyAdminId,$StartDate,$EndDate)
    {
        $sql3="SELECT * FROM final_sale_basic WHERE company_basic_id='$CompanyAdminId' AND modified_date BETWEEN '$StartDate' AND '$EndDate'";
        $query3=$this->db->query($sql3);
        // return $query3->result_array();
        $sale_basic_id=array();
        foreach($query3->result_array() as $PurchaseBasicData)
        {
            $sale_basic_id[]=$PurchaseBasicData['id'];
        }

        $sql2 ="SELECT * FROM final_sale_product WHERE fina_sale_basic_id IN ('" . implode("', '", $sale_basic_id) . "')";

        $query2=$this->db->query($sql2);

        $total_quantity_sub=0;
        foreach($query2->result_array() as $SaleProductData)
        {
            $total_quantity_sub +=$SaleProductData['quantity'];
        }
        return  $total_quantity_sub;

    }
    public function all_purchase_bill_reports_product($CompanyAdminId,$user_basic_id)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.purchase_code,t1.purchase_status,t1.modified_date,t1.modified_time,t2.purchase_basic_id,t2.vendor_id,t2.vendor_name,t2.vendor_code,t2.vendor_contact_person,t2.vendor_contact_no,t2.invoice_to_user_id,t2.payable_amount,t2.paid_amount,t2.due_amount FROM purchase_basic t1
        LEFT JOIN purchase_invoice t2 ON t1.id = t2.purchase_basic_id WHERE t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }

    public function all_report_purchase_products($CompanyAdminId,$user_basic_id)
    {
        $sql="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.purchase_code,t1.purchase_status,t1.modified_date,t1.modified_time,t2.purchase_basic_id,t2.vendor_id,t2.vendor_name,t2.vendor_code,t2.vendor_contact_person,t2.vendor_contact_no,t2.invoice_to_user_id,t2.payable_amount,t2.paid_amount,t2.due_amount FROM purchase_basic t1
        LEFT JOIN purchase_invoice t2 ON t1.id = t2.purchase_basic_id WHERE t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId'";
        $query=$this->db->query($sql);

        $purchase_basic_id=array();

        foreach($query->result_array() as $PurchaseBasicData)
        {
            $purchase_basic_id[]=$PurchaseBasicData['id'];
        }

        $sql2="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.brand,t1.buffer_limit,t1.image,t2.purchase_basic_id,t2.purchase_basic_id,t2.purchase_product_basic_id,t2.purchase_product_code_name,t2.product_size,t2.product_cost_price,t2.quantity,t2.total_price,t2.mrp,t2.product_billing_price FROM product_basic t1
        LEFT JOIN purchase_product_basic t2 ON t1.id = t2.purchase_product_basic_id WHERE t2.purchase_basic_id IN ('" . implode("', '", $purchase_basic_id) . "') ORDER BY t2.purchase_basic_id DESC";
        $query2=$this->db->query($sql2);
        return $query2->result_array();
    }
    public function date_to_date_purchase_bill_reports_product($CompanyAdminId,$user_basic_id,$StartDate,$EndDate)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.purchase_code,t1.purchase_status,t1.modified_date,t1.modified_time,t2.purchase_basic_id,t2.vendor_id,t2.vendor_name,t2.vendor_code,t2.vendor_contact_person,t2.vendor_contact_no,t2.invoice_to_user_id,t2.payable_amount,t2.paid_amount,t2.due_amount FROM purchase_basic t1
        LEFT JOIN purchase_invoice t2 ON t1.id = t2.purchase_basic_id WHERE t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId' AND t1.modified_date BETWEEN '$StartDate' AND '$EndDate'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function date_to_date_report_purchase_products($CompanyAdminId,$user_basic_id,$StartDate,$EndDate)
    {
        $sql="SELECT t1.id,t1.user_basic_id,t1.company_basic_id,t1.purchase_code,t1.purchase_status,t1.modified_date,t1.modified_time,t2.purchase_basic_id,t2.vendor_id,t2.vendor_name,t2.vendor_code,t2.vendor_contact_person,t2.vendor_contact_no,t2.invoice_to_user_id,t2.payable_amount,t2.paid_amount,t2.due_amount FROM purchase_basic t1
        LEFT JOIN purchase_invoice t2 ON t1.id = t2.purchase_basic_id WHERE t1.user_basic_id='$user_basic_id' AND t1.company_basic_id='$CompanyAdminId' AND t1.modified_date BETWEEN '$StartDate' AND '$EndDate'";
        $query=$this->db->query($sql);

        $purchase_basic_id=array();

        foreach($query->result_array() as $PurchaseBasicData)
        {
            $purchase_basic_id[]=$PurchaseBasicData['id'];
        }

        $sql2="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.product_code,t1.brand,t1.buffer_limit,t1.image,t2.purchase_basic_id,t2.purchase_basic_id,t2.purchase_product_basic_id,t2.purchase_product_code_name,t2.product_size,t2.product_cost_price,t2.quantity,t2.total_price,t2.mrp,t2.product_billing_price FROM product_basic t1
        LEFT JOIN purchase_product_basic t2 ON t1.id = t2.purchase_product_basic_id WHERE t2.purchase_basic_id IN ('" . implode("', '", $purchase_basic_id) . "') ORDER BY t2.purchase_basic_id DESC";
        $query2=$this->db->query($sql2);
        return $query2->result_array();
    }
    public function final_sale_basic_report_product_get($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->order_by('id', 'desc');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('final_sale_basic');
        return $query->result_array();
    }
    public function final_sale_product_get($CompanyAdminId)
    {
        $this->db->select('*');
        $this->db->order_by('id', 'desc');
        $this->db->where('company_basic_id', $CompanyAdminId);
        $query = $this->db->get('final_sale_basic');

        $final_sale_basic_id=array();

        foreach($query->result_array() as $FinalSaleBasicData)
        {
            $final_sale_basic_id[]=$FinalSaleBasicData['id'];
        }

        $sql3="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.brand,t1.image,t2.fina_sale_basic_id,t2.purchase_basic_id,t2.product_basic_id,t2.product_code_name,t2.product_size,t2.product_price,t2.quantity,t2.total_price FROM product_basic t1
        LEFT JOIN final_sale_product t2 ON t1.id = t2.product_basic_id WHERE t2.fina_sale_basic_id IN ('" . implode("', '", $final_sale_basic_id) . "') ORDER BY t2.fina_sale_basic_id DESC";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function date_to_date_sale_basic_report_product_get($CompanyAdminId,$StartDate,$EndDate)
    {
        $sql="SELECT * FROM final_sale_basic WHERE company_basic_id='$CompanyAdminId' AND modified_date BETWEEN '$StartDate' AND '$EndDate'  ORDER BY id DESC";
        $query=$this->db->query($sql);
        return $query->result_array();
    }
    public function date_to_date_sale_product_get($CompanyAdminId,$StartDate,$EndDate)
    {
        $sql="SELECT * FROM final_sale_basic WHERE company_basic_id='$CompanyAdminId' AND modified_date BETWEEN '$StartDate' AND '$EndDate'  ORDER BY id DESC";
        $query=$this->db->query($sql);

        $final_sale_basic_id=array();
        foreach($query->result_array() as $FinalSaleBasicData)
        {
            $final_sale_basic_id[]=$FinalSaleBasicData['id'];
        }

        $sql3="SELECT t1.id,t1.product_cat_name,t1.product_sub_cat_name,t1.product_name,t1.brand,t1.image,t2.fina_sale_basic_id,t2.purchase_basic_id,t2.product_basic_id,t2.product_code_name,t2.product_size,t2.product_price,t2.quantity,t2.total_price FROM product_basic t1
        LEFT JOIN final_sale_product t2 ON t1.id = t2.product_basic_id WHERE t2.fina_sale_basic_id IN ('" . implode("', '", $final_sale_basic_id) . "') ORDER BY t2.fina_sale_basic_id DESC";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    /******COMPANY ADMIN REPORTS MODEL*******/

}