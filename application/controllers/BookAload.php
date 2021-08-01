<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookAload  extends CI_Controller {

	
	function __construct(){
        parent::__construct();
        $this->load->model('BookAloadmodel');
        $this->load->model('MainFestomodel');
        $this->load->model('NatureOfgoodsmodel');
        $this->load->model('Book_nature_of_goods');
     
        $this->load->model('UserModel');
       
        $this->load->library('Template');
        if(!$this->session->userdata('id')){
            return redirect('Login');
        }
    }
    public function index()

    {   $data= $this->UserModel->getBranchname();
        $goods= $this->NatureOfgoodsmodel->viewgoods();
        $id=$this->session->userdata('id');
        	
		$data1=$this->UserModel->dashboard($id);
		$type=$data1->type;
        if($type==1){
        $this->template->load('main','bookOrder/bookAload',['data'=>$data,'goods'=>$goods]);
        }
        else{
            $this->template->load('userdashboard','bookOrder/bookAload',['data'=>$data,'goods'=>$goods]);
        }

    }
    public function showSl_no(){
        $this->load->model('bookAloadmodel');
        $result = $this->bookAloadmodel->showSl_no();
		echo json_encode($result);
    }
    public function bookLoad(){
      //  $inputs=$this->input->post();
        $data2 = array(
            'consignor_name'=>$this->input->post('consignor_name'),
            'cosignee_name'=>$this->input->post('cosignee_name'),
            'consignor_adress'=>$this->input->post('consignor_adress'),
            'cosignee_adress'=>$this->input->post('cosignee_adress'),
            'cosignor_phn_num'=>$this->input->post('cosignor_phn_num'),
            'cosignee_phn_no'=>$this->input->post('cosignee_phn_no'),
            'consignor_gst_no'=>$this->input->post('consignor_gst_no'),
            'cosignee_gst_no'=>$this->input->post('cosignee_gst_no'),
            'number_of_goods'=>$this->input->post('number_of_goods'),
            'branch_name'=>$this->input->post('branch_name'),
            'sl_no'=>$this->input->post('sl_no'),
            'branch_code'=>$this->input->post('branch_code'),
            'amount'=>$this->input->post('amount'),

            'paid'=>$this->input->post('paid'),
            'to_pay'=>$this->input->post('to_pay'),
            'booking_from'=>$this->input->post('booking_from'),
            'booking_to'=>$this->input->post('booking_to'),
            'weight'=>$this->input->post('weight'),
            'booking_date'=>$this->input->post('booking_date')
            );
        
        $data1 = array(
        'nature_of_goods'=>$this->input->post('nature_of_goods'),
        'pices'=>$this->input->post('pices'),
        'branch_code'=>$this->input->post('branch_code'),
        'sl_no'=>$this->input->post('sl_no')
        );
          

       
        $this->BookAloadmodel->bookload($data2);
        $data=$this->Book_nature_of_goods->bookgoods($data1);
        $this->session->set_flashdata( 'submit','Booked successfully ');
       // redirect('BookAload/index');
      redirect('BookAload/afterbookinvoice');
      
      
    }
     public function afterbookinvoice(){
       $lastrecord=$this->BookAloadmodel->recentrecord();
       $data =$this->BookAloadmodel->invoiceview($lastrecord->book_id);
       $this->load->view('bookOrder/previewbook',['data'=>$data]);
      // print_r($lastrecord->book_id);die;
    }
    public function invoiceview($book_id){
       $data =$this->BookAloadmodel->invoiceview($book_id);
    
       $this->load->view('bookOrder/previewbook',['data'=>$data]);
      
    } 
    public function printinvoice(){
       $bookid= $this->input->post('book_id');
       $this->load->model('htmlTopdfmodel');
       $data=$this->htmlTopdfmodel->printinvoice($bookid);
      
       
       // Get output html
      // $html = $this->output->get_output();
       
       // Load pdf library
       $this->load->library('Pdf');
       
       
       
       // Load HTML content
       $this->dompdf->loadHtml($data);
       
       // (Optional) Setup the paper size and orientation
       $this->dompdf->set_option('isRemoteEnabled', TRUE);
      // $this->dompdf->setPaper('A4', 'landscape');
       $this->dompdf->setPaper('A4', 'portrait');
       
       // Render the HTML as PDF
       $this->dompdf->render();
       
       // Output the generated PDF (1 = download and 0 = preview)
       $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
   }


    
    public function branch_code(){
       
        if($this->input->post('branch_id')){
            $this->load->model('Branchmodel');
           
            $result= $this->Branchmodel->branchCode($this->input->post('branch_id'));
            
           echo json_encode($result);
           
        
    }
}
    public function view_book()
        {  
             $this->load->helper('date'); 
            $data=$this->MainFestomodel->getbook_a_loadData();
            $this->load->model('UserModel');
            $data1= $this->UserModel->getBranchname();
            $id=$this->session->userdata('id');
               $this->load->library('pagination');

        $config = [
            'base_url' => base_url('BookAload/view_book'),
            'per_page' => 13,
            'total_rows' => $this->BookAloadmodel->num_rows(),
            'full_tag_open' => "<ul class='pagination'>",
            'full_tag_close' => "</ul>",
            'next_tag_open' => "<li>",
            'next_tag_close' => "</li>",
            'prev_tag_open' => "<li>",
            'prev_tag_close' => "</li>",
            'num_tag_open' => "<li>",
            'num_tag_close' => "<li>",
            'cur_tag_open' => "<li class='active'><a>",
            'cur_tag_close' => "</a></li>"

        ];
        $this->pagination->initialize($config);
        $viewData = $this->BookAloadmodel->viewbookload($config['per_page'], $this->uri->segment(3));

             	
		$data=$this->UserModel->dashboard($id);
		$type=$data->type;
        if($type==1){
          
                $this->template->load('main','bookOrder/viewBook',['data'=>$data,'data1'=>$data1,'viewData'=>$viewData ]);
        }else{
            $this->template->load('userdashboard','bookOrder/viewBook',['data'=>$data,'data1'=>$data1]);
        }
             
            
        }
    public function book_search(){
         //pagination
        $this->load->library('pagination');
        $config=[
            'base_url'=> base_url('BookAload/book_search/'),
            //'base_url'=> site_url().'BookAload/book_search/?booking_from='.$this->input->get('booking_from')&'booking_to='.$this->input->get('booking_to')&'booking_date'.$this->input->get('booking_date')&'booking_date_to='.$this->input->get('booking_from'),
            
            'per_page'=>13,
            'total_rows' => $this->MainFestomodel->num_rows(),
            
            'suffix'=>'?' .http_build_query($_GET,'',"&"),
           
            'reuse_query_string'=>FALSE,
            'first_url'=>base_url('BookAload/book_search/').'?' .http_build_query($_GET,'',"&"),
            
            'full_tag_open'=>"<ul class='pagination'>",
            'full_tag_close'=>"</ul>",
            'next_tag_open' =>"<li>",
            'next_tag_close' =>"</li>",
            'prev_tag_open' =>"<li>",
            'prev_tag_close' =>"</li>",
            'num_tag_open' =>"<li>",
            'num_tag_close' =>"<li>",
            'last_tag_open' => '<li>',
            'last_tag_close'=> '</li>',
            'first_tag_open' => '<li>',
            'first_tag_close'=> '</li>',
            'cur_tag_open' =>"<li class='active'><a>",
            'cur_tag_close' =>"</a></li>"
           
        ];
        $this->pagination->initialize($config);
        //pagination
         $data1= $this->UserModel->getBranchname();
       
            $booking_from=$this->input->get('booking_from');
            $booking_to=$this->input->get('booking_to');
            $booking_date=$this->input->get('booking_date');
            $booking_date_to=$this->input->get('booking_date_to');
        
           
         if(empty($booking_date_to)){
           if( $booking_from &&  $booking_to &&  $booking_date){
            $result= $this->MainFestomodel->mainfesto_filter($booking_from,$booking_to,$booking_date,$config['per_page'],$this->uri->segment(3));
            
             $id=$this->session->userdata('id');
            $data=$this->UserModel->dashboard($id);
	 	$type=$data->type;
          if($type==1){
            
            $this->template->load('main','bookOrder/booksearch',['result'=>$result,'data1'=>$data1]);
          }else{
          $this->template->load('userdashboard','bookOrder/booksearch',['result'=>$result,'data1'=>$data1]);
          }
          }
        
      //  if($data['booking_from']==true && $data['booking_date']==true){
          //  $result= $this->MainFestomodel->mainfesto_filter1($data);
           // $this->template->load('main','bookOrder/booksearch',['result'=>$result]);
      //  } 
       // elseif($data['booking_to']==true && $data['booking_date']==true){
          //  $result= $this->MainFestomodel->mainfesto_filter2($data);
          //  $this->template->load('main','bookOrder/booksearch',['result'=>$result]);
     //   } 
      // elseif($data['booking_date']==true){
         //   $result= $this->MainFestomodel->mainfesto_filter3($data);
          //  $this->template->load('main','bookOrder/booksearch',['result'=>$result]);
       // } 
      // elseif($data['booking_from']==true){
            //$result= $this->MainFestomodel->mainfesto_filter4($data);
           // $this->template->load('main','bookOrder/booksearch',['result'=>$result]);
       // } 
      }
      if(!empty($booking_date_to)){
       if( $booking_from &&  $booking_to &&  $booking_date &&$booking_date_to){
         //  print_r($booking_date_to);die;
        $result= $this->MainFestomodel->mainfesto_filter1($booking_from,$booking_to,$booking_date,$booking_date_to,$config['per_page'],$this->uri->segment(3));
        
         $id=$this->session->userdata('id');
        $data=$this->UserModel->dashboard($id);
     $type=$data->type;
      if($type==1){
        
        $this->template->load('main','bookOrder/booksearch',['result'=>$result,'data1'=>$data1]);
      }else{
      $this->template->load('userdashboard','bookOrder/booksearch',['result'=>$result,'data1'=>$data1]);
      }
      }
        
    }
        
    }
    
    public function editbook($book_id){
        $bookload=$this->BookAloadmodel->findbook($book_id);
       
        $this->load->model('UserModel');
        $branchname= $this->UserModel->getBranchname();
        $goods= $this->NatureOfgoodsmodel->viewgoods();
        $id=$this->session->userdata('id');
             	
		$data=$this->UserModel->dashboard($id);
		$type=$data->type;
        if($type==1){
    
       $this->template->load('main', 'bookOrder/editbook',['bookload'=>$bookload,'branchname'=>$branchname,'goods'=>$goods]);
        }else{
            $this->template->load('userdashboard', 'bookOrder/editbook',['bookload'=>$bookload,'branchname'=>$branchname,'goods'=>$goods]);
        }
        
    }
    public function invoice(){
        $this->template->load('main', 'bookOrder/invoice');
    
    
    }
    public function Viewinvoice(){
       $sl_no= $this->input->post('sl_no');
       $this->load->model('htmlTopdfmodel');
       $data=$this->htmlTopdfmodel->Viewinvoice($sl_no);
      
       
       // Get output html
      // $html = $this->output->get_output();
       
       // Load pdf library
       $this->load->library('pdf');
       
   
       
       // Load HTML content
       $this->dompdf->loadHtml($data);
         
       // (Optional) Setup the paper size and orientation
       $this->dompdf->set_option('isRemoteEnabled', TRUE);
       // (Optional) Setup the paper size and orientation
       $this->dompdf->setPaper('A4', 'landscape');
       
       // Render the HTML as PDF
       $this->dompdf->render();
       
       // Output the generated PDF (1 = download and 0 = preview)
       $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));

    }

}