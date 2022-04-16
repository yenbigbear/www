<?php
require "include/head.php";
require "include/menu.php";
  ?>
  <div class="content-wrapper">
<section class="content">
<div class="container-fluid">
<style>
    table,table th,table td{
    border:1px solid #aaa;
  }
  .pick{
    border:1px solid #aaa;
    width:50px;
    height:50px;
  }
</style>
<div class="row">
  <table>
      <thead>
          <tr>
              <th>色彩樣式</th> 
          </tr>
      </thead>
    <tbody>
        <tr>
            <th>顏色</th><td><div class="pick bg-blue"></div></td><td><div class="pick bg-indigo"></div></td><td><div class="pick bg-purple"></div></td><td><div class="pick bg-pink"></div></td>
            <td><div class="pick bg-red"></div></td><td><div class="pick bg-orange"></div></td><td><div class="pick bg-yellow"></div></td><td><div class="pick bg-green"></div></td>
        </tr>
        <tr>
            <th>class碼</th><td>bg-blue</br>bg-primary</td><td>bg-indigo</td><td>bg-purple</td><td>bg-pink</td>
            <td>bg-red</br>bg-danger</td><td>bg-orange</td><td>bg-yellow</td><td>bg-green</br>bg-success</td>
        </tr>
        <tr>
            <th>顏色</th><td><div class="pick bg-teal"></div></td><td><div class="pick bg-cyan"></div></td><td><div class="pick bg-white"></div></td><td><div class="pick bg-gray"></div></td>
            <td><div class="pick bg-gray-dark"></div></td><td><div class="pick bg-light"></div></td><td><div class="pick bg-yellow"></div></td><td><div class="pick bg-green"></div></td>
        </tr>
        <tr>
            <th>class碼</th><td>bg-teal</td><td>bg-cyan</br>bg-info</td><td>bg-white</td><td>bg-gray</br>bg-secondary</td>
            <td>bg-gray-dark</br>bg-dark</td><td>bg-light</td><td>bg-yellow</br>bg-warning</td><td>bg-green</td>
        </tr>
    </tbody>
  </table>
  </div>

</div>

</section>  </div>
<?php
require "include/footer.php";
  ?>