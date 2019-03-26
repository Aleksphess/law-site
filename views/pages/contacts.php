<?php

/* @var $this \yii\web\View */
/* @var $contactsPage \app\models\Page */

$this->title = $contactsPage->getName();
?>

<main class="main">
    <section class="contacts">
        <h1 class="contacts__caption"><?= $contactsPage->getName();?></h1>
        <div class="contacts__container">
            <?= $contactsPage->getText();?>
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
            <div class="services__container">
                <div class="services__item">
                    <object class="services__obj" data="/img/icons/placeholder.svg"></object>
                    <p class="services__title"><?=$this->params['address']?></p>
                </div>
                <div class="services__item">
                    <object class="services__obj" data="/img/icons/phone-call.svg"></object>
                    <a class="services__title" href="tel:0999999999"><?=$this->params['phone_1']?></a>
                </div>
                <div class="services__item">
                    <object class="services__obj" data="/img/icons/envelope.svg"></object>
                    <a class="services__title" href="mailto:mail@ukr.net"><?=$this->params['me_email']?></a>
                </div>
                <div class="services__item">
                    <object class="services__obj" data="/img/icons/small-calendar.svg"></object>
                    <a class="services__title" href="#"><?=$this->params['schedule']?></a>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.544985435558!2d26.259154945141375!3d50.61174022134687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472f156665a1a81d%3A0x8f108f5d2a66088e!2z0J7RhNGW0YEg0L_RgNC40LLQsNGC0L3QvtCz0L4g0LLQuNC60L7QvdCw0LLRhtGP!5e0!3m2!1sru!2sua!4v1551183805138" width="100%" height="450" allowfullscreen></iframe>
    </section>

</main>
