<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
?>
<div class="users">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nickname') ?>
        <?= $form->field($model, 'gender') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'comment') ?>
        <?= $form->field($model, 'cellphone') ?>
        <?= $form->field($model, 'name') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- users -->
