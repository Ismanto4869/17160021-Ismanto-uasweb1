<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}
	
	public function home(){
		$data="Welcome";
		$this->template->load("theme","formuas",$data);
	
	  }

	public function save()
	{
		 $firstname=$this->input->post('firstname');
         $lastname=$this->input->post('lastname');
         $gender=$this->input->post('gender');
         $birth=$this->input->post('birth');
         $category=$this->input->post('category');
		 $membership=$this->input->post('membership');
		 echo $firstname ;
	
		 $this->load->model('Modeluas');
		 $this->Modeluas->save($firstname,$lastname,$gender,$birth,$category,$membership);
	     redirect('welcome/viewdata');
	}

	public function viewdata(){
		$this->load->model('Modeluas');
		$data['person'] = $this->Modeluas->select_data()->result();
		$this->template->load('theme', 'output', $data);
	}
	public function deldata($firstname,$lastname,$gender,$birth,$category,$membership){
		$this->load->model('Modeluas');
		$this->Moduas->delete_data();
	}
}
