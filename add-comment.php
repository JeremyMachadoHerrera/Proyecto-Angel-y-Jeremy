<?php
// Aquí conectarías con la base de datos para guardar el comentario
$blog_id = $_POST['blog_id'];
$name = $_POST['name'];
$comment = $_POST['comment'];

// Ejemplo de código para guardar el comentario en la base de datos
/*
$conn = new mysqli('localhost', 'usuario', 'contraseña', 'base_de_datos');
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$sql = "INSERT INTO comentarios (blog_id, nombre, comentario) VALUES ('$blog_id', '$name', '$comment')";
if ($conn->query($sql) === TRUE) {
    echo "Comentario agregado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
*/

// Redirigir de nuevo a la entrada del blog
header("Location: blog-entry.php?id=$blog_id");
exit();
?>
