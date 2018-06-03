<?php
  include 'lib/koneksi.php';
  include 'assets/php/destroy.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Halaman Public</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css">
    <link type="text/css" rel="stylesheet" href="assets/materialize/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style media="screen">
    body {display: flex;min-height: 100vh;flex-direction: column;}
    main {flex: 1 0 auto;}
    input:not(.exc){text-align: center;}
    </style>
  </head>
  <body style="background-color: rgb(176, 202, 0);">
    <div class="row">>
    </div>

    <main class="container valign-wrapper">
      <div class="row">
          <div class="col s12">
            <div class="card-panel center-align teal">
              <h2 style="color: rgb(176, 202, 0);">e-Beras</h2>
              <span class="white-text">
                e-Beras adalah aplikasi untuk membandingkan dan merangking beras yang paling baik guna mengetahui beras mana yang terbaik sesuai kriterian yang di tentukan.
              </span>
              <form class="form-horizontal" role="form" method="post" action="input_data.php">
              <input required type="text" class="validate" name="jml_beras" placeholder="Masukkan Jumlah Jenis Beeras Anda" value="">
              <div class="row">
                  <div class="input-field offset-s12">
                    <button  type="submit" class="btn btn-primary right">
                      Proses
                    </button>
                  </div>
              </div>
            </form>
            </div>
          </div>
      </div>
    </main>

  </body>
</html>
<!DOCTYPE html>
