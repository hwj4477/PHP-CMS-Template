<?php

/*
+----------------------------------------------------------------------+
| Copyright (c) Content Manager System
+----------------------------------------------------------------------+
| 작업일 : 2014-1-17
| 파일설명 : 'Iface' Model
| 변경이력 :
+----------------------------------------------------------------------+
| 프로그래머: 홍우정
+----------------------------------------------------------------------+
*/

	class Iface_model extends CI_Model {

		const TABLE_PRODUCT = 'product';

		function __construct()
		{
			parent::__construct();
		}

		// Product Model
		function getProductAll()
		{
			$this->db->select("*")->from(self::TABLE_PRODUCT)->where('post', 1)->order_by('id', 'desc');
			
			$query = $this->db->get();

			return $query->result();
		}
		
		function getProductOnSale()
		{
			$this->db->select("*")->from(self::TABLE_PRODUCT)->where('post', 1)->where('sale', 1)->order_by('id', 'desc');
			
			$query = $this->db->get();

			return $query->result();
		}
		
		function getProduct($_id = 0)
		{
			$this->db->select("*")->from(self::TABLE_PRODUCT)->where('id', $_id);
			
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
		
		function getProductsRecommand($recomm_ids)
		{
			$ids = explode(',', trim($recomm_ids));

			$str_query = "SELECT * FROM product WHERE ";

			for ($i = 0; $i < count($ids); $i++)
		   	{
				 if($i < count($ids)-1)
				 {
					$str_query .= "product_id = " . $ids[$i] . " OR ";
				 }
				 else
				 {
					$str_query .= "product_id = " . $ids[$i] . ";";
				 }
			}

			$query = $this->db->query($str_query);

			return $query->result();
		}
	}
?>
