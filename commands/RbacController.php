<?php
namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // добавляем разрешение "managePost"
        $managePost = $auth->createPermission('managePost');
        $managePost->description = 'Manage a post';
        $auth->add($managePost);

        // добавляем роль "customer" 
        $customer = $auth->createRole('customer');
        $auth->add($customer);

        // добавляем роль "admin" и даём роли разрешение "managePost"
        // а также все разрешения роли "customer"
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $managePost);
        $auth->addChild($admin, $customer);

        // Назначение роли admin пользователю с id 1 
        $auth->assign($admin, 1);
    }
}
