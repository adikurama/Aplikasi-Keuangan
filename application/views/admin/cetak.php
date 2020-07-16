<!DOCTYPE html>
<html>
<head>
	<title>PRINT</title>
	<link rel="stylesheet" href="<?= base_url('../assets/css/admin.css')?>">
	<link rel="stylesheet" href="<?= base_url('../assets/bootstrap/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('../assets/fontawesome/css/all.min.css')?>">
</head>
<body>
	<H4><center>Print Laporan keuangan</center></H4>
	<center>
	<table class="table">
		<thead>
			
		<tr>
			<th scope="col">Kode</th>
      <th scope="col">Nama</th>
      <th scope="col">Status</th>
      <th scope="col">Detail</th>

      <th scope="col">Jumlah</th>
		</tr>

		</thead>

		<tbody>
			
				<?php 
				$no = 1;
				foreach ($transaksi as $value): ?>
			<tr>
					<td><?php echo $no++ ?></td>
                <td><?php echo $value->nama_transaksi ?></td>
                <td><?php echo $value->status ?></td>
                <td><?php echo $value->nama_detail ?></td>
                <td><?php echo $value->jumlah_transaksi ?></td>
            </tr>
				<?php endforeach ?>
		
		</tbody>
		

	</table>
	<center>
	<br>
	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>
