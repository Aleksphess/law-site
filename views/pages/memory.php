<?php

/* @var $this \yii\web\View */
/* @var $memoryPage \app\models\Page */

$this->title = $memoryPage->getName();
?>

<main class="main">
    <section class="memory">
        <h1 class="memory__caption"><?= $memoryPage->getName();?></h1>
        <?= $memoryPage->getText();?>
    </section>
</main>

