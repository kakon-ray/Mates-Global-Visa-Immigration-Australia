<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/31/24
 * Time: 11:26 AM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
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
    public function dashboard()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->data['SessionData']=$session_data;
            $user_id=$session_data['id'];
            $this->load->Model('User_model');
            $this->data['MenuCall']="Dashboard";
            $this->data['Notifications']=$this->User_model->user_notifications();
            $this->data['UserAccount']=$this->User_model->user_account_details($user_id);
          //  $this->data['UserAttachment']=$this->User_model->user_attachment_data($user_id);

            $this->load->view('user/v_header', $this->data);
            $this->load->view('user/v_sidebar', $this->data);
            $this->load->view('user/v_dashboard', $this->data);
            $this->load->view('user/v_footer', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('user_panel', 'refresh');
        }
    }
    public function attachment_document()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->data['SessionData']=$session_data;
            $user_id=$session_data['id'];
            $this->load->Model('User_model');
            $this->data['MenuCall']="Attachment";
            $this->data['Notifications']=$this->User_model->user_notifications();
            $this->data['UserAccount']=$this->User_model->user_account_details($user_id);


            $DBAttachmentCheck=$this->User_model->student_visa_attachment_check2($user_id);

            if(count($DBAttachmentCheck)>0)
            {
                $this->data['UserAttachment']=$this->User_model->user_attachment_data($user_id);
                $this->load->view('user/v_header', $this->data);
                $this->load->view('user/v_sidebar', $this->data);
                $this->load->view('user/v_attachment', $this->data);
                $this->load->view('user/v_footer', $this->data);
            }
            else
            {
                $this->load->view('user/v_header', $this->data);
                $this->load->view('user/v_sidebar', $this->data);
                $this->load->view('user/v_attachment_new', $this->data);
                $this->load->view('user/v_footer', $this->data);
            }
        }
        else
        {
            //If no session, redirect to login page
            redirect('user_panel', 'refresh');
        }
    }
    public function apply_status()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->data['SessionData']=$session_data;
            $user_id=$session_data['id'];
            $this->load->Model('User_model');
            $this->data['MenuCall']="ApplyStatus";
            $this->data['Notifications']=$this->User_model->user_notifications();
            $this->data['UserAccount']=$this->User_model->user_account_details($user_id);

            $this->load->view('user/v_header', $this->data);
            $this->load->view('user/v_sidebar', $this->data);
            $this->load->view('user/v_apply_status', $this->data);
            $this->load->view('user/v_footer', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('user_panel', 'refresh');
        }
    }
    public function attachment_submit()
    {
        ini_set('max_file_uploads', 100);
        set_time_limit(0);
        //ini_set()
        // insert into student_visa_attachment
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->data['SessionData']=$session_data;
            $user_id=$session_data['id'];
            $this->load->Model('User_model');
//            echo "<pre>";
//            print_r($_FILES);
//            print_r($_REQUEST);
//            exit();
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));

            $StudentVisaCountry=$_REQUEST['StudentVisaCountry'];

            $DBAttachmentCheck=$this->User_model->student_visa_attachment_check($user_id,$StudentVisaCountry);
            if(count($DBAttachmentCheck)>0)
            {
                $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>attachment already submitted wait for admin approval<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                redirect(base_url().'user/attachment_document');
            }
            else
            {

                /************************CoverLetter************************/
                if (isset($_FILES["CoverLetter"]) && $_FILES["CoverLetter"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["CoverLetter"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["CoverLetter"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $CoverLetter=basename($_FILES["CoverLetter"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                //  echo $CoverLetter;
                /************************CoverLetter************************/

                /************************Cv************************/
                if (isset($_FILES["Cv"]) && $_FILES["Cv"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["Cv"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["Cv"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $Cv=basename($_FILES["Cv"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************Cv************************/
                // echo $Cv;

                /************************JobExperienceLetter************************/
                if (isset($_FILES["JobExperienceLetter"]) && $_FILES["JobExperienceLetter"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["JobExperienceLetter"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["JobExperienceLetter"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $JobExperienceLetter=basename($_FILES["JobExperienceLetter"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************JobExperienceLetter************************/
                // echo $JobExperienceLetter;

                /************************EmploymentLetter************************/
                if (isset($_FILES["EmploymentLetter"]) && $_FILES["EmploymentLetter"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["EmploymentLetter"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["EmploymentLetter"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $EmploymentLetter=basename($_FILES["EmploymentLetter"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************EmploymentLetter************************/
                // echo $EmploymentLetter;

                /************************IeltsPteCertificate************************/
                if (isset($_FILES["IeltsPteCertificate"]) && $_FILES["IeltsPteCertificate"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["IeltsPteCertificate"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["IeltsPteCertificate"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $IeltsPteCertificate=basename($_FILES["IeltsPteCertificate"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************IeltsPteCertificate************************/
                // echo $IeltsPteCertificate;

                /************************MastersCertificate************************/
                if (isset($_FILES["MastersCertificate"]) && $_FILES["MastersCertificate"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["MastersCertificate"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["MastersCertificate"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $MastersCertificate=basename($_FILES["MastersCertificate"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************MastersCertificate************************/
                //echo $MastersCertificate;

                /************************MastersMarkSheet************************/
                if (isset($_FILES["MastersMarkSheet"]) && $_FILES["MastersMarkSheet"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["MastersMarkSheet"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["MastersMarkSheet"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $MastersMarkSheet=basename($_FILES["MastersMarkSheet"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************MastersMarkSheet************************/
                // echo $MastersMarkSheet;

                /************************GraduateCertificate************************/
                if (isset($_FILES["GraduateCertificate"]) && $_FILES["GraduateCertificate"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["GraduateCertificate"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["GraduateCertificate"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $GraduateCertificate=basename($_FILES["GraduateCertificate"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************GraduateCertificate************************/
                //   echo $GraduateCertificate;

                /************************GraduateMarkSheet************************/
                if (isset($_FILES["GraduateMarkSheet"]) && $_FILES["GraduateMarkSheet"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["GraduateMarkSheet"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["GraduateMarkSheet"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $GraduateMarkSheet=basename($_FILES["GraduateMarkSheet"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************GraduateMarkSheet************************/
                // echo $GraduateMarkSheet;

                /************************DiplomaCertificate************************/
                if (isset($_FILES["DiplomaCertificate"]) && $_FILES["DiplomaCertificate"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["DiplomaCertificate"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["DiplomaCertificate"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $DiplomaCertificate=basename($_FILES["DiplomaCertificate"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************DiplomaCertificate************************/
                // echo $DiplomaCertificate;

                /************************DiplomaMarkSheet************************/
                if (isset($_FILES["DiplomaMarkSheet"]) && $_FILES["DiplomaMarkSheet"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["DiplomaMarkSheet"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["DiplomaMarkSheet"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $DiplomaMarkSheet=basename($_FILES["DiplomaMarkSheet"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************DiplomaMarkSheet************************/
                //  echo $DiplomaMarkSheet;

                /************************SkilledCertificate************************/
                if (isset($_FILES["SkilledCertificate"]) && $_FILES["SkilledCertificate"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["SkilledCertificate"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["SkilledCertificate"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $SkilledCertificate=basename($_FILES["SkilledCertificate"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************SkilledCertificate************************/
                // echo $SkilledCertificate;

                /************************HscCertificate************************/
                if (isset($_FILES["HscCertificate"]) && $_FILES["HscCertificate"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["HscCertificate"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["HscCertificate"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $HscCertificate=basename($_FILES["HscCertificate"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************HscCertificate************************/
                // echo $HscCertificate;

                /************************HscMarkSheet************************/
                if (isset($_FILES["HscMarkSheet"]) && $_FILES["HscMarkSheet"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["HscMarkSheet"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["HscMarkSheet"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $HscMarkSheet=basename($_FILES["HscMarkSheet"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************HscMarkSheet************************/
                //  echo $HscMarkSheet;

                /************************SscCertificate************************/
                if (isset($_FILES["SscCertificate"]) && $_FILES["SscCertificate"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["SscCertificate"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["SscCertificate"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $SscCertificate=basename($_FILES["SscCertificate"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************SscCertificate************************/
                //  echo $SscCertificate;

                /************************SscMarkSheet************************/
                if (isset($_FILES["SscMarkSheet"]) && $_FILES["SscMarkSheet"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["SscMarkSheet"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["SscMarkSheet"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $SscMarkSheet=basename($_FILES["SscMarkSheet"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************SscMarkSheet************************/
                //  echo $SscMarkSheet;

                /************************PassportCopy************************/
                if (isset($_FILES["PassportCopy"]) && $_FILES["PassportCopy"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["PassportCopy"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["PassportCopy"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $PassportCopy=basename($_FILES["PassportCopy"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************PassportCopy************************/
                //echo $PassportCopy;

                /************************BirthCertificate************************/
                if (isset($_FILES["BirthCertificate"]) && $_FILES["BirthCertificate"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["BirthCertificate"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["BirthCertificate"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $BirthCertificate=basename($_FILES["BirthCertificate"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************BirthCertificate************************/
                // echo $BirthCertificate;

                /************************PoliceClearanceCertificateOverseas************************/
                if (isset($_FILES["PoliceClearanceCertificateOverseas"]) && $_FILES["PoliceClearanceCertificateOverseas"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["PoliceClearanceCertificateOverseas"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["PoliceClearanceCertificateOverseas"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $PoliceClearanceCertificateOverseas=basename($_FILES["PoliceClearanceCertificateOverseas"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************PoliceClearanceCertificateOverseas************************/
                //  echo $PoliceClearanceCertificateOverseas;

                /************************PoliceClearanceCertificateBd************************/
                if (isset($_FILES["PoliceClearanceCertificateBd"]) && $_FILES["PoliceClearanceCertificateBd"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["PoliceClearanceCertificateBd"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["PoliceClearanceCertificateBd"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $PoliceClearanceCertificateBd=basename($_FILES["PoliceClearanceCertificateBd"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************PoliceClearanceCertificateBd************************/
                // echo $PoliceClearanceCertificateBd;

                /************************CovidCertificateOverseas************************/
                if (isset($_FILES["CovidCertificateOverseas"]) && $_FILES["CovidCertificateOverseas"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["CovidCertificateOverseas"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["CovidCertificateOverseas"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $CovidCertificateOverseas=basename($_FILES["CovidCertificateOverseas"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************CovidCertificateOverseas************************/
                // echo $CovidCertificateOverseas;

                /************************CovidCertificateBd************************/
                if (isset($_FILES["CovidCertificateBd"]) && $_FILES["CovidCertificateBd"]["error"] == 0)
                {
                    $targetDir = "others/upload/student_visa_attachment/";
                    $targetFile = $targetDir . basename($_FILES["CovidCertificateBd"]["name"]);
                    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                    // Allow certain file formats
                    $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                    if (in_array($fileType, $allowedTypes))
                    {
                        // Attempt to move uploaded file to designated directory
                        if (move_uploaded_file($_FILES["CovidCertificateBd"]["tmp_name"], $targetFile))
                        {
                            // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                            $CovidCertificateBd=basename($_FILES["CovidCertificateBd"]["name"]);
                        }
                        else
                        {
                            $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                            redirect(base_url().'user/attachment_document');
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>only JPG, JPEG, PNG, GIF, PDF and Doc files are allowed.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
//                else
//                {
//                    $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Error,</strong>No file uploaded or an error occurred during upload.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
//                    redirect(base_url().'user/attachment_document');
//                }
                /************************CovidCertificateBd************************/
                //  echo $CovidCertificateBd;


                $StudentVisaAttachmentModelData=array(
                    'user_basic_id'=>$user_id,
                    'cover_letter'=>$CoverLetter,
                    'cv'=>$Cv,
                    'job_ex_letter'=>$JobExperienceLetter,
                    'employment_letter'=>$EmploymentLetter,
                    'ielts_pte_certificate'=>$IeltsPteCertificate,
                    'masters_certificate'=>$MastersCertificate,
                    'masters_mark_sheet'=>$MastersMarkSheet,
                    'graduate_certificate'=>$GraduateCertificate,
                    'graduate_mark_sheet'=>$GraduateMarkSheet,
                    'diploma_certificate'=>$DiplomaCertificate,
                    'diploma_mark_sheet'=>$DiplomaMarkSheet,
                    'skilled_certificate'=>$SkilledCertificate,
                    'hsc_certificate'=>$HscCertificate,
                    'hsc_mark_sheet'=>$HscMarkSheet,
                    'ssc_certificate'=>$SscCertificate,
                    'ssc_mark_sheet'=>$SscMarkSheet,
                    'passport_copy'=>$PassportCopy,
                    'birth_certificate'=>$BirthCertificate,
                    'police_clearance_ov'=>$PoliceClearanceCertificateOverseas,
                    'police_clearance_bd'=>$PoliceClearanceCertificateBd,
                    'covid_certificate_ov'=>$CovidCertificateOverseas,
                    'covid_certificate_bd'=>$CovidCertificateBd,
                    'student_visa_country'=>$StudentVisaCountry,
                    'd_date'=>$date,
                    'd_time'=>$time,
                    'status'=>1,
                );
                $this->User_model->add_new_student_attachment($StudentVisaAttachmentModelData);

                $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><polyline points=\"9 11 12 14 22 4\"></polyline><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"></path></svg><strong>Success,</strong>Attachment has been sent.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                redirect(base_url().'user/attachment_document');

            }

        }
        else
        {
            //If no session, redirect to login page
            redirect('user_panel', 'refresh');
        }
    }

    public function attachment_update()
    {
        if($this->session->userdata('logged_in'))
        {
            ini_set('max_file_uploads', 100);
            set_time_limit(0);

            $session_data = $this->session->userdata('logged_in');
            $this->data['SessionData']=$session_data;
            $user_id=$session_data['id'];
            $this->load->Model('User_model');

            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));

            $StudentVisaCountry=$_REQUEST['StudentVisaCountry'];
            $StudentVisaAttachmentId=$_REQUEST['StudentVisaAttachmentId'];

//            echo "<pre>";
//            print_r($_FILES);
//            print_r($_REQUEST);
           // exit();

            /************************CoverLetter************************/
            if (isset($_FILES["CoverLetter"]) && $_FILES["CoverLetter"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["CoverLetter"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["CoverLetter"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $CoverLetter=basename($_FILES["CoverLetter"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }

            }
            else
            {
                 $CoverLetter=$_REQUEST['CoverLetter'];
            }
            /************************CoverLetter************************/

            /************************CV************************/
            if (isset($_FILES["Cv"]) && $_FILES["Cv"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["Cv"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["Cv"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $Cv=basename($_FILES["Cv"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                 $Cv=$_REQUEST['Cv'];
            }
            /************************CV************************/

            /************************Job Experience Letter************************/
            if (isset($_FILES["JobExperienceLetter"]) && $_FILES["JobExperienceLetter"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["JobExperienceLetter"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["JobExperienceLetter"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $JobExperienceLetter=basename($_FILES["JobExperienceLetter"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $JobExperienceLetter=$_REQUEST['JobExperienceLetter'];
            }
            /************************Job Experience Letter************************/

            /************************Employment Letter************************/
            if (isset($_FILES["EmploymentLetter"]) && $_FILES["EmploymentLetter"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["EmploymentLetter"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["EmploymentLetter"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $EmploymentLetter=basename($_FILES["EmploymentLetter"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $EmploymentLetter=$_REQUEST['EmploymentLetter'];
            }
            /************************Employment Letter************************/

            /************************IELTS / PTE Certificate************************/
            if (isset($_FILES["IeltsPteCertificate"]) && $_FILES["IeltsPteCertificate"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["IeltsPteCertificate"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["IeltsPteCertificate"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $IeltsPteCertificate=basename($_FILES["IeltsPteCertificate"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $IeltsPteCertificate=$_REQUEST['IeltsPteCertificate'];
            }
            /************************IELTS / PTE Certificate************************/

            /************************Masters Certificate************************/
            if (isset($_FILES["MastersCertificate"]) && $_FILES["MastersCertificate"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["MastersCertificate"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["MastersCertificate"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $MastersCertificate=basename($_FILES["MastersCertificate"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $MastersCertificate=$_REQUEST['MastersCertificate'];
            }
            /************************Masters Certificate************************/

            /************************Masters Mark Sheet************************/
            if (isset($_FILES["MastersMarkSheet"]) && $_FILES["MastersMarkSheet"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["MastersMarkSheet"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["MastersMarkSheet"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $MastersMarkSheet=basename($_FILES["MastersMarkSheet"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $MastersMarkSheet=$_REQUEST['MastersMarkSheet'];
            }
            /************************Masters Mark Sheet************************/

            /************************Graduate Certificate************************/
            if (isset($_FILES["GraduateCertificate"]) && $_FILES["GraduateCertificate"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["GraduateCertificate"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["GraduateCertificate"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $GraduateCertificate=basename($_FILES["GraduateCertificate"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $GraduateCertificate=$_REQUEST['GraduateCertificate'];
            }
            /************************Graduate Certificate************************/

            /************************Graduate Mark Sheet************************/
            if (isset($_FILES["GraduateMarkSheet"]) && $_FILES["GraduateMarkSheet"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["GraduateMarkSheet"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["GraduateMarkSheet"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $GraduateMarkSheet=basename($_FILES["GraduateMarkSheet"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $GraduateMarkSheet=$_REQUEST['GraduateMarkSheet'];
            }
            /************************Graduate Mark Sheet************************/

            /************************Diploma Certificate************************/
            if (isset($_FILES["DiplomaCertificate"]) && $_FILES["DiplomaCertificate"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["DiplomaCertificate"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["DiplomaCertificate"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $DiplomaCertificate=basename($_FILES["DiplomaCertificate"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $DiplomaCertificate=$_REQUEST['DiplomaCertificate'];
            }
            /************************Diploma Certificate************************/

            /************************Diploma Mark Sheet************************/
            if (isset($_FILES["DiplomaMarkSheet"]) && $_FILES["DiplomaMarkSheet"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["DiplomaMarkSheet"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["DiplomaMarkSheet"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $DiplomaMarkSheet=basename($_FILES["DiplomaMarkSheet"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $DiplomaMarkSheet=$_REQUEST['DiplomaMarkSheet'];
            }
            /************************Diploma Mark Sheet************************/

            /************************Skilled Certificate************************/
            if (isset($_FILES["SkilledCertificate"]) && $_FILES["SkilledCertificate"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["SkilledCertificate"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["SkilledCertificate"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $SkilledCertificate=basename($_FILES["SkilledCertificate"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $SkilledCertificate=$_REQUEST['SkilledCertificate'];
            }
            /************************Skilled Certificate************************/

            /************************H.S.C Certificate************************/
            if (isset($_FILES["HscCertificate"]) && $_FILES["HscCertificate"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["HscCertificate"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["HscCertificate"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $HscCertificate=basename($_FILES["HscCertificate"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $HscCertificate=$_REQUEST['HscCertificate'];
            }
            /************************H.S.C Certificate************************/

            /************************H.S.C Mark Sheet************************/
            if (isset($_FILES["HscMarkSheet"]) && $_FILES["HscMarkSheet"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["HscMarkSheet"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["HscMarkSheet"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $HscMarkSheet=basename($_FILES["HscMarkSheet"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $HscMarkSheet=$_REQUEST['HscMarkSheet'];
            }
            /************************H.S.C Mark Sheet************************/

            /************************S.S.C Certificate************************/
            if (isset($_FILES["SscCertificate"]) && $_FILES["SscCertificate"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["SscCertificate"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["SscCertificate"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $SscCertificate=basename($_FILES["SscCertificate"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $SscCertificate=$_REQUEST['SscCertificate'];
            }
            /************************S.S.C Certificate************************/

            /************************S.S.C Mark Sheet************************/
            if (isset($_FILES["SscMarkSheet"]) && $_FILES["SscMarkSheet"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["SscMarkSheet"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["SscMarkSheet"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $SscMarkSheet=basename($_FILES["SscMarkSheet"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $SscMarkSheet=$_REQUEST['SscMarkSheet'];
            }
            /************************S.S.C Mark Sheet************************/

            /************************Passport Copy************************/
            if (isset($_FILES["PassportCopy"]) && $_FILES["PassportCopy"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["PassportCopy"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["PassportCopy"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $PassportCopy=basename($_FILES["PassportCopy"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $PassportCopy=$_REQUEST['PassportCopy'];
            }
            /************************Passport Copy************************/

            /************************Birth Certificate************************/
            if (isset($_FILES["BirthCertificate"]) && $_FILES["BirthCertificate"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["BirthCertificate"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["BirthCertificate"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $BirthCertificate=basename($_FILES["BirthCertificate"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $BirthCertificate=$_REQUEST['BirthCertificate'];
            }
            /************************Birth Certificate************************/

            /************************Police Clearance Certificate (Overseas)************************/
            if (isset($_FILES["PoliceClearanceCertificateOverseas"]) && $_FILES["PoliceClearanceCertificateOverseas"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["PoliceClearanceCertificateOverseas"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["PoliceClearanceCertificateOverseas"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $PoliceClearanceCertificateOverseas=basename($_FILES["PoliceClearanceCertificateOverseas"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $PoliceClearanceCertificateOverseas=$_REQUEST['PoliceClearanceCertificateOverseas'];
            }
            /************************Police Clearance Certificate (Overseas)************************/

            /************************Police Clearance Certificate (BD)************************/
            if (isset($_FILES["PoliceClearanceCertificateBd"]) && $_FILES["PoliceClearanceCertificateBd"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["PoliceClearanceCertificateBd"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["PoliceClearanceCertificateBd"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $PoliceClearanceCertificateBd=basename($_FILES["PoliceClearanceCertificateBd"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $PoliceClearanceCertificateBd=$_REQUEST['PoliceClearanceCertificateBd'];
            }
            /************************Police Clearance Certificate (BD)************************/

            /************************Covid Certificate (Overseas)************************/
            if (isset($_FILES["CovidCertificateOverseas"]) && $_FILES["CovidCertificateOverseas"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["CovidCertificateOverseas"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["CovidCertificateOverseas"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $CovidCertificateOverseas=basename($_FILES["CovidCertificateOverseas"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $CovidCertificateOverseas=$_REQUEST['CovidCertificateOverseas'];
            }
            /************************Covid Certificate (Overseas)************************/

            /************************Covid Certificate (BD)************************/
            if (isset($_FILES["CovidCertificateBd"]) && $_FILES["CovidCertificateBd"]["error"] == 0)
            {
                $targetDir = "others/upload/student_visa_attachment/";
                $targetFile = $targetDir . basename($_FILES["CovidCertificateBd"]["name"]);
                $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
                // Allow certain file formats
                $allowedTypes = array("jpg", "jpeg", "png", "gif", "pdf", "doc", "docx");
                if (in_array($fileType, $allowedTypes))
                {
                    // Attempt to move uploaded file to designated directory
                    if (move_uploaded_file($_FILES["CovidCertificateBd"]["tmp_name"], $targetFile))
                    {
                        // echo "The file " . basename($_FILES["CoverLetter"]["name"]) . " has been uploaded.";
                        $CovidCertificateBd=basename($_FILES["CovidCertificateBd"]["name"]);
                    }
                    else
                    {
                        $this->session->set_flashdata('message', "<div class=\"alert alert-warning alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><path d=\"M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z\"></path><line x1=\"12\" y1=\"9\" x2=\"12\" y2=\"13\"></line><line x1=\"12\" y1=\"17\" x2=\"12.01\" y2=\"17\"></line></svg><strong>Sorry,</strong>there was an error uploading your file.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
                        redirect(base_url().'user/attachment_document');
                    }
                }
            }
            else
            {
                $CovidCertificateBd=$_REQUEST['CovidCertificateBd'];
            }
            /************************Covid Certificate (BD)************************/

          //  $CoverLetter,$Cv,$JobExperienceLetter,$EmploymentLetter,$IeltsPteCertificate,$MastersCertificate,$MastersMarkSheet,$GraduateCertificate,$GraduateMarkSheet,$DiplomaCertificate,$DiplomaMarkSheet,$SkilledCertificate,$HscCertificate,$HscMarkSheet,$SscCertificate,$SscMarkSheet,$PassportCopy,$BirthCertificate,$PoliceClearanceCertificateOverseas,$PoliceClearanceCertificateBd,$CovidCertificateOverseas,$CovidCertificateBd,$StudentVisaAttachmentId,$user_id
            $this->User_model->user_attachment_update($CoverLetter,$Cv,$JobExperienceLetter,$EmploymentLetter,$IeltsPteCertificate,$MastersCertificate,$MastersMarkSheet,$GraduateCertificate,$GraduateMarkSheet,$DiplomaCertificate,$DiplomaMarkSheet,$SkilledCertificate,$HscCertificate,$HscMarkSheet,$SscCertificate,$SscMarkSheet,$PassportCopy,$BirthCertificate,$PoliceClearanceCertificateOverseas,$PoliceClearanceCertificateBd,$CovidCertificateOverseas,$CovidCertificateBd,$StudentVisaAttachmentId,$user_id);

            $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible fade show\"><svg viewBox=\"0 0 24 24\" width=\"24\" height=\"24\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"me-2\"><polyline points=\"9 11 12 14 22 4\"></polyline><path d=\"M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11\"></path></svg><strong>Success,</strong> Attachment has been update.<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"btn-close\"><span><i class=\"fa-solid fa-xmark\"></i></span></button></div>");
            redirect(base_url().'user/attachment_document');
        }
        else
        {
            //If no session, redirect to login page
            redirect('user_panel', 'refresh');
        }
    }

}

