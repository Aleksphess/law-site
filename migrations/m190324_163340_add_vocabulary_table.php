<?php

use yii\db\Migration;

/**
 * Class m190324_163340_add_vocabulary_table
 */
class m190324_163340_add_vocabulary_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('vocabulary', [
            'id' => $this->primaryKey(),
            'alias' => $this->string(),
            'value' => $this->string(),
            'created_at' => $this->integer(11)
        ]);

        $this->insert('vocabulary', [
            'alias' => 'main',
            'value' => 'Головна',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'About',
            'value' => 'Про нас',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'news',
            'value' => 'Новости',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'law',
            'value' => 'Законодавство',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'documents',
            'value' => 'Документи',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'services',
            'value' => 'Послуги',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'procedures_and_terms',
            'value' => 'Порядок та терміни виконання',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'memory_for_user',
            'value' => 'Пам`ятка стягувачу',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'contacts',
            'value' => 'Контакти',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'private_user',
            'value' => 'Приватний виконавець',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'okrug',
            'value' => 'Виконавчого округу Рівненської області',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'me_name',
            'value' => 'Сідоренко Сергій Петрович',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'address',
            'value' => 'Адреса офісу приватного виконавця:<br> 09999, м. Pівно, вул. Володимирська 99, офіс 99',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'phone',
            'value' => 'Телефон',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'phone_1',
            'value' => '+38(099)999-99-99',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'phone_2',
            'value' => '+38(099)999-99-99',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'email',
            'value' => 'E-mail',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'me_email',
            'value' => 'mail@ukr.net',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'schedule',
            'value' => 'Графік роботи: пн-пт 9.00-18.00',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'facebook_link',
            'value' => '#',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'instagram_link',
            'value' => '#',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'google_link',
            'value' => '#',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'callback',
            'value' => 'ЗВОРОТНІЙ ЗВ’ЯЗОКl',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'our_certificates',
            'value' => 'Наші Сертифікати',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'name',
            'value' => 'Ім`я',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'email_placeholder',
            'value' => 'Це поле має містити E-Mail у форматі example@site.com',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'phone_placeholder',
            'value' => 'Це поле має містити телефон у форматі +38 (123) 456-78-90',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'download',
            'value' => 'Скачати',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'memory__link',
            'value' => '#',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'essential_information',
            'value' => 'Реквізити для сплати боргу',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'advantages_cooperation',
            'value' => 'ПЕРЕВАГИ СПІВПРАЦІ',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'email_placeholder',
            'value' => 'Це поле має містити E-Mail у форматі example@site.com',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'phone_placeholder',
            'value' => 'Це поле має містити телефон у форматі +38 (123) 456-78-90',
            'created_at' => time()
        ]);

        $this->insert('vocabulary', [
            'alias' => 'download',
            'value' => 'Скачати',
            'created_at' => time()
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('vocabulary');

        return true;
    }

}
