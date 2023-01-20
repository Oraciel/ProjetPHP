<?php
session_start();
include "config/commandes.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/nav.css">
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
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
                echo '<a href="admin/supprimer.php" class="btn supp-btn">Supprimer</a>
                <a href="admin/ajouter.php" class="btn add-btn">Ajouter</a>
                <a href="admin/index.php" class="btn modi-btn">Modifier</a>';
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
        <!-- zone de connexion -->

        <form method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur ou l'email" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" name='submit' value='Se connecter'>
        </form>
    </div>

</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $usernameAdmin = htmlspecialchars(strip_tags($_POST['username']));
    $passwordAdmin = htmlspecialchars(strip_tags($_POST['password']));

    require("config/connection.php");
    $req = $conn->prepare("SELECT * FROM admin WHERE email=? or pseudo=? and mdp=?");
    $req->execute(array($usernameAdmin, $usernameAdmin, $passwordAdmin));
    if ($req->rowCount() == 1) {
        $_SESSION['DV6b8PsIEW'] = $usernameAdmin;
        header('Location: admin/index.php');
    }
    $req = $conn->prepare("SELECT * FROM utilisateur WHERE email=? or pseudo=?");
    $req->execute(array($usernameAdmin, $usernameAdmin));
    if ($req->rowCount() != 0) {
        $row = $req->fetch();
        if (password_verify($passwordAdmin, $row["mdp"])) {
            $_SESSION["user_mail"] = $row["email"];
            $_SESSION["user_name"] = $row["nom"];
            $_SESSION['T358auXCXV'] = $usernameAdmin;
            header("location: index.php");
        }
    }
}


?>