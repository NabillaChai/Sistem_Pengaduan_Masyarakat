<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Laporan - Admin</title>
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

    /* pola lembut di latar */
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
      margin: 40px 0 25px 0;
      font-size: 2rem;
      font-weight: 600;
      color: #7D0A0A;
      text-shadow: 0 1px 3px rgba(0,0,0,0.1);
      position: relative;
      z-index: 2;
    }

    .filter-container {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 15px;
      flex-wrap: wrap;
      margin-bottom: 40px;
      position: relative;
      z-index: 2;
    }

    .filter-container input[type="date"],
    .filter-container input[type="text"] {
      padding: 10px 15px;
      border: 2px solid rgba(125,10,10,0.2);
      border-radius: 8px;
      outline: none;
      font-size: 1rem;
      background-color: rgba(255,255,255,0.9);
      color: #333;
      transition: 0.3s;
    }

    .filter-container input:focus {
      border-color: #BF3131;
      box-shadow: 0 0 5px rgba(191,49,49,0.3);
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
      box-shadow: 0 3px 10px rgba(0,0,0,0.2);
    }

    .filter-container button:hover {
      background: #7D0A0A;
      border-color: #7D0A0A;
      transform: scale(1.05);
    }

    /* Tabel */
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
      backdrop-filter: blur(10px);
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

    .aksi-btn {
      display: flex;
      justify-content: center;
      gap: 8px;
    }

    .aksi-btn button {
      background: #BF3131;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 6px 12px;
      cursor: pointer;
      font-weight: 500;
      transition: 0.3s;
      box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    }

    .aksi-btn button:hover {
      background: #7D0A0A;
      transform: scale(1.05);
    }

    @media (max-width: 768px) {
      .filter-container {
        flex-direction: column;
      }

      .page-title {
        font-size: 1.6rem;
      }

      table {
        font-size: 0.9rem;
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
      <a href="kelola_laporan.php" class="active">Kelola Laporan</a>
      <a href="data_pengguna.php">Data Petugas</a>
      <a href="../login_petugas_admin.php" class="logout-btn">Logout</a>
    </nav>
  </header>

  <div class="page-title">Kelola Laporan</div>

  <div class="filter-container">
    <input type="text" id="keyword" placeholder="Cari berdasarkan NIK atau isi laporan...">
    <input type="date" id="tanggal-awal">
    <input type="date" id="tanggal-akhir">
    <button onclick="filterTanggal()">Tampilkan</button>
    <button onclick="cetakRentang()">Cetak Rentang</button>
  </div>

  <div class="table-container">
    <table id="tabel-laporan">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal</th>
          <th>NIK</th>
          <th>Isi Laporan</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr data-tanggal="2025-11-05">
          <td>1</td>
          <td>05-11-2025</td>
          <td>1234567890</td>
          <td>Jalan berlubang di sekitar pasar Tanjungkarang.</td>
          <td><span class="status proses">Proses</span></td>
          <td class="aksi-btn">
            <button onclick="window.location.href='detail_laporan.php?id=1'">Lihat</button>
            <button onclick="cetakSatu(1)">Cetak</button>
            <button>Hapus</button>
          </td>
        </tr>
        <tr data-tanggal="2025-11-04">
          <td>2</td>
          <td>04-11-2025</td>
          <td>0987654321</td>
          <td>Penerangan jalan mati di Jl. Teuku Umar.</td>
          <td><span class="status selesai">Selesai</span></td>
          <td class="aksi-btn">
            <button onclick="window.location.href='detail_laporan.php?id=2'">Lihat</button>
            <button onclick="cetakSatu(2)">Cetak</button>
            <button>Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

    <script>
    function filterTanggal() {
        const tglAwal = document.getElementById("tanggal-awal").value;
        const tglAkhir = document.getElementById("tanggal-akhir").value;
        const rows = document.querySelectorAll("#tabel-laporan tbody tr");

        if (!tglAwal || !tglAkhir) {
        alert("Pilih kedua tanggal terlebih dahulu!");
        return;
        }

        const start = new Date(tglAwal + "T00:00:00");
        const end = new Date(tglAkhir + "T23:59:59");

        rows.forEach((row) => {
        const tanggalText = row.children[1].textContent.trim();
        const [day, month, year] = tanggalText.split("-");
        const tanggal = new Date(`${year}-${month}-${day}T12:00:00`);

        row.style.display = tanggal >= start && tanggal <= end ? "" : "none";
        });
    }

    // Cetak rentang tanggal
    function cetakRentang() {
        const tglAwal = document.getElementById("tanggal-awal").value;
        const tglAkhir = document.getElementById("tanggal-akhir").value;

        if (!tglAwal || !tglAkhir) {
        alert("Pilih kedua tanggal terlebih dahulu!");
        return;
        }

        const start = new Date(tglAwal + "T00:00:00");
        const end = new Date(tglAkhir + "T23:59:59");
        const rows = document.querySelectorAll("tbody tr");
        const filteredData = [];

        rows.forEach((row) => {
        const tanggalText = row.children[1].textContent.trim();
        const [day, month, year] = tanggalText.split("-");
        const tanggal = new Date(`${year}-${month}-${day}T12:00:00`);

        if (tanggal >= start && tanggal <= end) {
            filteredData.push({
            tanggal: tanggalText,
            nik: row.children[2].textContent,
            isi: row.children[3].textContent,
            status: row.children[4].textContent
            });
        }
        });

        if (filteredData.length === 0) {
        alert("Tidak ada data dalam rentang tanggal tersebut.");
        return;
        }

        localStorage.setItem("dataCetak", JSON.stringify(filteredData));
        localStorage.setItem("tglAwal", tglAwal);
        localStorage.setItem("tglAkhir", tglAkhir);
        window.open("cetak_detail.php?mode=rentang", "_blank");
    }

    // Cetak satu laporan berdasarkan ID
    function cetakSatu(id) {
        const row = document.querySelector(`#tabel-laporan tbody tr:nth-child(${id})`);
        if (!row) {
        alert("Data tidak ditemukan!");
        return;
        }

        const data = {
        tanggal: row.children[1].textContent,
        nik: row.children[2].textContent,
        isi: row.children[3].textContent,
        status: row.children[4].textContent
        };

        localStorage.setItem("dataCetak", JSON.stringify([data]));
        localStorage.setItem("modeCetak", "satu");
        window.open("cetak_detail.php?id=" + id, "_blank");
    }
    </script>

</body>
</html>
