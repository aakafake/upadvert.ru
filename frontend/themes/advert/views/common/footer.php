<?
if(Yii::$app->user->isGuest) {
    echo \frontend\widgets\Login::widget();
}
?>

<div class="footer">

    <div class="container">



        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h4>Информация</h4>
                <ul class="row">
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/" >Главная</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="#" >О Нас</a></li>
                    <li class="col-lg-12 col-sm-12 col-xs-3"><a href="#" >Контакты</a></li>

                </ul>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Подписаться</h4>
                <p>Получайте самые свежие предложения в нашей новостной ленте.</p>

                <? echo \frontend\widgets\SubscribeWidget::widget() ?>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Мы в социальных сетях</h4>
                <a href="#"><img src="/images/facebook.png"  alt="facebook"></a>
                <a href="#"><img src="/images/twitter.png"  alt="twitter"></a>
                <a href="#"><img src="/images/linkedin.png"  alt="linkedin"></a>
                <a href="#"><img src="/images/instagram.png"  alt="instagram"></a>
            </div>

            <div class="col-lg-3 col-sm-3">
                <h4>Связаться с нами</h4>
                <p><b>Upadvert.ru</b><br>
                    <span class="glyphicon glyphicon-map-marker"></span> г.Севастополь <br>
                    <span class="glyphicon glyphicon-envelope"></span> upadvert@info<br>
                    <span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
            </div>
        </div>
        <p class="copyright">Upadvert.ru 2016. Все права защищены.	</p>


    </div></div>