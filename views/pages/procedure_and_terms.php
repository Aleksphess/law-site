<?php

/* @var $this \yii\web\View */
/* @var $procedurePage \app\models\Page */

$this->title = $procedurePage->getName();
?>
<main class="main">
    <section class="order">
        <h1 class="order__caption"><?= $procedurePage->getName();?></h1>
        <?= $procedurePage->getText();?>
    </section>
</main>
