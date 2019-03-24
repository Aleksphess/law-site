<?php

/* @var $this \yii\web\View */
/* @var $documentPage \app\models\Page */
/* @var $documents \app\models\Document[] */

$this->title = $documentPage->getName();
?>
<main class="main">
    <section class="documents">
        <h1 class="documents__caption"><?= $documentPage->getName(); ?></h1>
        <div class="documents__container">
            <?php foreach ($documents as $document): ?>
                <div class="documents__item" style="background: url('./img/document_bg1.jpg') no-repeat center / cover">
                    <div class="documents__content">
                        <h2 class="documents__name"><?= $document->getName(); ?></h2>
                        <a class="documents__download" href="<?= $document->getFile(); ?>" download>Скачати</a>
                    </div>
                </div>
            <?php endforeach; ?>
            <a class="memory__link" href="#" rel="nofollow">Реквізити для сплати боргу</a>
        </div>
    </section>
</main>

