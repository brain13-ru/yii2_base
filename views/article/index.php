<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Статьи';
?>
<div class="site-index">

    <div class="body-content">

        <h1>Статьи</h1>
        <ul>
        <?php foreach ($articles as $article): ?>
            <div>
                <h3><?= $article->title ?></h3>
                <p>
                <?= $article->description ?>
                </p>
                <p><a href="/article/view/?id=<?= $article->id ?>" >Подробнее</a></p>
            </div>
        <?php endforeach; ?>
        </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
    </div>
</div>
