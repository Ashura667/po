<?= $this->extend('layout') ?>
  <?= $this->section('content') ?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h4>Daftar Transaksi</h4>
            <a href="<?= base_url('tambah_transaksi') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Sub Total</th>
              <th>Ppn10%</th>
              <th>Total</th>
              <th>Disetujui oleh</th>
              <th><i class="fa fa-cog" aria-hidden="true"></i></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($Transaksi as $key => $item) : ?>
              <tr>
                <td>
                  <?= $key + 1 ?></td>
                <td><?= $item->subtotal?></td>
                <td><?= $item->ppn ?></td>
                <td><?= $item->total ?></td>
                <td><?= $item->disetjui ?></td>
                <a href="" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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