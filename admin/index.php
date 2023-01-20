<?php
session_start();
if (!$_SESSION['DV6b8PsIEW']) {
    header("Location: ../login.php");
};
include "../config/commandes.php";
$produits = afficher();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/admin.css">
    <link rel="stylesheet" type="text/css" href="../CSS/nav.css">
    <title>OraBook Admin</title>
</head>

<body>

    <nav>
        <div class="nav-left">
            <a href="../index.php">OraBook</a>
        </div>
        <div class="nav-right">
            <?php
            if (isset($_SESSION['DV6b8PsIEW'])) {
                echo '
                <a href="ajouter.php" class="btn add-btn">Ajouter</a>
                <a href="index.php" class="btn modi-btn">Modifier / Supprimer</a>';
            }
            if (isset($_SESSION['T358auXCXV']) || isset($_SESSION['DV6b8PsIEW'])) {
                echo '<a href="../PHP/deconnexion.php" class="btn deco-btn">Se déconnecter</a>';
            } else {
                echo '<a href="../login.php" class="btn connect-btn">Se connecter</a>
            <a href="../inscrire.php" class="btn inscrire-btn">S\'inscrire</a>';
            }
            ?>
            <a href="../PHP/panier.php" class="btn">Panier</a>
            <a href="../savoirPlus.php" class="btn">En savoir plus</a>
        </div>
    </nav>

    <h1>ADMIN PAGE</h1>
    <div class="all-product">
        <?php foreach ($produits as $produit) : ?>
            <div class="product-box">
                <p class="product-name"><?= $produit->titre ?></p>
                <img src="<?= $produit->image ?>" alt="Nom du produit">
                <p class="product-id">Id : <?= $produit->id ?></p>
                <p class="product-price"><?= $produit->prixPublic ?> €</p>
                <form action="traitement.php" method="POST">
                    <input type="hidden" name="id" value="<?= $produit->id ?>">
                    <button type="submit" class="action-btn">Supprimer</button>
                </form>
                <button class="btn action-btn" onclick="location.href='modifier.php?id=<?= $produit->id ?>'">Modifier</button>

            </div>
        <?php endforeach; ?>
    </div>


</body>

</html>