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
            <div class="services__container">
                <div class="services__item">
                    <object class="services__obj" data="./img/icons/placeholder.svg"></object>
                    <p class="services__title">10-а, вулиця Княгині Ольги, Ровно, Ровенская область, 33014</p>
                </div>
                <div class="services__item">
                    <object class="services__obj" data="./img/icons/phone-call.svg"></object>
                    <a class="services__title" href="tel:0999999999">+38 (099) - 999 - 99 - 99</a>
                </div>
                <div class="services__item">
                    <object class="services__obj" data="./img/icons/envelope.svg"></object>
                    <a class="services__title" href="mailto:mail@ukr.net">mail@ukr.net</a>
                </div>
                <div class="services__item">
                    <object class="services__obj" data="./img/icons/small-calendar.svg"></object>
                    <a class="services__title" href="#">Графік роботи: пн-пт 9.00-18.00 Прийом громадян: пн, пт 10.00 – 13.00</a>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.544985435558!2d26.259154945141375!3d50.61174022134687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472f156665a1a81d%3A0x8f108f5d2a66088e!2z0J7RhNGW0YEg0L_RgNC40LLQsNGC0L3QvtCz0L4g0LLQuNC60L7QvdCw0LLRhtGP!5e0!3m2!1sru!2sua!4v1551183805138" width="100%" height="450" allowfullscreen></iframe>
    </section>

</main>
