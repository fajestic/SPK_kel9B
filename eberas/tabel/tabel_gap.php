<!-- Tabel GAP -->
<hr><br>
<h5 align="center">= Tabel GAP =</h5>
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
      <?php foreach($datas as $data){ ?>
        <tr>
          <?php
           ?>
          <td><?=$i?></td>
          <td><?=$data['nama']?></td>
          <td><?=$data['aroma']-$k1?></td>
          <td><?=$data['warna']-$k2?></td>
          <td><?=$data['kebersihan']-$k3?></td>
          <td><?=$data['bentuk_butiran']-$k4?></td>
        </tr>
        <?php $i++ ?>
        <?php } $i=1;?>
  </tbody>
</table>
<!-- End Tabel GAP -->
