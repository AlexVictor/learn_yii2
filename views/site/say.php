<?php
/**
 * Created by PhpStorm.
 * User: Victoryk7
 * Date: 2017/8/17
 * Time: 11:41
 */
//使用了yii\helpers\Html类来对用户传入的数据进行过滤
use yii\helpers\Html;
?>



<?=Html::encode($message)?>


<h1>Hello <?=Html::encode($target)?></h1>

<p>Welcome to your Yii2 demonstration application</p>
