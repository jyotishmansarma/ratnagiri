<?php

class Dashboardmodel extends CI_Model
{
    public function number_of_user(){
        $user=$this->db->select()
        ->from('users')
        ->get();
     return $user->num_rows();
}
public function number_of_branch(){
    $branch=$this->db->select()
    ->from('create_branchname')
    ->get();
 return $branch->num_rows();
}
public function number_of_booking(){
    $book=$this->db->select()
    ->from('bookaload')
    ->get();
 return $book->num_rows();
}
public function number_of_todaybooking(){
    $todaybook=$this->db->select()
    ->from('bookaload')
    ->where('booking_date',date("Y-m-d"))
    ->get();
 return $todaybook->num_rows();

}
public function userDetails($id){
 $data = $this->db->select()
        ->from('users')
      ->join('create_branchname','users.branch_id=create_branchname.branch_id')
      ->where('id',$id)
      ->get();
 
    return $data->result();
}

    
}
?>