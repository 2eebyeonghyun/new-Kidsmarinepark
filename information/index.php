<?php $_dep = array(2,1);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>
	
	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">관람안내</h1>
				</div>
				<div class="visual-wrap">
					<img class="clip" src="<?=DIR?>/img/svis/svis2.png" alt="키즈마린파크 탑이미지#2">
				</div>
				<div class="svis-inner">
					<ul class="svis-step">
						<li><a href="<?=DIR?>/"><span></span><p>HOME</p></a></li>
						<li><a href="<?=DIR?>/information/"><span></span><p>이용안내</p></a></li>
						<li><a href="<?=DIR?>/information/"><span></span><p>관람안내</p></a></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="contents">
			<article class="cont cont1">
				<div class="inner">
					<div class="text-wrap">
						<span class="nameTag">information</span>
					</div>
					<div class="introduce-wrap">
						<p class="title-intro">
							키즈마린파크의<br>
							<b class="ft-sb ft-blue">관람안내 및 방법, 관람 시 유의사항</b>을 알려드립니다.
						</p>
						<p class="sub-intro">
							키즈마린파크 방문객의 편의와 안전을 위해 체험관 관람안내와 관람 시 유의할 사항을 알려드립니다.
						</p>
					</div>
				</div>
			</article>
			<article class="cont cont2">
				<div class="inner">
					<div class="information-wrap">
						<div class="row">
							<div class="topTitle_wrap">
								<h3 class="title">관람안내</h3>
							</div>
							<ul class="info-list">
								<li><span class="info-title">운영시간</span><p class="info-text">월요일 ~ 금요일 10:00 ~ 17:00</p></li>
								<li><span class="info-title">휴관일</span><p class="info-text">매주 토/일요일, 공휴일, 안전점검 및 보수 필요 시</p></li>
								<li><span class="info-title">관람료</span><p class="info-text">무료</p></li>
							</ul>
						</div>
						
						<div class="row">
							<div class="topTitle_wrap flex-row">
								<h3 class="title">관람방법</h3>
								<a href="<?=DIR?>/reservation/reservation-1.php" class="reserveBtn">예약하러가기<i class="axi axi-chevron-right"></i></a>
							</div>
							<ul class="info-list">
								<li><span class="info-title">쾌적하고 안전한 관람환경을 위해 온라인 사전예약제를 시행하고 있습니다.</span></li>
								<li><span class="info-title">예약방법은 메뉴의 예약하기를 참고하여 주시기 바랍니다.</span></li>
							</ul>
						</div>
					</div>
				</div>
			</article>
			<article class="cont cont3">
				<div class="inner">
					<div class="information-careful-wrap">
						<div class="topTitle_wrap">
							<h3 class="title">관람 시 유의사항</h3>
						</div>
						
						<ul class="careful-list">
							<li>
								<div class="img"><img src="<?=DIR?>/img/information/careful-img1.png" alt="소근소근 속삭여주세요."></div>
								<div class="text">
									<span class="num">1</span>
									<p class="title">소근소근 속삭여주세요.</p>
								</div>
							</li>
							<li>
								<div class="img"><img src="<?=DIR?>/img/information/careful-img2.png" alt="살금살금 걸어주세요."></div>
								<div class="text">
									<span class="num">2</span>
									<p class="title">살금살금 걸어주세요.</p>
								</div>
							</li>
							<li>
								<div class="img"><img src="<?=DIR?>/img/information/careful-img3.png" alt="음식물은 두고 오세요."></div>
								<div class="text">
									<span class="num">3</span>
									<p class="title">음식물은 두고 오세요.</p>
								</div>
							</li>
							<li>
								<div class="img"><img src="<?=DIR?>/img/information/careful-img4.png" alt="체험관은 금연구역입니다."></div>
								<div class="text">
									<span class="num">4</span>
									<p class="title">체험관은 금연구역입니다.</p>
								</div>
							</li>
							<li>
								<div class="img"><img src="<?=DIR?>/img/information/careful-img5.png" alt="애완동물은 잠시 쉬게 해주세요."></div>
								<div class="text">
									<span class="num">5</span>
									<p class="title">애완동물은 잠시 쉬게 해주세요.</p>
								</div>
							</li>
							<li>
								<div class="img"><img src="<?=DIR?>/img/information/careful-img6.png" alt="휴대폰은 진동으로 해주세요."></div>
								<div class="text">
									<span class="num">6</span>
									<p class="title">휴대폰은 진동으로 해주세요.</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</article>
		</section>
		<div class="background-image-wrap">
			<div class="lef-bg">
				<div class="lef-bg_img1"></div>
				<div class="lef-bg_img2"></div>
			</div>
			<div class="rig-bg">
				<div class="rig-bg_img1"></div>
				<div class="rig-bg_img2"></div>
				<div class="rig-bg_img3"></div>
			</div>
		</div>
	</div>
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/sideQuickmenu.php"; ?>
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/footer.php"; ?>
</body>
</html>
