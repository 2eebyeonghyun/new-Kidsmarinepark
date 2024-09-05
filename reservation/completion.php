<?php $_dep = array(3,);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>
	
	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">예약완료</h1>
				</div>
				<div class="visual-wrap">
					<img class="clip" src="<?=DIR?>/img/svis/svis3.png" alt="키즈마린파크 탑이미지#3">
				</div>
				<div class="svis-inner">
					<ul class="svis-step">
						<li><a href="<?=DIR?>/"><span></span><p>HOME</p></a></li>
						<li><a href="<?=DIR?>/reservation/reservation-1.php"><span></span><p>예약 및 확인</p></a></li>
						<li><a href="#none"><span></span><p>예약하기</p></a></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="contents">
			<article class="cont cont1">
				<div class="inner">
					<div class="text-wrap">
						<span class="nameTag">reservation</span>
					</div>
					<div class="introduce-wrap">
						<p class="title-intro">
							이병현님 <b class="ft-sb ft-blue">2023년 01월 10일 단체예약</b><br>
							신청 완료되었습니다.
						</p>
					</div>
				</div>
			</article>
			<article class="cont cont2">
				<div class="inner">
					<div class="reservation-compleBox">
						<div class="lef">
							<h3 class="compleInfo-name">예약정보</h3>
							<ul class="compleInfo-box">
								<li><span class="icon"><i class="axi axi-calendar-o"></i></span><p class="text">01 / 10 / 2023</p></li>
								<li><span class="icon"><i class="axi axi-clock"></i></span><p class="text">13:30 - 15:00 PM (2회차)</p></li>
								<li><span class="icon"><i class="axi axi-person-add"></i></span><p class="text">13명</p></li>
							</ul>
							<a href="<?=DIR?>/reservation/check-reservation.php" class="moveBtn">예약확인 하러가기</a>
						</div>
						<div class="rig">
							<div class="row">
								<h3 class="compleInfo-name">입장안내</h3>
								<ul class="compleUI1">
									<li><span>·</span><p>원활한 수업 진행을 위해 회차 <b>시작시간 5분 전</b> 입장 부탁드립니다.</p></li>
									<li><span>·</span><p>안내데스크에서 <b>예약 사항 확인 후</b> 입장 부탁드립니다.</p></li>
									<li><span>·</span><p>어린이를 <b>동반하지 않은</b> 관람객, 성인보호자를 <b>동반하지 않은</b> 어린이의 입장을 제한합니다.</p></li>
									<li><span>·</span><p>도슨트 수업 후 <b>자유관람으로</b> 진행합니다.</p></li>
									<li><span>·</span><p>예약 후 미 방문 시 <b>추후 관람예약에 제한</b>이 있을 수 있습니다.</p></li>
									<li><span>·</span><p>회차 <b>시작 후 10분이 지나면</b> 입장이 어려울 수 있으니 유의하시기 바랍니다.</p></li>
								</ul>
							</div>
							
							<div class="row last-row">
								<h3 class="compleInfo-name">안내정보</h3>
								<ul class="compleUI1 compleUI2">
									<li><span>문의전화 :</span><p>02-6956-5278</p></li>
									<li><span>이메일 :</span><p>kidsmarinepark@naver.com</p></li>
									<li><span>위치 :</span><p>서울시 송파구 송파대로28길 28, 1층 키즈마린파크</p></li>
								</ul>
							</div>
						</div>
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
