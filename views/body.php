<?php if (!empty($articles)): ?>
    <?php foreach ($articles as $article): ?>
        <h3><?php echo $article['Titre_article']; ?></h3>
        <p><?php echo $article['Article']; ?></p>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun article trouvé</p>
<?php endif; ?>
