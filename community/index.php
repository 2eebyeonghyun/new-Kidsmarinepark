<?php $_dep = array(4,1);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>
	
	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">공지사항</h1>
				</div>
				<div class="visual-wrap">
					<img class="clip" src="<?=DIR?>/img/svis/svis4.png" alt="키즈마린파크 탑이미지#4">
				</div>
				<div class="svis-inner">
					<ul class="svis-step">
						<li><a href="<?=DIR?>/"><span></span><p>HOME</p></a></li>
						<li><a href="<?=DIR?>/community/"><span></span><p>커뮤니티</p></a></li>
						<li><a href="<?=DIR?>/community/"><span></span><p>공지사항</p></a></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="contents">
			<article class="cont cont1">
				<div class="inner">
					<div class="text-wrap">
						<span class="nameTag">notice</span>
					</div>
					<div class="introduce-wrap">
						<p class="title-intro">
							키즈마린파크의<br>
							<b class="ft-sb ft-blue">최신 정보</b>를 알려드립니다.
						</p>
					</div>
				</div>
			</article>
			<article class="cont cont2">
				<div class="inner">
					<form action="?" name="noticeFrm" id="noticeFrm" method="post">
						<div class="search-wrap">
							<input type="text" name="search_textBox" id="search_textBox" placeholder="궁금하신 내용을 입력해주세요.">
							<button type="submit" class="search_Btn" onclick="javascript:goSearch();return false;">검색</button>
						</div>
						
						<ul class="noticeNav_">
							<li class="active date-area"><a href="#none">등록날짜</a></li>
							<li class="subject-area"><a href="#none">제목</a></li>
						</ul>
						<div class="notice_contents">
							<ul class="notice_list">
								<li>
									<div class="date">
										<span>2023.01</span>
										<strong>09</strong>
									</div>
									<p class="subject">
										<a href="<?=DIR?>/community/notice-inner.php">1, 2회차 개인 예약 안내</a>
									</p>
								</li>
								<li>
									<div class="date">
										<span>2023.01</span>
										<strong>08</strong>
									</div>
									<p class="subject">
										<a href="<?=DIR?>/community/notice-inner.php">해양교육 관련 이벤트 안내(해양영토 토론대회 영상 댓글 이벤트)</a>
									</p>
								</li>
								<li>
									<div class="date">
										<span>2022.10</span>
										<strong>20</strong>
									</div>
									<p class="subject">
										<a href="<?=DIR?>/community/notice-inner.php">가을/겨울철 의복 안내</a>
									</p>
								</li>
							</ul>
						</div>
					</form>
				
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
</html>
