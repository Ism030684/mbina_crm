<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	var $menu_master;
	var $menu_setting;
	var $menu_event;
	var $menu_dealer;
	var $menu_dashboard;
	var $menu_newsletter;
	
	function __construct()
	{
		parent::__construct();
		$this->menu_event=array('sub_menu_open_event'=>"sub-menu open","active_dashboard"=>"active","icon_event"=>"toggle-icon fa fa-angle-down","active_event"=>"active");	
		$this->menu_master=array('sub_menu_open_master'=>"sub-menu","active_master"=>"","icon_master"=>"toggle-icon fa fa-angle-left");
		$this->menu_setting=array('sub_menu_open_setting'=>"sub-menu ","active_setting"=>"","icon_setting"=>"toggle-icon fa fa-angle-left");
		$this->menu_dashboard=array('sub_menu_open_dashboard'=>"sub-menu","active_dashboard"=>"","icon_dashboard"=>"toggle-icon fa fa-angle-left");
		$this->menu_dealer=array('sub_menu_open_dealer'=>"sub-menu","active_dealer"=>"","icon_dealer"=>"toggle-icon fa fa-angle-left");
		$this->menu_marketing=array('sub_menu_open_marketing'=>"sub-menu","active_marketing"=>"","icon_marketing"=>"toggle-icon fa fa-angle-left");
		
		$this->menu_newsletter=array('sub_menu_open_newsletter'=>"sub-menu","active_newsletter"=>"","icon_newsletter"=>"toggle-icon fa fa-angle-left");
		
		is_logged_in();
		$this->load->model(array('login_model','event_model'));

	}
	
	function pre_event()
	{
	//	echo $this->session->userdata('group_dealer_id');exit;
	//	echo $this->session->userdata('outlet_dealer_id');exit;
		
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_marketing']=$this->menu_marketing;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['array_preevent']=$this->event_model->pre_event();
		
		$this->load->view('event/v_pre_event',$data);
	
	}
	
	function pre_event_add()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_marketing']=$this->menu_marketing;
		$data['menu_newsletter']=$this->menu_newsletter;
		
		$this->load->view('event/f_pre_event',$data);
		
		
	}
	
}