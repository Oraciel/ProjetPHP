<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OraBook</title>
</head>

<body>
    <?php
    $to = $_SESSION['user_mail'];
    $subject = "Votre commande";

    $message = '
    <html>
    <head>
    <title>Votre commande</title>
    </head>
    <body>
    <p>Merci d"avoir passé commande chez OraBook, voici le contenu de votre commande : </p>
    <table>
    <tr>
    <th>Produit</th>
    <th>Quantité</th>
    <th>Prix</th>
    </tr>';

    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
        $message .= '<tr>
        <td>' . $_SESSION['cart'][$i]['name'] . '</td>
        <td>' . $_SESSION['cart'][$i]['quantity'] . '</td>
        <td>' . $_SESSION['cart'][$i]['price'] . '</td>
        </tr>';
    }

    $message .= '</table>
        
        </body>
        </html>';

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    mail($to, $subject, $message, implode("\r\n", $headers));
    ?>

    <?php
    $to = "vincent83.dacheville@gmail.com"; //Email de l'admin (le mail s'envoie bien)
    $subject = "Nouvelle commande";

    $message = '
    <html>
    <head>
    <title>Nouvelle commande de : ' .  $_SESSION['user_mail'] . '</title>
    </head>
    <body>
    <p>Contenu de la commande : </p>
    <table>
    <tr>
    <th>Produit</th>
    <th>Quantité</th>
    <th>Prix</th>
    </tr>';

    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
        $message .= '<tr>
        <td>' . $_SESSION['cart'][$i]['name'] . '</td>
        <td>' . $_SESSION['cart'][$i]['quantity'] . '</td>
        <td>' . $_SESSION['cart'][$i]['price'] . '</td>
        </tr>';
    }

    $message .= '</table>
        
        </body>
        </html>';

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    mail($to, $subject, $message, implode("\r\n", $headers));
    ?>
    <h1>Merci d'avoir passé commande chez OraBook</h1>

</body>

</html>