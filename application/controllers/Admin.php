<?php 

class Admin extends CI_Controller{
	public function index(){
		$anjing = array(
			'nama' => 'Hello world'
		);
		
		$this->load->view('hello',$anjing);
	}
}