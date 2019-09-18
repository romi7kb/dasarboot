<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Hello, world!</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="latihan1.php">Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="latihan2.php">Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="out.php">Keluar</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <!-- content -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Formulir</div>
                    <div class="card-body">
                    <!-- isi disini -->
                        <form action="" method="post">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama </label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat </label>
                            <div class="col-sm-10">
                                <textarea  name="alamat" id="alamat" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary">
                                Simpan
                                </button>
                                <button type="reset" class="btn btn-danger">
                                Hapus
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                session_start();
                $_SESSION['nam']=[];
                $_SESSION['alamat']=[];
                if (isset($_POST['submit'])) {
                    array_push ($_SESSION['nam'], $_POST['nama']);
                    array_push ($_SESSION['alamat'], $_POST['alamat']);
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat'];
                ?>
                <div class="table-responsive">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td><?=$nama?></td>
                        <td><?=$alamat?></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        var_dump($_SESSION);
                        foreach ($_SESSION['nam'] as $key => $value) { 
                        ?>
                        <tr>
                        <th scope="row"><?=$key?></th>
                        <td><?=$_SESSION['nam'][$key]?></td>
                        <td><?=$_SESSION['alamat'][$key]?></td>
                        </tr>
                        <?php  
                        }
                        ?>
                    </tbody>
                    </table>
                    <form action="" method="get">
                    <button type="submit" name="hapus" class="btn btn-danger" >hapus </button>
                    </form>
                </div>
                <?php
                } ?>
                <?php
                if (isset($_GET['hapus'])) {
                    unset($_SESSION);
                }
?>
            </div>
        </div>
    </div>
    <!-- end content -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>