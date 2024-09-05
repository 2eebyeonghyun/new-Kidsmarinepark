<?php $_dep = array(1,2);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>
	
	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">설립취지</h1>
				</div>
				<div class="visual-wrap">
					<img class="clip" src="<?=DIR?>/img/svis/svis1.png" alt="키즈마린파크 탑이미지#1">
				</div>
				<div class="svis-inner">
					<ul class="svis-step">
						<li><a href="<?=DIR?>/"><span></span><p>HOME</p></a></li>
						<li><a href="<?=DIR?>/company/"><span></span><p>키즈마린파크</p></a></li>
						<li><a href="<?=DIR?>/company/history.php"><span></span><p>설립취지</p></a></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="contents">
			<article class="cont cont1">
				<div class="inner">
					<div class="text-wrap">
						<span class="nameTag">history</span>
					</div>
					<div class="introduce-wrap">
						<p class="title-intro">
							키즈마린파크 어린이 해양환경체험관은<br>
							<b class="ft-sb ft-blue">현대자동차그룹과 해양환경공단, 한국해양재단</b>이 합력하여 조성한 공간입니다.
						</p>
						<p class="sub-intro">
							어린이에게 체험전시를 통해 해양환경보전 교육을 제공한다는 취지로 1년의 기획 과정을 거쳐 2022년 오픈하였습니다.<br>
							어린이가 해양플라스틱 문제의 현실과 원인, 심각성을 이해하고 해결방안을 고민해보도록 하는 다양한 체험 프로그램을 만날 수 있습니다.
						</p>
					</div>
				</div>
			</article>
			<article class="cont cont2">
				<div class="inner">
					<ul class="history-logo-wrap">
						<li data-aos="fade-up">
							<div class="lef">
								<div class="imgbox">
									<img src="<?=DIR?>/img/company/hyundai-logo.png" alt="현대자동차그룹 로고">
								</div>
							</div>
							<div class="rig">
								<p class="info">
									현대자동차그룹은 한국 자동차 산업과 경제를 이끌며 성장한 글로벌기업입니다.<br>
									AAM과 커넥티비티, 자율주행, 전동화 등을 포괄하는 미래 모빌리티 솔루션, 로보틱스, 수소사회 구현 등<br>
									다양한 분야에서 앞선 기업으로 새로운 비전을 제시하고 있습니다.<br>
									‘더 나은 미래를 향한 동행’을 기치로 사회적 책임을 다하고 인류의 행복과 지속 가능한 사회를 이룩하기 위해 노력하고 있습니다.
								</p>
							</div>
						</li>
						<li data-aos="fade-up">
							<div class="lef">
								<div class="imgbox">
									<img src="<?=DIR?>/img/company/koem-logo.png" alt="해양환경공단 로고">
								</div>
							</div>
							<div class="rig">
								<p class="info">
									해양환경공단은 해양의 보전과 이용을 선도하는 해양환경 국민 플랫폼 기관으로<br>
									해양환경의 보전 · 관리 · 개선 및 해양오염방제 등을 효율적으로 추진함으로써 깨끗하고 풍요로운<br>
									해양환경을 조성하여 미래 녹색실현에 기여합니다.
								</p>
							</div>
						</li>
						<li data-aos="fade-up">
							<div class="lef">
								<div class="imgbox">
									<img src="<?=DIR?>/img/company/ks-logo.png" alt="한국해양재단 로고">
								</div>
							</div>
							<div class="rig">
								<p class="info">
									한국해양재단은 해양분야와 관련하여 교육 · 문화 · 예술 진흥사업과 인재육성 및 학술연구 등 추진하고 있으며,<br>
									이러한 다양한 사업을 통해 해양사상을 국민문화로 정착시키고 해양잠재력을 일깨워 해양수산 발전의 정신적 기반을 조성하여<br>
									일류 해양강국 건설을 위해 노력하는 대한민국 해양분야 대표 비영리 공익법인입니다.
								</p>
							</div>
						</li>
					</ul>
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
<script>
	AOS.init({
		duration: 1500,
		delay: 300,
		once: true,
	});
</script>
<script>
	const saTriggerMargin = 500;
	const saElementList = document.querySelectorAll('.ball-img');

	const saFunc = function() {
		for (const element of saElementList) {
			if (!element.classList.contains('show')) {
				if (window.innerHeight > element.getBoundingClientRect().top + saTriggerMargin) {
					element.classList.add('show');
				}
			}
		}
	}

	window.addEventListener('load', saFunc);
	window.addEventListener('scroll', saFunc);
</script>
</html>
