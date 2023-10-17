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
        <form action="<?= base_url('vendor/ubah').'/'.$item->idvendor?>" method="post">
          <div class="form-group">
            <label for="">Nama Vendor</label>
            <input type="text" value="<?= $item->nama?>"
              class="form-control" name="nama" aria-describedby="helpId" placeholder="nama">
          </div>
          <div class="form-group">
            <label for="">Kontak</label>
            <input type="text" value="<?= $item->kontak?>"
              class="form-control" name="kontak" aria-describedby="helpId" placeholder="Input Kontak">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" value="<?= $item->email?>"
              class="form-control" name="email" aria-describedby="helpId" placeholder="input email">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" name="alamat" rows="3"><?= $item->alamat?></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-sm" name="ubah">Simpan</button>
        </form>
      </div>
      <!-- /.panel-body -->
    </div>

  </div>
  <?= $this->endSection() ?>