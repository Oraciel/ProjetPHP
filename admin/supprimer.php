<?php
session_start();
if (!isset($_SESSION['DV6b8PsIEW'])) {
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
    <link rel="stylesheet" type="text/css" href="../CSS/admin.css">
    <title>OraBook Admin</title>
</head>

<body>
    <h1>ADMIN PAGE</h1>
    <form method="post">
        <label for="id">Id du produit à supprimer :</label>
        <input type="number" id="id" name="id" min="1" step="1" required>
        <input type="submit" name="valider" value="Supprimer le produit">
    </form>
</body>

</html>

<?php
if (isset($_POST["valider"]) && is_numeric($_POST["id"])) {
    $id = htmlspecialchars($_POST["id"]);
    try {
        supprimer($id);
    } catch (Exception $e) {
        $e->getMessage();
    }
}

?>