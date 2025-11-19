<?php
session_start();


?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pengaduan</title>
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
      max-width: 800px;
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

    form label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #7D0A0A;
    }

    input[type="text"],
    textarea,
    input[type="file"] {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid rgba(0,0,0,0.2);
      background: rgba(255,255,255,0.8);
      color: #333;
      outline: none;
      font-size: 1rem;
      transition: 0.3s;
    }

    input:focus,
    textarea:focus {
      border-color: #BF3131;
      background: rgba(255,255,255,1);
    }

    input[readonly] {
      background: rgba(240,240,240,0.8);
      color: #666;
    }

    textarea {
      resize: none;
      height: 120px;
    }

    .btn {
      display: inline-block;
      width: 100%;
      background: #BF3131;
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 12px 0;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
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
      <a href="index.php" class="active">Laporan Saya</a>
      <a href="../logout.php" class="logout-btn">Logout</a>
    </nav>
  </header>

  <div class="page-title">Tambah Pengaduan</div>

  <div class="form-container">
    <form action="" method="POST" enctype="multipart/form-data">
      <label for="tgl">Tanggal Pengaduan</label>
      <input type="text" id="tgl" name="tgl_pengaduan" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d') ?>" readonly>

      <label for="nik">NIK</label>
      <input type="text" id="nik" name="nik" value="<?= $_SESSION['nik'] ?>" readonly>

      <label for="tlp">No Telepon</label>
      <input type="text" id="tlp" name="tlp" maxlength="13" minlength="12" placeholder="08xxxxxxxxxx" >

      <label for="isi">Isi Laporan</label>
      <textarea id="isi" name="isi" placeholder="Tuliskan laporan di sini..." required></textarea>

      <label for="foto">Upload Foto</label>
      <input type="file" id="foto" name="foto" required>

      <button type="submit" name="simpan" class="btn">Kirim Pengaduan</button>
    </form>
  </div>
 <?php
    include '../koneksi.php';
    if(isset($_POST['simpan'])){
        $path = "../img/" . hash("sha256", rand(0, 1000) . $_FILES["foto"]["name"]) . pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $path);

        mysqli_query($conn, "INSERT INTO pengaduan SET
        tgl_pengaduan = '$_POST[tgl_pengaduan]',
        nik = '$_POST[nik]',
        isi_laporan = '$_POST[isi]',
        foto = '$path',
        tlp = '$_POST[tlp]'
        ");
        
         echo"<script>alert('Data Berhasil Ditambahkan'); window.location.assign('index.php');
         </script>";
 

    }
    ?>
</body>
</html>
