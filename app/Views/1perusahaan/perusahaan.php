<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header"><?= $title ?></h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<div class="row">
  <div class="panel panel-default">
    <!-- /.panel-heading -->
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>NO</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Kontak</th>
              <th>Email</th>
              <th>Website</th>
              <th>Catatan</th>
              <th><i class="fa fa-cog" aria-hidden="true"></i></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($perusahaan as $key => $item) : ?>
              <tr>
                <td>
                  <?= $key + 1 ?></td>
                <td><?= $item->Nama ?></td>
                <td><?= $item->Alamat ?></td>
                <td><?= $item->Kontak ?></td>
                <td><?= $item->Email ?></td>
                <td><?= $item->Website ?></td>
                <td><?= $item->Catatan ?></td>
                <td>
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