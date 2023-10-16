  <?= $this->extend('layout') ?>
  <?= $this->section('content') ?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h4>Daftar Vendor</h4>
            <a href="<?= base_url('vendor/tambah_vendor') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
                  <th>Email</th>
                  <th><i class="fa fa-cog" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($vendor as $key => $item) : ?>
                  <tr>
                    <td>
                      <?= $key + 1 ?></td>
                    <td><?= $item->Nama ?></td>
                    <td><?= $item->Alamat ?></td>
                    <td><?= $item->Kontak ?></td>
                    <td><?= $item->Email ?></td>
                    <a href="" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?= $this->endSection() ?>