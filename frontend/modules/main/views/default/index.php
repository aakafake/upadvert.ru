<?
use yii\helpers\Html;
?>

<div id="slider" class="sl-slider-wrapper">

    <div class="sl-slider">

        <?
        foreach($result_general as $row):
        ?>
        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
                <div class="bg-img" style="background-image: url('<?=\frontend\components\Common::getImageAdvert($row)[0] ?>')")"></div>
            <h2><a href="<?=\frontend\components\Common::getUrlAdvert($row) ?>"><?=\frontend\components\Common::getTitleAdvert($row) ?></a></h2>
            <blockquote>
                <p class="location"><span class="glyphicon glyphicon-map-marker"></span> <?=$row['address'] ?></p>
                <p><?=\frontend\components\Common::substr($row['description']) ?></p>
                <cite> <?=$row['price'] ?> <span style="font-size:15px">р.</span></cite>
            </blockquote>
        </div>
    </div>

    <?
    endforeach;
    ?>

</div><!-- /sl-slider -->



<nav id="nav-dots" class="nav-dots">
    <?
    if($count_general >= 1):
        ?>
        <span class="nav-dot-current"></span>
        <?
    endif;
    ?>

    <?
    if($count_general > 1):
        foreach(range(2,$count_general) as $line):
            ?>
            <span></span>
            <?
        endforeach;
    endif;
    ?>
</nav>

</div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
    <div class="container">
        <!-- banner -->
        <h3>Найти недвижимость</h3>
        <div class="searchbar">
            <div class="row">
                <?=Html::beginForm(\yii\helpers\Url::to('main/main/find/'),'get') ?>
                <div class="col-lg-6 col-sm-6">
                    <?=Html::textInput('propert', '', ['class' => 'form-control']) ?>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4">
                            <?=Html::dropDownList('price', '',[
                                '150000-200000' => '1 500 000 р. - 2 000 000 р.',
                                '200000-250000' => '2 000 000 р. - 2 500 000 р.',
                                '250000-350000' => '2 500 000 р. - 3 500 000 р.',
                                '350000' =>'3 500 000 р. - более',
                            ],['class' => 'form-control', 'prompt' => 'Цена']) ?>
                        </div>
                        <div class="col-lg-3 col-sm-4">

                            <?=Html::dropDownList('apartment', '',[
                                'Квартира',
                                'Дом',
                                'Офис',
                            ],['class' => 'form-control', 'prompt' => 'Тип']) ?>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <?=Html::submitButton('Искать', ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                    <?=Html::endForm() ?>

                </div>
                <?
                if(Yii::$app->user->isGuest):
                    ?>
                    <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
                        <p>Присоединяйтесь и размещайте бесплатные объявления.</p>
                        <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Войти</button>        </div>
                    <?
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<!-- banner -->
<div class="container">
    <div class="properties-listing spacer"> <a href="buysalerent.html"  class="pull-right viewall"></a>
        <h2>Еще предложения</h2>
        <div id="owl-example" class="owl-carousel">

            <?
            foreach($featured as $row):
                ?>

                <div class="properties">
                    <div class="image-holder"><img src="<?=\frontend\components\Common::getImageAdvert($row)[0] ?>"  class="img-responsive" alt="properties"/>
                        <div class="status <?=($row['sold']) ? 'sold' : 'new' ?>"><?=\frontend\components\Common::getType($row) ?></div>
                    </div>
                    <h4><a href="<?=\frontend\components\Common::getUrlAdvert($row) ?>" ><?=\frontend\components\Common::getTitleAdvert($row) ?></a></h4>
                    <p class="price">Цена: <?=$row['price'] ?> р.</p>
                    <div class="listing-detail"><span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room"><?=$row['bedroom'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room"><?=$row['livingroom'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking"><?=$row['parking'] ?></span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen"><?=$row['kitchen'] ?></span> </div>
                    <a class="btn btn-primary" href="<?=\frontend\components\Common::getUrlAdvert($row) ?>" >Подробнее</a>
                </div>

                <?
            endforeach;
            ?>

        </div>
    </div>
    <div class="spacer">
        <div class="row">
            <div class="col-lg-6 col-sm-9 recent-view">
                <h3>Информация</h3>
                <p>Интересует недвижимость в Севастополе? Добро пожаловать! Тысячи объявлений по недвижимости Севастополя от хозяев, агентств, частных лиц Вы найдете на нашем сайте. Первичный и вторичный рынки недвижимости Севастополя, дома, коттеджи, земельные участки, гаражи, коммерческая недвижимость, готовый бизнес. Вы можете выбрать любой вид сделки – аренда, обмен, покупка, продажа недвижимости по всем районам Севастополя и региональному центру. Удобная форма поиска недвижимости поможет Вам быстро найти наиболее оптимальные варианты. Мы предлагаем максимум необходимого – от обширной базы данных и актуальных новостей по недвижимости до ответов на самые разнообразные, злободневные и наиболее часто задаваемые вопросы <a href="about.html" >Подробнее</a></p>

            </div>
            <div class="col-lg-5 col-lg-offset-1 col-sm-3 recommended">
                <h3>Рекомендованное</h3>
                <div id="myCarousel" class="carousel slide">
                    <ol class="carousel-indicators">
                        <?
                        if($recommend_count >= 1):
                            ?>
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <?
                        endif;
                        ?>

                        <?
                        if($recommend_count > 1):
                            foreach(range(1,$recommend_count-1) as $count):
                                ?>
                                <li data-target="#myCarousel" data-slide-to="<?=$count ?>"></li>
                                <?
                            endforeach;
                        endif;
                        ?>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <?
                        $i = 0;
                        foreach($recommend as $rec):
                            ?>
                            <div class="item <?=($i == 0) ? 'active' : '' ?>">
                                <div class="row">
                                    <div class="col-lg-4"><img src="<?=\frontend\components\Common::getImageAdvert($rec)[0] ?>"  class="img-responsive" alt="properties"/></div>
                                    <div class="col-lg-8">
                                        <h5><a href="<?=\frontend\components\Common::getUrlAdvert($rec) ?>" ><?=\frontend\components\Common::getTitleAdvert($rec) ?></a></h5>
                                        <p class="price"><?=$rec['price'] ?> р.</p>
                                        <a href="<?=\frontend\components\Common::getUrlAdvert($rec) ?>"  class="more">Еще</a> </div>
                                </div>
                            </div>
                            <?
                            $i++;
                        endforeach;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>