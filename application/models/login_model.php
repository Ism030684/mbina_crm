<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {
	private $tbl = 't_users';
	
	function __construct() {
		parent::__construct();
	}
		
	function get_users($uid,$pass)
	{	
		//cek authentikasi nya
		$sql = "select *
				from t_users where username='".$uid."' and password='".$pass."'";
				
		$query = $this->db->query($sql);
		if($query->num_rows()!==0)
		{
				return $query->row();
		}else{
			return FALSE;
		}
	}
	
	
	
	
}

/* End of file _model.php */