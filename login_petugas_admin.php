<?php
    session_start();
    include "koneksi.php";

    if(isset($_POST['masuk'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $qry = mysqli_query($conn, "SELECT * FROM petugas WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($qry) > 0){
        

        $data = mysqli_fetch_assoc($qry);
        if($data['level']=="admin"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            $_SESSION['id_petugas'] = $data['id_petugas'];
            header("location:admin/index.php");

        }else if($data['level']=="petugas"){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "petugas";
            $_SESSION['id_petugas'] = $data['id_petugas'];
            header("location:petugas/index.php");
        }
        }else{
            echo"<script>alert('Maaf Login Gagal, Silahkan ulangi Lagi'); window.location.assign('login-petugas.php');
            </script>";
        }
    
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Petugas</title>
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
    <h2>Login Petugas</h2>
    <form action="" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button class="btn" name="masuk" type="submit">Masuk</button>
    </form>
  </div>
  
  <button class="btn2" onclick="window.location.href='login_masyarakat.php'">Login Sebagai Masyarakat</button>

  <footer>© 2025 Pemerintah Kota Bandar Lampung</footer>
</body>
</html>
