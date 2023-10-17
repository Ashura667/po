<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h4>Tambah Vendor</h4>
        </div>
      </div>
      <div class="card-body">
        <form action="<?= base_url('vendor/tambah')?>" method="post">
          <div class="form-group">
            <label for="">Nama Vendor</label>
            <input type="text"
              class="form-control" name="nama" aria-describedby="helpId" placeholder="nama">
          </div>
          <div class="form-group">
            <label for="">Kontak</label>
            <input type="text"
              class="form-control" name="kontak" aria-describedby="helpId" placeholder="Input Kontak">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email"
              class="form-control" name="email" aria-describedby="helpId" placeholder="input email">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" name="alamat" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
      </div>
      <!-- /.panel-body -->
    </div>

  </div>
  <?= $this->endSection() ?>