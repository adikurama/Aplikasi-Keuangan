 <?php $this->load->view('main/header');
 
 ?>
 <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-file-invoice-dollar" mr-2></i> INPUT TRANSAKSI</h3><hr>

<form method="POST" action="<?=base_url('admin/input_data_transaksi')?>">
      <div class="form-group">
        <label><i class="fas fa-money-bill-wave"></i></i> nama transaksi</label>
        <input type="text" name="nama_transaksi" class="form-control" placeholder="masukan nama transaksi">
    </div>
      <div class="form-group">
        <label><i class="fas fa-exchange-alt"></i></i></i> status</label>
        <select class="form-control" name="status">
          <option value="pemasukan">Pemasukan</option>
          <option value="pengeluaran">Pengeluaran</option>
        </select>
    </div>

          <div class="form-group">
        <label><i class="fas fa-feather-alt"></i> detail kategori</label>
        <select class="form-control" name="id_detail_kategori">
        <?php foreach ($detail_kategori as $value): ?>
          <option value="<?php echo $value['id_detail_kategori'] ?>"><?php echo $value['nama_detail'] ?></option>
        <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
      <label><i class="fas fa-clock"></i> tanggal transaksi </i></label>
      <input type="date" name="tgl_transaksi" class="form-control">
      
    </div>

    <div class="form-group">
        <label><i class="fas fa-hand-holding-usd"></i> jumlah transaksi</label>
        <input type="name" name="jumlah_transaksi" class="form-control" placeholder="masukan jumlah transaksi">
    </div>
      <hr>
      <button type="submit" class="btn btn-dark">Input</button>
    </form>






 <?php $this->load->view('main/footer') ?>