<div class="row register">
    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

        <?php
        $form = \yii\bootstrap\ActiveForm::begin();
        ?>

        <?php
        echo $form->field($model,'username');
        ?>

        <?php
        echo $form->field($model,'password')->passwordInput();
        ?>
        <?php
        echo $form->field($model,'rememberMe')->checkbox();
        ?>

        <?php
        echo \yii\helpers\Html::submitButton('Войти',['class' => 'btn btn-success'])
        ?>


        <?php
        \yii\bootstrap\ActiveForm::end();
        ?>
    </div>

</div>