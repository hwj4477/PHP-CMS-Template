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

		const TABLE_EXAMPLE = 'example';

		function __construct()
		{
			parent::__construct();
		}

		// Example Model
		function getExample()
		{
			$this->db->select("*")->from(self::TABLE_EXAMPLE);
			
			$query = $this->db->get();

			return $query->result();
		}
	}
?>
