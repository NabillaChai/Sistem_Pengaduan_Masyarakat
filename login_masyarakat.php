<?php
    session_start();
    include "koneksi.php";

    if(isset($_POST['masuk'])){
        $username = $_POST['username'];
        $nik = $_POST['nik'];
        $qry = mysqli_query($conn, "SELECT * FROM masyarakat WHERE username = '$username' AND nik = '$nik'");
    if(mysqli_num_rows($qry) > 0){
        

        $data = mysqli_fetch_assoc($qry);
        if($data['username']=="$username"){
            $_SESSION['username'] = $username;
            $_SESSION['nik'] = $data['nik'];
            header("location:masyarakat/index.php");
        }
        }else{
            echo"<script>alert('Maaf Login Gagal, Silahkan ulangi Lagi'); window.location.assign('login_masyarakat.php');
            </script>";
        }
    
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Masyarakat</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <header>
    <img src="img/logo-bandarlampung.png" alt="Logo Kota Bandar Lampung">
    <div class="judul-website">
      Sistem Pengaduan Masyarakat<br>
      Kota Bandar Lampung
    </div>
  </header>

  <div class="login-container">
    <h2>Login</h2>
    <form action="" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="text" name="nik" placeholder="NIK" required>
      <button class="btn" name="masuk" type="submit">Masuk</button>
    </form>
    <p>Belum punya akun? <a href="registrasi.php">Daftar di sini</a></p>
  </div>

  <footer>© 2025 Pemerintah Kota Bandar Lampung</footer>
</body>
</html>
