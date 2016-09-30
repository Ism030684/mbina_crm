<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	var $menu_master;
	var $menu_setting;
	var $menu_event;
	var $menu_dealer;
	var $menu_dashboard;
	var $menu_newsletter;
	
	function __construct()
	{
		parent::__construct();
		$this->menu_dashboard=array('sub_menu_open_dashboard'=>"sub-menu open","active_dashboard"=>"active","icon_dashboard"=>"toggle-icon fa fa-angle-down","active_dashboard"=>"active");	
		$this->menu_master=array('sub_menu_open_master'=>"sub-menu","active_master"=>"","icon_master"=>"toggle-icon fa fa-angle-left");
		$this->menu_setting=array('sub_menu_open_setting'=>"sub-menu ","active_setting"=>"","icon_setting"=>"toggle-icon fa fa-angle-left");
		$this->menu_event=array('sub_menu_open_event'=>"sub-menu","active_event"=>"","icon_event"=>"toggle-icon fa fa-angle-left");
		$this->menu_dealer=array('sub_menu_open_dealer'=>"sub-menu","active_dealer"=>"","icon_dealer"=>"toggle-icon fa fa-angle-left");
		$this->menu_newsletter=array('sub_menu_open_newsletter'=>"sub-menu","active_newsletter"=>"","icon_newsletter"=>"toggle-icon fa fa-angle-left");
		$this->menu_marketing=array('sub_menu_open_marketing'=>"sub-menu","active_marketing"=>"","icon_marketing"=>"toggle-icon fa fa-angle-left");
		
		
		is_logged_in();
		$this->load->model(array('login_model','master_model'));

	}
	
	function index()
	{
		redirect(base_url('main/leads_tot'));
	//	echo "sss";exit;
		/*$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		
		$this->load->view('dashboard/main_page',$data);*/
	
	}
	
	function leads_by_dealer()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		$this->load->view('dashboard/v_leads_by_dealer',$data);
	}
	
	function cost_per_leads()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		$this->load->view('dashboard/v_cost_per_leads',$data);
	}
	
	function leads_tot()
	{
		
		
		//exit;
		//echo $this->session->userdata('id_users_role');exit;
		//print_r($this->menu_model->get_menu());exit;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		$data['array_data']=$this->master_model->leads_tot();
	//	$this->load->view('master/v_department',$data);
		
		$this->load->view('dashboard/v_leads_tot2',$data);
	}
	
	
}