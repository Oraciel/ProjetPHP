<?php
session_start();

function ajouter($reference, $prixPublic, $prixAchat, $image, $titre, $description, $genre, $editeur, $langue, $nombrePage, $ISBN10, $ISBN13, $poids, $dimensions)
{
	require("connection.php");
	$req = $conn->prepare("INSERT INTO produit (reference, prixPublic, prixAchat, image, titre, description, genre, editeur, langue, nombrePage, ISBN10, ISBN13, poids, dimensions) 
		VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

	$req->execute(array($reference, $prixPublic, $prixAchat, $image, $titre, $description, $genre, $editeur, $langue, $nombrePage, $ISBN10, $ISBN13, $poids, $dimensions));

	$req->closeCursor();
}


function afficher()
{
	require("connection.php");
	$req = $conn->prepare("SELECT * FROM produit ORDER BY id");

	$req->execute();

	$data = $req->fetchAll(PDO::FETCH_OBJ);

	return $data;

	$req->closeCursor();
}

function afficherParCategorie($genre)
{
	require("connection.php");
	$req = $conn->prepare("SELECT * FROM produit WHERE produit.genre = '$genre' ORDER BY id");

	$req->execute();

	$data = $req->fetchAll(PDO::FETCH_OBJ);

	return $data;

	$req->closeCursor();
}

function afficherParId($id)
{
	require("connection.php");
	$req = $conn->prepare("SELECT * FROM produit WHERE produit.id = '$id'");

	$req->execute();

	$data = $req->fetchAll(PDO::FETCH_OBJ);

	return $data;

	$req->closeCursor();
}

function supprimer($id)
{
	require("connection.php");

	$req = $conn->prepare("DELETE FROM produit WHERE id =?");

	$req->execute(array($id));
}

function getAdmin($email, $password)
{
	require("connection.php");
	$req = $conn->prepare("SELECT * FROM `admin` WHERE pseudo=? and mdp=?");
	$req->execute(array($email, $password));

	if ($req->rowCount() == 1) {
		$data = $req->fetch();
		return $data;
	} else return false;
	$req->closeCursor();
}

function modifier($reference, $prixPublic, $prixAchat, $image, $titre, $description, $genre, $editeur, $langue, $nombrePage, $ISBN10, $ISBN13, $poids, $dimensions, $id)
{
	require("connection.php");

	$req = $conn->prepare("UPDATE produit SET reference = ?, prixPublic = ?, prixAchat = ?, image = ?, titre =?, description=?, genre=?, editeur=?, langue=?, nombrePage=?, ISBN10=?, ISBN13=?, poids=?, dimensions=? WHERE id=?");

	$req->execute(array($reference, $prixPublic, $prixAchat, $image, $titre, $description, $genre, $editeur, $langue, $nombrePage, $ISBN10, $ISBN13, $poids, $dimensions, $id));

	$req->closeCursor();
}

function addToCart($item)
{
	if (!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}
	$item['name'] = $item->titre;
	array_push($_SESSION['cart'], $item);
}
