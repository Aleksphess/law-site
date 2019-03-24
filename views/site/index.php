<?php

/* @var $this \yii\web\View */
/* @var $mainPage \app\models\Page */
/* @var $benefits \app\models\BenefitOfCooperation[] */
/* @var $services \app\models\Service[] */
/* @var $news \app\models\News[] */

$this->title = 'Головна';
?>

<main class="main">
    <section class="info">
        <div class="info__content">
            <div class="info__block">
                <h1 class="info__text">Приватний виконавець</h1>
                <h2 class="info__text">Виконавчого округу Рівненської області</h2>
                <span class="info__line"></span>
                <h2 class="info__name">Сідоренко Сергій Петрович</h2>
                <a href="tel:+380999999999" class="info__phone">+38 (099) 999-99-99</a>
                <a href="#" class="info__callback js-callback">ЗВОРОТНІЙ ЗВ’ЯЗОК</a>
            </div>
        </div>
        <div class="info__popup">
            <img class="info__close" src="./img/close-button.svg" alt="">
            <form action="#" class="form">
                <div class="form__field">
                    <input type="text" name="name" placeholder="Ім'я" required />
                </div>
                <div class="form__field">
                    <input type="email" name="email" placeholder="E-Mail" />
                    <span class="form__error">Це поле має містити E-Mail у форматі example@site.com</span>
                </div>
                <div class="form__field">
                    <input type="tel" name="phone" placeholder="Телефон" pattern="[\+3]\d{2}\s[\(]\d{3}[\)]\s\d{3}[\-]\d{2}[\-]\d{2}" minlength="19" maxlength="19" />
                    <span class="form__error">Це поле має містити телефон у форматі +38 (123) 456-78-90</span>
                </div>
                <div class="form__field">
                    <textarea name="message" cols="30" rows="6" required placeholder="Повідомлення"></textarea>
                </div>
                <input class="form__send" value="Відправити" type="submit">
            </form>
        </div>
        <div class="info__overlay"></div>
    </section>

    <section class="about">
        <div class="about__container">
            <img class="about__photo" src="/img/virisheno-iak-vesti-reestr-privatnih-vikonavtsiv.jpg" alt="">
            <?= $mainPage->getText();?>
        </div>
    </section>

    <section class="advantages">
        <h2 class="advantages__caption">ПЕРЕВАГИ СПІВПРАЦІ</h2>
        <div class="advantages__container">
            <?php foreach ($benefits as $benefit): ?>
                <div class="advantages__item">
                    <h2 class="advantages__title"><?= $benefit->getName(); ?></h2>
                    <p class="advantages__text"><?= $benefit->getText(); ?></p>
                </div>
            <?php endforeach;?>
        </div>
    </section>

    <section class="services">
        <h2 class="services__caption">Послуги</h2>
        <div class="services__container">
            <?php foreach ($services as $service): ?>
                <div class="services__item">
                    <object class="services__obj" data="/img/icons/ser-1.<?= $service->getId();?>.svg"></object>
                    <a class="services__title" href="<?= $service->getHref()?>"><?= $service->getName()?></a>
                </div>
            <?php endforeach;?>
        </div>

    </section>

    <section class="news">
        <h2 class="news__caption">Новости</h2>
        <div class="news__container js-slider">
            <?php foreach ($news as $oneNews): ?>
                <div class="news__item">
                    <img class="news__img" src="<?= $oneNews->getBImg();?>" alt="" title="">
                    <a href="<?= \Yii::$app->urlManager->createAbsoluteUrl(['news/view', 'alias' => $oneNews->getAlias()])?>" class="news__title"><?= $oneNews->getName()?></a>
                    <p class="news__text"><?= $oneNews->getAnnotate();?></p>
                </div>
            <?php endforeach;?>
        </div>
    </section>
</main>
