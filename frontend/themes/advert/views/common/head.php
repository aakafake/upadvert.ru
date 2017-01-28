<?php
use yii\bootstrap\Nav;
?>
<!-- Header Starts -->
<div class="navbar-wrapper">

    <div class="navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">


                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
                <?php $menuItems=[
                    ['label' =>'Главная', 'url'=>'/'],
                    ['label' => 'О Нас', 'url' => ['/main/main/page', 'view' => 'about']],
                    ['label' => 'Контакты', 'url' => ['/main/main/page', 'view' => 'contact']],
                ];
                echo Nav::widget([
                    'options'=>['class'=>'navbar-nav navbar-right'],
                    'items'=> $menuItems,
                ]);


                ?>
            </div>
            <!-- #Nav Ends -->

        </div>
    </div>

</div>
<!-- #Header Starts -->





<div class="container">

    <!-- Header Starts -->
    <!-- Header Starts -->
    <div class="header">
        <a href="/" ><img src="/images/logo2.png"  alt="Realestate"></a>
        <?
        $menuItems = [];
        $guest = Yii::$app->user->isGuest;
        if($guest) {
            $menuItems[] =  ['label' => 'Войти', 'url' => '#', 'linkOptions' => ['data-target' => '#loginpop', 'data-toggle' => "modal"]];
        }
        else{
            $menuItems[] =  ['label' => 'Менеджер объявлений ', 'url' => ['/cabinet/advert']];
            $menuItems[] =  ['label' => 'Настройка', 'url' => ['/cabinet/default/settings']];
            $menuItems[] =  ['label' => 'Сменить пароль', 'url' => ['/cabinet/default/change-password']];

            $menuItems[] = ['label' => 'Выйти',  'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']];
        }
        echo Nav::widget([
            'options' => ['class' => 'pull-right'],
            'items' => $menuItems,
        ]);
        ?>
    </div>
    <!-- #Header Starts -->
</div>
