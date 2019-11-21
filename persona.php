<?php
$query = $mysqli->prepare(‘

SELECT * FROM users

WHERE username = ?

AND email = ?)

$query->bind_param(‘ttt’, ‘prueba’, $mail);

$query->execute();


$parametros = array(‘:usuario’ => ‘prueba’, ‘:email’ => $mail);

$pdo->prepare(‘SELECT * FROM users

WHERE username = :usuario

AND email = :email);

$pdo->execute($parametros);

?>