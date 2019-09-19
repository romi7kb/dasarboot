<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: /buku/login.php");
    exit;

}
if (isset($_POST['submit'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proses Pembelian</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Indomie</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="/buku/index.php">Toko buku <span class="sr-only">(current)</span></a>
        </li>
        </ul>
        <form action="/buku/logout.php" method="post">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">logout</button>
        </form>
        
        </form>
    </div>
</nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
            <form action="/buku/bon.php" method="post">
                <input type="hidden" name="nama" value="<?=$_POST['nama']?>">
                <input type="hidden" name="alamat" value="<?=$_POST['alamat']?>">
                <input type="hidden" name="jk" value="<?=$_POST['jk']?>">
                <input type="hidden" name="tanggal" value="<?=$_POST['tanggal']?>">
                <input type="hidden" name="jumlah" value="<?=$_POST['jumlah']?>">
                <div class="card " >
                    <div class="card-body ">
                        <h5 class="card-title">Masukan Buku yang akan dibeli</h5>
                        
    <?php
    for ($i=0; $i < $_POST['jumlah']; $i++) { 
    ?>
                <div class="card mt-2" >
                    <div class="card-body ">
                            <div class="form-group row">
                                <label for="staticNamajudul" class="col-sm-2 col-form-label">Judul Buku</label>
                                <div class="col-sm-6">
                                <input type="text" name="judul[]" class="form-control" id="staticjudul" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticNamakode" class="col-sm-2 col-form-label">Kode Buku</label>
                                <div class="col-sm-6">
                                <input type="text" name="kode[]" class="form-control" id="statickode" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticNamapengarang" class="col-sm-2 col-form-label">Pengarang Buku</label>
                                <div class="col-sm-6">
                                <input type="text" name="pengarang[]" class="form-control" id="staticpengarang" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">jenis Buku</label>
                                <div class="col-sm-3">
                                <select name="jenis[]" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Novel">Novel</option>
                                    <option value="Fiksi">Fiksi</option>
                                    <option value="Horror">Horror</option>
                                    <option value="Cergam">Cergam</option>
                                    <option value="Komik">Komik</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="staticharga" class="col-sm-2 col-form-label">harga Buku</label>
                                <div class="col-sm-3">
                                <input type="number" min="1" name="harga[]" class="form-control" id="staticharga" >
                                </div>
                            </div>
                    </div>
                </div>          
        <?php
        }
        ?>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-8">
                                <button type="submit" name="submit" class="btn btn-outline-primary">kirim</button>
                                <button type="reset" class="btn btn-outline-danger">Hapus</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <!-- js -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>


<?php    
}
?>