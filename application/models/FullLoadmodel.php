<?php

class FullLoadmodel extends CI_Model
{
    
    public function fullLoad($array){
        return $this->db->insert('fullload',$array);
    }
    public function showSl_no(){
          $this->db->order_by('f_id', 'desc')
                   ->limit(1);
         $query = $this->db->get('fullload');
		if($query->num_rows() > 0){
			return $query->result();
		}elseif($query->num_rows()==NULL){
           
			return 1;
        }
        else{
            return false;
        }
    }
      public function recentrecord(){
    $last = $this->db->order_by('f_id',"desc")
                     ->limit(1)
                     ->get('fullload')
                     ->row();
            return $last;
}
public function invoiceview($f_id){
    $value=$this->db->select(['fullload.branch_code','fullload.booking_from','fullload.branch_name','fullload.f_cosignor_adress','fullload.f_cosignee_adress','fullload.booking_date','fullload.f_cosignor_gst_no','fullload.f_cosignee_gst_no','fullload.f_number_of_goods','fullload.f_amount','fullload.sl_no','fullload.f_paid','fullload.f_to_pay','fullload.f_consignor_name','fullload.f_cosignee_name','fullload.f_id','fullload.f_vehical_no','GROUP_CONCAT(f_book_nature_of_good.pices)','GROUP_CONCAT(f_book_nature_of_good.nature_of_goods)'])
    ->from('fullload')
    
    ->join('f_book_nature_of_good','f_book_nature_of_good.sl_no=fullload.sl_no')
    ->where('fullload.f_id',$f_id)
   
    ->get();
   return  $value->result_array();

}
    
}