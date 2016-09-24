<?php


class event_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}
	
	function get_event()
	{
		$query = $this->db->query("select a.*,b.event_category_name from t_event_proposed as a left join t_event_category b on b.event_category_id=a.category");
	
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return FALSE;
		}
	
	}
	
	
	function pre_event()
	{
		$query = $this->db->query("select * from t_event_pre_event_list");
		
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return FALSE;
		}
		
	}
	
	
	function detail_event($id_event)
	{
		$query = $this->db->query("select * from t_event_proposed where event_id='".$id_event."'");
		//$query = $this->db->query("select * from t_event_proposed where category=111");
		//select * from t_event_proposed where category=111

		foreach ($query->result() as $row)
		{
				$event_name= $row->event_name."&nbsp;".$row->event_year;
		
		}
		
	return $event_name;
	
		
	}
	
}