<?php 
use yii\helpers\Html;
?>

<?= Html::beginTag('span', $options) ?>
    <i class="fa fa-cloud-upload" aria-hidden="true"></i>
    <?= $input ?>
<?= Html::endTag('span') ?>