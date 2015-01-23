<?php

/*
+----------------------------------------------------------------------+
| Copyright (c) Content Manager System
+----------------------------------------------------------------------+
| 작업일 : 2014-1-17
| 파일설명 : 'Example' Controller
| 변경이력 :
+----------------------------------------------------------------------+
| 프로그래머: 홍우정
+----------------------------------------------------------------------+
*/

	class Example_control extends CI_Controller
	{		
		public function __construct()
		{
		   parent::__construct();
		   
		   $this->load->model('example_model');
		}
		
		public function exampleList()
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				$data['title'] = 'Example Manage Page';
				
				$data['data'] = $this->example_model->getExampleList();
				$data['field'] = $this->example_model->getField();
	
				$this->load->view('common/header', $data);
				$this->load->view('example/example_list', $data);
				$this->load->view('common/footer', $data);
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function exampleRegister()
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();

				$data['title'] = 'Example Register Page';
				
				$data['field'] = $this->example_model->getField();
				
				$this->load->view('common/header', $data);
				$this->load->view('example/example_register', $data);
				$this->load->view('common/footer', $data);
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function exampleDetail($_id = 0)
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				$data['title'] = 'Example Detail Page';
				
				$data['data'] = $this->example_model->getExample($_id);
				$data['field'] = $this->example_model->getField();
				
				$this->load->view('common/header', $data);
				$this->load->view('example/example_detail', $data);
				$this->load->view('common/footer', $data);
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function exampleModify($_id = 0)
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				$data['title'] = 'Example Modify Page';
				
				$data['data'] = $this->example_model->getExample($_id);
				$data['field'] = $this->example_model->getField();
				
				$this->load->view('common/header', $data);
				$this->load->view('example/example_modify', $data);
				$this->load->view('common/footer', $data);
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function exampleDelete($_id = 0)
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				
				$this->load->model('example_model');
						
				if($this->example_model->deleteExample($_id))
				{
					$data['title'] = 'Example Manage Page';
					
					$data['data'] = $this->example_model->getExampleList();
					$data['field'] = $this->example_model->getField();
				
					$this->load->view('common/header', $data);
					$this->load->view('example/example_list', $data);
					$this->load->view('common/footer', $data);
				}
				else
				{
					show_error("Error : Delete error", 401);
				}
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function exampleInsert()
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				
				$this->load->model('example_model');
						
				if($this->example_model->insertExample($this->input->post()))
				{
					$data['title'] = 'Example Manage Page';
					
					$data['data'] = $this->example_model->getExampleList();
					$data['field'] = $this->example_model->getField();
				
					$this->load->view('common/header', $data);
					$this->load->view('example/example_list', $data);
					$this->load->view('common/footer', $data);
				}
				else
				{
					show_error("Error : Delete error", 401);
				}
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function exampleUpdate($_id)
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				
				$this->load->model('example_model');
						
				if($this->example_model->updateExample($_id, $this->input->post()))
				{
					$data['title'] = 'Example Manage Page';
					
					$data['data'] = $this->example_model->getExampleList();
					$data['field'] = $this->example_model->getField();
				
					$this->load->view('common/header', $data);
					$this->load->view('example/example_list', $data);
					$this->load->view('common/footer', $data);
				}
				else
				{
					show_error("Error : Delete error", 401);
				}
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
	}
?>
