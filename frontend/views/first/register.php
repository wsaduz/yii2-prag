<div class="container">
<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

if($model->hasErrors()) {
    echo "<pre>";
    print_r($model->getErrors());
    Yii::$app->session->setFlash('error', 'Хреновая регистрация');
    echo "</pre>";

} 
// Yii::$app->session->setFlash('info', 'Info');


?>


<?php $form = ActiveForm::begin()?>
<?php echo $form->field($model, 'name')?>
<?php echo $form->field($model, 'lastname')?>
<?php echo $form->field($model, 'email')?>
<?php echo Html::submitButton('Next', ['class' => 'btn'])?>
<?php ActiveForm::end()?>


<!-- <form method="POST">
Name <br>
<input type="text" name="name"> <br>
LastName <br>
<input type="text" name="lastname"> <br>
Email <br>
<input type="text" name="email">
<button>Get</button>
</form> -->
</div>