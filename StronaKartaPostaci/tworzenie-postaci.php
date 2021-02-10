<?php
session_start();
$con = mysqli_connect('localhost', 'kowalczykmaciej', 'Qweasd123098','Postacie' ) or die('Brak połączenia z serwerem MySQL.');
$imie = $_POST['imie'];

$sila = $_POST['sila'];
$zrecznosc = $_POST['zrecznosc'];
$inteligencja = $_POST['inteligencja'];
$charyzma = $_POST['charyzma'];

$wytrzymalosc = $_POST['wytrzymalosc'];
$cios = $_POST['cios'];
$lucznictwo = $_POST['lucznictwo'];

$szermierka = $_POST['szermierka'];
$jezdziectwo = $_POST['jezdziectwo'];
$opatrywanie = $_POST['opatrywanie'];

$taktyka = $_POST['taktyka'];
$nawigacja = $_POST['nawigacja'];
$inzynieria = $_POST['inzynieria'];

$perswazja = $_POST['perswazja'];
$przywodztwo = $_POST['przywodztwo'];
$handel = $_POST['handel'];

    $con->query("INSERT INTO Postac(Imie,Sila,Zrecznosc,Inteligencja,Charyzma, Wytrzymalosc, Cios, Lucznictwo,
		Szermierka, Jezdziectwo, Opatrywanie, Taktyka, Nawigacja, Inzynieria, Perswazja, Przywodztwo, Handel)
        VALUES( '$imie','$sila', '$zrecznosc', '$inteligencja', '$charyzma','$wytrzymalosc', '$cios', '$lucznictwo', '$szermierka', '$jezdziectwo', '$opatrywanie',
		'$taktyka', '$nawigacja', '$inzynieria', '$perswazja', '$przywodztwo', '$handel')");
    $con->close();


exit();
?>
