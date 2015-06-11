<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\HomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
 
        $this->title = 'Homes';
        $this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Home', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'home_id',
            'name',
            'address:ntext',
            'img:ntext',
            'price',
             //'detail:ntext',
             'size',
             'type',
             'bed',
             'bath',
             'status',
             'broker',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php
    ?>
</div>
