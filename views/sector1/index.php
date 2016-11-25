<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Ряд</th>
            <th>Місце</th>
            <th>Статус</th>
        </tr>
        </thead>
        <?php foreach($sector as $sec):?>
            <tr>
                <td><?= $sec['ряд']?></td>
                <td><span  data-id="<?=$sec['id']?>" class="reserved"><a href="<?=\yii\helpers\Url::to(['/sector1/index' ,'id' => $sec['id']])?>"> <?= $sec['місце']?></a></span></td>
                <td><?php if ($sec ['active'] == '0'): ?>
                    Доступно
                   <?php endif;?>
                <?php if ($sec ['active'] == '1'): ?>
                    Зарезервовано
                   <?php endif;?>
                <?php if ($sec ['active'] == '2'): ?>
                    Заброньовано</td>
                   <?php endif;?>
            </tr>
        <?php endforeach?>
        <tbody>
        <h3> Вільних місць в секторі: <?= count($available) ?> </h3>
        <h3> Заброньовані місця  в секторі: <?= count($booked) ?> </h3>
        <h3> Зарезервовані місця  в секторі: <?= count($reserved) ?> </h3>



