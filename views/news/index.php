<?php

/* @var $this \yii\web\View */
/* @var $news \app\models\News[] */
/* @var $pages \yii\data\Pagination */

$this->title = 'Новини';

?>

<main class="main">
    <section class="news-page">
        <h1 class="news-page__caption">Новости</h1>
        <div class="news-page__container">
            <?php foreach ($news as $oneNews): ?>
                <div class="news-page__item">
                    <img class="news-page__img" src="<?= $oneNews->getBImg();?>" alt="" title="">
                    <a href="<?= \Yii::$app->urlManager->createAbsoluteUrl(['news/view', 'alias' => $oneNews->getAlias()])?>" class="news-page__title"><?= $oneNews->getName()?></a>
                    <p class="news-page__text"><?= $oneNews->getAnnotate();?></p>
                </div>
            <?php endforeach;?>
        </div>
        <div class="pagination">
            <ul class="pagination__block">
                <li class="pagination__cycle"><a class="" href="">назад</a></li>
                <li class="pagination__cycle"><a class="active" href="">1</a></li>
                <li class="pagination__cycle"><a class="" href="">2</a></li>
                <li class="pagination__cycle"><a class="" href="">3</a></li>
                <li class="pagination__cycle"><a class="" href="">вперед</a></li>
            </ul>
        </div>
    </section>
</main>
