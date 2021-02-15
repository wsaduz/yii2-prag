<?php

// if(Yii::$app->session->hasFlash('accept')) {
//     echo Yii::$app->session->getFlash('accept')."Харош";
// }

if($model->hasErrors()) {
    print_r($model->getErrors());
}

?>

<form method="post">
    Email <br>
    <input type="email" name="email">
    <button>отправить</button>
</form>