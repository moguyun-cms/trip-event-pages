<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '活动页';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-page-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('添加', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'slug',
            'title',
            //'template',
            //'event_store_id',
            //'created_at',
            //'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {store} {update} {delete}',
                'buttons' => [
                    'store' => function ($url, $model, $key) {
                        return Html::a('<i class="fa fa-database fa-fw"></i>', Url::to(['store/index', 'store_id' => $model->store->id]), [
                            'title' => '仓库'
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>
</div>