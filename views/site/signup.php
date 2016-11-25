<!--<div class="site-login container "><h1>Регистрация-->
<!--    </h1>-->
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php
//$form =ActiveForm ::begin();
//?>
<?//= $form->field($model, 'username')->textInput()->label('Имя пользователя')?>
<!---->
<?php
//$form =ActiveForm ::end();
//?>
<!--</div>-->
<?php
$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login container">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Имя ') ?>
    <?= $form->field($model, 'email1')->textInput()->label('Email') ?>
    <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Зарегестрировать', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
