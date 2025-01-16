<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue!</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="../script/bootstrap.bundle.js"></script>
</head>
<body>
    <!-- Créer un formulaire pour récupérer le nom de l'utilisateur connecté -->

        <div id="logForm">

            <form method="post" action="../controller/list.php" id="login-form">
                <div class="form-line">
                    <label> Votre nom d'utilisateur: </label>
                    <input type="pseudo" id="pseudo" name="pseudo">
                </div>
                <div class="form-line">
                    <input type="submit" value="Se connecter" class="login.bouton">
                </div>
            </form><?php
         ?>
        </div>
</body>
</html>