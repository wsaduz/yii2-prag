<div class="container">
<?php

use yii\helpers\Url;

?>



<h1>AIL - COMPANY</h1>
<hr>
<?php if($list == null) {
    echo "<h1> Новость $id не существует </h1>";
}
    foreach($list as $item):?> 
    <div style="transform: translateY(18px);background:gray;width:150px;color:honeydew;padding-left:7px"><?php echo $item['date'] ?></div>
    <img src="<?php echo $item['image']?>" alt="" width="50%">"
    <h1><?php echo $item['title']?></h1>
    <p>
    <?php echo $item['content']?><br>
    <b style="color:goldenrod">
    Автор: <?php echo $item['author']?></b> <br>
    

    <?php endforeach;?>
    <a href="<?php echo Url::to(['test/qwerty'])?>" class="btn" style="background-color: #343a40;border:none;color:white;padding:5px 20px;border-radius:4px">Назад</a>
</p>
</div>