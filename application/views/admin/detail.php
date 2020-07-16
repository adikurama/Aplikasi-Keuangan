<?php $this->load->view('main/header') ?>

<div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-feather-alt"></i> DETAIL KATEGORI</h3><hr>
	


<div class="container">
<form method="POST" action="<?=base_url('admin/tambah_detail')?> ">
		<section class="form-group">
			<label><i class="fas fa-signature"></i> nama detail kategori</label>
			<input type="text" name="nama_detail_kategori" placeholder="masukan nama detail kategori" required class="form-control">
		</section>
		<section class="form-group">
			<label><i class="fas fa-feather-alt"></i> nama jenis kategori</label>
						<select id="cars" class="form-control" name="id_jenis_kategori">
							<?php foreach ($jenis_kategori as $value): ?>
								
			  <option value="<?php echo $value ['id_jenis_kategori'] ?>"><?php echo $value['nama_jenis'] ?></option>
							<?php endforeach ?>
			  
			</select>

		</section>
		<button class="btn btn-dark"> simpan</button>
	</form>
</div>
<?php $this->load->view('main/footer') ?>