<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php Pjax::begin(); ?>

        <?php echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'item row mt-3'],
        'itemOptions' => ['class' => 'item col-md-4 mt-3'],
        'layout' => '{items}',
        'itemView' => function ($model, $key, $index, $widget) {
            return $this->render('_list_item', ['model' =>$model]);
        },
    ]) ?>

    <?php Pjax::end(); ?>

</div>
