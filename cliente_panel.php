<?php
session_start();
if (!in_array('cliente', $_SESSION['roles'])) {
    header("Location: login.php");
    exit();
}

echo "Panel de Cliente<br>";
// Funcionalidades para clientes.
?>
