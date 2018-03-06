<?php

$to = '24853@ma-web.nl';
$subject = $_POST ['subject'];
$message = $_POST ['message'];
$headers = 'From: '. $_POST ['from'];

mail($to, $subject, $message, $headers);

echo 'Uw E-mail is succesvol verstuurd.';

echo 'U heeft ' . $subject . ' verstuurd, met als bericht; "' . $message . '".';