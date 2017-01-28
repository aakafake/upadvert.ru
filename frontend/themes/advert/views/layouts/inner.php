<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;

\frontend\assets\MainAsset::register($this);
?>
<?php
  $this->beginPage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php echo Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>

<body>

<?php
 $this->beginBody();
?>

<?php if (Yii::$app->session->hasFlash('success')) {

    $success= Yii::$app->session->getFlash('success');

    echo \yii\bootstrap\Alert::widget([
        'options' => [
            'class' =>'alert-info'
        ],
        'body' => $success
    ]);
}
?>

<!-- Header Starts -->
  <?php echo $this->render("//common/head") ?>
<!-- #Header Starts -->

<div class="inside-banner">
    <div class="container">
        <span class="pull-right"><a href="#">Home</a> / <?php echo $this->title ?></span>
        <h2><?php echo $this->title ?></h2>
    </div>
</div>
<!-- banner -->

<!-- banner -->
<div class="container">
    <div class="spacer">
        <?php echo $content ?>
    </div>
</div>



        <?php echo $this->render("//common/footer") ?>

<?php
$this->endBody();
?>


</body>
</html>

<?php
$this->endPage();
?>

