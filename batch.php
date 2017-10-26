<html>
  <head>
    <link rel="stylesheet" type="text/css" href="./style.css" target="_blank">
    <meta charset="utf-8">


<style>
@font-face {
    font-family: ConnectionRegular;
    src: url("Connection.otf") format("opentype");
}

@font-face {
    font-family: ConnectionBold;
    font-weight: bold;
    src: url("ConnectionBold.otf") format("opentype");
}

.parent {
  position: relative;
  top: 0;
  left: 0;
}
.image1 {
  position: relative;
  top: 0px;
  left:0px;
  width:100;
  height:100;
}
.image2 {
  position: absolute;
  top: 0px;
  left:0px;
  width:100;
  height:100;
}
.image3 {
  position: absolute;
  top: 0px;
  left:0px;
  width:100;
  height:100;
text-align: center;
vertical-align: middle;
line-height: 116px; 
   font-family: 'ConnectionBold'; 
   font-weight: normal; 
   font-style: normal; 
/*background-color: lightblue;*/
}
</style>
  </head>
  <body>
<div width=100 class="parent">
<?php if ($_GET["first"]==true ?>
  <img width=100 class="image1" src="lorberkranz.png" />

  <img width=100 class="image2" src="stern.png" />
  <div width=100 bgcolor=red class="image3"><font size=5em><?php $_GET["solved"] ?></font></div>
</div>

</body>
</html>

<!--
<button class="button">Button</button>
<input type="button" class="button" value="Input Button">-->

