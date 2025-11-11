<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Masyarakat</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #EEEEEE, #EAD196);
      color: #333;
      position: relative;
      overflow: hidden;
    }

    body::before {
      content: "";
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(135deg, rgba(255,255,255,0.05) 25%, transparent 25%),
        linear-gradient(135deg, transparent 75%, rgba(0,0,0,0.05) 75%);
      background-size: 120px 120px;
      opacity: 0.6;
      mix-blend-mode: overlay;
      z-index: 0;
    }

    header {
      position: absolute;
      top: 20px;
      left: 40px;
      display: flex;
      align-items: center;
      gap: 15px;
      z-index: 2;
    }

    header img {
      width: 60px;
      height: auto;
    }

    .judul-website {
      font-weight: 600;
      font-size: 1.1rem;
      line-height: 1.3;
      color: #7D0A0A;
      text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }

    .login-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 4px 25px rgba(0,0,0,0.35);
      backdrop-filter: blur(10px);
      width: 320px;
      text-align: center;
      z-index: 2;
    }

    h2 {
      margin-bottom: 25px;
      font-size: 1.6rem;
      color: #7D0A0A;
      letter-spacing: 1px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 8px;
      border: 1px solid rgba(0,0,0,0.2);
      background: rgba(255,255,255,0.8);
      color: #333;
      outline: none;
      transition: 0.3s;
    }

    input:focus {
      border-color: #BF3131;
      background: rgba(255,255,255,1);
    }

    .btn {
      background: #BF3131;
      color: #fff;
      border: none;
      padding: 10px 0;
      width: 100%;
      border-radius: 8px;
      font-weight: bold;
      margin-top: 15px;
      cursor: pointer;
      transition: 0.3s;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .btn:hover {
      background: #7D0A0A;
      transform: scale(1.03);
      box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    }

    p {
      margin-top: 15px;
      font-size: 0.9rem;
      color: #444;
    }

    p a {
      color: #BF3131;
      text-decoration: none;
      border-bottom: 1px solid #BF3131;
      padding-bottom: 2px;
      transition: 0.3s;
    }

    p a:hover {
      color: #7D0A0A;
      border-color: #7D0A0A;
    }

    footer {
      position: absolute;
      bottom: 20px;
      color: #555;
      font-size: 0.85rem;
      z-index: 2;
    }
  </style>
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
    <form action="proses_login_masyarakat.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button class="btn" type="submit">Masuk</button>
    </form>
    <p>Belum punya akun? <a href="registrasi.php">Daftar di sini</a></p>
  </div>

  <footer>© 2025 Pemerintah Kota Bandar Lampung</footer>
</body>
</html>
