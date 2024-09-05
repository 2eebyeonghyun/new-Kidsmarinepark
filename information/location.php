<?php $_dep = array(2,3);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>
	
	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">찾아오시는 길</h1>
				</div>
				<div class="visual-wrap">
					<img class="clip" src="<?=DIR?>/img/svis/svis2.png" alt="키즈마린파크 탑이미지#2">
				</div>
				<div class="svis-inner">
					<ul class="svis-step">
						<li><a href="<?=DIR?>/"><span></span><p>HOME</p></a></li>
						<li><a href="<?=DIR?>/information/"><span></span><p>이용안내</p></a></li>
						<li><a href="<?=DIR?>/information/location.php"><span></span><p>찾아오시는 길</p></a></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="contents">
			<article class="cont cont1">
				<div class="inner">
					<div class="text-wrap">
						<span class="nameTag">location</span>
					</div>
					<div class="introduce-wrap">
						<p class="title-intro">키즈마린파크 찾아오시는 길</p>
						<p class="sub-intro"></p>
					</div>
				</div>
			</article>
			<article class="cont cont2">
				<div class="inner">
					<ul class="location-info">
						<li>
							<h3 class="title">키즈마린파크 위치</h3>
							<div class="infomation">
								<p class="info-text">서울시 송파구 송파대로 28길 28(1층 키즈마린파크)</p>
								<p class="info-text" style="margin-top: 10px; font-family: var(--main-sb); color: var(--color);">주차안내: 주차 불가(인근 주차장 이용)</p>
							</div>
						</li>
						<li>
							<h3 class="title">키즈마린파크 정보</h3>
							<div class="infomation">
								<ul class="info-list">
									<li><span class="name">전화</span><p class="info-text2">02-6956-5278</p></li>
									<li><span class="name">팩스</span><p class="info-text2">02-6956-5279</p></li>
									<li><span class="name">이메일</span><p class="info-text2">kidsmarinepark@naver.com</p></li>
								</ul>
							</div>
						</li>
						<li>
							<h3 class="title">교통수단 정보</h3>
							<div class="infomation">
								<ul class="info-list flex-column">
									<li>
										<span class="name">지하철</span>
										<ul class="inner-info">
											<li><span class="sbw-num">3호선</span><p class="sbw-info">가락시장역 4번출구 도보 450m</p></li>
											<li><span class="sbw-num">3호선</span><p class="sbw-info">경찰병원역 1번출구 도보 400m</p></li>
											<li><span class="sbw-num">8호선</span><p class="sbw-info">가락시장역 4번출구 도보 450m</p></li>
										</ul>
									</li>
									<li>
										<span class="name">버스</span>
										<ul class="inner-info">
											<li><span class="sbw-num">지선</span><p class="sbw-info">301, 401</p></li>
											<li><span class="sbw-num">간선</span><p class="sbw-info">3219, 3319</p></li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</article>
			<article class="cont cont3">
				<div class="map-wrap">
					<iframe class="location_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.5686906195892!2d127.11881361571375!3d37.49450327981141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca5daeb12b339%3A0x80afd69c24cdb615!2z7YKk7KaI66eI66aw7YyM7YGs!5e0!3m2!1sko!2skr!4v1672894424140!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</article>
			<article class="cont cont4" id="contact_">
				<div class="inner">
					<div class="contact-wrap center">
						<div class="topText-wrap">
							<h3 class="title">문의하기</h3>
							<p class="sub-info">문의 답변은 아래 입력하신 이메일 주소로 답변이 발송됩니다.</p>
						</div>
						
						<div class="contact-list">
							<form action="?" id="contact_frm" name="contact_frm" method="post" onsubmit="return frmsubmit();">
								<div class="row flex-row">
									<span class="title">성함</span>
									<input type="text" name="contact_name" id="contact_name" class="input" placeholder="성함을 입력해주세요.">
								</div>
								<div class="row flex-row">
									<span class="title">휴대폰</span>
									<input type="tel" name="contact_tel" id="contact_tel" class="input" oninput="autoHyphen2(this)" maxlength="13" placeholder="휴대번호를 입력해주세요.">
								</div>
								<div class="row flex-row">
									<span class="title">이메일</span>
									<input type="text" name="contact_email" id="contact_email" class="input" placeholder="이메일 주소를 입력해주세요.">
								</div>
								<div class="row flex-row">
									<span class="title">접수 유형</span>
									<ul class="radio-wrap">
										<li>
											<input type="radio" name="contact_ask" id="contact_ask1" value="예약문의">
											<label for="contact_ask1">예약문의</label>
										</li>
										<li>
											<input type="radio" name="contact_ask" id="contact_ask2" value="시설문의">
											<label for="contact_ask2">시설문의</label>
										</li>
										<li>
											<input type="radio" name="contact_ask" id="contact_ask3" value="기타문의">
											<label for="contact_ask3">기타문의</label>
										</li>
									</ul>
								</div>
								<div class="row flex-column">
									<span class="title">문의</span>
									<textarea name="contact_textarea" id="contact_textarea"></textarea>
								</div>
								
								<div class="formBtn-wrap">
									<button type="submit" class="frmbtn" data-aos="fade-up">SEND</button>
								</div>
							</form>
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
<script>
	AOS.init({
		duration: 3000,
		delay: 500,
		once: true,
	});
</script>
<script>
	function frmsubmit(){
		f = document.contact_frm;
		
		if(f.contact_name.value == ''){
			alert("성함을 입력해주세요.");
			f.contact_name.focus();
			return false;
		}
		if(f.contact_tel.value == ''){
			alert("휴대번호를 입력해주세요.");
			f.contact_tel.focus();
			return false;
		}
		if(f.contact_email.value == ''){
			alert("이메일 주소를 입력해주세요.");
			f.contact_email.focus();
			return false;
		}
		if($("input[name=contact_ask]:radio:checked").length < 1){
			alert("접수유형을 선택해주세요.");
			$("input[name=contact_ask]").select();
			return false;
		}
		if(confirm("문의하기 하시겠습니까?")){
			f.action = "?";
			f.submit();
		}
	}
</script>
</html>
