<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logm extends CI_model {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->helper(array('array','string','url','form'));
		$this->load->library('upload');
	}
	public function inputm($user,$pass)
	{
		/*echo("model");
		die();*/
		$r=$this->db->where('Userid',$user)->where('Password',$pass)->get('log');
        if($r->num_rows()==1)
        {
        	echo("Successfully");
        }
        else
        {
        	echo("Try again");
        }
	}
	public function dash()
	{
		/*echo("i am here");
		die();*/
		$this->db->select('count(product.ID) as activep');
		$this->db->where('product.status=1');
		$this->db->limit(1);
		$activeid=$this->db->get('product');
		$actid=$activeid->row()->activep;

		$this->db->select('count(product.ID) as inactivep');
		$this->db->where('product.status=0');
		$this->db->limit(1);
		$inacid=$this->db->get('product');
		$inid=$inacid->row()->inactivep;


		$this->db->select('count(customer.ID) as activec');
		$this->db->where('customer.status=1');
		$this->db->limit(1);
		$acid=$this->db->get('customer');
		$acusid=$acid->row()->activec;

		$this->db->select('count(customer.ID)as inactivec');
		$this->db->where('customer.status=0');
		$this->db->limit(1);
		$inacid=$this->db->get('customer');
		$iacid=$inacid->row()->inactivec;


		$r=array('activep'=>$actid,
			'inactivep'=>$inid,
			'activec'=>$acusid,
			'inactivec'=>$iacid);
		/*print_r($r);
		die();*/
		return $r;
	}
	public function allpm()
	{
		$r=$this->db->get("product")->result_array();
		return $r;
	}
	public function activpm()
	{
		$r=$this->db->where('status',1)->get("product")->result_array();
		return $r;
	}
	public function inactivpm()
	{
		$r=$this->db->where('status',0)->get("product")->result_array();
		return $r;
	}
	public function activcm()
	{
		$r=$this->db->where('status',1)->get("customer")->result_array();
		return $r;
	}
	public function inactivcm()
	{
		$r=$this->db->where('status',0)->get("customer")->result_array();
		return $r;
	}
	public function allcm()
	{
		$r=$this->db->get("customer")->result_array();
		return $r;
	}
	public function uploadm($image_data)
   {
    //echo('I am in model');
    //die();
    $name=$this->input->post("name");
    $sub=$this->input->post("sub");
         

            $array=array('Name'=>$name,
                'Subject'=>$sub,
               'Image'=>$image_data
            );
            //print_r($array);
             //die();
         $this->db->insert("upload",$array);
         return true;
   }
   public function viewm()
   {
   	$r=$this->db->get('upload')->result_array();
   	return $r;
   }
   public function delm($id)
   {
   	$r['all_user']=$this->db->where('ID',$id)->delete("upload");
   	return $r;
   }

}