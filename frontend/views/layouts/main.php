<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100" style="background-color: #f1f1f1;">
    <?php $this->beginBody() ?>

    <div class="container">
        <?php  ?>
        <?= Alert::widget() ?>
        <?= $this->render('header') ?>
        <?= $content ?>
    </div>
    <?= $this->render('footer') ?>

    </main>


    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
