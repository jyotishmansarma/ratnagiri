<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report  extends CI_Controller {

	
	function __construct(){
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('BookAloadmodel');
        $this->load->model('UserModel');
        $this->load->model('MainFestomodel');
        $this->load->model('Reportmodel');
       
        $this->load->library('Template');
        if(!$this->session->userdata('id')){
            return redirect('Login');
        }
    }
    public function index(){
        $this->load->model('UserModel');
        $data1= $this->UserModel->getBranchname();
       
         $this->template->load('main','report/report',['data1'=>$data1]);

    }
    public function report_search(){
        $data1= $this->UserModel->getBranchname();
            $booking_to=$this->input->get('booking_to');
            $Date= $this->input->get('Date');
             $toDate= $this->input->get('toDate');
            
            
      
            if(empty($toDate)){
            $data=$this->Reportmodel->report_search($booking_to,$Date);
            $this->template->load('main','report/viewreport',['data1'=>$data1,'data'=> $data]);
            }
            if(!empty($toDate)){
                $data=$this->Reportmodel->report_search1($booking_to,$Date,$toDate);
                $this->template->load('main','report/viewreport',['data1'=>$data1,'data'=> $data]);
                }
    }
      // create excel
      public function createXLS() {
    if ( $input=$this->input->post('sl_no')==NULL){
          $this->load->model('UserModel');
        $data1= $this->UserModel->getBranchname();
       
         $this->template->load('main','report/report',['data1'=>$data1]);

        
    }else{
        // create file name
   //  $fileName = 'feedbackdata-' . time() . '.xls';
         
  $this->load->library("excel");
  $object = new PHPExcel();

  $object->setActiveSheetIndex(0);

  $table_columns = array("SL NO", "AMOUNT", "PAID","TO PAY");

  $column = 0;

  foreach($table_columns as $field)
  {
   $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
   $column++;
  }
   $input=$this->input->post('sl_no');
   $data=$this->Reportmodel->xslReport($input);
  //$feedbackInfo = $this->export->employeeList();

  $excel_row = 2;


  foreach($data as $row)
  {
   

   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->branch_code. $row->sl_no);
   $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->amount);
   $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->paid);
   $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->to_pay);
   $excel_row++;
  }

  //$object_writer =$objWriter = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
//header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//header('Content-Disposition: attachment;filename="userList.xlsx"');


 $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
     header('Content-Type: application/vnd.ms-excel;charset=UTF-8');
     header('Content-Disposition: attachment;filename="Report.xls"');
     $object_writer->save('php://output');
 }
      }
}
