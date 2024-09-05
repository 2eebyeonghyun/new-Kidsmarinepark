<?php $_dep = array(1,1);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>
	
	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">인사말</h1>
				</div>
				<div class="visual-wrap">
					<img class="clip" src="<?=DIR?>/img/svis/svis1.png" alt="키즈마린파크 탑이미지#1">
				</div>
				<div class="svis-inner">
					<ul class="svis-step">
						<li><a href="<?=DIR?>/"><span></span><p>HOME</p></a></li>
						<li><a href="<?=DIR?>/company/"><span></span><p>키즈마린파크</p></a></li>
						<li><a href="<?=DIR?>/company/"><span></span><p>인사말</p></a></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="contents">
			<article class="cont cont1">
				<div class="inner">
					<div class="text-wrap">
						<span class="nameTag">OVERVIEW</span>
					</div>
					<div class="introduce-wrap">
						<p class="title-intro">
							안녕하세요.<br>
							<b class="ft-sb ft-blue">키즈마린파크</b>에 오신 걸 진심으로 환영합니다.
						</p>
						<p class="sub-intro">
							키즈마린파크는 미래의 주역인 어린이를 대상으로 해양환경에 대해 쉽고<br>
							재미있게 배울 수 있도록 교육하기 위해 <b class="ft-blue">현대자동차그룹, 해양환경공단, 사회복지공동모금회 및 한국해양재단</b>이<br>
							함께 설립한 공간입니다.
						</p>
						<p class="sub-intro">
							<b class="ft-blue">'나와 해양의 상호관계를 이해하고 해양보전의 가치를 극대화하는 어린이 체험전시'</b>를<br>
							기본방향으로 하여 아이들의 눈높이에 맞춘 다양한 체험을 통해 최근 대두되고 있는 해양오염의 심각성을<br>
							알리고, 해양환경 보호와 실천의 중요성을 자연스럽게 배울 수 있도록 조성하였습니다.
						</p>
						<p class="sub-intro">
							재미있고 유익한 체험공간 및 상상력과 창의력을 자극하는 다양한 프로그램 개발을 통해<br>
							인류 공동의 자산인 바다를 지키고 보전하는데 도움이 될 수 있는 공간이 될 수 있도록<br>
							최선을 다하겠습니다.
						</p>
						<p class="sub-intro">감사합니다.</p>
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
		<div class="ball-wrap">
			<img class="ball-img" src="<?=DIR?>/img/company/ball.png" alt="">
		</div>
	</div>
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/sideQuickmenu.php"; ?>
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/footer.php"; ?>
</body>
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
