<div class="container">
<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

if($active->hasErrors()) {
    echo "<pre>";
    print_r($active->getErrors());
}

$form = ActiveForm::begin()

?>

<?php echo $form->field($active, 'image')?>
<?php echo $form->field($active, 'name')?>
<?php echo $form->field($active, 'email')?>
<?php echo Html::submitButton('save', ['class' => 'btn'])?>

<?php ActiveForm::end()?>
</div>