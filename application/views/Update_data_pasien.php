
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    
</div>

<div class="card" style="width : 60%; margin-bottom :100px">
<div class="card-body">
<?php foreach ($pasien as $pem); ?>   

<form method="POST" action="<?php echo base_url('Data_pasien/update_data_aksi') ?>">

<div class="form-group">
<label> ID Pasien </label>
<input type="text" name="id_pasien" class="form-control" value="<?php echo $pem->id_pasien ?>">
<?php echo form_error('id_pasien','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Nama Pasien </label>
<input type="text" name="nama_pasien" class="form-control" value="<?php echo $pem->nama_pasien ?>">
<?php echo form_error('nama_pasien','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Tanggal Lahir </label>
<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $pem->tanggal_lahir ?>">
</div>
<div class="form-group">
<labe> No Telpon </label>
<input type="text" name="no_telp" class="form-control" value="<?php echo $pem->no_telp ?>">
</div>
<div class="form-group">
<label> Alamat </label>
<input type="text" name="alamat" class="form-control" value="<?php echo $pem->alamat ?>">
</div>
<div class="form-group">
<label> Notes </label>
<input type="text" name="notes" class="form-control" value="<?php echo $pem->notes ?>">
</div>


<button type="submit" class="btn btn-success">Submit</button>

</form>


</div>



</div>

</div>

