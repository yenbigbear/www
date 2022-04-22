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
   get_chart("raw","pie");

  });
  


</script>
<?php
require "include/footer.php";
  ?>