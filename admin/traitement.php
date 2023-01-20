<?php
require '../config/commandes.php';
$id = $_POST['id'];
supprimer($id);
header("Location: index.php");
