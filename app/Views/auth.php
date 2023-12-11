<!doctype html>
<html lang="en">
  <head>
    <title>Authentication</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <body style="background-color: gray;">
    <div class="card">
        <div class="card-header">
            Form Login
        </div>
        <div class="card-body">
            <?php if(session()->get('error')):?>
                <div class="alert alert-danger" role="alert">
                    <strong><?= session()->get('error');?></strong>
                </div>
            <?php endif;?>
            <form action="<?= base_url("authentication/login")?>" method="post">
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" name="username"class="form-control" placeholder="Masukkan username anda">
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="password"class="form-control" placeholder="Masukkan password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Login</button>
                </div>
            </form>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>