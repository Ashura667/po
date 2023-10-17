<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h4>Tambah Transaksi</h4>
          <a href="<?= base_url('tambah_transaksi') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
        </div>
      </div>
      <div class="card-body">
        
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
  </div>
  <?= $this->endSection() ?>