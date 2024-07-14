<header>
    <div class="pied">
        <h1>Actualité Polytechniennes</h1>
    </div>
</header>
<div>
    <div id="Menu">
        <div class="lien">
            <a href="index.php?controller=article&action=showAll">Accueil</a>
            <?php foreach ($categories as $category): ?>
                <a href="index.php?controller=article&action=showByCategory&id=<?php echo $category['id']; ?>&categorie=<?php echo $category['Categorie']; ?>">
                    <?php echo $category['Categorie']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div>
        <h2>Les dernières actualités</h2> 
    </div>
</div>
