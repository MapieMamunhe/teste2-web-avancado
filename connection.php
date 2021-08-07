<?php 
    $user = 'root';
    $pwd='';
    $host = 'localhost';
    $db = 'auth_manager';
    $dsn = 'mysql:host='.$host.';dbname='.$db;
	try {
		$pdo = new PDO($dsn, $user, $pwd);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}