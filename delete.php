<?php
include("function.php");

$id   = $_GET['id'];
$pdo = db_conn();
$sql = 'DELETE FROM php_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

header('Location: indexx.php');
