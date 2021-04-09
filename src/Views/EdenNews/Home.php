<?php
ob_start();
?>
    <main>
        <div class="container">
            <div class="row first-line">
                <article class="col-sm-7">
                    <div class="bigpost post" style="background-image: url('/<?= $hottest->getImage() ?>');">
                        <div class="postcomment" style="background-color: #f72300;">
                            <p>dernière info</p>
                        </div>
                        <div class="flex-center">
                            <div class="content col-10">
                                <div class="bigpost-text">
                                    <h1><?= $hottest->getHeader() ?></h1>
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
                            </div>
                        </div>
                    </div>
                </article>

                <div class="col-sm-5 col-md-5">
                    <div class="row">
                        <div class="medium-right-articles">
                            <div class="col-sm-md-12">
                                <div class="mediumpost post"
                                     style="background-image: url('/<?= $mostViews[0]->getImage() ?>');">
                                    <div class="postcomment" style="background-color: #f72300;">
                                        <p>LA PLUS VUE</p>
                                    </div>
                                    <div class="flex-center">
                                        <div class="content col-10">
                                            <div class="bigpost-text">
                                                <h1>
                                                    <?php
                                                    if (strlen($mostViews[0]->getHeader()) > 40) echo substr($mostViews[0]->getHeader(), 0, 40) . '...';
                                                    else echo $mostViews[0]->getHeader()
                                                    ?>
                                                </h1>
                                                <p>
                                                    <?php
                                                    if (strlen($mostViews[0]->getResume()) > 80) echo substr($mostViews[0]->getResume(), 0, 80) . '...';
                                                    else echo $mostViews[0]->getResume()
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Second Medium Article -->
                            <div class="col-sm-md-12">
                                <div class="mediumpost post"
                                     style="background-image: url('/<?= $mostViews[1]->getImage() ?>');">
                                    <div class="postcomment" style="background-color: #f72300;">
                                        <p>LA PLUS VUE</p>
                                    </div>
                                    <div class="flex-center">
                                        <div class="content col-10">
                                            <div class="bigpost-text">
                                                <h1>
                                                    <?php
                                                    if (strlen($mostViews[1]->getHeader()) > 40) echo substr($mostViews[1]->getHeader(), 0, 40) . '...';
                                                    else echo $mostViews[1]->getHeader()
                                                    ?>
                                                </h1>
                                                <p>
                                                    <?php
                                                    if (strlen($mostViews[1]->getResume()) > 80) echo substr($mostViews[1]->getResume(), 0, 80) . '...';
                                                    else echo $mostViews[1]->getResume()
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            foreach ($articles as $key => $Mainarticle) {
                echo
                    '<div class="row">
                       <div class="col-8">
                            <div class="row artcle-compact-title">
                                <h1>' . $key . '</h1>
                                <div>
                                    <div class="color" style="background-color:#' . $Mainarticle[0]->getColor() . '"></div>
                                    <div class="grey"></div>
                                </div>
                            </div>
                        </div>
                </div>';
                foreach ($Mainarticle as $nb => $article) {
                    if ($nb <= 4) {
                        if ($nb === 0) {
                            echo
                                '<div class="row col-8 big-article">
                                    <div class="article-big-picture" style="background-image: url(/' . $article->getImage() . ');"></div>
                                    <div class="content post ">
                                        <div class="content">
                                            <div class="text">
                                                <h1>';
                                                    if (strlen($article->getHeader()) > 150) echo substr($article->getHeader(), 0, 150) . '...';
                                                    else echo $article->getHeader();
                                                echo '</h1>
                                                <p>';
                                                    if (strlen($mostViews[1]->getResume()) > 500) echo substr($mostViews[1]->getResume(), 0, 500) . '...';
                                                    else echo $mostViews[1]->getResume();
                                                echo '</p>
                                            </div>
                                            <ul class="bigpost-infos col-8">
                                                <li><i class="fas fa-comments"></i>
                                                    <span>' . $article->getComments() . '</span> Commentaires
                                                </li>
                                                <li><i class="fas fa-share-alt"></i>
                                                    <span>' . $article->getShares() . '</span> Shares
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>';
                        }
                    }
                }
            }
            ?>
        </div>
    </main>
<?php

$content = ob_get_clean();
$titre = "Home";
require VIEWS . 'layout.php';
