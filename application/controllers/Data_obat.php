<?php

class Data_obat extends CI_Controller {
    public function index()
    {
        $data['title'] = "Data Obat";
        $data['obat'] = $this->Rm_model->get_data('data_obat')->result();
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Data_obat',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_data()
    {
        $data['title'] = "Tambah Data obat";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Tambah_data_obat',$data);
        $this->load->view('templates/Footer');
       
    }

    public function tambah_data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->tambah_data();
       } else {
             $id_obat  = $this->input->post('id_obat');
             $nama_obat  = $this->input->post('nama_obat');
           $supplier  = $this->input->post('supplier');
           $dosis  = $this->input->post('dosis');
           $konsumsi  = $this->input->post('konsumsi');
           $notes  = $this->input->post('notes');

           $data = array(
                'id_obat'   => $id_obat,
               'nama_obat'   => $nama_obat,
               'supplier'   => $supplier,
               'dosis'   => $dosis,
               'konsumsi'   => $konsumsi,
               'notes'   => $notes
           );
           $this->Rm_model->insert_data($data,'data_obat');
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil ditambahkan</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('Data_obat');
 
       }
    }

    public function update_data($id)
    {
        $where = array('id_obat' => $id);
        $data['obat'] = $this->db->query("SELECT * FROM data_obat WHERE id_obat='$id'")->result();
        $data['title'] = "Update Data obat";
        $this->load->view('templates/Header',$data);
        $this->load->view('templates/Sidebar');
        $this->load->view('Update_data_obat',$data);
        $this->load->view('templates/Footer');
       
    }

    public function update_data_aksi()
    {
       $this->_rules();
       if($this->form_validation->run() == FALSE){
           $this->update_data();
       } else {
           $id = $this->input->post('id_obat');
           $nama_obat  = $this->input->post('nama_obat');
           $supplier  = $this->input->post('supplier');
           $dosis  = $this->input->post('dosis');
           $konsumsi  = $this->input->post('konsumsi');
           $notes  = $this->input->post('notes');

           $data = array(
            'nama_obat'   => $nama_obat,
               'supplier'   => $supplier,
               'dosis'   => $dosis,
               'konsumsi'   => $konsumsi,
               'notes'   => $notes
           );

           $where = array(
            'id_obat'   => $id
           );

           $this->Rm_model->update_data('data_obat',$data,$where);
           $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data berhasil diupdate</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('Data_obat');
 
       }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('id_obat','id obat','required');
        $this->form_validation->set_rules('nama_obat','nama obat','required');
        $this->form_validation->set_rules('supplier','supplier','required');
        $this->form_validation->set_rules('dosis','dosis','required');
        $this->form_validation->set_rules('konsumsi','konsumsi','required');
        $this->form_validation->set_rules('notes','notes','required');
    }
    
    public function delete_data($id){
        $where = array('id_obat' => $id);
          $this->Rm_model->delete_data($where, 'data_obat');
          $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Data berhasil dihapus</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('Data_obat');
  
    }

}

?>
