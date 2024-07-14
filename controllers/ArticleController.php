<?php
require_once 'models/Article.php';
require_once 'models/Categorie.php';

class ArticleController {
    private $article;
    private $categorie;

    public function __construct($db) {
        $this->article = new Article($db);
        $this->categorie = new Categorie($db);
    }

    public function showAll() {
        $categories = $this->categorie->getAllCategories();
        $articles = $this->article->getAllArticles();
        include 'views/accueil.php';
    }

    public function showByCategory($id) {
        $categories = $this->categorie->getAllCategories();
        $articles = $this->article->getArticlesByCategory($id);
        include 'views/accueil.php';
    }
}

?>
