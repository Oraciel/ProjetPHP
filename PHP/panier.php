<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/nav.css">
    <link rel="stylesheet" type="text/css" href="../CSS/panier.css">
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
    <?php

    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        $total = 0;
        echo "<table>";
        echo "<tr>";
        echo "<th>Titre</th>";
        echo "<th>Quantité</th>";
        echo "<th>Prix</th>";
        echo "<th>Supprimer</th>";
        echo "</tr>";
        foreach ($_SESSION['cart'] as $item) {
            $total += $item['price'] * $item['quantity'];
            echo "<tr>";
            echo "<td>" . $item['name'] . "</td>";
            echo "<td>" . $item['quantity'] . "</td>";
            echo "<td>" . $item['price'] . "</td>";
            echo "<td>";
            echo "<a href='add_to_cart.php?remove_item_id=" . $item['id'] . "' class='remove-link'>Retirer</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<div class= 'total'>";
        echo "Total : " . $total . " €";
    ?>
        <form action="payer.php" method="post">
            <input type="submit" value="Payer" class="button">
        </form>

    <?php
        echo "</div>";
    } else {
        echo "Votre panier est vide";
    }
    ?>
</body>

</html>