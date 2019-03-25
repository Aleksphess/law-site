<?php

namespace app\components;

use app\models\Vocabulary;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class BaseController extends Controller
{

    public function init()
    {
        parent::init();

        $this->view->params = array_merge($this->view->params, ArrayHelper::map(Vocabulary::find()->select(['alias', 'value'])->all(), 'alias', 'value'));

    }

}