<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="card" ">
    <img src="<?=Html::encode($model->image)?>" class="card-img-top" alt="<?=Html::encode($model->image)?>">
    <div class="card-body">
        <h5 class="card-title"><?=Html::encode($model->name)?></h5>
        <p class="card-text"><?=Html::encode($model->description)?></p>
    </div>
    <div class="card-footer d-flex justify-content-between align-items-center">
        <a href="<?=Url::toRoute(['product/?ProductSearch%5Bid_parent%5D', 'id' => $model->id])?>" class="btn btn-dark">Купить</a>
        <a class="card-link"><?=Html::encode($model->price)?> Руб.</a>
    </div>
</div>
