<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
if (empty($_SESSION["usuario"])) {
    header("Location: index.html");
    exit();
}

echo "Bienvenido => ".$_SESSION['usuario'];
?>
<!-- Por cierto, también se puede usar HTML como en todos los scripts de PHP-->
<p>
    Acceso solo los Logueados
</p>
<!-- Y aprovechando, le indicamos al usuario un enlace para salir-->
<a href="logout.php">Cerrar sesión</a>