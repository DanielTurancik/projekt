<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/classes/Kontakt.php');


$meno = $_POST['name'];
$email = $_POST['email'];
$sprava = $_POST['sprava'];
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
// Overenie údajov
if (empty($meno) || empty($email) || empty($sprava)) {
    die('Chyba: Všetky polia sú povinné!');
}
// Uloženie správy do databázy
$kontakt = new Kontakt();
$ulozene = $kontakt->ulozitSpravu($meno, $email, $sprava);

if ($ulozene) {
    header('Location: ../podakovanie.php');
} else {
    die('Chyba pri odosielaní správy do databázy!');
}
