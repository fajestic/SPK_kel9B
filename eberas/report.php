<?php
include 'lib/koneksi.php';
include 'assets/php/header.php';
include 'assets/php/hitungBobot.php';
include 'assets/php/query.php';
?>

<main>
  <div class="container">
    <div class="row">
      <div class="col s12">


        <?php
          while($beras=mysqli_fetch_array($query)){ $datas[] = $beras; }
          $k=mysqli_fetch_array($query_kriteria);
          $k1=$k['aroma'];
          $k2=$k['warna'];
          $k3=$k['kebersihan'];
          $k4=$k['bentuk_butiran'];
        ?>

        <!-- Tabel Nilai Bobot Hasil-->
        <?php include 'tabel/tabel_nilai_bobot.php' ?>
        <!-- End Tabel Bobot -->

        <!-- Tabel Nilai Bobot Hasil-->
        <?php include 'tabel/tabel_ranking.php' ?>
        <!-- End Tabel Bobot -->
        <a class="waves-effect waves-light btn right" href="report_detail.php"><i class="material-icons right">send</i>Detail</a>
      </div>
    </div>
  </div>
</main>

<?php include 'assets/php/footer.php'; ?>
