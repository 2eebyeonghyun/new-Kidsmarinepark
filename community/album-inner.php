<?php $_dep = array(4,3);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>
	
	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">활동앨범</h1>
				</div>
				<div class="visual-wrap">
					<img class="clip" src="<?=DIR?>/img/svis/svis4.png" alt="키즈마린파크 탑이미지#4">
				</div>
				<div class="svis-inner">
					<ul class="svis-step">
						<li><a href="<?=DIR?>/"><span></span><p>HOME</p></a></li>
						<li><a href="<?=DIR?>/community/"><span></span><p>커뮤니티</p></a></li>
						<li><a href="<?=DIR?>/community/album.php"><span></span><p>활동앨범</p></a></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="contents">
			<article class="cont cont1">
				<div class="inner">
					<div class="text-wrap">
						<span class="nameTag">album</span>
					</div>
					<div class="introduce-wrap">
						<p class="title-intro">
							단체 - 송***센터<br>
							<span class="date-area">2023.01.10</span>
						</p>
					</div>
				</div>
			</article>
			<article class="cont cont2">
				<div class="inner">
					<div class="inner-contents albumInner-contents">
						<div class="imgbox"><img src="<?=DIR?>/img/main/album-img1.png" alt="활동앨범"></div>
						<div class="textbox">
							<p></p>
						</div>
					</div>
					
					<ul class="tableContents-wrap">
						<li><span class="table-name">이전글</span><a href="#none" class="table-subject">단체 - 자**어린이집</a></li>
						<li><span class="table-name">다음글</span><a href="#none" class="table-subject">개인 - 이*현, 이*언 어린이</a></li>
					</ul>
					
					<div class="button-wrap">
						<a href="<?=DIR?>/community/album.php" class="fotBtn backBtn">목록</a>
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
