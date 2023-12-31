<?= $this->extend('layout') ?>
  <?= $this->section('content') ?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h4>Daftar Barang</h4>
            <a href="<?= base_url('barang/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Barang</th>
              <th>Unit</th>
              <th>Harga</th>
              <th><i class="fa fa-cog" aria-hidden="true"></i></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($barang as $key => $item) : ?>
              <tr>
                <td>
                  <?= $key + 1 ?></td>
                <td><?= $item->nama ?></td>
                <td><?= $item->unit ?></td>
                <td><?= $item->harga ?></td>
                <td>
                <a href="<?= base_url('barang/ubah').'/'.$item->idbarang?>" class="btn btn-warning btn-sm"><i class="fas fa-edit" aria-hidden="true"></i></a>
                    <a href="<?= base_url('barang/hapus').'/'.$item->idbarang?>" class="btn btn-danger btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.panel-body -->
  </div>

</div>
<?= $this->endSection() ?>