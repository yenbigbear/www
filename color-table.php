<?php
require "include/head.php";
require "include/menu.php";
  ?>
  <div class="content-wrapper">

<style>
    table,table th,table td{
    border:1px solid #aaa;
    margin: 10px;
  }
  .pick{
    border:1px solid #aaa;
    width:100px;
    height:30px;
  }
</style>
<div class="container-fluid">
<div class="row">
  <div class="divColor"></div>
  
  </div>

  </div>

 </div>
 <script>
   $(function(){
     var colors=[
       "Black",
       "Maroon",
       "DarkRed",
       "Red",
       "FireBrick",
       "Brown",
       "IndianRed",
       "RosyBrown",
       "LightCoral",
       "DimGray",
       "Gray",
       "DarkGray",
       "Silver",
       "LightGray",
       "Gainsboro",
       "WhiteSmoke",
       "Snow",
       "White",
       "Salmon",
       "MistyRose",
       "Tomato",
       "DarkSalmon",
       "OrangeRed",
       "Coral",
       "LightSalmon",
       "Sienna",
       "SaddleBrown",
       "Chocolate",
       "SandyBrown",
       "PeachPuff",
       "Peru",
       "Linen",
       "DarkOrange",
       "Bisque",
       "Tan",
       "BurlyWood",
       "AntiqueWhite",
       "NavajoWhite",
       "BlanchedAlmond",
       "PapayaWhip",
       "Moccasin",
       "Orange",
       "Wheat",
       "OldLace",
       "FloralWhite",
       "DarkGoldenRod",
       "GoldenRod",
       "Cornsilk",
       "Gold",
       "Khaki",
       "LemonChiffon",
       "PaleGoldenRod",
       "DarkKhaki",
       "SeaShell",
       "Yellow",
       "Beige",
       "LightGoldenRodYellow",
       "LightYellow",
       "Ivory",
       "Olive",
       "OliveDrab",
       "DarkOliveGreen",
       "GreenYellow",
       "LawnGreen",
       "Chartreuse",
       "YellowGreen",
       "Green",
       "DarkSeaGreen",
       "LimeGreen",
       "DarkGreen",
       "Lime",
       "LightGreen",
       "PaleGreen",
       "ForestGreen",
       "SeaGreen",
       "MediumSeaGreen",
       "SpringGreen",
       "MintCream",
       "MediumSpringGreen",
       "HoneyDew",
       "MediumAquaMarine",
       "Aquamarine",
       "Turquoise",
       "LightSeaGreen",
       "MediumTurquoise",
       "DarkSlateGray",
       "Teal",
       "DarkCyan",
       "Aqua",
       "Cyan",
       "PaleTurquoise",
       "LightCyan",
       "Azure",
       "DarkTurquoise",
       "CadetBlue",
       "PowderBlue",
       "DeepSkyBlue",
       "LightBlue",
       "SkyBlue",
       "LightSkyBlue",
       "SteelBlue",
       "DodgerBlue",
       "SlateGray",
       "LightSlateGray",
       "LightSteelBlue",
       "CornflowerBlue",
       "RoyalBlue",
       "AliceBlue",
       "DarkBlue",
       "MediumBlue",
       "Blue",
       "MidnightBlue",
       "Lavender",
       "GhostWhite",
       "Navy",
       "DarkSlateBlue",
       "SlateBlue",
       "MediumSlateBlue",
       "MediumPurple",
       "RebeccaPurple",
       "BlueViolet",
       "Indigo",
       "DarkOrchid",
       "DarkViolet",
       "MediumOrchid",
       "Purple",
       "MediumVioletRed",
       "Magenta",
       "Fuchsia",
       "Violet",
       "Plum",
       "Thistle",
       "Orchid",
       "DarkMagenta",
       "DeepPink",
       "HotPink",
       "PaleVioletRed",
       "LavenderBlush",
       "Crimson",
       "Pink",
       "LightPink",
       "SandBeige",
     ];
     
     $(".divColor").append(list_color(colors));

    function list_color(c){
      var tb='';
      tb += "<table id='tbc'><tr><td>序號</td><td>顏色</td><td>顏色名稱</td></tr>";
      var ii=0;
      $.each(c,function(i,v){
        ii += 1;
        tb += "<tr><td>" + ii + "</td><td><div style='background-color:" + v + ";width:50px;height:50px;'></div></td><td>" + v + "</td></tr>";
      });
      tb += "</table>";
      return tb;
    }
   })
 </script>
<?php
require "include/footer.php";
  ?>