<?php
session_start();

if (isset($_POST['id'])) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $item = array(
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity']
    );

    $item_already_in_cart = false;
    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
        if ($_SESSION['cart'][$i]['id'] == $item['id']) {
            $_SESSION['cart'][$i]['quantity'] += $item['quantity'];
            $item_already_in_cart = true;
            break;
        }
    }
    if (!$item_already_in_cart) {
        array_push($_SESSION['cart'], $item);
    }
}

if (isset($_GET['remove_item_id'])) {
    if (isset($_SESSION['cart'])) {
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i]['id'] == $_GET['remove_item_id']) {
                unset($_SESSION['cart'][$i]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                break;
            }
        }
    }
}

if (isset($_POST['update_item_id']) && isset($_POST['update_item_quantity'])) {
    if (isset($_SESSION['cart'])) {
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            if ($_SESSION['cart'][$i]['id'] == $_POST['update_item_id']) {
                $_SESSION['cart'][$i]['quantity'] = $_POST['update_item_quantity'];
                break;
            }
        }
    }
}

header("Location: panier.php");
