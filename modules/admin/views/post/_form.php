<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

   

    <?php 

    $arr=[
        1=>'Статья',
        2=>'Новость',
        3=>'Страница'
    ];
    echo $form->field($model, 'type')->dropDownList($arr); ?>

    <?= $form->field($model, 'content')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]); ?>

    <?php /* echo $form->field($model, 'created_at')->textInput()*/ ?>

    <?php /* echo $form->field($model, 'updated_at')->textInput()*/ ?>



    <?= $form->field($model, 'active')->checkbox(['label'=>'Показывать']) ?>


    <?php if ($model->image): ?>
    <img src="/uploads/<?= $model->image; ?>" alt="" style="width: 400px;">
    <p><?= $model->image; ?></p>
    <?php endif; ?>
    <?= $form->field($model, 'image')->fileInput(['name' => $model->image->name]); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
