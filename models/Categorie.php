<?php
class Categorie {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllCategories() {
        $req = "SELECT Categorie, id FROM Categorie";
        $resultat = $this->conn->query($req);
        return $resultat->fetch_all(MYSQLI_ASSOC);
    }
}
?>
