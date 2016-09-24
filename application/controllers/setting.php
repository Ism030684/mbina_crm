<?php
class Setting extends CI_Controller {

	var $menu_master;
	var $menu_setting;
	var $menu_event;
	var $menu_dashboard;
	var $menu_dealer;
	var $menu_newsletter;
	
	function __construct()
	{
		parent::__construct();
		//global var
		$this->menu_dashboard=array('sub_menu_open_dashboard'=>"sub-menu","active_dashboard"=>"","icon_dashboard"=>"toggle-icon fa fa-angle-left");
		$this->menu_master=array('sub_menu_open_master'=>"sub-menu","active_master"=>"active","icon_master"=>"toggle-icon fa fa-angle-left");
		$this->menu_setting=array('sub_menu_open_setting'=>"sub-menu open","active_setting"=>"active","icon_setting"=>"toggle-icon fa fa-angle-down");
		$this->menu_event=array('sub_menu_open_event'=>"sub-menu","active_event"=>"","icon_event"=>"toggle-icon fa fa-angle-left");
		$this->menu_dealer=array('sub_menu_open_dealer'=>"sub-menu","active_dealer"=>"","icon_dealer"=>"toggle-icon fa fa-angle-left");
		$this->menu_newsletter=array('sub_menu_open_newsletter'=>"sub-menu","active_newsletter"=>"","icon_newsletter"=>"toggle-icon fa fa-angle-left");
		$this->menu_marketing=array('sub_menu_open_marketing'=>"sub-menu","active_marketing"=>"","icon_marketing"=>"toggle-icon fa fa-angle-left");
		
		
		is_logged_in();
		$this->load->model(array('login_model','setting_model','menu_model','master_model'));
		$this->load->library('form_validation','upload');
		$this->load->helper('string');

	}
	
	
	
	
	function role()
	{
		
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['role_position']=$this->setting_model->role();
		$data['menu_marketing']=$this->menu_marketing;
		
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['faction']=base_url('setting/role_add');
		
		
		//$data['array_data']=$this->setting_model->salesman();
		$this->load->view('setting/v_role',$data);
	}
	
	function role_add()
	{
		//echo $this->input->post('mst_p_1');exit;
		$id_users_role=$this->uri->segment(3);
		$id_menu=$this->uri->segment(4);
	
		$this->db->where('code_menu', $id_menu);
		$this->db->where('id_users_role', $id_users_role);
		$this->db->delete('t_users_role_menu');
		
			$data = array(
					'id_users_role' => $id_users_role,
					'code_menu' => $id_menu,
					'status'=>'1'
			);
			
			$this->db->insert('t_users_role_menu', $data);
		
	}
	
	function group_dealer()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$param=base64_decode('MTIz');
		//$param=base64_decode($this->uri->segment(3));
		//MTIz
		$data['menu_marketing']=$this->menu_marketing;
		
		$data['dealer_name']= $this->setting_model->get_group_dealer($param);
		$data['users_salesman']=$this->master_model->get_user_per_role('4');
		$data['users_supervisor']=$this->master_model->get_user_per_role('5');
		$data['users_manager']=$this->master_model->get_user_per_role('3');
		
		//$users_manager
		//$users_supervisor
		$data['array_data']=$this->master_model->group_dealer();
		$this->load->view('setting/v_group_dealer2',$data);
		
	}
	
	function setting_group_dealer()
	{
		$param=base64_decode($this->uri->segment(3));
		$data['dealer_name']= $this->setting_model->get_group_dealer($param);
		$data['users_manager']= $this->setting_model->get_users('where id_users_role=3');//3 manager
		$data['users_supervisor']= $this->setting_model->get_users('where id_users_role=5');//3 supervisor
		$data['users_salesman']= $this->setting_model->get_users('where id_users_role=4');//4 salesman
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		//$data['array_data']=$this->setting_model->salesman();
		$this->load->view('setting/f_setting_group_dealer',$data);
	}
	
	function outlet()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['array_data']=$this->master_model->group_dealer();
		$this->load->view('setting/v_outlet',$data);
	}
	
	function view_outlet_dealer()
	{
		
		$param=base64_decode($this->uri->segment(3));
		$data['array_data']= $this->setting_model->get_outlet($param);
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$this->load->view('setting/v_detail_outlet',$data);
		
	}
	
	function setting_outlet()
	{
		$param=base64_decode($this->uri->segment(3));
		$data['outlet_name']= $this->setting_model->get_outlet_name($param);
		$data['users_manager']= $this->setting_model->get_users('where id_users_role=3');//3 manager
		$data['users_supervisor']= $this->setting_model->get_users('where id_users_role=5');//3 supervisor
		$data['users_salesman']= $this->setting_model->get_users('where id_users_role=4');//4 salesman
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		//$data['array_data']=$this->setting_model->salesman();
		$this->load->view('setting/f_setting_outlet',$data);
		
	}
	
	function brochure()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['array_brochure']=$this->setting_model->get_brochure();
		$data['menu_marketing']=$this->menu_marketing;
		
		$this->load->view('setting/v_brochure',$data);
	}
	
	function add_brochure()
	{
		//echo random_string('numeric', 10);exit;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
	
		$this->load->view('setting/f_brochure',$data);
	}
	
	
	function brochure_delete()
	{
		$this->db->delete('t_set_brochure', array('id' => $this->input->post('id')));
		$this->session->set_flashdata('msg_success', 'Data have been Delete');
		redirect(base_url('setting/brochure'));
	}
	
	
	function add_proses_brochure()
	{
	
		if (move_uploaded_file($_FILES['file']['tmp_name'], './brochure/'.$this->input->post('brochure_id').$_FILES['file']['name']))
					{
			$data = array(
					'type' => $this->input->post('type'),
					'brochure_id' => $this->input->post('brochure_id'),
					'note' => $this->input->post('note'),
					'file' => $this->input->post('brochure_id').$_FILES['file']['name']
			);
		
			$this->db->insert('t_set_brochure', $data);
					}
					
					redirect(base_url('setting/brochure'));
	}
	
	
	function vehicle()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['vehicle_array']=$this->setting_model->get_vehicle();
		$data['menu_marketing']=$this->menu_marketing;
		
		$this->load->view('setting/v_vehicle',$data);
	}
	
	function add_vehicle()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$this->load->view('setting/f_vehicle',$data);
	}
	
	function add_process_vehicle()
	{
		
		if (move_uploaded_file($_FILES['file2']['tmp_name'], './vehicle/'.$this->input->post('vehicle_id')."_".$_FILES['file2']['name']))
		{
			$data = array(
					'vehicle_id' =>$this->input->post('vehicle_id') ,
					'vehicle_type' => $this->input->post('vehicle_type'),
					'price' => $this->input->post('price'),
					'year' => $this->input->post('year'),
					'brochure'=>$this->input->post('brochure'),
					'images'=>$this->input->post('vehicle_id')."_".$_FILES['file2']['name']
			);
		
			$this->db->insert('t_set_vehicle', $data);
			
				foreach ($this->input->post('vehicle_colour') as $val){
						$data2 = array(
								'vehicle_id' =>$this->input->post('vehicle_id') ,
								'vehicle_colour_id' => $val
						);
					$this->db->insert('t_set_vehicle_detil', $data2);
				}
		}
		
		redirect(base_url('setting/vehicle'));
	}
	
	function vehicle_delete()
	{
		$this->db->delete('t_set_vehicle', array('id' => $this->input->post('id')));
		$this->session->set_flashdata('msg_success', 'Data have been Delete');
		redirect(base_url('setting/vehicle'));
	}
	
	
}