<?php
session_start();

if (isset($_REQUEST["btnSubmit"])) {
    /* confirmation du formulaire */
    $pseudoUtilisateur = isset($_REQUEST["PseudoUser"]) ? trim($_REQUEST["PseudoUser"]) : "";
    $passUser = isset($_REQUEST["PasswordUser"]) ? $_REQUEST["PasswordUser"] : "";
    $ConfPassUser = isset($_REQUEST["ConfPasswordUser"]) ? $_REQUEST["ConfPasswordUser"] : "";
    $codeSaisi = isset($_REQUEST["SaisieCodeCaptcha"]) ? $_REQUEST["SaisieCodeCaptcha"] : "";
    $code = isset($_SESSION["code"]) ? $_SESSION["code"] : "";

    if (($pseudoUtilisateur != null) && ($passUser != null) && ($ConfPassUser != null) && ($passUser == $ConfPassUser)) {
        if ($codeSaisi == $code) {
            echo "<h1>vos donnees sont correctes, vous etes humain</h1>";
        } else {
            echo"<h1 style=\"color: red;\">vos donnees sont incorrectes, vade retro robot!</h1>";
        }
    }
}

function genererCode() {
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
    return $nombre;
}

if (isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'reloadCaptcha' : {
                $_SESSION["code"] = genererCode();
            }
            break;
        default :
            break;
    }
} else {
   $_SESSION["code"]= genererCode();
}
?>