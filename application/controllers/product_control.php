<?php

/*
+----------------------------------------------------------------------+
| Copyright (c) Content Manager System
+----------------------------------------------------------------------+
| 작업일 : 2014-1-17
| 파일설명 : 'Product' Controller
| 변경이력 :
+----------------------------------------------------------------------+
| 프로그래머: 홍우정
+----------------------------------------------------------------------+
*/

	class Product_control extends CI_Controller
	{		
		public function __construct()
		{
		   parent::__construct();
		   $this->load->helper(array('url', 'form'));
		   $this->load->library(array('session', 'encrypt'));
		}
		
		public function productAll()
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				$data['title'] = 'Product Manage Page';
				
				$this->load->model('product_model');
						
				$data['product'] = $this->product_model->getProductAll();
// 				$data['pass'] = sha1(md5('pass123'));
	
				$this->load->view('header', $data);
				$this->load->view('product/product_list', $data);
				$this->load->view('footer', $data);
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		
		public function productDetail($_id = 0)
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				$data['title'] = 'Product Detail Page';
				
				$this->load->model('product_model');
				
				$data['product'] = $this->product_model->getProduct($_id);
				
				$this->load->view('header', $data);
				$this->load->view('product/product_detail', $data);
				// $this->load->view('upload_form', $data);
				// $this->load->view('footer', $data);
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function productModify($_id = 0)
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				$data['title'] = 'Product Modify Page';
				
				$this->load->model('product_model');
				
				$data['product'] = $this->product_model->getProduct($_id);
				
				$this->load->view('header', $data);
				$this->load->view('product/product_modify', $data);
				// $this->load->view('upload_form', $data);
				// $this->load->view('footer', $data);
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function productRegister()
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				$data['title'] = 'Product Register Page';
				
				$this->load->view('header', $data);
				$this->load->view('product/product_register', $data);
				// $this->load->view('upload_form', $data);
				// $this->load->view('footer', $data);
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function productInsert()
		{
			if($this->session->userdata("logged_in"))
			{
				$this->load->model('product_model');
				
				$data = array();
				
				$param = array(
					"brand" => $this->input->post('brand'),
					"type" => $this->input->post('type'),
					"product_id" => $this->input->post('product_id'),
					"name" => $this->input->post('name'),
					"recommand" => $this->input->post('recommand'),
					"price" => $this->input->post('price'),
					"sale" => $this->input->post('sale'),
					"post" => $this->input->post('post'),
					"try" => $this->input->post('try'),
					"image_thum" => $this->input->post('image_thum'),
					"image_detail" => $this->input->post('image_detail'),
					"image_try1" => $this->input->post('image_try1'),
					"image_try2" => $this->input->post('image_try2'),
					"video" => $this->input->post('video'),
				);
				
				if($this->product_model->insertProduct($param))
				{
					$data['title'] = 'Product Manage Page';
				
					$this->load->model('product_model');
						
					$data['product'] = $this->product_model->getProductAll();
	
					$this->load->view('header', $data);
					$this->load->view('product/product_list', $data);
					$this->load->view('footer', $data);
				}
				else
				{
					show_error("Error : Insert error", 401);
				}
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function productUpdate($_id = 0)
		{
			if($this->session->userdata("logged_in"))
			{
				$this->load->model('product_model');
				
				$data = array();
				
				$param = array(
					"brand" => $this->input->post('brand'),
					"type" => $this->input->post('type'),
					"product_id" => $this->input->post('product_id'),
					"name" => $this->input->post('name'),
					"recommand" => $this->input->post('recommand'),
					"price" => $this->input->post('price'),
					"sale" => $this->input->post('sale'),
					"post" => $this->input->post('post'),
					"try" => $this->input->post('try'),
					"image_thum" => $this->input->post('image_thum'),
					"image_detail" => $this->input->post('image_detail'),
					"image_try1" => $this->input->post('image_try1'),
					"image_try2" => $this->input->post('image_try2'),
					"video" => $this->input->post('video'),
				);
	
				if($this->product_model->updateProduct($param, $_id))
				{
					$data['title'] = 'Product Manage Page';
				
					$this->load->model('product_model');
						
					$data['product'] = $this->product_model->getProductAll();
	
					$this->load->view('header', $data);
					$this->load->view('product/product_list', $data);
					$this->load->view('footer', $data);
				}
				else
				{
					show_error("Error : Update error", 401);
				}
			}
			else
			{
				show_error("Error : User Check", 401);
			}
		}
		
		public function productDelete($_id = 0)
		{
			if($this->session->userdata("logged_in"))
			{
				$data = array();
				
				$this->load->model('product_model');
						
						
				if($this->product_model->deleteProduct($_id))
				{
					$data['title'] = 'Product Manage Page';
					
					$data['product'] = $this->product_model->getProductAll();
				
					$this->load->view('header', $data);
					$this->load->view('product/product_list', $data);
					$this->load->view('footer', $data);
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
		
		// helper
		public function uploadify()
		{
			$config['upload_path'] = "./www/upload/product";
			$config['overwrite'] = TRUE; 
			$config['allowed_types'] = '*';
			$config['max_size'] = 0;
			$config['file_name'] = $_POST['filename'];
			$this->load->library('upload', $config);
	
			if ( ! $this->upload->do_upload())
			{
				$error = $this->upload->display_errors();
				var_dump($this->upload->data());
				var_dump($error);
			}
			else
			{
				$data = $this->upload->data();
	
				var_dump($data);
			}
		}
	}
?>
