<?php $this->load->view('main/header') ?>

<div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-feather-alt"></i> KATEGORI</h3><hr>
	<h3>Jenis kategori</h3>


<div class="container">
<form method="POST" action="<?=base_url('admin/tambah_kategori')?> ">
		<section class="form-group">
			<label><i class="fas fa-signature"></i> nama kategori</label>
			<input type="text" name="nama_kategori" placeholder="masukan nama kategori" required class="form-control">
		</section>
		<button class="btn btn-dark"> simpan</button>
	</form>
</div>

<!-- multiple insert -->
<!--  <div class="container">

  <div class="panel panel-default">

    <div class="panel-heading">Bootstrap Jquery Add More Field Example</div>

    <div class="panel-body">


        <form action="action.php" >


      	<div class="input-group control-group after-add-more">

          <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">

          <div class="input-group-btn"> 

            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>

          </div>

        </div>


       

        <div class="copy hide">

          <div class="control-group input-group" style="margin-top:10px">

            <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">

            <div class="input-group-btn"> 

              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>

            </div>

          </div>

        </div>

        <button>tambah</button>

        </form>

    </div>

  </div>

</div> -->






     



<?php $this->load->view('main/footer') ?>