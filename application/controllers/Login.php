<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->library('Template');
		if($this->session->userdata('id')){
		
			return redirect('Dashboard/index');
		//	return redirect('isvalidation');
			
			
		 //$this->load->view('Admins/login');
		}
	}
	public function index()
	{
		$this->template->load('default', 'branch/userlogin');
	

	}
	public function isvalidation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">','</div>');
		if($this->form_validation->run()){
		
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$this->load->model('UserModel');
		$data1=$this->UserModel->loginvalidation($email,$password);
		
        if($data1){
        $id=$data1->id;
        
        
	    $type=$data1->type;
		$status=$data1->status;
	
		
		
		   
		
		   //logic true
		    if($id){
				if($type==1){
					if($status==1){
						
						
                        $this->load->library('session');
						$this->session->set_userdata('id',$id);
						
		$this->load->model('UserModel');
		$id=$this->session->userdata('id');
		$this->load->model('Dashboardmodel');
		$user=$this->Dashboardmodel->number_of_user();
		$branch=$this->Dashboardmodel->number_of_branch();
		$book=$this->Dashboardmodel->number_of_booking();
		$todaybook=$this->Dashboardmodel->number_of_todaybooking();
		$userdetails = $this->Dashboardmodel->userDetails($id);

		

		
		$data=$this->UserModel->dashboard($id);
					
						
		$this->template->load('main', 'dashboard',['user'=>$user,'branch'=>$branch,'book'=>$book,'todaybook'=>$todaybook,'userdetails'=>$userdetails]);
					}
					else{
						$this->session->set_flashdata('login_faild','Your account is Dactivated');
				        redirect('Login');
					}
				}
		        else{
					if($status==1){

						
                        $this->load->library('session');
						$this->session->set_userdata('id',$id);
						$this->load->model('UserModel');
		$id=$this->session->userdata('id');
		$this->load->model('Dashboardmodel');
		$user=$this->Dashboardmodel->number_of_user();
		$branch=$this->Dashboardmodel->number_of_branch();
		$book=$this->Dashboardmodel->number_of_booking();
		$todaybook=$this->Dashboardmodel->number_of_todaybooking();
		$userdetails = $this->Dashboardmodel->userDetails($id);
		$this->template->load('userdashboard', 'dashboard',['user'=>$user,'branch'=>$branch,'book'=>$book,'todaybook'=>$todaybook,'userdetails'=>$userdetails]);
						
			           // $this->template->load('userdashboard', 'dashboard');
					}
					else{
						$this->session->set_flashdata('login_faild','Your account is Dactivated');
				        redirect('Login');
					}
				}

			
			}
		}
			else{
				$this->session->set_flashdata('login_faild','invalid username/password');
			    redirect('Login/index');
		    }
		      
	
		   
		
	
		}
		
	else 
	{
		$this->template->load('default', 'branch/userlogin');
		
		
	}
	}
	

	
}
		
      
	

	