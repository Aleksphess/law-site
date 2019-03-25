<?php

/* @var $this \yii\web\View */
/* @var $legislationPage \app\models\Page
 */

$this->title = $legislationPage->getName();
?>

<main class="main">
    <section class="legislation">
        <h1 class="legislation__caption"><?= $legislationPage->getName(); ?></h1>
        <?= $legislationPage->getText(); ?>
    </section>
</main>
