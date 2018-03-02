<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Send Application';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Application Job Status: <?= $message; ?>
    </p>
</div>
