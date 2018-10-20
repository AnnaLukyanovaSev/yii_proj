<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Film\Film */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Films', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="film-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <p><b>
            <?php
            if (empty($model->create_at)) {
                echo '';
            } else {
                echo 'Created at  ' . date('Y-m-d G:i:s', $model->create_at) . ' by ' . $model->creat_by;
            }

            echo '. Updated at ' . date('Y-m-d G:i:s', $model->reduct_at) . PHP_EOL;
            ?>
        </b>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'film',
            'year',
            'crid',
        ],
    ]) ?>

</div>
