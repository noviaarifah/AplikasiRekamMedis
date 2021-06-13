
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Penyakit</h1>
</div>

<a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('Data_penyakit/tambah_data') ?>">
            <i class ="fas fa-plus"> Tambah Data
            </i></a>

            <?php echo $this->session->flashdata('pesan') ?>
<table class ="table table-bordered table-striped" mt-2>
<tr>
            <th class="text-center"> NO </th>
            <th class="text-center"> ID PENYAKIT </th>
            <th class="text-center"> NAMA  </th>
            <th class="text-center"> NOTES  </th>
            <th class="text-center"> ACTION  </th>
           </tr>
           <?php $no=1; foreach($penyakit as $pk) : ?>
            <tr>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $pk->id_penyakit ?> </td>
            <td> <?php echo $pk->nama_penyakit ?> </td>
            <td> <?php echo $pk->notes ?> </td>
            <td>
            <center> <a class="btn btn-sm btn-primary" href="<?php echo base_url('Data_penyakit/update_data/'.$pk->id_penyakit) ?>">
            <i class ="fas fa-edit">
            </i></a>

            <a onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('Data_penyakit/delete_data/'.$pk->id_penyakit) ?>">
            <i class ="fas fa-trash">
            </i></a>
            </center> 
            </td>
            


        </tr>


           <?php endforeach ?>
</table>

</div>

