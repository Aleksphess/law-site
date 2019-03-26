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
                <a href="<?= $urlManager->createAbsoluteUrl(['/'])?>" class="header__link"><?= $this->params['main'];?></a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/about'])?>" class="header__link"><?= $this->params['about'];?></a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/legislation'])?>" class="header__link"><?= $this->params['law'];?></a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/documents'])?>" class="header__link"><?= $this->params['documents'];?></a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/services'])?>" class="header__link"><?= $this->params['services'];?></a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/procedure-and-terms'])?>" class="header__link"><?= $this->params['procedures_and_terms'];?></a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/memory'])?>" class="header__link"><?= $this->params['memory_for_user'];?></a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['news/index'])?>" class="header__link"><?= $this->params['news'];?></a>
            </li>
            <li class="header__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/contacts'])?>" class="header__link"><?= $this->params['contacts'];?></a>
            </li>
        </ul>

        <div class="adaptive-menu">
            <a class="adaptive-menu__open-menu">
                <img src="/img/icons/menu.svg" alt="">
            </a>
            <div class="adaptive-menu__full-menu">
                <a class="adaptive-menu__close-menu" href="#" >X</a>
                <nav class="adaptive-menu__menu">
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['/'])?>"><?= $this->params['main'];?></a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/about'])?>"><?= $this->params['about'];?></a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/legislation'])?>"><?= $this->params['law'];?></a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/documents'])?>"><?= $this->params['documents'];?></a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/services'])?>"><?= $this->params['services'];?></a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/procedure-and-terms'])?>"><?= $this->params['procedures_and_terms'];?></a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/memory'])?>"><?= $this->params['memory_for_user'];?></a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['news/index'])?>"><?= $this->params['news'];?></a>
                    <a class="adaptive-menu__link" href="<?= $urlManager->createAbsoluteUrl(['pages/contacts'])?>"><?= $this->params['contacts'];?></a>
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
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/about'])?>" class="footer__link"><?= $this->params['about'];?></a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/legislation'])?>" class="footer__link"><?= $this->params['law'];?></a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/documents'])?>" class="footer__link"><?= $this->params['documents'];?></a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/services'])?>" class="footer__link"><?= $this->params['services'];?></a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/procedure-and-terms'])?>" class="footer__link"><?= $this->params['procedures_and_terms'];?></a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['pages/memory'])?>" class="footer__link"><?= $this->params['memory_for_user'];?></a>
            </li>
            <li class="footer__list">
                <a href="<?= $urlManager->createAbsoluteUrl(['news/index'])?>" class="footer__link"><?= $this->params['news'];?></a>
            </li>
        </ul>
        <div class="footer__name">
            <p class="footer__caption"><?= $this->params['private_user'];?></p>
            <p class="footer__region"><?= $this->params['okrug'];?></p>
            <p class="footer__color"><?= $this->params['me_name'];?></p>
            <p class="footer__location"><?= $this->params['address'];?></p>
        </div>
        <div class="footer__address">
            <p class="footer__caption"><?= $this->params['phone'];?>:</p>
            <a href="tel:+38(099)999-99-99" class="footer__phone"><?= $this->params['phone_1'];?></a>
            <a href="tel:+38(099)999-99-99" class="footer__phone footer__phone--second"><?= $this->params['phone_2'];?></a>
            <p class="footer__caption"><?= $this->params['email'];?>:</p>
            <a class="footer__mail" href="mailto:mail@ukr.net"><?= $this->params['me_email'];?></a>
            <p class="footer__"><?= $this->params['schedule'];?></p>
        </div>
        <div class="footer__connection">
            <div class="footer__social">
                <a class="footer__slink" href="<?= $this->params['facebook_link'];?>"><object data="/img/facebook.svg"></object></a>
                <a class="footer__slink" href="<?= $this->params['instagram_link'];?>"><object data="/img/instagram.svg"></object></a>
                <a class="footer__slink" href="<?= $this->params['google_link'];?>"><object data="/img/google-plus.svg"></object></a>
            </div>
            <a class="info__callback js-callback" href="#"><?= $this->params['callback'];?></a>
        </div>
    </div>
    <div class="footer__bottom">
        <p class="footer__copyright">Copyright © 2019. All Rights Reserved</p>
    </div>
    <div class="info__popup">
        <img class="info__close" src="/img/close-button.svg" alt="">
        <form id="callback" class="form">
            <div class="form__field">
                <input class="clear-form" type="text" name="name" placeholder="<?= $this->params['name'];?>" required/>
            </div>
            <div class="form__field">
                <input class="clear-form" type="email" name="email" placeholder="E-Mail"/>
                <span class="form__error"><?= $this->params['email_placeholder'];?></span>
            </div>
            <div class="form__field">
                <input class="clear-form" type="tel" name="phone" placeholder="Телефон"/>
                <span class="form__error"><?= $this->params['phone_placeholder'];?></span>
            </div>
            <div class="form__field">
                <textarea class="clear-form" cols="30" rows="6" name="text" id="text" required placeholder="Повідомлення"></textarea>
            </div>
            <p class="form__notification">Заявка отправлена</p>
            <input class="form__send" value="Відправити" type="submit">
        </form>
    </div>
    <div class="info__overlay"></div>
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
