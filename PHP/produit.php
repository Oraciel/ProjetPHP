<?php
$product_id = $_GET['id'];
include "../config/commandes.php";
$produits = afficherParId($product_id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/nav.css">
    <link rel="stylesheet" type="text/css" href="../CSS/produit.css">
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
                echo '
                <a href="../admin/ajouter.php" class="btn add-btn">Ajouter</a>
                <a href="../admin/index.php" class="btn modi-btn">Modifier / Supprimer</a>';
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


    <?php foreach ($produits as $produit) : ?>
        <div class="container">
            <div class="product-image">
                <img src="<?= $produit->image ?>" alt="Product Image" height="500px" width="400px">
            </div>
            <div class="product-info">
                <h1><?= $produit->titre ?></h1>
                <p class="description"><?= $produit->description ?></p>
                <p>Genre : <?= $produit->genre ?></p>
                <p>Langue : <?= $produit->langue ?></p>
                <p>Nombre de pages : <?= $produit->nombrePage ?> pages</p>
                <p>ISBN-10 : <?= $produit->ISBN10 ?></p>
                <p>ISBN-13 : <?= $produit->ISBN13 ?></p>
                <p>Poids : <?= $produit->poids ?> g</p>
                <p>Dimensions : <?= $produit->dimensions ?></p>

                <h2><?= $produit->prixPublic ?> €</h2>
                <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="id" value="<?= $produit->id ?>">
                    <input type="hidden" name="name" value="<?= $produit->titre ?>">
                    <input type="hidden" name="price" value="<?= $produit->prixPublic ?>">
                    <input type="number" name="quantity" value="1" min="1">
                    <input class="add-to-cart-button" type="submit" value="Ajouter au panier">
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>