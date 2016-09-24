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
	
	function proposed()
	{
	//	echo "sss";exit;
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_marketing']=$this->menu_marketing;
		$data['menu_newsletter']=$this->menu_newsletter;
		
		$this->load->view('event/f_proposed_event',$data);
	
	}
	
	function proposed_event_process()
	{
		//echo $this->input->post('budget');exit;
		$data = array(
				'category' =>$this->input->post('category'),
				'description' => $this->input->post('description'),
				'budget' => $this->input->post('budget'),
				'event_id' => $this->input->post('event_id'),
				'event_name' => $this->input->post('event_name'),
				'start_finish_date' => $this->input->post('start_finish_date'),
				'longitude' => $this->input->post('longitude'),
				'latitude' => $this->input->post('latitude'),
				'address' => $this->input->post('address'),
				'event_year' => date('Y'),
				'event_month' => date('m'),
				'created_by' =>$this->session->userdata('id_users')
		);
		
		$this->db->insert('t_event_proposed', $data);
		redirect(base_url('event/feature'));
	}
	
	
	function feature()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['array_event']=$this->event_model->get_event();
		$this->load->view('event/v_event_feature',$data);
		//$this->load->view('event/f_event_feature',$data);
		
	}
	
	function approval()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		$data['array_event']=$this->event_model->get_event();
		$this->load->view('event/v_approval',$data);
	}
	
	function approval_process()
	{
		$event_id=$this->input->post('id');
		$data = array(
				'approve' => '1'
		);
		
		$this->db->where('event_id', $event_id);
		$this->db->update('t_event_proposed', $data);
		redirect(base_url('event/approval'));
	}
	
	function detail_feature()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		
		//echo base64_decode($this->uri->segment(3));exit;
		$id=base64_decode($this->uri->segment(3));
		//echo $id;exit;
		$data['event_name']=$this->event_model->detail_event($id);
		$this->load->view('event/f_event_feature',$data);
	
	}
	
	function insert_display_car()
	{
		$event_id  = $this->uri->segment(3);
		$vehicle_id = $this->uri->segment(4);
		
		$data = array(
				'event_id' => $event_id ,
				'vehicle_id' => $vehicle_id 
		);
		
		$this->db->insert('t_event_display_car', $data);
	}
	
	function delete_display_car()
	{
		$event_id  = $this->uri->segment(3);
		$vehicle_id = $this->uri->segment(4);
		
		$this->db->delete('t_event_display_car', array('event_id' => $event_id,'vehicle_id'=> $vehicle_id));
	}
	
	function insert_test_drive()
	{
		$event_id  = $this->uri->segment(3);
		$vehicle_id = $this->uri->segment(4);
	
		$data = array(
				'event_id' => $event_id ,
				'vehicle_id' => $vehicle_id
		);
	
		$this->db->insert('t_event_test_drive_car', $data);
	}
	
	function delete_test_drive()
	{
		$event_id  = $this->uri->segment(3);
		$vehicle_id = $this->uri->segment(4);
	
		$this->db->delete('t_event_test_drive_car', array('event_id' => $event_id,'vehicle_id'=> $vehicle_id));
	}
	
	//delete_brochure_after_sales
	function insert_brochure_after_sales()
	{
		$event_id  = $this->uri->segment(3);
		$vehicle_id = $this->uri->segment(4);
	
		$data = array(
				'event_id' => $event_id ,
				'vehicle_id' => $vehicle_id
		);
	
		$this->db->insert('t_event_brochure_after_sales', $data);
	}
	
	function delete_brochure_after_sales()
	{
		$event_id  = $this->uri->segment(3);
		$vehicle_id = $this->uri->segment(4);
	
		$this->db->delete('t_event_brochure_after_sales', array('event_id' => $event_id,'vehicle_id'=> $vehicle_id));
	}
	//
	
	function insert_brochure_vehicle_info()
	{
		$event_id  = $this->uri->segment(3);
		$vehicle_id = $this->uri->segment(4);
		$data = array(
				'event_id' => $event_id ,
				'vehicle_id' => $vehicle_id
		);
		$this->db->insert('t_event_brochure', $data);
	}
	
	function delete_brochure_vehicle_info()
	{
		$event_id  = $this->uri->segment(3);
		$vehicle_id = $this->uri->segment(4);
		$this->db->delete('t_event_brochure', array('event_id' => $event_id,'vehicle_id'=> $vehicle_id));
	}
	
	
	
	function participant()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		$data['array_event']=$this->event_model->get_event();
		
		$this->load->view('event/v_participant',$data);
		
	}
	
	function add_participant_process()
	{
		foreach ($this->input->post('participant') as &$value){
			$data = array(
					'event_id' =>  $this->input->post('id',true) ,
					'outlet_id' => $value
			);
			
			$this->db->insert('t_event_participant', $data);
		}
		
		//update status	
		$this->db->where('event_id', $this->input->post('id',true));
		$this->db->update('t_event_proposed', array('participant_stat'=>1));
		
		redirect(base_url('event/participant'));
	}	
	
	function picture()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['menu_marketing']=$this->menu_marketing;
		
		$data['array_event']=$this->event_model->get_event();
		$this->load->view('event/v_report',$data);
		
	}

	
	function report()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		$data['array_event']=$this->event_model->get_event();
		$this->load->view('event/v_picture',$data);
		
	}
	
	function detail_report()
	{
		$data['menu_dashboard']=$this->menu_dashboard;
		$data['menu_master']=$this->menu_master;
		$data['menu_setting']=$this->menu_setting;
		$data['menu_event']=$this->menu_event;
		$data['menu_dealer']=$this->menu_dealer;
		$data['menu_newsletter']=$this->menu_newsletter;
		
		$this->load->view('event/v_detail_report2',$data);
		
	}
	
	
	function export_excel()
	{
		$event_id= $this->uri->segment(3);
		
		$query = $this->db->query("select a.*,b.event_category_name 
				from t_event_proposed a 
				left join t_event_category b on b.event_category_id=a.category
				where a.event_id=".$event_id."");
		
		foreach ($query->result() as $row)
		{
			$address= $row->address;
			$description= $row->description;
			$event_category_name=$row->event_category_name;
			
		}
		
		
		$this->load->library('excel');

		//activate worksheet number 1
		$this->excel->setActiveSheetIndex(0);
		//name the worksheet
		$this->excel->getActiveSheet()->setTitle('POST EVENT');
		//set cell A1 content with some text
		$this->excel->getActiveSheet()->setCellValue('A1', 'This is just some text value');
		//change the font size
		$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
		//make the font become bold
		$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
		//merge cell A1 until D1
		$this->excel->getActiveSheet()->mergeCells('A1:W1');
		//set aligment to center for that merged cell (A1 to D1)
		$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		 
		// Set lebar kolom
		$this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
		$this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(5);
		$this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(17);
		$this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
		$this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
		$this->excel->getActiveSheet()->getColumnDimension('H')->setWidth(25);
		$this->excel->getActiveSheet()->getColumnDimension('I')->setWidth(16);
		$this->excel->getActiveSheet()->getColumnDimension('W')->setWidth(20);
		// Buat Kolom judul tabel
		$SI = $this->excel->setActiveSheetIndex(0);
		$SI->setCellValue('A1', 'Post Event'); //Judul laporan
		$SI->setCellValue('B3', 'No'); 
		$SI->setCellValue('C3', 'DEALER AREA'); 
		$SI->setCellValue('D3', 'ITEM'); 
		$SI->setCellValue('E3', 'DEALER'); 
		$SI->setCellValue('F3', 'ACTIVITY');
		$SI->setCellValue('G3', 'DECSRIPTION');
		$SI->setCellValue('H3', 'LOCATION');
		$SI->setCellValue('I3', 'DETAIL LOCATION');
		$SI->setCellValue('J3', 'CITY');
		$SI->setCellValue('K3', 'YEAR');
		$SI->setCellValue('L3', 'MONTH');
		$SI->setCellValue('M3', 'DATE');
		$SI->setCellValue('N3', 'DISPLAY 1');
		$SI->setCellValue('O3', 'DISPLAY 2');
		$SI->setCellValue('P3', 'DISPLAY 3');
		$SI->setCellValue('Q3', 'DISPLAY 4');
		$SI->setCellValue('R3', 'TARGET');
		$SI->setCellValue('S3', 'RESULT');
		$SI->setCellValue('T3', 'BUDGET');
		$SI->setCellValue('U3', 'APPROVAL (Y/N)');
		$SI->setCellValue('V3', 'NOTES');
		$SI->setCellValue('W3', 'SUBMISSION DATE');
		
		//data
		$SI->setCellValue('B4', '1');
		$SI->setCellValue('C4', 'JAKARTA');
		$SI->setCellValue('D4', $event_category_name);
		$SI->setCellValue('G4', $description);
		$SI->setCellValue('H4', $address);
		
		
		$headerStylenya = new PHPExcel_Style();
		$bodyStylenya   = new PHPExcel_Style();
		
		$headerStylenya->applyFromArray(
				array('fill' 	=> array(
				  'type'    => PHPExcel_Style_Fill::FILL_SOLID,
				  'color'   => array('argb' => 'FFEEEEEE')),
				  'borders' => array('bottom'=> array('style' => PHPExcel_Style_Border::BORDER_THIN),
								'right'		=> array('style' => PHPExcel_Style_Border::BORDER_MEDIUM),
								'left'	    => array('style' => PHPExcel_Style_Border::BORDER_THIN),
								'top'	    => array('style' => PHPExcel_Style_Border::BORDER_THIN)
				  )
				));
		
		
		
		//CUSTOM STYLE
		//Mengeset Syle nya
		/*$this->excel->getDefaultStyle()
   		 ->getBorders()
    	->getRight()
        ->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
		*/

		
		//Menggunakan HeaderStylenya
		//$this->excel->getActiveSheet()->setSharedStyle($headerStyle, "B3 : D3");
		
		
		
		
		
		
		
		
		
		
		//FILL KETERANGAN SAJA
		//set cell A1 content with some text
		$this->excel->getActiveSheet()->setCellValue('C25', 'General Information :');
		//change the font size
		$this->excel->getActiveSheet()->getStyle('C25')->getFont()->setSize(12);
	
		$this->excel->getActiveSheet()->mergeCells('C25:D25');
		$this->excel->getActiveSheet()->getStyle('C25')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			
		$this->excel->getActiveSheet()->setCellValue('C26', '1');
		$this->excel->getActiveSheet()->setCellValue('D26', 'Please fill the yellow mark field only');
		$this->excel->getActiveSheet()->setCellValue('C27', '2');
		$this->excel->getActiveSheet()->setCellValue('D27', 'The form attached above containing formula, please do not make any changes toward the form');
		
		
		
		
	
		
		
		
		
		
		$filename='new post event report.xls'; //save our workbook as this file name
		header('Content-Type: application/vnd.ms-excel'); //mime type
		header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
		header('Cache-Control: max-age=0'); //no cache
		             
		//save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
		//if you want to save it as .XLSX Excel 2007 format
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
		//force user to download the Excel file without writing it to server's HD
		$objWriter->save('php://output');
	}
	
}