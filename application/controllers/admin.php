<?php
/**
 * Created by PhpStorm.
 * User: KAmonashish Fouzder
 * Date: 1/3/2017
 * Time: 9:00 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
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
            $this->load->Model('Admin_model');
            $this->data['TotalRetailer']=$this->Admin_model->total_retailer();
            $this->data['TotalWholesaler']=$this->Admin_model->total_wholesaler();
            $this->data['TotalWholesalerProduct']=$this->Admin_model->total_wholesaler_product();
            $this->data['TotalCustomers']=$this->Admin_model->total_customers();
            $this->load->view('admin/v_home',$this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function retailer()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['Retailer']=$this->Admin_model->retailer();
            $this->load->view('admin/v_retailer', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function new_retailer()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['RetailerCategory']=$this->Admin_model->retailer_category();
            $this->data['Location']=$this->Admin_model->location();
            $this->load->view('admin/v_new_retailer', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function retailer_edit($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['RetailerCategory']=$this->Admin_model->retailer_category();
            $this->data['Location']=$this->Admin_model->location();
            $this->load->view('admin/v_retailer_edit', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }


    public function business_categories()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['RetailerCategory']=$this->Admin_model->retailer_category();
            $this->load->view('admin/v_business_categories', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function add_category()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['RetailerCategory']=$this->Admin_model->retailer_category();
            $this->load->view('admin/v_add_category', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function location()
    {

        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['Location']=$this->Admin_model->location();
            $this->load->view('admin/v_location', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function add_location()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['Location']=$this->Admin_model->location();
            $this->load->view('admin/v_add_location', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function product_category()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ProductCategory']=$this->Admin_model->product_category();
            $this->load->view('admin/v_product_category', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function add_product_category()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ProductCategory']=$this->Admin_model->product_category();
            $this->load->view('admin/v_add_product_category', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function sub_category()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ProductCategory']=$this->Admin_model->product_category();
            $this->data['ProductSubCategory']=$this->Admin_model->product_sub_category();
            $this->load->view('admin/v_sub_category', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function add_sub_category()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ProductCategory']=$this->Admin_model->product_category();
            $this->data['ProductSubCategory']=$this->Admin_model->product_sub_category();
            $this->load->view('admin/v_add_sub_category', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function retailer_banner()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['Banner']=$this->Admin_model->retailer_banner();
            $this->load->view('admin/v_retailer_banner', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function wholesaler()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['Wholesaler']=$this->Admin_model->wholesaler();
            $this->load->view('admin/v_wholesaler', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function new_wholesaler()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['RetailerCategory']=$this->Admin_model->retailer_category();
            $this->data['Location']=$this->Admin_model->location();
            $this->load->view('admin/v_new_wholesaler', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function wholesaler_banner()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['Banner']=$this->Admin_model->wholesaler_banner();
            $this->load->view('admin/v_wholesaler_banner', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function wholesaler_product()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['ProductCategory']=$this->Admin_model->product_category();
            $this->data['ProductSubCategory']=$this->Admin_model->product_sub_category();
            $this->data['Wholesaler']=$this->Admin_model->wholesaler();
            $this->data['WholesalerProduct']=$this->Admin_model->wholesaler_product();
            $this->load->view('admin/v_wholesaler_product', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function wholesaler_product_upload()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['RetailerCategory']=$this->Admin_model->retailer_category();
            $this->data['Location']=$this->Admin_model->location();
            $this->data['Wholesaler']=$this->Admin_model->wholesaler();
            $this->data['ProductCategory']=$this->Admin_model->product_category();
            $this->load->view('admin/v_wholesaler_product_upload', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function wholesaler_product_edit($id)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->load->Model('Admin_model');
            $this->data['RetailerCategory']=$this->Admin_model->retailer_category();
            $this->data['Location']=$this->Admin_model->location();
            $this->data['Wholesaler']=$this->Admin_model->wholesaler();
            $this->data['ProductCategory']=$this->Admin_model->product_category();

            echo "<pre>";
            print_r( $this->Admin_model->wholesaler_product_edit($id));
            exit();

            $this->load->view('admin/v_wholesaler_product_edit', $this->data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    public function sub_category_find()
    {
        $CategoryId=$_REQUEST['q'];
        $this->load->Model('Admin_model');

        foreach($this->Admin_model->sub_category_find($CategoryId) as $SubCategoryData)
        {
            $sub_category_id=$SubCategoryData['id'];
            $sucategory=$SubCategoryData['sucategory'];

            echo "<option value=\"$sub_category_id\">$sucategory</option>";
        }

    }



    /***********PRODUCT MODULE START**************/
    public function admin_products($MenuValue)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="product_list";
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['SelectSisterConcern']=$this->Admin_model->select_sister_concern($CompanyAdminId);
            $this->data['SelectProductCat']=$this->Admin_model->select_product_category($CompanyAdminId,$user_basic_id);
            $this->data['AllProduct']=$this->Admin_model->all_product($CompanyAdminId,$user_basic_id);
            $this->data['MenuValue']=$MenuValue;
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/products_list');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function branch_search()
    {
        if($this->session->userdata('logged_in'))
        {
            $SisterConcernId=$this->input->get('q');
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $user_basic_id = $session_data['id'];

            if($this->Admin_model->select_branch($SisterConcernId,$CompanyAdminId)==true)
            {
                echo "<select class=\"form-control\" name=\"BranchId\" id=\"sel1\" required>";
                foreach($this->Admin_model->select_branch($SisterConcernId,$CompanyAdminId) as $BranchData)
                {
                    $branch_id=$BranchData['id'];
                    $branch_name=$BranchData['branch_name'];

                   echo "<option value=\"$branch_id\">$branch_name</option>";
                }
                echo " </select>";
            }
            else
            {
                echo "<b>Not found any branch select another sister concern</b>";
            }
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }
    public function sub_category_search()
    {
        if($this->session->userdata('logged_in'))
        {
            $ProductCatId=$this->input->get('q');
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $user_basic_id = $session_data['id'];
            echo "<select class=\"form-control\" name=\"ProductSubCategoryId\" id=\"sel1\" required>";
            foreach($this->Admin_model->select_product_sub_category($ProductCatId,$CompanyAdminId,$user_basic_id) as $SubCatData)
            {
                $sub_cat_id=$SubCatData['id'];
                $product_sub_cat_name=$SubCatData['product_sub_cat_name'];
                echo
                "<option value=\"$sub_cat_id\">$product_sub_cat_name</option>
                ";
            }
            echo "</select>";

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }
    public function vendor_item_form()
    {
        if($this->session->userdata('logged_in'))
        {
            $VendorId=$this->input->get('q');
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);

             foreach($this->Admin_model->selected_vendor_get($VendorId) as $SelectedVendorData)
             {
                 $vendor_name=$SelectedVendorData['vendor_name'];
                 $vendor_code=$SelectedVendorData['vendor_code'];
                 $contact_person=$SelectedVendorData['contact_person'];
                 $contact_no=$SelectedVendorData['contact_no'];
             }
            echo
            '
                <table border="0" class="product_size_continer2" align="center">
                      <thead>
                          <tr>
                              <th><div id="bill_no_label">vendor-code</div></th>
                              <th><div id="bill_no_label">contact-person</div></th>
                              <th><div id="bill_date_label">contact-no</div></th>
                          </tr>
                      </thead>
                      <tbody>
                            <tr align="center">
                               <td>
                                  <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="vendor_code"  id="vendor_code" value="'.$vendor_code.'" type="text" readonly>
                               </td>
                               <td>
                                   <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="vendor_contact_person"  id="contact_person"  value="'.$contact_person.'" type="text"  readonly>
                               </td>
                               <td>
                                  <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="vendor_contact_no"  id="contact_no" value="'.$contact_no.'" type="text" readonly>
                               </td>
                            </tr>
                      </tbody>
                       <input type="hidden" name="vendor_name"  value="'.$vendor_name.'">
                </table>


                <table border="0" class="product_pay_continer" align="center">
                      <thead>
                          <tr>
                              <th><div id="bill_no_label3">payable-amount</div></th>
                              <th><div id="bill_no_label3">paid-amount</div></th>
                              <th><div id="bill_date_label3">due-amount</div></th>
                          </tr>
                      </thead>
                      <tbody>
                            <tr align="center">
                               <td>
                                  <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="payable_amount"  id="payable_amount" value="0" onkeyup="vendor_pay_cal(this.value)"  type="text" required>
                               </td>
                               <td>
                                   <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="paid_amount"  id="paid_amount"  value="0" onkeyup="vendor_pay_cal(this.value)" type="text"  required>
                               </td>
                               <td>
                                  <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="due_amount"  id="due_amount" value="0" type="text" readonly>
                               </td>
                            </tr>
                      </tbody>
                </table>

                ';
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function add_product($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;

            $this->data['SelectSisterConcern']=$this->Admin_model->select_sister_concern($CompanyAdminId);
            $this->data['SelectProductCat']=$this->Admin_model->select_product_category($CompanyAdminId,$user_basic_id);

            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="add_product";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/product/add_product');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function product_edit($value,$MenuValue)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;

            $this->data['SelectSisterConcern']=$this->Admin_model->select_sister_concern($CompanyAdminId);
            $this->data['SelectProductCat']=$this->Admin_model->select_product_category($CompanyAdminId,$user_basic_id);
            $this->data['EditProduct']=$this->Admin_model->edit_product($CompanyAdminId,$user_basic_id,$value);
            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="add_product";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/product/edit_product');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function search_product($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;
            $this->data['AllProduct']=$this->Admin_model->all_product($CompanyAdminId,$user_basic_id);

            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="search_product";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/product/search_product');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function bar_code_management($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;
            $this->data['AllProductBarcode']=$this->Admin_model->all_product_barcode($CompanyAdminId,$user_basic_id);

            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="bar_code_management";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/product/bar_code_management');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function barcode_print()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $user_name=$session_data['user_name'];

            $FormData = array(
                'NumberOfPrint' => $this->input->post('NumberOfPrint'),
                'ProductBasicId' => $this->input->post('ProductBasicId'),
                'MenuValue' => $this->input->post('MenuValue'),
                'MenuValueSub' => $this->input->post('MenuValueSub'),
            );

            $NumberOfPrint=$FormData['NumberOfPrint'];
            $ProductBasicId=$FormData['ProductBasicId'];
            $MenuValue=$FormData['MenuValue'];
            $MenuValueSub=$FormData['MenuValueSub'];

            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);

             $BarcodeImageName=$this->Admin_model->get_barcode($ProductBasicId);

            if(81<=$NumberOfPrint)
            {
                $this->session->set_flashdata('message', "<div class='uk-alert uk-alert-danger' data-uk-alert=''><a class='uk-alert-close uk-close' href=''></a>maximum barcode print limitations 80</div>");
                redirect(base_url().'admin/bar_code_management/'.$MenuValue."/".$menu_sub_name=$MenuValueSub);
            }
            else
            {
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

                $barcodeHeader='
                 <h3 align="center">'.$NumberOfPrint.'&nbsp;COPY BARCODE PRINT</h3><hr>';
                $pdf->writeHTML($barcodeHeader, true, false, true, false, '');

                $barcodePart=array();
                for($i=1; $i<=$NumberOfPrint; $i++)
                {

                    $barcodePart[]='<td><img src="'.$path.'others/upload/barcode/'.$BarcodeImageName.'" border="0" height="80" width="137" align="top" /></td>';

                }

                $html = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[0].'</td>
                <td>'.$barcodePart[1].'</td>
                <td>'.$barcodePart[2].'</td>
                <td>'.$barcodePart[3].'</td>
                <td>'.$barcodePart[4].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html, true, false, true, false, '');

                $html2 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[5].'</td>
                <td>'.$barcodePart[6].'</td>
                <td>'.$barcodePart[7].'</td>
                <td>'.$barcodePart[8].'</td>
                <td>'.$barcodePart[9].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html2, true, false, true, false, '');

                $html3 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[10].'</td>
                <td>'.$barcodePart[11].'</td>
                <td>'.$barcodePart[12].'</td>
                <td>'.$barcodePart[13].'</td>
                <td>'.$barcodePart[14].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html3, true, false, true, false, '');

                $html4 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[15].'</td>
                <td>'.$barcodePart[16].'</td>
                <td>'.$barcodePart[17].'</td>
                <td>'.$barcodePart[18].'</td>
                <td>'.$barcodePart[19].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html4, true, false, true, false, '');

                $html5 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[20].'</td>
                <td>'.$barcodePart[21].'</td>
                <td>'.$barcodePart[22].'</td>
                <td>'.$barcodePart[23].'</td>
                <td>'.$barcodePart[24].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html5, true, false, true, false, '');

                $html6 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[25].'</td>
                <td>'.$barcodePart[26].'</td>
                <td>'.$barcodePart[27].'</td>
                <td>'.$barcodePart[28].'</td>
                <td>'.$barcodePart[29].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html6, true, false, true, false, '');

                $html7 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[30].'</td>
                <td>'.$barcodePart[31].'</td>
                <td>'.$barcodePart[32].'</td>
                <td>'.$barcodePart[33].'</td>
                <td>'.$barcodePart[34].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html7, true, false, true, false, '');

                $html8 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[35].'</td>
                <td>'.$barcodePart[36].'</td>
                <td>'.$barcodePart[37].'</td>
                <td>'.$barcodePart[38].'</td>
                <td>'.$barcodePart[39].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html8, true, false, true, false, '');

                $html9 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[40].'</td>
                <td>'.$barcodePart[41].'</td>
                <td>'.$barcodePart[42].'</td>
                <td>'.$barcodePart[43].'</td>
                <td>'.$barcodePart[44].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html9, true, false, true, false, '');

                $html10 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[45].'</td>
                <td>'.$barcodePart[46].'</td>
                <td>'.$barcodePart[47].'</td>
                <td>'.$barcodePart[48].'</td>
                <td>'.$barcodePart[49].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html10, true, false, true, false, '');

                $html11 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[50].'</td>
                <td>'.$barcodePart[51].'</td>
                <td>'.$barcodePart[52].'</td>
                <td>'.$barcodePart[53].'</td>
                <td>'.$barcodePart[54].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html11, true, false, true, false, '');

                $html12 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[55].'</td>
                <td>'.$barcodePart[56].'</td>
                <td>'.$barcodePart[57].'</td>
                <td>'.$barcodePart[58].'</td>
                <td>'.$barcodePart[59].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html12, true, false, true, false, '');

                $html13 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[60].'</td>
                <td>'.$barcodePart[61].'</td>
                <td>'.$barcodePart[62].'</td>
                <td>'.$barcodePart[63].'</td>
                <td>'.$barcodePart[64].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html13, true, false, true, false, '');

                $html14 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[65].'</td>
                <td>'.$barcodePart[66].'</td>
                <td>'.$barcodePart[67].'</td>
                <td>'.$barcodePart[68].'</td>
                <td>'.$barcodePart[69].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html14, true, false, true, false, '');

                $html15 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[70].'</td>
                <td>'.$barcodePart[71].'</td>
                <td>'.$barcodePart[72].'</td>
                <td>'.$barcodePart[73].'</td>
                <td>'.$barcodePart[74].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html15, true, false, true, false, '');

                $html16 = '<table cellpadding="1" cellspacing="1" border="0" style="text-align:center;">
                <tr style="text-align:center;">
                <td>'.$barcodePart[75].'</td>
                <td>'.$barcodePart[76].'</td>
                <td>'.$barcodePart[77].'</td>
                <td>'.$barcodePart[78].'</td>
                <td>'.$barcodePart[79].'</td>
                </tr>
                </table>';
                $pdf->writeHTML($html16, true, false, true, false, '');

                $pdf->Output('barcode.pdf', 'I');
            }

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function purchase_products_list($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;
            $this->data['AllPurchaseBill']=$this->Admin_model->all_purchase_bill($CompanyAdminId,$user_basic_id);
            $this->data['PurchaseProductBasic']=$this->Admin_model->purchase_product_basic();
            //$this->data['AllVendor']=$this->Admin_model->all_vendor_get($CompanyAdminId);

            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="purchase_bill";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/purchase/purchase_bill_list');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function purchase_products($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;
           // $this->data['AllPurchaseBill']=$this->Admin_model->all_purchase_bill($CompanyAdminId,$user_basic_id);

            $this->data['SelectSisterConcern']=$this->Admin_model->select_sister_concern($CompanyAdminId);
            $this->data['SelectProductCode']=$this->Admin_model->select_product_basic($CompanyAdminId,$user_basic_id);
            $this->data['SelectVendor']=$this->Admin_model->select_vendor_data($CompanyAdminId,$user_basic_id);

            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="purchase_bill";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/purchase/purchase_new_product');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function vat_management($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;
            $this->data['AllProduct']=$this->Admin_model->all_product($CompanyAdminId,$user_basic_id);

            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="product_list";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/product/vat_management');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function opening_stock($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;
            $this->data['OpeningStockProduct']=$this->Admin_model->all_product_opening_stock($CompanyAdminId,$user_basic_id);

            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="product_list";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/product/opening_stock');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function purchase_product_exchange($value,$MenuValue,$MenuValueSub)
    {
        if($this->session->userdata('logged_in'))
        {
            $menu_sub_name=$MenuValueSub;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;
            // $this->data['AllPurchaseBill']=$this->Admin_model->all_purchase_bill($CompanyAdminId,$user_basic_id);

            $this->data['SelectSisterConcern']=$this->Admin_model->select_sister_concern($CompanyAdminId);
            $this->data['SelectProductCode']=$this->Admin_model->select_product_basic($CompanyAdminId,$user_basic_id);
            $this->data['SelectVendor']=$this->Admin_model->select_vendor_data($CompanyAdminId,$user_basic_id);
            $this->data['ReturnPurchaseBasic']=$this->Admin_model->return_purchase_basic_get($CompanyAdminId,$value);
            $this->data['ReturnProductPurchaseBasic']=$this->Admin_model->return_purchase_product_basic($value);
            $this->data['ReturnProductPurchaseInvoice']=$this->Admin_model->return_purchase_purchase_invoice($value);

            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="purchase_bill";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            //$this->load->view('admin/purchase/purchase_new_product');
            $this->load->view('admin/purchase/purchase_product_exchange');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function purchase_product_edit($value,$MenuValue,$MenuValueSub)
    {
        if($this->session->userdata('logged_in'))
        {
            $menu_sub_name=$MenuValueSub;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;
            // $this->data['AllPurchaseBill']=$this->Admin_model->all_purchase_bill($CompanyAdminId,$user_basic_id);

            $this->data['SelectSisterConcern']=$this->Admin_model->select_sister_concern($CompanyAdminId);
            $this->data['SelectProductCode']=$this->Admin_model->select_product_basic($CompanyAdminId,$user_basic_id);
            $this->data['SelectVendor']=$this->Admin_model->select_vendor_data($CompanyAdminId,$user_basic_id);
            $this->data['ReturnPurchaseBasic']=$this->Admin_model->return_purchase_basic_get($CompanyAdminId,$value);
            $this->data['ReturnProductPurchaseBasic']=$this->Admin_model->return_purchase_product_basic($value);
            $this->data['EditProductPurchaseBasicCount']=count($this->Admin_model->return_purchase_product_basic($value));
            $this->data['ReturnProductPurchaseInvoice']=$this->Admin_model->return_purchase_purchase_invoice($value);

            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="purchase_bill";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/purchase/purchase_product_edit');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function purchase_product_details($value,$MenuValue,$MenuValueSub)
    {
        if($this->session->userdata('logged_in'))
        {
            $menu_sub_name=$MenuValueSub;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;
            // $this->data['AllPurchaseBill']=$this->Admin_model->all_purchase_bill($CompanyAdminId,$user_basic_id);

            $this->data['SelectSisterConcern']=$this->Admin_model->select_sister_concern($CompanyAdminId);
            $this->data['SelectProductCode']=$this->Admin_model->select_product_basic($CompanyAdminId,$user_basic_id);
            $this->data['SelectVendor']=$this->Admin_model->select_vendor_data($CompanyAdminId,$user_basic_id);
            $this->data['ReturnPurchaseBasic']=$this->Admin_model->return_purchase_basic_get($CompanyAdminId,$value);
            $this->data['DetailsProductPurchaseBasic']=$this->Admin_model->purchase_product_basic_details($value);
            $this->data['ReturnProductPurchaseInvoice']=$this->Admin_model->return_purchase_purchase_invoice($value);

            $this->data['MenuActive']="product";
            $this->data['MenuSubActive']="purchase_bill";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/purchase/purchase_product_details');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    /***********PRODUCT MODULE END**************/


    /***********VENDOR MODULE START**************/
    public function admin_vendor($MenuCatName)
    {
        if($this->session->userdata('logged_in'))
        {
            $MenuValue=$MenuCatName;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="vendor";
            $this->data['SubMenuActive']="add_vendor";
            $this->data['MenuValue']=$MenuValue;
            $this->data['AllVendor']=$this->Admin_model->all_vendor($CompanyAdminId,$user_basic_id);
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/vendor');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function search_vendor($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;

            $this->data['AllVendor']=$this->Admin_model->all_vendor($CompanyAdminId,$user_basic_id);

            $this->data['MenuActive']="vendor";
            $this->data['SubMenuActive']="search_vendor";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/vendor/search_vendor');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function vendor_edit($value,$MenuValue)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="vendor";
            $this->data['SubMenuActive']="add_vendor";
            $this->data['MenuValue']=$MenuValue;
            $this->data['EditVendor']=$this->Admin_model->edit_vendor($CompanyAdminId,$user_basic_id,$value);
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/vendor/vendor_edit');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    /***********VENDOR MODULE END**************/

    /***********COUSTOMER MODULE START**************/
    public function admin_customer($MenuCatName)
    {
        if($this->session->userdata('logged_in'))
        {
            $MenuValue=$MenuCatName;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="customer";
            $this->data['SubMenuActive']="admin_customer";
            $this->data['MenuValue']=$MenuValue;
            $this->data['AllCoustomer']=$this->Admin_model->all_coustomer($CompanyAdminId,$user_basic_id);

            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/customer');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function search_customer($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;
            $this->data['AllCoustomer']=$this->Admin_model->all_coustomer($CompanyAdminId,$user_basic_id);

            $this->data['MenuActive']="customer";
            $this->data['SubMenuActive']="search_customer";
            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/customer/search_customer');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function coustomer_edit($value,$MenuValue)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="customer";
            $this->data['SubMenuActive']="admin_customer";
            $this->data['MenuValue']=$MenuValue;
            $this->data['EditCoustomer']=$this->Admin_model->edit_coustomer($CompanyAdminId,$user_basic_id,$value);

            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/customer/customer_edit');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    /***********COUSTOMER MODULE END**************/

    /***********PURCHASE MODULE START**************/
    public function admin_purchase($MenuCatName)
    {
        if($this->session->userdata('logged_in'))
        {
            $MenuValue=$MenuCatName;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="purchase";
            $this->data['MenuValue']=$MenuValue;
            $this->data['SelectVandorData']=$this->Admin_model->select_vendor_data($CompanyAdminId,$user_basic_id);
            $this->data['SelectProductBasic']=$this->Admin_model->select_product_data($CompanyAdminId,$user_basic_id);
            $this->data['SelectBranch']=$this->Admin_model->select_branch_data($CompanyAdminId);
            $this->data['BillNoAuto']=date('Ymd'.'His', strtotime('-0 day'));
            $this->data['CurrentBillDate']=date('Y-m-d', strtotime('-0 day'));

            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/purchase');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function vendor_search()
    {
        if($this->session->userdata('logged_in'))
        {
            $VendorName=$this->input->get('q');
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);

            foreach($this->Admin_model->select_vendor_data_ajex($user_basic_id,$CompanyAdminId,$VendorName) as $VendorData)
            {
                $vendor_id=$VendorData['id'];
                $vendor_name=$VendorData['vendor_name'];
                $vendor_code=$VendorData['vendor_code'];
                $contact_person=$VendorData['contact_person'];
                $contact_no=$VendorData['contact_no'];
                $address=$VendorData['address'];
            }
            echo
            '
            <table class="uk-table uk-table-striped">
                  <thead>
                       <tr>
                            <th>VENDOR CODE</th>
                            <th>VENDOR NAME</th>
                            <th>ADDRESS</th>
                            <th>CONTACT PERSON</th>
                            <th>CONTACT NO</th>
                       </tr>
                  </thead>
                       <tbody>
                       <tr>
                           <td>'.$vendor_code.'</td>
                           <td>'.$vendor_name.'</td>
                           <td>'.$address.'</td>
                           <td>'.$contact_person.'</td>
                           <td>'.$contact_no.'</td>
                       </tr>
                  </tbody>
             </table>
             <input type="hidden" name="VendorID"  value="'.$vendor_id.'">
            ';
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function product_search()
    {
        if($this->session->userdata('logged_in'))
        {
            $ProductCode=$this->input->get('q');
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);


            if($ProductCode=="all")
            {
                echo
                '
                <table class="uk-table uk-table-striped" align="center" border="0">
                  <thead>
                       <tr>
                            <th>PRODUCT CODE</th>
                            <th>NAME+SIZE</th>
                            <th>CASE SIZE</th>
                            <th>COST PRICE</th>
                            <th>PACKS</th>
                            <th>PCS</th>
                            <th>QNT</th>
                            <th>ADD-NEW-QNT</th>
                       </tr>
                  </thead>
                       <tbody>
                ';
                $total_pack=0;
                $total_pics=0;
                $total_quantity=0;
                $total_net_bill=0;
                foreach($this->Admin_model->select_product_all_data_ajex($user_basic_id,$CompanyAdminId) as $ProductAllData)
                {
                    $product_basic_id=$ProductAllData['id'];
                    $product_name=$ProductAllData['product_name'];
                    $product_code=$ProductAllData['product_code'];
                    $product_size=$ProductAllData['product_size'];
                    $product_case_size=$ProductAllData['product_case_size'];
                    $mrp=$ProductAllData['mrp'];
                    $cost_price=$ProductAllData['cost_price'];
                    $billing_price=$ProductAllData['billing_price'];
                    $pack_no=$ProductAllData['pack_no'];
                    $pics_no=$ProductAllData['pics_no'];
                    $quantity=$ProductAllData['quantity'];
                    $product_name_size=$product_name."+".$product_size;
                    $total_pack +=$pack_no;
                    $total_pics +=$pics_no;
                    $total_quantity +=$quantity;
                    $total_net_bill +=$cost_price;

                    echo
                        '
                       <tr>
                           <td>'.$product_code.'</td>
                           <td>'.$product_name_size.'</td>
                            <td>
                               <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="case_size[]"  id="case_size'.$product_basic_id.'" onkeyup="total_quentity('.$product_basic_id.')" value="'.$product_case_size.'"  type="text" readonly>
                               </div>
                           </td>
                           <td>
                               <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="cost_price_value[]"  id="cost_price_value" value="'.$cost_price.'"  type="text" readonly>
                               </div>
                           </td>
                           <td>
                                <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="packes_value[]"  name="packes_value"  id="packes_value'.$product_basic_id.'" onkeyup="total_packs('.$product_basic_id.')"  value="'.$pack_no.'"  type="text" required>
                                </div>
                           </td>
                           <td>
                               <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="pics_value[]"  id="pics_value'.$product_basic_id.'" value="'.$pics_no.'"  type="text" required>
                                </div>
                           </td>
                            <td>
                               <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="qnt_value[]"  id="qnt_value'.$product_basic_id.'" onkeyup="total_quentity('.$product_basic_id.')" value="'.$quantity.'"  type="text" required>
                                </div>
                           </td>
                            <td>
                               <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="new_qnt_value[]"  id="new_qnt_value'.$product_basic_id.'" onkeyup="total_quentity('.$product_basic_id.')" value="0"  type="text" required>
                                </div>
                           </td>
                       </tr>
                        <input type="hidden" name="ProductBasicId[]"  value="'.$product_basic_id.'">
                ';
                }

                echo
                '
                </tbody>
             </table>
               ';

                echo
                '
                          <div class="bill_total_wrapper">
                  <table border="0" width="100%" align="center">
                       <tbody>
                          <tr align="center">
                                        <td><div class="td_blank_value"></div></td>
                                        <td><div class="td_blank_value"></div></td>
                                        <td><div class="td_blank_value"></div></td>
                                        <td><div class="td_total_txt">Total:</div></td>
                                         <td>
                                            <input class="form-control" style="text-align: center;height: 32px;width: 90px;font-weight: bold;color: #FFF;background-color: #808080;"  name="total_packs_value" id="total_packs_value'.$product_basic_id.'" onkeyup="total_packs('.$product_basic_id.')" value="'.$total_pack.'"  type="text" readonly>
                                        </td>
                                        <td>
                                            <input class="form-control" style="text-align: center;height: 32px;width: 90px;font-weight: bold;color: #FFF;background-color: #808080;"  name="total_pcs_value"  id="total_pcs_value" value="'.$total_pics.'"  type="text" readonly>
                                        </td>
                                        <td>
                                            <input class="form-control" style="text-align: center;height: 32px;width: 90px;font-weight: bold;color: #FFF;background-color: #808080;"  name="total_qnt_value"  id="total_qnt_value" value="'.$total_quantity.'"  type="text" readonly>
                                        </td>
                                        <td><div class="td_blank_value"></div></td>
                          </tr>
                       </tbody>
                  </table>
             </div>
             <input type="hidden" name="total_netbill" id="total_netbill" onkeyup="total_net_bill(this.value)" value="'.$total_net_bill.'">
            ';
            }
            else
            {

                $total_pack=0;
                $total_pics=0;
                $total_quantity=0;
                $total_net_bill=0;
                foreach($this->Admin_model->select_product_data_ajex($user_basic_id,$CompanyAdminId,$ProductCode) as $ProductData)
                {
                    $product_basic_id=$ProductData['id'];
                    $product_name=$ProductData['product_name'];
                    $product_code=$ProductData['product_code'];
                    $product_size=$ProductData['product_size'];
                    $product_case_size=$ProductData['product_case_size'];
                    $mrp=$ProductData['mrp'];
                    $cost_price=$ProductData['cost_price'];
                    $billing_price=$ProductData['billing_price'];
                    $pack_no=$ProductData['pack_no'];
                    $pics_no=$ProductData['pics_no'];
                    $quantity=$ProductData['quantity'];
                    $product_name_size=$product_name."+".$product_size;
                    $total_pack +=$pack_no;
                    $total_pics +=$pics_no;
                    $total_quantity +=$quantity;
                    $total_net_bill +=$cost_price;
                }

                echo
                    '
                <table class="uk-table uk-table-striped" align="center">
                  <thead>
                       <tr>
                            <th>PRODUCT&nbsp;CODE</th>
                            <th>NAME+SIZE</th>
                            <th>CASE&nbsp;SIZE</th>
                            <th>COST&nbsp;PRICE</th>
                            <th>PACKS</th>
                            <th>PCS</th>
                            <th>QNT</th>
                            <th>ADD-NEW-QNT</th>
                       </tr>
                  </thead>
                       <tbody>
                        <tr>
                           <td>'.$product_code.'</td>
                           <td>'.$product_name_size.'</td>
                            <td>
                               <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="case_size[]"  id="case_size'.$product_basic_id.'" onkeyup="total_quentity('.$product_basic_id.')" value="'.$product_case_size.'"  type="text" readonly>
                               </div>
                           </td>
                           <td>
                               <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="cost_price_value[]"  id="cost_price_value" value="'.$cost_price.'"  type="text" readonly>
                               </div>
                           </td>
                           <td>
                                <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="packes_value[]"  id="packes_value'.$product_basic_id.'" onkeyup="total_packs('.$product_basic_id.')"  value="'.$pack_no.'"  type="text" required>
                                </div>
                           </td>
                           <td>
                               <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="pics_value[]"  id="pics_value'.$product_basic_id.'" value="'.$pics_no.'"  type="text" required>
                                </div>
                           </td>
                            <td>
                               <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="qnt_value[]"  id="qnt_value'.$product_basic_id.'" onkeyup="total_quentity('.$product_basic_id.')" value="'.$quantity.'"  type="text" required>
                                </div>
                           </td>
                            <td>
                               <div class="search_product_fild">
                                    <input class="form-control" style="text-align: center;height: 32px;width: 90px;"  name="new_qnt_value[]"  id="new_qnt_value'.$product_basic_id.'" onkeyup="total_quentity('.$product_basic_id.')" value="0"  type="text" required>
                                </div>
                           </td>
                       </tr>
                       <input type="hidden" name="ProductBasicId[]"  value="'.$product_basic_id.'">
                  </tbody>
             </table>
                ';

                echo
                '
             <div class="bill_total_wrapper">
                  <table border="0" width="100%" align="center">
                       <tbody>
                          <tr align="center">
                                        <td><div class="td_blank_value"></div></td>
                                        <td><div class="td_blank_value"></div></td>
                                        <td><div class="td_blank_value"></div></td>
                                        <td><div class="td_total_txt">Total:</div></td>
                                        <td>
                                            <input class="form-control" style="text-align: center;height: 32px;width: 90px;font-weight: bold;color: #FFF;background-color: #808080;"  name="total_packs_value" id="total_packs_value'.$product_basic_id.'" onkeyup="total_packs('.$product_basic_id.')" value="'.$total_pack.'"  type="text" readonly>
                                        </td>
                                        <td>
                                            <input class="form-control" style="text-align: center;height: 32px;width: 90px;font-weight: bold;color: #FFF;background-color: #808080;"  name="total_pcs_value"  id="total_pcs_value" value="'.$total_pics.'"  type="text" readonly>
                                        </td>
                                        <td>
                                            <input class="form-control" style="text-align: center;height: 32px;width: 90px;font-weight: bold;color: #FFF;background-color: #808080;"  name="total_qnt_value"  id="total_qnt_value" value="'.$total_quantity.'"  type="text" readonly>
                                        </td>
                                        <td><div class="td_blank_value"></div></td>
                          </tr>
                       </tbody>
                  </table>
             </div>
             <input type="hidden" name="total_netbill" id="total_netbill" onkeyup="total_net_bill(this.value)" value="'.$total_net_bill.'">
            ';
            }


        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    /***********PURCHASE MODULE END**************/

    /***********SALE MODULE START**************/
    public function product_sale_list($MenuCatName)
    {
        if($this->session->userdata('logged_in'))
        {
            $MenuValue=$MenuCatName;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="sale";
            $this->data['MenuValue']=$MenuValue;
            $this->data['AllSaleBasic']=$this->Admin_model->final_sale_basic_get($CompanyAdminId);

            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/sale/product_sale_list');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function product_sale_list_new_record($MenuValue,$menu_sub_name,$FinalSaleBasicId)
    {
        if($this->session->userdata('logged_in'))
        {
            $MenuValue=$MenuValue;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="sale";
            $this->data['MenuValue']=$MenuValue;
            $this->data['AllSaleBasic']=$this->Admin_model->final_sale_basic_get($CompanyAdminId);


            $this->data['FinalSaleBasicId']=$FinalSaleBasicId;

            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/sale/product_sale_list');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function sale_product_invoice($FinalSaleBasicId)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $user_name=$session_data['user_name'];

            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $date_time=$date.$time;
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);



            foreach($this->Admin_model->company_basic_get($CompanyAdminId) as $CompanyBasicData)
            {
                $Contact_user_basic_id=$CompanyBasicData['user_basic_id'];
                $company_code=$CompanyBasicData['company_code'];
                $company_name=$CompanyBasicData['company_name'];
                $company_tagline=$CompanyBasicData['company_tagline'];
                $company_logo=$CompanyBasicData['company_logo'];
                $email=$CompanyBasicData['email'];
                $fax=$CompanyBasicData['fax'];
                $mobile=$CompanyBasicData['mobile'];
            }

            foreach($this->Admin_model->company_details_get($CompanyAdminId) as $CompanyDetailsData)
            {
                $street_address=$CompanyDetailsData['street_address'];
                $city=$CompanyDetailsData['city'];
                $state=$CompanyDetailsData['state'];
                $zip_code=$CompanyDetailsData['zip_code'];
            }


            foreach($this->Admin_model->invoice_final_sale_basic_get($FinalSaleBasicId,$user_basic_id,$CompanyAdminId) as $FinalSaleBasicData)
            {
                $final_sale_basic_id=$FinalSaleBasicData['id'];
                $invoice_id=$FinalSaleBasicData['invoice_id'];
                $coustomer_type=$FinalSaleBasicData['coustomer_type'];
                $coustomer_id=$FinalSaleBasicData['coustomer_id'];
                if($coustomer_type=="new")
                {
                    foreach($this->Admin_model->invoice_final_sale_new_customer_get($final_sale_basic_id,$coustomer_id) as $FinalSaleBasicNewCustomerData)
                    {
                         $coustomer_name=$FinalSaleBasicNewCustomerData['coustomer_name'];
                         $customer_contact_no=$FinalSaleBasicNewCustomerData['contact_no'];
                         $customer_address=$FinalSaleBasicNewCustomerData['address'];
                    }
                }
                else
                {
                    foreach($this->Admin_model->invoice_final_sale_customer_get($coustomer_id) as $FinalSaleBasicCustomerData)
                    {
                        $coustomer_name=$FinalSaleBasicCustomerData['coustomer_name'];
                        $customer_contact_no=$FinalSaleBasicCustomerData['contact_no'];
                        $customer_address=$FinalSaleBasicCustomerData['address'];
                    }
                }
                $payable_amount=$FinalSaleBasicData['payable_amount'];
                $paid_amount=$FinalSaleBasicData['paid_amount'];
                $due_amount=$FinalSaleBasicData['due_amount'];
                $pay_status=$FinalSaleBasicData['pay_status'];
                $sale_status=$FinalSaleBasicData['sale_status'];
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


            $CompanyDataHeader='
              <table cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <!---Row Left--->
                         <td border="0">
                            <table cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td>
                                     <img src="'.$path.'others/upload/CompanyLogo/'.$company_logo.'" alt="'.$company_name.'" width="60px" height="60px" border="0" />
                                     <h3>&nbsp;&nbsp;'.$company_name.'</h3>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <b>'.$company_tagline.'</b><br>
                                        '.$street_address.'<br>
                                        CITY:&nbsp;&nbsp;'.$city.',ST:'.$state.',ZIP:'.$zip_code.'<br>
                                        EMAIL:&nbsp;&nbsp;'.$email.'<br>
                                        MOBILE:&nbsp;&nbsp;'.$mobile.'<br>
                                    </td>
                                </tr>

                            </table>
                         </td>
                         <!---Row Left--->

                         <!---Row Right--->
                         <td>
                            <table cellspacing="0" cellpadding="0" border="0" align="right">
                                <tr>
                                    <td>
                                        <h3>SALE INVOICE</h3>

                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        DATE:&nbsp;&nbsp;'.$date.'<br>
                                        INVOICE ID:&nbsp;&nbsp;'.$invoice_id.'<br>
                                    </td>
                                </tr>

                            </table>
                         </td>
                         <!---Row Right--->
                    </tr>
              </table>
        ';
            $pdf->writeHTML($CompanyDataHeader, true, false, true, false, '');


            $BillInfo='
                 <table cellspacing="0" cellpadding="0" border="0">
                        <tr>
                             <td>
                             <table cellspacing="0" cellpadding="2" border="0.5px">
                              <tr>
                                <th colspan="2" align="center" style="font-size: 9px; color: #FFF; text-transform: uppercase; background-color: #4e4e4e;"><b>BILL TO</b></th>
                                <th colspan="2" align="center" style="font-size: 9px; color: #FFF; text-transform: uppercase; background-color: #4e4e4e;"><b>SHIP TO</b></th>
                              </tr>
                              <tr>
                                    <td colspan="2" align="center" style="font-size: 9px; background-color: #efefef;">
                                        <b>'.$coustomer_name.'</b><br>
                                            CONTACT PERSON:&nbsp;&nbsp;'.$coustomer_name.'<br>
                                            CONTACT NO:&nbsp;&nbsp;'.$customer_contact_no.'<br>
                                            ADDRESS:&nbsp;&nbsp;'.$customer_address.'
                                    </td>

                                    <td colspan="2" align="center" style="font-size: 9px; background-color: #efefef;">
                                         <b>'.$company_name.'</b><br>
                                        CITY:&nbsp;&nbsp;'.$city.',ST:'.$state.',ZIP:'.$zip_code.'<br>
                                        EMAIL:&nbsp;&nbsp;'.$email.'<br>
                                        MOBILE:&nbsp;&nbsp;'.$mobile.'
                                    </td>
                            </tr>
                  </table>
                 </td>
                </tr>


             </table>';
            $pdf->writeHTML($BillInfo, true, false, true, false, '');


            $product_data='
             <table cellspacing="0" cellpadding="0" border="0">
                <tr>
                 <td>
                 <table cellspacing="0" cellpadding="4" border="0.5px">
                  <tr>
                    <th colspan="2" align="center" style="height: 20px; font-size: 9px; color: #FFF; background-color: #4e4e4e;">PRODUCT CODE/NAME</th>
                    <th colspan="5" align="center" style="font-size: 9px; color: #FFF; background-color: #4e4e4e;">DESCRIPTION</th>
                    <th colspan="1" align="center" style="font-size: 9px; color: #FFF; background-color: #4e4e4e;">QTY</th>
                    <th colspan="2" align="center" style="font-size: 9px; color: #FFF; background-color: #4e4e4e;">COST PRICE</th>
                    <th colspan="2" align="center" style="font-size: 9px; color: #FFF; background-color: #4e4e4e;">TOTAL</th>
                  </tr>';


            $total_price_sub=0;
            foreach($this->Admin_model->invoice_sale_product_get($final_sale_basic_id) as $SaleProductData)
            {
                $total_price_sub +=$SaleProductData['total_price'];

                $product_data.='<tr>
                                <td colspan="2"  align="center" style="font-size: 9px; background-color: #efefef;">'.$SaleProductData['product_code_name'].'</td>
                                <td colspan="5"  align="center" style="font-size: 9px; background-color: #efefef;">
                                Name:'.$SaleProductData['product_name'].',<br>
                                Brand:'.$SaleProductData['brand'].',<br>
                                Type:'.$SaleProductData['product_cat_name'].'&nbsp;.
                                </td>
                                <td colspan="1" align="center" style="font-size: 9px;  background-color: #efefef;">'.$SaleProductData['quantity'].'</td>
                                <td colspan="2" align="center" style="font-size: 9px;  background-color: #efefef;">'.$SaleProductData['product_price'].'&nbsp;Tk</td>
                                <td colspan="2" align="center" style="font-size: 9px;  background-color: #efefef;">'.$SaleProductData['total_price'].'&nbsp;Tk</td>

                            </tr>';

            }

            $product_data .='</table>
                 </td>
                </tr>

                <tr>
                 <td>
                 <table cellspacing="4" cellpadding="4" border="0">
                  <tr>
                    <th colspan="2" align="center" style="font-size: 9px;"></th>
                    <th colspan="5" align="center" style="font-size: 9px;"></th>
                    <th colspan="1" align="center" style="font-size: 9px;"></th>
                    <th colspan="2" align="center" style="font-size: 9px;"></th>
                    <th colspan="2" align="center" style="border: 1px dashed #e2e1e1; font-size: 8px; background-color: #efefef;"><b>SUBTOTAL: '.$total_price_sub.'&nbsp;Tk</b></th>
                  </tr>
                 </table>
                 </td>
                </tr>

                <tr>
                 <td>
                 <table cellspacing="4" cellpadding="4" border="0">
                  <tr>
                    <th colspan="2" align="center" style="font-size: 9px;"></th>
                    <th colspan="5" align="center" style="font-size: 9px;"></th>
                    <th colspan="1" align="center" style="font-size: 9px;"></th>
                    <th colspan="2" align="center" style="font-size: 9px;"></th>
                    <th colspan="2" align="center" style="border: 1px dashed #e2e1e1; font-size: 8px; background-color: #efefef;"><b>PAYABLE: '.$payable_amount.'&nbsp;Tk</b></th>
                  </tr>
                 </table>
                 </td>
                </tr>

                <tr>
                 <td>
                 <table cellspacing="4" cellpadding="4" border="0">
                  <tr>
                    <th colspan="2" align="center" style="font-size: 9px;"></th>
                    <th colspan="5" align="center"><h4 align="center">Thank You For Your Business!</h4></th>
                    <th colspan="1" align="center" style="font-size: 9px;"></th>
                    <th colspan="2" align="center" style="font-size: 9px;"></th>
                    <th colspan="2" align="center" style="border: 1px dashed #e2e1e1; font-size: 8px; background-color: #efefef;"><b>PAID: '.$paid_amount.'&nbsp;Tk</b></th>
                  </tr>
                 </table>
                 </td>
                </tr>

                <tr>
                 <td>
                 <table cellspacing="4" cellpadding="4" border="0">
                  <tr>
                    <th colspan="2" align="center" style="font-size: 9px;"></th>
                    <th colspan="5" align="center" style="border: 1px dashed #ffbfba;font-size: 8px; background-color: #f7bbb6;"><h4 align="center">Sale&nbsp;Type&nbsp;: '.$sale_status.'</h4></th>
                    <th colspan="1" align="center" style="font-size: 9px;"></th>
                    <th colspan="2" align="center" style="font-size: 9px;"></th>
                    <th colspan="2" align="center" style="border: 1px dashed #e2e1e1;font-size: 8px; background-color: #efefef;"><b>DUE: '.$due_amount.'&nbsp;Tk</b></th>
                  </tr>
                 </table>
                 </td>
                </tr>

             </table>';
            $pdf->writeHTML($product_data, true, false, true, false, '');
            $pdf->Output('invoice_sale_product.pdf', 'I');

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function product_sale_new($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['SelectCoustomer']=$this->Admin_model->select_sale_coustomer($CompanyAdminId);

            $PurchaseBasicNum=$this->Admin_model->sale_purchase_basic_get_num($CompanyAdminId);
            $this->data['PurchaseBasicNum']=$PurchaseBasicNum;

             foreach($this->Admin_model->sale_purchase_basic_get($CompanyAdminId) as $PurchaseBasicData)
             {
                 $purchase_basic_id=$PurchaseBasicData['id'];
                 $this->data['SearchProductCodeName']=$this->Admin_model->search_product_code_name($purchase_basic_id);
             }

            $this->data['MenuActive']="sale";
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;

            $SaleBasicFirstCheck=$this->Admin_model->sale_continer_basic_first_check($user_basic_id,$CompanyAdminId);

            if(count($SaleBasicFirstCheck)>0)
            {
                $InvoiceId=$this->Admin_model->sale_continer_basic_first_data($user_basic_id,$CompanyAdminId);
                $this->data['InvoiceId']=$InvoiceId;
                $this->data['SaleBasicHave']=$this->Admin_model->sale_continer_basic_have_data($user_basic_id,$CompanyAdminId,$InvoiceId);
                $this->data['SaleProductHave']=$this->Admin_model->sale_product_continer_have_data();
                $this->load->view('admin/header');
                $this->load->view('admin/admin_header');
                $this->load->view('admin/admin_menu',$this->data);
                $this->load->view('admin/sale/new_product_sale_have',$this->data);
            }
            else
            {
                $this->data['InvoiceId']=date('Ymd'.'His', strtotime('-0 day'));
                $this->load->view('admin/header');
                $this->load->view('admin/admin_header');
                $this->load->view('admin/admin_menu',$this->data);
                $this->load->view('admin/sale/new_product_sale',$this->data);
                //$this->load->view('admin/sale/new_product_sale_bk',$this->data);
            }
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function coustomer_item_form()
    {
        if($this->session->userdata('logged_in'))
        {
            $CoustomerId=$this->input->get('q');
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);

            if($CoustomerId=="new")
            {
                echo '<table border="0" class="product_size_continer2" align="center">
                      <thead>
                          <tr>
                              <th><div id="bill_no_label">coustomer-name</div></th>
                              <th><div id="bill_no_label">contact-no</div></th>
                              <th><div id="bill_date_label">address</div></th>
                          </tr>
                      </thead>
                      <tbody>
                            <tr align="center">
                               <td>
                                  <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="coustomer_name"  id="vendor_code"  type="text" required>
                               </td>
                               <td>
                                   <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="coustomer_contact_no"  id="contact_person"   type="text"  required>
                               </td>
                               <td>
                                  <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="coustomer_address"  id="contact_no"  type="text" required>
                               </td>
                            </tr>
                      </tbody>
                </table>';
            }
            else
            {
                foreach($this->Admin_model->selected_customer_get($CoustomerId,$CompanyAdminId) as $SelectedCustomerData)
                {
                    $customer_id=$SelectedCustomerData['id'];
                    $coustomer_name=$SelectedCustomerData['coustomer_name'];
                    $contact_no=$SelectedCustomerData['contact_no'];
                    $address=$SelectedCustomerData['address'];
                }

                echo '<table border="0" class="product_size_continer2" align="center">
                      <thead>
                          <tr>
                              <th><div id="bill_no_label">coustomer-name</div></th>
                              <th><div id="bill_no_label">contact-no</div></th>
                              <th><div id="bill_date_label">address</div></th>
                          </tr>
                      </thead>
                      <tbody>
                            <tr align="center">
                               <td>
                                  <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="coustomer_name"  id="vendor_code" value="'.$coustomer_name.'"  type="text" readonly>
                               </td>
                               <td>
                                   <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="coustomer_contact_no"  id="contact_person" value="'.$contact_no.'"  type="text"  readonly>
                               </td>
                               <td>
                                  <input class="form-control" style="text-align: center;height: 32px;width: 88%;margin-right: auto;margin-left: auto;"  name="coustomer_address"  id="contact_no" value="'.$address.'"  type="text" readonly>
                               </td>
                            </tr>
                      </tbody>
                </table>';
            }
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function sale_product_items()
    {
        if($this->session->userdata('logged_in'))
        {
            $ProductCodeName=$this->input->get('q');
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);

            foreach($this->Admin_model->sale_purchase_basic_get($CompanyAdminId) as $PurchaseBasicData)
            {
                $purchase_basic_id=$PurchaseBasicData['id'];
                foreach($this->Admin_model->search_product_items_get($purchase_basic_id,$ProductCodeName) as $SaleProductItemGetData)
                {
                    $product_basic_id=$SaleProductItemGetData['id'];
                    $product_brand=$SaleProductItemGetData['brand'];
                    $buffer_limit=$SaleProductItemGetData['buffer_limit'];
                    $image=$SaleProductItemGetData['image'];
                    $purchase_basic_id=$SaleProductItemGetData['purchase_basic_id'];
                    $purchase_product_basic_id=$SaleProductItemGetData['purchase_product_basic_id'];
                    $purchase_product_code_name=$SaleProductItemGetData['purchase_product_code_name'];
                    $product_size=$SaleProductItemGetData['product_size'];
                    $quantity=$this->Admin_model->search_stock_purchase_product_get($purchase_basic_id,$purchase_product_basic_id);
                    $product_billing_price=$SaleProductItemGetData['product_billing_price'];
                    $product_mrp_price=$SaleProductItemGetData['mrp'];
                    $ImageLink=base_url().'others/upload/all_products/'.$image;
                }
            }
            if($quantity<=0)
            {
                $this->Admin_model->purchase_stock_status_update($purchase_basic_id,$purchase_product_basic_id);
                echo '<div class="uk-alert uk-alert-danger" data-uk-alert=""><a class="uk-alert-close uk-close" href=""></a>'.$ProductCodeName.'&nbsp;this product not available for sale, please purchase this product again</div>';
            }
            else
            {
                echo '<div class="sale_product_row_add">
         <div class="row_product_details">
             <label for="purchase_product_code" class="sale_row_code_continer">

                 <a class="sale_image_continer" href="#"><img  src="'.$ImageLink.'" width="49px" height="49px" style="margin-top: 0px;" /></a>
                 <div class="sale_label">code/name</div>
                 <input list="purchase_product_code" name="purchase_product_code[]"  type="text" value="'.$purchase_product_code_name.'"  class="form-control" style="float: left; -webkit-border-radius: 4px;border: 1px solid #c0c0c0;color: #000;text-align: center;height: 33px;width: 160px;float: left;font-size: 13px;font-weight: normal;" readonly>
             </label>

             <div class="sale_size_row_continer">
                 <div class="sale_label_size">size</div>
                 <input class="form-control" name="product_size[]" id="sale_product_size" value="'.$product_size.'"  type="text" readonly>
             </div>
             <div class="sale_size_row_continer">
                 <div class="sale_label_size">billing price</div>
                 <input class="form-control" name="product_billing_price[]" id="sale_billing_price" onkeyup="total_price_cal(this.value)"  value="'.$product_mrp_price.'" type="text" required>
             </div>

             <div class="sale_size_row_continer">
                 <div class="sale_label_size">total-quantity</div>
                 <input class="form-control" name="product_purchase_qnt[]" id="sale_total_qnt"   value="'.$quantity.'" type="text" readonly>
             </div>
             <div class="sale_size_row_continer">
                 <div class="sale_label_size">given-quantity</div>
                 <input class="form-control" name="sale_given_qnt[]" id="sale_given_qnt" onkeyup="total_price_cal(this.value)" type="text" value="0" required>
             </div>

             <div class="sale_size_row_continer">
                 <div class="sale_label_size">total-price</div>
                 <input class="form-control" name="sale_product_total_price[]" id="sale_total_price" onkeyup="add_new_product(this.value)" type="text" readonly>
             </div>

             <div class="ad_bat_continer">
                <input type="hidden" name="PurchaseProductBasicId" id="PurchaseProductBasicId" onkeyup="add_new_product(this.value)" value="'.$purchase_product_basic_id.'">
                 <a onclick="add_new_product('.$purchase_basic_id.')" href="#" class="sale_add_button"></a>
             </div>
         </div>
     </div>';
            }

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function sale_product_items_add()
    {
        if($this->session->userdata('logged_in'))
        {
            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));

            $purchase_product_basic_id=$this->input->get('p');
            $purchase_basic_id=$this->input->get('q');
            $sale_given_qnt=$this->input->get('qnt');
            $SaleInvoiceId=$this->input->get('SaleInvoice');
            $SaleTotalPrice=$this->input->get('SaleTotalPrice');
            $SaleBillPrice=$this->input->get('SaleBillPrice');


            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $user_name_log=$session_data['user_name'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);

            $SaleDBStoreProductCheck=$this->Admin_model->sale_store_product_check($user_basic_id,$CompanyAdminId,$purchase_product_basic_id,$purchase_basic_id,$SaleInvoiceId);

            if(count($SaleDBStoreProductCheck)>0)
            {
                echo '<div class="uk-alert uk-alert-danger" data-uk-alert=""><a class="uk-alert-close uk-close" href=""></a>this product already exited try another product</div>';
            }
            else
            {

                foreach($this->Admin_model->sale_for_purchase_product_basic_get($purchase_basic_id,$purchase_product_basic_id) as $ForSaleProductData)
                {
                     $purchase_basic_id=$ForSaleProductData['purchase_basic_id'];
                     $purchase_product_code_name=$ForSaleProductData['purchase_product_code_name'];
                     $brand=$ForSaleProductData['brand'];
                     $buffer_limit=$ForSaleProductData['buffer_limit'];
                     $image=$ForSaleProductData['image'];
                     $ImageLink=base_url().'others/upload/all_products/'.$image;
                     $product_size=$ForSaleProductData['product_size'];
                     //$quantity=$ForSaleProductData['quantity'];
                     $quantity=$this->Admin_model->search_stock_purchase_product_get($purchase_basic_id,$purchase_product_basic_id);
                     $product_billing_price=$ForSaleProductData['product_billing_price'];
                }

                    if($quantity<$sale_given_qnt)
                    {
                        $this->Admin_model->purchase_stock_status_update($purchase_basic_id,$purchase_product_basic_id);
                        echo '<div class="uk-alert uk-alert-danger" data-uk-alert=""><a class="uk-alert-close uk-close" href=""></a>your sale product given quantity value is large then total quantity</div>';
                    }
                    else
                    {

                        if($product_billing_price > $SaleBillPrice)
                        {
                            echo '<div class="uk-alert uk-alert-danger" data-uk-alert=""><a class="uk-alert-close uk-close" href=""></a>your sale product billing price not less then '.$product_billing_price.'</div>';
                        }
                        else
                        {
                            $QuantityUpdate=$quantity-$sale_given_qnt;
                            $this->Admin_model->purchase_product_qnt_update($purchase_basic_id,$purchase_product_basic_id,$QuantityUpdate);

                            echo '<div class="sale_product_continer_items"><div class="uk-alert uk-alert-success" data-uk-alert=""> <a href="#" class="uk-alert-close uk-close"></a>new item added successfully for sale</div>';

                            $SaleBasicCheck=$this->Admin_model->sale_continer_basic_check($user_basic_id,$CompanyAdminId,$SaleInvoiceId);
                            if(count($SaleBasicCheck)>0)
                            {
                                foreach($this->Admin_model->sale_continer_basic_get($user_basic_id,$CompanyAdminId,$SaleInvoiceId) as $SaleProductContinerData)
                                {
                                    $sale_basic_id=$SaleProductContinerData['id'];
                                    $sale_continer_payable_amount=$SaleProductContinerData['payable_amount'];

                                }
                                $CalPayableAmount=$SaleTotalPrice+$sale_continer_payable_amount;


                                $this->Admin_model->sale_basic_payable_amount_update($user_basic_id,$CompanyAdminId,$SaleInvoiceId,$sale_basic_id,$CalPayableAmount);

                                $SaleProductContinerModelData=array(
                                    'sale_basic_continer_id'=>$sale_basic_id,
                                    'purchase_basic_id'=>$purchase_basic_id,
                                    'product_basic_id'=>$purchase_product_basic_id,
                                    'product_code_name'=>$purchase_product_code_name,
                                    'product_size'=>$product_size,
                                    'product_price'=>$SaleBillPrice,
                                    'quantity'=>$sale_given_qnt,
                                    'total_price'=>$SaleTotalPrice,
                                );

                                $this->Admin_model->add_new_sale_product_continer($SaleProductContinerModelData);
                                foreach( $this->Admin_model->get_all_sale_basic_continer($user_basic_id,$CompanyAdminId,$SaleInvoiceId) as $ShowItemsSaleBasicData)
                                {
                                    $proccsing_sale_basic_id=$ShowItemsSaleBasicData['id'];
                                    $payable_amount=$ShowItemsSaleBasicData['payable_amount'];
                                }

                                echo '<div class="sale_product_continer_items_left"><div class="sale_product_row_add_items">';
                                foreach( $this->Admin_model->get_all_sale_product_continer($proccsing_sale_basic_id) as $ShowItemsSaleProductData)
                                {
                                    $proccsing_sale_product_brand=$ShowItemsSaleProductData['brand'];
                                    $proccsing_sale_product_image=$ShowItemsSaleProductData['image'];
                                    $proccsing_sale_purchase_basic_id=$ShowItemsSaleProductData['purchase_basic_id'];
                                    $proccsing_sale_product_basic_id=$ShowItemsSaleProductData['product_basic_id'];
                                    $proccsing_sale_product_code_name=$ShowItemsSaleProductData['product_code_name'];
                                    $proccsing_sale_product_size=$ShowItemsSaleProductData['product_size'];
                                    $proccsing_sale_product_price=$ShowItemsSaleProductData['product_price'];
                                    $proccsing_sale_product_quantity=$ShowItemsSaleProductData['quantity'];
                                    $proccsing_sale_product_total_price=$ShowItemsSaleProductData['total_price'];
                                    $product_basic_id=$proccsing_sale_product_basic_id;

                                    $proccsing_sale_product_imageLink=base_url().'others/upload/all_products/'.$proccsing_sale_product_image;
                                    $site_url_saleproduct_del=site_url('admin_oparetion/sale_product_continer_delete/'.$proccsing_sale_basic_id.'/'.$proccsing_sale_product_code_name);

                                    echo '<div class="row_product_details_items">
                                                 <label for="purchase_product_code" class="sale_row_code_continer_tems">
                                                     <a class="sale_image_continer" href="#"><img  src="'.$proccsing_sale_product_imageLink.'" width="49px" height="49px" style="margin-top: 0px;" /></a>
                                                     <div class="sale_label_items">code/name</div>
                                                     <input list="purchase_product_code" name="sale_product_code_name[]"  value="'.$proccsing_sale_product_code_name.'" type="text"  class="form-control" style="float: left; -webkit-border-radius: 4px;border: 1px solid #c0c0c0;color: #000;text-align: center;height: 33px;width: 112px;float: left;font-size: 13px;font-weight: normal;" readonly>
                                                 </label>

                                                 <div class="sale_size_row_continer_items_size">
                                                     <div class="sale_label_size_items">size</div>
                                                     <input class="form-control" name="sale_product_size[]" id="sale_product_size_items" value="'.$proccsing_sale_product_size.'" type="text" readonly>
                                                 </div>

                                                 <div class="sale_size_row_continer_items_all">
                                                     <div class="sale_label_size_items_all">brand</div>
                                                     <input class="form-control" name="sale_product_brand[]" id="sale_given_qnt_items" value="'.$proccsing_sale_product_brand.'" type="text" readonly>
                                                 </div>

                                                 <div class="sale_size_row_continer_items_all">
                                                     <div class="sale_label_size_items_all">cost price</div>
                                                     <input class="form-control" name="sale_product_cost_price[]" id="sale_billing_price_items'.$product_basic_id.'" onkeyup="p_items_total_price_cal('.$product_basic_id.')" value="'.$proccsing_sale_product_price.'" type="text" style="height: 33px;width: 95px;text-align: center;float: left;" readonly>
                                                 </div>

                                                 <div class="sale_size_row_continer_items_all">
                                                     <div class="sale_label_size_items_all">total-quantity</div>
                                                     <input class="form-control" name="sale_product_qnt_price[]" id="sale_total_qnt_items'.$product_basic_id.'" onkeyup="p_items_total_price_cal('.$product_basic_id.')" value="'.$proccsing_sale_product_quantity.'" type="text" style="height: 33px;width: 95px;text-align: center;float: left;" required>
                                                 </div>
                                                 <div class="sale_size_row_continer_items_all">
                                                     <div class="sale_label_size_items_all">total-price</div>
                                                     <input class="form-control" name="sale_total_price_items[]" id="sale_total_price_items'.$product_basic_id.'" onkeyup="p_items_total_price_cal('.$product_basic_id.')" value="'.$proccsing_sale_product_total_price.'" type="text" style="height: 33px;width: 95px;text-align: center;float: left;" readonly>
                                                 </div>
                                                 <input type="hidden" name="PurchaseBasicId[]" value="'.$proccsing_sale_purchase_basic_id.'">
                                                 <input type="hidden" name="ProductBasicId[]" value="'.$proccsing_sale_product_basic_id.'">
                                                 <div class="del_bat_continer">
                                                     <a class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light"  href="'.$site_url_saleproduct_del.'">Delete</a>
                                                 </div>
                                             </div>';
                                }
                                echo '</div></div>';




                            }

                            else
                            {
                                echo '<div class="sale_product_continer_items_left"><div class="sale_product_row_add_items">';

                                foreach($this->Admin_model->sale_continer_basic_get($user_basic_id,$CompanyAdminId,$SaleInvoiceId) as $SaleProductContinerData)
                                {
                                    $sale_continer_payable_amount=$SaleProductContinerData['payable_amount'];

                                }
                                $CalPayableAmount=$SaleTotalPrice+$sale_continer_payable_amount;

                                $SalebasicContinerModelData=array(
                                    'company_basic_id'=>$CompanyAdminId,
                                    'user_basic_id'=>$user_basic_id,
                                    'invoice_id'=>$SaleInvoiceId,
                                    'coustomer_type'=>"NULL",
                                    'coustomer_id'=>"NULL",
                                    'payable_amount'=>$CalPayableAmount,
                                    'paid_amount'=>0,
                                    'due_amount'=>0,
                                    'pay_status'=>0,
                                    'sale_status'=>"prossing",
                                    'created_by'=>$user_name_log,
                                    'modified_date'=>$date,
                                    'modified_time'=>$time,
                                );
                                $SaleContinerBasicId=$this->Admin_model->add_new_sale_continer_basic($SalebasicContinerModelData);


                                $SaleProductContinerModelData=array(
                                    'sale_basic_continer_id'=>$SaleContinerBasicId,
                                    'purchase_basic_id'=>$purchase_basic_id,
                                    'product_basic_id'=>$purchase_product_basic_id,
                                    'product_code_name'=>$purchase_product_code_name,
                                    'product_size'=>$product_size,
                                    'product_price'=>$SaleBillPrice,
                                    'quantity'=>$sale_given_qnt,
                                    'total_price'=>$SaleTotalPrice,
                                );

                                $this->Admin_model->add_new_sale_product_continer($SaleProductContinerModelData);


                                foreach( $this->Admin_model->get_all_sale_basic_continer($user_basic_id,$CompanyAdminId,$SaleInvoiceId) as $ShowItemsSaleBasicData)
                                {
                                    $proccsing_sale_basic_id=$ShowItemsSaleBasicData['id'];
                                    $payable_amount=$ShowItemsSaleBasicData['payable_amount'];
                                }
                                foreach( $this->Admin_model->get_all_sale_product_continer($proccsing_sale_basic_id) as $ShowItemsSaleProductData)
                                {
                                    $proccsing_sale_product_brand=$ShowItemsSaleProductData['brand'];
                                    $proccsing_sale_product_image=$ShowItemsSaleProductData['image'];
                                    $proccsing_sale_purchase_basic_id=$ShowItemsSaleProductData['purchase_basic_id'];
                                    $proccsing_sale_product_basic_id=$ShowItemsSaleProductData['product_basic_id'];
                                    $proccsing_sale_product_code_name=$ShowItemsSaleProductData['product_code_name'];
                                    $proccsing_sale_product_size=$ShowItemsSaleProductData['product_size'];
                                    $proccsing_sale_product_price=$ShowItemsSaleProductData['product_price'];
                                    $proccsing_sale_product_quantity=$ShowItemsSaleProductData['quantity'];
                                    $proccsing_sale_product_total_price=$ShowItemsSaleProductData['total_price'];
                                    $product_basic_id=$proccsing_sale_product_basic_id;

                                    $proccsing_sale_product_imageLink=base_url().'others/upload/all_products/'.$proccsing_sale_product_image;
                                    $site_url_saleproduct_del=site_url('admin_oparetion/sale_product_continer_delete/'.$proccsing_sale_basic_id.'/'.$proccsing_sale_product_code_name);

                                    echo ' <div class="row_product_details_items">

                                      <label for="purchase_product_code" class="sale_row_code_continer_tems">
                                           <a class="sale_image_continer" href="#"><img  src="'.$proccsing_sale_product_imageLink.'" width="49px" height="49px" style="margin-top: 0px;" /></a>
                                           <div class="sale_label_items">code/name</div>
                                           <input list="purchase_product_code" name="sale_product_code_name[]"  value="'.$proccsing_sale_product_code_name.'" type="text"  class="form-control" style="float: left; -webkit-border-radius: 4px;border: 1px solid #c0c0c0;color: #000;text-align: center;height: 33px;width: 112px;float: left;font-size: 13px;font-weight: normal;" readonly>
                                      </label>

                                     <div class="sale_size_row_continer_items_size">
                                         <div class="sale_label_size_items">size</div>
                                          <input class="form-control" name="sale_product_size[]" id="sale_product_size_items" value="'.$proccsing_sale_product_size.'" type="text" readonly>
                                     </div>

                                     <div class="sale_size_row_continer_items_all">
                                         <div class="sale_label_size_items_all">brand</div>
                                         <input class="form-control" name="sale_product_brand[]" id="sale_given_qnt_items" value="'.$proccsing_sale_product_brand.'" type="text" readonly>
                                     </div>

                                     <div class="sale_size_row_continer_items_all">
                                         <div class="sale_label_size_items_all">cost price</div>
                                         <input class="form-control" name="sale_product_cost_price[]" id="sale_billing_price_items'.$product_basic_id.'" onkeyup="p_items_total_price_cal('.$product_basic_id.')" value="'.$proccsing_sale_product_price.'" type="text" style="height: 33px;width: 95px;text-align: center;float: left;" readonly>
                                     </div>

                                     <div class="sale_size_row_continer_items_all">
                                         <div class="sale_label_size_items_all">total-quantity</div>
                                         <input class="form-control" name="sale_product_qnt_price[]" id="sale_total_qnt_items'.$product_basic_id.'" onkeyup="p_items_total_price_cal('.$product_basic_id.')" value="'.$proccsing_sale_product_quantity.'" type="text" style="height: 33px;width: 95px;text-align: center;float: left;" required>
                                     </div>
                                     <div class="sale_size_row_continer_items_all">
                                         <div class="sale_label_size_items_all">total-price</div>
                                         <input class="form-control" name="sale_total_price_items[]" id="sale_total_price_items'.$product_basic_id.'" onkeyup="p_items_total_price_cal('.$product_basic_id.')" value="'.$proccsing_sale_product_total_price.'" type="text" style="height: 33px;width: 95px;text-align: center;float: left;" readonly>
                                     </div>
                                     <input type="hidden" name="PurchaseBasicId[]" value="'.$proccsing_sale_purchase_basic_id.'">
                                     <input type="hidden" name="ProductBasicId[]" value="'.$proccsing_sale_product_basic_id.'">
                                 <div class="del_bat_continer">
                                     <a class="md-btn md-btn-danger md-btn-wave-light waves-effect waves-button waves-light" href="'.$site_url_saleproduct_del.'">Delete</a>
                                 </div>
                             </div>';
                                }
                                echo '</div></div>';

                            }
                            echo '
                            <div class="sale_product_continer_items_right">
                                 <div class="sale_right_row_continer">
                                     <div class="sale_right_row_lable">SUBTOTAL:</div>
                                     <input class="form-control" name="sale_subtotal_amount" id="sale_cal_items" value="'.$payable_amount.'" type="text" required>
                                 </div>
                                 <div class="sale_right_row_continer">
                                     <div class="sale_right_row_lable">PAYABLE:</div>
                                     <input class="form-control" name="sale_payable_amount" id="sale_cal_items_payable" value="'.$payable_amount.'" onkeyup="coustomer_pay_cal(this.value)"  type="text" required>
                                 </div>
                                 <div class="sale_right_row_continer">
                                     <div class="sale_right_row_lable">PAID:</div>
                                     <input class="form-control" name="sale_paid_amount" id="sale_cal_items_paid" type="text"  onkeyup="coustomer_pay_cal(this.value)" required>
                                 </div>
                                 <div class="sale_right_row_continer">
                                     <div class="sale_right_row_lable">DUE:</div>
                                     <input class="form-control" name="sale_due_amount" id="sale_cal_items_due" type="text" required>
                                 </div>
                             </div>';

                            echo '</div>';
                        }

                    }
            }

        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function sale_product_details($value,$MenuValue)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="sale";
            $this->data['MenuValue']=$MenuValue;
            $this->data['DetailsFinalSaleBasic']=$this->Admin_model->sale_details_final_sale_basic_get($value,$CompanyAdminId,$user_basic_id);
            $this->data['DetailsFinalSaleProductBasic']=$this->Admin_model->sale_details_final_product_basic_get($value);

            $this->load->view('admin/header');
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/sale/product_sale_details');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    /***********SALE MODULE END**************/

    /***********REPORTS MODULE START**************/
    public function product_purchase_reports($MenuCatName)
    {
        if($this->session->userdata('logged_in'))
        {
            $MenuValue=$MenuCatName;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="reports";
            $this->data['MenuValue']=$MenuValue;
            $this->data['AllPurchaseBill']=$this->Admin_model->all_purchase_bill_reports($CompanyAdminId,$user_basic_id);
            $this->data['PurchaseProductBasic']=$this->Admin_model->purchase_product_basic();
            $this->data['ReportHeaderTitle']="PURCHASE-REPORT";

            $this->load->view('admin/report/header_report',$this->data);
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/report/purchase_reports_list');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function date_to_date_product_purchase_reports()
    {
        if($this->session->userdata('logged_in'))
        {
            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $date_time=$date.$time;

            $FormData = array(
                'StartDate' => $this->input->post('StartDate'),
                'EndDate' => $this->input->post('EndDate'),
                'MenuValue' => $this->input->post('MenuValue'),
            );
            $StartDate=$FormData['StartDate'];
            $EndDate=$FormData['EndDate'];
            $MenuValueForm=$FormData['MenuValue'];


            $MenuCatName=$MenuValueForm;
            $MenuValue=$MenuCatName;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="reports";
            $this->data['MenuValue']=$MenuValue;
            $this->data['AllPurchaseBill']=$this->Admin_model->date_to_date_purchase_bill_reports($CompanyAdminId,$user_basic_id,$StartDate,$EndDate);
            $this->data['TotalPurchaseProductQnt']=$this->Admin_model->date_to_date_total_purchase_product($CompanyAdminId,$user_basic_id,$StartDate,$EndDate);
            $this->data['PurchaseProductBasic']=$this->Admin_model->purchase_product_basic();
            $this->data['ReportHeaderTitle']="PURCHASE-REPORT ($StartDate To $EndDate)";

            $this->data['StartDate']=$StartDate;
            $this->data['EndDate']=$EndDate;


            $this->load->view('admin/report/header_report',$this->data);
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/report/purchase_reports_date');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function product_sale_reports($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="reports";
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;

            $this->data['AllSaleBasic']=$this->Admin_model->final_sale_basic_report_get($CompanyAdminId);

            $this->data['ReportHeaderTitle']="SALE-REPORT";

            $this->load->view('admin/report/header_report',$this->data);
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/report/sale_reports_list');


        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function date_to_date_product_sale_reports()
    {
        if($this->session->userdata('logged_in'))
        {
            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $date_time=$date.$time;

            $FormData = array(
                'StartDate' => $this->input->post('StartDate'),
                'EndDate' => $this->input->post('EndDate'),
                'MenuValue' => $this->input->post('MenuValue'),
                'MenuValueSub' => $this->input->post('MenuValueSub'),
            );
            $StartDate=$FormData['StartDate'];
            $EndDate=$FormData['EndDate'];
            $MenuValueForm=$FormData['MenuValue'];
            $MenuValueSub=$FormData['MenuValueSub'];


            $MenuCatName=$MenuValueForm;
            $MenuValue=$MenuCatName;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="reports";
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$MenuValueSub);
            $this->data['MenuValueSub']=$sub_menu_name;

            $this->data['AllSaleBasic']=$this->Admin_model->date_to_date_sale_reports($CompanyAdminId,$StartDate,$EndDate);
            $this->data['TotalSaleProductQnt']=$this->Admin_model->date_to_date_total_sale_product($CompanyAdminId,$StartDate,$EndDate);
            $this->data['ReportHeaderTitle']="SALE-REPORT ($StartDate To $EndDate)";

            $this->data['StartDate']=$StartDate;
            $this->data['EndDate']=$EndDate;


            $this->load->view('admin/report/header_report',$this->data);
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/report/sale_reports_date');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function purchase_product_reports($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="reports";
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;

            $this->data['AllPurchaseBill']=$this->Admin_model->all_purchase_bill_reports_product($CompanyAdminId,$user_basic_id);
            $this->data['AllPurchaseProduct']=$this->Admin_model->all_report_purchase_products($CompanyAdminId,$user_basic_id);

            $this->data['ReportHeaderTitle']="PURCHASE-PRODUCT-REPORT-LIST";

            $this->load->view('admin/report/header_report',$this->data);
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/report/product_purchase_reports_list');


        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function date_to_date_purchase_product_reports()
    {
        if($this->session->userdata('logged_in'))
        {
            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $date_time=$date.$time;

            $FormData = array(
                'StartDate' => $this->input->post('StartDate'),
                'EndDate' => $this->input->post('EndDate'),
                'MenuValue' => $this->input->post('MenuValue'),
                'MenuValueSub' => $this->input->post('MenuValueSub'),
            );
            $StartDate=$FormData['StartDate'];
            $EndDate=$FormData['EndDate'];
            $MenuValueForm=$FormData['MenuValue'];
            $MenuValueSub=$FormData['MenuValueSub'];


            $MenuCatName=$MenuValueForm;
            $MenuValue=$MenuCatName;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="reports";
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$MenuValueSub);
            $this->data['MenuValueSub']=$sub_menu_name;


            $this->data['AllPurchaseBill']=$this->Admin_model->date_to_date_purchase_bill_reports_product($CompanyAdminId,$user_basic_id,$StartDate,$EndDate);
            $this->data['AllPurchaseProduct']=$this->Admin_model->date_to_date_report_purchase_products($CompanyAdminId,$user_basic_id,$StartDate,$EndDate);


            $this->data['ReportHeaderTitle']="PURCHASE-PRODUCT-REPORT-LIST ($StartDate To $EndDate)";

            $this->data['StartDate']=$StartDate;
            $this->data['EndDate']=$EndDate;


            $this->load->view('admin/report/header_report',$this->data);
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/report/product_purchase_reports_list_date');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function sale_product_reports($MenuValue,$menu_sub_name)
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="reports";
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$menu_sub_name);
            $this->data['MenuValueSub']=$sub_menu_name;

            $this->data['AllSaleBasic']=$this->Admin_model->final_sale_basic_report_product_get($CompanyAdminId);
            $this->data['AllSaleProduct']=$this->Admin_model->final_sale_product_get($CompanyAdminId);

            $this->data['ReportHeaderTitle']="SALE-PRODUCT-REPORT";

            $this->load->view('admin/report/header_report',$this->data);
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/report/sale_product_reports_list');


        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    public function date_to_date_sale_product_reports()
    {
        if($this->session->userdata('logged_in'))
        {
            header('Content-Type: text/html; charset=utf-8');
            date_default_timezone_set('Asia/Dhaka');
            $date=date('Y-m-d', strtotime('-0 day'));
            $time=date('H:i:s', strtotime('-0 day'));
            $date_time=$date.$time;

            $FormData = array(
                'StartDate' => $this->input->post('StartDate'),
                'EndDate' => $this->input->post('EndDate'),
                'MenuValue' => $this->input->post('MenuValue'),
                'MenuValueSub' => $this->input->post('MenuValueSub'),
            );
            $StartDate=$FormData['StartDate'];
            $EndDate=$FormData['EndDate'];
            $MenuValueForm=$FormData['MenuValue'];
            $MenuValueSub=$FormData['MenuValueSub'];


            $MenuCatName=$MenuValueForm;
            $MenuValue=$MenuCatName;
            $session_data = $this->session->userdata('logged_in');
            $user_basic_id=$session_data['id'];
            $this->load->Model('Admin_model');
            $CompanyAdminId=$this->Admin_model->company_id($user_basic_id);
            $this->data['CompanyMenu']=$this->Admin_model->company_menu($user_basic_id);
            $this->data['MenuValueActive']=$this->Admin_model->company_menu_active($user_basic_id,$MenuValue);
            $menu_id_active=$this->Admin_model->get_company_menu_active($user_basic_id,$MenuValue);
            $this->data['CompanySubMenuFirst']=$this->Admin_model->company_sub_first($user_basic_id,$menu_id_active);
            $this->data['CompanySubMenu']=$this->Admin_model->company_sub_menu($user_basic_id,$menu_id_active);

            $this->data['MenuActive']="reports";
            $this->data['MenuValue']=$MenuValue;
            $sub_menu_name = str_replace("%20"," ",$MenuValueSub);
            $this->data['MenuValueSub']=$sub_menu_name;


            $this->data['AllSaleBasic']=$this->Admin_model->date_to_date_sale_basic_report_product_get($CompanyAdminId,$StartDate,$EndDate);
            $this->data['AllSaleProduct']=$this->Admin_model->date_to_date_sale_product_get($CompanyAdminId,$StartDate,$EndDate);


            $this->data['ReportHeaderTitle']="SALE-PRODUCT-REPORT-LIST ($StartDate To $EndDate)";

            $this->data['StartDate']=$StartDate;
            $this->data['EndDate']=$EndDate;


            $this->load->view('admin/report/header_report',$this->data);
            $this->load->view('admin/admin_header');
            $this->load->view('admin/admin_menu',$this->data);
            $this->load->view('admin/report/product_sale_reports_list_date');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
    /***********REPORTS MODULE END**************/





}



