<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {
	private $tbl = 't_users';
	
	function __construct() {
		parent::__construct();
	}
		
	function get_users($uid,$pass)
	{	
		//cek authentikasi nya
		$sql = "select a.*,b.area,b.outlet,b.outlet_id
				from t_users a 
				left join t_outlet_dealer b on outlet_id=a.outlet_dealer_id
				where a.username='".$uid."' and a.password='".$pass."'";
				
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