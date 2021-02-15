<div class="container">

<?php

foreach($query as $item) {
    echo $item->name." ".$publushed->email;;
    echo "<b>".$item->getDate()."</b><br>";
    $publushed = $item->getPublisher();
}


?>

</div>