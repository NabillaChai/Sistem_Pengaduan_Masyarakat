<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Masyarakat</title>
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
      box-shadow: 0 6px 16px rgba(0,0,0,0.25);
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

    /* Tabel laporan */
    .table-container {
      max-width: 1200px;
      margin: 0 auto 60px auto;
      overflow-x: auto;
      padding: 0 20px;
      position: relative;
      z-index: 2;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: rgba(255, 255, 255, 0.95);
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

    img.foto-laporan {
      width: 80px;
      height: 60px;
      object-fit: cover;
      border-radius: 6px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    }

    .status {
      font-weight: bold;
      padding: 6px 12px;
      border-radius: 8px;
      display: inline-block;
    }

    .status.proses {
      background-color: #FFE4C4;
      color: #7D0A0A;
    }

    .status.selesai {
      background-color: #7D0A0A;
      color: #fff;
    }

    td a {
      color: #BF3131;
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s;
    }

    td a:hover {
      color: #7D0A0A;
      text-decoration: underline;
    }

    /* Tombol Tambah */
    .btn-container {
      text-align: center;
      margin-bottom: 80px;
      position: relative;
      z-index: 2;
    }

    .btn {
      display: inline-block;
      background: #BF3131;
      color: #fff;
      border: 2px solid #BF3131;
      border-radius: 8px;
      padding: 12px 30px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      text-decoration: none;
    }

    .btn:hover {
      background: #7D0A0A;
      border-color: #7D0A0A;
      transform: scale(1.05);
      box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 15px;
        padding: 15px 20px;
      }

      nav {
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
      }

      table {
        font-size: 0.9rem;
      }

      th, td {
        padding: 8px 10px;
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
      <a href="index.php" class="active">Laporan Saya</a>
      <a href="../logout.php" class="logout-btn">Logout</a>
    </nav>
  </header>

  <div class="page-title">Laporan Pengaduan Saya</div>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Pengaduan</th>
          <th>NIK</th>
          <th>Isi Laporan</th>
          <th>No. Telepon</th>
          <th>Foto</th>
          <th>Status</th>
          <th>Tanggapan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>05-11-2025</td>
          <td>1234567890</td>
          <td>Jalan rusak di depan rumah</td>
          <td>08123456789</td>
          <td><img src="../img/sample.jpg" alt="Foto Laporan" class="foto-laporan"></td>
          <td><span class="status proses">Proses</span></td>
          <td><a href="tanggapan.php?id=1">Lihat Tanggapan</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>04-11-2025</td>
          <td>0987654321</td>
          <td>Drainase tersumbat</td>
          <td>08234567890</td>
          <td><img src="../img/sample.jpg" alt="Foto Laporan" class="foto-laporan"></td>
          <td><span class="status selesai">Selesai</span></td>
          <td><a href="tanggapan.php?id=2">Lihat Tanggapan</a></td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="btn-container">
    <a href="tambah_pengaduan.php" class="btn">Tambah Pengaduan</a>
  </div>

</body>
</html>
