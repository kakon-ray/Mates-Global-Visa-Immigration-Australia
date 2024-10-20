<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 10/10/23
 * Time: 1:36 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cms extends CI_Controller
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
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('UserName', 'UserName', 'trim|required|xss_clean');
        $this->form_validation->set_rules('UserPassword', 'UserPassword', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page
            $this->session->set_flashdata('message', "<div class='infoMessageError'>Wrong Username & Password</div>");
            $this->load->view('cms/login');

        }
        else
        {
            //Go to private area
            redirect('user_log_process', 'refresh');
            //echo "Go to private area";
        }

    }
    function check_database($UserPassword)
    {
        $UserName = $this->input->post('UserName');

        $result = $this->user_login_model->login($UserName, $UserPassword);
        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'user_name' => $row->user_name,
                    'user_type' => $row->user_type,
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }

    /*************CMS DASHBOARD*************************/
    public function dashboard()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
           // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));

            $this->load->Model('Admin_model');

            // echo "<pre>";
            // print_r($this->Admin_model->total_apply());
            // exit;

            $this->data['TodayHits']=$this->Admin_model->today_web_hit($date);
            $this->data['TotalHits']=$this->Admin_model->total_web_hit();
            $this->data['TodayApply']=$this->Admin_model->today_apply_count($date);
            $this->data['TotalApply']=$this->Admin_model->total_apply_count();
            $this->data['TotalAttachment']=$this->Admin_model->total_attachment();
            $this->data['TotalEligible']=$this->Admin_model->total_eligible();
            $this->data['TotalUser']=$this->Admin_model->total_user();
            $this->data['TodayAttachment']=$this->Admin_model->today_attachment($date);
            $this->data['ActiveMenu']="Dashboard";
            $this->load->view('cms/v_dashboard',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function today_apply()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));

            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="Dashboard";
            $this->data['TodayApply']=$this->Admin_model->today_apply($date);

            // echo "<pre>";
            // print_r($this->data['TodayApply']);
            // exit;

            $this->load->view('cms/v_today_apply',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function total_apply()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));

            $this->load->Model('Admin_model');
            $this->data['TodayHits']=$this->Admin_model->today_web_hit($date);
            $this->data['TotalHits']=$this->Admin_model->total_web_hit();
            $this->data['TodayApply']=$this->Admin_model->total_apply_data();
            $this->data['TotalApply']=$this->Admin_model->total_apply();
            $this->data['ActiveMenu']="Dashboard";
            $this->load->view('cms/v_total_apply',$this->data);

            //   echo "<pre>";
            // print_r($this->data['TotalApply']);
            // exit;
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function total_attachment()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));

            $this->load->Model('Admin_model');
            $this->data['TotalAttachment']=$this->Admin_model->total_attachment();
            $this->data['Attachments']=$this->Admin_model->attachment_data();
            $this->data['Assessment']=$this->Admin_model->assessment_request();
            $this->data['ActiveMenu']="Dashboard";
            $this->load->view('cms/v_total_attachment',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function today_attachment()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));

           // echo "today attachment is under development";

            $this->load->Model('Admin_model');
            $this->data['TodayAttachment']=$this->Admin_model->today_attachment($date);
            $this->data['Attachments']=$this->Admin_model->today_attachment_data($date);
            $this->data['Assessment']=$this->Admin_model->assessment_request();
            $this->data['ActiveMenu']="Dashboard";
            $this->load->view('cms/v_today_attachment',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function attachment_delete($student_visa_attachment_id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            echo "today attachment is under development";
            $this->load->Model('Admin_model');
            $this->Admin_model->attachment_data_delete($student_visa_attachment_id);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Attachment delete successfully</div>");
            redirect(base_url().'cms/total_attachment');
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function total_eligible()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
          //  echo "total eligible is under development";

            $this->load->Model('Admin_model');
            $this->data['TotalEligible']=$this->Admin_model->total_eligible();
            $this->data['TodayApply']=$this->Admin_model->total_eligible_data();
            $this->data['TotalApply']=$this->Admin_model->total_apply();
            $this->data['ActiveMenu']="Dashboard";
            $this->load->view('cms/v_total_eligible',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function total_user()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));

            $this->load->Model('Admin_model');
            $this->data['TotalUser']=$this->Admin_model->total_user_data();
            $this->data['AssessmentRequest']=$this->Admin_model->student_assessment_request_data();
            $this->data['ActiveMenu']="Dashboard";
            $this->load->view('cms/v_total_user',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function form_view($form_id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="Dashboard";
            $this->data['form_id']=$form_id;
            $this->data['FormData']=$this->Admin_model->pdf_form_data($form_id);
            $this->data['FormDataDetails']=$this->Admin_model->pdf_form_data_details($form_id);
            $this->load->view('cms/v_form_view',$this->data);
            //   echo "<pre>";
            // print_r($this->data['FormDataDetails']);
            // exit;
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }

    }
    public function form_download($form_id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');

            foreach($this->Admin_model->pdf_form_data($form_id) as $TodayApplyData)
            {
                $form_id=$TodayApplyData['id'];
                $fullname=$TodayApplyData['fullname'];
                $phone_number=$TodayApplyData['phone_number'];
                $email=$TodayApplyData['email'];
                $contact_address=$TodayApplyData['contact_address'];
                $birth_date=$TodayApplyData['birth_date'];
                $ielts_score=$TodayApplyData['ielts_score'];
                $education=$TodayApplyData['education'];
                $finished_year=$TodayApplyData['finished_year'];
                $result=$TodayApplyData['result'];
                $institution=$TodayApplyData['institution'];
                $student_visa_country=$TodayApplyData['student_visa_country'];
                $applying_from_name=$TodayApplyData['applying_from_name'];
                $program_enroll=$TodayApplyData['program_enroll'];
                $which_session=$TodayApplyData['which_session'];
                $passport_have=$TodayApplyData['passport_have'];
                $martial_status=$TodayApplyData['martial_status'];
                $spouse_name=$TodayApplyData['spouse_name'];
                $spouse_age=$TodayApplyData['spouse_age'];
                $spouse_education=$TodayApplyData['spouse_education'];
                $spouse_passport=$TodayApplyData['spouse_passport'];
                $passport_expiry=$TodayApplyData['passport_expiry'];
                $children_number=$TodayApplyData['children_number'];
                $children_age=$TodayApplyData['children_age'];
                $children_birth=$TodayApplyData['children_birth'];
                $children_passport=$TodayApplyData['children_passport'];
                $d_date=$TodayApplyData['d_date'];
            }

            $path=base_url();
            $this->load->library('Pdf');
            $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('Kamonashish Fouzder');

            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
            $pdf->SetCreator(PDF_CREATOR);
            if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
                require_once(dirname(__FILE__).'/lang/eng.php');
            }
            $pdf->AddPage();
            $pdf->SetFont('helvetica', '', 8);


            $product_data='
                     <table cellspacing="0" cellpadding="20" border="0.5px">
                          <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Full Name : '.$fullname.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">Phone Number : '.$phone_number.'</td>
                          </tr>
                          <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Email Address : '.$email.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">Contact Address : '.$contact_address.'</td>
                          </tr>
                           <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Date of birth : '.$birth_date.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">IELTS Score : '.$ielts_score.'</td>
                          </tr>
                           <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Highest Education : '.$education.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">Finished Year : '.$finished_year.'</td>
                          </tr>
                           <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Result : '.$result.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">Name of the institution : '.$institution.'</td>
                          </tr>
                          <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Country for student visa : '.$student_visa_country.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">Applying from : '.$applying_from_name.'</td>
                          </tr>
                          <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Program will be enroll : '.$program_enroll.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">Session want to apply : '.$which_session.'</td>
                          </tr>
                           <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Applicant have passport : '.$passport_have.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">Martial Status : '.$martial_status.'</td>
                          </tr>
                          <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Spouse name : '.$spouse_name.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">Spouse age : '.$spouse_age.'</td>
                          </tr>
                           <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Spouse Highest Education : '.$spouse_education.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">Spouse have passport : '.$spouse_passport.'</td>
                          </tr>
                          <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Spouse passport expiry date : '.$passport_expiry.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">Number of children : '.$children_number.'</td>
                          </tr>
                           <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Children age : '.$children_age.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;">Children Date of Birth : '.$children_birth.'</td>
                          </tr>
                           <tr>
                            <td align="center" style="height: 20px; font-size: 12px;">Children have passport : '.$children_passport.'</td>
                            <td align="center" style="height: 20px; font-size: 12px;"></td>
                          </tr>
                      </table>';

            $pdf->writeHTML($product_data, true, false, true, false, '');
            $pdf->Output($fullname.'.pdf', 'I');
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }

    }
    public function eligibility($form_id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));

            $this->load->Model('Admin_model');
            foreach($this->Admin_model->pdf_form_data($form_id) as $TodayApplyData)
            {
                $form_id=$TodayApplyData['id'];
                $fullname=$TodayApplyData['fullname'];
                $phone_number=$TodayApplyData['phone_number'];
                $email=$TodayApplyData['email'];
                $contact_address=$TodayApplyData['contact_address'];
                $birth_date=$TodayApplyData['birth_date'];
                $ielts_score=$TodayApplyData['ielts_score'];
                $education=$TodayApplyData['education'];
                $finished_year=$TodayApplyData['finished_year'];
                $result=$TodayApplyData['result'];
                $institution=$TodayApplyData['institution'];
                $student_visa_country=$TodayApplyData['student_visa_country'];
                $applying_from_name=$TodayApplyData['applying_from_name'];
                $program_enroll=$TodayApplyData['program_enroll'];
                $which_session=$TodayApplyData['which_session'];
                $passport_have=$TodayApplyData['passport_have'];
                $martial_status=$TodayApplyData['martial_status'];
                $spouse_name=$TodayApplyData['spouse_name'];
                $spouse_age=$TodayApplyData['spouse_age'];
                $spouse_education=$TodayApplyData['spouse_education'];
                $spouse_passport=$TodayApplyData['spouse_passport'];
                $passport_expiry=$TodayApplyData['passport_expiry'];
                $children_number=$TodayApplyData['children_number'];
                $children_age=$TodayApplyData['children_age'];
                $children_birth=$TodayApplyData['children_birth'];
                $children_passport=$TodayApplyData['children_passport'];
                $d_date=$TodayApplyData['d_date'];
            }

            foreach($this->Admin_model->apply_user_basic_id($email) as $UserBasicDataDetails)
            {
                $ApplyUserBasicId=$UserBasicDataDetails['id'];
            }

            $Title="Welcome To Global Connex";
            $Text="Congratulations $fullname you are eligible for $student_visa_country student visa. Click following link for attached your necessary documents";

            $NotificationModelData=array(
                'user_basic_id'=>$ApplyUserBasicId,
                'notification_title'=>$Title,
                'notification_text'=>$Text,
                'd_date'=>$date,
                'd_time'=>$time,
                'status'=>1,
            );
            $this->Admin_model->new_user_notification($NotificationModelData);

            $AttachmentLink="https://globalconnex.com.au/user_panel";
            $this->load->library('email');
            $this->email
                ->from('info@globalconnex.com.au', 'Global Connex Ltd')
                ->to($email)
                ->subject('Welcome To Global Connex')
                ->message("Congratulations $fullname you are eligible for $student_visa_country student visa.  <br>---------------------<br> Login Details <br>---------------------<br> Username : $email <br>Password : 123456 <br>Login Url: $AttachmentLink")
                ->set_mailtype('html');
            $this->email->send();
            $this->Admin_model->status_update($form_id);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Eligibility update successfully</div>");
            redirect(base_url().'cms/today_apply');
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function attachment_view($user_basic_id_form)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            // print_r($session_data);
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="Dashboard";
            $this->data['user_basic_id']=$user_basic_id_form;
           // echo $user_basic_id_form;
            $this->data['UserInfo']=$this->Admin_model->user_info($user_basic_id_form);
            $this->data['Attachment']=$this->Admin_model->user_attachment($user_basic_id_form);
            $this->load->view('cms/v_attachment_view',$this->data);

        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function attachment_download_single($attachment_file)
    {
        $ContentFile=$attachment_file;
        $path='./others/upload/student_visa_attachment/'.$ContentFile;

        header("Pragma: public");
        header('Content-disposition: attachment; filename='.$ContentFile);
        header("Content-type: ".mime_content_type($path));
        header("Content-Length: " . filesize($path) ."; ");
        header('Content-Transfer-Encoding: binary');
        ob_clean();
        flush();

        $chunksize = 1 * (1024 * 1024); // how many bytes per chunk
        if (filesize($path) > $chunksize) {
            $handle = fopen($path, 'rb');
            $buffer = '';

            while (!feof($handle)) {
                $buffer = fread($handle, $chunksize);
                echo $buffer;
                ob_flush();
                flush();
            }

            fclose($handle);
        }
        else
        {
            readfile($path);
        }
    }
    /*************CMS DASHBOARD*************************/

    public function slider()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="home";
            $this->data['CmsSlider']=$this->Admin_model->cms_slider();
            $this->load->view('cms/v_slider',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function slider_update($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="home";
            $this->data['CmsSlider']=$this->Admin_model->cms_slider_call($id);
            $this->load->view('cms/v_slider_update',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function about_company()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="home";
            $this->data['CmsAbout']=$this->Admin_model->home_about();
            $this->load->view('cms/v_about_company',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function country_offer()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="home";
            $this->data['CmsCountry']=$this->Admin_model->home_country();
            $this->load->view('cms/v_country_offer',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function home_country_update($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="home";
            $this->data['CmsCountry']=$this->Admin_model->home_country_call($id);
            $this->load->view('cms/v_country_update',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function video()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="home";
            $this->data['CmsVideo']=$this->Admin_model->home_video();
            $this->load->view('cms/v_video',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function immigration_service()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="home";
            $this->data['Immigration']=$this->Admin_model->immigration_service();
            $this->load->view('cms/v_immigration_service',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function home_service_update($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="home";
            $this->data['Immigration']=$this->Admin_model->immigration_service_call($id);
            $this->load->view('cms/v_immigration_update',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function contact()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="home";
            $this->data['CmsContact']=$this->Admin_model->home_contact();
            $this->load->view('cms/v_contact',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function company_profile()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="about";
            $this->data['CompanyProfile']=$this->Admin_model->company_profile();
            $this->load->view('cms/v_company_profile',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function mission_vision()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="about";
            $this->data['Mission']=$this->Admin_model->mission_vision();
            $this->load->view('cms/v_mission_vision',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function director_message()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="about";
            $this->data['Message']=$this->Admin_model->about_message();
            $this->load->view('cms/v_director_message',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function director_message_update($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="about";
            $this->data['Message']=$this->Admin_model->about_message_call($id);
            $this->load->view('cms/v_message_update',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }

 /*************Visa Consultant Start*************************/
    public function student_visa()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="VisaConsultant";
            $this->data['StudentVisa']=$this->Admin_model->student_visa_call();
            $this->load->view('cms/v_student_visa',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function work_permit()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="VisaConsultant";
            $this->data['WorkPermit']=$this->Admin_model->work_permit_call();
            $this->load->view('cms/v_work_permit',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function training_visa()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="VisaConsultant";
            $this->data['TrainingVisa']=$this->Admin_model->training_visa_call();
            $this->load->view('cms/v_training_visa',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function investment_visa()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="VisaConsultant";
            $this->data['InvestmentVisa']=$this->Admin_model->investment_visa_call();
            $this->load->view('cms/v_investment_visa',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function tourist_visa()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="VisaConsultant";
            $this->data['TouristVisa']=$this->Admin_model->tourist_visa_call();
            $this->load->view('cms/v_tourist_visa',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    /*************Visa Consultant End*************************/

    /*************Job Recruitment Start*************************/
    public function resume_building()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="JobRecruitment";
            $this->data['ResumeBuilding']=$this->Admin_model->resume_building_call();
            $this->load->view('cms/v_resume_building',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function interview_matching()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="JobRecruitment";
            $this->data['InterviewMatching']=$this->Admin_model->interview_matching_call();
            $this->load->view('cms/v_interview_matching',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function interview_preparation()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="JobRecruitment";
            $this->data['InterviewPreparation']=$this->Admin_model->interview_preparation_call();
            $this->load->view('cms/v_interview_preparation',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function career_counseling()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="JobRecruitment";
            $this->data['CareerCounseling']=$this->Admin_model->career_counseling_call();
            $this->load->view('cms/v_career_counseling',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function hire_staff()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="JobRecruitment";
            $this->data['HireStaff']=$this->Admin_model->hire_staff_call();
            $this->load->view('cms/v_hire_staff',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    /*************Job Recruitment End*************************/

    /*************Country Serve Start*************************/
    public function country_australia()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="CountryServe";
            $this->data['ServeAustralia']=$this->Admin_model->serve_australia_call();
            $this->load->view('cms/v_country_australia',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function country_newzealand()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="CountryServe";
            $this->data['ServeNewzealand']=$this->Admin_model->serve_newzealand_call();
            $this->load->view('cms/v_country_newzealand',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function country_canada()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="CountryServe";
            $this->data['ServeCanada']=$this->Admin_model->serve_canada_call();
            $this->load->view('cms/v_country_canada',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function country_sweden()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="CountryServe";
            $this->data['ServeSweden']=$this->Admin_model->serve_sweden_call();
            $this->load->view('cms/v_country_sweden',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function country_malaysia()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="CountryServe";
            $this->data['ServeMalaysia']=$this->Admin_model->serve_malaysia_call();
            $this->load->view('cms/v_country_malaysia',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    /*************Country Serve End*************************/

    public function visa_category()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category();
            $this->load->view('cms/v_visa_category',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function visa_category_update($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category_call($id);
            $this->load->view('cms/v_visa_category_update',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function visa_australia()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category_australia();
            $this->data['VisaAustralia']=$this->Admin_model->visa_australia();
            $this->load->view('cms/visa_australia',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function visa_australia_update($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category_australia();
            $this->data['VisaAustralia']=$this->Admin_model->visa_australia_call($id);
            $this->load->view('cms/visa_australia_update',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function visa_newzealand()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category_newzealand();
            $this->data['VisaNewzealand']=$this->Admin_model->visa_newzealand();
            $this->load->view('cms/visa_newzealand',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function visa_newzealand_update($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category_newzealand();
            $this->data['VisaAustralia']=$this->Admin_model->visa_newzealand_call($id);
            $this->load->view('cms/visa_newzealand_update',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function visa_canada()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category_canada();
            $this->data['VisaCanada']=$this->Admin_model->visa_canada();
            $this->load->view('cms/visa_canada',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function visa_canada_update($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category_canada();
            $this->data['VisaAustralia']=$this->Admin_model->visa_canada_call($id);
            $this->load->view('cms/visa_canada_update',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function visa_sweden()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category_sweden();
            $this->data['VisaSweden']=$this->Admin_model->visa_sweden();
            $this->load->view('cms/visa_sweden',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function visa_sweden_update($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category_sweden();
            $this->data['VisaAustralia']=$this->Admin_model->visa_sweden_call($id);
            $this->load->view('cms/visa_sweden_update',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function visa_malaysia()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category_malaysia();
            $this->data['VisaMalaysia']=$this->Admin_model->visa_malaysia();
            $this->load->view('cms/visa_malaysia',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }
    public function visa_malaysia_update($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ActiveMenu']="ApplyVisa";
            $this->data['VisaCategory']=$this->Admin_model->visa_category_malaysia();
            $this->data['VisaAustralia']=$this->Admin_model->visa_malaysia_call($id);
            $this->load->view('cms/visa_malaysia_update',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('cms', 'refresh');
        }
    }

    public function test()
    {
       date_default_timezone_set('Asia/Dhaka');
       echo  $date=date('Y-m-d', strtotime('-0 day'));
       echo $time=date('H:i:s', strtotime('-0 day'));
    }




}

