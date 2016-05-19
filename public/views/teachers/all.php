<?php
/**
 * Created by PhpStorm.
 * User: alexdeia
 * Date: 19.05.16
 * Time: 21:33
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Преподаватели</h1>
<table class="table table-hover table-bordered">
    <thead>
    <tr>
        <th>ФИО</th>
        <th>Занятия по дисциплинам</th>
        <th>Руководство практикой</th>
        <th>Руководства КРБ</th>
        <th>Руководство маг.диссертацией</th>
        <th>Педагогич. практика</th>
        <th>Работа ГАК, защита</th>
        <th>Работа по заданию зав.каф.</th>
        <th>Руководство аспирантами</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($teachers as $teacher): ?>
    <tr>
        <td><?= $teacher->FIO ?></td>
        <td><?= $teacher->classes_subject ?></td>
        <td><?= $teacher->lead_practice ?></td>
        <td><?= $teacher->lead_krb ?></td>
        <td><?= $teacher->lead_magist ?></td>
        <td><?= $teacher->ped_practices ?></td>
        <td><?= $teacher->job_gak ?></td>
        <td><?= $teacher->jobs_zav_kaf ?></td>
        <td><?= $teacher->lead_aspir ?></td>
    </tr>
    <?php endforeach;; ?>
    </tbody>
</table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
