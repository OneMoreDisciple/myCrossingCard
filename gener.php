<?php
// Définition du content-type
header('Content-Type: image/png');

// Création de l'image
$fichier = 'ac1.jpg';
imagegammacorrect($image,1,2.2);
$hauteur = $_GET['height'];
$largeur = $_GET['width'];
$im = imagecreatefromjpeg($fichier);

// Création de quelques couleurs
$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);
// imagefilledrectangle($im, 0, 0, 699, 49, $black);

// Le texte à dessiner
$text = $_GET['l1'];
$t2 = $_GET['l2'];
$t3 = $_GET['l3'];
$t4 = $_GET['l4'];
$taille = $_GET['px'];
// Remplacez le chemin par votre propre chemin de police
$font = 'f1.ttf';
$fontb = 'f2.ttf';
$fonta = 'f3.ttf';

// Ajout d'ombres au texte
// imagettftext($im, 20, 0, 11, 21, $grey, $font, $text);

// Ajout du texte
$grey = imagecolorallocate($im, 128, 128, 128);
imagettftext($im, 30, 0, 112, 60, $grey, $font, $text);
imagettftext($im, 30, 0, 110, 60, $white, $font, $text);
imagettftext($im, 38, 0, 80, 120, $white, $fonta, $t2);
imagettftext($im, 24, 0, 41, 160, $white, $fontb, $t3);
imagettftext($im, $taille, 0, 80, 210, $white, $font, $t4);

// Utiliser imagepng() donnera un texte plus claire,
// comparé à l'utilisation de la fonction imagejpeg()
imagepng($im);
imagedestroy($im);
?>
