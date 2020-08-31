<link rel="stylesheet" type="text/css" href="css/coin-slider-style.css">
<link rel="stylesheet" type="text/css" href="css/slider.css">
<script type="text/javascript" src="js/JQuery.js"></script>
<script type="text/javascript" src="js/thumbnail-slider.js"></script>
<div class="container inner-image">
	<div id='coin-slider'>
		<img src="images/1.jpg">
		<img src="images/2.jpg">
		<img src="images/3.jpg">
		<img src="images/b1.jpg">
	</div>
	<script type="text/javascript">
		$(document).ready(function ()
		{
			$('#coin-slider').coinslider({
				width:550,
				height:310,
				navigation:false,
				delay:2000
			});
		});
	</script>
</div>