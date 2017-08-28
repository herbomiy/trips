<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends CI_Controller {

	/**
	 * Home Page for this controller.
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
	//	图标
	public function icon()
	{
		$this->load->view('icon');
	}

	//  登录
    public function error()
    {
        $this->load->view('error');
    }
}
