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
    width:100px;
    height:30px;
  }
</style>
<div class="container-fluid">
<div class="row">
  <table class="col-6">
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
      <tr>
        <td><div class="pick" style="background-color:Brown;"></</td><td>Brown</td><td>#a52a2a</td><td>rgb(165, 42, 42)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:IndianRed;"></</td><td>IndianRed</td><td>#cd5c5c</td><td>rgb(205, 92, 92)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:DimGray;"></</td><td>DimGray</td><td>#696969</td><td>rgb(105, 105, 105)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Gray;"></</td><td>Gray</td><td>#808080</td><td>rgb(128, 128, 128)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:DarkGray;"></</td><td>DarkGray</td><td>#a9a9a9</td><td>rgb(169, 169, 169)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Silver;"></</td><td>Silver</td><td>#c0c0c0</td><td>rgb(192, 192, 192)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:LightGray;"></</td><td>LightGray</td><td>#d3d3d3</td><td>rgb(211, 211, 211)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Gainsboro;"></</td><td>Gainsboro</td><td>#dcdcdc</td><td>rgb(220, 220, 220)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:WhiteSmoke;"></</td><td>WhiteSmoke</td><td>#f5f5f5</td><td>rgb(245, 245, 245)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Snow;"></</td><td>Snow</td><td>#fffafa</td><td>rgb(255, 250, 250)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:White;"></</td><td>White</td><td>#ffffff</td><td>rgb(255, 255, 255)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Salmon;"></</td><td>Salmon</td><td>#fa8072</td><td>rgb(250, 128, 114)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:MistyRose;"></</td><td>MistyRose</td><td>#ffe4e1</td><td>rgb(255, 228, 225)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Tomato;"></</td><td>Tomato</td><td>#ff6347</td><td>rgb(255, 99, 71)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:DarkSalmon;"></</td><td>DarkSalmon</td><td>#e9967a</td><td>rgb(233, 150, 122)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:OrangeRed;"></</td><td>OrangeRed</td><td>#ff4500</td><td>rgb(255, 69, 0)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Coral;"></</td><td>Coral</td><td>#ff7f50</td><td>rgb(255, 127, 80)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:LightSalmon;"></</td><td>LightSalmon</td><td>#ffa07a</td><td>rgb(255, 160, 122)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Sienna;"></</td><td>Sienna</td><td>#a0522d</td><td>rgb(160, 82, 45)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:SaddleBrown;"></</td><td>SaddleBrown</td><td>#8b4513</td><td>rgb(139, 69, 19)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Chocolate;"></</td><td>Chocolate</td><td>#d2691e</td><td>rgb(210, 105, 30)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:SandyBrown;"></</td><td>SandyBrown</td><td>#f4a460</td><td>rgb(244, 164, 96)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:PeachPuff;"></</td><td>PeachPuff</td><td>#ffdab9</td><td>rgb(255, 218, 185)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Peru;"></</td><td>Peru</td><td>#cd853f</td><td>rgb(205, 133, 63)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Linen;"></</td><td>Linen</td><td>#faf0e6</td><td>rgb(250, 240, 230)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:DarkOrange;"></</td><td>DarkOrange</td><td>#ff8c00</td><td>rgb(255, 140, 0)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Bisque;"></</td><td>Bisque</td><td>#ffe4c4</td><td>rgb(255, 228, 196)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Tan;"></</td><td>Tan</td><td>#d2b48c</td><td>rgb(210, 180, 140)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:BurlyWood;"></</td><td>BurlyWood</td><td>#deb887</td><td>rgb(222, 184, 135)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:AntiqueWhite;"></</td><td>AntiqueWhite</td><td>#faebd7</td><td>rgb(250, 235, 215)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:NavajoWhite;"></</td><td>NavajoWhite</td><td>#ffdead</td><td>rgb(255, 222, 173)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:BlanchedAlmond;"></</td><td>BlanchedAlmond</td><td>#ffebcd</td><td>rgb(255, 235, 205)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:PapayaWhip;"></</td><td>PapayaWhip</td><td>#ffefd5</td><td>rgb(255, 239, 213)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Moccasin;"></</td><td>Moccasin</td><td>#ffe4b5</td><td>rgb(255, 228, 181)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Orange;"></</td><td>Orange</td><td>#ffa500</td><td>rgb(255, 165, 0)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Wheat;"></</td><td>Wheat</td><td>#f5deb3</td><td>rgb(245, 222, 179)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:OldLace;"></</td><td>OldLace</td><td>#fdf5e6</td><td>rgb(253, 245, 230)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:FloralWhite;"></</td><td>FloralWhite</td><td>#fffaf0</td><td>rgb(255, 250, 240)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:DarkGoldenRod;"></</td><td>DarkGoldenRod</td><td>#b8860b</td><td>rgb(184, 134, 11)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:GoldenRod;"></</td><td>GoldenRod</td><td>#daa520</td><td>rgb(218, 165, 32)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Cornsilk;"></</td><td>Cornsilk</td><td>#fff8dc</td><td>rgb(255, 248, 220)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Gold;"></</td><td>Gold</td><td>#ffd700</td><td>rgb(255, 215, 0)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Khaki;"></</td><td>Khaki</td><td>#f0e68c</td><td>rgb(240, 230, 140)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:LemonChiffon;"></</td><td>LemonChiffon</td><td>#fffacd</td><td>rgb(255, 250, 205)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:PaleGoldenRod;"></</td><td>PaleGoldenRod</td><td>#eee8aa</td><td>rgb(238, 232, 170)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:DarkKhaki;"></</td><td>DarkKhaki</td><td>#bdb76b</td><td>rgb(189, 183, 107)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:SeaShell;"></</td><td>SeaShell</td><td>#fff5ee</td><td>rgb(255, 245, 238)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Yellow;"></</td><td>Yellow</td><td>#ffff00</td><td>rgb(255, 255, 0)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Beige;"></</td><td>Beige</td><td>#f5f5dc</td><td>rgb(245, 245, 220)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:LightGoldenRodYellow;"></</td><td>LightGoldenRodYellow</td><td>#fafad2</td><td>rgb(250, 250, 210)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:LightYellow;"></</td><td>LightYellow</td><td>#ffffe0</td><td>rgb(255, 255, 224)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Ivory;"></</td><td>Ivory</td><td>#fffff0</td><td>rgb(255, 255, 240)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:Olive;"></</td><td>Olive</td><td>#808000</td><td>rgb(128, 128, 0)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:OliveDrab;"></</td><td>OliveDrab</td><td>#6b8e23</td><td>rgb(107, 142, 35)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:DarkOliveGreen;"></</td><td>DarkOliveGreen</td><td>#556b2f</td><td>rgb(85, 107, 47)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:GreenYellow;"></</td><td>GreenYellow</td><td>#adff2f</td><td>rgb(173, 255, 47)</td>
      </tr>
      <tr>
        <td><div class="pick" style="background-color:LawnGreen;"></</td><td>LawnGreen</td><td>#7cfc00</td><td>rgb(124, 252, 0)</td>
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