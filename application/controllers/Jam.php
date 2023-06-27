<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Jam extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        redirect_if_level_not('Manager');
        $this->load->model('Jam_model', 'jam');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['jam'] = $this->jam->get_all();
        // return $this->template->load('template', 'jam', $data);
        $this->load->view('template');
        $this->load->view('jam', $data);
        $this->load->view('footer');
    }

    public function update()
    {
        $id_jam = $this->input->post('id_jam');
        $start = $this->input->post('start');
        $finish = $this->input->post('finish');
        $data = [
            'id_jam' => $id_jam,
            'start' => $start,
            'finish' => $finish,
        ];

        $result = $this->jam->update_data($id_jam, $data);
        if ($result) {
            $response = [
                'status' => 'success',
                'message' => 'Jam Kerja telah diubah!',
                'data' => $result
            ];
        } else {
            $reponse = [
                'status' => 'error',
                'message' => 'Jam Kerja gagal diubah!'
            ];
        }
        $this->session->set_flashdata('response', $response);
        redirect('jam');
    }

    public function response_json($response)
    {
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}