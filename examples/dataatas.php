<?php
include 'koneksi.php';
session_start();
if ($_SESSION['status']!="login") {
    header("location:../index.php?pesan=belum_login");
}
$temp1 = mysqli_query($conn, "SELECT temp FROM ( SELECT * FROM data WHERE  mac='Jaya03' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Jaya03' ORDER BY reading_time ASC");
$temp2 = mysqli_query($conn, "SELECT temp FROM ( SELECT * FROM data WHERE  mac='Abadi01' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Abadi01' ORDER BY reading_time ASC");
$temp3 = mysqli_query($conn, "SELECT temp FROM ( SELECT * FROM data WHERE  mac='Eka11' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Eka11' ORDER BY reading_time ASC");
$alt1 = mysqli_query($conn, "SELECT alt FROM ( SELECT * FROM data WHERE  mac='Jaya03' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Jaya03' ORDER BY reading_time ASC");
$alt2 = mysqli_query($conn, "SELECT alt FROM ( SELECT * FROM data WHERE  mac='Abadi01' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Abadi01' ORDER BY reading_time ASC");
$alt3 = mysqli_query($conn, "SELECT alt FROM ( SELECT * FROM data WHERE  mac='Eka11' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Eka11' ORDER BY reading_time ASC");
$pres1 = mysqli_query($conn, "SELECT pres FROM ( SELECT * FROM data WHERE  mac='Jaya03' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Jaya03' ORDER BY reading_time ASC");
$pres2 = mysqli_query($conn, "SELECT pres FROM ( SELECT * FROM data WHERE  mac='Abadi01' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Abadi01' ORDER BY reading_time ASC");
$pres3 = mysqli_query($conn, "SELECT pres FROM ( SELECT * FROM data WHERE  mac='Eka11' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Eka11' ORDER BY reading_time ASC");
$pm1 = mysqli_query($conn, "SELECT pm1_0 FROM ( SELECT * FROM data WHERE  mac='Jaya03' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Jaya03' ORDER BY reading_time ASC");
$pm2 = mysqli_query($conn, "SELECT pm1_0 FROM ( SELECT * FROM data WHERE  mac='Abadi01' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Abadi01' ORDER BY reading_time ASC");
$pm3 = mysqli_query($conn, "SELECT pm1_0 FROM ( SELECT * FROM data WHERE  mac='Eka11' ORDER BY reading_time DESC LIMIT 1) Var1 WHERE  mac='Eka11' ORDER BY reading_time ASC");
?>
<style>
  #font {
    font-size: 1.2rem;
  }
</style>
<div class="content">
  <div class="row">
    <div class="col-lg-4 col-md-3 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div>
            <div class="col-12 col-md-16">
              <div class="icon-big text-center icon-warning">
                <!-- <i class="nc-icon nc-circle-10"></i> -->
                <img src="../assets/img/orang.svg" style="width: 75px;height: 75px">
              </div>
            </div>
            <div class="col-12 col-md-14">
              <div class="text-center">
                <h2>Vicario</h2>
              </div>
              <div class="text-dark">
                <p class="card-category">Lokasi : <?php while ($b = mysqli_fetch_array($temp1)) {
    echo $b['temp'];
} ?>
                </p>
                <p class="card-category">Kecepatan : <?php while ($b = mysqli_fetch_array($alt1)) {
    echo $b['alt'];
} ?>
                </p>
                <p class="card-category">Status : <?php while ($b = mysqli_fetch_array($pres1)) {
    echo $b['pres'];
} ?>
                </p>
                <p class="card-category">Estimasi Waktu : <?php while ($b = mysqli_fetch_array($pm1)) {
    echo $b['pm1_0'];
} ?>
                </p>
                <p><br></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-clock-o"></i> In the last 5 minutes
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-3 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div>
            <div class="col-12 col-md-16">
              <div class="icon-big text-center icon-warning">
                <!-- <i class="nc-icon nc-circle-10"></i> -->
                <img src="../assets/img/orang.svg" style="width: 75px;height: 75px">
              </div>
            </div>
            <div class="col-12 col-md-14">
              <div class="text-center">
                <h2>Faishal</h2>
              </div>
              <div class="text-dark">
                <p class="card-category">Lokasi : <?php while ($b = mysqli_fetch_array($temp2)) {
    echo $b['temp'];
} ?>
                </p>
                <p class="card-category">Kecepatan : <?php while ($b = mysqli_fetch_array($alt2)) {
    echo $b['alt'];
} ?>
                </p>
                <p class="card-category">Status : <?php while ($b = mysqli_fetch_array($pres2)) {
    echo $b['pres'];
} ?>
                </p>
                <p class="card-category">Estimasi Waktu : <?php while ($b = mysqli_fetch_array($pm2)) {
    echo $b['pm1_0'];
} ?>
                </p>
                <p><br></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-clock-o"></i> In the last 5 minutes
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-3 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div>
            <div class="col-12 col-md-16">
              <div class="icon-big text-center">
                <!-- <i class="nc-icon nc-circle-10"></i> -->
                <img src="../assets/img/orang.svg" style="width: 75px;height: 75px">
              </div>
            </div>
            <div class="col-12 col-md-14">
              <div class="text-center">
                <h2>Baharudin</h2>
              </div>
              <div class="text-dark">
                <p class="card-category">Lokasi : <?php while ($b = mysqli_fetch_array($temp3)) {
    echo $b['temp'];
} ?>
                </p>
                <p class="card-category">Kecepatan : <?php while ($b = mysqli_fetch_array($alt3)) {
    echo $b['alt'];
} ?>
                </p>
                <p class="card-category">Status : <?php while ($b = mysqli_fetch_array($pres3)) {
    echo $b['pres'];
} ?>
                </p>
                <p class="card-category">Estimasi Waktu : <?php while ($b = mysqli_fetch_array($pm3)) {
    echo $b['pm1_0'];
} ?>
                </p>
                <p><br></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-clock-o"></i> In the last 5 minutes
          </div>
        </div>
      </div>
    </div>