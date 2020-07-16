<!DOCTYPE html>
<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?= base_url('../assets/css/admin.css')?>">
	<link rel="stylesheet" href="<?= base_url('../assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('../assets/fontawesome/css/all.min.css')?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  


</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-danger bg-dark fixed-top">
  <a class="navbar-brand" href="#">Selamat Datang <?php echo $this->session->userdata('nama_admin') ?> | Cikara Studio</a>
  
    <form class="form-inline my-2 my-lg-0 ml-auto">
    	<div class="navbar-form navbar-right">
      
     <!--  <input type="text" name="keyword" class="form-control" placeholder="search">
      <button type="submit" class="btn btn-success">Search</button>
	   -->
  </div>
    </form>
    <div class="icon ml-4">
      <h5>

        <a href="<?=base_url('admin/profile')?>"><i class="fas fa-user mr-3 text-white" data-toggle="tooltip" title="Admin"></i></a>
        <a href="<?=base_url('home/logout')?>"><i class="fas fa-sign-out-alt mr-3 text-white" data-toggle="tooltip" title="Logout"></i></a>

      </h5>
    </div>
</nav>
		
  <div class="row no-gutters mt-5 ">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4 pb-5" style="position: relative; margin: 0;">
		    <ul class="nav flex-column ml-3 mb-5">
		  <li class="nav-item">
		    <a class="nav-link active text-white" href="<?=base_url('admin')?>"><i class="fas fa-tachometer-alt mr-1"></i> Dashboard</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url('admin/transaksi')?>"><i class="fas fa-dollar-sign mr-1"></i> Info Transaksi</a><hr class="bg-secondary">
		  </li>
		  <!-- <li class="nav-item">
		    <a class="nav-link text-white" href="#"><i class="fas fa-hand-holding-usd mr-1"></i> Laporan keuangan</a><hr class="bg-secondary">
		  </li> -->
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url('admin/luar_kategori')?>"><i class="fas fa-feather-alt"></i> Kategori</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url('admin/cetak')?>" target="_BLANK""><i class="fas fa-print"></i> Print Laporan</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url('admin/profile')?>"><i class="fas fa-address-card mr-1"></i> About me</a><hr class="bg-secondary">
		  </li>
		  <li class="nav-item">
		    <a class="nav-link text-white" href="<?=base_url('home/logout')?>"><i class="fas fa-sign-out-alt mr-1"></i> Logout</a><hr class="bg-secondary">
			</li>
			</ul>
		</div>
	
