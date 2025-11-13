<?php
require '../db.php';
require '../auth.php';

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM blogs WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: ../index.php");
exit;
?>
