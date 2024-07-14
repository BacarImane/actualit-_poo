<?php
class Article {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllArticles() {
        $req = "SELECT Titre_article, Article FROM Article";
        $resultat = $this->conn->query($req);
        return $resultat->fetch_all(MYSQLI_ASSOC);
    }

    public function getArticlesByCategory($id) {
        $req = $this->conn->prepare("SELECT Titre_Article, Article FROM Article WHERE id_categorie = ?");
        $req->bind_param("i", $id);
        $req->execute();
        $result = $req->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
