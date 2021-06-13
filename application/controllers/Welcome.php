<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Dashboard');
		$data['title'] = "Dashboard";
    $pasien = $this->db->query("SELECT * FROM data_pasien");
    $pemeriksaan = $this->db->query("SELECT * FROM data_pemeriksaan");
    $penyakit = $this->db->query("SELECT * FROM data_penyakit");
    $obat = $this->db->query("SELECT * FROM data_obat");
    $dokter = $this->db->query("SELECT * FROM data_dokter");
    $rm = $this->db->query("SELECT * FROM rekam_medis");
    $data['pasien']=$pasien->num_rows();
    $data['pemeriksaan']=$pemeriksaan->num_rows();
    $data['penyakit']=$penyakit->num_rows();
    $data['obat']=$obat->num_rows();
    $data['dokter']=$dokter->num_rows();
    $data['rm']=$rm->num_rows();
    $this->load->view('templates/Header',$data);
    $this->load->view('templates/Sidebar');
    $this->load->view('Dashboard',$data);
    $this->load->view('templates/Footer');
	}
}
