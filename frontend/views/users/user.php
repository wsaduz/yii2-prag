<div class="container">
<?php foreach($info as $item):?>
<?php
    $this->title = "Пользователь ".$item['name'];
    if($item['image'] == null) {
        $item['image'] = 'https://oren-m7.ru/images/600/DSC100682246.jpg';
    }
    if($item['banner'] == null) {
        $item['banner'] = 'http://static.wixstatic.com/media/a42af8_251ec2b447734eb88bee9c452610e120f000.jpg/v1/fill/w_640,h_360,al_c,q_80,usm_0.33_1.00_0.00/a42af8_251ec2b447734eb88bee9c452610e120f000.jpg';
    }
    if($item['status'] == 2) {
        $item['status'] = '<b style="color:red">Администратор</b>';
    }else {
        $item['status'] = 'Пользователь';
    }  
?>
<img src="<?php echo $item['banner']?>" alt="" width="100%" >
<h1><a href="<?php echo $item['image']?>"><img src="<?php echo $item['image']?>" 
alt="" width="100px" style="border-radius: 10px;"></a>
<?php echo $item['name']?></h1> <br>
<b>Статус: <?php echo $item['status']?></b>
<hr>
<b>Email: <?php echo $item['email']?></b> <br>
<b>Дата регистрации: <?php echo $item['date']?></b> <br>
<b>IP: <?php echo $item['ip']?></b>


<?php endforeach?>
</div>