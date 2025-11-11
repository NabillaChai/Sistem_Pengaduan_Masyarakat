<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Detail Pengaduan</title>
  <link rel="icon" href="../img/logo-bandarlampung.png">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    
    body {
      background: white;
      color: black;
      padding: 40px;
    }
    
    .kop-surat {
      display: flex;
      align-items: center;
      border-bottom: 3px solid #000;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }
    
    .kop-surat img {
      width: 80px;
      margin-right: 20px;
    }
    
    .kop-teks {
      text-align: center;
      flex: 1;
    }
    
    .kop-teks h2 {
      font-size: 20px;
      text-transform: uppercase;
      font-weight: 700;
    }
    
    .kop-teks h3 {
      font-size: 18px;
      font-weight: 600;
    }
    .kop-teks p {
      font-size: 13px;
      margin-top: 5px;
    }
    
    .judul {
      text-align: center;
      font-weight: 600;
      font-size: 18px;
      margin-top: 30px;
      margin-bottom: 20px;
      text-transform: uppercase;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }
    
    td {
      padding: 6px 10px;
      vertical-align: top;
      font-size: 14px;
    }
    
    td:first-child {
      width: 200px;
      font-weight: 600;
    }
    
    .foto {
      text-align: center;
      margin-top: 20px;
    }
    
    .foto img {
      width: 300px;
      border: 1px solid #000;
      border-radius: 4px;
    }
    
    .ttd {
      margin-top: 60px;
      width: 100%;
      display: flex;
      justify-content: flex-end;
    }
    
    .ttd .kolom {
      text-align: center;
      margin-right: 80px;
    }
    
    .ttd .kolom p {
      margin-top: 5px;
      font-size: 14px;
    }
    
    .ttd .nama {
      margin-top: 60px;
      font-weight: 600;
      text-decoration: underline;
    }
    
    @media print {
      body { padding: 0; }
      .ttd { margin-top: 40px; }
    }
    
  </style>
</head>
<body>

  <div class="kop-surat">
    <img src="../img/logo-bandarlampung.png" alt="Logo Kota Bandar Lampung">
    <div class="kop-teks">
      <h2>PEMERINTAH KOTA BANDAR LAMPUNG</h2>
      <h3>KECAMATAN TANJUNG KARANG BARAT</h3>
      <p>Jl. Gg. Balai Desa, Sukajawa, Tanjung Karang Barat, Kota Bandar Lampung 35141</p>
    </div>
  </div>

  <div class="judul">Laporan Detail Pengaduan</div>

  <table>
    <tr><td>Tanggal Pengaduan</td><td>05 November 2025</td></tr>
    <tr><td>NIK</td><td>1234567890</td></tr>
    <tr><td>Nama Pelapor</td><td>Rahmat Hidayat</td></tr>
    <tr><td>Alamat</td><td>Jl. Pagar Alam No. 12</td></tr>
    <tr><td>Isi Laporan</td><td>Jalan berlubang di sekitar Pasar Sukajawa.</td></tr>
    <tr><td>Status</td><td>Selesai ditangani</td></tr>
  </table>

  <div class="foto">
    <p><strong>Foto Laporan:</strong></p>
    <img src="../img/sample.jpg" alt="Foto Laporan">
  </div>

  <div class="ttd">
    <div class="kolom">
      <p>Bandar Lampung, 05 November 2025</p>
      <p>KEPALA KELURAHAN</p>
      <div class="nama">_________________________</div>
    </div>
  </div>

  <script>
    window.onload = () => window.print();
  </script>

</body>
</html>
