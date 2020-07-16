<?php $this->load->view('main/header') ?>

<div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-file-invoice-dollar" mr-2></i> KATEGORI</h3><hr>
	<h3>Jenis kategori</h3>


<div class="container">
	<?php foreach ($jenis_kategori as $value): ?>
		
<form method="POST" action="<?=base_url('admin/update_data')?> ">
	<input type="hidden" name="id_jenis_kategori" value="<?php echo $value->id_jenis_kategori ?>">
		<section class="form-group">
			<label>nama kategori</label>
			<input type="text" name="nama_kategori" value="<?php echo $value->nama_jenis ?>" required class="form-control">
		</section>
		<button class="btn btn-dark"> simpan</button>
	</form>
	<?php endforeach ?>
</div>
<?php $this->load->view('main/footer') ?>
