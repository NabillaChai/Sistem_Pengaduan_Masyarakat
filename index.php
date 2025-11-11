<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengaduan Masyarakat Kota Bandar Lampung</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #EEEEEE, #EAD196);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
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

    .content {
      text-align: center;
      z-index: 2;
      text-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .content h1 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 15px;
      color: #7D0A0A;
    }

    .content p {
      font-size: 1.1rem;
      margin-bottom: 35px;
      color: #444;
    }

    .login-btn {
      padding: 12px 40px;
      font-size: 1rem;
      color: #fff;
      background: #BF3131;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: 0.3s ease;
      font-weight: 600;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .login-btn:hover {
      background: #7D0A0A;
      transform: scale(1.05);
      box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    }

    footer {
      position: absolute;
      bottom: 20px;
      color: #555;
      font-size: 0.85rem;
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
  <h1>tes</h1>
  <div class="content">
    <h1>Selamat Datang di Website Pengaduan Masyarakat<br>Kota Bandar Lampung</h1>
    <p>Layanan Aspirasi dan Pengaduan Online Rakyat</p>
    <button class="login-btn" onclick="location.href='login_masyarakat.php'">Login</button>
  </div>

  <footer>© 2025 Pemerintah Kota Bandar Lampung</footer>
</body>
</html>
