<?php
session_start();

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
    $_SESSION["code"] = $nombre;
    var_dump($nombre);


if (isset($_POST['reload']) && !empty($_POST['reload'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'reload' : Chargercode();
            break;
        default :
            break;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="UTF-8" lang="fr">
        
        <title>Home</title>
    </head>
    <div id="Marges">
        <body>
            <header>
                <h1>Authentification</h1>
            </header>
            <script type="text/javascript">
                $.ajax({url: "http://127.0.0.1/GIT/Mami_ActiviteAjax/index.php",
                    data: {action: "reload"},
                    type: "post",
                    success: function (output) {
                        alert(output);
                    }
                });
            </script>
            <form action="index.php" method="POST">
                <p>Saisir votre pseudo: </p>
                <input type="text" name="PseudoUser">
                <br>
                <p>Saisir un mot de passe: </p>
                <input type="password" name="PasswordUser">
                <br>
                <p>Saisir à nouveau le mot de passe: </p>
                <input type="password" name="ConfPasswordUser">
                <br>
                <p>Afin de prouver que vous n'êtes pas un robot, prière de saisir le code indiqué ci-dessous</p>
                <br>
                <img src="captcha.php" alt ="code introuvable">
                <input type="button" name="reloadCaptcha" value="recharger le code">
                <input type="text" name="Captcha" placeholder="Captcha">
            </form>
        </body>
    </div>
</html>