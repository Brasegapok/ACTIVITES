<!DOCTYPE html>
<!--
Contient plusieurs formulaires esthétiques faits grâce à des classes bootstrap
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulaires divers</title>
        <link href="bootstrap/css/bootstrap.min.css" rel ="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type='text/css'>
            body { background-color:#DDD; }
            [class*="col"] { margin-bottom: 20px; }
            img { width: 100%; }
            .well {
                background-color:#CCC;
                padding: 20px;
            }
        </style>
        <title>Starter Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="starter-template.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <h1>Pour d'autres formulaires, on peut aller sur bootsnipp qui peut en générer pour bootstrap</h1>
        <form action="Formulaire.php" method="POST" class="form-inline">
            <fieldset>
                <legend>barre de recherche (formulaire horizontal) avec texte qui peut se cacher</legend>
            <div class="form-group">
                <label class="sr-only" for="text">Texte</label>
                <input type="text" class="form-control" id="text" placeholder="un texte ici">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Se rappeler de moi 
                    </label>
                </div>
            </div>
            <button>Envoyer</button>
            </fieldset>
        </form>
        <div class="container">
            <form action="Formulaire.php" method="POST" class="well">
                <legend>formulaire rendu joli</legend>
                <h4>contact</h4>
                <fieldset>
                    <div class="radio">
                        <label for="ami" class="radio">
                            <input type="radio" name="origine" value="ami" id="ami">
                            Par un ami 
                        </label>
                    </div>
                    <div class="radio">
                        <label for="web" class="radio">
                            <input type="radio" name="origine" value="web" id="web">
                            Sur le web 
                        </label>
                    </div>
                    <div class="radio">
                        <label for="hasard" class="radio">
                            <input type="radio" name="origine" value="hasard" id="hasard">
                            Par hasard 
                        </label>
                    </div>
                    <div class="radio">
                        <label for="autre" class="radio">
                            <input type="radio" name="origine" value="autre" id="autre">
                            Autre... 
                        </label>
                    </div>
                    <label for="textarea">Votre message :</label>
                    <textarea id="textarea" class="form-control" rows="4"></textarea>
                    <p class="help-block">Vous pouvez agrandir la fenêtre</p>
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </fieldset>
            </form>
            <form class="form-horizontal col-lg-6">
                <div class="form-group">
                    <legend>plusieurs balises avec petits ajouts pour les rendre meilleurs/jolis et surtout "responsive"</legend>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="text" class="col-lg-2 control-label">Text : </label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="text">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="textarea" class="col-lg-2 control-label">Textarea : </label>
                        <div class="col-lg-10">
                            <input type="textarea" class="form-control" id="textarea">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="select" class="col-lg-2 control-label">Select: </label>
                        <div class="col-lg-10">
                            <select id="select" class="form-control" >
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <fieldset>
                    <legend>inputs qui possèdent des balises accollées à elles</legend>
                <div class="input-group"> 
                    <span class="input-group-addon">€</span>
                    <input type="text" class="form-control" style="text-align:right" value="100">
                    <span class="input-group-addon">.00</span> 
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" style="text-align:right" value="100,50">
                        <span class="input-group-addon">€</span> 
                    </div>
                </div>
                <div class="input-group col-lg-4">   
                    <input type="text" class="form-control" style="text-align:right" value="10 000">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Valider</button>
                        <input class="btn btn-default" type="reset">Annuler</button>
                    </span>
                </div>
                <div class="form-group">
                    <button class="pull-right btn btn-default">Envoyer</button>
                </div>
                <div class="input-group">   
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="checkbox">
                            </span>
                            <input type="text" class="form-control" placeholder="saisir autre...">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <input type="radio">
                            </span>
                            <input type="text" class="form-control" placeholder="saisir autre...">
                        </div>
                    </div>
                </div>
                </fieldset>
            </form>
            <form class="col-lg-5">
                <fieldset>
                    <legend>Validation, erreur et succès</legend>
                    <div class="form-group has-error has-feedback">
                        <label class="control-label" for="idError">Erreur</label>
                        <input type="text" class="form-control" id="idError">
                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                        <span class="help-block">Corrigez l'erreur s'il vous plait</span>
                    </div>
                    <div class="form-group has-warning has-feedback">
                        <label class="control-label" for="idWarning">Avertissement</label>
                        <input type="text" class="form-control" id="idWarning">
                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                        <span class="help-block">Il y a un problème dans la saisie</span>
                    </div>
                    <div class="form-group has-success has-feedback">
                        <label class="control-label" for="idSuccess">Réussite</label>
                        <input type="text" class="form-control" id="idSuccess">
                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                        <span class="help-block">Saisie correcte</span>
                    </div>
                </fieldset>
            </form>
            <div class="col-lg-4">
                <form class="form-inline well">
                    <fieldset>
                    <legend>Formulaire utilisant JQuery et Bootstrap pour afficher une erreur pendant 4 secondes si moins de 4 caractères sont saisis avant la confirmation</legend>
                    <div class="form-group">
                        <label class="sr-only" for="text">Saisie</label>
                        <input id="text" type="text" class="form-control" placeholder="Texte ici">
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Envoyer</button>
                    <div class="alert alert-block alert-danger" style="display:none">
                        <h4>Erreur !</h4>
                        Vous devez entrer au moins 4 caractères ! 
                    </div>
                    </fieldset>
                </form>
            </div>
            <script src="assets/js/jquery.js"></script> 
            <script>
                /*
                fonction qui va afficher une erreur pendant 4 secondes si la 
                personne a inséré moins de 4 caractères dans l'input text ci-dessus
                */
                $(function () {
                    $("form").on("submit", function () {
                        if ($("input").val().length < 4) {
                            $("div.form-group").addClass("has-error");
                            $("div.alert").show("slow").delay(4000).hide("slow");
                            return false;
                        }
                    });
                });
            </script>
        </div><!-- /.container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>