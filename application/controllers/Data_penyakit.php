<?php

class Data_Penyakit extends CI_Controller {
    public function index()
    {
        $data['title'] = "Data penyakit";
        $data['penyakit'] = $this->Rm_model->get_data('data_penyakit')->result();
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Data_penyakit',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_data()
    {
        $data['title'] = "Tambah Data penyakit";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Tambah_data_penyakit',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_Data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->tambah_data();
       } else {
             $id_penyakit  = $this->input->post('id_penyakit');
             $nama_penyakit  = $this->input->post('nama_penyakit');
              $notes  = $this->input->post('notes');

           $data = array(
                'id_penyakit'   => $id_penyakit,
               'nama_penyakit'   => $nama_penyakit,
               'notes'   => $notes
           );
           $this->Rm_model->insert_data($data,'data_penyakit');
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil ditambahkan</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('Data_penyakit');
 
       }
    }

    public function update_data($id)
    {
        $where = array('id_penyakit' => $id);
        $data['penyakit'] = $this->db->query("SELECT * FROM data_penyakit WHERE id_penyakit='$id'")->result();
        $data['title'] = "Update Data penyakit";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Update_data_penyakit',$data);
        $this->load->view('templates/Footer');
       
    }

    public function update_Data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->update_data();
       } else {
           $id = $this->input->post('id_penyakit');
           $nama_penyakit  = $this->input->post('nama_penyakit');
           $notes  = $this->input->post('notes');

           $data = array(
            'nama_penyakit'   => $nama_penyakit,
               'notes'   => $notes
           );

           $where = array(
            'id_penyakit'   => $id
           );

           $this->Rm_model->update_data('data_penyakit',$data,$where);
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil diupdate</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('Data_penyakit');
 
       }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_penyakit','id penyakit','required');
        $this->form_validation->set_rules('nama_penyakit','nama penyakit','required');
        $this->form_validation->set_rules('notes','notes','required');
    }
    
    public function delete_data($id){
        $where = array('id_penyakit' => $id);
          $this->Rm_model->delete_data($where, 'data_penyakit');
          $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Data berhasil dihapus</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('Data_penyakit');
  
    }

}

?>
