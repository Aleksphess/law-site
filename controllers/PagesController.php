<?php

namespace app\controllers;

use app\models\Certificate;
use app\models\Document;
use app\models\Page;
use yii\web\Controller;

class PagesController extends Controller
{
    private const ABOUT_ALIAS = 'about';
    private const LEGISLATION_ALIAS = 'legislation';
    private const DOCUMENTS_ALIAS = 'documents';
    private const SERVICES_ALIAS = 'services';
    private const PROCEDURE_ALIAS = 'procedure_and_performance_terms';
    private const MEMORY_ALIAS = 'memory_for_user';
    private const CONTACTS_ALIAS = 'contacts';

    /**
     * @return string
     */
    public function actionAbout(): string
    {
        $aboutPage = Page::findByAlias(self::ABOUT_ALIAS);
        $certificates = Certificate::find()->all();
        return $this->render('about', [
            'aboutPage' => $aboutPage,
            'certificates' => $certificates
        ]);
    }

    /**
     * @return string
     */
    public function actionLegislation(): string
    {
        return $this->render('legislation', [
            'legislationPage' =>  Page::findByAlias(self::LEGISLATION_ALIAS),
        ]);
    }

    /**
     * @return string
     */
    public function actionDocuments(): string
    {
        return $this->render('documents', [
            'documentPage' =>  Page::findByAlias(self::DOCUMENTS_ALIAS),
            'documents' =>  Document::find()->all(),
        ]);
    }

    /**
     * @return string
     */
    public function actionServices(): string
    {
        return $this->render('services', [
            'servicesPage' =>  Page::findByAlias(self::SERVICES_ALIAS),
        ]);
    }

    /**
     * @return string
     */
    public function actionProcedureAndTerms(): string
    {
        return $this->render('procedure_and_terms', [
            'procedurePage' =>  Page::findByAlias(self::PROCEDURE_ALIAS),
        ]);
    }

    /**
     * @return string
     */
    public function actionMemory(): string
    {
        return $this->render('memory', [
            'memoryPage' =>  Page::findByAlias(self::MEMORY_ALIAS),
        ]);
    }

    /**
     * @return string
     */
    public function actionContacts(): string
    {
        return $this->render('contacts', [
            'contactsPage' =>  Page::findByAlias(self::CONTACTS_ALIAS),
        ]);
    }
}