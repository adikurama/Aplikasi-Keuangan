    <?php $this->load->view('main/header') ?>
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-funnel-dollar mr-1"></i> INFO UANG PENGELUARAN</h3><hr>

              <a href="" class="btn btn-primary mb-3"><i class="fas fa-plus-square mr-2"></i>TAMBAH UANG PENGELUARAN</a>

                <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Kode Pengeluaran</th>
                <th scope="col">Nama</th>
                <th scope="col">Kategori Pengeluaran</th>
                <th scope="col">Jumlah Pengeluaran</th>
                <th colspan="3" scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>(Admin)</td>
                <td>Tagihan</td>
                <td>100.000</td>
                <td><a href="" class="btn btn-primary">Detail</a></td>
                <td><i class="fas fa-edit bg-success p-2 rounded text-white" data-toggle="tooltip" title="edit data"></i></td>
                <td><i class="fas fa-trash-alt bg-danger p-2 rounded text-white" data-toggle="tooltip" title="hapus data"></i></td>
              <tr>
                <th scope="row">2</th>
                <td>(Admin)</td>
                <td>Tagihan</td>
                <td>120.000</td>
                <td><a href="" class="btn btn-primary">Detail</a></td>
                <td><i class="fas fa-edit bg-success p-2 rounded text-white" data-toggle="tooltip" title="edit data"></i></td>
                <td><i class="fas fa-trash-alt bg-danger p-2 rounded text-white" data-toggle="tooltip" title="hapus data"></i></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>(Admin)</td>
                <td>Tagihan</td>
                <td>200.000</td>
                <td><a href="" class="btn btn-primary">Detail</a></td>
                <td><i class="fas fa-edit bg-success p-2 rounded text-white" data-toggle="tooltip" title="edit data"></i></td>
                <td><i class="fas fa-trash-alt bg-danger p-2 rounded text-white" data-toggle="tooltip" title="hapus data"></i></td>
              </tr>
            </tbody>
          </table>

  </div>
    <?php $this->load->view('main/footer') ?>