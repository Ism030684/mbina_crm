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
	
	function post_event()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_marketing']=$this->menu_marketing;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['array_preevent']=$this->event_model->post_event();
		
		$this->load->view('event/v_post_event',$data);
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
	
	function pre_event_report2()
	{
		//echo "test123";exit;

		
		
		$this->load->library('Pdf');
		
		$pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->SetTitle('Pre Event Report');
		$pdf->SetHeaderMargin(30);
		$pdf->SetTopMargin(20);
		$pdf->setFooterMargin(20);
		$pdf->SetAutoPageBreak(true);
		$pdf->SetAuthor('Author');
		$pdf->SetDisplayMode('real', 'default');
		
		$pdf->Write(5, 'Some sample text');
		$pdf->Output('Pre Event.pdf', 'I');
	}
	
	function pre_event_report()
	{
		$this->load->library('Pdf');
		$param=base64_decode($this->uri->segment(3));
		//echo $this->session->userdata('dealer_id');exit;
		$query = $this->db->query("select * from t_event_pre where id=".$param."");
		
		foreach ($query->result() as $row)
		{
			$dealer_name= $row->dealer;
			$description= $row->description;
			$location= $row->location;
			$month= $row->month;
			$date= $row->date;
			$dealer_area=$row->dealer_area;
			$item=$row->item;
			$activity=$row->activity;
			$detail_location=$row->detail_location;
			$city=$row->city;
			$year=$row->year;
			$month=$row->month;
			$display_1=$row->display_1;
			$display_2=$row->display_2;
			$display_3=$row->display_3;
			$display_4=$row->display_4;
			$budget=number_format($row->budget);
			$submission_date=$row->submission_date;
		}
		
		//cari sign id
		$query2 = $this->db->query("select * from t_outlet_dealer where id=".$this->session->userdata('dealer_id')."");
		foreach ($query2->result() as $row)
		{
			$sign_prepared_by=$row->sign_prepared_by;
			$sign_acknowledged_by=$row->sign_acknowledged_by;
		
		}
		
		// create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		//$pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);
		
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Nicola Asuni');
		$pdf->SetTitle('Pre Event');
		$pdf->SetSubject('TCPDF Tutorial');
		$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
		
		// set default header data
		//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);
		
		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		
		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		
		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		$pdf->SetPrintHeader(false);
		$pdf->SetPrintFooter(false);
		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		
		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		
		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
			require_once(dirname(__FILE__).'/lang/eng.php');
			$pdf->setLanguageArray($l);
		}
		
		// ---------------------------------------------------------
		
		// set font
		//$pdf->SetFont('helvetica', 'B', 20);
		$this->pdf->SetMargins(0, 0, -1, true);
		
		// add a page
		$pdf->AddPage('L','A3');
		$pdf->SetMargins(10, 10, 10, true); // set the margins
		//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);
		
		$pdf->SetFont('helvetica', '', 7);
		
		// -----------------------------------------------------------------------------
		
		$tbl = <<<EOD
<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="8%">Dealer Name &nbsp;</td>
      <td  width="1%">&nbsp;:</td>
      <td width="18%">&nbsp;$dealer_name</td>
    </tr>
    <tr>
      <td>Event&nbsp;</td>
      <td>&nbsp;:</td>
      <td>&nbsp;$description</td>
    </tr>
    <tr>
      <td>Location&nbsp;</td>
      <td>&nbsp;:</td>
      <td>&nbsp;$location</td>
    </tr>
    <tr>
      <td>Month&nbsp;</td>
      <td>&nbsp;:</td>
      <td>&nbsp;$month</td>
    </tr>
    <tr>
      <td>Date&nbsp;</td>
      <td>&nbsp;:</td>
      <td>&nbsp;$date</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<tr>
      <td>Detail Activity&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
EOD;
		
		$pdf->writeHTML($tbl, true, false, false, false, '');
		

		// NON-BREAKING ROWS (nobr="true")
		
		$tbl = <<<EOD
<table width="100%" border="1">
  <tbody>
    <tr>
      <td width="2%" align="center">NO&nbsp;</td>
      <td width="5%" align="center">DEALER AREA&nbsp;</td>
      <td width="5%" align="center">ITEM&nbsp;</td>
      <td width="8%" align="center">DEALER&nbsp;</td>
      <td width="5%" align="center">ACTIVITY&nbsp;</td>
      <td width="8%" align="center">DECSRIPTION&nbsp;</td>
      <td width="6%" align="center">LOCATION&nbsp;</td>
      <td width="10%" align="center">DETAIL LOCATION&nbsp;</td>
      <td width="6%" align="center">CITY&nbsp;</td>
      <td width="5%" align="center">YEAR&nbsp;</td>
      <td width="5%" align="center">MONTH&nbsp;</td>
      <td width="5%" align="center">DATE&nbsp;</td>
      <td width="5%" align="center">DISPLAY 1&nbsp;</td>
      <td width="5%" align="center">DISPLAY 2&nbsp;</td>
      <td width="5%" align="center">DISPLAY 3&nbsp;</td>
      <td width="5%" align="center">DISPLAY 4&nbsp;</td>
      <td width="5%" align="center">BUDGET&nbsp;</td>
      <td width="7%" align="center">SUBMISSION DATE&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;1</td>
      <td>&nbsp;$dealer_area</td>
      <td align="center">&nbsp;$item</td>
      <td>&nbsp;$dealer_name</td>
      <td align="center">&nbsp;$activity</td>
      <td>&nbsp;$description</td>
      <td align="center">&nbsp;$location</td>
      <td>&nbsp;$detail_location</td>
      <td align="center">&nbsp;$city</td>
      <td align="center">&nbsp;$year</td>
      <td align="center">&nbsp;$month</td>
      <td align="center">&nbsp;$date</td>
      <td>&nbsp;$display_1</td>
      <td>&nbsp;$display_2</td>
      <td>&nbsp;$display_3</td>
      <td>&nbsp;$display_4</td>
      <td align="center">$budget</td>
      <td align="center">$submission_date</td>
    </tr>
   
  </tbody>
</table>
EOD;
		$pdf->writeHTML($tbl, true, false, false, false, '');
		
		$tbl = <<<EOD
		<table width="100%" border="0">
  <tbody>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Event Lay Out</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td>&nbsp;
      <table width="70%" border="1">
        <tbody>
          <tr>
            <td><p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;</p>
              <p>&nbsp;&nbsp;</p>
              <p>&nbsp;&nbsp;</p>
              </td>
          </tr>
        </tbody>
      </table>
      </td>
      <td align="right"><table width="100%" border="1">
        <tbody>
          <tr>
            <td align="center">&nbsp;Prepared by </td>
            <td align="center">&nbsp;Acknowledged by </td>
			<td align="center">&nbsp;Approved by </td>
          </tr>
          <tr>
            <td><p>&nbsp;</p>
              <p>&nbsp;</p>
				<p>&nbsp;</p>
				</td>
            <td>&nbsp;</td>
			<td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;$sign_prepared_by</td>
            <td align="center">&nbsp;$sign_acknowledged_by</td>
			<td align="center">&nbsp;Alfine Alfansha</td>
          </tr>
		<tr>
            <td align="center">&nbsp;$dealer_name</td>
            <td align="center">&nbsp;$dealer_name</td>
			<td align="center">&nbsp;PT. Mercedes-Benz Distribution Indonesia</td>
          </tr>
		<tr>
            <td align="center">&nbsp;Marketing Support Specialist</td>
            <td align="center">&nbsp;Banch Manager</td>
			<td align="center">&nbsp;Retail Marketing Specialist</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
EOD;
		$pdf->writeHTML($tbl, true, false, false, false, '');
		// -----------------------------------------------------------------------------
		
		//Close and output PDF document
		$pdf->Output('example_048.pdf', 'I');
		
	}
	
	function pre_event_delete()
	{
		$this->db->delete('t_event_pre_list', array('id' => $this->input->post('id')));
		$this->session->set_flashdata('msg_success', 'Data have been Delete');
		redirect(base_url('event/pre_event'));
	}
	
	
	function post_event_pic_add()
	{
		//echo $this->input->post('id');exit;
		//echo $this->input->post('desc1');	
		for($i=1;$i<5;$i++){
			//echo $this->input->post('desc'.$i).'<br />';
			
			if (move_uploaded_file($_FILES['input-'.$i]['tmp_name'], './photo/'.$i.'_'.$_FILES['input-'.$i]['name']))
			{
				$data = array(
						'id_event_pre' => $this->input->post('id'),
						'desc' => $this->input->post('desc'.$i),
						'pic' => $i.'_'.$_FILES['input-'.$i]['name']
				);
			
				$this->db->insert('t_event_post_picture', $data);
			}
			
		}
		
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('t_event_pre', array('flag_pic'=>1));
		
		$this->session->set_flashdata('msg_success', 'Picture have been upload');
		redirect(base_url('event/post_event'));
	}
	
	function post_event_db()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_marketing']=$this->menu_marketing;
		$data['menu_newsletter']=$this->menu_newsletter;
		
		$this->load->view('event/v_db_prospect',$data);
		
	}
	
	
	function add_db_prospect()
	{
		for($i=1;$i<7;$i++){
			//echo $this->input->post('desc'.$i).'<br />';
				if($this->input->post('date_'.$i)<>""){
		
				$data = array(
						'id_event_pre' => $this->input->post('id'),
						'date' => $this->input->post('date_'.$i),
						'database' => $this->input->post('db_'.$i),
						'prospect'=> $this->input->post('prospect_'.$i),
						'spk'=> $this->input->post('spk_'.$i),
				);
					
				$this->db->insert('t_event_post_database', $data);
				}
				
		}
		
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('t_event_pre', array('flag_db'=>1));
		
		$this->session->set_flashdata('msg_success', 'database prospect have been upload');
		redirect(base_url('event/post_event'));
		
	}
	
	function post_event_report()
	{
	
			$this->load->library('Pdf');
			$param=base64_decode($this->uri->segment(3));
			//echo $this->session->userdata('dealer_id');exit;
			$query = $this->db->query("select * from t_event_pre where id=".$param."");
		
			foreach ($query->result() as $row)
			{
				$dealer_name= $row->dealer;
				$description= $row->description;
				$location= $row->location;
				$month= $row->month;
				$date= $row->date;
				$dealer_area=$row->dealer_area;
				$item=$row->item;
				$activity=$row->activity;
				$detail_location=$row->detail_location;
				$city=$row->city;
				$year=$row->year;
				$month=$row->month;
				$display_1=$row->display_1;
				$display_2=$row->display_2;
				$display_3=$row->display_3;
				$display_4=$row->display_4;
				$budget=number_format($row->budget);
				$submission_date=$row->submission_date;
			}
		
			//cari sign id
			$query2 = $this->db->query("select * from t_outlet_dealer where id=".$this->session->userdata('dealer_id')."");
			foreach ($query2->result() as $row)
			{
				$sign_prepared_by=$row->sign_prepared_by;
				$sign_acknowledged_by=$row->sign_acknowledged_by;
		
			}
		
			// create new PDF document
			$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			//$pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);
		
			// set document information
			$pdf->SetCreator(PDF_CREATOR);
			$pdf->SetAuthor('Nicola Asuni');
			$pdf->SetTitle('Pre Event');
			$pdf->SetSubject('TCPDF Tutorial');
			$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
		
			// set default header data
			//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);
		
			// set header and footer fonts
			$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
			$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		
			// set default monospaced font
			$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		
			// set margins
			$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
			$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
			$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$pdf->SetPrintHeader(false);
			$pdf->SetPrintFooter(false);
			// set auto page breaks
			$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		
			// set image scale factor
			$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		
			// set some language-dependent strings (optional)
			if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
				require_once(dirname(__FILE__).'/lang/eng.php');
				$pdf->setLanguageArray($l);
			}
		
			// ---------------------------------------------------------
		
			// set font
			//$pdf->SetFont('helvetica', 'B', 20);
			$this->pdf->SetMargins(0, 0, -1, true);
		
			// add a page
			$pdf->AddPage('L','A3');
			$pdf->SetMargins(10, 10, 10, true); // set the margins
			//$pdf->Write(0, 'Example of HTML tables', '', 0, 'L', true, 0, false, false, 0);
		
			$pdf->SetFont('helvetica', '', 7);
		
			// -----------------------------------------------------------------------------
		
			$tbl = <<<EOD
<table width="100%" border="0">
  <tbody>
    <tr>
      <td width="8%">Dealer Name &nbsp;</td>
      <td  width="1%">&nbsp;:</td>
      <td width="18%">&nbsp;$dealer_name</td>
    </tr>
    <tr>
      <td>Event&nbsp;</td>
      <td>&nbsp;:</td>
      <td>&nbsp;$description</td>
    </tr>
    <tr>
      <td>Location&nbsp;</td>
      <td>&nbsp;:</td>
      <td>&nbsp;$location</td>
    </tr>
    <tr>
      <td>Month&nbsp;</td>
      <td>&nbsp;:</td>
      <td>&nbsp;$month</td>
    </tr>
    <tr>
      <td>Date&nbsp;</td>
      <td>&nbsp;:</td>
      <td>&nbsp;$date</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	<tr>
      <td>Detail Activity&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
EOD;
		
			$pdf->writeHTML($tbl, true, false, false, false, '');
		
		
			// NON-BREAKING ROWS (nobr="true")
		
			$tbl = <<<EOD
<table width="100%" border="1">
  <tbody>
    <tr>
      <td width="2%" align="center">NO&nbsp;</td>
      <td width="5%" align="center">DEALER AREA&nbsp;</td>
      <td width="5%" align="center">ITEM&nbsp;</td>
      <td width="8%" align="center">DEALER&nbsp;</td>
      <td width="5%" align="center">ACTIVITY&nbsp;</td>
      <td width="8%" align="center">DECSRIPTION&nbsp;</td>
      <td width="6%" align="center">LOCATION&nbsp;</td>
      <td width="10%" align="center">DETAIL LOCATION&nbsp;</td>
      <td width="6%" align="center">CITY&nbsp;</td>
      <td width="5%" align="center">YEAR&nbsp;</td>
      <td width="5%" align="center">MONTH&nbsp;</td>
      <td width="5%" align="center">DATE&nbsp;</td>
      <td width="5%" align="center">DISPLAY 1&nbsp;</td>
      <td width="5%" align="center">DISPLAY 2&nbsp;</td>
      <td width="5%" align="center">DISPLAY 3&nbsp;</td>
      <td width="5%" align="center">DISPLAY 4&nbsp;</td>
      <td width="5%" align="center">BUDGET&nbsp;</td>
      <td width="7%" align="center">SUBMISSION DATE&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;1</td>
      <td>&nbsp;$dealer_area</td>
      <td align="center">&nbsp;Post Report</td>
      <td>&nbsp;$dealer_name</td>
      <td align="center">&nbsp;$activity</td>
      <td>&nbsp;$description</td>
      <td align="center">&nbsp;$location</td>
      <td>&nbsp;$detail_location</td>
      <td align="center">&nbsp;$city</td>
      <td align="center">&nbsp;$year</td>
      <td align="center">&nbsp;$month</td>
      <td align="center">&nbsp;$date</td>
      <td>&nbsp;$display_1</td>
      <td>&nbsp;$display_2</td>
      <td>&nbsp;$display_3</td>
      <td>&nbsp;$display_4</td>
      <td align="center">$budget</td>
      <td align="center">$submission_date</td>
    </tr>
  
  </tbody>
</table>
EOD;
			$pdf->writeHTML($tbl, true, false, false, false, '');
		
			$query3 = $this->db->query("select count(*) as tot from t_event_post_picture where id_event_pre=$param");
			
			foreach ($query3->result() as $row)
			{
				$tot=$row->tot;
			}
			
			//echo $tot;
			
			$query3 = $this->db->query("select * from t_event_post_picture where id_event_pre=$param");
			$i=1;
			foreach ($query3->result() as $row)
			{
				$data['desc'][$i]=$row->desc;
				$data['pic'][$i]=$row->pic;
				$i++;
			}
			//echo $data['desc'][2];exit;
			/*for($i=$tot;$i<=$tot;$i++){
				$desc1=$data['desc'][$i];
				$pic1=base_url('photo/').$data['pic'][$i];
			}*/
			
			//print_r($data['desc']);
			$tbl = <<<EOD
		<table width="100%" border="0">
  <tbody>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;Event Lay Out</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0">
  <tbody>
    <tr>
      <td>&nbsp;
      <table width="90%" border="1">
        <tbody>
          <tr>
            <td><p>&nbsp;</p>
           
           <table border="1">
			
EOD;
			$desc1= $this->event_model->get_desc(1,$param);
			$pic1=$this->event_model->get_pic(1,$param);
			
			$desc2= $this->event_model->get_desc(2,$param);
			$pic2=$this->event_model->get_pic(2,$param);
			
			$desc3= $this->event_model->get_desc(3,$param);
			$pic3=$this->event_model->get_pic(3,$param);
			
			$desc4= $this->event_model->get_desc(4,$param);
			$pic4=$this->event_model->get_pic(4,$param);
				
			$desc5= $this->event_model->get_desc(5,$param);
			$pic5=$this->event_model->get_pic(5,$param);
				
			$desc6= $this->event_model->get_desc(6,$param);
			$pic6=$this->event_model->get_pic(6,$param);
			
			$tbl .= <<<EOD
           <tr>	
           		<td align="center">$desc1</td>
           		<td align="center">$desc2</td>
           		<td align="center">$desc3</td>
           </tr>
           	<tr>
           		<td align="center"><img src="$pic1" width="155" height="100"></td>
           		<td align="center"><img src="$pic2" width="155" height="100"></td>
           		<td align="center"><img src="$pic3" width="155" height="100"></td>
           </tr>
		   <tr>
           		<td align="center">&nbsp;</td>
           		<td align="center">&nbsp;</td>
           		<td align="center">&nbsp;</td>
           </tr>
EOD;
			if($desc4<>""){
	$html .=<<<EOD
			 <tr>	
           		<td align="center">$desc4</td>
           		<td align="center">$desc5</td>
           		<td align="center">$desc6</td>
           </tr>
           	<tr>
           		<td align="center"><img src="$pic4" width="155" height="100"></td>
           		<td align="center"><img src="$pic5" width="155" height="100"></td>
           		<td align="center"><img src="$pic6" width="155" height="100"></td>
           </tr>
			
EOD;
			}
         $tbl .= <<<EOD
           </table>
              </td>
          </tr>
        </tbody>
      </table>
      </td>
      <td align="right"><table width="100%" border="1">
        <tbody>
          <tr>
            <td align="center">&nbsp;Prepared by </td>
            <td align="center">&nbsp;Acknowledged by </td>
			<td align="center">&nbsp;Approved by </td>
          </tr>
          <tr>
            <td><p>&nbsp;</p>
              <p>&nbsp;</p>
				<p>&nbsp;</p>
				</td>
            <td>&nbsp;</td>
			<td>&nbsp;</td>
          </tr>
          <tr>
            <td align="center">&nbsp;$sign_prepared_by</td>
            <td align="center">&nbsp;$sign_acknowledged_by</td>
			<td align="center">&nbsp;Alfine Alfansha</td>
          </tr>
		<tr>
            <td align="center">&nbsp;$dealer_name</td>
            <td align="center">&nbsp;$dealer_name</td>
			<td align="center">&nbsp;PT. Mercedes-Benz Distribution Indonesia</td>
          </tr>
		<tr>
            <td align="center">&nbsp;Marketing Support Specialist</td>
            <td align="center">&nbsp;Banch Manager</td>
			<td align="center">&nbsp;Retail Marketing Specialist</td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
EOD;
			$pdf->writeHTML($tbl, true, false, false, false, '');
        
			$xc = 105;
			$yc = 190;
			$r = 50;
			
			$pdf->SetFillColor(0, 0, 255);
			$pdf->PieSector($xc, $yc, $r, 0, 60, 'FD', false, 0, 2);//biru
			
			$pdf->SetFillColor(0, 255, 0);
			$pdf->PieSector($xc, $yc, $r, 60, 220, 'FD', false, 0, 2);//hijau
			
			$pdf->SetFillColor(255, 0, 0);
			$pdf->PieSector($xc, $yc, $r, 220, 0, 'FD', false, 0, 2);//merah
			
			
			// write labels
			//$pdf->SetTextColor(255,255,255);
			//$pdf->Text(125, 185, 'Database');
			//$pdf->Text(70, 185, 'SPK ');
			//$pdf->Text(100, 145, 'Prospect');
			
			
			
 $tbl =<<<EOD
		<table border="1" width="30%">
    		<tr >
    		<td bgcolor="red" align="center">&nbsp;</td>
 			<td align="left">&nbsp;&nbsp;Prospect QTY</td>
 			<td align="center">12</td>
    		</tr>
 			<tr>
    		<td bgcolor="blue" align="center">&nbsp;</td>
 			<td align="left">&nbsp;&nbsp;Database</td>
 			<td align="center">12</td>
    		</tr>
 			<tr>
    		<td bgcolor="#95F009" align="center">&nbsp;</td>
 			<td align="left">&nbsp;&nbsp;SPK</td>
 			<td align="center">12</td>
    		</tr>
  </table>   
EOD;
			
			$pdf->writeHTML($tbl, true, false, false, false, '');
			
			// -----------------------------------------------------------------------------
		
			//Close and output PDF document
			$pdf->Output('example_048.pdf', 'I');
		
		
	}
	
	
}