<div class="container">

<?php
    use yii\helpers\Url;
    use yii\helpers\Html;

    if($model->hasErrors()) {
        echo "<pre>";
        Yii::$app->session->setFlash('error', "Ошибка при вводения даных");
        print_r($model->getErrors());
        echo "</pre>";
    } else {
       # Свой стиль alert
       # echo "<div style=\"background:green;padding:5px;color:white;text-align:center;\">" . Yii::$app->session->getFlash('succ') . "</div>";
       
    }
    if($info == null) {
        // echo "<h1>Вы вели не верные Данные</h1> <br>";
        echo Html::tag('h1', "Вы вели не верные Данные, по Айди $id Нечего не найдено");
        echo Html::endtag('h1');
        echo Html::tag('a', 'Назад', ['href' => Url::to(['first/comment']), 'class' => 'btn btn-primary']);
    } 
?>

    <?php foreach($info as $item):?>
        <form method="POST">
    Имя: <b style="background:gray;padding:5px;color:white"><?php echo $item['name']?></b><br>
    <!-- <input type="text" name="name"> <br> -->
    <!-- <input type="text" name="lastname"> <br> -->
    Ваш Комментарий <br>
    <textarea name="coment" id="" cols="30" rows="10"><?php echo $item['content']?></textarea> <br>
    <button>Редактировать</button>
    </form>
    <?php endforeach?>
</div>