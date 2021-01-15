<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function beforeAction($action)
    {
    
        if (!parent::beforeAction($action)) {
            return false;
        }

        //echo \Yii::$app->user->can('managePost'); exit;

        if (\Yii::$app->user->can('managePost')) {

            return true; 
        }

        return false;
    }
}
