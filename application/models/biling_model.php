<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 3/12/23
 * Time: 3:25 PM
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Biling_model extends CI_Model
{
    public function bill1_basic($Bill1BasicData)
    {
        $this->db->insert('alam_bill_basic',$Bill1BasicData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function bill1_details($Bill1InvoiceDetails)
    {
        $this->db->insert('alam_bill_items',$Bill1InvoiceDetails);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function bill1data()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('alam_bill_basic');
        return $query->result_array();
    }
    public function bill_details()
    {
        $this->db->select('*');
        $query = $this->db->get('alam_bill_items');
        return $query->result_array();
    }
    public function print_bill1_basic($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('alam_bill_basic');
        return $query->result_array();
    }
    public function print_bill1_details($value)
    {
        $this->db->select('*');
        $this->db->where('alam_bill_basic_id', $value);
        $query = $this->db->get('alam_bill_items');
        return $query->result_array();
    }
    public function print_bill1basic_delete($value)
    {
        $this->db->where('id', $value);
        $this->db->delete('alam_bill_basic');
    }
    public function print_bill1items_delete($value)
    {
        $this->db->where('alam_bill_basic_id', $value);
        $this->db->delete('alam_bill_items');
    }
    /*******************Printing Bill2*******************/
    public function bill2data()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('bill2_basic');
        return $query->result_array();
    }
    public function bill2dataDetails()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('bill2_items');
        return $query->result_array();
    }
    public function bill2_basic($Bill1BasicData)
    {
        $this->db->insert('bill2_basic',$Bill1BasicData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function bill2_details($Bill1InvoiceDetails)
    {
        $this->db->insert('bill2_items',$Bill1InvoiceDetails);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function print_bill12_basic($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('bill2_basic');
        return $query->result_array();
    }
    public function print_bill12_details($value)
    {
        $this->db->select('*');
        $this->db->where('bill2_basic_id', $value);
        $query = $this->db->get('bill2_items');
        return $query->result_array();
    }
    public function print_bill2basic_delete($value)
    {
        $this->db->where('id', $value);
        $this->db->delete('bill2_basic');
    }
    public function print_bill2items_delete($value)
    {
        $this->db->where('bill2_basic_id', $value);
        $this->db->delete('bill2_items');
    }
    /*******************Printing Bill2*******************/

    /*******************Printing Bill3*******************/
    public function bill3data()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('bill3_basic');
        return $query->result_array();
    }
    public function bill3_details_data()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('bill3_items');
        return $query->result_array();
    }
    public function bill3_basic($Bill1BasicData)
    {
        $this->db->insert('bill3_basic',$Bill1BasicData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function bill3_details($Bill1InvoiceDetails)
    {
        $this->db->insert('bill3_items',$Bill1InvoiceDetails);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function print_bill13_basic($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('bill3_basic');
        return $query->result_array();
    }
    public function print_bill13_details($value)
    {
        $this->db->select('*');
        $this->db->where('bill3_basic_id', $value);
        $query = $this->db->get('bill3_items');
        return $query->result_array();
    }
    public function print_bill3basic_delete($value)
    {
        $this->db->where('id', $value);
        $this->db->delete('bill3_basic');
    }
    public function print_bill3items_delete($value)
    {
        $this->db->where('bill3_basic_id', $value);
        $this->db->delete('bill3_items');
    }
    /*******************Printing Bill3*******************/


    /*******************Printing Bill4*******************/
    public function bill4data()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('bill4_basic');
        return $query->result_array();
    }
    public function bill4details()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('bill4_items');
        return $query->result_array();
    }
    public function bill4_basic($Bill1BasicData)
    {
        $this->db->insert('bill4_basic',$Bill1BasicData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function bill4_details($Bill1InvoiceDetails)
    {
        $this->db->insert('bill4_items',$Bill1InvoiceDetails);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function print_bill14_basic($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('bill4_basic');
        return $query->result_array();
    }
    public function print_bill14_details($value)
    {
        $this->db->select('*');
        $this->db->where('bill4_basic_id', $value);
        $query = $this->db->get('bill4_items');
        return $query->result_array();
    }
    public function print_bill4basic_delete($value)
    {
        $this->db->where('id', $value);
        $this->db->delete('bill4_basic');
    }
    public function print_bill4items_delete($value)
    {
        $this->db->where('bill4_basic_id', $value);
        $this->db->delete('bill4_items');
    }
    /*******************Printing Bill4*******************/

    /*******************Embroidery Bill1*******************/
    public function em_bill1data()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('em_bill1_basic');
        return $query->result_array();
    }
    public function em_bill1Details()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('em_bill1_items');
        return $query->result_array();
    }
    public function em_bill1_basic($Bill1BasicData)
    {
        $this->db->insert('em_bill1_basic',$Bill1BasicData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function em_bill1_details($Bill1InvoiceDetails)
    {
        $this->db->insert('em_bill1_items',$Bill1InvoiceDetails);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function print_embill11_basic($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('em_bill1_basic');
        return $query->result_array();
    }
    public function print_embill1_details($value)
    {
        $this->db->select('*');
        $this->db->where('em_bill1_basic_id', $value);
        $query = $this->db->get('em_bill1_items');
        return $query->result_array();
    }
    public function em_bill1basic_delete($value)
    {
        $this->db->where('id', $value);
        $this->db->delete('em_bill1_basic');
    }
    public function em_bill1items_delete($value)
    {
        $this->db->where('em_bill1_basic_id', $value);
        $this->db->delete('em_bill1_items');
    }
    /*******************Embroidery Bill1*******************/

    /*******************Embroidery Bill2*******************/
    public function em_bill2data()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('em_bill2_basic');
        return $query->result_array();
    }
    public function em_bill2details()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('em_bill2_items');
        return $query->result_array();
    }
    public function em_bill2_basic($Bill1BasicData)
    {
        $this->db->insert('em_bill2_basic',$Bill1BasicData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function em_bill2_details($Bill1InvoiceDetails)
    {
        $this->db->insert('em_bill2_items',$Bill1InvoiceDetails);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function print_embill2_basic($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('em_bill2_basic');
        return $query->result_array();
    }
    public function print_embill2_details($value)
    {
        $this->db->select('*');
        $this->db->where('em_bill2_basic_id', $value);
        $query = $this->db->get('em_bill2_items');
        return $query->result_array();
    }
    public function em_bill2basic_delete($value)
    {
        $this->db->where('id', $value);
        $this->db->delete('em_bill2_basic');
    }
    public function em_bill2items_delete($value)
    {
        $this->db->where('em_bill2_basic_id', $value);
        $this->db->delete('em_bill2_items');
    }
    /*******************Embroidery Bill2*******************/

    /*******************Embroidery Bill3*******************/
    public function em_bill3data()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('em_bill3_basic');
        return $query->result_array();
    }
    public function em_bill3details()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('em_bill3_items');
        return $query->result_array();
    }
    public function em_bill3_basic($Bill1BasicData)
    {
        $this->db->insert('em_bill3_basic',$Bill1BasicData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function em_bill3_details($Bill1InvoiceDetails)
    {
        $this->db->insert('em_bill3_items',$Bill1InvoiceDetails);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function print_embill3_basic($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('em_bill3_basic');
        return $query->result_array();
    }
    public function print_embill3_details($value)
    {
        $this->db->select('*');
        $this->db->where('em_bill3_basic_id', $value);
        $query = $this->db->get('em_bill3_items');
        return $query->result_array();
    }
    public function em_bill3basic_delete($value)
    {
        $this->db->where('id', $value);
        $this->db->delete('em_bill3_basic');
    }
    public function em_bill3items_delete($value)
    {
        $this->db->where('em_bill3_basic_id', $value);
        $this->db->delete('em_bill3_items');
    }
    /*******************Embroidery Bill3*******************/

    public function party_add($PartyModelData)
    {
        $this->db->insert('party',$PartyModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function user_add($UserModelData)
    {
        $this->db->insert('user_basic',$UserModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function party_data()
    {
        $this->db->select('*');
        $this->db->order_by("id", "desc");
        $query = $this->db->get('party');
        return $query->result_array();
    }
    public function user_data()
    {
        $this->db->select('*');
        $this->db->order_by("id", "desc");
        $query = $this->db->get('user_basic');
        return $query->result_array();
    }
    public function party_data_print()
    {
        $this->db->select('*');
        $this->db->where('user_type', 1);
        $query = $this->db->get('party');
        return $query->result_array();
    }
    public function party_data_printing($user_type)
    {
        $this->db->select('*');
        $this->db->order_by("id", "desc");
        $this->db->where('user_type', $user_type);
        $query = $this->db->get('party');
        return $query->result_array();
    }
    public function party_delete($value)
    {
        $this->db->where('id', $value);
        $this->db->delete('party');
    }
    public function user_delete($value)
    {
        $this->db->where('id', $value);
        $this->db->delete('user_basic');
    }
    public function party_address($PartyName)
    {
        $this->db->select('*');
        $this->db->where('party_name', $PartyName);
        $query = $this->db->get('party');
        return $query->result_array();
    }
    public function user_profile($user_id)
    {
        $this->db->select('*');
        $this->db->where('id', $user_id);
        $query = $this->db->get('user_basic');
        return $query->result_array();
    }
    public function profile_update($user_id,$username,$passwordMD5)
    {
        $this->db->where('id', $user_id);
        $this->db->set('user_name', $username);
        $this->db->set('user_password', $passwordMD5);
        $this->db->update('user_basic');
    }
}



