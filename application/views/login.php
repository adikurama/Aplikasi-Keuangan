<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('../assets/css/style.css')?>">
	<link rel="stylesheet" href="<?= base_url('../assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('../assets/fontawesome/css/all.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('../assets/css/login.css')?>">

    
    <title>Document</title>
</head>
<body>

	<div class="container"> 
      <div class="text-center">
      <img src="<?= base_url('../assets/img/logoo_cikara.png')?>" width="70px">
    </div>
    <h4 class="text-center">E-Keuangan Cikara</h4>
    <hr>

    <form method="POST" action="<?= base_url('home/aksi_login')?>">
      <div class="form-group">
        <label><i class="fas fa-user"></i> Username</label>
        <input type="text" name="username" class="form-control" placeholder="masukan username anda" required>
    </div>

      <div class="form-group">
        <label><i class="fas fa-unlock"></i> Password</label>
        <input type="password" name="password" class="form-control" placeholder="masukan password anda" required>
    </div>
      <hr>
      <button type="submit" class="btn btn-dark">Login</button>
    </form>
    <div class="text-center">
    <a href="" class="text-white" data-toggle="modal" data-target="#exampleModal">Daftar disini</a>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  
    <div class="modal-content"> 
      <div class="text-center">
      <img src="<?= base_url('../assets/img/logoo_cikara.png')?>" width="70px">    </div>
    <h4 class="text-center">Registrasi</h4>
    <hr>

    <form method="POST" action="<?= base_url('home/daftar')?>">
      <div class="form-group">
        <label><i class="fas fa-pen"></i> Nama</label>
        <input type="text" name="Nama" class="form-control" placeholder="masukan nama anda" required>
    </div>
      <div class="form-group">
        <label><i class="fas fa-user"></i> Username</label>
        <input type="text" name="Username" class="form-control" placeholder="masukan username anda" required>
    </div>

      <div class="form-group">
        <label><i class="fas fa-unlock"></i> Password</label>
        <input type="password" name="Password" class="form-control" placeholder="masukan password anda" required>
    </div>
      <hr>
      <button type="submit" class="btn btn-dark">Daftar</button>
    </form>
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<script type="text/javascript" src="<?= base_url('../assets/js/jquery.min.js')?>"></script>   
<script type="text/javascript" src="<?= base_url('../assets/bootstrap/js/bootstrap.min.js')?>"></script>   
</body>
</html>