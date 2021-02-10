
<html>
<head>
<title>Kreator Postaci</title>
<link rel="stylesheet" href="css/main.css">
</head>

<body>
<div class = "container" style="text-align: center">
<header>
	<a class="menu-gora"> Kreator Postaci </a>	

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
		<ul class="lista" style="list-style-type:none;">
		<li><input class="pass" type="number" min="0" align="center" name="sila" placeholder="Siła"></li>
		<li><input class="pass" type="number" min="0" align="center" name="zrecznosc" placeholder="Zręczność"></li>
		<li><input class="pass" type="number" min="0" align="center" name="inteligencja" placeholder="Inteligencja"></li>
		<li><input class="pass" type="number" min="0" align="center" name="charyzma" placeholder="Charyzma"></li>
		</ul>
		<br>
</section>
<section class="umiejki">
		<h2><b>Umiejętności:</b></h2><br><br>
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

