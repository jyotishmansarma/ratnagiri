<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NatureOfgoods extends CI_Controller {

	
	function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('NatureOfgoodsmodel');
        $this->load->library('Template');
        if(!$this->session->userdata('id')){
            return redirect('Login');
        // $this->load->view('Admins/login');
        }
	}
	public function index()
	{
        $this->template->load('main', 'natureOfgood/nature_of_good');
    }
    public function createGoodsName(){
        $inputs=$this->input->post();
        $this->NatureOfgoodsmodel->createGoodsName($inputs);
        redirect('NatureOfgoods/index');
    }
    public function viewgoods(){
        $data= $this->NatureOfgoodsmodel->viewgoods();
        $this->template->load('main','natureOfgood/viewgoods',['data'=>$data]);
    }
    public function editgoods($goods_id)
	{
       
        $goodsName=$this->NatureOfgoodsmodel->findgoods($goods_id);

    
        $this->template->load('main', 'natureOfgood/editgoods',['goodsName'=>$goodsName]);
        

    }
    public function updategoods($goods_id){
        $inputs=$this->input->post();
        $this->NatureOfgoodsmodel->updategoods($goods_id,$inputs);
        redirect('NatureOfgoods/viewgoods');
    }
    
}
?>