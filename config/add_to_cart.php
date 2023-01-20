<?php
session_start();

// Add an item to the cart
if (isset($_POST['item_id'])) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $item = array(
        'id' => $_POST['item_id'],
        'name' => $_POST['item_name'],
        'price' => $_POST['item_price'],
        'quantity' => $_POST['item_quantity']
    );
    array_push($_SESSION['cart'], $item);
}

// Remove an item from the cart
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

// Update the quantity of an item in the cart
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
