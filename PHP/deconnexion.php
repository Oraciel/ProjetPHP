<?php
session_start();

if (isset($_SESSION['DV6b8PsIEW']) || isset($_SESSION['T358auXCXV'])) {
    $_SESSION['DV6b8PsIEW'] = array();
    $_SESSION['T358auXCXV'] = array();

    session_destroy();

    header("Location: ../");
} else {
    header("Location: ../login.php");
}
