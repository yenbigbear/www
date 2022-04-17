<?php
require "include/head.php";
require "include/menu.php";
  ?>
  <div class="content-wrapper">

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
<div class="container-fluid">
<div class="row">
  <table class="col-8">
    <thead>
      <tr>
        <th>顏色</th><th>HTML顏色名稱</th><th>HEX色碼</th><th>RGB色碼</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><div class="pick" style="background-color:black;"></</td><td>black</td><td>#000000</td><td>rgb(0, 0, 0)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Maroon;"></</td><td>Maroon</td><td>#800000</td><td>rgb(128, 0, 0)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:DarkRed;"></</td><td>DarkRed</td><td>#8b0000</td><td>rgb(139, 0, 0)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Red;"></</td><td>Red</td><td>#ff0000</td><td>rgb(255, 0, 0)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:FireBrick;"></</td><td>FireBrick</td><td>#b22222</td><td>rgb(178, 34, 34)</td>
      </tr>
    </tbody>
  </table>
  <table class="col-8">
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

 </div>
<?php
require "include/footer.php";
  ?>