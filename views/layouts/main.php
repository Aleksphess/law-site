<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
$urlManager = \Yii::$app->urlManager;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header class="header js-fixed">
    <nav class="header__container">
        <a href="<?= $urlManager->createAbsoluteUrl(['/'])?>"><img width="85" src="/img/logo.png" alt=""></a>
        <ul class="header__nav">
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['/'])?>" class="header__link">Головна</a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/about'])?>" class="header__link">Про нас</a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/legislation'])?>" class="header__link">Законодавство</a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/documents'])?>" class="header__link">Документи</a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/services'])?>" class="header__link">Послуги</a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/procedure-and-terms'])?>" class="header__link">Порядок та терміни виконання</a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/memory'])?>" class="header__link">Пам'ятка стягувачу</a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['news/index'])?>" class="header__link">Новини</a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/contacts'])?>" class="header__link">Контакти</a>
            </li>
        </ul>

        <div class="adaptive-menu">
            <a class="adaptive-menu__open-menu">
                <img src="/img/icons/menu.svg" alt="">
            </a>
            <div class="adaptive-menu__full-menu">
                <a class="adaptive-menu__close-menu" href="#" >X</a>
                <nav class="adaptive-menu__menu">
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['/'])?>">Головна</a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/about'])?>">Про нас</a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/legislation'])?>">Законодавство</a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/documents'])?>">Документи</a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/services'])?>">Послуги</a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/procedure-and-terms'])?>">Порядок та терміни виконання</a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/memory'])?>">Пам'ятка стягувачу</a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['news/index'])?>">Новини</a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/contacts'])?>">Контакти</a>
                </nav>
            </div>
        </div>
    </nav>
</header>

<?= $content ?>

<footer class="footer">
    <div class="footer__container">
        <ul class="footer__nav">
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/about'])?>" class="footer__link">Про нас</a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/legislation'])?>" class="footer__link">Законодавство</a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/documents'])?>" class="footer__link">Документи</a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/services'])?>" class="footer__link">Послуги</a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/procedure-and-terms'])?>" class="footer__link">Порядок та терміни виконання</a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/memory'])?>" class="footer__link">Пам'ятка стягувачу</a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['news/index'])?>" class="footer__link">Новини</a>
            </li>
        </ul>
        <div class="footer__name">
            <p class="footer__caption">Приватний виконавець</p>
            <p class="footer__region">Виконавчого округу Рівненської області</p>
            <p class="footer__color">Сідоренко Сергій Петрович</p>
            <p class="footer__location">Адреса офісу приватного виконавця:<br>
                09999, м. Pівно, вул. Володимирська 99, офіс 99</p>
        </div>
        <div class="footer__address">
            <p class="footer__caption">Телефон:</p>
            <a href="tel:+38(099)999-99-99" class="footer__phone">+38(099)999-99-99</a>
            <a href="tel:+38(099)999-99-99" class="footer__phone footer__phone--second">+38(099)999-99-99</a>
            <p class="footer__caption">E-mail:</p>
            <a class="footer__mail" href="mailto:mail@ukr.net">mail@ukr.net</a>
            <p class="footer__">Графік роботи: пн-пт 9.00-18.00</p>
        </div>
        <div class="footer__connection">
            <div class="footer__social">
                <a class="footer__slink" href=""><object data="/img/facebook.svg"></object></a>
                <a class="footer__slink" href=""><object data="/img/instagram.svg"></object></a>
                <a class="footer__slink" href=""><object data="/img/google-plus.svg"></object></a>
            </div>
            <a class="info__callback js-callback" href="#">ЗВОРОТНІЙ ЗВ’ЯЗОК</a>
        </div>
    </div>
    <div class="footer__bottom">
        <p class="footer__copyright">Copyright © 2019. All Rights Reserved</p>
    </div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
