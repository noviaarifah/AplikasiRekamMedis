
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    
</div>

<div class="card" style="width : 60%; margin-bottom :100px">
<div class="card-body">
<?php foreach ($dokter as $dr); ?>   

<form method="POST" action="<?php echo base_url('Data_dokter/update_data_aksi') ?>">

<div class="form-group">
<label> ID Dokter </label>
<input type="text" name="id_dokter" class="form-control" value="<?php echo $dr->id_dokter ?>">
<?php echo form_error('id_dokter','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Nama Dokter </label>
<input type="text" name="nama_dokter" class="form-control" value="<?php echo $dr->nama_dokter ?>">
<?php echo form_error('nama_dokter','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Jenis </label>
<input type="text" name="jenis_dokter" class="form-control" value="<?php echo $dr->jenis_dokter ?>">
</div>
<div class="form-group">
<labe> Hari Praktek </label>
<input type="text" name="hari_praktek" class="form-control" value="<?php echo $dr->hari_praktek ?>">
</div>
<div class="form-group">
<label> Jam Praktek </label>
<input type="text" name="jam_praktek" class="form-control" value="<?php echo $dr->jam_praktek ?>">
</div>
<div class="form-group">
<label> Notes </label>
<input type="text" name="notes" class="form-control" value="<?php echo $dr->notes ?>">
</div>


<button type="submit" class="btn btn-success">Submit</button>

</form>


</div>



</div>

</div>

