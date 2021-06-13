<?php

class Data_dokter extends CI_Controller {
    public function index()
    {
        $data['title'] = "Data Dokter";
        $data['dokter'] = $this->Rm_model->get_data('data_dokter')->result();
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Data_dokter',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_data()
    {
        $data['title'] = "Tambah Data Dokter";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Tambah_data_dokter',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->tambah_data();
       } else {
             $id_dokter  = $this->input->post('id_dokter');
             $nama_dokter  = $this->input->post('nama_dokter');
           $jenis_dokter  = $this->input->post('jenis_dokter');
           $hari_praktek  = $this->input->post('hari_praktek');
           $jam_praktek  = $this->input->post('jam_praktek');
           $notes  = $this->input->post('notes');

           $data = array(
                'id_dokter'   => $id_dokter,
               'nama_dokter'   => $nama_dokter,
               'jenis_dokter'   => $jenis_dokter,
               'hari_praktek'   => $hari_praktek,
               'jam_praktek'   => $jam_praktek,
               'notes'   => $notes
           );
           $this->Rm_model->insert_data($data,'data_dokter');
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil ditambahkan</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('data_dokter');
 
       }
    }

    public function update_data($id)
    {
        $where = array('id_dokter' => $id);
        $data['dokter'] = $this->db->query("SELECT * FROM data_dokter WHERE id_dokter='$id'")->result();
        $data['title'] = "Update Data dokter";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Update_data_dokter',$data);
        $this->load->view('templates/Footer');
       
    }

    public function update_data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->update_data();
       } else {
           $id = $this->input->post('id_dokter');
           $nama_dokter  = $this->input->post('nama_dokter');
           $jenis_dokter  = $this->input->post('jenis_dokter');
           $hari_praktek  = $this->input->post('hari_praktek');
           $jam_praktek  = $this->input->post('jam_praktek');
           $notes  = $this->input->post('notes');

           $data = array(
            'nama_dokter'   => $nama_dokter,
            'jenis_dokter'   => $jenis_dokter,
            'hari_praktek'   => $hari_praktek,
            'jam_praktek'   => $jam_praktek,
            'notes'   => $notes
           );

           $where = array(
            'id_dokter'   => $id
           );

           $this->Rm_model->update_data('data_dokter',$data,$where);
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil diupdate</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('Data_dokter');
 
       }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_dokter','id dokter','required');
        $this->form_validation->set_rules('nama_dokter','nama dokter','required');
        $this->form_validation->set_rules('jenis_dokter','jenis dokter','required');
        $this->form_validation->set_rules('hari_praktek','hari praktek','required');
        $this->form_validation->set_rules('jam_praktek','jam praktek','required');
        $this->form_validation->set_rules('notes','notes','required');
    }
    
    public function delete_data($id){
        $where = array('id_dokter' => $id);
          $this->Rm_model->delete_data($where, 'data_dokter');
          $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Data berhasil dihapus</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('Data_dokter');
  
    }

}

?>
