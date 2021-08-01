<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FullLoad  extends CI_Controller {

	
	function __construct(){
        parent::__construct();
        $this->load->model('BookAloadmodel');
        $this->load->model('FullLoadmodel');
         $this->load->model('NatureOfgoodsmodel');
        $this->load->model('UserModel');
         $this->load->model('Book_nature_of_goods');
       
        $this->load->library('Template');
        if(!$this->session->userdata('id')){
            return redirect('Login');
        }
    }
        public function index()

    {   $data= $this->UserModel->getBranchname();
          $goods= $this->NatureOfgoodsmodel->viewgoods();
        $id=$this->session->userdata('id');
        $this->template->load('main','fullLoad',['data'=>$data,'goods'=>$goods]);

    }
    public function fullload(){
       // $inputs=$this->input->post();
      //  $this->FullLoadmodel->fullLoad($inputs);
       // redirect('FullLoad/index');
        $data2 = array(
            'f_consignor_name'=>$this->input->post('f_consignor_name'),
            'f_cosignee_name'=>$this->input->post('f_cosignee_name'),
            'f_cosignor_adress'=>$this->input->post('f_cosignor_adress'),
            'f_cosignee_adress'=>$this->input->post('f_cosignee_adress'),
            'cosignor_phn_num'=>$this->input->post('cosignor_phn_num'),
            'cosignee_phn_no'=>$this->input->post('cosignee_phn_no'),
            'f_cosignor_gst_no'=>$this->input->post('f_cosignor_gst_no'),
            'f_cosignee_gst_no'=>$this->input->post('f_cosignee_gst_no'),
            'f_number_of_goods'=>$this->input->post('f_number_of_goods'),
            'branch_name'=>$this->input->post('branch_name'),
            'sl_no'=>$this->input->post('sl_no'),
            'branch_code'=>$this->input->post('branch_code'),
            'f_amount'=>$this->input->post('f_amount'),

            'f_paid'=>$this->input->post('f_paid'),
            'f_to_pay'=>$this->input->post('f_to_pay'),
            'booking_from'=>$this->input->post('booking_from'),
            'booking_to'=>$this->input->post('booking_to'),
            'f_eight'=>$this->input->post('f_eight'),
            'booking_date'=>$this->input->post('booking_date')
            );
        
        $data1 = array(
        'nature_of_goods'=>$this->input->post('nature_of_goods'),
        'pices'=>$this->input->post('pices'),
        'branch_code'=>$this->input->post('branch_code'),
        'sl_no'=>$this->input->post('sl_no')
        );
         $this->FullLoadmodel->fullLoad($data2);
         $data=$this->Book_nature_of_goods->f_bookgoods($data1);
          redirect('FullLoad/afterbookinvoice');
    }
      public function showSl_no(){
        $this->load->model('FullLoadmodel');
        $result = $this->FullLoadmodel->showSl_no();
		echo json_encode($result);
    }
    public function afterbookinvoice(){
       $lastrecord=$this->FullLoadmodel ->recentrecord();
       $data =$this->FullLoadmodel->invoiceview($lastrecord->f_id);
       $this->load->view('f_perview',['data'=>$data]);
      // print_r($lastrecord->book_id);die;
    }
    }