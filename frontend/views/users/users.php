<?php

use yii\helpers\ArrayHelper;

$emails = ArrayHelper::getColumn($info, 'email');

echo implode(', ', $emails);

?>

<?php foreach($info as $item):?>

<h1><?php echo $item['id']?> <?php echo $item['name']?></h1>

<?php endforeach?>