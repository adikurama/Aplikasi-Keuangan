<?php $this->load->view('main/header') ?>
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-feather-alt"></i> KATEGORI</h3><hr>

              <a href="<?=base_url('admin/kategori')?>" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH KATEGORI</a>

              <a href="<?=base_url('admin/detail')?>" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH DETAIL KATEGORI</a>


                <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">nomor</th>
                <th scope="col">nama kategori</th>
                <th colspan="3" scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>



              <?php 

              $no=1;

              foreach ($jenis_kategori as $value): 
                $nama_jenis=$value['nama_jenis'];
                ?>
                
              
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nama_jenis ?></td>
                <td><a href="<?=base_url('admin/edit_data/').$value['id_jenis_kategori']?>"><i class="fas fa-edit bg-success p-2 rounded text-white" data-toggle="tooltip" title="edit data"></i></a></td>
                <td><a href="<?=base_url('admin/hapus_data/').$value['id_jenis_kategori']?>" onclick="return confirm('apakah anda yakin akan menghapusnya?')" ><i class="fas fa-trash-alt bg-danger p-2 rounded text-white" data-toggle="tooltip" title="hapus data"></i></a></td>
              </tr>


              <?php endforeach ?>


            </tbody>
          </table>

      </div>
  </div>
   <?php $this->load->view('main/footer') ?>
