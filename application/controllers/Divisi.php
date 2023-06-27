<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Divisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        redirect_if_level_not('Manager');
        $this->load->model('Divisi_model', 'divisi');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['divisi'] = $this->divisi->get_all();
        // $data['jlhdata'] = $this->divisi->getData()->num_rows();
        // // return $this->template->load('template', 'divisi', $data);
        // $this->load->library('pagination');
        // $config['base_url'] = base_url().'/divisi/index';
        // $config['total_rows'] = $data['jlhdata'];
        // $config['per_page'] = 2;

        // $this->pagination->initialize($config);

        // $data['link'] = $this->pagination->create_links();
        $this->load->view('template');
        $this->load->view('divisi', $data);
        $this->load->view('footer');
    }

    public function store()
    {
        $nama_divisi = $this->input->post('nama_divisi');
        $result = $this->divisi->insert_data(['nama_divisi' => $nama_divisi]);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Divisi berhasil ditambahkan!',
                'data' => $result
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Divisi gagal ditambahkan!'
            ];
        }
        $this->session->set_flashdata('response', $response);
        redirect('divisi');
    }

    public function update()
    {
        $id_divisi = $this->input->post('id_divisi');
        $nama_divisi = $this->input->post('nama_divisi');
        $data = [
            'id_divisi' => $id_divisi,
            'nama_divisi' => $nama_divisi,
        ];

        $result = $this->divisi->update_data($id_divisi, $data);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Divisi berhasil diupdate!',
                'data' => $result
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Divisi gagal diupdate!'
            ];
        }
        $this->session->set_flashdata('response', $response);
        redirect('divisi');
    }

    public function destroy()
    {
        $id_divisi = $this->uri->segment(3);
        $result = $this->divisi->delete_data($id_divisi);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Divisi telah dihapus!'
            ];
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Divisi gagal dihapus!'
            ];
        }

        $this->session->set_flashdata('response', $response);
        redirect('divisi');
    }

    private function response_json($response)
    {
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
