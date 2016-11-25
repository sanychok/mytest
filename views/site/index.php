<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>



<div class="site-index">
<!--    --><?php // debug($sector)?>
<!--    --><?php // debug($sector2)?>
<!--    <h2>SECTOR2</h2>-->
<!--    --><?php // foreach ($sector2 as $sec): ?>
<!--        --><?//= $sec ['ряд']?>
<!--        --><?//= $sec['місце']?>
<!--        <br>-->
<!--    --><?php //endforeach; ?>
<!--    <h2>SECTOR1</h2>-->
<!--    --><?php // foreach ($sector as $sec1): ?>
<!--        --><?//= $sec1 ['ряд']?>
<!--        --><?//= $sec1['місце']?>
<!--        <br>-->
<!--    --><?php //endforeach; ?>
<!--    --><?//= count($available) ?>
<!--    --><?//= count($available2) ?>


    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2>Sector1</h2>
                <p><a href="<?= \yii\helpers\Url::to(['/sector1/index']) ?>"Sector1<button type="button" class="btn btn-default get">Перейти</button><a/></a></p>

            </div>
            <div class="col-lg-6">
                <h2>Sector2</h2>

                <p><a href="<?= \yii\helpers\Url::to(['/sector2/index']) ?>"Sector2<button type="button" class="btn btn-default get">Перейти</button><a/></a></p>


            </div>
        </div>

    </div>
</div>
