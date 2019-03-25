<?php

/* @var $this \yii\web\View */
/* @var $servicesPage \app\models\Page */

$this->title = $servicesPage->getName();
?>

<main class="main">
    <section class="services-page">
        <h1 class="services-page__caption"><?=$servicesPage->getName()?></h1>
        <?= $servicesPage->getText();?>
    </section>
</main>
