<?php

use app\migrations\ConstInterface;
use yii\db\Migration;

/**
 * Class m190324_130426_main_pages
 */
class m190324_130426_main_pages extends Migration
{

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'alias' => $this->string(),
            'text' => $this->text(),
            'created_at' => $this->integer(11),
        ]);

        $this->insert('pages', [
                'name' => 'Головна',
                'alias' => 'main',
                'text' => ConstInterface::MAIN_PAGE,
                'created_at' => time()
            ]
        );

        $this->insert('pages', [
                'name' => 'СІДОРЕНКО СЕРГІЙ ПЕТРОВИЧ',
                'alias' => 'about',
                'text' => ConstInterface::ABOUT_PAGE,
                'created_at' => time()
            ]
        );

        $this->insert('pages', [
                'name' => 'ЗАКОНОДАВСТВО',
                'alias' => 'legislation',
                'text' => ConstInterface::LEGISLATION_PAGE,
                'created_at' => time()
            ]
        );

        $this->insert('pages', [
                'name' => 'Документи',
                'alias' => 'documents',
                'text' => '',
                'created_at' => time()
            ]
        );

        $this->insert('pages', [
                'name' => 'Послуги',
                'alias' => 'services',
                'text' => ConstInterface::SERVICES_PAGE,
                'created_at' => time()
            ]
        );

        $this->insert('pages', [
                'name' => 'Порядок та терміни виконання',
                'alias' => 'procedure_and_performance_terms',
                'text' => ConstInterface::PROCEDURE_AND_PERFORMANCE_TERMS,
                'created_at' => time()
            ]
        );

        $this->insert('pages', [
                'name' => 'ПАМ’ЯТКА СТЯГУВАЧУ',
                'alias' => 'memory_for_user',
                'text' => ConstInterface::MEMORY_FOR_USER,
                'created_at' => time()
            ]
        );

        $this->insert('pages', [
                'name' => 'Контакти',
                'alias' => 'contacts',
                'text' => ConstInterface::CONTACTS_PAGE,
                'created_at' => time()
            ]
        );

        $this->createTable('benefits_of_cooperation', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'text' => $this->text(),
            'created_at' => $this->integer(11)
        ]);

        $this->insert('benefits_of_cooperation', [
            'name' => 'Доступність',
            'text' => 'більше не потрібно стояти в чергах на прийом до виконавця для того, щоб ознайомитись з виконавчим провадженням, домовитись про зустріч з приватним виконавцем можна в будь-який робочий день та зручний для вас час, зателефонувавши приватному виконавцю на його особистий телефон.',
            'created_at' => time()
        ]);

        $this->insert('benefits_of_cooperation', [
            'name' => 'Розумність строків виконання',
            'text' => 'приватний виконавець зацікавлений у швидкому та повному виконанні судового рішення, адже винагорода виконавця залежить від задоволення вимог стягувача.',
            'created_at' => time()
        ]);

        $this->insert('benefits_of_cooperation', [
            'name' => 'Дієвість та індивідуальність',
            'text' => 'комплекс заходів щодо виявлення та стягнення майна боржника розробляється індивідуально для кожного боржника (в рамках ЗУ «Про виконавче провадження»), що сприяє швидкому та повному виконанню судового рішення.',
            'created_at' => time()
        ]);

        $this->insert('benefits_of_cooperation', [
            'name' => 'Прозорість',
            'text' => 'виконавець є підзвітний стягувачу, а тому будь-які витрати авансового платежу на потреби виконавчого провадження будуть за необхідності надані стягувачу у відповідному звіті',
            'created_at' => time()
        ]);

        $this->insert('benefits_of_cooperation', [
            'name' => 'Професіоналізм',
            'text' => 'приватний виконавець з багатолітнім досвідом у сфері проблемної заборгованості має всі необхідні знання для примусового виконання рішення та задоволення вимог стягувача у короткі строки.',
            'created_at' => time()
        ]);

        $this->createTable('services', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'href' => $this->string()
        ]);

        $this->insert('services', [
            'name' => 'Виконання ухвал, постанов судів',
            'href' => '#'
        ]);

        $this->insert('services', [
            'name' => 'Виконання ухвал, постанов судів',
            'href' => '#'
        ]);

        $this->insert('services', [
            'name' => 'Виконання ухвал, постанов судів',
            'href' => '#'
        ]);

        $this->insert('services', [
            'name' => 'Виконання ухвал, постанов судів',
            'href' => '#'
        ]);

        $this->insert('services', [
            'name' => 'Виконання ухвал, постанов судів',
            'href' => '#'
        ]);

        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'text' => $this->text(),
            'annotate' => $this->string(255),
            'alias' => $this->string(),
            'created_at' => $this->integer(11)
        ]);

        $this->insert('news', [
            'name' => 'НАЗВАНИЕ НОВОСТИ',
            'text' => ConstInterface::ONE_NEWS,
            'annotate' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.',
            'alias' => 'news_one',
            'created_at' => time()
        ]);

        $this->insert('news', [
            'name' => 'НАЗВАНИЕ НОВОСТИ',
            'text' => ConstInterface::ONE_NEWS,
            'annotate' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.',
            'alias' => 'news_two',
            'created_at' => time()
        ]);

        $this->insert('news', [
            'name' => 'НАЗВАНИЕ НОВОСТИ',
            'text' => ConstInterface::ONE_NEWS,
            'annotate' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.',
            'alias' => 'news_three',
            'created_at' => time()
        ]);

        $this->insert('news', [
            'name' => 'НАЗВАНИЕ НОВОСТИ',
            'text' => ConstInterface::ONE_NEWS,
            'annotate' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.',
            'alias' => 'news_fourth',
            'created_at' => time()
        ]);

        $this->insert('news', [
            'name' => 'НАЗВАНИЕ НОВОСТИ',
            'text' => ConstInterface::ONE_NEWS,
            'annotate' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.',
            'alias' => 'news_fifth',
            'created_at' => time()
        ]);

        $this->insert('news', [
            'name' => 'НАЗВАНИЕ НОВОСТИ',
            'text' => ConstInterface::ONE_NEWS,
            'annotate' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.',
            'alias' => 'news_six',
            'created_at' => time()
        ]);

        $this->createTable('documents', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'file' => $this->string(),
            'created_at' => $this->integer(11)
        ]);

        $this->insert('documents', [
            'name' => 'Заява про відкриття виконавчого провадження',
            'file' => '#',
            'created_at' => time(),
        ]);

        $this->insert('documents', [
            'name' => 'Реквізити для сплати авансового внеску',
            'file' => '#',
            'created_at' => time(),
        ]);

        $this->insert('documents', [
            'name' => 'Реквізити для сплати боргу',
            'file' => '#',
            'created_at' => time(),
        ]);

        $this->createTable('callbacks', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'text' => $this->text()
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('pages');
        $this->dropTable('benefits_of_cooperation');
        $this->dropTable('services');
        $this->dropTable('news');
        $this->dropTable('documents');
        $this->dropTable('callbacks');

        return true;

    }

}
