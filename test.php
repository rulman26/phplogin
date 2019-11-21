<?php
require_once 'usuario.php';
$usuario=new usuario();
$usuario->usuario='admin';
$usuario->password='admin';
$response=$usuario->loginUsuario();
var_dump($response);
?>