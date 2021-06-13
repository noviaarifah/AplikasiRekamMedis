
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    
</div>

<div class="card" style="width : 60%; margin-bottom :100px">
<div class="card-body">

<form method="POST" action="<?php echo base_url('Data_pemeriksaan/tambah_data_aksi') ?>">
<div class="form-group">
<label> ID Pemeriksaan </label>
<input type="text" name="id_pemeriksaan" class="form-control">
<?php echo form_error('id_pemeriksaan','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Nama Pemeriksaan </label>
<input type="text" name="nama_pemeriksaan" class="form-control">
<?php echo form_error('nama_pemeriksaan','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Harga </label>
<input type="text" name="harga" class="form-control">
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

