
<div class="container-fluid">

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    
</div>

<div class="card" style="width : 60%; margin-bottom :100px">
<div class="card-body">
<?php foreach ($rm as $rm); ?>   

<form method="POST" action="<?php echo base_url('Rekam_medis/update_data_aksi') ?>">
<div class="form-group">
<label> ID RM </label>
<input type="text" name="id_rm" class="form-control" value="<?php echo $rm->id_rm ?>">
<?php echo form_error('id_rm','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> ID Pasien </label>
<input type="text" name="id_pasien" class="form-control" value="<?php echo $rm->id_pasien ?>">
<?php echo form_error('id_pasien','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> ID Pemeriksaan </label>
<input type="text" name="id_pemeriksaan" class="form-control" value="<?php echo $rm->id_pemeriksaan ?>">
<?php echo form_error('id_pemeriksaan','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> ID Penyakit </label>
<input type="text" name="id_penyakit" class="form-control" value="<?php echo $rm->id_penyakit ?>">
<?php echo form_error('id_penyakit','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> ID Obat </label>
<input type="text" name="id_obat" class="form-control" value="<?php echo $rm->id_obat ?>">
<?php echo form_error('id_obat','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Tinggi Badan </label>
<input type="text" name="tinggi_badan" class="form-control" value="<?php echo $rm->tinggi_badan ?>">
<?php echo form_error('tinggi_badan','<div class="text-small text-danger"></div>') ?>
</div>
<div class="form-group">
<label> Berat Badan </label>
<input type="text" name="berat_badan" class="form-control" value="<?php echo $rm->berat_badan ?>">
</div>
<div class="form-group">
<labe> Tekanan Darah </label>
<input type="text" name="tekanan_darah" class="form-control" value="<?php echo $rm->tekanan_darah ?>">
</div>
<div class="form-group">
<label> Hasil Pemeriksaan </label>
<input type="text" name="hasil_pemeriksaan" class="form-control" value="<?php echo $rm->hasil_pemeriksaan ?>">
</div>
<div class="form-group">
<label> Notes </label>
<input type="text" name="notes" class="form-control" value="<?php echo $rm->notes ?>">
</div>


<button type="submit" class="btn btn-success">Submit</button>

</form>


</div>



</div>

</div>

