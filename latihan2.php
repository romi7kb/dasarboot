<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;    
}
?>
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
    <a class="navbar-brand" href="#">SMK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="latihan1.php">Latihan 1</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="latihan2.php">Latihan2<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="out.php">Keluar</a>
            </li>
            </ul>
        </div>
    </nav>
    <!-- content -->
    <div class="container-fluid pt-3">
        <div class="row">
            <?php
                if (isset($_POST['submit'])) {
                    $nama=$_POST['nama'];
                    $alamat=$_POST['alamat'];
                    $jk=$_POST['jk'];
                    $ass=$_POST['asal'];
                    $n1=$_POST['nilai1'];
                    $n2=$_POST['nilai2'];
                    $n3=$_POST['nilai3'];
                    $n4=$_POST['nilai4'];
                    $rata=($n1+$n2+$n3+$n4)/4;
                    if ($rata > 65) {
                        $ket="Diterima!";
                    }else {
                        $ket="Tidak Diterima!";
                    }
                ?>  
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Nilai Bahasa Indonesia</th>
                            <th scope="col">Nilai Matematika</th>
                            <th scope="col">Nilai IPA</th>
                            <th scope="col">Nilai Bahasa Inggris</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th><?=$nama?></th>
                            <th><?=$alamat?></th>
                            <th><?=$jk?></th>
                            <th><?=$ass?></th>
                            <th><?=$n1?></th>
                            <th><?=$n2?></th>
                            <th><?=$n3?></th>
                            <th><?=$n4?></th>
                            </tr>
                        </tbody>
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col" colspan="8">Rata Rata Nilai : <?=$rata?> </th>
                            </tr>
                        </thead>
                        </table>
                        <h1>Anda <?=$ket?></h1>
                    </div>
                </div>
                <?php
                }
                ?>
            
            
            <div class="col-md-12">
            <?php
            if (!isset($_POST['submit'])) {
            ?>
                <div class="card">
                    <div class="card-header"><center>Formulir PPDB SMK Assalaam</center></div>
                    <div class="card-body">
                    <!-- Button trigger modal -->
                        <form action="" method="post">
                        <div class="form-group row">
                                    <label for="staticNama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" id="staticNama" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-sm-2 col-form-label">Alamat </label>
                                    <div class="col-sm-10">
                                        <textarea  name="alamat" id="alamat" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inlineradio1" class="col-sm-2 col-form-label">Jenis Kelamin </label>
                                    <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" checked id="inlineRadio1" value="Laki-Laki">
                                        <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticasal" class="col-sm-2 col-form-label">Asal Sekolah</label>
                                    <div class="col-sm-8">
                                    <input type="text" name="asal" class="form-control" id="staticasal" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticnilai1" class="col-sm-2 col-form-label">Nilai Bahasa Indonesia</label>
                                    <div class="col-sm-2">
                                    <input type="number" name="nilai1" class="form-control" id="staticnilai1" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticnilai2" class="col-sm-2 col-form-label">Nilai Matematika</label>
                                    <div class="col-sm-2">
                                    <input type="number" name="nilai2" class="form-control" id="staticnilai2" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticnilai3" class="col-sm-2 col-form-label">Nilai IPA</label>
                                    <div class="col-sm-2">
                                    <input type="number" name="nilai3" class="form-control" id="staticnilai3" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticnilai4" class="col-sm-2 col-form-label">Nilai Bahasa Inggris</label>
                                    <div class="col-sm-2">
                                    <input type="number" name="nilai4" class="form-control" id="staticnilai4" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="st" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                                    <button type="reset" class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>            
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>