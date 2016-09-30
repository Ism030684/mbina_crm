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
		$query = $this->db->query("select a.*,b.id as idx from t_event_pre_list a left join t_event_pre b on (a.year=b.year and a.dealer_name=b.dealer)");
		
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}else{
			return FALSE;
		}
		
	}
	
	function post_event()
	{
		$query = $this->db->query("select a.*,b.id as idx,b.flag_pic,b.flag_db from t_event_pre_list a left join t_event_pre b on (a.year=b.year and a.dealer_name=b.dealer)");
		
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
	
	
	function get_desc($i,$param)
	{
		$sql="select * from `t_event_post_picture` where pic like '".$i."_%' and id_event_pre=".$param."";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				return $row->desc;
			}
		}else{
			return FALSE;
		}
		
	}
	
	function get_pic($i,$param)
	{
		$sql="select pic from `t_event_post_picture` where pic like '".$i."_%' and id_event_pre=".$param."";
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				return base_url('photo/'.$row->pic);//ambil picture
			}
		}else{
			return FALSE;
		}
	
	}
	
}