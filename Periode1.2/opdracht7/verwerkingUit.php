<?php
//FORMULIEREN UITLEZEN (DATA BINNENHALEN)

$Mailadres = $_POST['Mailadres'];
echo $Mailadres;

//CONNECTIE MAKEN MET DE DATABASE
$host = 'localhost';
$username = 'root';
$password = '';
$database = '24853_db';

$dbc = mysqli_connect($host, $username, $password, $database) or die ('Error connecting.');

//QUERY SCHRIJVEN NAAR ZOKEN NAAR DATA
$query =  "SELECT * FROM nieuwsbrief WHERE Mailadres = '$Mailadres'";


//QUIERY UITVOEREN
$result = mysqli_query($dbc, $query) or die (' Error querying ( SELECT).');


//TELLEN HOEVEEL REGELS WE NU HEBBEN
$numbers = mysqli_num_rows($result);


//TESTEN OF ER REGELS ZIJN EN DAAR CONCLUSIES AAN VERBINDEN
if ($numbers == 0)
{
    echo ('Helaas, dit mailadres ' . $Mailadres . ' niet in de database.<br>');
    echo ('<a href="uitschrijven.php"> Klik hier om het nogmaals te proberen.</a>');
    exit();
}
else
{
    echo 'Hoera, het mailadres ' . $Mailadres . ' is gevonden in de database.';
}

//QEURY SCHRIJVEN VOOR VERWIJDEREN DATA
$query = "DELETE FROM nieuwsbrief WHERE Mailadres = '$Mailadres'";

$result = mysqli_query($dbc, $query) or die (' Error querying (DELETE).');

//CONNECTIE VERBREKEN
mysqli_close($dbc);


//VERSLAG DOEN VAN HET RESULTAAT
echo 'Het mailadres ' . $Mailadres . ' is verwijderd uit de database!<br>';
echo  '<a href="index.php">Klik hier om terug te keren naar de homepage. </a>';