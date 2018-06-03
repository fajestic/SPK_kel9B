<?php

if (!isset($_POST['jml_beras'])) {
  header('location: index.php');
}
include 'assets/php/header.php';
$jml_beras = $_POST['jml_beras'];
?>

      <main>
        <div class="container">
          <div class="row">
          <?php include 'assets/php/keterangan.php'; ?>
          <?php include 'assets/php/checkbox_corefactor.php'; ?>
          <?php include 'assets/php/input_kriteria_diinginkan.php'; ?>
          </div>

          <!-- END KTEREANGAN -->
          <div class="row">
            <div class="col s12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-action">
                          <input type="hidden" name="jml_beras" value="<?=$jml_beras?>">
                          <table class="centered">
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
                              <?php for ($i=1; $i<=$jml_beras; $i++) { ?>
                                  <tr>
                                    <td><?=$i?></td>
                                    <td><input class="exc" required type="text" class="validate" name="nama<?=$i?>" value=""></td>
                                    <td><input required type="text" class="validate" name="aroma<?=$i?>" value=""></td>
                                    <td><input required type="text" class="validate" name="warna<?=$i?>" value=""></td>
                                    <td><input required type="text" class="validate" name="kebersihan<?=$i?>" value=""></td>
                                    <td><input required type="text" class="validate" name="bentuk_butiran<?=$i?>" value=""></td>
                                  </tr>
                              <?php } ?>
                              </tbody>
                          </table>

                          <div class="row">
                              <div class="input-field offset-s12">
                                <button  type="submit" name="proses" class="btn btn-primary right">
                                  Proses
                                </button>
                              </div>
                          </div>

                      </form>
                    </div>
                  </div>
                </div>

            </div>
          </div>
        </div>
      </main>

<?php include 'assets/php/footer.php'; ?>
