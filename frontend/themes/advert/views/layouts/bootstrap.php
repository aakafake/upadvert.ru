<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
\frontend\assets\MainAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Недвижимость в Севастополе </title>
    <meta charset="<?php echo Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php echo Html::csrfMetaTags() ?>
    <?php $this->head() ?>

</head>

<body>
<?php $this->beginBody() ?>

<?php if (\Yii::$app->session->hasFlash('seccess')) {

    echo \Yii::$app->session->getFlash('seccess');
}
?>

<?php echo $this->render("//common/head") ?>


<?php echo $content ?>



<?php echo $this->render("//common/footer") ?>





<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>



