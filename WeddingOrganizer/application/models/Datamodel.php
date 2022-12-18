<?php

	class Datamodel extends CI_Model{

		public function tampilData($table)
		{
			return $this->db->get($table);
		}

		public function cek_login($email, $password, $table)
		{
			$this->db->where("email", $email);
			$this->db->where("password", $password);
			return $this->db->get($table);
		}

		public function paket_where($table)
		{
			$this->db->where("harga_termasuk", null);
			return $this->db->get($table);
		}
		public function paket_not_where($table)
		{
			$this->db->where("harga_paket", null);
			return $this->db->get($table);
		}
		public function getWhere($where, $table)
		{
			$this->db->where($where);
			return $this->db->get($table);
		}

		public function tambahData($data, $table)
		{
			$this->db->insert($table, $data);
		}
		public function updateData($where, $data, $table)
		{
			$this->db->where($where);
			$this->db->update($table, $data);
		}
		public function deleteData($where, $table)
		{
			$this->db->where($where);
			$this->db->delete($table);
		}
		public function getWithLimit($table, $order, $filter, $limit)
		{
			$this->db->order_by($order, $filter);
			$this->db->limit($limit);
			return $this->db->get($table);
		}


	}

?>