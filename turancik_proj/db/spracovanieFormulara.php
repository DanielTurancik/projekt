<?php
$host = "localhost";
$dbname = "formular";
$port = 3306;
$username = "root";
$password = "";

// $options = array(
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
// );

try {
    $conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';port=' . $port, $username, $password);
} catch (PDOException $e) {
    die("Chyba pripojenia: " . $e->getMessage());
}

$meno = $_POST['name'];
$priezvisko = $_POST['surname'];
$email = $_POST['email'];
$sprava = $_POST['text'];

$sql = "INSERT INTO udaje (meno, priezvisko, email, sprava)
VALUES ('" . $meno . "', '" . $priezvisko . "', '" . $email . "', '" . $sprava . "')";

$statement = $conn->prepare($sql);
try {
    $insert = $statement->execute();
    header("Location: ../podakovanie.php");
    return $insert;
} catch (\Exception $exception) {
    error_log($exception->getMessage());
    http_response_code(404);
    return false;
}

$conn = null;
