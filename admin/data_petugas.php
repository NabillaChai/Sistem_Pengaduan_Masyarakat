<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Petugas - Admin</title>
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
    }

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
      z-index: 2;
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
      color: #BF3131;
      border-bottom: 1px solid #BF3131;
    }

    nav a.active {
      font-weight: 600;
      color: #7D0A0A;
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
    }

    .page-title {
      text-align: center;
      margin: 40px 0 20px 0;
      font-size: 2rem;
      font-weight: 600;
      color: #7D0A0A;
      text-shadow: 0 1px 3px rgba(0,0,0,0.1);
      position: relative;
      z-index: 2;
    }

    .filter-container {
      max-width: 1200px;
      margin: 0 auto 30px auto;
      padding: 0 20px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      align-items: center;
      gap: 15px;
      position: relative;
      z-index: 2;
    }

    .filter-container input[type="text"] {
      padding: 10px 15px;
      border: 1.5px solid #7D0A0A;
      border-radius: 8px;
      outline: none;
      font-size: 0.95rem;
      width: 250px;
      background: rgba(255,255,255,0.9);
    }

    .filter-container button {
      background: #BF3131;
      border: 2px solid #BF3131;
      border-radius: 8px;
      padding: 10px 20px;
      color: white;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .filter-container button:hover {
      background: #7D0A0A;
      border-color: #7D0A0A;
      transform: scale(1.05);
    }

    .table-container {
      max-width: 1200px;
      margin: 0 auto 50px auto;
      overflow-x: auto;
      padding: 0 20px;
      position: relative;
      z-index: 2;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: rgba(255,255,255,0.95);
      backdrop-filter: blur(8px);
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 25px rgba(0,0,0,0.15);
    }

    th, td {
      padding: 14px 15px;
      text-align: center;
      color: #333;
    }

    th {
      background-color: #BF3131;
      color: #fff;
      font-weight: 600;
    }

    tr:nth-child(even) {
      background-color: rgba(0,0,0,0.03);
    }

    .aksi-btn {
      display: flex;
      justify-content: center;
      gap: 8px;
      flex-wrap: wrap;
    }

    .aksi-btn a, .aksi-btn button {
      background: #EAD196;
      border: 1.5px solid #BF3131;
      color: #7D0A0A;
      border-radius: 6px;
      padding: 6px 12px;
      cursor: pointer;
      font-weight: 500;
      transition: 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .aksi-btn a:hover, .aksi-btn button:hover {
      background: #BF3131;
      color: white;
      transform: scale(1.05);
    }

    @media (max-width: 768px) {
      .page-title {
        font-size: 1.5rem;
      }
      .filter-container {
        flex-direction: column;
        align-items: flex-start;
      }
      table {
        font-size: 0.9rem;
      }
      th, td {
        padding: 8px 10px;
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
      <a href="index.php">Dashboard</a>
      <a href="kelola_laporan.php">Kelola Laporan</a>
      <a href="data_petugas.php" class="active">Data Petugas</a>
      <a href="../login_petugas.php" class="logout-btn">Logout</a>
    </nav>
  </header>

  <div class="page-title">Data Petugas</div>

  <div class="filter-container">
    <input type="text" placeholder="Cari nama / username petugas...">
    <button onclick="window.location.href='tambah_petugas.php'">+ Tambah Petugas</button>
  </div>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Petugas</th>
          <th>Username</th>
          <th>Telepon</th>
          <th>Level</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Rina Suryani</td>
          <td>rinas</td>
          <td>08123456789</td>
          <td>Admin</td>
          <td class="aksi-btn">
            <a href="edit_petugas.php">Edit</a>
            <button>Hapus</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Andi Wijaya</td>
          <td>andiw</td>
          <td>08234567890</td>
          <td>Petugas</td>
          <td class="aksi-btn">
            <a href="edit_petugas.php">Edit</a>
            <button>Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
