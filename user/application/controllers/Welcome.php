<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->helper(array('array','string','url','form'));
		$this->load->model("logm");
		$this->load->library("session");
		$this->load->library('upload');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('upload');
	}
	public function inputc()
	{
       /* echo("controler");
        die();*/
        $user=$this->input->post('user');
        $pass=$this->input->post('pass');
        $r=$this->logm->inputm($user,$pass);
        if($user == 'admin' && $pass == 'ad12345')
        {
        	$user=$this->input->post('user');
        	$pass=$this->input->post('pass');
        	$result=array('uid'=>$user,
        		'pid'=>$pass);
        	$this->session->set_userdata('ci_session',$user);
        	/*$r=$this->session->userdata('ci_session');
        	echo($r);*/
        	if($this->session->userdata('ci_session'))
        	{
        		$r=$this->logm->dash();
        	$this->load->view('dashboard',$r);
        	}
        	else
        	{
        	$this->load->view('log_in');
        	$user=" ";
        	}
        	
        }
        else
        {
        	$this->load->view('log_in');
        }
	}
	public function allp()
	{
		if($this->session->userdata('ci_session'))
		{
		$result['all_user']=$this->logm->allpm();
		$this->load->view('totalproduct',$result);
	    }
	    else
	    {
	    	$this->load->view('log_in');
	    }
	}
	public function activp()
	{
		if($this->session->userdata('ci_session'))
		{
		$result['all_user']=$this->logm->activpm();
		$this->load->view('activeproduct',$result);
	    }
	    else
	    {
	    	$this->load->view('log_in');
	    }

	}
	public function inactivp()
	{
		if($this->session->userdata('ci_session'))
		{
		$result['all_user']=$this->logm->inactivpm();
		$this->load->view('inactiveproduct',$result);
	    }
	    else
	    {
	    	$this->load->view('log_in');
	    }

	}
	public function activc()
	{
		if($this->session->userdata('ci_session'))
		{
		$result['all_user']=$this->logm->activcm();
		$this->load->view('activecustomer',$result);
		}
	    else
	    {
	    	$this->load->view('log_in');
	    }
	}
	public function inactivc()
	{
		if($this->session->userdata('ci_session'))
		{
		$result['all_user']=$this->logm->inactivcm();
		$this->load->view('inactivecustomer',$result);
		}
	    else
	    {
	    	$this->load->view('log_in');
	    }
	}
	public function allc()
	{
		if($this->session->userdata('ci_session'))
		{
		$result['all_user']=$this->logm->allcm();
		$this->load->view('totalcustomer',$result);
		}
	    else
	    {
	    	$this->load->view('log_in');
	    }
	}
	public function logout()
	{
		/*echo("I am here");
		die();*/
		$this->session->unset_userdata('ci_session');
		echo("Log out successfully");

		$this->load->view('log_in');
	}
	public function upload()
	{
		//echo("Ready to upload");
		//die();
		$config['upload_path'] = './upload/';
    $config['allowed_types']        = 'jpg|png|jpeg|pdf';
    $config['max_size']             = '50000000000';
    //echo("I am here");
    //die();
    $this->load->library('upload',$config);
    $this->upload->initialize($config);

    if(!$this->upload->do_upload('userfile'))
    {
    	 // echo("Hi");
    	 //echo("I am here");
       //die();
      $error=array('error'=>$this->upload->display_errors());
      print_r($error);
    }
    else
    {
    	 $data=$this->upload->data();
    	 $this->load->model("logm");
    	 $image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
       $image_data=$image_path;
       if($this->logm->uploadm($image_data))
        {
            //$this->load->view("teachers_notes_success");
        	echo("Successfully uploaded");
        	//$this->load->view('success');
        }
        else
        {
            //$this->load->view("teachers_global_error_msg");
        	echo("Not Successfully uploaded");
        }
    }
	}
	public function viewc()
	{
		$r['all_user']=$this->logm->viewm();
		if($r==true)
		{
			$this->load->view('view',$r);
		}
		else
		{
			$this->load->view('upload');
		}
		
	}
	public function up()
	{
		$this->load->view('upload');
	}
	public function del()
	{
		$id=$this->input->get('id');
		$r['all_user']=$this->logm->delm($id);
		if($r==1)
		{
			echo("Successfully Deleted");
			$r['all_user']=$this->logm->viewm();
			$this->load->view('view',$r);
		}
		else
		{
			echo("Try again");
			$r['all_user']=$this->logm->viewm();
			$this->load->view('view',$r);
		}
	}
}
