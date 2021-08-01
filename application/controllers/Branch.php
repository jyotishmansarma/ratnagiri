<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {

	
	function __construct(){
        parent::__construct();
        $this->load->model('Branchmodel');
		$this->load->library('Template');
	}
	public function index()
	{
		$this->template->load('main', 'branch/createbranch');

    }
    public function createBranch(){
        $this->load->library('form_validation');
		$this->form_validation->set_rules('branch_name','Branc Name','required');
        $this->form_validation->set_rules('branch_status','Status','required');
        $this->form_validation->set_rules('branch_code','Branch code','required');
		$this->form_validation->set_error_delimiters('<label class="alert alert-danger">','</label>');
		if($this->form_validation->run()){
        $inputs=$this->input->post();
        $this->Branchmodel->createbranch($inputs);
        $this->session->set_flashdata( 'submit','Branch is successfully created');
       
        redirect('Branch/index');
        }
        else 
	{
		$this->template->load('main', 'branch/createbranch');
		
	}

    }
    public function viewbranch()
	{     $this->load->library('pagination');
        $config=[
            'base_url'=> base_url('Branch/viewbranch'),
            'per_page'=>5,
            'total_rows' => $this->Branchmodel->num_rows(),
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
        $branch=$this->Branchmodel->viewbranch($config['per_page'],$this->uri->segment(3));
		$this->template->load('main', 'branch/viewbranch',['branch'=>$branch]);

    }
    public function editbranch($branch_id)
	{

        $branchName=$this->Branchmodel->findbranch($branch_id);
    
        $this->template->load('main', 'branch/editbranch',['branchName'=>$branchName]);
        

    }
    public function updateBranch($branch_id){
        $this->load->library('form_validation');
		$this->form_validation->set_rules('branch_name','Branc Name','required');
        $this->form_validation->set_rules('branch_status','Status','required');
        $this->form_validation->set_rules('branch_code','Branch code','required');
		$this->form_validation->set_error_delimiters('<label class="alert alert-danger">','</label>');
		if($this->form_validation->run()){
       $inputs=$this->input->post();
       $this->Branchmodel->updatebranch($branch_id,$inputs);
       $this->session->set_flashdata( 'submit','successfully Updated');
       redirect('Branch/viewbranch');
        }

        else 
        {
           
          $branchName=$this->Branchmodel->findbranch($branch_id);
    
          $this->template->load('main', 'branch/editbranch',['branchName'=>$branchName]);
            
        }
        

    }
}
