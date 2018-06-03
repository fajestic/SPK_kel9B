<h5 align="center">= Tabel Profile Beras =</h5>
<table class="striped centered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Aroma</th>
        <th>Warna</th>
        <th>Kebersihan</th>
        <th>Bentuk Butiran</th>
      </tr>
    </thead>
    <tbody>

    <?php while($gebetan=mysqli_fetch_array($query)){ ?>
      <?php $datas[] = $gebetan; ?>
      <tr>
        <td><?=$i?></td>
        <td><?=$gebetan['nama']?></td>
        <td><?=$gebetan['aroma']?></td>
        <td><?=$gebetan['warna']?></td>
        <td><?=$gebetan['kebersihan']?></td>
        <td><?=$gebetan['bentuk_butiran']?></td>
      </tr>
      <?php $i++ ?>
    <?php } $i=1;?>

    <tr class="red-text" style="font-weight:bold;">
      <td> </td>
      <td> = Kriteria yang diinginkan =</td>
      <?php $k=mysqli_fetch_array($query_kriteria); ?>
      <td><?=$k1=$k['aroma']?></td>
      <td><?=$k2=$k['warna']?></td>
      <td><?=$k3=$k['kebersihan']?></td>
      <td><?=$k4=$k['bentuk_butiran']?></td>
    </tr>

    </tbody>
</table>
