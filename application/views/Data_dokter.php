
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Dokter</h1>
</div>

<a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('Data_dokter/tambah_data') ?>">
            <i class ="fas fa-plus"> Tambah Data
            </i></a>

            <?php echo $this->session->flashdata('pesan') ?>
<table class ="table table-bordered table-striped" mt-2>
<tr>
            <th class="text-center"> NO </th>
            <th class="text-center"> ID DOKTER </th>
            <th class="text-center"> NAMA  </th>
            <th class="text-center"> JENIS </th>
            <th class="text-center"> HARI PRAKTEK </th>
            <th class="text-center"> JAM PRAKTEK </th>
            <th class="text-center"> NOTES  </th>
            <th class="text-center"> ACTION  </th>
           </tr>
           <?php $no=1; foreach($dokter as $dr) : ?>
            <tr>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $dr->id_dokter ?> </td>
            <td> <?php echo $dr->nama_dokter ?> </td>
            <td> <?php echo $dr->jenis_dokter ?> </td>
            <td> <?php echo $dr->hari_praktek ?> </td>
            <td> <?php echo $dr->jam_praktek ?> </td>
            <td> <?php echo $dr->notes ?> </td>
            <td>
            <center> <a class="btn btn-sm btn-primary" href="<?php echo base_url('Data_dokter/update_data/'.$dr->id_dokter) ?>">
            <i class ="fas fa-edit">
            </i></a>

            <a onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('Data_dokter/delete_data/'.$dr->id_dokter) ?>">
            <i class ="fas fa-trash">
            </i></a>
            </center> 
            </td>
            


        </tr>


           <?php endforeach ?>
</table>

</div>

