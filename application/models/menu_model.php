<?php

class menu_model extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    
    function get_menu_active($mod_active)
    {
    	if($mod_active=="master")
    	{
			$data['menu_master']=array('sub_menu_open_master'=>"sub-menu open","active_master"=>"active","icon_master"=>"toggle-icon fa fa-angle-down","active_users"=>"active");
			$data['menu_setting']=array('sub_menu_open_setting'=>"sub-menu ","active_setting"=>"","icon_setting"=>"toggle-icon fa fa-angle-left");
				
    	}else if ($mod_active=="setting"){
    		$data['menu_master']=array('sub_menu_open_master'=>"sub-menu","active_master"=>"active","icon_master"=>"toggle-icon fa fa-angle-left");
			$data['menu_setting']=array('sub_menu_open_setting'=>"sub-menu open","active_setting"=>"active","icon_setting"=>"toggle-icon fa fa-angle-down");
		
    	}
    	return $data;
    }
    
    
    
}