    <?php $this->load->view('main/header') ?>
    <div class="col-md-10 p-5 pt-2">
<?php 
$a = 0;
foreach ($transaksi as $value): 
  $a++; 
  if ($value['status'] == 'pemasukan'){
   $totala[$a] = $value['jumlah_transaksi'];
  }else{
    $totalb[$a] = $value['jumlah_transaksi'];
  } 
endforeach ?>
      <h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3><hr>
              <div class="row text-white">
                <div class="card" style="width: 18rem;">
            <div class="card-body bg-dark ml-3">
            <div class="card-body-icon"><i class="fas fa-dollar-sign mr-1"></i></div>
            <h5 class="card-title">Info Pemasukan</h5>
              <div class="display-4"><?php echo array_sum($totala) ?></div>
            <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
        </div>

           <div class="card" style="width: 18rem;">
            <div class="card-body bg-dark ml-3">
            <div class="card-body-icon"><i class="fas fa-dollar-sign mr-1"></i></div>
            <h5 class="card-title">Info Pengeluaran</h5>
            
              <div class="display-4"><?php echo array_sum($totalb) ?></div>

            <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
          </div>
        </div>
      

      </div>
    </div>
     <?php $this->load->view('main/footer') ?>