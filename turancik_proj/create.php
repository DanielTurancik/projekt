<?php
require_once "classes/Database.php";
require_once "classes/Portfolio.php";

$db = new Database();
$conn = $db->getConnection();

if (isset($_POST['submit'])) {
    $obrazok = $_FILES['obrazok']['name'];
    $upload = 'img/' . $obrazok;
    $typ = $_POST['typ'];


    if (move_uploaded_file($_FILES['obrazok']['tmp_name'], $upload)) {
        $portfolio = new Portfolio($conn);
        $portfolio->create($upload, $typ);
        header('Location: portfolio.php');
    } else {
        echo "Chyba pri nahrávaní obrázka.";
    }
}

?>

<link rel="stylesheet" href="css/create.css">
<form method="post" enctype="multipart/form-data">
    <div>
        <h1>Create</h1>
        <input type="file" name="obrazok" accept="image/*" required>
        Vyberte sekciu:
        <select name="typ">
            <option value="oo">Sekcia 1</option>
            <option value="kk">Sekcia 2</option>
        </select>
        <input type="submit" value="Nahrať obrázok" name="submit">
    </div>
</form>