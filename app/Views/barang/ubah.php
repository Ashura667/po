<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h4>Tambah barang</h4>
        </div>
      </div>
      <div class="card-body">
        <form action="<?= base_url('barang/ubah').'/'.$item->idbarang?>" method="post">
          <div class="form-group">
            <label for="">Nama Barang</label>
            <input type="text" value="<?= $item->nama?>"
              class="form-control" name="nama" aria-describedby="helpId" placeholder="nama">
          </div>
          <div class="form-group">
            <label for="">unit</label>
            <input type="text" value="<?= $item->unit?>"
              class="form-control" name="unit" aria-describedby="helpId" placeholder="banyak unit">
          </div>
          <div class="form-group">
            <label for="">Harga</label>
            <input type="text" value="<?= $item->harga?>"
              class="form-control" name="harga" aria-describedby="helpId" placeholder="input harga">
          </div>
             <button type="submit" class="btn btn-primary btn-sm" name="ubah">Simpan</button>
        </form>
      </div>
      <!-- /.panel-body -->
    </div>

  </div>
  <?= $this->endSection() ?>