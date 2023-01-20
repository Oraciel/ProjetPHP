<?php
session_start();
if (!$_SESSION['DV6b8PsIEW']) {
    header("Location: ../login.php");
};
require("../config/commandes.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/form.css">
    <title>OraBook Admin</title>
</head>

<body>
    <h1>ADMIN PAGE</h1>
    <form method="post">
        <label for="reference">Référence :</label>
        <input type="text" id="reference" name="reference" required>
        <br>
        <label for="prixPublic">Prix public :</label>
        <input type="number" id="prixPublic" name="prixPublic" min="0" step="0.01" required>
        <br>
        <label for="prixAchat">Prix d'achat :</label>
        <input type="number" id="prixAchat" name="prixAchat" min="0" step="0.01" required>
        <br>
        <label for="image">Lien de l'image :</label>
        <input type="text" id="image" name="image" required>
        <br>
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required>
        <br>
        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <label for="genre">Genre :</label>
        <input type="text" id="genre" name="genre" required>
        <br>
        <label for="editeur">Editeur :</label>
        <input type="text" id="editeur" name="editeur" required>
        <br>
        <label for="langue">Langue :</label>
        <input type="text" id="langue" name="langue" required>
        <br>
        <label for="nombrePage">Nombre de pages :</label>
        <input type="number" id="nombrePage" name="nombrePage" min="0" required>
        <br>
        <label for="ISBN-10">ISBN-10 :</label>
        <input type="text" id="ISBN-10" name="ISBN-10" required>
        <br>
        <label for="ISBN-13">ISBN-13 :</label>
        <input type="text" id="ISBN-13" name="ISBN-13" required>
        <br>
        <label for="poids">Poids :</label>
        <input type="number" id="poids" name="poids" min="0" step="10" required>
        <br>
        <label for="dimensions">Dimensions :</label>
        <input type="text" id="dimensions" name="dimensions" required>
        <br>
        <input type="submit" name="valider" value="Ajouter le produit">
    </form>
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
        ajouter($reference, $prixPublic, $prixAchat, $image, $titre, $description, $genre, $editeur, $langue, $nombrePage, $ISBN10, $ISBN13, $poids, $dimensions);
        echo "Le livre a bien été ajouté";
    } catch (Exception $e) {
        $e->getMessage();
    }
}

?>