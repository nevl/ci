<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//require_once APPPATH."helpers/MY_qrcode_helper.php";
//require_once APPPATH."libraries/phpqrcode/phpqrcode.php";

class Welcome extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("MY_qrcode_helper");
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function qrcode()
    {
        $text = "hehe";
        qrcode($text);
    }
}
