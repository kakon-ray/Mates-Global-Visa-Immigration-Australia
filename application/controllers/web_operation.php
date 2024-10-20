<?php

/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2/7/24
 * Time: 12:53 PM
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Web_operation extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('function_helper');
        $this->load->library('pagination');         /* load pagination Library */
        $this->load->library('form_validation');    /* load validation Library */
        //        $this->load->helper('function_helper');
        //        $this->load->Model('m_home');
        $this->load->model('user_login_model');
        $this->load->library('session');
        $this->load->library('pagination');
    }
    
    public function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('web', 'refresh');
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function student_assessment_request()
    {
        header('Content-Type: text/html; charset=utf-8');
        date_default_timezone_set('Asia/Dhaka');
        $date = date('Y-m-d', strtotime('-0 day'));
        $time = date('H:i:s', strtotime('-0 day'));
        $this->load->Model('Web_model');
        //        echo "<pre>";
        //        print_r($_REQUEST);
        //        exit();
        // student_assessment_request

        $UserLoginData = array(
            'user_name' => $_REQUEST['EmailAddress'],
            'user_password' => md5('123456'),
            'user_type' => 'user',
            'full_name' => $_REQUEST['FullName'],
            'user_image' => 'user.png',
            'status' => 1
        );
        $UserBasicGetId = $this->Web_model->new_user_create($UserLoginData);

        if ($_REQUEST['MartialStatus'] == "Married") {
            $SpouseName = $_REQUEST['SpouseName'];
            $SpouseAge = $_REQUEST['SpouseAge'];
            $SpouseEducation = $_REQUEST['SpouseEducation'];
            $SpousePassport = $_REQUEST['SpousePassport'];
            $PassportExpiry = $_REQUEST['PassportExpiry'];
            $HowManyChildren = $_REQUEST['HowManyChildren'];
            $ChildrenAge = $_REQUEST['ChildrenAge'];
            $ChildrenDateBirth = $_REQUEST['ChildrenDateBirth'];
            $ChildrenPassport = $_REQUEST['ChildrenPassport'];
        } else {
            $SpouseName = "null";
            $SpouseAge = "null";
            $SpouseEducation = "null";
            $SpousePassport = "null";
            $PassportExpiry = "null";
            $HowManyChildren = "null";
            $ChildrenAge = "null";
            $ChildrenDateBirth = "null";
            $ChildrenPassport = "null";
        }

        $StudentAssessmentFormData = array(
            'user_basic_id' => $UserBasicGetId,
            'fullname' => $_REQUEST['FullName'],
            'phone_number' => $_REQUEST['PhoneNumber'],
            'email' => $_REQUEST['EmailAddress'],
            'contact_address' => $_REQUEST['ContactAddress'],
            'birth_date' => $_REQUEST['DateBirth'],
            'ielts_score' => $_REQUEST['IELTSScore'],
            'education' => $_REQUEST['HighestEducation'],
            'finished_year' => $_REQUEST['FinishedYear'],
            'result' => $_REQUEST['Result'],
            'institution' => $_REQUEST['Institution'],
            'student_visa_country' => $_REQUEST['CountryStudentVisa'],
            'applying_from_name' => $_REQUEST['WhichCountryApplyForm'],
            'program_enroll' => $_REQUEST['ProgramEenroll'],
            'which_session' => $_REQUEST['WhichSession'],
            'passport_have' => $_REQUEST['MainApplicantPassport'],
            'martial_status' => $_REQUEST['MartialStatus'],
            'spouse_name' => $SpouseName,
            'spouse_age' => $SpouseAge,
            'spouse_education' => $SpouseEducation,
            'spouse_passport' => $SpousePassport,
            'passport_expiry' => $PassportExpiry,
            'children_number' => $HowManyChildren,
            'children_age' => $ChildrenAge,
            'children_birth' => $ChildrenDateBirth,
            'children_passport' => $ChildrenPassport,
            'd_date' => $date,
            'd_time' => $time,
            'status' => 0,
        );
        $this->Web_model->new_student_assessment($StudentAssessmentFormData);
        redirect(base_url() . 'web/success');
    }

    public function student_assessment_new_submit()
    {
        header('Content-Type: text/html; charset=utf-8');
        date_default_timezone_set('Asia/Dhaka');
        $date = date('Y-m-d', strtotime('-0 day'));
        $time = date('H:i:s', strtotime('-0 day'));
        $this->load->Model('Web_model');

        // $user_data = $this->session->userdata('logged_in');
        // if ($user_data) {
        //     $user_id = $user_data['id'];
        //     print_r($user_id);
        // } else {
        //     echo "No user is logged in.";
        // }



        $StudentAssessmentFormData = array(
            'full_name' => $_REQUEST['FullName'],
            'date_of_birth' => $_REQUEST['DateOfBirth'],
            'gender' => $_REQUEST['Gender'],
            'religion' => $_REQUEST['Religion'],
            'martial_status' => $_REQUEST['MartialStatus'],
            'nationality' => $_REQUEST['Nationality'],
            'national_id_no' => $_REQUEST['NationalIdNo'],
            'birth_certificate_no' => $_REQUEST['BirthCertificateNo'],
            'driving_license_no' => $_REQUEST['DrivingLicenseNo'],
            'passport_no' => $_REQUEST['PassportNo'],
            'passport_issue_date' => $_REQUEST['PassportIssueDate'],
            'passport_expiry_date' => $_REQUEST['PassportExpiryDate'],
            'primary_contact_no' => $_REQUEST['PrimaryContactNo'],
            'secondary_contact_no' => $_REQUEST['SecondaryContactNo'],
            'emergency_contact_no' => $_REQUEST['EmergencyContactNo'],
            'primary_email' => $_REQUEST['PrimaryEmail'],
            'secondary_email' => $_REQUEST['SecondaryEmail'],
            'father_name' => $_REQUEST['FatherName'],
            'mother_name' => $_REQUEST['MotherName'],
            'present_address' => $_REQUEST['PresentAddress'],
            'permanent_address' => $_REQUEST['PermanentAddress'],
            'preferred_country' => $_REQUEST['PreferredCountry'],
            'preferred_city' => $_REQUEST['PreferredCity'],
            'preferred_institute' => $_REQUEST['PreferredInstitute'],
            'preferred_degree' => $_REQUEST['PreferredDegree'],
            'preferred_course1' => $_REQUEST['PreferredCourse1'],
            'preferred_course2' => $_REQUEST['PreferredCourse2'],
            'preferred_session' => $_REQUEST['PreferredSession'],

            'name_spouse' => $_REQUEST['NameSpouse'],
            'spose_date_of_birth' => $_REQUEST['SposeDateOfBirth'],
            'spouse_religion' => $_REQUEST['SpouseReligion'],
            'spouse_nationality' => $_REQUEST['SpouseNationality'],
            'spouse_occupation' => $_REQUEST['SpouseOccupation'],
            'spouse_nid_number' => $_REQUEST['SpouseNIDNumber'],
            'spouse_birth_certificate_number' => $_REQUEST['SpouseBirthCertificateNumber'],
            'spouse_passport_number' => $_REQUEST['SpousePassportNumber'],
            'spouse_passport_issue_date' => $_REQUEST['SpousePassportIssueDate'],
            'spouse_passport_expiry_date' => $_REQUEST['SpousePassportExpiryDate'],
            'status' => 0,
            'd_date' => $date,
        );




        //    echo "<pre>";
        //    print_r($StudentAssessmentFormData);
        //    print_r($StudentAssessmentFormData2);
        //    exit();
        // student_assessment_request


        $inserted_id = $this->Web_model->new_student_assessment_submit($StudentAssessmentFormData);


        //////////// Education / Skilled Details Academic Start //////////////
        foreach ($_REQUEST['EducationInstituteName'] as $index => $EducationInstituteName) {
            $EducationInstituteNameModelData = array(
                'study_visa_application_form_main_id' => $inserted_id,
                'form_section' => $_REQUEST['education_section'][$index] ?? null,
                'field_1' => $_REQUEST['EducationInstituteName'][$index] ?? null,
                'field_2' => $_REQUEST['EducationExamDegreeName'][$index] ?? null,
                'field_3' => $_REQUEST['EducationMajorIn'][$index] ?? null,
                'field_4' => $_REQUEST['EducationResult'][$index] ?? null,
                'field_5' => $_REQUEST['EducationCGPA'][$index] ?? null,
                'field_6' => $_REQUEST['EducationYearOfPassing'][$index] ?? null,
                'field_7' => $_REQUEST['EducationCourseDuration'][$index] ?? null,

            );

            $this->Web_model->new_student_assessment_submit_child($EducationInstituteNameModelData);
        }
        //////////// Education / Skilled Details Academic End //////////////

        //////////// Skills Summery Start //////////////
        foreach ($_REQUEST['SkillsInstituteName'] as $index => $SkillsInstituteName) {

            $EducationInstituteNameModelData = array(
                'study_visa_application_form_main_id' => $inserted_id,
                'form_section' => $_REQUEST['slill_section'][$index] ?? null,
                'field_1' => $SkillsInstituteName ?? null,
                'field_2' => $_REQUEST['SkillsCourseName'][$index] ?? null,
                'field_3' => $_REQUEST['SkillsCompletionDate'][$index] ?? null,
                'field_4' => $_REQUEST['SkillsDurationCourse'][$index] ?? null,
                'field_5' => $_REQUEST['SkillsStartFrom'][$index] ?? null,
                'field_6' => $_REQUEST['SkillsEndTo'][$index] ?? null,
                'field_7' => $_REQUEST['SkillsCountry'][$index] ?? null,
                'field_8' => $_REQUEST['SkillsInstituteAddress'][$index] ?? null,

            );

            $this->Web_model->new_student_assessment_submit_child($EducationInstituteNameModelData);
        }
        //////////// Skills Summery End //////////////

        // echo "<pre>";
        // print_r($_REQUEST['ProfessionalCertificateInstituteName']);
        // exit();


        //////////// Professional Certificate Summery Start //////////////
        foreach ($_REQUEST['ProfessionalCertificateInstituteName'] as $index => $ProfessionalCertificateInstituteName) {
            $EducationInstituteNameModelData = array(
                'study_visa_application_form_main_id' => $inserted_id,
                'form_section' => $_REQUEST['professional_certificate'][$index] ?? null,
                'field_1' => $ProfessionalCertificateInstituteName ?? null,
                'field_2' => $_REQUEST['ProfessionalCertificateCertificateName'][$index] ?? null,
                'field_3' => $_REQUEST['ProfessionalCertificateStartFrom'][$index] ?? null,
                'field_4' => $_REQUEST['ProfessionalCertificateEndTo'][$index] ?? null,
                'field_5' => $_REQUEST['ProfessionalCertificateCountry'][$index] ?? null,
                'field_6' => $_REQUEST['ProfessionalCertificateInstituteAddress'][$index] ?? null,

            );

            $this->Web_model->new_student_assessment_submit_child($EducationInstituteNameModelData);
        }
        //////////// Professional Certificate Summery  End //////////////


        //////////// Employment History Experience //////////////
        foreach ($_REQUEST['ExperienceCompanyName'] as $index => $SavingSponsorName) {
            $EducationInstituteNameModelData = array(
                'study_visa_application_form_main_id' => $inserted_id,
                'form_section' => $_REQUEST['employment_history'][$index] ?? null,
                'field_1' => $SavingSponsorName ?? null,
                'field_2' => $_REQUEST['ExperienceDesignation'][$index] ?? null,
                'field_3' => $_REQUEST['ExperienceDepartment'][$index] ?? null,
                'field_4' => $_REQUEST['ExperienceEmploymentDuration'][$index] ?? null,
                'field_5' => $_REQUEST['ExperienceCompanyAddress'][$index] ?? null,
            );

            $this->Web_model->new_student_assessment_submit_child($EducationInstituteNameModelData);
        }
        //////////// Employment History Experience End //////////////



        //////////// English Proficiency Certificate //////////////
        foreach ($_REQUEST['ProficiencyInstituteName'] as $index => $ProficiencyName) {
            $EducationInstituteNameModelData = array(
                'study_visa_application_form_main_id' => $inserted_id,
                'form_section' => $_REQUEST['english_proficiency_certificate'][$index] ?? null,
                'field_1' => $ProficiencyName ?? null,
                'field_2' => $_REQUEST['ProficiencyCertificateName'][$index] ?? null,
                'field_3' => $_REQUEST['ProficiencySkillsBreakdown'][$index] ?? null,
                'field_4' => $_REQUEST['ProficiencyOverallScore'][$index] ?? null,
                'field_5' => $_REQUEST['ProficiencyEnglisghTestDate'][$index] ?? null,
                'field_6' => $_REQUEST['ProficiencyEnglisghValidDate'][$index] ?? null,

            );

            $this->Web_model->new_student_assessment_submit_child($EducationInstituteNameModelData);
        }
        //////////// English Proficiency Certificate end //////////////


        //////////// Sponsor Financial Details (Saving Account ) Summery //////////////
        foreach ($_REQUEST['SavingSponsorName'] as $index => $SavingAccountName) {
            $EducationInstituteNameModelData = array(
                'study_visa_application_form_main_id' => $inserted_id,
                'form_section' => $_REQUEST['sponsor_saving'][$index] ?? null,
                'field_1' => $SavingAccountName ?? null,
                'field_2' => $_REQUEST['SavingRelationWithApplicant'][$index] ?? null,
                'field_3' => $_REQUEST['SavingAccount'][$index] ?? null,
                'field_4' => $_REQUEST['SavingSponsorSixMonths'][$index] ?? null,
                'field_5' => $_REQUEST['SavingAccountHowMuch'][$index] ?? null,
                'field_6' => $_REQUEST['SavingBankName'][$index] ?? null,

            );

            $this->Web_model->new_student_assessment_submit_child($EducationInstituteNameModelData);
        }
        //////////// Sponsor Financial Details (Saving Account ) Summery end //////////////



        //////////// Sponsor’s Certificate Fdr Account //////////////
        foreach ($_REQUEST['FdrSponsorName'] as $index => $FdrSponsorName) {
            $EducationInstituteNameModelData = array(
                'study_visa_application_form_main_id' => $inserted_id,
                'form_section' => $_REQUEST['sponsor_fdr'][$index] ?? null,
                'field_1' => $FdrSponsorName ?? null,
                'field_2' => $_REQUEST['FdrRelationWithApplicant'][$index] ?? null,
                'field_3' => $_REQUEST['FDRAccount'][$index] ?? null,
                'field_4' => $_REQUEST['FdrSponsorSixMonths'][$index] ?? null,
                'field_5' => $_REQUEST['FdrAccountHowMuch'][$index] ?? null,
                'field_6' => $_REQUEST['FdrBankName'][$index] ?? null,

            );

            $this->Web_model->new_student_assessment_submit_child($EducationInstituteNameModelData);
        }
        //////////// Sponsor’s Certificate Fdr Account //////////////



        //////////// Child start //////////////
        foreach ($_REQUEST['NameofChild'] as $index => $NameofChild) {
            $EducationInstituteNameModelData = array(
                'study_visa_application_form_main_id' => $inserted_id,
                'form_section' => $_REQUEST['child_details'][$index] ?? null,
                'field_1' => $NameofChild ?? null,
                'field_2' => $_REQUEST['ChildReligion'][$index] ?? null,
                'field_3' => $_REQUEST['ChildNationality'][$index] ?? null,
                'field_4' => $_REQUEST['ChildNIDNumber'][$index] ?? null,
                'field_5' => $_REQUEST['ChildBirthCertificateNumber'][$index] ?? null,
                'field_6' => $_REQUEST['ChildPassportNumber'][$index] ?? null,
                'field_7' => $_REQUEST['ChildPassportIssueDate'][$index] ?? null,
                'field_8' => $_REQUEST['ChildPassportExpiryDate'][$index] ?? null,

            );

            $this->Web_model->new_student_assessment_submit_child($EducationInstituteNameModelData);
        }
        //////////// Child End //////////////




        redirect(base_url() . 'web/success');
    }


    public function attachment_request()
    {
        echo "<pre>";
        print_r($_REQUEST);
    }
}
