<?
use yii\helpers\Html;
?>

<div class="properties-listing spacer">

    <div class="row">
        <div class="col-lg-3 col-sm-4 ">
            <?=\yii\helpers\Html::beginForm(\yii\helpers\Url::to('/main/main/find/'),'get') ?>
            <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Поиск</h4>
                <?=Html::textInput('propert', $request->get('propert'), ['class' => 'form-control', 'placeholder' => 'Запрос']) ?>
                <div class="row">
                    <div class="col-lg-12">
                        <?=Html::dropDownList('price', $request->get('price'),[
                            '150000-200000' => '1 500 000 р. - 2 000 000 р.',
                            '200000-250000' => '2 000 000 р. - 2 500 000 р.',
                            '250000-350000' => '2 500 000 р. - 3 500 000 р.',
                            '350000' =>'3 500 000 р. - более',
                        ],['class' => 'form-control', 'prompt' => 'Цена']) ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <?=Html::dropDownList('apartment', $request->get('apartment'),[
                            'Квартира',
                            'Дом',
                            'Офис',
                        ],['class' => 'form-control', 'prompt' => 'Тип']) ?>
                    </div>
                </div>
                <button class="btn btn-primary">Искать</button>
                <?=\yii\helpers\Html::endForm() ?>

            </div>



            <div class="hot-properties hidden-xs">

                <? echo \frontend\widgets\HotWidget::widget() ?>

            </div>


        </div>

        <div class="col-lg-9 col-sm-8">
            <div class="row">

                <?
                foreach($model as $row):
                    $url = \frontend\components\Common::getUrlAdvert($row);
                    ?>
                    <!-- properties -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="properties">
                            <div class="image-holder"><img src="<?=\frontend\components\Common::getImageAdvert($row)[0] ?>"  class="img-responsive" alt="properties">
                                <div class="status <?=($row['sold']) ? 'sold' : 'new' ?>"><?=\frontend\components\Common::getType($row) ?></div>
                            </div>
                            <h4><a href="<?=$url ?>" ><?=\frontend\components\Common::getTitleAdvert($row) ?></a></h4>
                            <p class="price">Цена: <?=$row['price'] ?> р.</p>
                            <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?=$row['bedroom'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?=$row['livingroom'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?=$row['parking'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?=$row['kitchen'] ?></span> </div>
                            <a class="btn btn-primary" href="<?=$url ?>" >Подробнее</a>
                        </div>
                    </div>

                    <?
                endforeach;
                ?>
                <!-- properties -->


                <div class="clearfix"></div>
                <!-- properties -->
                <div class="center">
                    <? echo \yii\widgets\LinkPager::widget([
                        'pagination' => $pages
                    ]) ?>
                </div>

            </div>
        </div>
    </div>
</div>