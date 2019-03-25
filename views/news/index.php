<?php

/* @var $this \yii\web\View */
/* @var $news \app\models\News[] */
/* @var $pages \yii\data\Pagination */

$this->title = $this->params['news'];

use yii\widgets\LinkPager; ?>

<main class="main">
    <section class="news-page">
        <h1 class="news-page__caption"><?= $this->params['news'] ?></h1>
        <div class="news-page__container">
            <?php foreach ($news as $oneNews): ?>
                <div class="news-page__item">
                    <img class="news-page__img" src="<?= $oneNews->getBImg(); ?>" alt="<?= $oneNews->getName() ?>" title="<?= $oneNews->getName() ?>">
                    <a href="<?= \Yii::$app->urlManager->createAbsoluteUrl(['news/view', 'alias' => $oneNews->getAlias()]) ?>"
                       class="news-page__title"><?= $oneNews->getName() ?></a>
                    <p class="news-page__text"><?= $oneNews->getAnnotate(); ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="pagination">
            <?php $pager = LinkPager::widget([
                'pagination' => $pages,
                'activePageCssClass' => false,
                'firstPageLabel' => false,
                'lastPageLabel' => false,
                'nextPageLabel' => 'вперед',
                'prevPageLabel' => 'назад',
                'nextPageCssClass' => 'pagination__cycle',
                'prevPageCssClass' => 'pagination__cycle',
                'pageCssClass' => 'pagination__cycle',
                'maxButtonCount' => 3,
                'options' => ['class' => 'pagination__block'],

            ]);
            echo str_replace('span', 'a', $pager) ?>
        </div>
    </section>
</main>
