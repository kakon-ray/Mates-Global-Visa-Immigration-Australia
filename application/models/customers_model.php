<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 8/27/23
 * Time: 2:36 PM
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Customers_model extends CI_Model
{
    public function customer()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('customer_basic');
        return $query->result_array();
    }
    public function add_new_customer($NewCustomerData)
    {
        $this->db->insert('customer_basic',$NewCustomerData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_test_customers($RequestData)
    {
        $this->db->insert('test_data',$RequestData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function customer_login_check($mobile,$password)
    {
        $this->db->select('*');
        $this->db->where('mobile', $mobile);
        $this->db->where('password', $password);
        $query = $this->db->get('customer_basic');
        return $query->row_array();
    }
    public function customer_login_data($mobile,$password)
    {
        $this->db->select('*');
        $this->db->where('mobile', $mobile);
        $this->db->where('password', $password);
        $query = $this->db->get('customer_basic');
        return $query->result_array();
    }
    public function reset_password($mobile,$password)
    {
        $this->db->where('mobile', $mobile);
        $this->db->set('password', $password);
        $this->db->update('customer_basic');
    }
    public function shop_slider()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $this->db->order_by("id","desc");
        $this->db->limit(2);
        $query = $this->db->get('customer_shop_slider');
        return $query->result_array();
    }
    public function slider_data()
    {
        $this->db->select('*');
        $query = $this->db->get('customer_shop_slider');
        return $query->result_array();
    }
    public function slider_data_add($CustomerShopSliderData)
    {
        $this->db->insert('customer_shop_slider',$CustomerShopSliderData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function slider_data_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('customer_shop_slider');
    }
    public function retailer_shop()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $this->db->order_by("id","desc");
        $this->db->limit(10);
        $query = $this->db->get('retailer');
        return $query->result_array();
    }
    public function add_new_mail($NewMailData)
    {
        $this->db->insert('customer_send_mail',$NewMailData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function update_picture($mobile,$file_name)
    {
        $this->db->where('mobile', $mobile);
        $this->db->set('picture', $file_name);
        $this->db->update('customer_basic');
    }
    public function profile_check($mobile)
    {
        $this->db->select('*');
        $this->db->where('mobile', $mobile);
        $query = $this->db->get('customer_basic');
        return $query->row_array();
    }
    public function profile($mobile)
    {
        $this->db->select('*');
        $this->db->where('mobile', $mobile);
        $query = $this->db->get('customer_basic');
        return $query->result_array();
    }

}
