<?php

    echo '<h1> Dit is wat U heeft ingevoert. </h1>';

    $plus = $_POST ['plus'];

    if ( $plus == '19' )
    {
        echo 'Om te beginnen heeft u ' . $plus . ' ingevoert. <br>';
    }
    else if ( $plus == '21' )
    {
        echo 'Om te beginnen heeft u ' . $plus . ' ingevoert. <br>';
    }

    $tachanka = $_POST ['tachanka'];

    if ($tachanka == 'Ja')
    {
        echo 'Daarna heeft U; ' . $tachanka . ' gestemt op het buffen van Tachanka, hij krijgt nu een tweede LMG. <br>';
    }
    else if( $tachanka == 'Nee')
    {
        echo 'Daarna heeft U;' . $tachanka . ' gestemt op het buffen van Tachanka, hij is nu 2 armor en 1 speed. <br>';
    }
    else if($tachanka == 'Allebei')
    {
        echo 'Daarna heeft U;' . $tachanka . ' gestemt op het buffen van Tachanka, hij blijft nu hetzelfde. <br>';
    }

    $cijfer = $_POST ['cijfer'];

    if ( $cijfer == '6' )
    {
        echo 'En als laatste, heeft u ' . $cijfer . ' ingevoert, bedankt voor het zesje.<br>';
    }
    else if ( $cijfer == '8' )
    {
        echo 'En als laatste, heeft u ' . $cijfer . ' ingevoert, bedankt voor een acht.<br>';
    }
    else if ( $cijfer == '10' )
    {
        echo 'En als laatste, heeft u ' . $cijfer . ' ingevoert, bedankt voor een tien!<br>';
    }
