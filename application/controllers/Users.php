<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	
	function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
        $this->load->library('Template');
        if(!$this->session->userdata('id')){
            return redirect('Login');
        // $this->load->view('Admins/login');
        }
	}
	public function index()
    {   $data= $this->UserModel->getBranchname();
        $this->template->load('main','Users/createusers',['data'=>$data]);
       

    }
    public function logout(){
		$this->session->unset_userdata('id');
		return redirect('Login/index');
	}
    public function createUser(){
       
        $inputs=$this->input->post();
        $this->UserModel->createuser($inputs);
        $this->session->set_flashdata( 'submit','User is successfully created');
        redirect('Users/index');
        
       
    }
    public function viewUser()
    {   $this->load->library('pagination');
        $config=[
            'base_url'=> base_url('Users/viewUser'),
            'per_page'=>5,
            'total_rows' => $this->UserModel->num_rows(),
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
        $user=$this->UserModel->viewuser($config['per_page'],$this->uri->segment(3));
        $this->template->load('main', 'Users/viewuser',['user'=>$user]);
        

    }
    public function edituser($id)
	{

        $data=$this->UserModel->findbranch($id);
        $branchname= $this->UserModel->getBranchname();
    
        $this->template->load('main','users/edituser',['data'=>$data,'branchname'=> $branchname]);
        

    }
    public function updateUser($id){
        $inputs=$this->input->post();
        $this->UserModel->updateuser($id,$inputs);
        redirect('Users/viewuser');
    }
     
}