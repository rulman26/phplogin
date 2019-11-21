<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
/*
require 'conexion.php';
$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];
$pdo = BaseDatos::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM usuario WHERE usuario=? and pasword=?";
$q = $pdo->prepare($sql);
$q->execute(array($usuario,$palabra_secreta));
$data= $q->fetch(PDO::FETCH_ASSOC);

if (!empty($data)) {
    
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: secreta.php");
} else {
    # No coinciden, así que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
    echo "El usuario o la contraseña son incorrectos";
}

*/

require_once 'usuario.php';
$usuario=new usuario();
$usuario->usuario=$_POST["usuario"];
$usuario->password=$_POST["palabra_secreta"];
$response=$usuario->loginUsuario();

if ($response['status']) {
    
    session_start();
    $_SESSION["usuario"] = $response['mensaje']['usuario'];
    header("Location: secreta.php");
} else {
    # No coinciden, así que simplemente imprimimos un
    # mensaje diciendo que es incorrecto
    echo "El usuario o la contraseña son incorrectos";
}

?>