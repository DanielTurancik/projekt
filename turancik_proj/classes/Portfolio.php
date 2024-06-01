<?php
require_once "Database.php";

class Portfolio
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function create($obrazok, $typ)
    {
        $sql = "INSERT INTO portfolio (obrazok, typ) VALUES (:obrazok, :typ)";
        $stmt = $this->db->prepare($sql);
        $adjustedPath = 'img/' . basename($obrazok);
        $stmt->bindParam(':obrazok', $adjustedPath);
        $stmt->bindParam(':typ', $typ);
        $stmt->execute();
    }

    public function read($typ, $sectionClass)
    {
        $sql = "SELECT * FROM portfolio WHERE typ = :typ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':typ', $typ);
        $stmt->execute();
        if (!$stmt->execute()) {
            print_r($stmt->errorInfo());
        }
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<section class='" . $sectionClass . "'>";
            echo "<div>";
            echo "<img src='" . $row['obrazok'] . "' alt='Image'><br>";
            echo '<a href="../update.php?id=' . $row['id'] . '" class="btn btn-update btn-sm">Update</a> ';
            echo '<a href="../delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Delete</a>';
            echo "</div>";
            echo "</section>";
        }
    }


    public function update($id, $obrazok)
    {
        $sql = "UPDATE portfolio SET obrazok = :obrazok WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $adjustedPath = 'img/' . basename($obrazok);
        $stmt->bindParam(':obrazok', $adjustedPath);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM portfolio WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM portfolio WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
