<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_m extends CI_Model
{
	public function get($id = null)
	{
		$this->db->select('product.*,category.name as category_name,category.id_category as category_id, cashier.name as cashier_name,cashier.id_cashier as cashier_id');
		$this->db->from('product');
		$this->db->join('category', 'product.id_category=category.id_category');
		$this->db->join('cashier', 'product.id_cashier=cashier.id_cashier');
		if ($id != null) {
			$this->db->where('id_product', $id);
		}

		$query = $this->db->get();
		return $query;
	}


	public function add($post)
	{
		$params = [
			'name' => $post['name'],
			'price' => $post['price'],
			'id_category' => $post['id_category'],
			'id_cashier' => $post['id_cashier'],
		];

		$this->db->insert('product', $params);
	}

	public function edit($post)
	{
		$params = [
			'name' => $post['name'],
			'price' => $post['price'],
			'id_category' => $post['id_category'],
			'id_cashier' => $post['id_cashier'],
		];

		$this->db->where('id_product', $post['id']);
		$this->db->update('product', $params);
	}

	public function del($id)
	{
		$this->db->where('id_product', $id);
		$this->db->delete('product');
	}
}
