<?php
require("../config/commandes.php");
$genre = "Roman";
$produits = afficherParCategorie($genre);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/nav.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <title>OraBook</title>
</head>

<body>
    <nav>
        <div class="nav-left">
            <a href="../index.php">OraBook</a>
        </div>
        <div class="nav-right">
            <?php
            if (isset($_SESSION['DV6b8PsIEW'])) {
                echo '<a href="../admin/supprimer.php" class="btn supp-btn">Supprimer</a>
                <a href="../admin/ajouter.php" class="btn add-btn">Ajouter</a>
                <a href="../admin/index.php" class="btn modi-btn">Modifier</a>';
            }
            if (isset($_SESSION['T358auXCXV']) || isset($_SESSION['DV6b8PsIEW'])) {
                echo '<a href="deconnexion.php" class="btn deco-btn">Se déconnecter</a>';
            } else {
                echo '<a href="../login.php" class="btn connect-btn">Se connecter</a>
            <a href="../inscrire.php" class="btn inscrire-btn">S\'inscrire</a>';
            }
            ?>
            <a href="panier.php" class="btn">Panier</a>
            <a href="../savoirPlus.php" class="btn">En savoir plus</a>
        </div>
    </nav>

    <h1>Liste des romans :</h1>

    <div class="all-product">
        <?php foreach ($produits as $produit) : ?>
            <div class="product-box">
                <p class="product-name"><?= $produit->titre ?></p>
                <img src="<?= $produit->image ?>" alt="Nom du produit" height="275px" width="100px">
                <p class="product-description"><?= $produit->description ?></p>
                <p class="product-price"><?= $produit->prixPublic ?> €</p>
                <a href="produit.php?id=<?= $produit->id ?>" class="see-more-button">Voir plus</a>
                <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="id" value="<?= $produit->id ?>">
                    <input type="hidden" name="name" value="<?= $produit->titre ?>">
                    <input type="hidden" name="price" value="<?= $produit->prixPublic ?>">
                    <input type="number" name="quantity" value="1" min="1">
                    <input class="add-to-cart-button" type="submit" value="Ajouter au panier">
                </form>

            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>