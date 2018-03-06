<!DOCTYPE HTML>
<html>
<head>
    <title> Opdracht 3 </title>
    <meta charset="utf-8">
</head>
<body>


<?php

$naam = 'Brandon';
$leeftijd = 17;
$woonplaats = 'Vogelenzang';
$school = 'Media College';
$games = 'Metal Gear Solid V: The Phantom Pain en Rainbow 6: Siege';
$MGSV = 'Metal Gear Solid V: The Phantom Pain';
$espionage = '240';
$gear = 'grade 10';
$r6 = 'Rainbow 6: Siege';
$attacker = 'IQ';
$defender = 'Mira';

echo '<br> Hallo, mijn naam is ' . $naam . ' en ik ben ' . $leeftijd . ' jaar oud. </br>';

echo '<br> Ik woon in ' . $woonplaats . ' en ik ga naar het ' . $school . ' in Amsterdam. </br>';

echo '<br> Verder speel ik ook nog een zooitje games waaronder ' . $games . '. Zoals bijvoorbeeld in ' . $MGSV . ' ben ik rank ' . $espionage . ' in de global rankings van FOBs. FOBs staan voor Forward operating bases, oftewel, spelers hun basissen. Verder heb ik ook best wel hoge gear, ik weet het niet precies, maar ik zit rond ' . $gear . '.</br>';

echo '<br>' . $r6 . ' daar in tegen, heb ik geen rank. Maar ik vind het wel leuk om tactieken toe te passen als zowel de attacker of defender. Persoonlijk vind ik ' . $attacker . ' de leukste attacker, en ' . $defender . ' de leukste defender. </br>';

if ( $attacker == 'IQ')
    { echo '<br> IQ die kan operators door muren zien zodra ze hun telefoon pakken om de cameras te bekijken, dus dat maakt haar best wel handig. </br>';}
else
    {echo '<br> Dit is een easter egg. </br>';}
?>

</body>

</html>

