<?php
/**
 * Created by PhpStorm.
 * User: wumahoo
 * Date: 2016/8/9 0009
 * Time: 下午 4:10
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

var_dump($model);


$inserTopicForm = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]) ?>

<?= $inserTopicForm->field($model, 'username') ?>


<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('topic', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>
