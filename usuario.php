<?php
require 'conexion.php';

class usuario 
{
  var $id;
  var $usuario;
  var $password;

  function loginUsuario(){
	$pdo = BaseDatos::conectar();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM usuario WHERE usuario=? and pasword=?";
	$q = $pdo->prepare($sql);
	$q->execute(array($this->usuario,$this->password));
	$data= $q->fetch(PDO::FETCH_ASSOC);

	if(empty($data)){
		$response["status"]=false;
        $response["mensaje"]="Datos No encontrado";
	}else{
		$response["status"]=true;
        $response["mensaje"]=$data;
	}
	return $response;
  }
}


?>