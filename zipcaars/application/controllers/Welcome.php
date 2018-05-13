<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	    {
	        parent::__construct();
				/*	$this->isLogin();*/
	        // load Session Library
	        $this->load->library('session');

	        // load url helper
	        $this->load->helper('url');
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
		$u_id=$this->input->post('userId');
		$this->session->set_userdata('userId', $u_id);

			$this->load->view('index');

	}
	/*private function isLogin(){
			if($this->session->userdata('userId' == '')){
					redirect('/welcome');
			}
			else{
				redirect('/home');
			}
	}*/
}
