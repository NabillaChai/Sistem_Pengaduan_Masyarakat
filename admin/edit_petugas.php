<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Petugas | Sistem Pengaduan Masyarakat</title>
  <link rel="icon" href="../img/logo-bandarlampung.png">
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
      color: #333;
      position: relative;
      overflow-x: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
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
      width: 100%;
      position: relative;
      padding: 20px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 2;
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

    nav {
      display: flex;
      align-items: center;
      gap: 30px;
    }

    nav a {
      color: #7D0A0A;
      text-decoration: none;
      font-weight: 500;
      font-size: 1rem;
      padding: 8px 0;
      border-bottom: 1px solid transparent;
      transition: 0.3s;
    }

    nav a:hover {
      border-bottom: 1px solid #BF3131;
      color: #BF3131;
    }

    nav a.active {
      font-weight: 600;
    }

    .logout-btn {
      padding: 8px 24px;
      background: #BF3131;
      color: #fff;
      border: 2px solid #BF3131;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .logout-btn:hover {
      background: #7D0A0A;
      border-color: #7D0A0A;
      transform: scale(1.05);
      box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    }

    .page-title {
      text-align: center;
      margin: 40px 0 20px 0;
      font-size: 2rem;
      font-weight: 600;
      color: #7D0A0A;
      text-shadow: 0 1px 3px rgba(0,0,0,0.1);
      z-index: 2;
      position: relative;
    }

    .form-container {
      width: 90%;
      max-width: 700px;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.35);
      color: #333;
      z-index: 2;
      position: relative;
      margin-bottom: 40px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 10px;
      vertical-align: middle;
      font-size: 15px;
    }

    input[type="text"],
    input[type="password"],
    input[type="tel"] {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid rgba(0,0,0,0.2);
      background: rgba(255,255,255,0.9);
      outline: none;
      font-size: 1rem;
      transition: 0.3s;
    }

    input[type="text"]:focus,
    input[type="password"]:focus,
    input[type="tel"]:focus {
      border-color: #BF3131;
      background: #fff;
    }

    .radio-group input {
      margin-right: 6px;
    }

    .radio-group label {
      margin-right: 15px;
    }

    .btn {
      display: inline-block;
      background: #BF3131;
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 12px 30px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      margin-top: 20px;
      width: 100%;
    }

    .btn:hover {
      background: #7D0A0A;
      transform: scale(1.03);
      box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    }

    @media (max-width: 768px) {
      .form-container {
        padding: 20px;
      }
      
      .page-title {
        font-size: 1.6rem;
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
    <nav>
      <a href="data_petugas.php" class="active">Data Petugas</a>
      <a href="../login_petugas_admin.php" class="logout-btn">Logout</a>
    </nav>
  </header>

  <div class="page-title">Edit Data Petugas</div>

  <div class="form-container">
    <form action="" method="post">
      <table>
        <tr>
          <td style="width: 30%;">Nama Petugas</td>
          <td><input type="text" name="nama" placeholder="Masukkan nama petugas" required></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" placeholder="Masukkan username" required></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password" placeholder="Masukkan password" required></td>
        </tr>
        <tr>
          <td>No. Telepon</td>
          <td><input type="tel" name="tlp" placeholder="08xxxxxxxxxx" maxlength="13" minlength="12" required></td>
        </tr>
        <tr>
          <td>Level</td>
          <td class="radio-group">
            <label><input type="radio" name="level" value="admin" required> Admin</label>
            <label><input type="radio" name="level" value="petugas"> Petugas</label>
          </td>
        </tr>
      </table>

      <button type="submit" class="btn">Simpan Perubahan</button>
    </form>
  </div>

</body>
</html>
