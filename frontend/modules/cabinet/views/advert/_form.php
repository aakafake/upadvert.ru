<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Advert */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="advert-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <div id="map_canvas" style="width:640px; height:380px"></div><br/>

    <?= $form->field($model, 'bedroom')->textInput() ?>

    <?= $form->field($model, 'livingroom')->textInput() ?>

    <?= $form->field($model, 'parking')->textInput() ?>

    <?= $form->field($model, 'kitchen')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'location')->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'hot')->radioList(['Нет', 'Да']) ?>

    <?= $form->field($model, 'sold')->radioList(['Нет', 'Да']) ?>

    <?= $form->field($model, 'type')->dropDownList(['Квартира', 'Дом', 'Офис']) ?>

    <?= $form->field($model, 'recommend')->radioList(['Нет', 'Да']) ?>

    <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>


    <?
    $this->registerJs("
        var myMap;
                     ymaps.ready(init);
                     function init()
                         {myMap = new ymaps.Map('map_canvas', {
                         center: [44.615962, 33.523402],
                         zoom: 10,
                         behaviors: ['default', 'scrollZoom']});

                     myMap.controls.add('zoomControl');

                     myMap.controls.add('typeSelector');
                     }



           $( '#advert-address' ).change(function() {

              var t=document.getElementById('advert-address').value;

              ymaps.geocode(t,{results:1}).then(
              function(res){  var MyGeoObj = res.geoObjects.get(0);




              var myPlacemark = new ymaps.Placemark([MyGeoObj.geometry.getCoordinates()[0], MyGeoObj.geometry.getCoordinates()[1]]);
              myMap.geoObjects.add(myPlacemark);
              myMap.setCenter([MyGeoObj.geometry.getCoordinates()[0], MyGeoObj.geometry.getCoordinates()[1]], 17, {
                  checkZoomRange: true
              });

                $('#advert-location').val([MyGeoObj.geometry.getCoordinates()[0], MyGeoObj.geometry.getCoordinates()[1]]);
              });


              });

"

    );
    ?>
    

    <div class="form-group">
        <?= Html::submitButton('Далее', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
