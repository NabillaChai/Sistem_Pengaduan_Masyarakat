<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Petugas | Sistem Pengaduan Masyarakat</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #EEEEEE, #EAD196);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      color: #333;
      position: relative;
      overflow-x: hidden;
      padding-bottom: 50px;
    }

    /* Pola lembut */
    body::before {
      content: "";
      position: absolute;
      inset: 0;
      background-image:
        linear-gradient(135deg, rgba(255,255,255,0.05) 25%, transparent 25%),
        linear-gradient(135deg, transparent 75%, rgba(0,0,0,0.05) 75%);
      background-size: 120px 120px;
      opacity: 0.5;
      mix-blend-mode: overlay;
      z-index: 0;
    }

    header {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px 40px;
      z-index: 2;
      position: relative;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 15px;
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

    .form-container {
      position: relative;
      z-index: 2;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(10px);
      border-radius: 15px;
      padding: 40px 50px;
      margin-top: 40px;
      width: 450px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.15);
      border: 2px solid rgba(125,10,10,0.1);
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: 600;
      color: #7D0A0A;
      text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    label {
      font-weight: 500;
      color: #333;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"],
    input[type="tel"] {
      width: 100%;
      padding: 10px 12px;
      border: 2px solid rgba(125,10,10,0.2);
      border-radius: 8px;
      outline: none;
      font-size: 0.95rem;
      transition: 0.3s;
      background: rgba(255,255,255,0.8);
    }

    input:focus {
      border-color: #BF3131;
      box-shadow: 0 0 6px rgba(191,49,49,0.4);
    }

    .level-group {
      display: flex;
      gap: 20px;
      margin-top: 8px;
    }

    .level-group label {
      font-weight: 400;
      display: flex;
      align-items: center;
      gap: 6px;
      cursor: pointer;
      color: #333;
    }

    .btn-submit {
      background-color: #BF3131;
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 10px 20px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s ease;
      margin-top: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .btn-submit:hover {
      background-color: #7D0A0A;
      transform: scale(1.03);
      box-shadow: 0 6px 15px rgba(0,0,0,0.25);
    }

    .back-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      color: #7D0A0A;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    .back-link:hover {
      color: #BF3131;
      text-decoration: underline;
    }

    @media (max-width: 480px) {
      .form-container {
        width: 90%;
        padding: 25px;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="brand">
      <img src="../img/logo-bandarlampung.png" alt="Logo Kota Bandar Lampung">
      <div class="judul-website">
        Sistem Pengaduan Masyarakat<br>
        Kota Bandar Lampung
      </div>
    </div>
  </header>

  <div class="form-container">
    <h2>Tambah Petugas Baru</h2>
    <form action="#" method="post">
      <div>
        <label for="nama">Nama Petugas</label>
        <input type="text" id="nama" name="nama" required>
      </div>

      <div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>

      <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div>
        <label for="telp">Nomor Telepon</label>
        <input type="tel" id="telp" name="telp" maxlength="13" minlength="10" required>
      </div>

      <div>
        <label>Level</label>
        <div class="level-group">
          <label><input type="radio" name="level" value="admin" required> Admin</label>
          <label><input type="radio" name="level" value="petugas" required> Petugas</label>
        </div>
      </div>

      <button type="submit" class="btn-submit">Tambah</button>
    </form>

    <a href="data_petugas.php" class="back-link">← Kembali ke Data Petugas</a>
  </div>

</body>
</html>
