<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: /buku/login.php");
}
if (isset($_POST['submit'])) {
    $harga=$_POST['harga'];
    $jumlah=$_POST['jumlah'];
    $nama=$_POST['nama'];
    $jk=$_POST['jk'];
    $alamat=$_POST['alamat'];
    $tanggal=$_POST['tanggal'];
    $jumlah=$_POST['jumlah'];
    $judul=$_POST['judul'];
    $kode=$_POST['kode'];
    $pengarang=$_POST['pengarang'];
    $jenis=$_POST['jenis'];
    $total= array_sum($harga);
    if ($jumlah>=5) {
        $dis=0.1;
    }
    elseif ($jumlah>=3) {
        $dis=5/100;        
    }else {
        $dis = 0;
    }
    $diskon=($total*$dis);
    $totalbayar = $total - $diskon;
    $_SESSION['harga'] = $totalbayar;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bon</title>
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
<?php
    if (isset($_POST['bayar'])) {
        $kembalian = $_POST['nilaibayar']-$_SESSION['harga'];
    ?>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 alert alert-success  bg-dark text-white shadow  mr-5 w-50 h-50 rounded " tabindex="-1" role="alert">
        <h4 class="alert-heading text-center align-middle">Terimakasih!</h4>
        <p class="text-center align-middle">Teruslah berbelanja di toko kami :v</p>
        <p class="mb-0 text-center align-middle">kembalian anda Rp.<?=$kembalian?></p>
        <hr class="align-middle">
        <a href="/buku/" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Beli lagi</a>
        <a href="/buku/logout.php" class="btn btn-danger btn-lg active float-right" role="button" aria-pressed="true">Keluar</a>
    </div>
    <div class="col-md-4"></div>
    </div>
    <?php
    }
    if (isset($_POST['submit'])) {
    ?>
<div class="container">
    <div class="jumbotron">
        <center><h1 class="mb-3">Bon Pembelian</h1></center>
        <dl class="row">
            <dt class="col-sm-3">Nama</dt>
            <dd class="col-sm-9"><?=$nama?></dd>
            <dt class="col-sm-3">Alamat</dt>
            <dd class="col-sm-9"><?=$alamat?></dd>
            <dt class="col-sm-3">Jenis Kelamin</dt>
            <dd class="col-sm-9"><?=$jk?></dd>
            <dt class="col-sm-3">Tanggal Pembelian</dt>
            <dd class="col-sm-9"><?=$tanggal?></dd>
            <dt class="col-sm-3">Jumlah Buku yang di beli</dt>
            <dd class="col-sm-9"><?=$jumlah?></dd>

        </dl>
        <div class="table-responsive">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Jenis Buku</th>
                        <th scope="col">Harga(Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($judul as $key => $value) { 
                        ?>
                        <tr>
                        <th scope="row"><?=($key+1)?></th>
                        <td><?=$judul[$key]?></td>
                        <td><?=$kode[$key]?></td>
                        <td><?=$pengarang[$key]?></td>
                        <td><?=$jenis[$key]?></td>
                        <th><?=$harga[$key]?></th>
                        </tr>
                        <?php  
                        }
                        ?>
                        <tr class="table-success">
                        <th colspan="5">Total Harga</th>
                        <th>Rp.<?=$total?></th>
                        </tr>
                        <tr class="table-info">
                        <th colspan="5">Diskon</th>
                        <th>Rp.<?=$diskon?></th>
                        </tr>
                    </tbody>
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col" colspan="5">Total</th>
                        <th scope="col">Rp.<?=$totalbayar?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="" method="post">
                        <tr>
                        <th colspan="5">
                            <div class="form-group row">
                                <label for="staticharga" class="col-sm-4 col-form-label">Masukan Nilai Uang</label>
                                <div class="col-sm-4">
                                
                                <input type="number" min="<?=$totalbayar?>" name="nilaibayar" class="form-control" id="staticharga" >
                                </div>
                            </div>
                        </th>
                        <td>
                        <button type="submit"  name="bayar" class="btn btn-success">Bayar</button>
                        </td>
                        </tr>
                        </form>
                    </tbody>
                    </table>
    </div>
</div>
                    <?php
                    }
                    ?>

    <!-- js -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>

