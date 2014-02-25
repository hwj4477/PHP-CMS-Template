<?php
/*
\+----------------------------------------------------------------------+
| Copyright (c) Content Manager System
+----------------------------------------------------------------------+
| 작업일 : 2014-2-19
| 파일설명 : Interface Controller
| 변경이력 :
+----------------------------------------------------------------------+
| 프로그래머: 홍우정
+----------------------------------------------------------------------+
*/

	// (for I/Fs)
	//result codes
	define("RESULT_CODE_SUCCESS",      1);
	define("RESULT_CODE_FAIL",         -1);
	define("REASON_CODE_NOPROBLEM",    0);
	define("REASON_CODE_ERROR",        99);

	//REQUEST VALUE
	define("PRODUCT_ID",		'product_id');
	define("RECOMMAND",			'recommand');
	
	class Iface extends CI_Controller{
		
		private function show_result($result_code = RESULT_CODE_FAIL, $reason_code = REASON_CODE_ERROR, $value = null, $extra_message = null)
		{
			$data['result'] = $this->buildup_json_result($result_code, $reason_code, $value, $extra_message);
		 
			$this->load->view('mobile/output', $data);	
		}
	
		private function buildup_json_result($result_code, $reason_code, $obj = null, $extra_message = null)
		{
			$result = array(
					"result_code" => $result_code,
					"reason_code" => $reason_code
			);
			
			if($obj)
				$result["result"] = $obj;
			if($extra_message)
				$result["extra"] = $extra_message;
		 
			return $result;
		}
	 
	 	public function getProductAll()
		{
			$this->load->model('iface_model');
			
			$product_result = $this->iface_model->getProductAll();
			
			if($product_result)
			{
				$this->show_result(
							RESULT_CODE_SUCCESS,
							REASON_CODE_NOPROBLEM,
							$product_result,
							null
					);
			}
			else
			{
				$this->show_result(
						RESULT_CODE_FAIL,
						REASON_CODE_ERROR,
						false,
						"Not Exist Products"
				);
			}
		}
		
	 	public function getProductOnSale()
		{
			$this->load->model('iface_model');
			
			$product_result = $this->iface_model->getProductOnSale();
			
			if($product_result)
			{
				$this->show_result(
							RESULT_CODE_SUCCESS,
							REASON_CODE_NOPROBLEM,
							$product_result,
							null
					);
			}
			else
			{
				$this->show_result(
						RESULT_CODE_FAIL,
						REASON_CODE_ERROR,
						false,
						"Not Exist Products"
				);
			}
		}
		
	 	public function getProductId()
		{
			$product_id = $this->input->post(PRODUCT_ID);
			
			$this->load->model('iface_model');
			
			$product_result = $this->iface_model->getProduct($product_id);
			
			if($product_result)
			{
				$this->show_result(
							RESULT_CODE_SUCCESS,
							REASON_CODE_NOPROBLEM,
							$product_result,
							null
					);
			}
			else
			{
				$this->show_result(
						RESULT_CODE_FAIL,
						REASON_CODE_ERROR,
						false,
						"Not Exist Products"
				);
			}
		}
		
	 	public function getProductsRecommand()
		{
			$recomm_ids = $this->input->post(RECOMMAND);
			
			$this->load->model('iface_model');

			$product_result = $this->iface_model->getProductsRecommand($recomm_ids);
			
			if($product_result)
			{
				$this->show_result(
							RESULT_CODE_SUCCESS,
							REASON_CODE_NOPROBLEM,
							$product_result,
							null
					);
			}
			else
			{
				$this->show_result(
						RESULT_CODE_FAIL,
						REASON_CODE_ERROR,
						false,
						"Not Exist Products"
				);
			}
		}
		
		public function test()
		{
			$this->load->view('mobile/test');
		}
	}
?>
