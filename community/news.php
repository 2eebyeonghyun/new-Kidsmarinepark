<?php $_dep = array(4,2);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="news-page">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>
	
	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">언론보도</h1>
				</div>
				<div class="visual-wrap">
					<img class="clip" src="<?=DIR?>/img/svis/svis4.png" alt="키즈마린파크 탑이미지#4">
				</div>
				<div class="svis-inner">
					<ul class="svis-step">
						<li><a href="<?=DIR?>/"><span></span><p>HOME</p></a></li>
						<li><a href="<?=DIR?>/community/"><span></span><p>커뮤니티</p></a></li>
						<li><a href="<?=DIR?>/community/news.php"><span></span><p>언론보도</p></a></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="contents">
			<article class="cont cont1">
				<div class="inner">
					<div class="text-wrap">
						<span class="nameTag">news</span>
					</div>
					<div class="introduce-wrap">
						<p class="title-intro">
							키즈마린파크와 관련된<br>
							<b class="ft-sb ft-blue">정보 및 최신 소식</b>을 알려드립니다.
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
							<li class="link-area"><a href="#none">링크</a></li>
						</ul>
						<div class="notice_contents">
							<ul class="notice_list">
								<li>
									<div class="date">
										<span>2022.06</span>
										<strong>15</strong>
									</div>
									<p class="subject">
										<a href="#none">현대자동차그룹, 어린이 해양환경체험관 ‘키즈마린파크’ 개관</a>
									</p>
									<a href="#none" target="_blank" class="linkBtn"><i class="axi axi-link"></i>기사보기</a>
								</li>
								<li>
									<div class="date">
										<span>2022.06</span>
										<strong>15</strong>
									</div>
									<p class="subject">
										<a href="#none">어린이 대상 해양환경 보전 체험관 '키즈마린파크' 개관</a>
									</p>
									<a href="#none" target="_blank" class="linkBtn"><i class="axi axi-link"></i>기사보기</a>
								</li>
								<li>
									<div class="date">
										<span>2022.04</span>
										<strong>23</strong>
									</div>
									<p class="subject">
										<a href="#none">[키즈마린파크]현대차그룹-해양환경공단 ‘키즈마린파크’ 조성 추진</a>
									</p>
									<a href="#none" target="_blank" class="linkBtn"><i class="axi axi-link"></i>기사보기</a>
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
