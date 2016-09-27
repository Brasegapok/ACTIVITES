<?php
require_once 'ajaxCall.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" lang="fr">
        <title>Home</title>
    </head>
    <div id="Marges">
        <body>
            <header>
                <h1>Authentification</h1>
            </header>
            <script type="text/javascript">
                function ReloadingCaptcha() {
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "./ajaxCall.php", true);
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
                            document.getElementById("captcha").src = "";
                            document.getElementById("captcha").src = "captcha.php";
                        }
                    };
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.send("action=reloadCaptcha");
                }
            </script>
            <form action="ajaxCall.php" method="POST">
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
                <img src="captcha.php" id="captcha" alt ="code introuvable">
                <input type="button" name="reloadCaptcha" value="recharger le code" onclick="ReloadingCaptcha()">
                <input type="text" name="SaisieCodeCaptcha"  placeholder="Captcha" id="SaisieCodeCaptcha">
                <input type="submit" name="btnSubmit" value="Valider">
            </form>
        </body>
    </div>
</html>