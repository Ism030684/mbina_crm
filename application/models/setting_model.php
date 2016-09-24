<?php


class setting_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	
	function salesman()
	{
		$query = $this->db->query("select * from t_salesman");
	
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return FALSE;
		}
	
	}
	
	function role()
	{
		$query = $this->db->query("select * from t_users_role");
	
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return FALSE;
		}
	
	}
	
	function get_checked($id_users_role,$kode)
	{
		 
		$query = $this->db->query("select * from t_users_role_menu
    			where id_users_role='".$id_users_role."' and code_menu='".$kode."' and status=1");
		 
		 
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				return "checked";
				 
			}
		}else{
			return false;
		}
	
	}
	
	
	function get_users($where)
	{
		$query = $this->db->query("select * from t_users ".$where."");
	
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return FALSE;
		}
	
	}
	
	function get_outlet($param)
	{
		$query = $this->db->query("select * from t_outlet_dealer where group_dealer_id=".$param."");
		
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return FALSE;
		}
	}
	
	function get_brochure()
	{
		$query = $this->db->query("select a.*, b.type as tipe from t_set_brochure a left join t_set_brochure_type b on b.type_id=a.type ");
	
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return FALSE;
		}
	}
	
	function get_group_dealer($id)
	{
		
		$query = $this->db->query("select * from t_group_dealer where group_dealer_id=".$id."");
		
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$group_dealer_name=  $row->group_dealer;
			}
			return $group_dealer_name;
		}else{
			return false;
		}
	}
	
	
	function get_outlet_name($id)
	{
	
		$query = $this->db->query("select * from t_outlet_dealer where outlet_id=".$id."");
	
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$outlet=  $row->outlet;
			}
			return $outlet;
		}else{
			return false;
		}
	}
	
	function get_outlet_by_group($id_group)
	{

		$query = $this->db->query("select * from t_outlet_dealer where group_dealer_id=".$id_group."");
		
		if ($query->num_rows() > 0)
		{
			/*foreach ($query->result() as $row)
			{
				$outlet=  $row->outlet;
			}*/
			return $query->result();
		}else{
			return false;
		}
	}
	
	function get_vehicle()
	{
		$query = $this->db->query("SELECT a.* FROM t_set_vehicle a 
				");
		
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return FALSE;
		}
	}
	
}