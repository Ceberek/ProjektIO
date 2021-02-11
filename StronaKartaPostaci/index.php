
<html>
<head>
<title>Kreator Postaci</title>
<link rel="stylesheet" href="css/main.css">


<script>

var iloscPkt = 20;
function max20()
{
var s = document.getElementById("sil").value;
var z = document.getElementById("zre").value;
var i = document.getElementById("int").value;
var c = document.getElementById("cha").value;
iloscPkt=20-s-z-i-c;
document.getElementById("pkt").innerHTML="Siła: "+s+" Zręczność: "+z+" Inteligencja: "+i+" Charyzma: "+c+" Ogółem: "+iloscPkt;
}
</script>

</head>

<body>
<div class = "container" style="text-align: center">
<header>
	<a class="tytul"> Kreator Postaci </a>	

	<nav>
		<a href="#" class="menu-gora">
			Powrót
		</a> 
	</nav>
</header>
	<form class="formularz-tworzeniepostaci" method="POST" action="tworzenie-postaci.php" style="text-align:center; padding-top:2%;">
		
<section>
		<h1><b>	 Imię i Nazwisko Bohatera:</b></h1>
		<ul class="lista" style="list-style-type:none;">	
		<li><input class="pass" type="text" align="center" name="imie" placeholder="Imię i Nazwisko"></li>
		</ul>
		<br>
		<h1><b>Atrybuty:</b></h1>
		Masz do wydania następującą ilość punków:<div id="pkt"></div>
		
		<ul  class="lista" onchange="max20()" style="list-style-type:none;">
		<li><input class="pass" type="number"  min="0" align="center" name="sila" placeholder="Siła" id="sil"></li>
		<li><input class="pass" type="number"  min="0" align="center" name="zrecznosc" placeholder="Zręczność" id="zre"></li>
		<li><input class="pass" type="number"  min="0" align="center" name="inteligencja" placeholder="Inteligencja" id="int"></li>
		<li><input class="pass" type="number"  min="0" align="center" name="charyzma" placeholder="Charyzma" id="cha"></li>
		</ul>
		
		<script type="text/javascript">
			document.getElementById("pkt").innerHTML=iloscPkt;
		</script>
		<br>
</section>


<section class="umiejki">
		<h2><b>Umiejętności:</b></h2>
		Masz do wydania 10pkt
		<br>
		<br>
		
		<p>Związane z siłą:</p>
		<ul style="list-style-type:none;">
		<li><input class="pass" type="number" min="0" align="center" name="wytrzymalosc" placeholder="Wytrzymałość"></li>
		<li><input class="pass" type="number" min="0" align="center" name="cios" placeholder="Siła ciosu"></li>
		<li><input class="pass" type="number" min="0" align="center" name="lucznictwo" placeholder="Łucznictwo"></li>
		</ul>

		<br>
		<p>Związane ze zręcznością:</p>
		<ul style="list-style-type:none;">
		<li><input class="pass" type="number" min="0" align="center" name="szermierka" placeholder="Szermierka"></li>
		<li><input class="pass" type="number" min="0" align="center" name="jezdziectwo" placeholder="Jeździectwo"></li>
		<li><input class="pass" type="number" min="0" align="center" name="opatrywanie" placeholder="Opatrywanie ran"></li>
		</ul>

		<br>
		<p>Związane z inteligencją:</p>
		<ul style="list-style-type:none;">
		<li><input class="pass" type="number" min="0" align="center" name="taktyka" placeholder="Taktyka"></li>
		<li><input class="pass" type="number" min="0" align="center" name="nawigacja" placeholder="Nawigacja"></li>
		<li><input class="pass" type="number" min="0" align="center" name="inzynieria" placeholder="Inżynieria"></li>
		</ul>

		<br>
		<p>Związane z charyzmą:</p>
		<ul style="list-style-type:none;">
		<li><input class="pass" type="number" min="0" align="center" name="perswazja" placeholder="Perswazja"></li>
		<li><input class="pass" type="number" min="0" align="center" name="przywodztwo" placeholder="Przywództwo"></li>
		<li><input class="pass" type="number" min="0" align="center" name="handel" placeholder="Handel"></li>
		</ul>
</section>
	<input type="submit" value="Utwórz Postać" name="rejestruj" style="margin-top: 8%;" class="submit" align="center">
	</form>
</div>


</body>
</html>

