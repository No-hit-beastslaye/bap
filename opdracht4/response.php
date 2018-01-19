<?php

    echo '<h1> Dit is wat U heeft ingevoert. </h1>';

    $plus = $_POST ['plus'];

    echo 'Om te beginnen heeft u ' . $plus . ' ingevoert. <br>';

    $tachanka = $_POST ['tachanka'];

    echo 'Daarna heeft U; ' . $tachanka . ' gestemt op het buffen van Tachanka. <br>';

    $cijfer = $_POST ['cijfer'];

    echo 'En als laatste, heeft u ' . $cijfer . ' ingevoert, bedankt voor het cijfer.<br>';
