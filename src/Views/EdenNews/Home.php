<?php
ob_start();

/*
 *                   INFORMATION
 *
 * ->getId() // Permet d'obtenir l'identifiant d'un article
 * ->getHeaders() // Permet d'obtenir le titre d'un article
 * ->getContent() // Permet d'obtenir le contenu d'un article
 * ->getTimestamp() // Permet d'obtenir la date précise de création d'un article
 * ->getResume() // Permet d'obtenir le résumé d'un article
 * ->getFirstname() // Permet d'obtenir le prénom de l'auteur d'un article
 * ->getLastname() // Permet d'obtenir le nom de l'auteur d'un article
 * ->getName() // Permet d'obtenir le prénom et nom de l'auteur
 * ->getDate() // Permet d'obtenir la date de création d'un article
 * ->getImage() // Permet d'obtenir l'image lié a l'article
 * ->getThumb() // Permet d'obtenir l'image lié à un article, mais en plus petite
 * ->getViews() // Permet d'obtenir le nombre de vues d'un article
 * ->getShares() // Permet d'obtenir le nombre de partages d'un article
 * ->getComments() // Permet d'obtenir le nombre de commentaires d'un article
 * ->getCategory() // Permet d'obtenir le nom de la catégorie d'un article
 * ->getColor() // Permet d'obtenir la couleur d'un catégorie
 */

?>

    <main>
        <div class="container">
            <div class="row first-line">
                <article class="col-sm-7 col-md-7">
                    <div class="bigpost post" style="background-image: url('/<?= $hottest->getImage() ?>');">
                        <div class="postcomment" style="background-color: #f72300;">
                            <p>dernière info</p>
                        </div>
                        <div class="flex-center">
                                <div class="content col-10">
                                    <a href="/articles?id=<?= $hottest->getId() ?>" >
                                        <div class="bigpost-text">
                                            <h1><?= $hottest->getHeader() ?></h1>
                                            <p><strong><?= $hottest->getDate() ?></strong> by <strong><?= $hottest->getName() ?></strong></p>
                                            <p><?= $hottest->getResume() ?></p>
                                        </div>
                                        <ul class="bigpost-infos col-6">
                                            <li><i class="fas fa-comments"></i> <span><?= $hottest->getComments() ?></span>
                                                Commentaires
                                            </li>
                                            <li><i class="fas fa-share-alt"></i> <span><?= $hottest->getShares() ?></span>
                                                Shares
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                        </div>
                    </div>
                </article>

                <div class="col-sm-5 col-md-5">
                    <div class="row">
                        <div class="medium-right-articles">
                            <div class="col-sm-12 col-md-12">
                                <div class="mediumpost post"
                                     style="background-image: url('/<?= $mostViews[0]->getImage() ?>');">
                                    <div class="postcomment" style="background-color: #f72300;">
                                        <p>LA PLUS VUE</p>
                                    </div>
                                    <div class="flex-center">
                                        <div class="content col-10">
                                            <a href="/articles?id=<?= $mostViews[0]->getId() ?>" >
                                                <div class="bigpost-text">
                                                    <h1>
                                                        <?php
                                                        if (strlen($mostViews[0]->getHeader()) > 40) echo substr($mostViews[0]->getHeader(), 0, 40) . '...';
                                                        else echo $mostViews[0]->getHeader();
                                                        // Si le contenu est supérieur à 40 caractère alors il enlève le surplus
                                                        ?>
                                                    </h1>
                                                    <p><strong><?= $mostViews[0]->getDate() ?></strong> by <strong><?= $mostViews[0]->getName() ?></strong></p>
                                                    <p>
                                                        <?php
                                                        if (strlen($mostViews[0]->getResume()) > 80) echo substr($mostViews[0]->getResume(), 0, 80) . '...';
                                                        else echo $mostViews[0]->getResume();
                                                        // Si le contenu est supérieur à 80 caractère alors il enlève le surplus
                                                        ?>
                                                    </p>
                                                </div>
                                                <ul class="bigpost-infos col-8">
                                                    <li><i class="fas fa-comments"></i>
                                                        <span><?= $mostViews[0]->getComments() ?></span> Commentaires
                                                    </li>
                                                    <li><i class="fas fa-share-alt"></i>
                                                        <span><?= $mostViews[0]->getShares() ?></span> Shares
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Second Medium Article -->
                            <div class="col-sm-12 col-md-12">
                                <div class="mediumpost post"
                                     style="background-image: url('/<?= $mostViews[1]->getImage() ?>');">
                                    <div class="postcomment" style="background-color: #f72300;">
                                        <p>LA PLUS VUE</p>
                                    </div>
                                    <div class="flex-center">
                                        <div class="content col-10">
                                            <a href="/articles?id=<?= $mostViews[1]->getId() ?>" >
                                                <div class="bigpost-text">
                                                    <h1>
                                                        <?php
                                                        if (strlen($mostViews[1]->getHeader()) > 40) echo substr($mostViews[1]->getHeader(), 0, 40) . '...';
                                                        else echo $mostViews[1]->getHeader()
                                                        // Si le contenu est supérieur à 40 caractère alors il enlève le surplus
                                                        ?>
                                                    </h1>
                                                    <p><strong><?= $mostViews[1]->getDate() ?></strong> by <strong><?= $mostViews[1]->getName() ?></strong></p>
                                                    <p>
                                                        <?php
                                                        if (strlen($mostViews[1]->getResume()) > 80) echo substr($mostViews[1]->getResume(), 0, 80) . '...';
                                                        else echo $mostViews[1]->getResume()
                                                        // Si le contenu est supérieur à 80 caractère alors il enlève le surplus
                                                        ?>
                                                    </p>
                                                </div>
                                                <ul class="bigpost-infos col-8">
                                                    <li><i class="fas fa-comments"></i>
                                                        <span><?= $mostViews[1]->getComments() ?></span> Commentaires
                                                    </li>
                                                    <li><i class="fas fa-share-alt"></i>
                                                        <span><?= $mostViews[1]->getShares() ?></span> Shares
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <?php foreach ($articles as $key => $Mainarticle) { ?>
                        <div class="row list-article-main">
                            <div class="list-article-category">
                                <h1><?= $key ?></h1>
                                <div>
                                    <div class="color" style="background-color:#<?= $Mainarticle[0]->getColor() ?>"></div>
                                    <div class="grey"></div>
                                </div>
                            </div>
                            <?php foreach ($Mainarticle as $nb => $article) {
                                if (($nb <= 2)) { ?>
                                    <a href="/articles?id=<?= $article->getId() ?>">
                                        <div class="list-article-part">
                                            <div class="list-article-picture" style="background-image: url(/<?= $article->getImage() ?>);"></div>
                                            <div class="list-article-content post">
                                                <div class="content">
                                                    <div class="text">
                                                        <h3>
                                                            <?php if (strlen($article->getHeader()) > 75) echo substr($article->getHeader(), 0, 75) . '...';
                                                            else echo $article->getHeader();
                                                            // Si le contenu est supérieur à 75 caractère alors il enlève le surplus
                                                            ?>
                                                        </h3>
                                                        <p><strong><?= $article->getDate() ?></strong> by <strong><?= $article->getName() ?></strong></p>
                                                        <p>
                                                            <?php if (strlen($article->getResume()) > 500) echo substr($article->getResume(), 0, 500) . '...';
                                                            else echo $article->getResume();
                                                            // Si le contenu est supérieur à 500 caractère alors il enlève le surplus
                                                            ?>
                                                        </p>
                                                    </div>
                                                    <ul class="bigpost-infos col-8">
                                                        <li><i class="fas fa-comments"></i>
                                                            <span><?= $article->getComments() ?></span> Commentaires
                                                        </li>
                                                        <li><i class="fas fa-share-alt"></i>
                                                            <span><?= $article->getShares() ?></span> Shares
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
<?php

$content = ob_get_clean();
$titre = "Home";
require VIEWS . 'layout.php';
