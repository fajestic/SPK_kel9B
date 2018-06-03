<!-- Author: Khihady Sucahyo -->

<!-- Tabel Bobot -->
<hr><br>
<h5 align="center">= Tabel Nilai Bobot Hasil =</h5>
<table class="striped centered">

    <thead>
      <?php $cf=mysqli_fetch_array($query_cf); ?>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Aroma</th>
        <th>Warna</th>
        <th>Kebersihan</th>
        <th>Bentuk_Butiran</th>
        <th>NCF <?='('.$cf['percentage'].'%)'?></th>
        <th>NSF <?='('.(100-$cf['percentage']).'%)'?></th>
        <th>Nilai Total</th>
      </tr>
    </thead>

    <?php include 'assets/php/classCoreFactor.php'; ?>

    <tbody>
    <?php foreach($datas as $data){ ?>
      <tr>
        <td><?=$i?></td>
        <td><?=$data['nama']?></td>
        <td <?=$classAroma?>>
          <?=$b_aroma[$i]=hitungBobot($data['aroma']-$k1) ?>
        </td>
        <td <?=$classWarna?>>
          <?=$b_warna[$i]=hitungBobot($data['warna']-$k2) ?>
        </td>
        <td <?=$classKebersihan?>>
          <?=$b_kebersihan[$i]=hitungBobot($data['kebersihan']-$k3) ?>
        </td>
        <td <?=$classBentuk_Butiran?>>
          <?=$b_bentuk_butiran[$i]=hitungBobot($data['bentuk_butiran']-$k4) ?>
        </td>

        <!-- Menghitung NCF -->
        <?php
        $cf1[$i] = ($cfAroma==1)   ? $b_aroma[$i]  :0;
        $cf2[$i] = ($cfWarna==1) ? $b_warna[$i]:0;
        $cf3[$i] = ($cfKebersihan==1)  ? $b_kebersihan[$i] :0;
        $cf4[$i] = ($cfBentuk_Butiran==1)    ? $b_bentuk_butiran[$i]   :0;
        $ncf[$i] = ($cf1[$i]+$cf2[$i]+$cf3[$i]+$cf4[$i])/$banyak_cf;
        ?>

        <!-- Menghitung NSF -->
        <?php
        $sf1[$i] = ($cfAroma==0)  ? $b_aroma[$i]  :0;
        $sf2[$i] = ($cfWarna==0) ? $b_warna[$i]:0;
        $sf3[$i] = ($cfKebersihan==0) ? $b_kebersihan[$i] :0;
        $sf4[$i] = ($cfBentuk_Butiran==0)   ? $b_bentuk_butiran[$i]   :0;
        $nsf[$i] = ($sf1[$i]+$sf2[$i]+$sf3[$i]+$sf4[$i])/$banyak_sf;
        ?>

        <!-- Menghitung Nilai Total -->
        <?php
        $cfPercentage = $cf['percentage'];
        $sfPercentage = 100-$cfPercentage;
        $na[$i] = ($cfPercentage/100*$ncf[$i]) + ($sfPercentage/100*$nsf[$i]);
        ?>

        <td><?=$ncf[$i]?></td>
        <td><?=$nsf[$i]?></td>
        <td><?=$na[$i]?></td>
      </tr>
      <?php $i++ ?>
    <?php } $i=1;?>
  </tbody>
</table>
<!-- End Tabel Bobot -->
