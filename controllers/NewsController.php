<?php

namespace app\controllers;

use app\models\News;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class NewsController extends Controller
{
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
    public function actionIndex(): string
    {

        $query = News::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 1]);
        $news = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index',[
            'news' => $news,
            'pages' => $pages
        ]);
    }

    /**
     * @param string $alias
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView(string $alias): string
    {
        $oneNews = News::find()->where(['alias' => $alias])->limit(1)->one();
        if (is_null($oneNews)) {
            throw new NotFoundHttpException();
        }

        return $this->render('view', [
            'oneNews' => $oneNews
        ]);
    }
}