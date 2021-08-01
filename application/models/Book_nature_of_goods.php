<?php

class Book_nature_of_goods extends CI_Model
{
    public function bookgoods($data){

        for($i=0;$i<count($data['nature_of_goods']);$i++){
            $this->db->insert('book_nature_of_good',  array( "nature_of_goods" =>$data["nature_of_goods"][$i],
            "pices" =>$data["pices"][$i],"sl_no"=>$data["sl_no"]));
            

        }
        
        //return $this->db->insert_batch('book_nature_of_good',$data);
        

    }
      public function f_bookgoods($data){

        for($i=0;$i<count($data['nature_of_goods']);$i++){
            $this->db->insert('f_book_nature_of_good',  array( "nature_of_goods" =>$data["nature_of_goods"][$i],
            "pices" =>$data["pices"][$i],"sl_no"=>$data["sl_no"]));
            

        }
      }

}