<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master extends CI_Controller {

	var $menu_master;
	var $menu_setting;
	var $menu_event;
	var $menu_dealer;
	var $menu_dashboard;
	var $menu_newsletter;
	
	function __construct()
	{
		parent::__construct();
               
		$this->menu_dashboard=array('sub_menu_open_dashboard'=>"sub-menu","active_dashboard"=>"","icon_dashboard"=>"toggle-icon fa fa-angle-left");
		$this->menu_master=array('sub_menu_open_master'=>"sub-menu open","active_master"=>"active","icon_master"=>"toggle-icon fa fa-angle-down","active_users"=>"active");
		$this->menu_setting=array('sub_menu_open_setting'=>"sub-menu","active_setting"=>"","icon_setting"=>"toggle-icon fa fa-angle-left");
		$this->menu_event=array('sub_menu_open_event'=>"sub-menu","active_event"=>"","icon_event"=>"toggle-icon fa fa-angle-left");
		$this->menu_dealer=array('sub_menu_open_dealer'=>"sub-menu","active_dealer"=>"","icon_dealer"=>"toggle-icon fa fa-angle-left");
		$this->menu_newsletter=array('sub_menu_open_newsletter'=>"sub-menu","active_newsletter"=>"","icon_newsletter"=>"toggle-icon fa fa-angle-left");
		$this->menu_marketing=array('sub_menu_open_marketing'=>"sub-menu","active_marketing"=>"","icon_marketing"=>"toggle-icon fa fa-angle-left");
		
		is_logged_in();
		$this->load->model(array('login_model','master_model','menu_model'));
		$this->load->library('form_validation','upload');
		$this->load->library('');
		
	}
	
	//users dealer
	function users()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['array_users']=$this->master_model->users_dealer();
		$this->load->view('master/v_users',$data);
	}
	
	function users_add()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['faction']=base_url('master/users_add_process');
		$data['cmb_dept']=$this->master_model->get_department();
		$data['cmb_role']=$this->master_model->get_role();
		$data['cmb_position']=$this->master_model->get_position();
		$data['cmb_group_dealer']=$this->master_model->group_dealer();
		$data['cmb_outlet']=$this->master_model->outlet();
		
		
		
		if(base64_decode($this->uri->segment(3))<>"")
			{
			//only update
				$strParam=base64_decode($this->uri->segment(3));
				if($strParam && $get = $this->master_model->get($strParam,'t_users')) {
						$data['dt']['id'] = $get->id;
						$data['dt']['first_name'] = $get->first_name;
						$data['dt']['id_users'] = $get->id_users; 
						$data['dt']['id_users_role'] = $get->id_users_role;
						$data['dt']['last_name'] = $get->last_name;
						$data['dt']['group_dealer_id'] = $get->group_dealer_id;
						$data['dt']['outlet_dealer_id'] = $get->outlet_dealer_id;
						$data['dt']['id_department'] = $get->id_department;
						$data['dt']['id_position'] = $get->id_position;
						$data['dt']['email'] = $get->email;
						$data['dt']['mobile_phone_1'] = $get->mobile_phone_1;
						$data['dt']['mobile_phone_2'] = $get->mobile_phone_2;
						$data['dt']['username'] = $get->username;
						$data['dt']['password'] = $get->password;
						$data['dt']['outlet_dealer_id']=$get->outlet_dealer_id;
					}else {
							show_404();
						} 
				
			}else{
					//declare new insert
					$data['dt']['id'] = '';
					$data['dt']['id_users'] ='';
					$data['dt']['first_name'] ='';
					$data['dt']['id_users_role'] = '';
					$data['dt']['last_name'] = '';
					$data['dt']['group_dealer_id'] = '';
					$data['dt']['id_department'] ='';
					$data['dt']['id_position'] ='';
					$data['dt']['outlet_dealer_id'] ='';
					$data['dt']['email'] = '';
					$data['dt']['mobile_phone_1'] = '';
					$data['dt']['mobile_phone_2'] = '';
					$data['dt']['username'] ='';
					$data['dt']['password'] ='';
					$data['dt']['outlet_dealer_id']='';
			}
		
		$this->load->view('master/f_users',$data);
	}
	
	
	
	function users_add_process()
	{
		$data['faction']=base_url('master/users_add_process');
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;	
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['cmb_dept']=$this->master_model->get_department();
		$data['cmb_position']=$this->master_model->get_position();
		$data['cmb_role']=$this->master_model->get_role();
		$data['cmb_group_dealer']=$this->master_model->group_dealer();
		$data['cmb_outlet']=$this->master_model->outlet();
		
		//$this->form_validation->set_rules('id_users', 'User ID', 'required|numeric');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		//$this->form_validation->set_rules('group_dealer_id', 'Group Dealer', 'required');
		$this->form_validation->set_rules('mobile_phone_1', 'Mobile Phone 1', 'required|numeric|min_length[10]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'required');
		//$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]|matches[passconf]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]');
		
		//$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		
		//upload
			$name = date('d_M_Y')."_".$this->input->post('id_users')."_";
	
	
		
		
		if ($this->form_validation->run() == TRUE) {
					
			if($this->input->post('id')=="")
			{
				//insert
				if (move_uploaded_file($_FILES['file1']['tmp_name'], './photo/'.$name.$_FILES['file1']['name']))
					{
							$data = array(
									//'id_users' => $this->input->post('id_users'),
									'first_name' => $this->input->post('first_name'),
									'last_name' => $this->input->post('last_name'),
									//'group_dealer_id' => $this->input->post('group_dealer_id'),
									'outlet_dealer_id' => $this->input->post('outlet_dealer_id'),
									//'id_department' => $this->input->post('id_department'),
									'id_position' => $this->input->post('id_position'),
									'email' => $this->input->post('email'),
									'mobile_phone_1' => $this->input->post('mobile_phone_1'),
									'mobile_phone_2' => $this->input->post('mobile_phone_2'),
									'username' => ($this->input->post('username')),
									'password' => ($this->input->post('password')),
									'photo'=>$name.$_FILES['file1']['name'],
									'is_mbina'=>0,
									'id_users_role' => $this->input->post('id_users_role')
								);
					}else{
							$data = array(
								//'id_users' => $this->input->post('id_users'),
								//'name' => $this->input->post('name'),
								'first_name' => $this->input->post('first_name'),
								'last_name' => $this->input->post('last_name'),
								//'group_dealer_id' => $this->input->post('group_dealer_id'),
								'outlet_dealer_id' => $this->input->post('outlet_dealer_id'),
								//'id_department' => $this->input->post('id_department'),
								'id_position' => $this->input->post('id_position'),
								'email' => $this->input->post('email'),
								'mobile_phone_1' => $this->input->post('mobile_phone_1'),
								'mobile_phone_2' => $this->input->post('mobile_phone_2'),
								'password' => ($this->input->post('password')),
								'username' => ($this->input->post('username')),
								'is_mbina'=>0,
								'id_users_role' => $this->input->post('id_users_role')
						);
					}
					
				$this->db->insert('t_users', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Save');
				redirect(base_url('master/users'));
				
			}else{
				//update
				$data = array(
						//'id_users' => $this->input->post('id_users'),
						//'name' => $this->input->post('name'),
						'first_name' => $this->input->post('first_name'),
						'last_name' => $this->input->post('last_name'),
						//'group_dealer_id' => $this->input->post('group_dealer_id'),
						'outlet_dealer_id' => $this->input->post('outlet_dealer_id'),
						//'id_department' => $this->input->post('id_department'),
						'id_position' => $this->input->post('id_position'),
						'email' => $this->input->post('email'),
						'mobile_phone_1' => $this->input->post('mobile_phone_1'),
						'mobile_phone_2' => $this->input->post('mobile_phone_2'),
						'username' => ($this->input->post('username')),
						'password' => ($this->input->post('password')),
						'id_users_role' => $this->input->post('id_users_role')
				);
					
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('t_users', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Update');
				redirect(base_url('master/users'));
			}
			
		}else{
				//untuk ambil nilai default
				$data['dt']['id'] = $this->input->post('id');
				//$data['dt']['id_users'] =$this->input->post('id_users');
				$data['dt']['first_name'] =$this->input->post('first_name');
				$data['dt']['last_name'] =$this->input->post('last_name');
				$data['dt']['id_users_role'] = $this->input->post('id_users_role');
				//$data['dt']['name'] = $this->input->post('name');
				$data['dt']['group_dealer_id'] =$this->input->post('group_dealer_id');
				$data['dt']['outlet_dealer_id'] =$this->input->post('outlet_dealer_id');
				$data['dt']['id_department'] =$this->input->post('id_department');
				$data['dt']['email'] = $this->input->post('email');
				$data['dt']['mobile_phone_1'] = $this->input->post('mobile_phone_1');
				$data['dt']['mobile_phone_2'] = $this->input->post('mobile_phone_2');
				$data['dt']['username'] =$this->input->post('username');
				$data['dt']['password'] =$this->input->post('password');
				$this->load->view('master/f_users',$data);
			}
		
	}
	
	
	function users_delete()
	{
		//echo $this->input->post('id');exit;
		$this->db->delete('t_users', array('id' => $this->input->post('id')));
		$this->session->set_flashdata('msg_success', 'Data have been Delete');
		redirect(base_url('master/users'));
	}
	
	
	//users Mbina
	function users_mbina()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
	
	
		$data['array_users']=$this->master_model->users_mbina();
		$this->load->view('master/v_users_mbina',$data);
	}
	
	function users_mbina_add()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
	
	
		$data['faction']=base_url('master/users_mbina_add_process');
		$data['cmb_dept']=$this->master_model->get_department();
		$data['cmb_role']=$this->master_model->get_role();
		$data['cmb_position']=$this->master_model->get_position();
		$data['cmb_group_dealer']=$this->master_model->group_dealer();
		$data['cmb_outlet']=$this->master_model->outlet();
	
	
	
		if(base64_decode($this->uri->segment(3))<>"")
		{
			//only update
			$strParam=base64_decode($this->uri->segment(3));
			if($strParam && $get = $this->master_model->get($strParam,'t_users')) {
				$data['dt']['id'] = $get->id;
				$data['dt']['first_name'] = $get->first_name;
				$data['dt']['id_users'] = $get->id_users;
				$data['dt']['id_users_role'] = $get->id_users_role;
				$data['dt']['last_name'] = $get->last_name;
				$data['dt']['group_dealer_id'] = $get->group_dealer_id;
				$data['dt']['outlet_dealer_id'] = $get->outlet_dealer_id;
				$data['dt']['id_department'] = $get->id_department;
				$data['dt']['id_position'] = $get->id_position;
				$data['dt']['email'] = $get->email;
				$data['dt']['mobile_phone_1'] = $get->mobile_phone_1;
				$data['dt']['mobile_phone_2'] = $get->mobile_phone_2;
				$data['dt']['username'] = $get->username;
				$data['dt']['password'] = $get->password;
				$data['dt']['outlet_dealer_id']=$get->outlet_dealer_id;
			}else {
				show_404();
			}
	
		}else{
			//declare new insert
			$data['dt']['id'] = '';
			$data['dt']['id_users'] ='';
			$data['dt']['first_name'] ='';
			$data['dt']['id_users_role'] = '';
			$data['dt']['last_name'] = '';
			$data['dt']['group_dealer_id'] = '';
			$data['dt']['id_department'] ='';
			$data['dt']['id_position'] ='';
			$data['dt']['outlet_dealer_id'] ='';
			$data['dt']['email'] = '';
			$data['dt']['mobile_phone_1'] = '';
			$data['dt']['mobile_phone_2'] = '';
			$data['dt']['username'] ='';
			$data['dt']['password'] ='';
			$data['dt']['outlet_dealer_id']='';
		}
	
		$this->load->view('master/f_users_mbina',$data);
	}
	
	
	
	function users_mbina_add_process()
	{
		$data['faction']=base_url('master/users_mbina_add_process');
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
	
	
		$data['cmb_dept']=$this->master_model->get_department();
		$data['cmb_position']=$this->master_model->get_position();
		$data['cmb_role']=$this->master_model->get_role();
		$data['cmb_group_dealer']=$this->master_model->group_dealer();
		$data['cmb_outlet']=$this->master_model->outlet();
	
		//$this->form_validation->set_rules('id_users', 'User ID', 'required|numeric');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		//$this->form_validation->set_rules('group_dealer_id', 'Group Dealer', 'required');
		$this->form_validation->set_rules('mobile_phone_1', 'Mobile Phone 1', 'required|numeric|min_length[10]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'required');
		//$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]|matches[passconf]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]');
	
		//$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
	
		//upload
		$name = date('d_M_Y')."_".$this->input->post('id_users')."_";
	
	
	
	
		if ($this->form_validation->run() == TRUE) {
				
			if($this->input->post('id')=="")
			{
				//insert
				if (move_uploaded_file($_FILES['file1']['tmp_name'], './photo/'.$name.$_FILES['file1']['name']))
				{
					$data = array(
							//'id_users' => $this->input->post('id_users'),
							'first_name' => $this->input->post('first_name'),
							'last_name' => $this->input->post('last_name'),
							//'group_dealer_id' => $this->input->post('group_dealer_id'),
							'outlet_dealer_id' => $this->input->post('outlet_dealer_id'),
							//'id_department' => $this->input->post('id_department'),
							'id_position' => $this->input->post('id_position'),
							'email' => $this->input->post('email'),
							'mobile_phone_1' => $this->input->post('mobile_phone_1'),
							'mobile_phone_2' => $this->input->post('mobile_phone_2'),
							'username' => ($this->input->post('username')),
							'password' => ($this->input->post('password')),
							'photo'=>$name.$_FILES['file1']['name'],
							'is_mbina'=>1,
							'id_users_role' => $this->input->post('id_users_role')
					);
				}else{
					$data = array(
							//'id_users' => $this->input->post('id_users'),
							//'name' => $this->input->post('name'),
							'first_name' => $this->input->post('first_name'),
							'last_name' => $this->input->post('last_name'),
							//'group_dealer_id' => $this->input->post('group_dealer_id'),
							'outlet_dealer_id' => $this->input->post('outlet_dealer_id'),
							//'id_department' => $this->input->post('id_department'),
							'id_position' => $this->input->post('id_position'),
							'email' => $this->input->post('email'),
							'mobile_phone_1' => $this->input->post('mobile_phone_1'),
							'mobile_phone_2' => $this->input->post('mobile_phone_2'),
							'password' => ($this->input->post('password')),
							'username' => ($this->input->post('username')),
							'is_mbina'=>1,
							'id_users_role' => $this->input->post('id_users_role')
					);
				}
					
				$this->db->insert('t_users', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Save');
				redirect(base_url('master/users_mbina'));
	
			}else{
				//update
				$data = array(
						//'id_users' => $this->input->post('id_users'),
						//'name' => $this->input->post('name'),
						'first_name' => $this->input->post('first_name'),
						'last_name' => $this->input->post('last_name'),
						//'group_dealer_id' => $this->input->post('group_dealer_id'),
						'outlet_dealer_id' => $this->input->post('outlet_dealer_id'),
						//'id_department' => $this->input->post('id_department'),
						'id_position' => $this->input->post('id_position'),
						'email' => $this->input->post('email'),
						'mobile_phone_1' => $this->input->post('mobile_phone_1'),
						'mobile_phone_2' => $this->input->post('mobile_phone_2'),
						'username' => ($this->input->post('username')),
						'password' => ($this->input->post('password')),
						'id_users_role' => $this->input->post('id_users_role')
				);
					
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('t_users', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Update');
				redirect(base_url('master/users_mbina'));
			}
				
		}else{
			//untuk ambil nilai default
			$data['dt']['id'] = $this->input->post('id');
			//$data['dt']['id_users'] =$this->input->post('id_users');
			$data['dt']['first_name'] =$this->input->post('first_name');
			$data['dt']['last_name'] =$this->input->post('last_name');
			$data['dt']['id_users_role'] = $this->input->post('id_users_role');
			//$data['dt']['name'] = $this->input->post('name');
			$data['dt']['group_dealer_id'] =$this->input->post('group_dealer_id');
			$data['dt']['outlet_dealer_id'] =$this->input->post('outlet_dealer_id');
			$data['dt']['id_department'] =$this->input->post('id_department');
			$data['dt']['email'] = $this->input->post('email');
			$data['dt']['mobile_phone_1'] = $this->input->post('mobile_phone_1');
			$data['dt']['mobile_phone_2'] = $this->input->post('mobile_phone_2');
			$data['dt']['username'] =$this->input->post('username');
			$data['dt']['password'] =$this->input->post('password');
			$this->load->view('master/f_users_mbina',$data);
		}
	
	}
	
	
	//users_role AKA position
	
	function users_role()
	{
		//echo $this->uri->segment(1);exit;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['array_data']=$this->master_model->users_role();
		$this->load->view('master/v_users_role',$data);
	}
	
	function users_role_add()
	{

		
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['faction']=base_url('master/users_role_add_process');

		if(base64_decode($this->uri->segment(3))<>"")
		{
			//only update
			$strParam=base64_decode($this->uri->segment(3));
			if($strParam && $get = $this->master_model->get($strParam,'t_users_role')) {
				$data['dt']['id'] = $get->id;
				$data['dt']['id_users_role'] = $get->id_users_role;
				$data['dt']['users_role'] = $get->users_role;
				
			}else {
				show_404();
			}
		
		}else{
			//declare new insert
			$data['dt']['id'] = '';
			$data['dt']['id_users_role'] = '';
			$data['dt']['users_role'] = '';
			
		}
		
		$this->load->view('master/f_users_role',$data);
		
	}
	
	function users_role_add_process()
	{
		$data['faction']=base_url('master/users_role_add_process');
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;	
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$this->form_validation->set_rules('id_users_role', 'Position ID', 'required|numeric');
		$this->form_validation->set_rules('users_role', 'Position Name', 'required');
		
		
		if ($this->form_validation->run() == TRUE) {
				
			if($this->input->post('id')=="")
			{
				//insert
				$data = array(
						'id_users_role' => $this->input->post('id_users_role'),
						'users_role' => $this->input->post('users_role')
				);
					
				$this->db->insert('t_users_role', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Save');
				redirect(base_url('master/users_role'));
		
			}else{
				//update
		
				$data = array(
						'id_users_role' => $this->input->post('id_users_role'),
						'users_role' => $this->input->post('users_role')
				);
					
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('t_users_role', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Update');
				redirect(base_url('master/users_role'),'refresh');
			}
				
		}else{
			//untuk ambil nilai default
			$data['dt']['id'] = $this->input->post('id');
			$data['dt']['id_users_role'] = $this->input->post('id_users_role');
			$data['dt']['users_role'] = $this->input->post('users_role');
			
			$this->load->view('master/f_users_role',$data);
		}
		
	}
	
	function users_role_delete()
	{
		$this->db->delete('t_users_role', array('id' => $this->input->post('id')));
		$this->session->set_flashdata('msg_success', 'Data have been Delete');
		redirect(base_url('master/users_role'));
	}
	
	//department

	function department()
	{
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['array_data']=$this->master_model->department();
		$this->load->view('master/v_department',$data);
	}
	
	function department_add()
	{
		$data['faction']=base_url('master/department_add_process');
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		if(base64_decode($this->uri->segment(3))<>"")
		{
			//only update
			$strParam=base64_decode($this->uri->segment(3));
			if($strParam && $get = $this->master_model->get($strParam,'t_department')) {
				$data['dt']['id'] = $get->id;
				$data['dt']['id_department'] = $get->id_department;
				$data['dt']['department_name'] = $get->department_name;
	
			}else {
				show_404();
			}
	
		}else{
			//declare new insert
			$data['dt']['id'] = '';
			$data['dt']['id_department'] = '';
			$data['dt']['department_name'] = '';
				
		}
	
		$this->load->view('master/f_department',$data);
	
	}
	
	function department_add_process()
	{
		$data['faction']=base_url('master/department_add_process');
	
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$this->form_validation->set_rules('id_department', 'Department ID', 'required|numeric');
		$this->form_validation->set_rules('department_name', 'Department Name', 'required');
	
	
		if ($this->form_validation->run() == TRUE) {
	
			if($this->input->post('id')=="")
			{
				//insert
				$data = array(
						'id_department' => $this->input->post('id_department'),
						'department_name' => $this->input->post('department_name')
				);
					
				$this->db->insert('t_department', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Save');
				redirect(base_url('master/department'));
	
			}else{
				//update
				$data = array(
						'id_department' => $this->input->post('id_department'),
						'department_name' => $this->input->post('department_name')
				);
					
					
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('t_department', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Update');
				redirect(base_url('master/department'),'refresh');
			}
	
		}else{
			//untuk ambil nilai default
			$data['dt']['id'] = $this->input->post('id');
			$data['dt']['id_department'] = $this->input->post('id_department');
			$data['dt']['department_name'] = $this->input->post('department_name');
				
			$this->load->view('master/f_department',$data);
		}
	
	}
	
	function department_delete()
	{
		$this->db->delete('t_department', array('id' => $this->input->post('id')));
		$this->session->set_flashdata('msg_success', 'Data have been Delete');
		redirect(base_url('master/department'));
	}
	
	//position
	//department
	
	function position()
	{
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
	
	
		$data['array_data']=$this->master_model->position();
		$this->load->view('master/v_position',$data);
	}
	
	function position_add()
	{
		$data['faction']=base_url('master/position_add_process');
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
	
	
		if(base64_decode($this->uri->segment(3))<>"")
		{
			//only update
			$strParam=base64_decode($this->uri->segment(3));
			if($strParam && $get = $this->master_model->get($strParam,'t_position')) {
				$data['dt']['id'] = $get->id;
				$data['dt']['id_position'] = $get->id_position;
				$data['dt']['position_name'] = $get->position_name;
	
			}else {
				show_404();
			}
	
		}else{
			//declare new insert
			$data['dt']['id'] = '';
			$data['dt']['id_position'] =random_string('numeric', 4);
			$data['dt']['position_name'] = '';
	
		}
	
		$this->load->view('master/f_position',$data);
	
	}
	
	function position_add_process()
	{
		$data['faction']=base_url('master/position_add_process');
	
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
	
	
		$this->form_validation->set_rules('id_position', 'Position ID', 'required|numeric');
		$this->form_validation->set_rules('position_name', 'Position Name', 'required');
	
	
		if ($this->form_validation->run() == TRUE) {
	
			if($this->input->post('id')=="")
			{
				//insert
				$data = array(
						'id_position' => $this->input->post('id_position'),
						'position_name' => $this->input->post('position_name')
				);
					
				$this->db->insert('t_position', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Save');
				redirect(base_url('master/position'));
	
			}else{
				//update
				$data = array(
						'id_position' => $this->input->post('id_position'),
						'position_name' => $this->input->post('position_name')
				);
					
					
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('t_position', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Update');
				redirect(base_url('master/position'),'refresh');
			}
	
		}else{
			//untuk ambil nilai default
			$data['dt']['id'] = $this->input->post('id');
			$data['dt']['id_position'] = $this->input->post('id_position');
			$data['dt']['position_name'] = $this->input->post('position_name');
	
			$this->load->view('master/f_position',$data);
		}
	
	}
	
	function position_delete()
	{
		$this->db->delete('t_position', array('id' => $this->input->post('id')));
		$this->session->set_flashdata('msg_success', 'Data have been Delete');
		redirect(base_url('master/position'));
	}
	
	//group_dealer

	function group_dealer()
	{
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['array_data']=$this->master_model->group_dealer();
		$this->load->view('master/v_group_dealer',$data);
	}
	
	function group_dealer_add()
	{
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['faction']=base_url('master/group_dealer_add_process');
		$this->load->library('googlemaps');
		$config['center'] = '37.4419, -122.1419';
		$config['zoom'] = '13';
		$this->googlemaps->initialize($config);
		
		$marker = array();
		$marker['position'] = '37.429, -122.1519';
		$marker['infowindow_content'] = '1 - Hello World!';
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
		$this->googlemaps->add_marker($marker);
		
		$data['map'] = $this->googlemaps->create_map();
		
	
		if(base64_decode($this->uri->segment(3))<>"")
		{
			//only update
			$strParam=base64_decode($this->uri->segment(3));
			if($strParam && $get = $this->master_model->get($strParam,'t_group_dealer')) {
				$data['dt']['id'] = $get->id;
				$data['dt']['group_dealer_id'] = $get->group_dealer_id;
				$data['dt']['group_dealer'] = $get->group_dealer;
				$data['dt']['address'] = $get->address;
				$data['dt']['contact'] = $get->contact;
				$data['dt']['website'] = $get->website;
				$data['dt']['email'] = $get->email;
	
			}else {
				show_404();
			}
	
		}else{
			 //declare new insert
				$data['dt']['id']='';
				$data['dt']['group_dealer_id'] = '';
				$data['dt']['group_dealer'] ='';
				$data['dt']['address'] = '';
				$data['dt']['contact'] = '';
				$data['dt']['website'] = '';
				$data['dt']['email'] = '';
	
		}
	
		$this->load->view('master/f_group_dealer',$data);
	
	}
	
	function group_dealer_add_process()
	{
		$data['faction']=base_url('master/group_dealer_add_process');
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$this->form_validation->set_rules('group_dealer_id', 'Group Dealer ID', 'required|numeric');
		$this->form_validation->set_rules('group_dealer', 'Group Dealer Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('contact', 'Contact Number', 'required');
		
	
		if ($this->form_validation->run() == TRUE) {
	
			if($this->input->post('id')=="")
			{
				//insert
				$data = array(
						'group_dealer_id' => $this->input->post('group_dealer_id'),
						'group_dealer' => $this->input->post('group_dealer'),
						'address' => $this->input->post('address'),
						'contact' => $this->input->post('contact'),
						'website' => $this->input->post('website'),
						'email' => $this->input->post('email'),
						
				);
					
				$this->db->insert('t_group_dealer', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Save');
				redirect(base_url('master/group_dealer'));
	
			}else{
				//update
				$data = array(
						'group_dealer_id' => $this->input->post('group_dealer_id'),
						'group_dealer' => $this->input->post('group_dealer'),
						'address' => $this->input->post('address'),
						'contact' => $this->input->post('contact'),
						'website' => $this->input->post('website'),
						'email' => $this->input->post('email'),
						
				);
					
					
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('t_group_dealer', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Update');
				redirect(base_url('master/group_dealer'),'refresh');
			}
	
		}else{
			//untuk ambil nilai default
			$data['dt']['id'] = $this->input->post('id');
			$data['dt']['group_dealer_id'] = $this->input->post('group_dealer_id');
			$data['dt']['group_dealer'] = $this->input->post('group_dealer');
			$data['dt']['address'] = $this->input->post('address');
			$data['dt']['contact'] = $this->input->post('contact');
			$data['dt']['website'] = $this->input->post('website');
			$data['dt']['email'] = $this->input->post('email');
				
			$this->load->view('master/f_group_dealer',$data);
		}
	
	}
	
	
	function group_dealer_delete()
	{
		$this->db->delete('t_group_dealer', array('id' => $this->input->post('id')));
		$this->session->set_flashdata('msg_success', 'Data have been Delete');
		redirect(base_url('master/group_dealer'));
	}
	
	//outlet
	

	function outlet()
	{
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		$data['array_data']=$this->master_model->outlet();
		$this->load->view('master/v_outlet',$data);
	}
	
	function outlet_add()
	{
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['faction']=base_url('master/outlet_add_process');
		$data['cmb_group_dealer']=$this->master_model->group_dealer();
		
		if(base64_decode($this->uri->segment(3))<>"")
		{
			//only update
			$strParam=base64_decode($this->uri->segment(3));
			if($strParam && $get = $this->master_model->get($strParam,'t_outlet_dealer')) {
				$data['dt']['id'] = $get->id;
				$data['dt']['outlet_id'] = $get->outlet_id;
				//$data['dt']['group_dealer_id'] = $get->group_dealer_id;
				$data['dt']['outlet'] = $get->outlet;
				$data['dt']['address'] = $get->address;
				$data['dt']['contact'] = $get->contact;
				$data['dt']['sign_prepared_by'] = $get->sign_prepared_by;
				$data['dt']['sign_acknowledged_by'] = $get->sign_acknowledged_by;
				
			}else {
				show_404();
			}
	
		}else{
			//declare new insert
			$data['dt']['id']='';
			$data['dt']['outlet_id'] = random_string('numeric', 4);
			//$data['dt']['group_dealer_id'] ='';
			$data['dt']['outlet'] = '';
			$data['dt']['address'] = '';
			$data['dt']['contact'] = '';
			$data['dt']['sign_prepared_by']='';
			$data['dt']['sign_acknowledged_by']='';
	
		}
	
		$this->load->view('master/f_outlet',$data);
	
	}
	
	function outlet_add_process()
	{
		$data['faction']=base_url('master/group_dealer_add_process');
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$this->form_validation->set_rules('outlet_id', 'Outlet ID', 'required|numeric');
		//$this->form_validation->set_rules('group_dealer_id', 'Group Dealer ID', 'required');
		$this->form_validation->set_rules('outlet', 'Outlet Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('contact', 'Contact Number', 'required');
		$this->form_validation->set_rules('sign_prepared_by', 'Prepared by ', 'required');
		$this->form_validation->set_rules('sign_acknowledged_by', 'Acknowledged by  ', 'required');
		
		if ($this->form_validation->run() == TRUE) {
	
			if($this->input->post('id')=="")
			{
				//insert
				$data = array(
						'outlet_id' => $this->input->post('outlet_id'),
						'group_dealer_id' => $this->input->post('group_dealer_id'),
						'outlet' => $this->input->post('outlet'),
						'address' => $this->input->post('address'),
						'contact' => $this->input->post('contact'),	
						'sign_prepared_by' => $this->input->post('sign_prepared_by'),
						'sign_acknowledged_by' => $this->input->post('sign_acknowledged_by')
				);
					
				$this->db->insert('t_outlet_dealer', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Save');
				redirect(base_url('master/outlet'));
	
			}else{
				//update
				$data = array(
						'outlet_id' => $this->input->post('outlet_id'),
						'group_dealer_id' => $this->input->post('group_dealer_id'),
						'outlet' => $this->input->post('outlet'),
						'address' => $this->input->post('address'),
						'contact' => $this->input->post('contact'),
						'sign_prepared_by' => $this->input->post('sign_prepared_by'),
						'sign_acknowledged_by' => $this->input->post('sign_acknowledged_by')
				);
					
					
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('t_outlet_dealer', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Update');
				redirect(base_url('master/outlet'),'refresh');
			}
	
		}else{
			//untuk ambil nilai default
			$data['dt']['id'] = $this->input->post('id');
			$data['dt']['outlet_id'] = $this->input->post('outlet_id');
			$data['dt']['group_dealer_id'] = $this->input->post('group_dealer_id');
			$data['dt']['outlet'] = $this->input->post('outlet');
			$data['dt']['contact'] = $this->input->post('contact');
			$data['dt']['address'] = $this->input->post('address');
			$data['dt']['sign_prepared_by'] = $this->input->post('sign_prepared_by');
			$data['dt']['sign_acknowledged_by'] = $this->input->post('sign_acknowledged_by');
				
			
			$this->load->view('master/f_outlet',$data);
		}
	
	}
	
	
	function outlet_delete()
	{
		$this->db->delete('t_outlet_dealer', array('id' => $this->input->post('id')));
		$this->session->set_flashdata('msg_success', 'Data have been Delete');
		redirect(base_url('master/outlet'));
	}
	
	//event_category

	function event_category()
	{
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['array_data']=$this->master_model->event_category();
		$this->load->view('master/v_event_category',$data);
	}
	
	function event_category_add()
	{
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$data['menu_dealer']=$this->menu_dealer;
		
		$data['faction']=base_url('master/event_category_add_process');
	
		if(base64_decode($this->uri->segment(3))<>"")
		{
			//only update
			$strParam=base64_decode($this->uri->segment(3));
			if($strParam && $get = $this->master_model->get($strParam,'t_event_category')) {
				$data['dt']['id'] = $get->id;
				$data['dt']['event_category_id'] = $get->event_category_id;
				$data['dt']['event_category_name'] = $get->event_category_name;
	
			}else {
				show_404();
			}
	
		}else{
			//declare new insert
			$data['dt']['id'] = '';
			$data['dt']['event_category_id'] = random_string('numeric', 4);
			$data['dt']['event_category_name'] = '';
	
		}
	
		$this->load->view('master/f_event_category',$data);
	
	}
	
	function event_category_add_process()
	{
		$data['faction']=base_url('master/event_category_add_process');
	
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;	
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		$this->form_validation->set_rules('event_category_id', 'Event Category ID', 'required|numeric');
		$this->form_validation->set_rules('event_category_name', 'Event Category Name', 'required');
	
	
		if ($this->form_validation->run() == TRUE) {
	
			if($this->input->post('id')=="")
			{
				//insert
				$data = array(
						'event_category_id' => $this->input->post('event_category_id'),
						'event_category_name' => $this->input->post('event_category_name')
				);
					
				$this->db->insert('t_event_category', $data);
				$this->session->set_flashdata('msg_success', 'Data have been Save');
				redirect(base_url('master/event_category'));
	
			}else{
				//update
				$data = array(
						'event_category_id' => $this->input->post('event_category_id'),
						'event_category_name' => $this->input->post('event_category_name')
				);
					
				$this->db->where('id', $this->input->post('id'));
				$this->db->update('t_event_category', $data);
				
				$this->session->set_flashdata('msg_success', 'Data have been Update');
				redirect(base_url('master/event_category'),'refresh');
			}
	
		}else{
			//untuk ambil nilai default
			$data['dt']['id'] = $this->input->post('id');
			$data['dt']['event_category_id'] = $this->input->post('event_category_id');
			$data['dt']['event_category_name'] = $this->input->post('event_category_name');
	
			$this->load->view('master/f_event_category',$data);
		}
	
	}
	
	
	function event_category_delete()
	{
		$this->db->delete('t_event_category', array('id' => $this->input->post('id')));
		$this->session->set_flashdata('msg_success', 'Data have been Delete');
		redirect(base_url('master/event_category'));
	}
	

	
	
}