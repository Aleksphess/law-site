<?php

/**
 * @var $aboutPage \app\models\Page
 * @var $certificates \app\models\Certificate []
 */

$this->title = $aboutPage->getName();
?>
<main class="main">
    <section class="about-us">
        <h1 class="about-us__caption"><?= $aboutPage->getName() ?></h1>
        <div class="about-us__container">
            <img class="about-us__photo" src="./img/3987920.jpg" alt="">
            <?= $aboutPage->getText() ?>
            <div class="about-us__certificate">
                <h2 class="about-us__subcaption">Наші Сертифікати</h2>
                <?php foreach ($certificates as $certificate): ?>
                    <a href="<?= $certificate->getBImg(); ?>" data-lightbox="roadtrip"><img class="about-us__img"
                                                                                            src="<?= $certificate->getBImg(); ?>"
                                                                                            alt=""></a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>