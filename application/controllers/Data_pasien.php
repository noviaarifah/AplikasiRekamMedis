<?php

class Data_pasien extends CI_Controller {
    public function index()
    {
        $data['title'] = "Data Pasien";
        $data['pasien'] = $this->Rm_model->get_data('data_pasien')->result();
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Data_pasien',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_data()
    {
        $data['title'] = "Tambah Data Pasien";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Tambah_data_pasien',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->tambah_data();
       } else {
             $id_pasien  = $this->input->post('id_pasien');
             $nama_pasien  = $this->input->post('nama_pasien');
           $tanggal_lahir  = $this->input->post('tanggal_lahir');
           $no_telp  = $this->input->post('no_telp');
           $alamat  = $this->input->post('alamat');
           $notes  = $this->input->post('notes');

           $data = array(
                'id_pasien'   => $id_pasien,
               'nama_pasien'   => $nama_pasien,
               'tanggal_lahir'   => $tanggal_lahir,
               'no_telp'   => $no_telp,
               'alamat'   => $alamat,
               'notes'   => $notes
           );
           $this->Rm_model->insert_data($data,'data_pasien');
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil ditambahkan</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('Data_pasien');
 
       }
    }

    public function update_data($id)
    {
        $where = array('id_pasien' => $id);
        $data['pasien'] = $this->db->query("SELECT * FROM data_pasien WHERE id_pasien='$id'")->result();
        $data['title'] = "Update Data pasien";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Update_data_pasien',$data);
        $this->load->view('templates/Footer');
       
    }

    public function update_data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->update_data();
       } else {
           $id = $this->input->post('id_pasien');
           $nama_pasien  = $this->input->post('nama_pasien');
         $tanggal_lahir  = $this->input->post('tanggal_lahir');
         $no_telp  = $this->input->post('no_telp');
         $alamat  = $this->input->post('alamat');
         $notes  = $this->input->post('notes');
           $data = array(
            'nama_pasien'   => $nama_pasien,
            'tanggal_lahir'   => $tanggal_lahir,
            'no_telp'   => $no_telp,
            'alamat'   => $alamat,
            'notes'   => $notes
           );

           $where = array(
            'id_pasien'   => $id
           );

           $this->Rm_model->update_data('data_pasien',$data,$where);
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil diupdate</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('data_pasien');
 
       }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_pasien','id pasien','required');
        $this->form_validation->set_rules('nama_pasien','nama pasien','required');
        $this->form_validation->set_rules('tanggal_lahir','tanggal lahir','required');
        $this->form_validation->set_rules('no_telp','no telp','required');
        $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('notes','notes','required');
    }
    
    public function delete_data($id){
        $where = array('id_pasien' => $id);
          $this->Rm_model->delete_data($where, 'data_pasien');
          $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Data berhasil dihapus</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('data_pasien');
  
    }

}

?>
