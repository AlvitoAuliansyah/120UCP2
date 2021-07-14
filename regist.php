<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>AlStore</title>
  </head>
  
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom navbar-brand">
    <div class="container">
        <a class="navbar-brand" href="#">
        <img src="https://image.flaticon.com/icons/png/512/4483/4483022.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        AlStore</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="navbar-brand" href="index.php">
            <img src="https://image.flaticon.com/icons/png/512/1946/1946369.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Login
            </a>
        </div>
        </div>
    </div>
    </nav>
    <!-- END NAVBAR -->
        <div class="container mt-5">
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <p class="fw-bold">Signup</p>
                    </div>
                    <div class="card-body fw-bold">
                        <form method="post" action="register.php">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pass" placeholder="Masukan Password" name="pass" required>
                            </div>
                            <button type="submit" class="btn btn-brand" value="SIMPAN">Signup</button>
                            <p>Tidak punya akun? <a href="index.php">Daftar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
        <footer>
        <div class="footer container-fluid">
           <p class="text-center text-grey mt-5">© “20190140120 – Muhammad Alvito Harsyadi Auliansyah”. All Right Reserved</p>
        </div>
    </footer> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>           
  </body>
</html>