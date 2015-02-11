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
		
		public function index()
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				$data['title'] = 'Example Manage Page';
				
				$data['class'] = $this->router->fetch_class();
				$data['field'] = $this->example_model->getField();
				$data['data'] = $this->example_model->getDataList();
	
				$this->load->view('common/header', $data);
				$this->load->view('example/example_list', $data);
				$this->load->view('common/footer', $data);
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function register()
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();

				$data['title'] = 'Example Register Page';
				
				$data['class'] = $this->router->fetch_class();
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
		
		public function detail($_id = 0)
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				$data['title'] = 'Example Detail Page';
				
				$data['class'] = $this->router->fetch_class();
				$data['field'] = $this->example_model->getField();
				$data['data'] = $this->example_model->getRow($_id);
				
				$this->load->view('common/header', $data);
				$this->load->view('example/example_detail', $data);
				$this->load->view('common/footer', $data);
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function modify($_id = 0)
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				$data['title'] = 'Example Modify Page';
				
				$data['class'] = $this->router->fetch_class();
				$data['field'] = $this->example_model->getField();
				$data['data'] = $this->example_model->getRow($_id);
				
				$this->load->view('common/header', $data);
				$this->load->view('example/example_modify', $data);
				$this->load->view('common/footer', $data);
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function delete($_id = 0)
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				
				$this->load->model('example_model');
						
				if($this->example_model->delete($_id))
				{
					$data['title'] = 'Example Manage Page';
					
					$data['class'] = $this->router->fetch_class();
					$data['field'] = $this->example_model->getField();
					$data['data'] = $this->example_model->getDataList();
				
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
		
		public function insert()
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				
				$this->load->model('example_model');
						
				if($this->example_model->insert($this->input->post()))
				{
					$data['title'] = 'Example Manage Page';
					
					$data['class'] = $this->router->fetch_class();
					$data['field'] = $this->example_model->getField();
					$data['data'] = $this->example_model->getDataList();
				
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
		
		public function update($_id)
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				
				$this->load->model('example_model');
						
				if($this->example_model->update($_id, $this->input->post()))
				{
					$data['title'] = 'Example Manage Page';
					
					$data['class'] = $this->router->fetch_class();
					$data['field'] = $this->example_model->getField();
					$data['data'] = $this->example_model->getDataList();
				
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
