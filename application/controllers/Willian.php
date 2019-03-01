<?php 

	class Willian extends CI_Controller{
		public function index(){
			$data= array(
				'judul' => 'willian'
			);

			$this->load->view('willian', $data);
		}
	}
