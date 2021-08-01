<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateManifesto extends CI_Controller {

	
	function __construct(){
        parent::__construct();
        $this->load->model('BookAloadmodel');
        $this->load->model('UserModel');
        $this->load->model('Mainfestomodel');
       
        $this->load->library('Template');
        if(!$this->session->userdata('id')){
            return redirect('Login');
        }
    }
    public function createmanifesto(){
       
        $checkbox=$this->input->post('checkbox');
       // $vehical_no=$this->input->post('vehical_no');
        $data =Array (
            'book_id'=>$this->input->post('checkbox'),
            'vehical_no'=>$this->input->post('vehical_no')
        );
        $total_amount=$this->Mainfestomodel->Total_amount($checkbox);
        $total_paid=$this->Mainfestomodel->Total_paid($checkbox);
        $total_amount=$this->Mainfestomodel->Total_amount($checkbox);
        $total_topay=$this->Mainfestomodel->Total_topay($checkbox);
        
       
        $this->BookAloadmodel->updabookAload($data); 
        
        $this->load->model('Mainfestomodel');

        $data= $this->Mainfestomodel->viewmanifesto($checkbox);
        
        $this->template->load('main','createmanifesto',['data'=>$data,'total_amount'=>$total_amount,'total_paid'=>$total_paid,'total_topay'=>$total_topay]);


       
       
        
        
     
        
    }
    public function htmlTopdf(){
        $input=$this->input->post('book_id');
        $this->load->model('htmlTopdfmodel');
        $data=$this->htmlTopdfmodel->htmlpdf($input);
        //print_r($data);die;
        
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
    public function CreateInvoice($book_id){
        
        $bookload=$this->BookAloadmodel->findbook($book_id);
        print_r($bookload);die;
    }
    
}
    
   


    