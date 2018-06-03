<?php

include 'lib/koneksi.php';
if (!isset($_POST['proses'])) {
  header('location: index.php');
}
$jml_beras   = $_POST['jml_beras'];
//cf boolean
$cf_aroma   = !isset($_POST['cf_aroma'])   ? 0 : $_POST['cf_aroma'] ;
$cf_warna = !isset($_POST['cf_warna']) ? 0 : $_POST['cf_warna'];
$cf_kebersihan  = !isset($_POST['cf_kebersihan'])  ? 0 : $_POST['cf_kebersihan'];
$cf_bentuk_butiran    = !isset($_POST['cf_bentuk_butiran'])    ? 0 : $_POST['cf_bentuk_butiran'];
$cf_percentage = $_POST['cf_percentage'];
//kriteria diinginkan
$kt_aroma   = $_POST['kt_aroma'];
$kt_warna  = $_POST['kt_warna'];
$kt_kebersihan  = $_POST['kt_kebersihan'];
$kt_bentuk_butiran    = $_POST['kt_bentuk_butiran'];

for ($i=1; $i<=$jml_beras; $i++) {
  mysqli_query($koneksi, "insert into beras values (null,'".
                                  $_POST['nama'.$i]."',".
                                  $_POST['aroma'.$i].",".
                                  $_POST['warna'.$i].",".
                                  $_POST['kebersihan'.$i].",".
                                  $_POST['bentuk_butiran'.$i].")"
                                );
}

$query  = "insert into kriteria values (null,".$kt_aroma.",".$kt_warna.",".$kt_kebersihan.",".$kt_bentuk_butiran.");";
$query .= "insert into core_factor values (null,".$cf_aroma.",".$cf_warna.",".$cf_kebersihan.",".$cf_bentuk_butiran.",".$cf_percentage.");";
mysqli_multi_query($koneksi, $query);
header('location: report.php');

?>
