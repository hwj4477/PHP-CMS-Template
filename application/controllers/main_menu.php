<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
+----------------------------------------------------------------------+
| Copyright (c) Content Manager System
+----------------------------------------------------------------------+
| 작업일 : 2014-1-15
| 파일설명 : 'main_menu' Controller
| 변경이력 :
+----------------------------------------------------------------------+
| 프로그래머: 홍우정
+----------------------------------------------------------------------+
*/

class Main_menu extends CI_Controller
{
	public function index()
	{
		if($this->session->userdata("logged_in"))
		{
			$data = array();
			$data['title'] = DEFAULT_TITLE;

			$this->load->view('common/header', $data);
			$this->load->view('main_menu');
			$this->load->view('common/footer', $data);
		}
		else
		{
			show_error("Login Error", 401);
		}
	}
}

