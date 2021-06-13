<?php

class Data_pemeriksaan extends CI_Controller {
    public function index()
    {
        $data['title'] = "Data Pemeriksaan";
        $data['pemeriksaan'] = $this->Rm_model->get_data('data_pemeriksaan')->result();
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Data_pemeriksaan',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_data()
    {
        $data['title'] = "Tambah Data Pemeriksaan";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Tambah_data_pemeriksaan',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->tambah_data();
       } else {
        $id_pemeriksaan  = $this->input->post('id_pemeriksaan');
             $nama_pemeriksaan  = $this->input->post('nama_pemeriksaan');
           $harga  = $this->input->post('harga');
           $notes  = $this->input->post('notes');

           $data = array(
                 'id_pemeriksaan'   => $id_pemeriksaan,
               'nama_pemeriksaan'   => $nama_pemeriksaan,
               'harga'   => $harga,
               'notes'   => $notes
           );
           $this->Rm_model->insert_data($data,'data_pemeriksaan');
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil ditambahkan</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('Data_pemeriksaan');
 
       }
    }

    public function update_data($id)
    {
        $where = array('id_pemeriksaan' => $id);
        $data['pemeriksaan'] = $this->db->query("SELECT * FROM data_pemeriksaan WHERE id_pemeriksaan='$id'")->result();
        $data['title'] = "Update Data Pemeriksaan";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Update_data_pemeriksaan',$data);
        $this->load->view('templates/Footer');
       
    }

    public function update_data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->update_data();
       } else {
           $id = $this->input->post('id_pemeriksaan');
           $nama_pemeriksaan  = $this->input->post('nama_pemeriksaan');
           $harga  = $this->input->post('harga');
           $notes  = $this->input->post('notes');

           $data = array(
               'nama_pemeriksaan'   => $nama_pemeriksaan,
               'harga'   => $harga,
               'notes'   => $notes
           );

           $where = array(
            'id_pemeriksaan'   => $id
           );

           $this->Rm_model->update_data('data_pemeriksaan',$data,$where);
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil diupdate</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('Data_pemeriksaan');
 
       }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_pemeriksaan','id pemeriksaan','required');
        $this->form_validation->set_rules('nama_pemeriksaan','nama pemeriksaan','required');
        $this->form_validation->set_rules('harga','harga','required');
        $this->form_validation->set_rules('notes','notes','required');
    }
    
    public function delete_data($id){
        $where = array('id_pemeriksaan' => $id);
          $this->Rm_model->delete_data($where, 'data_pemeriksaan');
          $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Data berhasil dihapus</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('Data_pemeriksaan');
  
    }

}

?>
