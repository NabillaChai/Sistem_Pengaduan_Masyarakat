<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Laporan Pengaduan</title>
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
    
    th, td {
      border: 1px solid #000;
      padding: 8px 12px;
      text-align: center;
      font-size: 14px;
    }
    
    th {
      background-color: #f2f2f2;
      font-weight: 600;
    }
    
    td img {
      width: 90px;
      height: 70px;
      object-fit: cover;
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

  <div class="judul">Laporan Pengaduan Masyarakat</div>

  <table id="tabel-laporan">
    <thead>
      <tr>
        <th>No</th>
        <th>Tanggal Pengaduan</th>
        <th>NIK</th>
        <th>Isi Laporan</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>

  <div class="ttd">
    <div class="kolom">
      <p id="tanggal-ttd"></p>
      <p>KEPALA KELURAHAN</p>
      <div class="nama">_________________________</div>
    </div>
  </div>

  <script>
    window.onload = function() {
      const data = JSON.parse(localStorage.getItem("dataCetak") || "[]");
      const tglAwal = localStorage.getItem("tglAwal");
      const tglAkhir = localStorage.getItem("tglAkhir");

      const tbody = document.querySelector("#tabel-laporan tbody");
      tbody.innerHTML = "";

      if (data.length === 0) {
        tbody.innerHTML = `<tr><td colspan="4">Tidak ada data ditemukan.</td></tr>`;
      } else {
        data.forEach((item, i) => {
          const row = `<tr>
              <td>${i + 1}</td>
              <td>${item.tanggal}</td>
              <td>${item.nik}</td>
              <td>${item.isi}</td>
            </tr>`;
          tbody.insertAdjacentHTML("beforeend", row);
        });
      }

      // Tanggal tanda tangan otomatis
      const ttd = document.getElementById("tanggal-ttd");
      const tglCetak = tglAkhir
        ? new Date(tglAkhir).toLocaleDateString("id-ID", {
            day: "2-digit", month: "long", year: "numeric"
          })
        : new Date().toLocaleDateString("id-ID", {
            day: "2-digit", month: "long", year: "numeric"
          });
      ttd.textContent = `Bandar Lampung, ${tglCetak}`;

      // Cetak otomatis
      window.print();
    };
  </script>

</body>
</html>
