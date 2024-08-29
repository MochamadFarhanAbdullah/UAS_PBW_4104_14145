<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="..//Source Code/style.css" />
  <div class="FContainer">
    <nav class="wrapper">
      <div class="brand">
        <div class="firstname">Tepok</div>
        <div class="lastname">Bulu</div>
      </div>
      <ul class="navigation">
        <li><a href="index.html">Home</a></li>
      </ul>
    </nav>
  </div>
  <title>Tips</title>
</head>

<body>
  <table class="table nomor2" width="100%">
    <tr class="tr1">
      <th class="th2">
        <a id="linkpengertian" href="pengertiann.html">Pengertian</a>
      </th>
      <th class="th2">
        <a id="linkpengertian" href="partaii.html">Partai</a>
      </th>
      <th class="th2">
        <a id="linkpengertian" href="teknikdasar.html">Teknik Dasar</a>
      </th>
      <th class="th2">
        <a id="linkpengertian" href="teknikpukulan.html">Teknik Pukulan</a>
      </th>
      <th class="th2">
        <a id="linkpengertian" href="sistem.html">Sistem Permainan</a>
      </th>
      <th class="th2">
        <a id="linkpengertian" href="peralatan.html">Peralatan</a>
      </th>
      <th class="th2">
        <a id="linkpengertian" href="tips.php">Tips Dalam Bermain</a>
      </th>
    </tr>
  </table>
  <br />
  <br />
  <br />
  <h2 style="margin-left: 10px">Tips Dalam Bermain</h2>
  <br />
  <div class="tps">
    <ul style="margin-left: 25px; list-style-type: circle">
      <li>
        <p style="font-size: 110%">Lakukan pemanasan sebelum bermain</p>
      </li>
      <li>
        <p style="font-size: 110%">Gunakan peralatan yang sesuai</p>
      </li>
      <li>
        <p style="font-size: 110%">
          Pilihlah jenis raket berdasarkan gaya bermain Anda
        </p>
      </li>
      <li>
        <p style="font-size: 110%">
          Gunakanlah raket ori dan senar dengan tegangan secukupnya agar kita
          tidak cidera
        </p>
      </li>
      <li>
        <p style="font-size: 110%">
          Gunakan teknik-teknik dalam bermain Bulutangkis
        </p>
      </li>
      <li>
        <p style="font-size: 110%">
          Pukul <i>shuttlecock</i> ke daerah kosong lawan
        </p>
      </li>
      <li>
        <p style="font-size: 110%">Lakukan pendinginan setelah bermain</p>
      </li>
    </ul>
  </div>
  <br />
  <br />
  <br />
  <!-- <p style="font-size: 140%; text-align: center">
      Apakah Anda tertarik untuk mengikuti pelatihan Bulutangkis?
    </p> -->


  <h3 style="text-align:center">Beri kami kritik dan saran di bawah ini ya</h3>
  <br />
  <div class="tipss">
    <form action="tips.php" method="post">
      <input style="border-radius:5px;" type="text" name="nm" placeholder="Siapa nama Anda?" required />
      <br>
      <textarea style="border-radius:5px;" rows="3" name="komentar" placeholder="Kritik dan saran?" required></textarea>
      <button name="spn" type="submit" value="spn" class="btn btn-primary">
        Submit
      </button>
    </form>
  </div>

  <?php if (isset($_POST['spn'])) : ?>
    <?php
    //$nama komen di isset juga
    $nama = htmlspecialchars($_POST['nm']);
    $komen = htmlspecialchars($_POST['komentar']);
    // echo "<br>";
    // echo "<br>";
    // echo "Komen : <b>$komen</b>";
    ?>
    <br>
    <div class="komen">
      <table>
        <tr>
          <td>Nama: <?= $nama; ?></td>
        </tr>
        <tr>
          <td>Komentar: <?= $komen; ?></td>
        </tr>
      </table>
    </div>
  <?php endif; ?>


  <!-- BUAT PAKE TABEL -->
  <!-- <div class="card">
      <div class="container">
        <h4><b>Usia Dini</b></h4>
        <p>12-16 tahun</p>
      </div>
    </div>

    <div class="card">
      <div class="container">
        <h4><b>Usia Remaja</b></h4>
        <p>17-21 tahun</p>
      </div>
    </div>

    <table>
      <tr>
        <pre>
<td>*Di bawah 16thn (12-16thn)

Dengan Jadwal latihan setiap hari nya pukul  (durasi minimal 2jam) Hari Senin-Jumat.
Biaya Per-Bulan:
1x Pertemuan dlm 1minggu,
Rp. 700.000
2x Pertemuan dlm 1 minggu,
Rp. 1.500.000
3x Pertemuan dlm 1 minggu,
Rp. 2.000.000
</td>
        </pre>

        <pre>
          <td>
*Di bawah 21thn (16-21thn)

Dengan Jadwal latihan setiap hari nya pukul 18:00 s/d selesai (durasi minimal 2jam) Hari Senin-Jumat.
Biaya Per-Bulan:
1x Pertemuan dlm 1minggu,
Rp 1.000.000
2x Pertemuan dlm 1 minggu,
Rp 2.000.000
3x Pertemuan dlm 1 minggu,
Rp 3.000.000
</td>
</pre>
      </tr>
    </table>
    <br />
    <br /> -->
  <!-- <form
      style="font-size: 140%; text-align: center"
      action="les.php"
      method="post"
    >
      <label style="font-size: 100%" for="menuju"
        >Klik untuk menuju form pendaftaran</label
      >
      <br /><br />
      <input
        style="font-size: 100%; color: crimson"
        type="submit"
        value="Klik aku!"
        name="spn"
      />
    </form> -->
</body>

</html>