<?php 

/*
+----------------------------------------------------------------------+
| Copyright (c) Content Manager System
+----------------------------------------------------------------------+
| 작업일 : 2014-1-15
| 파일설명 : 'Main' Controller
| 변경이력 :
+----------------------------------------------------------------------+
| 프로그래머: 홍우정
+----------------------------------------------------------------------+
*/

	class Main extends CI_Controller
	{

		function index()
		{
			$this->load->library('session');
			
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				$data['title'] = DEFAULT_TITLE;
	    		
				$this->load->view('main_v');
			}
			else
			{
				$data['title'] = DEFAULT_TITLE;

				$this->load->view('common/header', $data);
				$this->load->view('login_v');
				$this->load->view('common/footer', $data);
			}
	    }
	    
	    public function login()
	    {
			if($this->session->userdata("logged_in"))
	    	{
	    		$data = array();
	    		$data['title'] = DEFAULT_TITLE;
	    		 
	    		$this->load->view('main_v');
	    	}
	    	else{
	    		$username = $this->input->post('username');
	    		$password  = $this->input->post('password');
	    		
	    		if($username == USER_ID && $password == USER_PASS){
					$data['title'] = DEFAULT_TITLE;
	    			 
	    			$this->load->view('main_v');
	    		
	    			$this->session->set_userdata(
	    					array(
	    							"user_id" => $username,
	    							"logged_in" => TRUE,
	    					));
	    		}
	    		else{
	    			show_error("Login Error", 400);
	    		}
	    	}
	    }
	    
	    public function blank()
	    {
			if($this->session->userdata("logged_in"))
	    	{
	    		$data = array();
	    		$data['title'] = DEFAULT_TITLE;
	    		 
	    		$this->load->view('common/header', $data);
                $this->load->view('main_blank');
                $this->load->view('common/footer', $data);
	    	}
	    	else
	    	{
	    		show_error("Login Error", 400);
	    	}
	    }
	    
	    public function logout()
	    {
	    	$this->session->sess_destroy();
	    
	    	redirect("/");
	    }
	}
?>
