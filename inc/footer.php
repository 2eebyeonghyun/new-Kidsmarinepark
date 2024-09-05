<div class="fotbanner">
	<div class="inner">
		<div class="lef">
			<div class="swiper fotBannerSwiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a href="#none">
							<img src="<?=DIR?>/img/footer/fotBanner-logo1.png" alt="">
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#none">
							<img src="<?=DIR?>/img/footer/fotBanner-logo2.png" alt="">
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#none">
							<img src="<?=DIR?>/img/footer/fotBanner-logo3.png" alt="">
						</a>
					</div>
					<div class="swiper-slide">
						<a href="#none">
							<img src="<?=DIR?>/img/footer/fotBanner-logo4.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="rig">
			<div class="swiper_option">
				<div class="swiper-navi">
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer id="footer">
	<div class="inner">
		<div class="top">
			<div class="lef">
				<ul class="footer_list">
					<li><a href="#none">개인정보처리방침</a></li>
					<li><a href="#none">사이트맵</a></li>
				</ul>
			</div>
			<div class="rig">
				<div class="row">
					<h3 class="title">FOLLOW US</h3>
					<ul class="sns_list">
						<li class="facebook"><a href="#none">facebook</a></li>
						<li class="youtube"><a href="#none">youtube</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="bot">
			<div class="lef">
				<ul class="company_info">
					<li>서울시 송파구 송파대로 28길, 1층 키즈마린파크</li>
					<li>이메일: kidsmarinepark@naver.com</li>
					<li>전화번호: 02-6956-5278</li>
					<li>팩스: 02-6956-5279</li>
				</ul>
				<p class="copyright">COPYRIGHT(C) 어린이 해양환경체험관 ALL RIGHTS RESERVED.</p>
			</div>
			<div class="rig">
				<div class="row">
					<h3 class="title">FAMILY SITE</h3>
					<div class="site-wrap">
						<a href="#" class="site-title">관련사이트<i class="axi axi-ion-chevron-up"></i></a>
						<ul class="related-site" style="display: none;">
							<li><a href="http://kidsautopark.org/seoul/" target="_blank" title="바로가기">키즈오토파크 서울</a></li>
							<li><a href="http://kidsautopark.org/ulsan/" target="_blank" title="바로가기">키즈오토파크 울산</a></li>
							<li><a href="https://www.hyundai.co.kr/main/mainRecommend" target="_blank" title="바로가기">현대자동차그룹</a></li>
							<li><a href="https://tech.hyundaimotorgroup.com/kr/" target="_blank" title="바로가기">현대모터그룹 TECH</a></li>
							<li><a href="https://www.koem.or.kr/site/koem/main.do" target="_blank" title="바로가기">해양환경공단</a></li>
							<li><a href="https://edu.merti.or.kr/user/Main.do" target="_blank" title="바로가기">국가해양환경 온라인 교육센터</a></li>
							<li><a href="http://www.koreaoceanfoundation.or.kr/" target="_blank" title="바로가기">한국해양재단</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script>
	var swiper = new Swiper(".fotBannerSwiper", {
		slidesPerView: 4,
		spaceBetween: 30,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".fotbanner .rig .swiper_option .swiper-button-next",
			prevEl: ".fotbanner .rig .swiper_option .swiper-button-prev",
		},
		breakpoints: {
			320: {slidesPerView: 1},
			430: {slidesPerView: 2},
			768: {slidesPerView: 4},
			1024: {slidesPerView: 4},
		},
	});

</script>
<script>
	$('.site-wrap > a').each(function(idx) {
		$(this).on("click", function(e) {
			e.preventDefault();

			var $target = $(e.target);
			var $popup = $target.next();

			if ($popup.is(":visible")) {
				$popup.stop().hide();
				$(document).off("click.family" + idx);
			} else {
				$popup.stop().show();
				$(document).on("click.family" + idx, function(e) {
					if ($(e.target)[0] != $target[0]) {
						$popup.stop().hide();
						$(document).off("click.family" + idx);
					}
				});
			}
		});
	});

</script>
