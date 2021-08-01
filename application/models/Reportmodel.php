<?php

class Reportmodel extends CI_Model

{
  public function report_search($booking_to,$Date){
 
    $data=$this->db->select(['bookaload.sl_no','bookaload.branch_code','bookaload.amount','bookaload.paid','bookaload.to_pay','manifesto.delevery_status'])
    ->from('manifesto')
    ->join('bookaload','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
    
    ->where('manifesto.booking_to',$booking_to)
    ->where('manifesto.Date',$Date)
    
     
    ->get();
    return $data->result_array();

  }
  public function report_search1($booking_to,$Date,$toDate){
 
    $data=$this->db->select(['bookaload.sl_no','bookaload.branch_code','bookaload.amount','bookaload.paid','bookaload.to_pay','manifesto.delevery_status'])
    ->from('manifesto')
    ->join('bookaload','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
    
    ->where('manifesto.booking_to',$booking_to)
    ->where('manifesto.Date>=',$Date)
    ->where('manifesto.Date<=',$toDate)
    
     
    ->get();
    return $data->result_array();

  }
  public function xslReport(Array $data){
      $data=$this->db->select(['bookaload.sl_no','bookaload.branch_code','bookaload.amount','bookaload.paid','bookaload.to_pay','manifesto.delevery_status'])
    ->from('manifesto')
    ->join('bookaload','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
   ->where_in('manifesto.sl_no',$data)
    
     
    ->get();
    return $data->result();
   }
}
?>