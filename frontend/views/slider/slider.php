<?php

use frontend\assets\SliderAsset;

SliderAsset::register($this);
$this->registerJsFile('@web/scripts/slide-plugin.js', ['depends' => [
	SliderAsset::className()
]])

?>

<!-- <script src="/frontend/web/scripts/slide-plugin.js"></script> -->
<h1>Slider</h1>
<div class="portfolioFilter">

	<a href="#" data-filter="*" class="current">All Categories</a>
	<a href="#" data-filter=".people">People</a>
	<a href="#" data-filter=".places">Places</a>
	<a href="#" data-filter=".food">Food</a>
	<a href="#" data-filter=".objects">Objects</a>

</div>

<div class="portfolioContainer">

	<div class="objects">
		<img src="/frontend/web/photo/watch.jpg" alt="image">
	</div>
	
	<div class="people places">
		<img src="/frontend/web/photo/surf.jpg" alt="image">
	</div>	

	<div class="food">
		<img src="/frontend/web/photo/burger.jpg" alt="image">
	</div>
	
	<div class="people places">
		<img src="/frontend/web/photo/subway.jpg" alt="image">
	</div>

	<div class="places objects">
		<img src="/frontend/web/photo/trees.jpg" alt="image">
	</div>

	<div class="people food objects">
		<img src="/frontend/web/photo/coffee.jpg" alt="image">
	</div>

	<div class="food objects">
		<img src="/frontend/web/photo/wine.jpg" alt="image">
	</div>	
	
	<div class="food">
		<img src="/frontend/web/photo/salad.jpg" alt="image">
	</div>	
	
</div>
