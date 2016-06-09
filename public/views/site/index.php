<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = 'Главная - ARNP';
//echo getTeachers();
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Работа с системой</h1>

        <p class="lead">Начните работать с системой прямо сейчас. <br> Заполните необходимые данные для расчётов.</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Преподаватели</h2>

                <p>
                    Добавление и редактирование данных о преподавателях (ФИО, часы).
                </p>

                <p><a class="btn btn-default" href="index.php?r=teachers">Перейти к заполнению преподавателей &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Дисциплины</h2>

                <p>Добавление и редактирование данных о дисциплинах (название, код преподавателя, количество студентов, часы).</p>

                <p><a class="btn btn-default" href="index.php?r=discipline/">Перейти к заполнению дисциплин &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Студенты и другое</h2>

                <p>Добавление и редактирование данных о количестве студентов на кафедре и руководителях. Настройка общего количества ставок и общая нагрузка на кафедру.</p>

                <p><a class="btn btn-default" href="index.php?r=students">Перейти к заполнению студентов &raquo;</a></p>
                <p><a class="btn btn-default" href="index.php?r=leadmagbak">Перейти к заполнению руководителей &raquo;</a></p>
                <p><a class="btn btn-default" href="index.php?r=otherdata">Перейти к заполнению ставок и нагрузки &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
