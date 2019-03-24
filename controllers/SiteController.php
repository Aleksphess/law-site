<?php

namespace app\controllers;

use app\components\BaseController;
use app\models\BenefitOfCooperation;
use app\models\News;
use app\models\Page;
use app\models\Service;

class SiteController extends BaseController
{
    private const MAIN_ALIAS = 'main';

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'mainPage' => Page::findByAlias(self::MAIN_ALIAS),
            'benefits' => BenefitOfCooperation::find()->orderBy(['created_at' => SORT_DESC])->limit(5)->all(),
            'services' => Service::find()->limit(5)->orderBy(['created_at' => SORT_DESC])->all(),
            'news' => News::find()->limit(5)->orderBy(['created_at' => SORT_DESC])->all()
        ]);
    }

}
