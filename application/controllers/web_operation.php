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
        $this->load->library('upload');

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


    // Student Visa Application Form Submit
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
        //    exit(); 0
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

    // Visitor Visa Application Form Subclass 400

    public function visitor_visa_submit()
    {
        header('Content-Type: text/html; charset=utf-8');
        date_default_timezone_set('Asia/Dhaka');
        $date = date('Y-m-d', strtotime('-0 day'));
        $time = date('H:i:s', strtotime('-0 day'));
        $this->load->Model('Web_model');


        // Capture the dates from the request
        $start_date = isset($_REQUEST['VisitAustraliaStartDate']) ? $_REQUEST['VisitAustraliaStartDate'] : '';
        $end_date = isset($_REQUEST['VisitAustraliaEndDate']) ? $_REQUEST['VisitAustraliaEndDate'] : '';

        // Concatenate the start date and end date (if that's what you're trying to achieve)
        $combined_dates = $start_date . ' to ' . $end_date;


        // Country 1
        $SpentTimeAustraliaCountry_1_Date_start = isset($_REQUEST['SpentTimeAustraliaCountry_1_Date_start']) ? $_REQUEST['SpentTimeAustraliaCountry_1_Date_start'] : '';
        $SpentTimeAustraliaCountry_1_Date_end = isset($_REQUEST['SpentTimeAustraliaCountry_1_Date_end']) ? $_REQUEST['SpentTimeAustraliaCountry_1_Date_end'] : '';
        $Country_1 = $SpentTimeAustraliaCountry_1_Date_start . ' to ' . $SpentTimeAustraliaCountry_1_Date_end;

        // Country 2
        $SpentTimeAustraliaCountry_2_Date_start = isset($_REQUEST['SpentTimeAustraliaCountry_2_Date_start']) ? $_REQUEST['SpentTimeAustraliaCountry_2_Date_start'] : '';
        $SpentTimeAustraliaCountry_2_Date_start = isset($_REQUEST['SpentTimeAustraliaCountry_2_Date_end']) ? $_REQUEST['SpentTimeAustraliaCountry_2_Date_end'] : '';
        $Country_2 = $SpentTimeAustraliaCountry_2_Date_start . ' to ' . $SpentTimeAustraliaCountry_2_Date_start;

        // Country 2
        $SpentTimeAustraliaCountry_3_Date_start = isset($_REQUEST['SpentTimeAustraliaCountry_3_Date_start']) ? $_REQUEST['SpentTimeAustraliaCountry_3_Date_start'] : '';
        $SpentTimeAustraliaCountry_3_Date_end = isset($_REQUEST['SpentTimeAustraliaCountry_3_Date_end']) ? $_REQUEST['SpentTimeAustraliaCountry_3_Date_end'] : '';
        $Country_3_time = $SpentTimeAustraliaCountry_3_Date_start . ' to ' . $SpentTimeAustraliaCountry_3_Date_end;



        $config['upload_path'] = './others/upload/signatures/';  // Adjusted to your folder structure
        $config['allowed_types'] = 'jpg|jpeg|png|pdf';  // Allowed file types
        $config['max_size'] = 2048;  // Maximum file size in KB
        $config['encrypt_name'] = true;  // Encrypt the file name for security

        // Initialize the upload library with the defined configuration
        $this->upload->initialize($config);

        // Attempt file upload
        if (!$this->upload->do_upload('CreditCardSignature')) {
            // Display any errors if the upload fails
            $error = $this->upload->display_errors();
        } else {
            // On success, retrieve file data and display the file URL
            $uploadedData = $this->upload->data();
            $fileUrl = base_url('others/upload/signatures/' . $uploadedData['file_name']);

        }


        $VisitorFormData = array(
            'applying_outside_australialocation' => $_REQUEST['applying_outside_australialocation'],
            'visitAustraliaTime' => $combined_dates,
            'how_long_stay_australia' => $_REQUEST['how_long_stay_australia'],
            'occasion' => $_REQUEST['occasion'],
            'occasionDetails' => $_REQUEST['occasionDetails'],
            'Applicants_in_Australia' => $_REQUEST['Applicants_in_Australia'],
            'furtherStay' => $_REQUEST['furtherStay'],
            'passport_FamilyName' => $_REQUEST['passport_FamilyName'],
            'Passport_Sex' => $_REQUEST['Passport_Sex'],
            'Passport_dateOfBirth' => $_REQUEST['Passport_dateOfBirth'],
            'PassportNumber' => $_REQUEST['PassportNumber'],
            'Countryofpassport' => $_REQUEST['Countryofpassport'],
            'NationalityofpassportHolder' => $_REQUEST['NationalityofpassportHolder'],
            'Passport_DateofIssue' => $_REQUEST['Passport_DateofIssue'],
            'Passport_DateofExpiry' => $_REQUEST['Passport_DateofExpiry'],
            'Passport_PlaceofIssue' => $_REQUEST['Passport_PlaceofIssue'],
            'Passport_Issuing_Authority' => $_REQUEST['Passport_Issuing_Authority'],
            'place_birth_Town_city' => $_REQUEST['place_birth_Town_city'],
            'place_birth_State' => $_REQUEST['place_birth_State'],
            'place_birth_country' => $_REQUEST['place_birth_country'],
            'RelationshipStatus' => $_REQUEST['RelationshipStatus'],
            'KnownAnyOtherName' => $_REQUEST['KnownAnyOtherName'],
            'currentlyHoldAustralian' => $_REQUEST['currentlyHoldAustralian'],
            'appliedSubclass103' => $_REQUEST['appliedSubclass103'],
            'QueueDate' => $_REQUEST['QueueDate'],
            'APECBusinessTravel' => $_REQUEST['APECBusinessTravel'],
            'CitizenOtherCountry' => $_REQUEST['CitizenOtherCountry'],
            'CitizenOtherListCountries' => $_REQUEST['CitizenOtherListCountries'],
            'OtherCurrentPassports' => $_REQUEST['OtherCurrentPassports'],
            'OtherCurrentPassportNumber' => $_REQUEST['OtherCurrentPassportNumber'],
            'OtherCurrentPassportCountry' => $_REQUEST['OtherCurrentPassportCountry'],
            'HoldIdentityCard' => $_REQUEST['HoldIdentityCard'],
            'HoldIdentityCardFamilyName' => $_REQUEST['HoldIdentityCardFamilyName'],
            'HoldIdentityCardGivenNames' => $_REQUEST['HoldIdentityCardGivenNames'],
            'HoldIdentityCardTypeDocument' => $_REQUEST['HoldIdentityCardTypeDocument'],
            'HoldIdentityCardIdentityNumber' => $_REQUEST['HoldIdentityCardIdentityNumber'],
            'HoldIdentityCardCountryIssue' => $_REQUEST['HoldIdentityCardCountryIssue'],
            'HoldIdentityCardCurrentlyLocated' => $_REQUEST['HoldIdentityCardCurrentlyLocated'],
            'LegalStatusCurrentLocation' => $_REQUEST['LegalStatusCurrentLocation'],
            'LegalStatusPermanentResident' => $_REQUEST['LegalStatusPermanentResident'],
            'LegalStatusVisitor' => $_REQUEST['LegalStatusVisitor'],
            'LegalStatusStudent' => $_REQUEST['LegalStatusStudent'],
            'LegalStatusWorkVisa' => $_REQUEST['LegalStatusWorkVisa'],
            'LegalStatusNoLegalStatus' => $_REQUEST['LegalStatusNoLegalStatus'],
            'LegalStatusOther' => $_REQUEST['LegalStatusOther'],
            'LegalStatusGiveDetails' => $_REQUEST['LegalStatusGiveDetails'],
            'VisaStatus' => $_REQUEST['VisaStatus'],
            'ResidentialAddress' => $_REQUEST['ResidentialAddress'],
            'ResidentialPostCode' => $_REQUEST['ResidentialPostCode'],
            'ResidentialCounty' => $_REQUEST['ResidentialCounty'],
            'AddressCorrespondence' => $_REQUEST['AddressCorrespondence'],
            'CorrespondencePostalCode' => $_REQUEST['CorrespondencePostalCode'],
            'CorrespondenceCountry' => $_REQUEST['CorrespondenceCountry'],
            'TelephoneNumberHome' => $_REQUEST['TelephoneNumberHome'],
            'TelephoneNumberOffice' => $_REQUEST['TelephoneNumberOffice'],
            'MobileCall' => $_REQUEST['MobileCall'],
            'CommunicatingEmail' => $_REQUEST['CommunicatingEmail'],
            'CommunicatingEmailEmailAddress' => $_REQUEST['CommunicatingEmailEmailAddress'],
            'CommunicatingEmailFaxNumber' => $_REQUEST['CommunicatingEmailFaxNumber'],
            'AustraliaWithAnyFamilyMember' => $_REQUEST['AustraliaWithAnyFamilyMember'],
            'AustraliaWithAnyFamilyMemberFullName' => $_REQUEST['AustraliaWithAnyFamilyMemberFullName'],
            'AustraliaWithAnyFamilyMemberRelationshipYou' => $_REQUEST['AustraliaWithAnyFamilyMemberRelationshipYou'],
            'AustraliaWithAnyFamilyMemberNameofSponsor' => $_REQUEST['AustraliaWithAnyFamilyMemberNameofSponsorbg'],
            'PartnerChildren' => $_REQUEST['PartnerChildren'],
            'PartnerChildrenFullName' => $_REQUEST['PartnerChildrenFullName'],
            'PartnerChildrenRelationshipDateofBirth' => $_REQUEST['PartnerChildrenRelationshipDateofBirth'],
            'PartnerChildrenRelationshipYou' => $_REQUEST['PartnerChildrenRelationshipYou'],
            'AddressWhileAustralia' => $_REQUEST['AddressWhileAustralia'],
            'TravellingAustraliaOtherCountry' => $_REQUEST['TravellingAustraliaOtherCountry'],
            'ItineraryDetails' => $_REQUEST['ItineraryDetails'],
            'RelativesAustralia' => $_REQUEST['RelativesAustralia'],
            'RelativesAustraliaFullName' => $_REQUEST['RelativesAustraliaFullName'],
            'RelativesAustraliaDateBirth' => $_REQUEST['RelativesAustraliaDateBirth'],
            'RelativesAustraliaRelationship' => $_REQUEST['RelativesAustraliaRelationship'],
            'RelativesAustraliaAddress' => $_REQUEST['RelativesAustraliaAddress'],
            'PermanentCitizen' => $_REQUEST['PermanentCitizen'],
            'ContactsAustralia' => $_REQUEST['ContactsAustralia'],
            'ContactsAustraliaFullName' => $_REQUEST['ContactsAustraliaFullName'],
            'ContactsAustraliaDateBirth' => $_REQUEST['ContactsAustraliaDateBirth'],
            'ContactsAustraliaRelationship' => $_REQUEST['ContactsAustraliaRelationship'],
            'ContactsAustraliaAddress' => $_REQUEST['ContactsAustraliaAddress'],
            'ContactsAustraliaCitizen' => $_REQUEST['ContactsAustraliaCitizen'],
            'VisitAustralia' => $_REQUEST['VisitAustralia'],
            'CourseStudyAustralia' => $_REQUEST['CourseStudyAustralia'],
            'NameOfTheCourse' => $_REQUEST['NameOfTheCourse'],
            'NameOfTheInstitution' => $_REQUEST['NameOfTheInstitution'],
            'CourseDuration' => $_REQUEST['CourseDuration'],
            'SpentTimeAustralia' => $_REQUEST['SpentTimeAustralia'],
            'SpentTimeAustraliaCountry_1' => $_REQUEST['SpentTimeAustralia'],
            'Country_1_time' => $Country_1,
            'SpentTimeAustraliaCountry_2' => $_REQUEST['SpentTimeAustraliaCountry_2'],
            'Country_2_time' => $Country_2,
            'SpentTimeAustraliaCountry_3' => $_REQUEST['SpentTimeAustraliaCountry_3'],
            'Country_3_time' => $Country_3_time,
            'HealthCareFacility' => $_REQUEST['HealthCareFacility'],
            'HealthCareFacilityDetails' => $_REQUEST['HealthCareFacilityDetails'],
            'DoctorDentist' => $_REQUEST['DoctorDentist'],
            'DoctorDentistDetails' => $_REQUEST['DoctorDentistDetails'],
            'Tuberculosis' => $_REQUEST['Tuberculosis'],
            'TuberculosisDetails' => $_REQUEST['TuberculosisDetails'],
            'IncurMedicalCosts' => $_REQUEST['IncurMedicalCosts'],
            'IncurMedicalCostsDetails' => $_REQUEST['IncurMedicalCostsDetails'],
            'MedicalCondition' => $_REQUEST['MedicalCondition'],
            'MedicalConditionDetails' => $_REQUEST['MedicalConditionDetails'],
            'UndertakenAustralianVisaLast12Month' => $_REQUEST['UndertakenAustralianVisaLast12Month'],
            'UndertakenAustralianVisaLast12MonthDetails' => $_REQUEST['UndertakenAustralianVisaLast12MonthDetails'],
            'CharacterDetails1' => $_REQUEST['CharacterDetails1'],
            'CharacterDetails2' => $_REQUEST['CharacterDetails2'],
            'CharacterDetails3' => $_REQUEST['CharacterDetails3'],
            'CharacterDetails4' => $_REQUEST['CharacterDetails4'],
            'CharacterDetails5' => $_REQUEST['CharacterDetails5'],
            'CharacterDetails6' => $_REQUEST['CharacterDetails6'],
            'CharacterDetails7' => $_REQUEST['CharacterDetails7'],
            'CharacterDetails8' => $_REQUEST['CharacterDetails8'],
            'CharacterDetails9' => $_REQUEST['CharacterDetails9'],
            'CharacterDetails10' => $_REQUEST['CharacterDetails10'],
            'CharacterDetails11' => $_REQUEST['CharacterDetails11'],
            'CharacterDetails12' => $_REQUEST['CharacterDetails12'],
            'CharacterDetails13' => $_REQUEST['CharacterDetails13'],
            'CharacterDetails14' => $_REQUEST['CharacterDetails14'],
            'CharacterDetails15' => $_REQUEST['CharacterDetails15'],
            'CharacterDetails16' => $_REQUEST['CharacterDetails16'],
            'CharacterDetails17' => $_REQUEST['CharacterDetails17'],
            'EmploymentStatus' => $_REQUEST['EmploymentStatus'],
            'EmploymentStatus_BusinessName' => $_REQUEST['EmploymentStatus_BusinessName'],
            'EmploymentStatus_Address' => $_REQUEST['EmploymentStatus_Address'],
            'EmploymentStatus_Postcode' => $_REQUEST['EmploymentStatus_Postcode'],
            'EmploymentStatus_Telephone_Number' => $_REQUEST['EmploymentStatus_Telephone_Number'],
            'EmploymentStatus_Position' => $_REQUEST['EmploymentStatus_Position'],
            'EmploymentStatus_Long_Employed' => $_REQUEST['EmploymentStatus_Long_Employed'],
            'EmploymentStatus_YearRetirement' => $_REQUEST['EmploymentStatus_YearRetirement'],
            'EmploymentStatus_Current_Course' => $_REQUEST['EmploymentStatus_Current_Course'],
            'EmploymentStatus_Educational_Institution' => $_REQUEST['EmploymentStatus_Educational_Institution'],
            'EmploymentStatus_Studying_Institution' => $_REQUEST['EmploymentStatus_Studying_Institution'],
            'EmploymentStatus_Other_Details' => $_REQUEST['EmploymentStatus_Other_Details'],
            'EmploymentStatus_Unemployed' => $_REQUEST['EmploymentStatus_Unemployed'],
            'Maintain_Yourself_Financially' => $_REQUEST['Maintain_Yourself_Financially'],
            'ProvidingSupportVisitAustralia' => $_REQUEST['ProvidingSupportVisitAustralia'],
            'ProvidingSupportVisitAustralia_Full_Name' => $_REQUEST['ProvidingSupportVisitAustralia_Full_Name'],
            'ProvidingSupportVisitAustralia_DateofBirth' => $_REQUEST['ProvidingSupportVisitAustralia_DateofBirth'],
            'ProvidingSupportVisitAustralia_Relationship_you' => $_REQUEST['ProvidingSupportVisitAustralia_Relationship_you'],
            'ProvidingSupportVisitAustralia_Address_While_Australia' => $_REQUEST['ProvidingSupportVisitAustralia_Address_While_Australia'],
            'TypeSupportProvided' => $_REQUEST['TypeSupportProvided'],
            'PreviousApplications' => $_REQUEST['PreviousApplications'],
            'PreviousApplicationsDetails' => $_REQUEST['PreviousApplicationsDetails'],
            'AssistanceReceiveCompletingForm' => $_REQUEST['AssistanceReceiveCompletingForm'],
            'AssistanceReceiveCompletingForm_Family_Name' => $_REQUEST['AssistanceReceiveCompletingForm_Family_Name'],
            'AssistanceReceiveCompletingForm_Given_Names' => $_REQUEST['AssistanceReceiveCompletingForm_Given_Names'],
            'AssistanceReceiveCompletingForm_Address' => $_REQUEST['AssistanceReceiveCompletingForm_Address'],
            'AssistanceReceiveCompletingForm_POSTCODE' => $_REQUEST['AssistanceReceiveCompletingForm_POSTCODE'],
            'Office_Telephone_Office' => $_REQUEST['Office_Telephone_Office'],
            'Office_Telephone_Mobile' => $_REQUEST['Office_Telephone_Mobile'],
            'MigrationAgentsRegistrationAuthority' => $_REQUEST['MigrationAgentsRegistrationAuthority'],
            'PersonAgentAustralia' => $_REQUEST['PersonAgentAustralia'],
            'PayPersonAgent' => $_REQUEST['PayPersonAgent'],
            'ReceivingWrittenCommunications' => $_REQUEST['ReceivingWrittenCommunications'],
            'VisaSubclassApplying' => $_REQUEST['VisaSubclassApplying'],
            'BaseApplicationCharge' => $_REQUEST['BaseApplicationCharge'],
            'NonInternetApplicationCharge' => $_REQUEST['NonInternetApplicationCharge'],
            'AdditionalApllicationPayment' => $_REQUEST['AdditionalApllicationPayment'],
            'AdditionalApllicationAge' => $_REQUEST['AdditionalApllicationAge'],
            'AdditionalApplicantChargeOverAged18' => $_REQUEST['AdditionalApplicantChargeOverAged18'],
            'SubsequentAdditionalApllicationPayment' => $_REQUEST['SubsequentAdditionalApllicationPayment'],
            'SubsequentAdditionalApllicationAge' => $_REQUEST['SubsequentAdditionalApllicationAge'],
            'SubsequentAdditionalTotal' => $_REQUEST['SubsequentAdditionalTotal'],
            'TotalAmount' => $_REQUEST['TotalAmount'],
            'PaymentMethod' => $_REQUEST['PaymentMethod'],
            'CreaditCardType' => $_REQUEST['CreaditCardType'],
            'AustralianDollars' => $_REQUEST['AustralianDollars'],
            'CreditCardNumber' => $_REQUEST['CreditCardNumber'],
            'CreditCardEndDate' => $_REQUEST['CreditCardEndDate'],
            'CardholdersName' => $_REQUEST['CardholdersName'],
            'CreditCardTelephone' => $_REQUEST['CreditCardTelephone'],
            'CreditCardAddress' => $_REQUEST['CreditCardAddress'],
            'CreditCardSignature' => $fileUrl,
            'applicationCheckbox' => json_encode($_REQUEST['applicationCheckbox']),
            'Signatureofapplicant' => $fileUrl,
            'Signatureofapplicant_Date' => $_REQUEST['Signatureofapplicant_Date'],
            'Additionalinformation' => $_REQUEST['Additionalinformation'],
        );
        
        $this->Web_model->visitor_visa_submit($VisitorFormData);


        redirect(base_url() . 'web/success2');
    }

    public function attachment_request()
    {
        echo "<pre>";
        print_r($_REQUEST);
    }
}
