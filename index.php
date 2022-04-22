<?php
require "class/Plugin.php";
$p = new Plugin();
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
                <div id="raw" style="width: 600px;height:400px;"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

</div>

</div>
<script>
  $(function(){
    var myChart = echarts.init(document.getElementById('raw'));
    option = {
  xAxis: {
    type: 'category',
    data: ['Matcha Latte', 'Milk Tea', 'Cheese Cocoa', 'Walnut Brownie']
  },
  yAxis: {},
  series: [
    {
      type: 'bar',
      name: '2015',
      data: [89.3, 92.1, 94.4, 85.4]
    },
    {
      type: 'bar',
      name: '2016',
      data: [95.8, 89.4, 91.2, 76.9]
    },
    {
      type: 'bar',
      name: '2017',
      data: [97.7, 83.1, 92.5, 78.1]
    }
  ]
};

      // 使用刚指定的配置项和数据显示图表。
      myChart.setOption(option);

  })
  


</script>
<?php
require "include/footer.php";
  ?>