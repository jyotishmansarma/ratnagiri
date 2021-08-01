<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainFesto  extends CI_Controller {

	
	function __construct(){
        parent::__construct();
        $this->load->helper('url'); 
        $this->load->model('BookAloadmodel');
        $this->load->model('UserModel');
        $this->load->model('MainFestomodel');
       
        $this->load->library('Template');
        if(!$this->session->userdata('id')){
            return redirect('Login');
        }
    }
        public function index()

        {  // $this->load->helper('date'); 
               $data=$this->MainFestomodel->getbook_a_loadData();
               $this->load->model('UserModel');
               $data1= $this->UserModel->getBranchname();
          
                $this->template->load('main','manifesto/createManifesto',['data1'=>$data1]);
             
            
        }
        public function searchManifesto(){
                //pagination
        $this->load->library('pagination');
        $config=[
            'base_url'=> base_url('BookAload/book_search/'),
            //'base_url'=> site_url().'BookAload/book_search/?booking_from='.$this->input->get('booking_from')&'booking_to='.$this->input->get('booking_to')&'booking_date'.$this->input->get('booking_date')&'booking_date_to='.$this->input->get('booking_from'),
            
            'per_page'=>13,
            'total_rows' => $this->MainFestomodel->num_rows(),
            
            'suffix'=>'?' .http_build_query($_GET,'',"&"),
           
            'reuse_query_string'=>FALSE,
            'first_url'=>base_url('ManiFesto/searchManifesto/').'?' .http_build_query($_GET,'',"&"),
            // 'first_url'=>base_url('BookAload/book_search/').'?' .http_build_query($_GET,'',"&"),
            
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
               
              //  if($data['booking_from']==true && $data['booking_to']==true && $data['booking_date']==true){
               // $result= $this->MainFestomodel->mainfesto_filter($data,$config['per_page'],$this->uri->segment(3));
               // if( $booking_from &&  $booking_to &&  $booking_date){
           // $result= $this->MainFestomodel->mainfesto_filter($booking_from,$booking_to,$booking_date,$config['per_page'],$this->uri->segment(3));
              if(empty($booking_date_to)){   
                if( $booking_from &&  $booking_to &&  $booking_date){
                $result= $this->MainFestomodel->mainfesto_filter($booking_from,$booking_to,$booking_date,$config['per_page'],$this->uri->segment(3));
                
            
                
                
                $this->template->load('main','manifesto/addManifesto',['result'=>$result,'data1'=>$data1]);
                }
            }
                
                
                
                 if(!empty($booking_date_to)){
                    if( $booking_from &&  $booking_to &&  $booking_date &&$booking_date_to){
                      //  print_r($booking_date_to);die;
                     $result= $this->MainFestomodel->mainfesto_filter1($booking_from,$booking_to,$booking_date,$booking_date_to,$config['per_page'],$this->uri->segment(3));
               
                     $this->template->load('main','manifesto/addManifesto',['result'=>$result,'data1'=>$data1]);
                }
                }
               
                }
            
		

        
    
        public function addManifesto(){
        
            
               
                
                   
                 $booking_from=$this->input->post('booking_from');
                 $booking_to=$this->input->post('booking_to');
                 $booking_date=$this->input->post('booking_date');
            
              

                   
                    $vehical_no=$this->input->post('vehical_no');
                    $sl_no=$this->input->post('sl_no');
                    $date=$this->input->post('date');
                    $booking_from=$this->input->post('booking_from');
                    $booking_to=$this->input->post('booking_to');
                   // $result= $this->MainFestomodel->mainfesto_filter($booking_from, $booking_to,$booking_date);
                    $checkBook=$this->BookAloadmodel->Bookcheck($sl_no);
                    $checkManifesto=$this->MainFestomodel->Manifestocheck($sl_no);
                    if($checkBook==true){
                        if($checkManifesto==false){
                            $this->MainFestomodel->saverecords($vehical_no,$sl_no,$date,$booking_from,$booking_to);	
                            echo json_encode(array(
                                "statusCode"=>200 ));

                        

                        }
                    } 
                
                 
                   
                    
                
                
                    
                    
                    
                    
                
            
            }
        public function viewmanifesto(){
            $this->load->model('UserModel');
            $data1= $this->UserModel->getBranchname();
          
            $this->template->load('main','manifesto/viewmanifesto',['data1'=>$data1]);
             


        }
        public function viewManifestoData(){
            
                 $booking_from=$this->input->get('booking_from');
                 $booking_to=$this->input->get('booking_to');
                 $Date=$this->input->get('Date');
                 $vehical_no=$this->input->get('vehical_no');
                
              $data=  $this->MainFestomodel->manifestoview( $booking_from,$booking_to,$Date,$vehical_no);
              $this->template->load('main','manifesto/viewManifestoData',['data'=>$data]);	
              

        }
        public function htmlpdf(){
            $input=$this->input->post('sl_no');
            // print_r($input);
            $this->load->model('htmlTopdfmodel');
            $data=$this->htmlTopdfmodel->pdfview($input);
           
            
            // Get output html
           // $html = $this->output->get_output();
            
            // Load pdf library
            $this->load->library('pdf');
            
        
            
            // Load HTML content
            $this->dompdf->loadHtml($data);
            
            // (Optional) Setup the paper size and orientation
            $this->dompdf->setPaper('A4', 'landscape');
            
            // Render the HTML as PDF
            $this->dompdf->render();
            
            // Output the generated PDF (1 = download and 0 = preview)
            $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
        }
       public function recivingmanifesto(){
        $data1= $this->UserModel->getBranchname();
           $id=$this->session->userdata('id');
           
           $data=  $this->MainFestomodel->recivingmanifesto($id);
        
        $this->template->load('main','manifesto/recivingmanifesto',['data'=>$data,'data1'=>$data1]);	


       }
       public function viewrecivingManifesto(){
        $data1= $this->UserModel->getBranchname();
        $id=$this->session->userdata('id');
        
        $data=  $this->MainFestomodel->recivingmanifesto($id);
           
        $booking_from=$this->input->get('booking_from');
        $booking_to=$this->input->get('booking_to');
        $Date=$this->input->get('Date');
         $Date_to=$this->input->get('Date_to');
        $vehical_no=$this->input->get('vehical_no');
       
          if(!empty($Date_to)){
        $data3=  $this->MainFestomodel->totalAmountrecivingmanifestoview( $booking_from,$booking_to,$Date,$Date_to,$vehical_no);
        $data4=  $this->MainFestomodel->totaltoPayrecivingmanifestoview($booking_from,$booking_to,$Date,$Date_to,$vehical_no);
        $data5=  $this->MainFestomodel->totalpaidrecivingmanifestoview( $booking_from,$booking_to,$Date,$Date_to,$vehical_no);
        $data2=  $this->MainFestomodel->recivingmanifestoview( $booking_from,$booking_to,$Date,$Date_to,$vehical_no);
        $this->template->load('main','manifesto/viewrecivingmanifesto',['data2'=>$data2,'data1'=>$data1,'data'=>$data,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5]);
        }
        if(empty($Date_to)){
              $data3=  $this->MainFestomodel->totalAmountrecivingmanifestoview1($booking_from,$booking_to,$Date,$vehical_no);
              $data4=  $this->MainFestomodel->totaltoPayrecivingmanifestoview1($booking_from,$booking_to,$Date,$vehical_no);
              $data5=  $this->MainFestomodel->totalpaidrecivingmanifestoview1( $booking_from,$booking_to,$Date,$vehical_no);
            $data2=  $this->MainFestomodel->recivingmanifestoview1( $booking_from,$booking_to,$Date,$vehical_no);
            $this->template->load('main','manifesto/viewrecivingmanifesto',['data2'=>$data2,'data1'=>$data1,'data'=>$data,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5]);
            }
    

       }
       public function Deleverystatus(){
        $data =Array (
            'sl_no'=>$this->input->post('checkbox'),
            'paid'=>$this->input->post('paid'),
            'to_pay'=>$this->input->post('to_pay'),
        );

        $input=$this->input->post('checkbox');
        $this->MainFestomodel->updatestatus($data);
        $this->MainFestomodel->updatemanifesto($input);
       
        
        redirect('MainFesto/recivingmanifesto');

       }
        

        
        
        public function mainfesto_filter(){
          
           $data= array(
            'booking_from'=>$this->input->get('booking_from'),
            'booking_to'=>$this->input->get('booking_to'),
            'booking_date'=>$this->input->get('booking_date')
            );
         
            if($data['booking_from']==true && $data['booking_to']==true){
            $result= $this->MainFestomodel->mainfesto_filter($data);
            
            
            
            $this->template->load('main','searchMainfesto',['result'=>$result]);
        } 
        if($data['booking_from']==true && $data['booking_date']==true){
            $result= $this->MainFestomodel->mainfesto_filter1($data);
            $this->template->load('main','searchMainfesto',['result'=>$result]);
        } 
        elseif($data['booking_to']==true && $data['booking_date']==true){
            $result= $this->MainFestomodel->mainfesto_filter2($data);
            $this->template->load('main','searchMainfesto',['result'=>$result]);
        } 
       elseif($data['booking_date']==true){
            $result= $this->MainFestomodel->mainfesto_filter3($data);
            $this->template->load('main','searchMainfesto',['result'=>$result]);
        } 
       elseif($data['booking_from']==true){
            $result= $this->MainFestomodel->mainfesto_filter4($data);
            $this->template->load('main','searchMainfesto',['result'=>$result]);
        } 
            
        }
    
}
    