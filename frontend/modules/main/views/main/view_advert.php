<div class="row">
    <div class="col-lg-3 col-sm-4 hidden-xs">

        <? echo \frontend\widgets\HotWidget::widget() ?>

    </div>

    <div class="col-lg-9 col-sm-8 ">

        <h2><?=\frontend\components\Common::getTitleAdvert($model) ?></h2>
        <div class="row">
            <div class="col-lg-8">
                <div class="property-images">
                    <!-- Slider Starts -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <?
                            foreach(range(1,count($images) - 1) as $s):
                                ?>
                                <li data-target="#myCarousel" data-slide-to="<?=$s ?>" class=""></li>
                                <?
                            endforeach;
                            ?>
                        </ol>
                        <div class="carousel-inner">
                            <!-- Item 1 -->

                            <div class="item active">
                                <img src="<?=\frontend\components\Common::getImageAdvert($model)[0] ?>"  class="properties" alt="properties" />
                            </div>
                            <?
                            foreach($images as $image):
                                ?>
                                <div class="item">
                                    <img src="<?=$image ?>"  class="properties" alt="properties" />
                                </div>
                                <?
                            endforeach
                            ?>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                    <!-- #Slider Ends -->

                </div>


                <div class="spacer"><h4><span class="glyphicon glyphicon-th-list"></span> Описание</h4>
                    <p> <?=$model->description ?></p>
                </div>
                <div><h4><span class="glyphicon glyphicon-map-marker"></span> Карта</h4>
                    <div class="well">


                        <div id="myMap" style="height: 400px;">
                            <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
                            <?php $this->registerJs("
                            
                             var myMap;                                                 
            ymaps.ready(init);                              
            function init()                                 
                {myMap = new ymaps.Map('myMap', {      
                center: [$map[0], $map[1]],             
                zoom: 17,                                   
                behaviors: ['default', 'scrollZoom']});     
                                                            
            myMap.controls.add('zoomControl');              
                                                            
            myMap.controls.add('typeSelector');
            
            var myPlacemark = new ymaps.Placemark([$map[0], $map[1]]);             
myMap.geoObjects.add(myPlacemark);                                                                                                 
            }                                               
                                                            
                                                                 
                            ")?>
                            </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="col-lg-12  col-sm-6">
                    <div class="property-info">
                        <p class="price"> <?=$model->price ?> р.</p>
                        <p class="area"><span class="glyphicon glyphicon-map-marker"></span> <?=$model->address ?></p>

                        <div class="profile">
                            <span class="glyphicon glyphicon-user"></span> Контактные данные
                            <p><?=$model->user->email ?><br><?=$model->user->username ?></p>
                        </div>
                    </div>

                    <h6><span class="glyphicon glyphicon-home"></span> Преимущества</h6>
                    <div class="listing-detail">
                        <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?=$model->bedroom ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?=$model->livingroom ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?=$model->parking ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?=$model->kitchen ?></span> </div>

                </div>
                <div class="col-lg-12 col-sm-6 ">
                    <div class="enquiry">
                        <h6><span class="glyphicon glyphicon-envelope"></span> Связаться</h6>
                        <?
                        $form = \yii\bootstrap\ActiveForm::begin();
                        ?>
                        <?=$form->field($model_feedback,'email')->textInput(['value' => $current_user['email'], 'placeholder' => 'Ваш Email'])->label(false) ?>
                        <?=$form->field($model_feedback,'name')->textInput(['value' => $current_user['username'], 'placeholder' => 'Ваше Имя'])->label(false) ?>
                        <?=$form->field($model_feedback,'text')->textarea(['rows' => 6, 'placeholder' => 'Сообщение'])->label(false) ?>
                        <button type="submit" class="btn btn-primary" name="Submit">Отправить сообщение</button>

                        <?
                        \yii\bootstrap\ActiveForm::end();
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>