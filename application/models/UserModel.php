<?php

class UserModel extends CI_Model
{
    public function getBranchname(){
       $branchName= $this->db->select(['branch_id','branch_name','branch_code'])
                   ->from('create_branchname')
                   ->get();
        return $branchName->result();
    }
    public function createuser($array){
        return $this->db->insert('users',$array);
    }
    public function viewuser($limit,$offset){
        $user=$this->db->select()
                    ->from('users')
                    ->join('create_branchname','users.branch_id=create_branchname.branch_id')
                    ->limit($limit,$offset)
		            ->get();
		 return $user->result();
    }
    public function num_rows(){
        $user=$this->db->select()
        ->from('users')
        ->join('create_branchname','users.branch_id=create_branchname.branch_id')
        ->get();
        return $user->num_rows();
       
    }
    public function findbranch($id){
        $data=$this->db->select()
                     ->from('users')                  
                     ->join('create_branchname','users.branch_id=create_branchname.branch_id')
                     ->where('users.id',$id)
                       ->get();
        return $data->row();
    }
    public function updateuser($id,Array $inputs){
        return $this->db->where('id',$id)
                   ->update('users',$inputs);

    }
    public function loginvalidation($email,$password){
         $data=$this->db->where(['email'=>$email,'password'=>$password])
         ->get('users');
         if($data->num_rows())

         {
    
             return $data->row();
         }
         else {
             return false;
         }

    }
    public function dashboard($id){
        $data=$this->db->where(['id'=>$id])
        ->get('users');
        if($data->num_rows())

        {
   
            return $data->row();
        }
        else {
            return false;
        }
    }


    
}