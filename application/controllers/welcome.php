<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('login_model'));
	}
	
	
	public function index()
	{
		$data['faction'] = base_url('welcome/login');
		$data['notifikasi']="";
		$this->load->view('login/v_login',$data);
	}
	
	function login()
	{
		//$this->load->library('parser');
	
		$data['notifikasi']="";
		$strusername=$this->input->post('username');
		$strpassword=$this->input->post('password');
		if ($this->login_model->get_users($strusername,$strpassword) == false){
			$data['notifikasi']="<label>Sorry your username or password is wrong</label>";
			//$this->session->set_flashdata('pesan','Sorry your username or password is wrong !!');
			$data['faction'] = base_url('welcome/login');
	
			$this->load->view('login/v_login',$data);
		}else{
			$dt=$this->login_model->get_users($strusername,$strpassword);
			$dataSession = array(
					'id_users'  => $dt->id,
					'first_name'  => $dt->first_name,
					'last_name'  => $dt->last_name,
					'email'	=>$dt->email,
					'mobile_phone_1'=>$dt->mobile_phone_1,
					'mobile_phone_2'=>$dt->mobile_phone_2,
					'group_dealer_id'=>$dt->group_dealer_id,
					'outlet_dealer_id'=>$dt->outlet_dealer_id,
					'photo'=>$dt->photo,
					'dealer_area'=>$dt->area,
					'dealer_name'=>$dt->outlet,
					'dealer_id'=>$dt->outlet_id,
					'is_mbina'=>$dt->is_mbina,
					'is_logged_in' => TRUE
			);
				
			$this->session->set_userdata($dataSession);
			
				
			redirect(base_url('main/index'));
		}
	}
	
	function logout()
	{
		$data['notifikasi']="";
		$dlogin=array(
				'id_users'  => '',
				'name'  => '',
				'company' 	=> '',
				'department' => '',
				'email'	=>'',
				'mobile_phone_1'=>'',
				'mobile_phone_2'=>'',
				'status'=>'',
				'logged_in' => FALSE
		);
		$this->session->unset_userdata($dlogin);
		$this->session->sess_destroy();
		//$this->load->view('login/vlogin',$data);
		redirect(base_url());
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */