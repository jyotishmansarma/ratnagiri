<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller  {

	function __construct(){
		parent::__construct();
		$this->load->library('Template');
		if(!$this->session->userdata('id')){

			return redirect('Login');
		// $this->load->view('Admins/login');
		}
	}
	public function index()
	{  
		$this->load->model('UserModel');
		$id=$this->session->userdata('id');
		$this->load->model('Dashboardmodel');
		$user=$this->Dashboardmodel->number_of_user();
		$branch=$this->Dashboardmodel->number_of_branch();
		$book=$this->Dashboardmodel->number_of_booking();
		$todaybook=$this->Dashboardmodel->number_of_todaybooking();
		$userdetails = $this->Dashboardmodel->userDetails($id);

		

		
		$data=$this->UserModel->dashboard($id);
		$type=$data->type;
		if($type==1){
			$this->template->load('main', 'dashboard',['user'=>$user,'branch'=>$branch,'book'=>$book,'todaybook'=>$todaybook,'userdetails'=>$userdetails]);

		}
		else
		    {
				
		$this->load->model('UserModel');
		$id=$this->session->userdata('id');
		$this->load->model('dashboardmodel');
		$user=$this->Dashboardmodel->number_of_user();
		$branch=$this->Dashboardmodel->number_of_branch();
		$book=$this->Dashboardmodel->number_of_booking();
		$todaybook=$this->Dashboardmodel->number_of_todaybooking();
		$userdetails = $this->Dashboardmodel->userDetails($id);
		$this->template->load('userdashboard', 'dashboard',['user'=>$user,'branch'=>$branch,'book'=>$book,'todaybook'=>$todaybook,'userdetails'=>$userdetails]);
				
			}

		
		
		
	}
}
