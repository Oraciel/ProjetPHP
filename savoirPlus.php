<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" type="text/css" href="../CSS/nav.css">
  <link rel="stylesheet" type="text/css" href="CSS/style.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
  <h1>Site réalisé par Dacheville Vincent</h1>
  <p>Informations des livres trouvés sur Amazon.fr</p>
</body>

</html>