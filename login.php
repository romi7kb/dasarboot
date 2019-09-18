<?php
session_start();
if (isset($_POST['masuk'])) {
    if ($_POST['username'] == "romi" && $_POST['password']=="123") {
    $_SESSION['user'] = $_POST['username'];
    echo "      <script>
			alert('Berhasil Log In!');
			document.location.href = 'latihan1.php';
			</script>
	    ";
    }else {
    echo "<h1>USername / Password yang anda masukkan salah!</h1>";        
    }
}else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
<div class="container mt-3">
<h1>Login.........</h1>
    <form action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukan Username">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Masukan Password">
    </div>
    <button type="submit" name="masuk" class="btn btn-primary">Kirim</button>
    </form>
</div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
?>
