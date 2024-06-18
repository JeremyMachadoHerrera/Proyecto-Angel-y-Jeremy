<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $hashed_password = hash('sha256', $password);

    $stmt = $conexion->prepare("INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        $user_id = $stmt->insert_id;
        $role_stmt = $conexion->prepare("SELECT id FROM roles WHERE nombre = ?");
        $role_stmt->bind_param("s", $role);
        $role_stmt->execute();
        $role_stmt->bind_result($role_id);
        $role_stmt->fetch();
        $role_stmt->close();

        $user_role_stmt = $conexion->prepare("INSERT INTO usuario_rol (usuario_id, rol_id) VALUES (?, ?)");
        $user_role_stmt->bind_param("ii", $user_id, $role_id);
        $user_role_stmt->execute();
        $user_role_stmt->close();

        header("Location: login.php?registro=exitoso");
        exit();
    } else {
        header("Location: register.php?error=registro_fallido");
        exit();
    }

    $stmt->close();
} else {
    header("Location: register.php");
    exit();
}
?>
