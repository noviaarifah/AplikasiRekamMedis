<?php

class Rekam_medis extends CI_Controller {
    public function index()
    {
        $data['title'] = "Rekam Medis";
        $data['rm'] = $this->Rm_model->get_data('rekam_medis')->result();
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Rekam_medis',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_data()
    {
        $data['title'] = "Tambah Rekam Medis";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Tambah_rekam_medis',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->tambah_data();
       } else {
             $id_rm  = $this->input->post('id_rm');
             $id_pasien  = $this->input->post('id_pasien');
           $id_pemeriksaan  = $this->input->post('id_pemeriksaan');
           $id_penyakit  = $this->input->post('id_penyakit');
           $id_obat  = $this->input->post('id_obat');
           $tinggi_badan  = $this->input->post('tinggi_badan');
           $berat_badan  = $this->input->post('berat_badan');
           $tekanan_darah  = $this->input->post('tekanan_darah');
           $hasil_pemeriksaan  = $this->input->post('hasil_pemeriksaan');
           $notes  = $this->input->post('notes');

           $data = array(
                'id_rm'   => $id_rm,
               'id_pasien'   => $id_pasien,
               'id_pemeriksaan'   => $id_pemeriksaan,
               'id_penyakit'   => $id_penyakit,
               'id_obat'   => $id_obat,
               'tinggi_badan'   => $tinggi_badan,
               'berat_badan'   => $berat_badan,
               'tekanan_darah'   => $tekanan_darah,
               'hasil_pemeriksaan'   => $hasil_pemeriksaan,
               'notes'   => $notes
           );
           $this->Rm_model->insert_data($data,'rekam_medis');
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil ditambahkan</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('Rekam_medis');
 
       }
    }

    public function update_data($id)
    {
        $where = array('id_rm' => $id);
        $data['rm'] = $this->db->query("SELECT * FROM rekam_medis WHERE id_rm='$id'")->result();
        $data['title'] = "Update Rekam Medis";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Update_rekam_medis',$data);
        $this->load->view('templates/Footer');
       
    }

    public function update_data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->update_data();
       } else {
           $id = $this->input->post('id_rm');
           $id_pasien  = $this->input->post('id_pasien');
           $id_pemeriksaan  = $this->input->post('id_pemeriksaan');
           $id_penyakit  = $this->input->post('id_penyakit');
           $id_obat  = $this->input->post('id_obat');
           $tinggi_badan  = $this->input->post('tinggi_badan');
           $berat_badan  = $this->input->post('berat_badan');
           $tekanan_darah  = $this->input->post('tekanan_darah');
           $hasil_pemeriksaan  = $this->input->post('hasil_pemeriksaan');
           $notes  = $this->input->post('notes');

           $data = array(
            'id_pasien'   => $id_pasien,
               'id_pemeriksaan'   => $id_pemeriksaan,
               'id_penyakit'   => $id_penyakit,
               'id_obat'   => $id_obat,
               'tinggi_badan'   => $tinggi_badan,
               'berat_badan'   => $berat_badan,
               'tekanan_darah'   => $tekanan_darah,
               'hasil_pemeriksaan'   => $hasil_pemeriksaan,
               'notes'   => $notes
           );

           $where = array(
            'id_rm'   => $id
           );

           $this->Rm_model->update_data('rekam_medis',$data,$where);
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil diupdate</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('Rekam_medis');
 
       }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_rm','id rm','required');
        $this->form_validation->set_rules('id_pasien','id pasien','required');
        $this->form_validation->set_rules('id_pemeriksaan','id pemeriksaan','required');
        $this->form_validation->set_rules('id_penyakit','id penyakit','required');
        $this->form_validation->set_rules('id_obat','id obat','required');
        $this->form_validation->set_rules('tinggi_badan','tinggi badan','required');
        $this->form_validation->set_rules('berat_badan','berat badan','required');
        $this->form_validation->set_rules('tekanan_darah','tekanan darah','required');
        $this->form_validation->set_rules('hasil_pemeriksaan','hasil_pemeriksaan','required');
        $this->form_validation->set_rules('notes','notes','required');
    }
    
    public function delete_data($id){
        $where = array('id_rm' => $id);
          $this->Rm_model->delete_data($where, 'rekam_medis');
          $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Data berhasil dihapus</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('Rekam_medis');
  
    }

}

?>
