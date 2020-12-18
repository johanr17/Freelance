<?php
include 'koneksi.php';
?>

<?php
$waktu = mysqli_query($koneksi, "SELECT time_stamp FROM ( SELECT * FROM parsed WHERE  device_eui='2203171059171058' ORDER BY `parsed`.`time_stamp` DESC LIMIT 20) Var1 WHERE device_eui='2203171059171058'  ORDER BY `Var1`.`time_stamp`  ASC");

$temp = mysqli_query($koneksi, "SELECT debit FROM ( SELECT * FROM parsed WHERE  device_eui='2203171059171058' ORDER BY `parsed`.`time_stamp` DESC LIMIT 20) Var1 WHERE device_eui='2203171059171058'  ORDER BY `Var1`.`time_stamp`  ASC");



?>
<canvas id=myChart width="300" height="100" style="margin-left: 0%;"></canvas>
<div class="content">
  <div class="row">
    <div class="col-md-12">
    </div>
  </div>
  <!-- <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 5 minutes ago
                </div>
              </div> -->
</div>



<script>
  var canvas = document.getElementById('myChart');
  var data = {
    labels: [
      <?php while ($b = mysqli_fetch_array($waktu)) {
    echo '"' . $b['time_stamp'] . '",';
}?>
    ],
    datasets: [{
        label: "Nilai Debit Berdasarkan Waktu",
        backgroundColor: "rgba(0, 0, 0, 0)",
        borderColor: "rgb(27, 128, 1)",
        borderWidth: 2,
        pointBorderColor: "rgb(27, 128, 1)",
        pointBackgroundColor: "#fff",
        pointBorderWidth: 2,
        pointHoverRadius: 5,
        pointHoverBackgroundColor: "rgb(27, 128, 1)",
        pointHoverBorderColor: "rgb(27, 128, 1)",
        pointHoverBorderWidth: 2,
        pointRadius: 5,
        pointHitRadius: 10,
        data: [
          <?php while ($b = mysqli_fetch_array($temp)) {
    echo  $b['debit'] . ',';
}?>
        ],
      }



    ]
  };

  var option = {
    showLines: true,
    animation: {
      duration: 0
    },
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: false
        },
        scaleLabel: {
          display: true,
          labelString: 'Debit (L/min)' //ganti
        }
      }],
      xAxes: [{
        ticks: {
          beginAtZero: false
        },
        scaleLabel: {
          display: true,
          labelString: 'Waktu (Tahun-Bulan-Tanggal Jam:Menit:Detik)'
        }
      }]
    }
  };

  var myLineChart = Chart.Line(canvas, {
    data: data,
    options: option
  });
</script>