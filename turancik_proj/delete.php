<?php
require_once "classes/Portfolio.php";
require_once "classes/Database.php";


$db = new Database();
$conn = $db->getConnection();

$id = $_GET['id'];
$d = new Portfolio($conn);
$d->delete($id);

header('Location: portfolio.php');
