<?php

    //POST-Array uitlezen.
    $Voornaam = $_POST['Voornaam'];
    $Tussenvoegsel = $_POST['Tussenvoegsel'];
    $Achternaam = $_POST['Achternaam'];
    $Mailadres = $_POST['Mailadres'];


    //Data in Database stoppen.
    //1. Verbinding maken met Database.

    $dbc = mysqli_connect('localhost' , 'root' , '' , '24853_db') or die ('Error connecting.');

    //2. Opdracht (Query) schrijven voor de database.

    $query = "INSERT INTO nieuwsbrief VALUES (0, '$Voornaam', '$Tussenvoegsel', '$Achternaam', '$Mailadres' )";

    //3. Query uitvoeren.

    $result = mysqli_query($dbc, $query) or die ('Error querying.');

    //4. Verbinding verbreken.

    mysqli_close($dbc);

    //Bevestigen dat data in database staat.
    if ($result)
    {
        echo 'De volgende gegevens zijn toegevoegd aan de database: <br>';
        echo 'Voornaam: ' . $Voornaam . '<br>';
        echo 'Tussenvoegsel: ' . $Tussenvoegsel . '<br>';
        echo 'Achternaam: ' . $Achternaam . '<br>';
        echo 'Mailadres: ' . $Mailadres . '<br>';
    }
    else
    {
        echo 'Sorry, er is iets misgegaan. Probeer het opnieuw.';
    }