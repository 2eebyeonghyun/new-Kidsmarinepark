<?php $_dep = array(3,3);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>
	
	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">예약확인</h1>
				</div>
				<div class="visual-wrap">
					<img class="clip" src="<?=DIR?>/img/svis/svis3.png" alt="키즈마린파크 탑이미지#3">
				</div>
				<div class="svis-inner">
					<ul class="svis-step">
						<li><a href="<?=DIR?>/"><span></span><p>HOME</p></a></li>
						<li><a href="<?=DIR?>/reservation/reservation-1.php"><span></span><p>예약 및 확인</p></a></li>
						<li><a href="<?=DIR?>/reservation/check-reservation.php"><span></span><p>예약확인</p></a></li>
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
						<p class="title-intro"></p>
					</div>
				</div>
			</article>
			<article class="cont cont2">
				<div class="inner">
					<div class="reservation-checkBox">
						<div class="textBox_">
							<h3 class="check-title">예약확인하기</h3>
							<p class="check-info">휴대폰번호를 입력하시면 예약날짜를 확인할 수 있습니다.</p>
						</div>
						
						<form action="?" name="checkreservefrm" id="checkreservefrm" class="checkreservefrm" method="post" onsubmit="return searchfrm();">
							<div class="topbox">
								<ul class="seachbox">
									<li>
										<span class="row-name">신청자 성함</span>
										<input type="text" class="check_name" name="check_name" id="check_name">
									</li>
									<li>
										<span class="row-name">휴대전화번호</span>
										<input type="tel" class="check_tel" name="check_tel" id="check_tel" oninput="autoHyphen2(this)" maxlength="13">
									</li>
								</ul>
								<button type="submit" class="searchBtn">검색</button>
							</div>
						</form>
					</div>
				</div>
			</article>
			<article class="cont cont3">
				<div class="inner">
					<div class="user_reservation" id="user_reservation">
						<ul class="noticeNav_">
							<li class="active date-area"><a href="#none">신청일자</a></li>
							<li class="active date-area2"><a href="#none">신청기간</a></li>
							<li class="active person-number"><a href="#none">신청인원</a></li>
							<li class="active reserveStatus"><a href="#none">예약상태</a></li>
						</ul>
						
						<div class="userReserve_contents">
							<div class="row">
								<ul>
									<li><p class="subject">2023-01-10</p></li>
									<li><p class="subject">2회차(13:30 - 15:00 PM)</p></li>
									<li><p class="subject">2명</p></li>
									<li><a href="#none" class="btn cancle" onclick="javascript:canclebtn();">취소하기</a></li>
								</ul>
							</div>
							<div class="row">
								<ul>
									<li><p class="subject">2023-01-18</p></li>
									<li><p class="subject">3회차(15:30 - 17:00 PM)</p></li>
									<li><p class="subject">4명</p></li>
									<li><a href="#none" class="btn comple">취소완료</a></li>
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
<script>
	function searchfrm() {
		var f = document.checkreservefrm;
		
		if ($.trim($("#check_name").val()) == '') {
			alert("예약자 성명을 입력해주세요.");
			$("#check_name").select();
			return false;
		}
		if ($.trim($("#check_tel").val()) == '') {
			alert("예약자 휴대번호를 입력해주세요.");
			$("#check_tel").select();
			return false;
		}
	}
</script>
<script>
	let click = document.querySelector('.searchBtn');
	click.onclick = function() {
		$('.user_reservation').css('display', 'block');
	}
</script>
<script>
	function canclebtn(){
		var result = confirm("예약을 취소하시겠습니까?");
		
		if(result == true){
			alert("예약을 취소하셨습니다.");
			location.reload();
		}else{
			alert("취소를 선택하셨습니다.");
		}
	}
</script>
</html>
