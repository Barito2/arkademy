<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Food_m');
    }

    public function index()
    {

        $data['data'] = $this->Food_m->get()->result();

        $this->load->view('template/header');
        $this->load->view('crud/index', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $data['category'] = $this->Food_m->get_category()->result();
        $data['cashier'] = $this->Food_m->get_cashier()->result();

        $this->load->view('template/header');
        $this->load->view('crud/add', $data);
        $this->load->view('template/footer');

        $post = $this->input->post(null, true);
        if (isset($_POST['submit'])) {
            $this->Food_m->add($post);
            redirect('home');
        }
    }

    public function edit($id)
    {
        $query = $this->Food_m->get($id);
        if ($query->num_rows() > 0) {
            $data['row'] = $query->row();
            $this->load->view('template/header');
            $this->load->view('crud/edit', $data);
            $this->load->view('template/footer');

            if (isset($_POST['submit'])) {
                $post = $this->input->post(null, true);
                $this->Food_m->edit($post);
                redirect('home');
            }
        } else {
            echo "<script>alert('Data tidak ditemukan');";
            echo "window.location = '" . site_url('user') . "';</script>";
        }
    }

    public function del($id)
    {
        $this->Food_m->del($id);
        if ($this->db->affected_rows() > 0) {
            echo "<script>alert('Data Berhasil Dihapus');</script>";
        }
        echo "<script>window.location = '" . site_url('home') . "';</script>";
    }
}
