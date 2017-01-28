<?
$form = \yii\bootstrap\ActiveForm::begin([
    'enableAjaxValidation' => true,
    'validationUrl' => \yii\helpers\Url::to(['/validate/subscribe']),
    'options' => ['class' => 'form-inline']
]);
?>
<?=$form->field($model,'email')->textInput(['placeholder' => 'Введите ваш email'])->label(false) ?>

<?=\yii\helpers\Html::submitButton('Подписаться', ['class' => 'btn btn-success']) ?>

<?
\yii\bootstrap\ActiveForm::end();
?>