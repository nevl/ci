<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello extends CI_Controller{

	public function index(){
		// echo "hello";
		$data['title'] = 'CI 框架';
		$data['content'] = 'CI 框架是一个小巧而快速的PHP框架';
		$this->load->view('hello.html',$data);
	}
}