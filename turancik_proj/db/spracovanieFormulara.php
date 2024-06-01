<?php

require_once('../classes/Kontakt.php');

use formular\Kontakt;

$meno = $_POST['name'];
$email = $_POST['email'];
$sprava = $_POST['text'];

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
    //http_response_code(404);
}
