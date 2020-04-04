<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Food_m extends CI_Model
{
    public function add($post)
    {
        $params = [
            'name' => $post['name'],
            'price' => $post['price'],
            'id_category' => $post['category'],
            'id_cashier' => $post['cashier'],
        ];

        $this->db->insert('product', $params);
    }

    public function get_category()
    {
        $this->db->from('category');
        $query = $this->db->get();

        return $query;
    }

    public function get_cashier()
    {
        $this->db->from('cashier');
        $query = $this->db->get();

        return $query;
    }

    public function get($id = null)
    {
        $this->db->select('product.*, category.name as category_name, cashier.name as cashier_name');
        $this->db->from('product');
        $this->db->join('category', 'category.id_category = product.id_category');
        $this->db->join('cashier', 'cashier.id_cashier = product.id_cashier');
        $this->db->order_by('id', 'asc');

        if ($id != null) {
            $this->db->where('id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $param = [
            'name' => $post['name'],
            'price' => $post['price'],
            'id_category' => $post['category'],
            'id_cashier' => $post['cashier'],
        ];

        $this->db->where('id', $post['id']);
        $this->db->update('product', $param);
    }

    public function del($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('product');
    }
}
