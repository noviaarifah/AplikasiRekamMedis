
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    
</div>

<div class="card" style="width : 60%; margin-bottom :100px">
<div class="card-body">
<?php foreach ($obat as $pem); ?>   

<form method="POST" action="<?php echo base_url('Data_obat/update_data_aksi') ?>">

<div class="form-group">
<label> ID Obat </label>
<input type="text" name="id_obat" class="form-control" value="<?php echo $pem->id_obat ?>">
<?php echo form_error('id_obat','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Nama Obat </label>
<input type="text" name="nama_obat" class="form-control" value="<?php echo $pem->nama_obat ?>">
<?php echo form_error('nama_obat','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Supplier </label>
<input type="text" name="supplier" class="form-control" value="<?php echo $pem->supplier ?>">
</div>
<div class="form-group">
<labe> Dosis </label>
<input type="text" name="dosis" class="form-control" value="<?php echo $pem->dosis ?>">
</div>
<div class="form-group">
<label> Waktu Konsumsi </label>
<input type="text" name="konsumsi" class="form-control" value="<?php echo $pem->konsumsi ?>">
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

