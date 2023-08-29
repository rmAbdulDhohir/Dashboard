<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
   public function index()
   {
      $data['title'] = 'Karyawan';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['menu'] = $this->db->get('karyawan')->result_array();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/index', $data);
      $this->load->view('templates/footer');
   }

   public function data_it()
   {
      $data['title'] = 'Data IT';
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $data['menu'] = $this->db->get('data_it')->result_array();

      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/data_it', $data);
      $this->load->view('templates/footer');
   }
}
