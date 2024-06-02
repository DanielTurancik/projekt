<?php
require_once "classes/Portfolio.php";
require_once "classes/Database.php";
$db = new Database();
$conn = $db->getConnection();
$portfolio = new Portfolio($conn);
$id = $_GET['id'];
$row = $portfolio->getById($id);

if (isset($_POST['update'])) {
    $obrazok = $_FILES['obrazok']['name'];
    $upload = 'img/' . $obrazok;
    if (move_uploaded_file($_FILES['obrazok']['tmp_name'], $upload)) {
        $portfolio->update($id, $upload);
        header('Location: portfolio.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/update.css">
    <title>Update</title>
</head>

<body>
    <div>
        <h1>Update</h1>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="obrazok" required>
            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>

</html>