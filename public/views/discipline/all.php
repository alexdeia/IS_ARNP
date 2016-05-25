<?php
/**
 * Created by PhpStorm.
 * User: Alexey Klykov
 * Date: 21.05.16
 * Time: 1:32
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\Discipline;
use yii\web\View;
?>

<h1>Дисциплины</h1>
<table class="table table-hover table-bordered">
    <thead>
    <tr>
        <th>Дисциплина</th>
        <th>Лекции</th>
        <th>Количество групп</th>
        <th>Количество часов на 1 группу</th>
        <th>Семинары</th>
        <th>Количество групп</th>
        <th>Количество часов на 1 группу</th>
        <th>ЛР</th>
        <th>Консультации</th>
        <th>Экз+Дзач(0,5)</th>
        <th>Зачет(0,3)</th>
        <th>Конс перед экз</th>
        <th>Рук КР+КП</th>
        <th>ДЗ, рефераты</th>
        <th>Всего</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($discipline as $disciplines): // Тут наоборот названы переменные disciplines as discipline
        $seminars = $disciplines->groups_sem * $disciplines->hours_on_group_sem;
        $lr = $disciplines->groups_lr * $disciplines->hours_on_group_lr;
        ?>
        <tr>
            <td><?= $disciplines->name ?></td>
            <td><?= $disciplines->lectures ?></td>
            <td><?= $disciplines->groups_sem ?></td>
            <td><?= $disciplines->hours_on_group_sem ?></td>
            <td><?= $seminars ?></td>
            <td><?= $disciplines->groups_lr ?></td>
            <td><?= $disciplines->hours_on_group_lr ?></td>
            <td><?= $lr ?></td>
            <td><?= ($disciplines->lectures) + $lr + $seminars * 0.1 ?></td>
            <td></td>
            <td></td>
            <td><?= $disciplines->cons_ekz ?></td>
            <td><?= $disciplines->lead_krkp ?></td>
            <td><?= $disciplines->dz_ref ?></td>
            <td>all</td>
        </tr>
    <?php endforeach;; ?>
    </tbody>
</table>

<?php  //var_dump($queryLR); ?>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
