
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
iloscPkt=10-s-z-i-c;
document.getElementById("pkt").innerHTML="Siła: "+s+" Zręczność: "+z+" Inteligencja: "+i+" Charyzma: "+c+" Nieprzydzielone: "+iloscPkt;
}

var iloscPktUmiej=10;

function max10sil()
{
var wytrz = document.getElementById("wy").value;
var cios = document.getElementById("ci").value;
var luczn = document.getElementById("lu").value;

var sumSil=Math.abs(0-wytrz-cios-luczn);

iloscPktUmiej=iloscPktUmiej-sumSil;

document.getElementById("pktUmiejSil").innerHTML=sumSil;

}

function max10zre()
{

var szerm = document.getElementById("sz").value;
var jezdz = document.getElementById("je").value;
var opatr = document.getElementById("op").value;

var sumZre=Math.abs(0-szerm-jezdz-opatr);

iloscPktUmiej=iloscPktUmiej-sumZre;

document.getElementById("pktUmiejZre").innerHTML=sumZre;

}

function max10int()
{

var taktyk = document.getElementById("ta").value;
var nawig = document.getElementById("na").value;
var inzyn = document.getElementById("in").value;

var sumInt=Math.abs(0-taktyk-nawig-inzyn);

iloscPktUmiej=iloscPktUmiej-sumInt;

document.getElementById("pktUmiejInt").innerHTML=sumInt;

}
function max10cha()
{

var pers = document.getElementById("pe").value;
var przyw = document.getElementById("pr").value;
var hand = document.getElementById("ha").value;

var sumCha=Math.abs(0-pers-przyw-hand);

iloscPktUmiej=iloscPktUmiej-sumCha;

document.getElementById("pktUmiejCha").innerHTML=sumCha;

}


</script>

</head>

<body>
<div class = "container" style="text-align: center">
<header>
	<a class="tytul"> Kreator Postaci </a>	

	<nav>
		<a href="http://www.projektzio.cba.pl/?fbclid=IwAR0ep6_GdwmzcT7We3_fAQ_IKKHQ_c_FoI5Z7eANH6gYly-ayfvRs68jxrY" class="menu-gora">
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
		Masz do wydania: <div id="pktUm"></div>
		<br>
		<br>
		
		<p>Związane z siłą: <div id="pktUmiejSil"></div></p>
		<ul class="lista" onchange="max10sil()" style="list-style-type:none;">
		<li><input class="pass" type="number" min="0" align="center" name="wytrzymalosc" placeholder="Wytrzymałość" id="wy"></li>
		<li><input class="pass" type="number" min="0" align="center" name="cios" placeholder="Siła ciosu" id="ci"></li>
		<li><input class="pass" type="number" min="0" align="center" name="lucznictwo" placeholder="Łucznictwo" id="lu"></li>
		</ul>
		
		<br>
		<p>Związane ze zręcznością: <div id="pktUmiejZre"></div></p>
		<ul class="lista" onchange="max10zre()" style="list-style-type:none;">
		<li><input class="pass" type="number" min="0" align="center" name="szermierka" placeholder="Szermierka" id="sz"></li>
		<li><input class="pass" type="number" min="0" align="center" name="jezdziectwo" placeholder="Jeździectwo" id="je"></li>
		<li><input class="pass" type="number" min="0" align="center" name="opatrywanie" placeholder="Opatrywanie ran" id="op"></li>
		</ul>

		<br>
		<p>Związane z inteligencją: <div id="pktUmiejInt"></div></p>
		<ul class="lista" onchange="max10int()" style="list-style-type:none;">
		<li><input class="pass" type="number" min="0" align="center" name="taktyka" placeholder="Taktyka" id="ta"></li>
		<li><input class="pass" type="number" min="0" align="center" name="nawigacja" placeholder="Nawigacja" id="na"></li>
		<li><input class="pass" type="number" min="0" align="center" name="inzynieria" placeholder="Inżynieria" id="in"></li>
		</ul>

		<br>
		<p>Związane z charyzmą: <div id="pktUmiejCha"></div></p>
		<ul class="lista" onchange="max10cha()" style="list-style-type:none;">
		<li><input class="pass" type="number" min="0" align="center" name="perswazja" placeholder="Perswazja" id="pe"></li>
		<li><input class="pass" type="number" min="0" align="center" name="przywodztwo" placeholder="Przywództwo" id="pr"></li>
		<li><input class="pass" type="number" min="0" align="center" name="handel" placeholder="Handel" id="ha"></li>
		</ul>
		
		<script type="text/javascript">
			document.getElementById("pktUm").innerHTML=iloscPktUmiej;
		</script>
		
</section>
	<input type="submit" value="Utwórz Postać" name="rejestruj" style="margin-top: 8%;" class="submit" align="center">
	</form>
</div>


</body>
</html>

