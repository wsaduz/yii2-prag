<?php

use yii\helpers\Html;
$name = 'qwe';
$br = 'br';
$itemss = [
    '1' => 'asd',
    '2' =>'asdasf',
    'd' =>'dasgdf',
    '4' =>'dasgdfggdf',
];
echo Html::tag('b', 'ASD');
echo Html::endTag('br');
echo Html::dropDownList($name, $selection = null, $itemss, $options = []);
echo Html::endTag($br);
echo Html::checkboxList( $name, $selection = null, $itemss, $options = []);
echo Html::endTag($br);
echo Html::img('@images/burger.jpg', ['width' => '100%', 'alt' => 'Error']);

echo Html::encode("<script>alert('asd')</script>");
?>
фыв