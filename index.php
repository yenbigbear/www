<?php
require "include/head.php";
require "include/menu.php";
?>
<div class="content-wrapper">
<div class="container-fluid">

<!-- 原料 -->
<div class="card card-green">
              <div class="card-header">
                <h3 class="card-title">原料分布</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="raw" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

</div>

</div>
<script>
  var rawCanvas = $('#raw').get(0)
    var rawData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor :  ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var rawOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(rawCanvas, {
      type: 'doughnut',
      data: rawData,
      options: rawOptions
    })
</script>
<?php
require "include/footer.php";
  ?>