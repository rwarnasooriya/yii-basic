<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Task';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        My name is <?= $name; ?>. This is my Task page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
