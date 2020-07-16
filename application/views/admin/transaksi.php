    <?php $this->load->view('main/header') ?>
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-dollar-sign mr-1"></i> INFO TRANSAKSI</h3><hr>

              <a href="<?=base_url('admin/input_transaksi')?>" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH TRANSAKSI</a>

              <a href="<?=base_url('admin/cetak')?>" target="_BLANK" class="btn btn-danger mb-3"><i class="fas fa-print mr-2"></i>Print</a>
<!-- <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>  -->
                <table id="table_id" class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama transaksi</th>
                <th scope="col">Status</th>
                <th scope="col">Detail</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jumlah</th>
                <th colspan="3" scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              
                <?php

                $no=1;

                 foreach ($transaksi as $value): ?>
                  <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $value->nama_transaksi ?></td>
                <td><?php echo $value->status ?></td>
                <td><?php echo $value->nama_detail ?></td>
                <td><?php echo $value->tgl_transaksi ?></td>
                <td><?php echo $value->jumlah_transaksi ?></td>
                <td><a href="<?=base_url('admin/edit_transaksi/').$value->id_transaksi?>"><i class="fas fa-edit bg-success p-2 rounded text-white" data-toggle="tooltip" title="edit data"></i></a></td>
                <td><a href="<?=base_url('admin/hapus_transaksi/').$value->id_transaksi?>" onclick="return confirm('apakah anda yakin akan menghapusnya?')" ><i class="fas fa-trash-alt bg-danger p-2 rounded text-white" data-toggle="tooltip" title="hapus data"></i></td>
                 </tr>
                <?php endforeach ?>
             
            </tbody>
          </table>

      </div>
  </div>
   <?php $this->load->view('main/footer') ?>
   <script type="text/javascript"> 
    $(document).ready( function () {
    $('#table_id').DataTable();
  } );
   </script>>
