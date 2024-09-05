<div class="side-quickMenu">
	<span class="main-btn"><i class="axi axi-keyboard-control"></i></span>
	<ul class="category-menu">
		<li class="topbtn_"><a href="#"><i class="axi axi-ion-arrow-up-c"></i></a></li>
		<li class=""><a href="<?=DIR?>/community/"><i class="axi axi-notifications"></i></a></li>
		<li class="reservebtn_"><a href="<?=DIR?>/reservation/reservation-1.php"><i class="axi axi-calendar-o"></i></a></li>
		<li class=""><a href="<?=DIR?>/reservation/check-reservation.php"><i class="axi axi-clock"></i></a></li>
		<li class=""><a href="<?=DIR?>/information/location.php"><i class="axi axi-place"></i></a></li>
	</ul>
</div>

<script>
	$(".main-btn").on("click", function(e) {
		e.preventDefault();

		var side_quick = $('.side-quickMenu');

		side_quick.toggleClass('on');
	});
</script>
