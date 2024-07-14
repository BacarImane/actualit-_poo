<?php
require_once 'config/Connexion.php';
require_once 'controllers/ArticleController.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'article';
$action = isset($_GET['action']) ? $_GET['action'] : 'showAll';

$articleController = new ArticleController($conn);

if ($controller == 'article') {
    if ($action == 'showAll') {
        $articleController->showAll();
    } elseif ($action == 'showByCategory' && isset($_GET['id'])) {
        $articleController->showByCategory((int)$_GET['id']);
    }
}
?>
