<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");

header("Location: index.php");
?>
