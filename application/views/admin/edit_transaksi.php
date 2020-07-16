 <?php $this->load->view('main/header');
 
 ?>
 <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-file-invoice-dollar" mr-2></i> INPUT TRANSAKSI</h3><hr>

      <?php foreach ($transaksi as $value): ?>
        

<form method="POST" action="<?=base_url('admin/update_transaksi')?> ">
      <input type="hidden" name="id_transaksi" value="<?php echo $value->id_transaksi ?>">
      <div class="form-group">
        <label><i class="fas fa-pen"></i> nama transaksi</label>
        <input type="text" name="nama_transaksi" class="form-control" value="<?php echo $value->nama_transaksi?>">
    </div>
      <div class="form-group">
        <label><i class="fas fa-user"></i> status</label>
        <select class="form-control" name="status">
          <option value="<?php echo $value->status ?>"><?php echo $value->status ?></option>
          <?php if ($value->status == 'pemasukan'){ ?>
            <option value="pengeluaran">pengeluaran</option>
          <?php }else{ ?>
          <option value="pemasukan">pemasukan</option>
        <?php } ?>
        </select>
    </div>

          <div class="form-group">
        <label><i class="fas fa-user"></i> detail kategori</label>
        <select class="form-control" name="id_detail_kategori">
       <option value="<?php echo $value->id_detail_kategori ?>"><?php echo $value->nama_detail ?></option>
       <?php foreach ($detail_kategori as $key): ?>
         <option value="<?php echo $key->nama_detail ?>"><?php echo $key->nama_detail ?></option>
       <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
      <label>tanggal transaksi</label>
      <input type="date" name="tgl_transaksi" class="form-control" value="<?php echo $value->tgl_transaksi ?>">
      
    </div>

    <div class="form-group">
        <label><i class="fas fa-unlock"></i> jumlah transaksi</label>
        <input type="name" name="jumlah_transaksi" class="form-control" placeholder="masukan jumlah transaksi" value="<?php echo $value->jumlah_transaksi ?>">
    </div>
      <hr>
      <button type="submit" class="btn btn-dark">Input</button>
    </form>
      <?php endforeach ?>






 <?php $this->load->view('main/footer') ?>