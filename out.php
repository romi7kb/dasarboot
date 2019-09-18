<?php
session_start();
unset($_SESSION);
session_destroy();
echo "      <script>
			alert('Berhasil dihapus!');
			document.location.href = 'login.php';
			</script>
    ";
?>