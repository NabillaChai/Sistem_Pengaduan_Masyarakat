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
    <form action="proses_login_petugas.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button class="btn" type="submit">Masuk</button>
    </form>
  </div>

  <footer>© 2025 Pemerintah Kota Bandar Lampung</footer>
</body>
</html>
