<?php

use frontend\widgets\NewsList\NewsList;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>



<div class="box container">
    <div class="row">
        <div class="mg-top">
            <div class="col-lg-6">
                <div class="content">
                    <h1>Bootstrap themes, templates, and UI tools to help you 
                    <i>start your next project!</i></h1>
                    <p class="info">
                    Start Bootstrap creates free, open source, MIT license, Bootstrap <a href="#">themes</a>, <a href="#">templates</a>, and <a href="#">code snippets</a> for you to use on any project, <a href="#">guides</a> to help you learn more about designing 
                    and developing with the Bootstrap framework, and premium <a href="#">Bootstrap UI products.</a>
                    </p>
                    <button class="box-button">Browse Templates & Themes</button>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo Yii::getAlias('@images/content-pana.svg')?>" alt="" width="80%">
            </div>
        </div>
    </div> 
    
</div>

<div class="container">
    <?php  echo NewsList::widget()?>
</div>
