<div class="container">
<?php 
    use yii\helpers\Url;
    use yii\helpers\Html;

?>
<a href="<?php echo Url::to(['auth/create'])?>" class="btn btn-primary">Создать аккаунт</a> <br> <br>
<table class="table table-condensed"> 
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>email</th>
        <th>Telegram</th>
    </tr>


<?php foreach($model as $item):?>

    <tr>
    <td><?php echo Html::encode($item->id)?></td>
    <td><?php echo Html::encode($item->name)?></td>
    <td><?php echo Html::encode($item->email)?></td>
    <td><?php echo Html::encode($item->telegram)?></td>
    <td><a href="<?php echo Url::to(['auth/update', 'id' => $item->id])?>">Редактировать</a></td>
    <td><a href="<?php echo Url::to(['auth/delete', 'id' => $item->id])?>" class="btn btn-danger">Удалить</a></td>
    </tr>
<?php endforeach?>
</table>
</div>