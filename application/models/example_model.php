<?php

/*
+----------------------------------------------------------------------+
| Copyright (c) Content Manager System
+----------------------------------------------------------------------+
| 작업일 : 2014-1-17
| 파일설명 : 'Example' Model
| 변경이력 :
+----------------------------------------------------------------------+
| 프로그래머: 홍우정
+----------------------------------------------------------------------+
*/

	class Example_model extends CI_Model {

		const TABLE = 'example';

		function __construct()
		{
			parent::__construct();
		}
		
		function getField()
		{
			return $this->db->field_data(self::TABLE);
		}
		
		function getExampleList()
		{
			$this->db->select("*")->from(self::TABLE)->order_by('id', 'desc');
			
			$query = $this->db->get();

			return $query->result_array();
		}
		
		function getExample($_id)
		{
			$this->db->select("*")->from(self::TABLE)->where('id', $_id);
			
			$query = $this->db->get();
			
			$result = $query->result_array();
			
			if(count($result) > 0)
			{
				return $query->result_array()[0];	
			}
			else
			{
				return null;			
			}
		}
		
		function insertExample($data)
		{
			return $this->db->insert(self::TABLE, $data);
		}
		
		function updateExample($_id, $data)
		{
			return $this->db->where('id', $_id)->update(self::TABLE, $data);
		}
		
		function deleteExample($_id)
		{
			return $this->db->where("id", $_id)->delete(self::TABLE);
		}
	}
?>
