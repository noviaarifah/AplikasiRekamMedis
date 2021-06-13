<?php

class Dashboard extends CI_Controller {
    public function index()
{
    $data['title'] = "Dashboard";
    $pasien = $this->db->query("SELECT * FROM data_pasien");
    $pemeriksaan = $this->db->query("SELECT * FROM data_pemeriksaan");
    $penyakit = $this->db->query("SELECT * FROM data_penyakit");
    $obat = $this->db->query("SELECT * FROM data_obat");
    $dokter = $this->db->query("SELECT * FROM data_dokter");
    $rm = $this->db->query("SELECT * FROM rekam_medis");
    $data['data_pasien']=$pasien->num_rows();
    $data['data_pemeriksaan']=$pemeriksaan->num_rows();
    $data['data_penyakit']=$penyakit->num_rows();
    $data['data_obat']=$obat->num_rows();
    $data['data_dokter']=$dokter->num_rows();
    $data['rekam_medis']=$rm->num_rows();
    $this->load->view('templates/Header',$data);
    $this->load->view('templates/Sidebar');
    $this->load->view('Dashboard',$data);
    $this->load->view('templates/Footer');
}    
}

?>