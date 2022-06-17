<?php

use app\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
$items = Category::find()
    ->select(['name'])
    ->indexBy('id')
    ->column();
?>


<div class="product-search ">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>
    <div class="form-inline p-2">
        <label class="control-label mr-1" for="productsearch-name"><a id="product-sort" href="/product/index?sort=category_id" data-sort="name">Категория:</a></label>
        <?= $form->field($model, 'category_id')->dropDownList($items)->label(false) ?>
        <label class="control-label mr-1 ml-3" for="productsearch-name"><a id="product-sort" href="/product/index?sort=name" data-sort="name">Название:</a></label>
        <?= $form->field($model, 'name')->label(false) ?>
        <label class="control-label mr-1 ml-3" for="productsearch-name"><a id="product-sort" href="/product/index?sort=price" data-sort="name">Цена:</a></label>
        <?= $form->field($model, 'price')->label(false) ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'stats') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary ml-3']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-outline-secondary ml-2']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
