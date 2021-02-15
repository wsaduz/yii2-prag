<?php

if($model->hasErrors()) {
    echo "<pre>";
    print_r($model->getErrors());
    Yii::$app->session->setFlash('error', 'Хреновая регистрация');

} else {
    echo "Name: ".$model['name']."<br>";
    echo "lastname: ".$model['lastname']."<br>";
    echo "middlename: ".$model['middlename']."<br>";
    echo "email: ".$model['email']."<br>";
    echo "<br>";
}

?>

<form method="POST">
Name <br>
<input type="text" name="name"> <br>
LastName <br>
<input type="text" name="lastname"> <br>
MiddleName <br>
<input type="text" name="middlename"> <br>
Email <br>
<input type="text" name="email">
<button>Get</button>
</form>