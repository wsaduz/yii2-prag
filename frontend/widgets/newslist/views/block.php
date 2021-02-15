<?php

use yii\helpers\Url;

?>
<h1>AIL - COMPANY</h1>
<hr>
<?php foreach($list as $item):?>
    <div class="col-lg-6">
        <div class="date"><?php echo $item['date'] ?></div>
        <img src="<?php echo $item['image']?>" alt="" width="70%">
        <a href="<?php echo Url::to(['test/index', 'id' => $item['id']])?>">
        <h3><?php echo substr($item['title'], 0, 70)."..." ?></h3></a>
    <p>
        <?php echo $item['content']."<br>";?>
        <b style="color:goldenrod"><?php echo "Автор: ".$item['author'];?></b>
    </p>
</div>
<?php endforeach;

