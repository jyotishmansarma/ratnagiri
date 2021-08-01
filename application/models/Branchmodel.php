<?php

class Branchmodel extends CI_Model
{

    public function findbranch($id){
        $branch=$this->db->select(['branch_name','branch_status','branch_id','branch_code'])
        ->where('branch_id',$id)
        ->get('create_branchname');
        return $branch->row();
    }

    public function createbranch($array){
        return $this->db->insert('create_branchname',$array);
    }

    public function viewbranch($limit,$offset){
        $branch=$this->db->select()
                    ->from('create_branchname')
                    ->limit($limit,$offset)
		            ->get();

		 return $branch->result();
    }
    public function num_rows(){
        $user=$this->db->select()
        ->from('create_branchname')
        ->get();
        return $user->num_rows();
       
    }
    public function updatebranch($branch_id,Array $inputs){
        return $this->db->where('branch_id',$branch_id)
                   ->update('create_branchname',$inputs);

    }
    public function branchCode($branch_id){
       $data= $this->db->select('branch_code')
                 ->where('branch_id',$branch_id)
                 ->from('create_branchname')
                 ->get();
        
        return $data->result();
    }
    

    
}