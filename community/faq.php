<?php $_dep = array(4,4);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>

	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">자주하는 질문</h1>
				</div>
				<div class="visual-wrap">
					<img class="clip" src="<?=DIR?>/img/svis/svis4.png" alt="키즈마린파크 탑이미지#4">
				</div>
				<div class="svis-inner">
					<ul class="svis-step">
						<li><a href="<?=DIR?>/"><span></span><p>HOME</p></a></li>
						<li><a href="<?=DIR?>/community/"><span></span><p>커뮤니티</p></a></li>
						<li><a href="<?=DIR?>/community/faq.php"><span></span><p>자주하는 질문</p></a></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="contents">
			<article class="cont cont1">
				<div class="inner">
					<div class="text-wrap">
						<span class="nameTag">faq</span>
					</div>
					<div class="introduce-wrap">
						<p class="title-intro">
							키즈마린파크에게<br>
							<b class="ft-sb ft-blue">자주하시는 질문</b>들을 정리해봤습니다.
						</p>
					</div>
				</div>
			</article>
			<article class="cont cont2">
				<div class="inner">
					<ul class="noticeNav_">
						<li class="active subject-area"><a href="#none">질문</a></li>
					</ul>
					<div class="notice_contents">
						<ul class="notice_list faq_">
							<li class="">
								<div class="faq_item q_">
									<em class="ico">Q</em>
									<button type="button" class="faqBtn_">원 사정에 따라 체험 시간을 조정할 수 있나요?</button>
								</div>
								<div class="faq_item a_">
									<em class="ico">A</em>
									<strong class="answer">
										체험관 예약 상황 등을 고려하여 유연하게 운영할 수 있으니 체험관으로 전화주시면 감사하겠습니다.<br><br>
										Q. 2회차 시간을 30분정도 당겨서 1시~2시 30분으로 진행해도 될까요?<br>
										네. 체험관으로 먼저 문의를 주신 후, 예약 시 기타 사항에 방문 시간과 퇴장 시간을 적어주세요.<br><br>
										Q. 아이들 하원시간 때문에 30분정도 일찍 끝내고 싶어요 가능한가요?<br>
										네. 가능합니다. 예약 시 기타 사항에 방문 시간과 퇴장 시간을 적어주세요.
									</strong>
								</div>
							</li>
							<li class="">
								<div class="faq_item q_">
									<em class="ico">Q</em>
									<button type="button" class="faqBtn_">관람 가능 연령은 어떻게 되나요?</button>
								</div>
								<div class="faq_item a_">
									<em class="ico">A</em>
									<strong class="answer">
										관람연령 : 6세 ~ 10세<br>
										키즈마린파크는 안전상의 문제와 원활한 교육 진행 등을 고려하여 입장 연령을 제한하고 있습니다. 예약 전 반드시 연령을 확인해주시기 바랍니다. 
									</strong>
								</div>
							</li>
							<li class="">
								<div class="faq_item q_">
									<em class="ico">Q</em>
									<button type="button" class="faqBtn_">원하는 날짜의 예약이 꽉 찼어요.</button>
								</div>
								<div class="faq_item a_">
									<em class="ico">A</em>
									<strong class="answer">단체예약의 경우 방문 1주일 전까지, 개인예약의 경우 당일 1시간 전까지 취소가 가능하므로 홈페이지에 방문하셔서 실시간 예약현황을 확인해주세요.</strong>
								</div>
							</li>
						</ul>
					</div>
					<div class="button-wrap">
						<a href="<?=DIR?>/information/location.php" class="fotBtn questionBtn">문의하기</a>
					</div>
					<div class="pagination-wrap">
						<ul class="lefbox pagebox">
							<li><a href="#none"><i class="axi axi-angle-double-left"></i></a></li>
							<li><a href="#none"><i class="axi axi-angle-left"></i></a></li>
						</ul>
						<ul class="numbox pagebox">
							<li class="active"><a href="#none">1</a></li>
							<li class=""><a href="#none">2</a></li>
							<li class=""><a href="#none">3</a></li>
							<li class=""><a href="#none">4</a></li>
							<li class=""><a href="#none">5</a></li>
						</ul>
						<ul class="rigbox pagebox">
							<li><a href="#none"><i class="axi axi-angle-right"></i></a></li>
							<li><a href="#none"><i class="axi axi-angle-double-right"></i></a></li>
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
<script>
	var faq = {
		init : function(){
			this.action();
		},
		action : function(){
			var a = $('.faq_');
			var btn = a.find('.faqBtn_');
			btn.on('click',function(){
				var par = $(this).closest('.faq_ > li');
				par.toggleClass('active').siblings().removeClass('active');
				return false;
			});
		}
	}
	
	faq.init();
</script>
</html>
