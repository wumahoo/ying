<?php
/**
 * Created by PhpStorm.
 * User: WuMH
 * Date: 2016/8/12 012
 * Time: 0:13
 */


use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFile')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>

<?php

$headers = Yii::$app -> request -> headers;

if($headers->has('User-Agent')){
    echo 'ok';
}else{
    echo 'no';
}

?>
