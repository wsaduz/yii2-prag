<div class="container">
<?php

use yii\helpers\Url;

?>
<h1>AIL - COMPANY</h1>
<hr>
<?php foreach($list as $item):?>
<div style="transform: translateY(18px);background:gray;width:150px;color:honeydew;padding-left:7px"><?php echo $item['date'] ?></div>
    <a href="<?php echo Url::to(['test/index', 'id' => $item['id']])?>"><h1><?php echo $item['title'] ?></h1></a>
<p>
    <?php echo $item['content']."<br>";?>
    <b style="color:goldenrod"><?php echo "Автор: ".$item['author'];?></b>
</p>
<?php endforeach;?>

</div>