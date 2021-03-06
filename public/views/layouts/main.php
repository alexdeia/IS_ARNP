<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Система расчета нагрузки преподавателей вуза <sup>beta</sup>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Главная', 'url' => ['/site/index']],
            ['label' => 'Нагрузка', 'url' => ['/teachers/all']],
            ['label' => 'Дисциплины','options' => ['id' => 'down_load'], 'items'=>[
                ['label' => 'Все дисциплины', 'url' => ['/discipline/all'],'options' => ['id' => 'wn_history']],
                ['label' => 'Редактировать дисциплины', 'url' => ['/discipline'],'options' => ['id' => 'wn_history']],
                ['label' => 'Добавить дисциплину', 'url' => ['/discipline/create'],'options' => ['id' => 'wn_history']],
            ]],
            ['label' => 'Преподаватели','options' => ['id' => 'down_teachers'], 'items'=>[
                ['label' => 'Все преподаватели', 'url' => ['/teachers/all'],'options' => ['id' => 'wn_history']],
                ['label' => 'Редактировать преподавателей', 'url' => ['/teachers'],'options' => ['id' => 'wn_history']],
                ['label' => 'Добавить преподавателя', 'url' => ['/teachers/create'],'options' => ['id' => 'wn_history']],
            ]],
            ['label' => 'Другое','options' => ['id' => 'down_other'], 'items'=>[
                ['label' => 'Количество студентов', 'url' => ['/students'],'options' => ['id' => 'wn_history']],
                ['label' => 'Руководство магистрами', 'url' => ['/leadmagbak'],'options' => ['id' => 'wn_history']],
                ['label' => 'Ставки и нагрузка', 'url' => ['/otherdata'],'options' => ['id' => 'wn_history']],
            ]],
            //['label' => 'О сайте', 'url' => ['/site/about']],
            ['label' => 'Помощь', 'url' => ['/site/contact']],
           /* Yii::$app->user->isGuest ? (
                ['label' => 'Авторизация', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Выйти (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )*/
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Alexey Klykov - MIET  <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
