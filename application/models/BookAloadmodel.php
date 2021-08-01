<?php

class BookAloadmodel extends CI_Model
{
    public function showSl_no(){
         $this->db->order_by('book_id', 'desc')
                   ->limit(1);
         $query = $this->db->get('bookaload');
		if($query->num_rows() > 0){
			return $query->result();
		}elseif($query->num_rows()==NULL){
           
			return 1;
        }
        else{
            return false;
        }
    }
    public function bookload($array){
        return $this->db->insert('bookaload',$array);
    }
      public function viewbookload($limit, $offset)
    {
        $this->db->select("*");
        $this->db->from("bookaload");
        $this->db->order_by("book_id", "desc")
            ->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }
    public function num_rows()
    {
        $q = $this->db->select()
            ->from('bookaload')
            ->get();
        return $q->num_rows();
    }
    public function updabookAload($data){
      // print_r($checkbox);print_r($vehical_no);die;
        
       
         
             for($i=0;$i<count($data['book_id']);$i++){
            // $vehical_no=  $this->db->set('vehical_no',$data['vehical_no'][$i]);
            // print_r($vehical_no);die;
                
              $this->db->set('vehical_no',$data['vehical_no'][$i])
                    ->where('book_id',$data['book_id'][$i])
                   ->update('bookaload');
        }
    }
    public function Bookcheck($sl_no){
        $this->db->where('sl_no', $sl_no);  
           $query = $this->db->get("bookaload");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
    }
    
   public function findbook($id){
    $branch=$this->db->select(['bookaload.branch_code','bookaload.booking_from','bookaload.booking_to','bookaload.branch_name','bookaload.consignor_adress','bookaload.cosignee_adress','bookaload.booking_date','bookaload.consignor_gst_no','bookaload.cosignee_gst_no','bookaload.number_of_goods','bookaload.amount','bookaload.sl_no','bookaload.paid','bookaload.to_pay','bookaload.consignor_name','bookaload.cosignee_name','bookaload.book_id','bookaload.vehical_no','GROUP_CONCAT(book_nature_of_good.pices)','GROUP_CONCAT(book_nature_of_good.nature_of_goods)'])
                     ->from('bookaload')
                     
                     ->join('book_nature_of_good','book_nature_of_good.sl_no=bookaload.sl_no')
                     ->where('book_id',$id)
                    
                     ->get();
                //  print_r($branch->result_array());die ; 
                          return $branch->result_array();
   
}
public function recentrecord(){
    $last = $this->db->order_by('book_id',"desc")
                     ->limit(1)
                     ->get('bookaload')
                     ->row();
            return $last;
}
public function invoiceview($book_id){
    $value=$this->db->select(['bookaload.branch_code','bookaload.booking_from','bookaload.consignor_gst_no','bookaload.cosignee_gst_no','bookaload.branch_name','bookaload.consignor_adress','bookaload.cosignee_adress','bookaload.booking_date','bookaload.consignor_gst_no','bookaload.cosignee_gst_no','bookaload.number_of_goods','bookaload.amount','bookaload.sl_no','bookaload.paid','bookaload.to_pay','bookaload.consignor_name','bookaload.cosignee_name','bookaload.book_id','bookaload.vehical_no','GROUP_CONCAT(book_nature_of_good.pices)','GROUP_CONCAT(book_nature_of_good.nature_of_goods)'])
    ->from('bookaload')
    
    ->join('book_nature_of_good','book_nature_of_good.sl_no=bookaload.sl_no')
    ->where('bookaload.book_id',$book_id)
   
    ->get();
   return  $value->result_array();

}


   
}