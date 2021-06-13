
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pasien</h1>
</div>

<a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('Data_pasien/tambah_data') ?>">
            <i class ="fas fa-plus"> Tambah Data
            </i></a>

            <?php echo $this->session->flashdata('pesan') ?>
<table class ="table table-bordered table-striped" mt-2>
<tr>
            <th class="text-center"> NO </th>
            <th class="text-center"> ID PASIEN </th>
            <th class="text-center"> NAMA  </th>
            <th class="text-center"> TANGGAL LAHIR </th>
            <th class="text-center"> NO TELPON </th>
            <th class="text-center"> ALAMAT </th>
            <th class="text-center"> NOTES  </th>
            <th class="text-center"> ACTION  </th>
           </tr>
           <?php $no=1; foreach($pasien as $pas) : ?>
            <tr>
            <td> <?php echo $no++ ?> </td>
            <td> <?php echo $pas->id_pasien ?> </td>
            <td> <?php echo $pas->nama_pasien ?> </td>
            <td> <?php echo $pas->tanggal_lahir ?> </td>
            <td> <?php echo $pas->no_telp ?> </td>
            <td> <?php echo $pas->alamat ?> </td>
            <td> <?php echo $pas->notes ?> </td>
            <td>
            <center> <a class="btn btn-sm btn-primary" href="<?php echo base_url('Data_pasien/update_data/'.$pas->id_pasien) ?>">
            <i class ="fas fa-edit">
            </i></a>

            <a onclick="return confirm('Yakin akan menghapus data ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('Data_pasien/delete_data/'.$pas->id_pasien) ?>">
            <i class ="fas fa-trash">
            </i></a>
            </center> 
            </td>
            


        </tr>


           <?php endforeach ?>
</table>

</div>

