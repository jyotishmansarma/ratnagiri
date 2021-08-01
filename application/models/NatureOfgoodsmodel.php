<?php

class NatureOfgoodsmodel extends CI_Model
{
    public function createGoodsName($array){
        return $this->db->insert('natureofgoods',$array);
    }
    public function viewgoods(){
        $goods=$this->db->select()
               ->from('natureofgoods')
                 ->get();

return $goods->result();
    }
    public function findgoods($id){
        $goods=$this->db->select()
        ->where('goods_id',$id)
        ->get('natureofgoods');
        return $goods->row();
    

    }
    public function updategoods($goods_id,Array $inputs){
        return $this->db->where('goods_id',$goods_id)
                   ->update('natureofgoods',$inputs);
    }
}
?>