<?php
require("config/commandes.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/nav.css">
    <link rel="stylesheet" type="text/css" href="CSS/button.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
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




    <h1>Bienvenue, sélectionnez une catégorie de livre :</h1>

    <div class="categories">
        <a href="PHP/manga.php" class="category-item">
            <div class="category-name">Manga</div>
        </a>

        <a href="PHP/BD.php" class="category-item">
            <div class="category-name">BD</div>
        </a>

        <a href="PHP/cuisine.php" class="category-item">
            <div class="category-name">Cuisine</div>
        </a>

        <a href="PHP/histoire.php" class="category-item">
            <div class="category-name">Histoire</div>
        </a>

        <a href="PHP/roman.php" class="category-item">
            <div class="category-name">Roman</div>
        </a>
    </div>


    <div class="all-product">
        <?php foreach ($produits as $produit) : ?>
            <div class="product-box">
                <p class="product-name"><?= $produit->titre ?></p>
                <img src="<?= $produit->image ?>" alt="Nom du produit" height="275px" width="100px">
                <p class="product-description"><?= $produit->description ?></p>
                <p class="product-price"><?= $produit->prixPublic ?> €</p>
                <a href="#" class="see-more-button">Voir plus</a>
                <button class="add-to-cart-button">Ajouter au panier</button>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>