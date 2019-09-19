<?php
session_start();
unset($_SESSION);
session_destroy();
echo "      <script>
			alert('Berhasil Log Out!');
			document.location.href = '/buku/login.php';
			</script>
    ";
?>