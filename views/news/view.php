<?php

/* @var $this \yii\web\View */
/* @var $oneNews \app\models\News */

$this->title = $oneNews->getName();
?>

<main class="main">
    <section class="news-item">
        <h2 class="news-item__caption"><?= $oneNews->getName();?></h2>
        <div class="news-item__container">
            <img src="<?= $oneNews->getBImg();?>" alt="<?= $oneNews->getName();?>">
            <?= $oneNews->getText();?>
        </div>
    </section>
</main>
