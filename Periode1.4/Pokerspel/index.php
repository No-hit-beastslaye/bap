<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Dobbelsteen </title>
  </head>
  <body>
    <a href="http://24853.hosts.ma-cloud.nl/bewijzenmap/periode1.4/BAP/Pokerspel/index.php">
      <button type="button" name="Redo"> Nieuwe worp. </button>
    </a>
  </body>
</html>

<?php
  function DobbelSteen($worp)
  {
    $image = imagecreate(200, 200) or die("Cannot initialize new GD imsage stream.");
    $background_color = imagecolorallocate($image, 0, 0, 0); //Black
    $color = imagecolorallocate($image, 255, 255, 255); //White

    //Draw the circles.
    if ($worp==2 or $worp==3 or $worp==4 or $worp==5 or $worp==6)
    {
      imagefilledellipse($image, 50, 50, 40, 40, $color); //Circle 1
    }

    if ($worp==6)
    {
      imagefilledellipse($image, 50, 100, 40, 40, $color); //circle 2
    }

    if ($worp==4 or $worp==5 or $worp==6)
    {
      imagefilledellipse($image, 50, 150, 40, 40, $color); //Circle 3
    }

    if ($worp == 1 or $worp==3 or $worp==5)
    {
      imagefilledellipse($image, 100, 100, 40, 40, $color); //Circle 4
    }

    if ($worp==4 or $worp==5 or $worp==6)
    {
      imagefilledellipse($image, 150, 50, 40, 40, $color); //Circle 5
    }

    if ($worp==6)
    {
      imagefilledellipse($image, 150, 100, 40, 40, $color); //Circle 6
    }

    if ($worp==2 or $worp==3 or $worp==4 or $worp==5 or $worp==6)
    {
      imagefilledellipse($image, 150, 150, 40, 40, $color); //Circle 7
    }

    //Create new image.
    imagepng($image, $worp.".png");
    imageDestroy($image);//resources vrijgeven
  }

  $worp = rand(1, 6); //1st Stone.
  DobbelSteen($worp);
  print "<img src=$worp.png?".date("U") .">&nbsp;";

  $worp = rand(1, 6); //1st Stone.
  DobbelSteen($worp);
  print "<img src=$worp.png?".date("U") .">&nbsp;";

  $worp = rand(1, 6); //1st Stone.
  DobbelSteen($worp);
  print "<img src=$worp.png?".date("U") .">&nbsp;";

  $worp = rand(1, 6); //1st Stone.
  DobbelSteen($worp);
  print "<img src=$worp.png?".date("U") .">&nbsp;";

  $worp = rand(1, 6); //1st Stone.
  DobbelSteen($worp);
  print "<img src=$worp.png?".date("U") .">&nbsp;";
?>
