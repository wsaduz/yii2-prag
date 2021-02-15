
<div class="container">
<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    use yii\helpers\Url;

    if($model->hasErrors()) {
        echo "<pre>";
        Yii::$app->session->setFlash('error', "Ошибка при вводения даных");
        print_r($model->getErrors());
        echo "</pre>";
    } else {
       # Свой стиль alert
       # echo "<div style=\"background:green;padding:5px;color:white;text-align:center;\">" . Yii::$app->session->getFlash('succ') . "</div>";
       
    }
?>

    <?php $form = ActiveForm::begin()?>
    <?php echo $form->field($model, 'name')->label('Имя')->hint('Не меньше 3 букв')?>
    <?php echo $form->field($model, 'coment')->textarea()->label('Комментари')?>
    <?php echo Html::submitButton('Добавить', ['class' => 'btn'])?>
    <?php ActiveForm::end()?>

    <h1>Коментарии</h1>
    <?php foreach($comments as $item):?>
        <?php
            if($item['image'] == null) {
                $item['image'] = 'https://images.chesscomfiles.com/uploads/v1/user/37151448.2a96516f.1200x1200o.265194b6652b.png';           
            }
        ?>
        <div class="box">
            <div class="comment-img">
                <img src="<?php echo Html::encode($item['image'])?>" alt="" width="60px" class="comment-img">
                <a href="#" class="user"><?php echo Html::encode($item['name'])?> </a>
                <div class="content"><?php echo Html::encode($item['content'])?> 
                    <div class="update"><a href="<?php echo Url::to(['first/comupdate', 'id' => $item['id']])?>">Редактировать</a></div>
                </div>           
            </div>
        </div>
    <?php endforeach?>


</div>