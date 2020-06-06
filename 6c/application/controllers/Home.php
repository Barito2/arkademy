<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Home_m');
	}

	public function index()
	{
		$data['row'] = $this->Home_m->get();
		$this->load->view('home', $data);
	}

	public function add()
	{
		$post = $this->input->post(null, true);
		$this->Home_m->add($post);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil di tambah');
		}
		echo "<script>window.location = '" . site_url('home') . "';</script>";
	}

	public function edit()
	{
		$post = $this->input->post(null, true);
		$this->Home_m->edit($post);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data berhasil di edit');
		}
		echo "<script>window.location = '" . site_url('home') . "';</script>";
	}

	public function del($id)
	{
		$this->Home_m->del($id);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data dengan id = ' . $id . ' Berhasil Dihapus');
		}
		echo "<script>window.location = '" . site_url('home') . "';</script>";
	}
}
