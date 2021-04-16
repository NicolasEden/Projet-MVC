<?php
ob_start();
?>
        <div class="container">
            <article>
                <h1> <?= $article->getHeader() ?> </h1>
                <p> <?= $article->getTimestamp() ?> </p>
                <p> <?= $article->getShares() ?> </p>
                <div><?= $article->getContent() ?></div>
            </article>
        </div>
<?php

$content = ob_get_clean();
$titre = "Article ".$article->getId();
require VIEWS . 'layout.php';
