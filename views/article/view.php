<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = $article->title;
?>
<div class="site-index">

    <div class="body-content">

        <h1><?= $article->title ?></h1>
        
        <p>
            <img src="<?= $article->image ?>" style="width:400px;">
        </p>
        <p>
            <?= html_entity_decode($article->content) ?>
        </p>

    </div>
</div>
