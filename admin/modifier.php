<?php
session_start();
if (!$_SESSION['DV6b8PsIEW']) {
    header("Location: ../login.php");
};
$product_id = $_GET['id'];
include "../config/commandes.php";
$produits = afficherParId($product_id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="../CSS/form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OraBook</title>
</head>

<body>
    <h1>Modifier :</h1>
    <?php foreach ($produits as $produit) : ?>
        <form method="post">
            <label for="reference">Référence :</label>
            <input type="text" value="<?= $produit->reference ?>" id="reference" name="reference" required>
            <br>
            <label for="prixPublic">Prix public :</label>
            <input type="number" value="<?= $produit->prixPublic ?>" id="prixPublic" name="prixPublic" min="0" step="0.01" required>
            <br>
            <label for="prixAchat">Prix d'achat :</label>
            <input type="number" value="<?= $produit->prixAchat ?>" id="prixAchat" name="prixAchat" min="0" step="0.01" required>
            <br>
            <label for="image">Lien de l'image :</label>
            <input type="text" value="<?= $produit->image ?>" id="image" name="image" required>
            <br>
            <label for="titre">Titre :</label>
            <input type="text" value="<?= $produit->titre ?>" id="titre" name="titre" required>
            <br>
            <label for="description">Description :</label>
            <input type="text" id="description" value="<?= $produit->description ?>" name="description" required>
            <br>
            <label for="genre">Genre :</label>
            <input type="text" value="<?= $produit->genre ?>" id="genre" name="genre" required>
            <br>
            <label for="editeur">Editeur :</label>
            <input type="text" value="<?= $produit->editeur ?>" id="editeur" name="editeur" required>
            <br>
            <label for="langue">Langue :</label>
            <input type="text" value="<?= $produit->langue ?>" id="langue" name="langue" required>
            <br>
            <label for="nombrePage">Nombre de pages :</label>
            <input type="number" value="<?= $produit->nombrePage ?>" id="nombrePage" name="nombrePage" min="0" required>
            <br>
            <label for="ISBN-10">ISBN-10 :</label>
            <input type="text" value="<?= $produit->ISBN10 ?>" id="ISBN-10" name="ISBN-10" required>
            <br>
            <label for="ISBN-13">ISBN-13 :</label>
            <input type="text" value="<?= $produit->ISBN13 ?>" id="ISBN-13" name="ISBN-13" required>
            <br>
            <label for="poids">Poids :</label>
            <input type="number" value="<?= $produit->poids ?>" id="poids" name="poids" min="0" step="10" required>
            <br>
            <label for="dimensions">Dimensions :</label>
            <input type="text" value="<?= $produit->dimensions ?>" id="dimensions" name="dimensions" required>
            <br>
            <input type="submit" name="valider" value="Modifier le produit">
        </form>
    <?php endforeach; ?>
</body>

</html>

<?php
if (isset($_POST["valider"])) {

    $reference = htmlspecialchars($_POST["reference"]);
    $prixPublic = htmlspecialchars($_POST["prixPublic"]);
    $prixAchat = htmlspecialchars($_POST["prixAchat"]);
    $image = htmlspecialchars($_POST["image"]);
    $titre = htmlspecialchars($_POST["titre"]);
    $description = htmlspecialchars($_POST["description"]);
    $genre = htmlspecialchars($_POST["genre"]);
    $editeur = htmlspecialchars($_POST["editeur"]);
    $langue = htmlspecialchars($_POST["langue"]);
    $nombrePage = htmlspecialchars($_POST["nombrePage"]);
    $ISBN10 = htmlspecialchars($_POST["ISBN-10"]);
    $ISBN13 = htmlspecialchars($_POST["ISBN-13"]);
    $poids = htmlspecialchars($_POST["poids"]);
    $dimensions = htmlspecialchars($_POST["dimensions"]);
    try {
        echo "ID :" . $product_id;
        modifier($reference, $prixPublic, $prixAchat, $image, $titre, $description, $genre, $editeur, $langue, $nombrePage, $ISBN10, $ISBN13, $poids, $dimensions, $product_id);
        header("Location : index.php");
    } catch (Exception $e) {
        $e->getMessage();
    }
}

?>