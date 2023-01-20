<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/nav.css">
    <link rel="stylesheet" type="text/css" href="CSS/signIn.css">
    <title>OraBook</title>
</head>

<body>

    <nav>
        <div class="nav-left">
            <a href="index.php">OraBook</a>
        </div>
        <div class="nav-right">
            <?php
            if (isset($_SESSION['DV6b8PsIEW'])) {
                echo '
                <a href="admin/ajouter.php" class="btn add-btn">Ajouter</a>
                <a href="admin/index.php" class="btn modi-btn">Modifier / Supprimer</a>';
            }
            if (isset($_SESSION['T358auXCXV']) || isset($_SESSION['DV6b8PsIEW'])) {
                echo '<a href="PHP/deconnexion.php" class="btn deco-btn">Se déconnecter</a>';
            } else {
                echo '<a href="login.php" class="btn connect-btn">Se connecter</a>
            <a href="inscrire.php" class="btn inscrire-btn">S\'inscrire</a>';
            }
            ?>
            <a href="PHP/panier.php" class="btn">Panier</a>
            <a href="savoirPlus.php" class="btn">En savoir plus</a>
        </div>
    </nav>

    <div id="container">
        <form method="POST">
            <h1>Inscription</h1>

            <label><b>Nom</b></label>
            <input type="text" placeholder="Entrer votre nom" name="name" required>

            <label><b>Prénom</b></label>
            <input type="text" placeholder="Entrer votre prénom" name="firstname" required>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Adresse email</b></label>
            <input type="email" placeholder="Entrer votre email" name="email" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" name='submit' value="S'inscrire">
        </form>
    </div>

</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $nameOfNewUser = htmlspecialchars(strip_tags($_POST['name']));
    $firstnameOfNewUser = htmlspecialchars(strip_tags($_POST['firstname']));
    $usernameOfNewUser = htmlspecialchars(strip_tags($_POST['username']));
    $emailOfNewUser = htmlspecialchars(strip_tags($_POST['email']));
    $passwordOfNewUser = htmlspecialchars(strip_tags($_POST['password']));
    $passwordOfNewUser = password_hash($passwordOfNewUser, PASSWORD_DEFAULT);
    require "config/connection.php";
    $req = $conn->prepare("INSERT INTO utilisateur (pseudo, nom, prenom, email, mdp) VALUES (?,?,?,?,?)");
    $req->execute(array($usernameOfNewUser, $nameOfNewUser, $firstnameOfNewUser, $emailOfNewUser, $passwordOfNewUser));

    echo "<p>Inscription effectuée avec succès</p>";

    $req->closeCursor();
}

?>