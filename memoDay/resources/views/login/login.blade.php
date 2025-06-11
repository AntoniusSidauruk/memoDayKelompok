<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow-lg">
        <div class="card-body">
          <h4 class="card-title text-center mb-4">Login</h4>

          <form action="{{ route('postLogin') }}" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
              <label for="text" class="form-label">Username</label>
              <input type="text" name="name" class="form-control" id="email" placeholder="Enter email">
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>

          <hr>

          <p class="text-center">Belum punya akun?
            <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Daftar di sini</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Register -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Pendaftaran</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('simpanRegistrasi') }}" method="post">
          {{ csrf_field() }}
          <div class="mb-3">
            <label for="reg-name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="name" id="reg-name" placeholder="Nama lengkap">
          </div>

          <div class="mb-3">
            <label for="reg-name" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="reg-name" placeholder="Email">
          </div>

          <div class="mb-3">
            <label for="reg-password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="reg-password" placeholder="Password">
          </div>

          <div class="d-grid">
            <button type="submit" class="btn btn-success">Daftar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>