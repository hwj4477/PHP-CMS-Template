<?php

/*
+----------------------------------------------------------------------+
| Copyright (c) Content Manager System
+----------------------------------------------------------------------+
| 작업일 : 2014-1-17
| 파일설명 : 'Product' Model
| 변경이력 :
+----------------------------------------------------------------------+
| 프로그래머: 홍우정
+----------------------------------------------------------------------+
*/

	class Product_model extends CI_Model {

		const TABLE = 'product';

		function __construct()
		{
			parent::__construct();
		}
		
		function getProductFieldData()
		{
			return $this->db->field_data(self::TABLE);
		}
		
		function getProductList()
		{
			$this->db->select("*")->from(self::TABLE)->order_by('id', 'desc');
			
			$query = $this->db->get();

			return $query->result_array();
		}

		function getProductAll()
		{
			$this->db->select("*")->from(self::TABLE)->order_by('id', 'desc');
			
			$query = $this->db->get();

			return $query->result();
		}

		function getProduct($_id = 0)
		{
			$this->db->select("*")->from(self::TABLE)->where('id', $_id);
			
			$query = $this->db->get();
			
			if ( $query->num_rows() > 0 )
			{
				$result = $query->result();

				return $result[0];
			}
			else
			{
				return null;
			}
		}
		
		function insertProduct($data)
		{
			return $this->db->insert(self::TABLE,
			array(
				"brand" => $data['brand'],
				"type" => $data['type'],
				"product_id" => $data['product_id'],
				"name" => $data['name'],
				"recommand" => $data['recommand'],
				"price" => $data['price'],
				"sale" => $data['sale'],
				"post" => $data['post'],
				"try" => $data['try'],
				"image_thum" => $data['image_thum'],
				"image_detail" => $data['image_detail'],
				"image_try1" => $data['image_try1'],
				"image_try2" => $data['image_try2'],
				"video" => $data['video'],
			));
		}
		
		function updateProduct($data, $_id)
		{
			return $this->db->where("id", $_id)->update(self::TABLE, array(
					"brand" => $data['brand'],
					"type" => $data['type'],
					"product_id" => $data['product_id'],
					"name" => $data['name'],
					"recommand" => $data['recommand'],
					"price" => $data['price'],
					"sale" => $data['sale'],
					"post" => $data['post'],
					"try" => $data['try'],
					"image_thum" => $data['image_thum'],
					"image_detail" => $data['image_detail'],
					"image_try1" => $data['image_try1'],
					"image_try2" => $data['image_try2'],
					"video" => $data['video'],
					));	
		}
		
		function deleteProduct($_id = 0)
		{
			return $this->db->where("id", $_id)->delete(self::TABLE);
		}
	}
?>
