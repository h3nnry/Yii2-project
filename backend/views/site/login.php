<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-box" id="login-box">
    <div class="header"><?php echo Html::encode($this->title); ?></div>
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <div class="body bg-gray">
        <?= $form->field($model, 'username')->textInput(['placeholder' => $model->getAttributeLabel('username')])->label(false) ?>
        <?= $form->field($model, 'password')->passwordInput(['placeholder' => $model->getAttributeLabel('password')])->label(false) ?>
        <?= $form->field($model, 'rememberMe')->checkbox(['style'=>'display:block; z-index:1000']) ?>
        <div style="color:#999;margin:1em 0">
            If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
        </div>
    </div>
    <div class="footer">
        <?= Html::submitButton('Login', ['class' => 'btn bg-olive btn-block']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
