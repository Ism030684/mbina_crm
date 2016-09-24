<?php

class master_model extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    function users_dealer()
    {
    	$query = $this->db->query("select a.*,b.position_name,c.group_dealer,d.outlet,
    			e.users_role
    			from t_users a 
    			left join t_position b on a.id_position=b.id_position
    			left join t_group_dealer c on c.group_dealer_id=a.group_dealer_id
    			left join t_outlet_dealer d on d.outlet_id=a.outlet_dealer_id
    			left join t_users_role e on e.id_users_role=a.id_users_role
    			where is_mbina=0
    			");
    	
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    	
    }
    
    
    function users_mbina()
    {
    	$query = $this->db->query("select a.*,b.position_name,c.group_dealer,d.outlet,
    			e.users_role
    			from t_users a
    			left join t_position b on a.id_position=b.id_position
    			left join t_group_dealer c on c.group_dealer_id=a.group_dealer_id
    			left join t_outlet_dealer d on d.outlet_id=a.outlet_dealer_id
    			left join t_users_role e on e.id_users_role=a.id_users_role
    			where is_mbina=1
    			");
    	 
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    	 
    }
    
    function users_role()
    {
    	$query = $this->db->query("select * from t_users_role");
    	 
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    	 
    }
    
    
    
    function department()
    {
    	$query = $this->db->query("select * from t_department");
    
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    
    }
    
    function position()
    {
    	$query = $this->db->query("select * from t_position");
    
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    
    }
    
    
    
    function event_category()
    {
    	$query = $this->db->query("select * from t_event_category");
    
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    
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
    
    
    function group_dealer()
    {
    	$query = $this->db->query("select * from t_group_dealer order by group_dealer_id");
    
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    
    }
    

    function outlet()
    {
    	$query = $this->db->query("select a.*,b.group_dealer from t_outlet_dealer a left join t_group_dealer b on a.group_dealer_id=b.group_dealer_id ");
    
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    
    }
    
    
    function get_department()
    {
    	$query = $this->db->query("select * from t_department");
    	
   	 if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    	
    }
    
    //get_position
    function get_position()
    {
    	$query = $this->db->query("select * from t_position");
    	 
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    	 
    }
    
    
    function leads_tot()
    {
    	$query = $this->db->query("select * from t_leads_total");
    	 
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}	
    	
    }
    
    
    
    function get_role()
    {
    	$query = $this->db->query("select * from t_users_role");
    	 
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    	 
    }
    
    
    function get_user_per_role($id)
    {
    	$query = $this->db->query("select * from t_users where id_users_role=".$id."");
    
    	if ($query->num_rows() > 0)
    	{
    		return $query->result();
    	}else{
    		return FALSE;
    	}
    
    }
    
    function get($id,$tbl)
    {
    	$this->db->trans_start();
    	$this->db->where('id',$id);
    	$query = $this->db->get($tbl);
    	$this->db->trans_complete();
    
    	if($this->db->trans_status() && $query->num_rows()>0)
    		return $query->row();
    		else
    		return false;
    }
    
    
    

    
}
