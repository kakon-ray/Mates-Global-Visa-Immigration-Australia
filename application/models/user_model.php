<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/7/24
 * Time: 1:27 AM
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

Class User_model extends CI_Model
{
    public function user_notifications()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('user_notifications');
        return $query->result_array();
    }
    public function user_account_details($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_id);
        $query = $this->db->get('student_assessment_request');
        return $query->result_array();
    }
    public function student_visa_attachment_check($user_id,$StudentVisaCountry)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_id);
        $this->db->where('student_visa_country', $StudentVisaCountry);
        $query = $this->db->get('student_visa_attachment');
        return $query->row_array();
    }
    public function student_visa_attachment_check2($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_id);
        $query = $this->db->get('student_visa_attachment');
        return $query->row_array();
    }
    public function  user_attachment_data($user_id)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $user_id);
        $query = $this->db->get('student_visa_attachment');
        return $query->result_array();
    }
    public function add_new_student_attachment($StudentVisaAttachmentModelData)
    {
        $this->db->insert('student_visa_attachment',$StudentVisaAttachmentModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function user_attachment_update($CoverLetter,$Cv,$JobExperienceLetter,$EmploymentLetter,$IeltsPteCertificate,$MastersCertificate,$MastersMarkSheet,$GraduateCertificate,$GraduateMarkSheet,$DiplomaCertificate,$DiplomaMarkSheet,$SkilledCertificate,$HscCertificate,$HscMarkSheet,$SscCertificate,$SscMarkSheet,$PassportCopy,$BirthCertificate,$PoliceClearanceCertificateOverseas,$PoliceClearanceCertificateBd,$CovidCertificateOverseas,$CovidCertificateBd,$StudentVisaAttachmentId,$user_id)
    {
        date_default_timezone_set('Asia/Dhaka');
        $date=date('Y-m-d', strtotime('-0 day'));
        $time=date('H:i:s', strtotime('-0 day'));
        $this->db->where('id', $StudentVisaAttachmentId);
        $this->db->where('user_basic_id', $user_id);
        $this->db->set('cover_letter', $CoverLetter);
        $this->db->set('cv', $Cv);
        $this->db->set('job_ex_letter', $JobExperienceLetter);
        $this->db->set('employment_letter', $EmploymentLetter);
        $this->db->set('ielts_pte_certificate', $IeltsPteCertificate);
        $this->db->set('masters_certificate', $MastersCertificate);
        $this->db->set('masters_mark_sheet', $MastersMarkSheet);
        $this->db->set('graduate_certificate', $GraduateCertificate);
        $this->db->set('graduate_mark_sheet', $GraduateMarkSheet);
        $this->db->set('diploma_certificate', $DiplomaCertificate);
        $this->db->set('diploma_mark_sheet', $DiplomaMarkSheet);
        $this->db->set('skilled_certificate', $SkilledCertificate);
        $this->db->set('hsc_certificate', $HscCertificate);
        $this->db->set('hsc_mark_sheet', $HscMarkSheet);
        $this->db->set('ssc_certificate', $SscCertificate);
        $this->db->set('ssc_mark_sheet', $SscMarkSheet);
        $this->db->set('passport_copy', $PassportCopy);
        $this->db->set('birth_certificate', $BirthCertificate);
        $this->db->set('police_clearance_ov', $PoliceClearanceCertificateOverseas);
        $this->db->set('police_clearance_bd', $PoliceClearanceCertificateBd);
        $this->db->set('covid_certificate_ov', $CovidCertificateOverseas);
        $this->db->set('covid_certificate_bd', $CovidCertificateBd);
        $this->db->update('student_visa_attachment');
    }

}