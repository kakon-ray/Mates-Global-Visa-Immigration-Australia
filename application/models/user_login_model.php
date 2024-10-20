<?php
/**
 * Created by PhpStorm.
 * User: ashish
 * Date: 12/6/2014
 * Time: 2:32 PM
 */
Class user_login_model extends CI_Model
{
    function login($UserName, $UserPassword)
    {
        $this -> db -> select('*');
        $this -> db -> from('user_basic');
        $this -> db -> where('user_name', $UserName);
        $this -> db -> where('user_password',MD5($UserPassword));
        $this -> db -> where('status', 1);
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    public function AllUserData()
    {
        $this->db->select('*');
        $this->db->where('user_type', 'admin');
        $this->db->order_by("id","desc");
        $query = $this->db->get('log_db_user');
        return $query->result_array();
    }



}