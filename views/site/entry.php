<?php
/**
 * Created by PhpStorm.
 * User: Victoryk7
 * Date: 2017/8/17
 * Time: 12:15
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin();?>
<?=$form->field($model,'name');?>
<?=$form->field($model,'email');?>
<div class="form-group">
    <?=Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
</div>
<?php ActiveForm::end();?>
