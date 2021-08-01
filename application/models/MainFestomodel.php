<?php

class MainFestomodel extends CI_Model

{
    public function getbook_a_loadData(){
        $data= $this->db->select(['branch_name','sl_no','updated_at','paid','to_pay','branch_code'])
        ->from('bookaload')
        ->get();
        return $data->result();
    }
     public function mainfesto_filter($booking_from,$booking_to,$booking_date,$limit,$offset){
      
        $data=$this->db->where('booking_from',$booking_from)
                      ->where('booking_to',$booking_to)
                      ->where('booking_date',$booking_date)
                      ->limit($limit,$offset)
                  
                      ->get('bookaload');
                     
           
          //dd($data->result_array());
         // echo( $data);
           return $data->result_array();

    }
    
   
    public function mainfesto_filter1($booking_from,$booking_to,$booking_date,$booking_date_to,$limit,$offset){
     
     
      $data=$this->db->where('booking_from',$booking_from)
      ->where('booking_to',$booking_to)
      ->where('booking_date >=',$booking_date)
      ->where('booking_date<=',$booking_date_to)
      ->limit($limit,$offset)
  
      ->get('bookaload');
   //  print_r($data->result_array());die;
                   
                    return $data->result_array();

  }
   public function num_rows(){
      $user=$this->db->select()
      ->from('bookaload')
      ->get();
      return $user->num_rows();
     
  }
  public function mainfesto_filter2($data){
      
    $data=$this->db->where('booking_to',$data['booking_to'])
                    ->where('booking_date',$data['booking_date'])
                   ->get('bookaload');
                return $data->result_array();

}
public function mainfesto_filter3($data){
      
  $data=$this->db->where('booking_date',$data['booking_date'])
                  ->get('bookaload');
              return $data->result_array();

}
public function mainfesto_filter4($data){
      
  $data=$this->db->where('booking_from',$data['booking_from'])
                  ->get('bookaload');
              return $data->result_array();
}
public function viewmanifesto(Array $data){
   
 //$data= $this->db->select()
                // ->where_in('book_id',$data)
                // ->get('bookaload');
                $data= $this->db->select(['bookaload.branch_code','bookaload.amount','bookaload.sl_no','bookaload.paid','bookaload.to_pay','bookaload.consignor_name','bookaload.cosignee_name','bookaload.book_id','bookaload.vehical_no','GROUP_CONCAT(book_nature_of_good.pices)','GROUP_CONCAT(book_nature_of_good.nature_of_goods)'])
                      ->from('bookaload')
                      ->join('book_nature_of_good','bookaload.sl_no=book_nature_of_good.sl_no','LEFT OUTER')
                      ->where_in('book_id',$data)
                      ->group_by('book_nature_of_good.sl_no')
                      ->get();
                // print_r($data);die;
                return $data->result_array();
  

}
public function Total_amount(Array $data){
 $sum= $this->db->Select_sum('amount')
            ->from('bookaload')
            ->where_in('book_id',$data)
            ->get();
         
      return $sum->result();
}
public function Total_paid(Array $data){
  $sum= $this->db->Select_sum('paid')
             ->from('bookaload')
             ->where_in('book_id',$data)
             ->get();
          
       return $sum->result();
 }
 public function Total_topay(Array $data){
  $sum= $this->db->Select_sum('to_pay')
             ->from('bookaload')
             ->where_in('book_id',$data)
             ->get();
          
       return $sum->result();
 }
 public function saverecords($vehical_no,$sl_no,$date,$booking_from,$booking_to){
    
      $query="INSERT INTO `manifesto`( `vehical_no`,`sl_no`,`Date`,`booking_from`,`booking_to`) 
      VALUES ('$vehical_no','$sl_no','$date','$booking_from','$booking_to')";
      $this->db->query($query);
   // return $this->db->insert('manifesto',$vehical_no);
      
       
 }
 public function Manifestocheck($sl_no){
      $this->db->where('sl_no', $sl_no);  
         $query = $this->db->get("manifesto");  
         if($query->num_rows() > 0)  
         {  
              return true;  
         }  
         else  
         {  
              return false;  
         }  
  }
 public function manifestoview($booking_from,$booking_to,$Date,$vehical_no){
      

           $data=$this->db->select(['manifesto.sl_no','bookaload.branch_code','bookaload.amount','bookaload.paid','bookaload.to_pay','bookaload.consignor_name','bookaload.cosignee_name','bookaload.book_id','manifesto.vehical_no','GROUP_CONCAT(book_nature_of_good.pices)','GROUP_CONCAT(book_nature_of_good.nature_of_goods)'])
                    ->from('manifesto')
                    ->join('bookaload','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
                    ->join('book_nature_of_good','bookaload.sl_no=book_nature_of_good.sl_no','LEFT OUTER')
                    ->where('manifesto.booking_from',$booking_from)
                    ->where('manifesto.booking_to',$booking_to)
                    ->where('manifesto.vehical_no',$vehical_no)
                    ->where('manifesto.Date',$Date)
                    ->group_by('book_nature_of_good.sl_no')
                    
                    ->get();
                   
                    return $data->result_array();
                    
                   
                    
                   

                      
 }  
 public function recivingmanifesto($id){
      
      $user=$this->db->select()
                 ->from('users')
                 ->join('create_branchname','users.branch_id=create_branchname.branch_id')
                 ->where('users.id',$id)
                 ->get();
                 return $user->result_array();
 }
 
public function updatestatus($data){
      for($i=0;$i<count($data['sl_no']);$i++){
      $this->db->set('paid',$data['paid'][$i])
                ->set('to_pay',$data['to_pay'][$i])
            
              ->where('sl_no',$data['sl_no'][$i])
              ->update('bookaload');
}   
      }
public function updatemanifesto($data){
      for($i=0;$i<count($data);$i++){
            $this->db->set('delevery_status',1)
                  
                    ->where('sl_no',$data[$i])
                    ->update('manifesto');
      }   
}
public function viewupdaterecivingmanifestoc(){
      $branch=$this->db->select()
                  ->from('create_branchname')
                  
                      ->get();

           return $branch->result();
  }
  public function recivingmanifestoview($booking_from,$booking_to,$Date,$Date_to){
        
      $data=$this->db->select(['manifesto.sl_no','bookaload.branch_code','bookaload.amount','bookaload.paid','bookaload.to_pay','bookaload.consignor_name','bookaload.cosignee_name','bookaload.book_id','manifesto.vehical_no','GROUP_CONCAT(book_nature_of_good.pices)','GROUP_CONCAT(book_nature_of_good.nature_of_goods)'])
      ->from('manifesto')
      ->join('bookaload','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
      ->join('book_nature_of_good','bookaload.sl_no=book_nature_of_good.sl_no','LEFT OUTER')
      ->where('manifesto.booking_from',$booking_from)
      ->where('manifesto.booking_to',$booking_to)
     // ->where('manifesto.vehical_no',$vehical_no)
     
       ->where('manifesto.Date>=',$Date)
      ->where('manifesto.Date<=',$Date_to)
      ->where('manifesto.delevery_status',0)
      ->group_by('book_nature_of_good.sl_no')
      
      ->get();
      return $data->result_array();
     

  }
   public function recivingmanifestoview1($booking_from,$booking_to,$Date){
        
      $data=$this->db->select(['manifesto.sl_no','bookaload.branch_code','bookaload.amount','bookaload.paid','bookaload.to_pay','bookaload.consignor_name','bookaload.cosignee_name','bookaload.book_id','manifesto.vehical_no','GROUP_CONCAT(book_nature_of_good.pices)','GROUP_CONCAT(book_nature_of_good.nature_of_goods)'])
      ->from('manifesto')
      ->join('bookaload','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
      ->join('book_nature_of_good','bookaload.sl_no=book_nature_of_good.sl_no','LEFT OUTER')
      ->where('manifesto.booking_from',$booking_from)
      ->where('manifesto.booking_to',$booking_to)
   //   ->where('manifesto.vehical_no',$vehical_no)
      ->where('manifesto.Date>=',$Date)
      
      ->where('manifesto.delevery_status',0)
      ->group_by('book_nature_of_good.sl_no')
      
      ->get();
      return $data->result_array();
     

  }

   public function totalAmountrecivingmanifestoview( $booking_from,$booking_to,$Date,$Date_to,$vehical_no){
         $sum= $this->db->Select_sum('bookaload.amount')
             ->from('bookaload')
               ->join('manifesto','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
     
       ->where('manifesto.booking_from',$booking_from)
      ->where('manifesto.booking_to',$booking_to)
     // ->where('manifesto.vehical_no',$vehical_no)
     
       ->where('manifesto.Date>=',$Date)
      ->where('manifesto.Date<=',$Date_to)
      ->where('manifesto.delevery_status',0)
     
             ->get();
          
       return $sum->result();

  }
  public function totaltoPayrecivingmanifestoview( $booking_from,$booking_to,$Date,$Date_to,$vehical_no){
         $sum= $this->db->Select_sum('bookaload.to_pay')
             ->from('bookaload')
               ->join('manifesto','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
     
      ->where('manifesto.booking_from',$booking_from)
      ->where('manifesto.booking_to',$booking_to)
     // ->where('manifesto.vehical_no',$vehical_no)
     
       ->where('manifesto.Date>=',$Date)
      ->where('manifesto.Date<=',$Date_to)
      ->where('manifesto.delevery_status',0)
     
             ->get();
          
       return $sum->result();

  }
  public function totalpaidrecivingmanifestoview( $booking_from,$booking_to,$Date,$Date_to,$vehical_no){
          $sum= $this->db->Select_sum('bookaload.paid')
             ->from('bookaload')
               ->join('manifesto','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
     
        ->where('manifesto.booking_from',$booking_from)
      ->where('manifesto.booking_to',$booking_to)
     // ->where('manifesto.vehical_no',$vehical_no)
     
       ->where('manifesto.Date>=',$Date)
      ->where('manifesto.Date<=',$Date_to)
      ->where('manifesto.delevery_status',0)
     
             ->get();
          
       return $sum->result();

  }
       public function totalAmountrecivingmanifestoview1( $booking_from,$booking_to,$Date,$vehical_no){
         $sum= $this->db->Select_sum('bookaload.amount')
             ->from('bookaload')
               ->join('manifesto','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
     
       ->where('manifesto.booking_from',$booking_from)
      ->where('manifesto.booking_to',$booking_to)
     // ->where('manifesto.vehical_no',$vehical_no)
     
       ->where('manifesto.Date>=',$Date)
     // ->where('manifesto.Date<=',$Date_to)
      ->where('manifesto.delevery_status',0)
     
             ->get();
          
       return $sum->result();
  
}
  public function totaltoPayrecivingmanifestoview1( $booking_from,$booking_to,$Date,$vehical_no){
         $sum= $this->db->Select_sum('bookaload.to_pay')
             ->from('bookaload')
               ->join('manifesto','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
     
      ->where('manifesto.booking_from',$booking_from)
      ->where('manifesto.booking_to',$booking_to)
     // ->where('manifesto.vehical_no',$vehical_no)
     
       ->where('manifesto.Date>=',$Date)
     // ->where('manifesto.Date<=',$Date_to)
      ->where('manifesto.delevery_status',0)
     
             ->get();
          
       return $sum->result();
}
 public function totalpaidrecivingmanifestoview1( $booking_from,$booking_to,$Date,$vehical_no){
          $sum= $this->db->Select_sum('bookaload.paid')
             ->from('bookaload')
               ->join('manifesto','bookaload.sl_no=manifesto.sl_no','LEFT OUTER')
     
        ->where('manifesto.booking_from',$booking_from)
      ->where('manifesto.booking_to',$booking_to)
     // ->where('manifesto.vehical_no',$vehical_no)
     
       ->where('manifesto.Date>=',$Date)
     // ->where('manifesto.Date<=',$Date_to)
      ->where('manifesto.delevery_status',0)
     
             ->get();
          
       return $sum->result();

  }
}


