<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contoh extends CI_Controller
{
    public function index()
    {
        // tidak di rekomendasikan
        // echo "<h1>Hallo ini adalah contoh controller</h1>";

        $this->load->view("contoh_view");
    }

    public function mahasiswa()
    {

        // load table/model from database
        $this->load->model("ModelMahasiswa");

        // assign data from model mahasiswa to $mahasiswa
        $mahasiswa["mahasiswa"] = $this->ModelMahasiswa->getAll();

        // send data from controller to view
        $this->load->view('mahasiswa_view', $mahasiswa);
    }
}
