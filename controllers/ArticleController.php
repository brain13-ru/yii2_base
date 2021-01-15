<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Post;

class ArticleController extends Controller
{
    public function actionIndex()
    {
        $query = Post::find()->where(['type'=>1]);

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $articles = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'articles' => $articles,
            'pagination' => $pagination,
        ]);
    }

    public function actionView($id, $version = null)
    {
        $article = Post::findOne($id);
        return $this->render('view',['article' => $article]);
        //return $article->title;
    }
}