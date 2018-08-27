<?php
require '../src/config.php';

$config = new Config('mysql', 'localhost', 3306, 'turma3', 'root', '');
$dbh = new Base($config);

$stmt = $dbh->preparar(sprintf("INSERT INTO categoria (nome) VALUES ('%s')", $_POST['nome']));
$stmt->execute();

$dbh->desconectar();
