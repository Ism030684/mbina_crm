<?php

class menu_model extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    function get_parent($kode_parent)
    {
    	$query = $this->db->query("select b.parent from t_users_role_menu a
    			left join t_menu b on b.kode=a.code_menu
    			where a.id_users_role=".$this->session->userdata('id_users_role')." and b.enabled=1 and b.parent='".$kode_parent."'");
    	
    	if ($query->num_rows() > 0)
    	{
    		foreach ($query->result() as $row)
    		{
    			return $row->parent;
    			 
    		}
    	}else{
    		return FALSE;
    	}
    }
    
    function get_menu($kode)
    {
    	$query = $this->db->query("select a.code_menu from t_users_role_menu a 
    			left join t_menu b on b.kode=a.code_menu
    			where a.id_users_role=".$this->session->userdata('id_users_role')." and b.enabled=1 and b.kode='".$kode."'");
    
    	if ($query->num_rows() > 0)
    	{
    		foreach ($query->result() as $row)
    		{
    			return $row->code_menu;
    			
    		}
    	}else{
    		return FALSE;
    	}
    
    }
    
    
    
    
}