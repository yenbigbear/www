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
                <canvas id="raw" style="height: 400px;width: 400px;"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

</div>

</div>
<script>
  function chartcc(){
var cc=[
    {'backgroundColor':'rgba(206,0,0,0.7)','borderColor':'rgba(206,0,0,1)'},  //蝝� #CE0000
    {'backgroundColor':'rgba(0,90,181,0.7)','borderColor':'rgba(0,90,181,1)'},  //��� #005ab5
    {'backgroundColor':'rgba(255,88,9,0.7)','borderColor':'rgba(255,88,9,1)'},  //璈� #ff5809
    {'backgroundColor':'rgba(0,145,0,0.7)','borderColor':'rgba(0,145,0,1)'},  //蝬� #009100
    {'backgroundColor':'rgba(134,0,255,0.7)','borderColor':'rgba(134,0,255,1)'},  //蝝� #8600ff
    {'backgroundColor':'rgba(255,198,6,0.7)','borderColor':'rgba(255,198,6,1)'},  //暺� #FFD306
    {'backgroundColor':'rgba(0,147,147,0.7)','borderColor':'rgba(0,147,147,1)'},  //��坿�滩𠧧 #009393
    {'backgroundColor':'rgba(217,0,108,0.7)','borderColor':'rgba(217,0,108,1)'},  //獢�蝝��𠧧 #D9006C
    {'backgroundColor':'rgba(217,0,108,0.7)','borderColor':'rgba(217,0,108,1)'},  //獢�蝝��𠧧 #D9006C
];

alert(cc[1][1]);
tb='<table>';
for(i=0;i<cc.length;i++){
tb += "<tr><td><div style='background-color:" + cc.[i] + ";width:100px;height:100px;'></div></td></tr>";

};
tb += "</table>";
$("body .content-wrapper").append(tb);

}
  chartcc();
  const ctx = document.getElementById('raw').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 20, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
});

</script>
<?php
require "include/footer.php";
  ?>