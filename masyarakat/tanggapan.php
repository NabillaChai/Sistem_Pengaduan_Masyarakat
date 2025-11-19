<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lihat Tanggapan</title>
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

    /* Pola lembut */
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
      margin: 40px 0 20px;
      font-size: 2rem;
      font-weight: 600;
      color: #7D0A0A;
      text-shadow: 0 1px 3px rgba(0,0,0,0.1);
      z-index: 2;
    }

    /* Kotak tanggapan */
    .response-container {
      width: 90%;
      max-width: 800px;
      background: rgba(255, 255, 255, 0.95);
      border-radius: 12px;
      padding: 30px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.35);
      color: #333;
      z-index: 2;
      margin-bottom: 40px;
    }

    .response-header {
      border-bottom: 2px solid #BF3131;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .response-header h3 {
      color: #7D0A0A;
      font-size: 1.4rem;
      margin-bottom: 5px;
    }

    .response-header p {
      font-size: 0.95rem;
      color: #555;
    }

    .response-details {
      display: grid;
      grid-template-columns: 1fr 1fr;
      row-gap: 15px;
      column-gap: 30px;
      margin-bottom: 20px;
    }

    .response-details p {
      margin: 0;
      font-size: 1rem;
      line-height: 1.6;
    }

    .response-details strong {
      color: #7D0A0A;
    }

    .response-body {
      background: rgba(255, 240, 240, 0.6);
      border-left: 4px solid #BF3131;
      padding: 15px 20px;
      border-radius: 8px;
      line-height: 1.7;
      color: #333;
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
      text-decoration: none;
      position: relative;
      overflow: hidden;
    }

    /* Efek hover */
    .btn:hover {
      background: #7D0A0A;
      transform: translateY(-3px) scale(1.03);
      box-shadow: 0 8px 18px rgba(0,0,0,0.25);
    }

    /* Efek klik (animasi tekan) */
    .btn:active {
      transform: translateY(0) scale(0.97);
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }


    @media (max-width: 768px) {
      .response-details {
        grid-template-columns: 1fr;
      }
      .page-title {
        font-size: 1.6rem;
      }
      .response-container {
        padding: 20px;
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

  <div class="page-title">Tanggapan Petugas</div>
     <?php
        include '../koneksi.php';
       
        $qry = mysqli_query($conn, "SELECT * FROM tanggapan, petugas WHERE tanggapan.id_petugas = petugas.id_petugas AND id_pengaduan = '$_GET[id]' ");
        $data = mysqli_fetch_array($qry);
        $qry2 = mysqli_query($conn, "SELECT * FROM pengaduan WHERE id_pengaduan = '$_GET[id]' ");
        $dataLaporan = mysqli_fetch_array($qry2);
        ?>
  <div class="response-container" id="responseContainer">
    <div class="response-header">
      <h3>Laporan Pengaduan</h3>
      <p>ID Laporan: <?= $_GET['id'] ?></p>
    </div>

    <div class="response-details">
      <?php
        include '../koneksi.php';
       
       
      ?>
      <p><strong>Laporan:</strong> <?= $dataLaporan['isi_laporan'] ?> </p>
      <p><strong>Status:</strong> <?= $dataLaporan['status'] ?></p>
      <p><strong>Tanggal Tanggapan:</strong> <?= $data['tgl_tanggapan'] ?></p>
      <p><strong>Petugas:</strong> <?= $data['nama_petugas'] ?></p>
    </div>

    <div class="response-body">
      <strong>Isi Tanggapan:</strong><br>
      <?= $data['tanggapan'] ?>
    </div>
  </div>
  <a href="index.php" class="btn">Kembali ke Dashboard</a>

  
</body>
</html>
