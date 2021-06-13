
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    
</div>

<div class="card" style="width : 60%; margin-bottom :100px">
<div class="card-body">

<form method="POST" action="<?php echo base_url('Data_pasien/tambah_data_aksi') ?>">
<div class="form-group">
<label> ID Pasien </label>
<input type="text" name="id_pasien" class="form-control">
<?php echo form_error('id_pasien','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Nama Pasien </label>
<input type="text" name="nama_pasien" class="form-control">
<?php echo form_error('nama_pasien','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Tanggal Lahir </label>
<input type="date" name="tanggal_lahir" class="form-control">
</div>
<div class="form-group">
<label> No Telpon </label>
<input type="text" name="no_telp" class="form-control">
</div>
<div class="form-group">
<label> Alamat </label>
<input type="text" name="alamat" class="form-control">
</div>
<div class="form-group">
<label> Notes </label>
<input type="text" name="notes" class="form-control">
</div>


<button type="submit" class="btn btn-success">Submit</button>

</form>



</div>




</div>

</div>

