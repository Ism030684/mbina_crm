<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class newsletter extends CI_Controller {

	var $menu_master;
	var $menu_setting;
	var $menu_event;
	var $menu_dealer;
	var $menu_dashboard;
	var $menu_newsletter;
	
	function __construct()
	{
		parent::__construct();
		$this->menu_event=array('sub_menu_open_event'=>"sub-menu ","active_dashboard"=>"","icon_event"=>"toggle-icon fa fa-angle-left","active_event"=>"");	
		$this->menu_master=array('sub_menu_open_master'=>"sub-menu","active_master"=>"","icon_master"=>"toggle-icon fa fa-angle-left");
		$this->menu_setting=array('sub_menu_open_setting'=>"sub-menu ","active_setting"=>"","icon_setting"=>"toggle-icon fa fa-angle-left");
		$this->menu_dashboard=array('sub_menu_open_dashboard'=>"sub-menu","active_dashboard"=>"","icon_dashboard"=>"toggle-icon fa fa-angle-left");
		$this->menu_dealer=array('sub_menu_open_dealer'=>"sub-menu","active_dealer"=>"","icon_dealer"=>"toggle-icon fa fa-angle-left");
		$this->menu_newsletter=array('sub_menu_open_newsletter'=>"sub-menu open","active_newsletter"=>"active","icon_newsletter"=>"toggle-icon fa fa-angle-down");
		$this->menu_marketing=array('sub_menu_open_marketing'=>"sub-menu","active_marketing"=>"","icon_marketing"=>"toggle-icon fa fa-angle-left");
		
		is_logged_in();
		$this->load->model(array('login_model','newsletter_model'));

	}
	
	function mail_broadcast()
	{
	//	echo "sss";exit;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		$this->load->view('newsletter/v_mail_broadcast',$data);
	
	}
	
	function compose()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		$this->load->view('newsletter/v_mail_compose',$data);
		
	}
	
	
	
	function sms_broadcast()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		//$this->newsletter_model->send_sms('0817212162');
		//$this->newsletter_model->send_sms('087777479776');
		//$this->newsletter_model->send_sms('085780900282');
		
		$this->load->view('newsletter/v_sms',$data);
	
	}
	
	function new_sms()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		$this->load->view('newsletter/f_sms',$data);
	}
	
	function send_sms()
	{
		
		echo $this->input->post('no_hp');
	}
	
	
	
	
}