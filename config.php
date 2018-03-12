<?php

$dbHost = 'localhost';
$dbName = 'cursophp';
$dbUser = 'root';
$dbPass = 'root';

	try {

		$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", "$dbUser", "$dbPass"); // Para crear la conexion a la base de datos

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // para agregar los errores que se puedan presentar en la conexion

	} catch(Exception $e) {

		echo $e->getMessage(); // muestra los errores
	}


 ?>
