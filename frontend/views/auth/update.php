<div class="container">
<?php
    use yii\helpers\Url;
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin()?>
    <?php echo $form->field($model, 'name')?>
    <?php echo $form->field($model, 'email')?>
    <?php echo $form->field($model, 'telegram')?>
    <?php echo Html::submitButton('Редактировать', ['class' => 'btn btn-success'])?> 

    <?php echo Html::tag('a', 'Назад', ['class' => 'btn btn-warning', 'href' => Url::to(['auth/index'])])?>   

<?php ActiveForm::end()?>

</div>