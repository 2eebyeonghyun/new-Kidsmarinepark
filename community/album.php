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
							키즈마린파크에서<br>
							체험을 통해 <b class="ft-sb ft-blue">즐거운 추억</b>을 저장해 드립니다.
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
						
						<ul class="picture-wrap">
							<li class="picture-item">
								<a href="<?=DIR?>/community/album-inner.php">
									<div class="imgbox"><img src="<?=DIR?>/img/main/album-img1.png" alt="활동앨범 이미지"></div>
									<div class="textbox">
										<div class="date">
											<span>2023.01</span>
											<strong>10</strong>
										</div>
										<h3 class="title">단체 자**어린이집</h3>
									</div>
								</a>
							</li>
						</ul>
						
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
					</form>
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
