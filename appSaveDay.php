<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Save Day</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/style_test_player.css" type="text/css"/>
	<link rel="icon" href="favicon.png" type="image/png"/>

	<link rel="stylesheet" href="css/style_pass_word.css" type="text/css"/>
  <link rel="stylesheet" href="css/styleback.css" type="text/css"/>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>

<!----->

  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">

<!---->
	<script type="text/javascript" src="java/monscript.js"></script>
	<meta meta name="viewport" content="width=device-width, user-scalable=0.3" />

<!---->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!---->

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

</HEAD>

<BODY onload="init()">


<div class="l'entree" style="height: 100vh; background-color: whitesmoke;">
  <div class="leurimage"><div class="info"></div></div>

  <div class="img_intro">
    <div class="ligneSepa"></div>
    <p class="ppowered">Powered by ACetyl</p>
  </div>


  <div class="container1">
    <span class="text1"></span>
    <div class="pres">
      <span class="text2"><h3 class="Nomentre">Save Day</h3></span>
      <div class="go">
       <!--<button class="go1" onclick="openNavig()">open</button>-->
      </div>
    </div>
  </div>



<div id="myNavig" class="overlay" style="overflow: hidden;">

  <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNavig()"> &times;</a>-->

  


  <div id="mapid"></div>

  <div class="dropdown">
    <div onclick="myFunction()" id="rondrouge" class="rondrouge">!</div>
    <div id="myDropdown" class="dropdown-content">
        <p onclick="closeFunction()" id="closeCross" class="closeCross">X</p>
<p onclick="getLocation()" style=" background-color: red; color: white; font-size: 5vw;">Localisation :</p>
<p id="demo"></p>
        <a href="#">Agression</a>
        <p id="demo"></p>
        <a href="#">Harcelement</a>
        <a href="#">Vol</a>
        <a href="#">Témoin</a>
    </div>
  </div>



</div>


</BODY>

</HTML>





