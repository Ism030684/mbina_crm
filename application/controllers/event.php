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
		
		if (base64_decode($this->uri->segment(3))<>"")
		{
			//echo base64_decode($this->uri->segment(3));exit;
			$query = $this->db->query("select * from t_event_pre where id=".base64_decode($this->uri->segment(3))."");
			
			foreach ($query->result() as $row)
			{
				$data['description']= $row->description;
				$data['location']= $row->location;
				$data['detail_location']= $row->detail_location;
				$data['city']= $row->city;
				$data['year']= $row->year;
				$data['activity']= $row->activity;
				$data['month']= $row->month;
				$data['date']= $row->date;
				$data['submission_date']=$row->submission_date;
				$data['budget']= $row->budget;
				$data['display_1']= $row->display_1;
				$data['display_2']= $row->display_2;
				$data['display_3']= $row->display_3;
				$data['display_4']= $row->display_4;
				$data['id']= $row->id;
				
			}
			//echo "edit";exit;
		}else{
			$data['description']="";
			$data['location']= "";
			$data['detail_location']= "";
			$data['city']="";
			$data['year']= "";
			$data['activity']="";
			$data['month']="";
			$data['date']= "";
			$data['submission_date']="";
			$data['budget']="";
			$data['display_1']= "";
			$data['display_2']= "";
			$data['display_3']= "";
			$data['display_4']="";
			$data['id']="";
		}
		$this->load->view('event/f_pre_event',$data);
	
	}
	
	function add_pre_event()
	{
		//echo $this->input->post('detail_location');exit;
		
		if ($this->input->post('id')==""){
		$data = array(
				'dealer_id' => $this->session->userdata('dealer_id') ,
				'dealer_area' => $this->session->userdata('dealer_area') ,
				'item' => $this->input->post('item'),
				'dealer'=>$this->session->userdata('dealer_name'),
				'activity'=>$this->input->post('activity'),
				'description' =>$this->input->post('description'),
				'location' =>$this->input->post('location'),
				'detail_location' => $this->input->post('detail_location'),
				'city'=>$this->input->post('city'),
				'year' =>$this->input->post('year'),
				'month' =>$this->input->post('month'),
				'date' =>$this->input->post('date'),
				'display_1' =>$this->input->post('display_1'),
				'display_2' =>$this->input->post('display_2'),
				'display_3' =>$this->input->post('display_3'),
				'display_4' =>$this->input->post('display_4'),
				'target' =>$this->input->post('target'),
				'budget'=>$this->input->post('budget'),
				'submission_date'=>$this->input->post('submission_date'),
				
		);
		
		$this->db->insert('t_event_pre', $data);
		
		$data = array(
				'year' => $this->input->post('year'),
				'dealer_name' => $this->session->userdata('dealer_name'),
				'budget' => $this->input->post('budget')
		);
		
		$this->db->insert('t_event_pre_list', $data);
		}else{
			
				$data = array(
				'dealer_id' => $this->session->userdata('dealer_id') ,
				'dealer_area' => $this->session->userdata('dealer_area') ,
				'item' => $this->input->post('item'),
				'dealer'=>$this->session->userdata('dealer_name'),
				'activity'=>$this->input->post('activity'),
				'description' =>$this->input->post('description'),
				'location' =>$this->input->post('location'),
				'detail_location' => $this->input->post('detail_location'),
				'city'=>$this->input->post('city'),
				'year' =>$this->input->post('year'),
				'month' =>$this->input->post('month'),
				'date' =>$this->input->post('date'),
				'display_1' =>$this->input->post('display_1'),
				'display_2' =>$this->input->post('display_2'),
				'display_3' =>$this->input->post('display_3'),
				'display_4' =>$this->input->post('display_4'),
				'target' =>$this->input->post('target'),
				'budget'=>$this->input->post('budget'),
				'submission_date'=>$this->input->post('submission_date'),
				
				);
		
			
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('t_event_pre', $data);
			
			
		}
		
		redirect(base_url('event/pre_event'));
	}
	
	function pdf()
	{
		
		$this->load->library('Pdf');
		
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->SetTitle('My Title');
		$pdf->SetHeaderMargin(30);
		$pdf->SetTopMargin(20);
		$pdf->setFooterMargin(20);
		$pdf->SetAutoPageBreak(true);
		$pdf->SetAuthor('Author');
		$pdf->SetDisplayMode('real', 'default');
		
		$pdf->Write(5, 'Some sample text');
		$pdf->Output('My-File-Name.pdf', 'I');
	}
	
	function pre_event_delete()
	{
		$this->db->delete('t_event_pre_list', array('id' => $this->input->post('id')));
		$this->session->set_flashdata('msg_success', 'Data have been Delete');
		redirect(base_url('event/pre_event'));
	}
	
}