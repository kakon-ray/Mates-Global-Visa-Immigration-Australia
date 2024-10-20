<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 2/19/2017
 * Time: 12:31 AM
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

Class Sysadmin_model extends CI_Model
{
    public function username_check($LoginUserName)
    {
        $this->db->select('*');
        $this->db->where('user_name', $LoginUserName);
        $this->db->where('user_type', 'admin');
        $query = $this->db->get('user_basic');
        return $query->row_array();
    }
    public function company_name_check($CompanyName)
    {
        $this->db->select('*');
        $this->db->where('company_name', $CompanyName);
        $query = $this->db->get('company_basic');
        return $query->row_array();
    }
    public function add_user_basic($UserBasicModelData)
    {
        $this->db->insert('user_basic',$UserBasicModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_company($CompanyBasicModelData)
    {
        $this->db->insert('company_basic',$CompanyBasicModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function add_company_address($CompanyAddressModelData)
    {
        $this->db->insert('company_address',$CompanyAddressModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function all_company()
    {
        $this->db->select('*');
        $this->db->order_by("id","desc");
        $query = $this->db->get('company_basic');
        return $query->result_array();
    }
    public function edit_company($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('company_basic');
        return $query->result_array();
    }
    public function edit_user_basic()
    {
        $this->db->select('*');
        $query = $this->db->get('user_basic');
        return $query->result_array();
    }
    public function company_edit_set($CompanyName,$Email,$Mobile,$Phone,$Fax,$CompanyEditId,$update_logo,$date,$time)
    {
        $this->db->where('id', $CompanyEditId);
        $this->db->set('company_name', $CompanyName);
        $this->db->set('company_logo', $update_logo);
        $this->db->set('email', $Email);
        $this->db->set('fax', $Fax);
        $this->db->set('mobile', $Mobile);
        $this->db->set('phone', $Phone);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('company_basic');
    }
    public function user_basic_edit_set($LoginUserName,$md5Password,$UserBasicId)
    {
        $this->db->where('id', $UserBasicId);
        $this->db->set('user_name', $LoginUserName);
        $this->db->set('user_password', $md5Password);
        $this->db->update('user_basic');
    }
    public function all_menu_list()
    {
        $this->db->select('*');
        $this->db->order_by("id","asc");
        $query = $this->db->get('menu_categories');
        return $query->result_array();
    }
    public function edit_menu($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('menu_categories');
        return $query->result_array();
    }
    public function all_menu_list_active()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $this->db->order_by("id","asc");
        $query = $this->db->get('menu_categories');
        return $query->result_array();
    }
    public function all_sub_menu_list()
    {
        $this->db->select('*');
        $this->db->order_by("id","asc");
        $query = $this->db->get('menu_sub_categories');
        return $query->result_array();
    }
    public function menu_check($MenuName)
    {
        $this->db->select('*');
        $this->db->where('menu_name', $MenuName);
        $query = $this->db->get('menu_categories');
        return $query->row_array();
    }
    public function add_menu($MenuModelData)
    {
        $this->db->insert('menu_categories',$MenuModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function sub_menu_delete($id)
    {
        $this->db->where('menu_cat_id', $id);
        $this->db->delete('menu_sub_categories');
    }
    public function menu_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('menu_categories');
    }
    public function sub_menu_check($SubMenuName)
    {
        $this->db->select('*');
        $this->db->where('menu_sub_cat_name', $SubMenuName);
        $query = $this->db->get('menu_sub_categories');
        return $query->row_array();
    }
    public function menu_name_get($MenuId)
    {
        $this->db->select('*');
        $this->db->where('id', $MenuId);
        $query = $this->db->get('menu_categories');
        return $query->result_array();
    }
    public function total_submenu_update($MenuId,$ModifiedTotalSubMenu)
    {
        $this->db->where('id', $MenuId);
        $this->db->set('total_submenu', $ModifiedTotalSubMenu);
        $this->db->update('menu_categories');
    }
    public function add_submenu($SubMenuModelData)
    {
        $this->db->insert('menu_sub_categories',$SubMenuModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function menu_id_get($id)
    {
        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('menu_sub_categories');
        foreach($query->result_array() as $SubMenuData)
        {
            $menu_id=$SubMenuData['menu_cat_id'];
        }
        return $menu_id;
    }
    public function submenu_delete_select($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('menu_sub_categories');
    }
    public function all_menu_get()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('menu_categories');
        return $query->result_array();
    }
    public function all_sub_menu_get()
    {
        $this->db->select('*');
        $this->db->where('status', 1);
        $query = $this->db->get('menu_sub_categories');
        return $query->result_array();
    }
    public function company_basic_get($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('company_basic');
        return $query->result_array();
    }
    public function conpany_menu_check_data($company_id,$company_user_basicId)
    {
        $sql3="SELECT t1.id,t1.menu_cat_id,t1.menu_sub_cat_name,t2.user_basic_id,t2.company_basic_id,t2.menu_sub_cat_id,t2.status FROM menu_sub_categories t1
        LEFT JOIN company_privilege t2 ON t1.id = t2.menu_sub_cat_id WHERE t2.user_basic_id='$company_user_basicId' AND t2.company_basic_id='$company_id' AND t2.status='1'";
        $query3=$this->db->query($sql3);
        return $query3->result_array();
    }
    public function conpany_menu_notmatch_data($company_id,$company_user_basicId)
    {
        $sql1="SELECT t2.id,t2.user_basic_id,t2.company_basic_id,t2.menu_sub_cat_id,t2.status FROM company_privilege t2
         WHERE t2.user_basic_id='$company_user_basicId' AND t2.company_basic_id='$company_id' AND t2.status='1'";
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
    public function company_privilege_match($SubMenuId)
    {
        $this->db->select('*');
        $this->db->where('id', $SubMenuId);
        $query = $this->db->get('menu_sub_categories');
        return $query->result_array();
    }
    public function company_privilege_set($PrivilegeModelData)
    {
        $this->db->insert('company_privilege',$PrivilegeModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function company_basic_update($CompanyId)
    {
        $this->db->where('id', $CompanyId);
        $this->db->set('privilege', 'set');
        $this->db->update('company_basic');
    }
    public function menu_update($MenuName,$MenuLink,$EditMenuId,$date,$time)
    {
        $this->db->where('id', $EditMenuId);
        $this->db->set('menu_name', $MenuName);
        $this->db->set('link', $MenuLink);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('menu_categories');
    }
    public function edit_sub_menu($value)
    {
        $this->db->select('*');
        $this->db->where('id', $value);
        $query = $this->db->get('menu_sub_categories');
        return $query->result_array();
    }
    public function sub_menu_update($MenuId,$MenuName,$SubMenuName,$SubMenuLink,$EditSubMenuId,$date,$time)
    {
        $this->db->where('id', $EditSubMenuId);
        $this->db->set('menu_cat_id', $MenuId);
        $this->db->set('menu_name', $MenuName);
        $this->db->set('menu_sub_cat_name', $SubMenuName);
        $this->db->set('link', $SubMenuLink);
        $this->db->set('modified_date', $date);
        $this->db->set('modified_time', $time);
        $this->db->update('menu_sub_categories');
    }
    public function company_menu_privilege_check($CompanyUserBasicId,$CompanyId,$menu_catData)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $CompanyUserBasicId);
        $this->db->where('company_basic_id', $CompanyId);
        $this->db->where('menu_cat_id', $menu_catData);
        $query = $this->db->get('company_privilege_menu');
        return $query->row_array();
    }
    public function company_menu_privilege_set($MenuPrivilegeModelData)
    {
        $this->db->insert('company_privilege_menu',$MenuPrivilegeModelData);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
    public function unpermitted_sub_menu($CompanyUserBasicId,$UpdateSubMenuId)
    {
        $sql3="SELECT t1.id,t1.user_basic_id,t1.menu_sub_cat_id
        FROM company_privilege t1 WHERE t1.user_basic_id='$CompanyUserBasicId' AND t1.menu_sub_cat_id NOT IN (" .implode(',', $UpdateSubMenuId) .")";
        $query2=$this->db->query($sql3);
        return $query2->result_array();
    }
    public function unpermitted_previlege_update($CompanyUserBasicId,$un_permitted_sub_menu_id,$un_permitted_menu_sub_cat_id)
    {
        $this->db->where('id', $un_permitted_sub_menu_id);
        $this->db->where('user_basic_id', $CompanyUserBasicId);
        $this->db->set('status', 0);
        $this->db->update('company_privilege');
    }
    public function company_privilege_inactive_check($CompanyUserBasicId,$CompanyId,$SubMenuId)
    {
        $this->db->select('*');
        $this->db->where('user_basic_id', $CompanyUserBasicId);
        $this->db->where('company_basic_id', $CompanyId);
        $this->db->where('menu_sub_cat_id', $SubMenuId);
        $this->db->where('status', 0);
        $query = $this->db->get('company_privilege');
        return $query->row_array();
    }
    public function company_privilege_active_update($CompanyUserBasicId,$CompanyId,$SubMenuId)
    {
        $this->db->where('user_basic_id', $CompanyUserBasicId);
        $this->db->where('company_basic_id', $CompanyId);
        $this->db->where('menu_sub_cat_id', $SubMenuId);
        $this->db->set('status', 1);
        $this->db->update('company_privilege');
    }


}