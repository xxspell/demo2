<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-search ">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1,
            'class' => 'form-inline'
        ],
    ]); ?>


    <div class="form-inline p-2">
        <label class="control-label mr-1 ml-3" for="productsearch-name"><a id="product-sort" href="/product/index?sort=name" data-sort="name">Название:</a></label>
        <?= $form->field($model, 'name')->label(false) ?>
        <label class="control-label mr-1 ml-3" for="productsearch-name"><a id="product-sort" href="/product/index?sort=description" data-sort="name">Описание:</a></label>
        <?= $form->field($model, 'description')->label(false) ?>

        <?php // echo $form->field($model, 'image') ?>

        <?php // echo $form->field($model, 'stats') ?>

        <div class="form-group">
            <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary ml-3']) ?>
            <?= Html::resetButton('Сбросить', ['class' => 'btn btn-outline-secondary ml-2']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
