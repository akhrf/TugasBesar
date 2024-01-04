<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'user' && $password == 'pass') {
    echo "Login berhasil!";
} else {
    echo "Login gagal. Silakan coba lagi.";
}
?>
