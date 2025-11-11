<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Laporan | Admin</title>
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
      margin: 40px 0 25px 0;
      font-size: 2rem;
      font-weight: 600;
      color: #7D0A0A;
      text-shadow: 0 1px 3px rgba(0,0,0,0.1);
      position: relative;
      z-index: 2;
    }

    .detail-container {
      max-width: 900px;
      margin: 0 auto 60px auto;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(8px);
      border-radius: 15px;
      box-shadow: 0 6px 25px rgba(0,0,0,0.15);
      padding: 30px 40px;
      position: relative;
      z-index: 2;
      border: 2px solid rgba(125,10,10,0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      color: #333;
    }

    th, td {
      text-align: left;
      padding: 12px 10px;
      border-bottom: 1px solid rgba(0,0,0,0.1);
      vertical-align: top;
    }

    th {
      width: 30%;
      color: #7D0A0A;
      font-weight: 600;
    }

    img.bukti {
      width: 100%;
      max-width: 350px;
      border-radius: 10px;
      margin-top: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    .tanggapan {
      margin-top: 25px;
      background: rgba(255, 228, 196, 0.5);
      border-left: 5px solid #7D0A0A;
      padding: 15px 20px;
      border-radius: 10px;
    }

    .tanggapan h3 {
      margin-bottom: 10px;
      font-size: 1.2rem;
      color: #7D0A0A;
    }

    .btn-container {
      text-align: center;
      margin-top: 30px;
    }

    .btn {
      display: inline-block;
      padding: 12px 28px;
      background: #BF3131;
      color: #fff;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      margin: 5px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .btn:hover {
      background: #7D0A0A;
      transform: scale(1.05);
      box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    }

    @media (max-width: 768px) {
      .detail-container {
        padding: 20px;
      }
      
      th, td {
        display: block;
        width: 100%;
      }
      
      th {
        margin-top: 15px;
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
      <a href="index.php" class="active">Dashboard</a>
      <a href="kelola_laporan.php" class="active">Kelola Laporan</a>
      <a href="data_petugas.php" class="active">Data Petugas</a>
      <a href="../login_petugas_admin.php" class="logout-btn">Logout</a>
    </nav>
  </header>

  <div class="page-title">Detail Laporan Masyarakat</div>

  <div class="detail-container">
    <table>
      <tr>
        <th>Tanggal Pengaduan</th>
        <td>03 November 2025</td>
      </tr>
      <tr>
        <th>Nama Pelapor</th>
        <td>Siti Rahmawati</td>
      </tr>
      <tr>
        <th>NIK</th>
        <td>3571082304990001</td>
      </tr>
      <tr>
        <th>No Telepon</th>
        <td>081234567890</td>
      </tr>
      <tr>
        <th>Isi Laporan</th>
        <td>
          Lampu penerangan jalan umum di kawasan <b>Jl. P. Antasari, Bandar Lampung</b> sudah mati sejak dua minggu lalu.
          Warga menjadi khawatir karena area tersebut sangat gelap di malam hari.
        </td>
      </tr>
      <tr>
        <th>Foto Bukti</th>
        <td><img src="../img/lampu_mati.jpg" alt="Foto Laporan" class="bukti"></td>
      </tr>
      <tr>
        <th>Status</th>
        <td><b style="color:#7D0A0A;">Proses</b></td>
      </tr>
    </table>

    <div class="tanggapan">
      <h3>Tanggapan Petugas</h3>
      <p><b>Tanggal:</b> 04 November 2025</p>
      <p><b>Petugas:</b> Rudi Hartono</p>
      <p><b>Isi Tanggapan:</b> Laporan telah diteruskan ke Dinas Perhubungan Kota Bandar Lampung. 
      Tim teknis dijadwalkan memperbaiki lampu jalan pada tanggal 6 November 2025.</p>
    </div>

    <div class="btn-container">
      <a href="kelola_laporan.php" class="btn">Kembali</a>
      <a href="cetak_pengaduan.php" class="btn">Cetak Laporan</a>
    </div>
  </div>

</body>
</html>
