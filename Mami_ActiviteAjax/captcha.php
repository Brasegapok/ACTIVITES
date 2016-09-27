<?php
session_start();
$nombre = "";
if (isset($_SESSION["code"]))
{
    $nombre = $_SESSION["code"];
}
else {
    $i = 0;
    $NbChiffres = 6;
    /* création d'une variable contenant l'ensemble des chiffres créés aléatoirement */
    $chiffres = array(0, 1, 2, 3, 4, 5);
    while ($i < $NbChiffres) {
        //création d'une variable stockant un chiffre aléatoire
        $chiffre = mt_rand(0, 9);
        //explication: la variable à la $i ème case contiendra le chiffre aléatoire
        $chiffres[$i] = $chiffre;
        //autrement dit, étant donné que le code fait 6 nombres on aura $chiffres= [$i][$i][$i][$i][$i][$i]
        $i++;
    }
//création d'une variable nombre
    $nombre = null;

//on explore le tableau $chiffres pour afficher chaque entrée qui s'y trouve.
    foreach ($chiffres as $caractere) {
        //on concatène la variable nombre
        $nombre .= $caractere;
    }
    $_SESSION["nombre"]=$nombre;
}
// définition du header de la page pour la transformer en image
header("Content-type: image/png");
//création d'une image grâce à imagecreatefrompng
$img = imagecreatefrompng("images\FondCaptcha.png");

//assignation de couleurs pour un arrière-plan et un avant-plan
$arrierePlan = imagecolorallocate($img, 0, 0, 0);
$avantPlan = imagecolorallocate($img, 255, 255, 0);

//  $_SESSION["captcha"] = $nombre;
//destruction des variables inutiles
unset($i);
unset($caractere);
unset($chiffre);
unset($chiffres);
imagestring($img, 100, 18, 8, $nombre, $avantPlan);
imagepng($img);
imagedestroy($img);
?>
