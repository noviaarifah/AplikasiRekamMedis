
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rekam Medis</h1>
</div>

<a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('Rekam_medis/tambah_data') ?>">
            <i class ="fas fa-plus"> Tambah Data
            </i></a>

            <?php echo $this->session->flashdata('pesan') ?>
<table class ="table table-bordered table-striped" mt-2>
<tr>
            <th class="text-center"> NO </th>
            <th class="text-center"> ID RM </th>
            <th class="text-center"> ID PASIEN  </th>
            <th class="text-center"> ID PEMERIKSAAN </th>
            <th class="text-center"> ID PENYAKIT </th>
            <th class="text-center"> ID OBAT </th>
            <th class="text-center"> TINGGI BADAN  </th>
            <th class="text-center"> BERAT BADAN </th>
            <th class="text-center"> TEKANAN DARAH </th>
            <th class="text-center"> HASIL PEMERIKSAAN </th>
            <th class="text-center"> NOTES  </th>
            <th class="text-center"> ACTION  </th>
           </tr>
           <?php $no=1; foreach($rm as $rmm) : ?>
            <tr>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $rmm->id_rm ?> </td>
            <td> <?php echo $rmm->id_pasien ?> </td>
            <td> <?php echo $rmm->id_pemeriksaan ?> </td>
            <td> <?php echo $rmm->id_penyakit ?> </td>
            <td> <?php echo $rmm->id_obat ?> </td>
            <td> <?php echo $rmm->tinggi_badan ?> </td>
            <td> <?php echo $rmm->berat_badan ?> </td>
            <td> <?php echo $rmm->tekanan_darah ?> </td>
            <td> <?php echo $rmm->hasil_pemeriksaan ?> </td>
            <td> <?php echo $rmm->notes ?> </td>
            <td>
            <center> <a class="btn btn-sm btn-primary" href="<?php echo base_url('Rekam_medis/update_data/'.$rmm->id_rm) ?>">
            <i class ="fas fa-edit">
            </i></a>

            <a onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('Rekam_medis/delete_data/'.$rmm->id_rm) ?>">
            <i class ="fas fa-trash">
            </i></a>
            </center> 
            </td>
            


        </tr>


           <?php endforeach ?>
</table>

</div>

