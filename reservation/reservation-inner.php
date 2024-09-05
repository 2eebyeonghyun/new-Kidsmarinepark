<?php $_dep = array(3,);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>

	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">예약하기</h1>
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
						<h3 class="table-name">예약날짜 및 시간</h3>
						<table class="reservation-table">
							<tbody>
								<tr>
									<th>예약날짜</th>
									<td>2023년 01월 13일</td>
								</tr>
								<tr>
									<th>회차</th>
									<td>2회차 13:00 - 15:00 PM</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</article>
			<article class="cont cont2">
				<div class="inner">
					<form action="<?=DIR?>/reservation/completion.php" name="reservationInnerFrm" id="reservationInnerFrm" class="reservationInnerFrm" method="post" onsubmit="return checkedfrm();">
						<div class="row">
							<h3 class="res_title">(필수) 개인정보 수집 및 이용에 관한 동의사항</h3>
							<div class="infomation-box">
								<ul>
									<li>
										<strong class="main-title">Ⅰ. 개인정보의 수집 및 이용 목적</strong>
										<ul>
											<li><span>·</span>
												<p>키즈마린파크 어린이해양환경체험관이 제공하는 서비스를 이용하기 위해 필요한 최소한의 개인정보를 수집하고 있으며 개인정보의 수집 및 이용 목적 외의 다른 목적으로 사용되지 않습니다.</p>
											</li>
											<li><span>·</span>
												<p>관람시간 기준 24시간 이전 예약 시 알림메세지 발송</p>
											</li>
											<li><span>·</span>
												<p>관람시간 기준 24시간 이내 예약 시 알림메세지 미발송</p>
											</li>
											<li><span>·</span>
												<p>협의할 내용은 입력하신 휴대폰으로 전화 안내됩니다.</p>
											</li>
										</ul>
									</li>
									<li>
										<span class="title">1. 개인정보 수집항목 및 수집 · 이용 목적</span>
										<ul class="sub">
											<li><span>가.</span>
												<p>수집 · 이용하려는 개인정보의 항목 : 신청자명, 연락처</p>
											</li>
											<li><span>나.</span>
												<p>수집하는 개인정보 항목 : 신청자명, 연락처, 단체명, 단체전화번호, 예약인원, 연령대</p>
											</li>
										</ul>
									</li>
									<li>
										<span class="title">2. 개인정보 보유 및 이용기간</span>
										<ul class="sub">
											<li><span>가.</span>
												<p>개인정보 수집 후 1년</p>
											</li>
										</ul>
									</li>
									<li>
										<span class="title">3. 홈페이지 유지보수 및 알림톡/SMS 위탁업체: (주)한커뮤니케이션</span>
										<ul class="sub">
											<li><span>가.</span>
												<p>홈페이지 유지보수 처리를 위탁하며 개인정보 사용권을 제공하지 않습니다.</p>
											</li>
										</ul>
									</li>
									<li>
										<span class="title">4. 동의를 거부할 관리</span>
										<ul class="sub">
											<li><span>가.</span>
												<p>이용자는 개인정보 수집 및 이용에 관한 동의를 거부할 권리가 있으며 동의 거부 시에는 해당 서비스를 이용할 수 없습니다.</p>
											</li>
										</ul>
									</li>
									<li>
										<span class="title">5. 키즈마린파크 어린이해양환경체험관은 개인정보 보호를 위해 최선의 노력을 기울이고 있습니다.</span>
									</li>
									<li>
										<span class="title">6. 여러분의 개인정보는 동의 없이 공개되지 않으며 개인정보 보호정책에 의해 보호받고 있습니다.</span>
									</li>
								</ul>
							</div>
							<div class="checkbox-wrap">
								<label>
									<input type="checkbox" name="selectChk" id="agreement">
									개인정보 수집 및 이용에 대해 동의합니다.
								</label>
							</div>
						</div>
						<div class="row">
							<h3 class="res_title">(필수) 안전관리동의서</h3>
							<div class="infomation-box">
								<ul>
									<li><span class="title">본 체험관의 개인, 단체 관람 및 프로그램 이용 시, 교육생 인솔 관리 및 안전지도의 모든 책임은 신청 기관 및 보호자에게 있습니다.</span></li>
									<li><span class="title">본 체험관에서는 체험활동 중 발생하는 안전사고에 대하여 영업배상책임보험에 가입하고 있으나, 상황에 따라 본인 부담금이 발생할 수 있습니다.</span></li>
								</ul>
							</div>
							<div class="checkbox-wrap">
								<label>
									<input type="checkbox" name="selectChk" id="agreement2">
									위 안전관리동의서에 동의합니다.
								</label>
							</div>
						</div>
						<div class="row">
							<h3 class="res_title">(선택) 촬영동의서</h3>
							<div class="infomation-box">
								<ul>
									<li><span class="title">본 체험관에서는 관람 및 프로그램에 참여하는 모든 관람자 및 인솔자에 대해 활동 위주의 사진이나 동영상 촬영을 실시할 수 있으며, 촬영된 자료는 본 체험관 홈페이지, 게시판, 보고서, 소식지 등에 사용됩니다.</span></li>
								</ul>
							</div>
							<div class="checkbox-wrap">
								<label>
									<input type="checkbox" name="selectChk" id="agreement3">
									위 촬영동의서에 동의합니다.
								</label>
							</div>
						</div>
						
						<div class="row">
							<div class="allcheckbox-wrap">
								<label>
									<input type="checkbox" name="selectChk" id="checkk" value="selectall" onclick="selectAll(this)">체크항목 전체 동의합니다.
								</label>
							</div>
						</div>
						
						<div class="row last-row">
							<h3 class="res_title">신청자 정보입력</h3>
							<div class="PI-table">
								<div class="table-row">
									<ul>
										<li>
											<span class="title">예약자</span>
											<input type="text" name="user_name" id="user_name" class="imp_ inputBox">
										</li>
										<li>
											<span class="title">휴대전화번호</span>
											<input type="tel" name="user_tel" id="user_tel" class="imp_ inputBox" oninput="autoHyphen2(this)" maxlength="13" placeholder="입력 시 '-'는 기입하실 필요 없습니다.">
										</li>
									</ul>
								</div>
								<div class="table-row">
									<ul>
										<li>
											<span class="title">단체예약명</span>
											<input type="text" name="user_group" id="user_group" class="imp_ inputBox">
										</li>
										<li>
											<span class="title">단체전화번호</span>
											<input type="tel" name="group_tel" id="group_tel" class="imp_ inputBox" oninput="autoHyphen2(this)" maxlength="13" placeholder="입력 시 '-'는 기입하실 필요 없습니다.">
										</li>
									</ul>
								</div>
								<div class="table-row w-100">
									<ul>
										<li>
											<span class="title">신청인원(어린이)</span>
											<ul class="person-wrap">
												<li>
													<span class="person-text">6세</span>
													<input type="tel" name="person_kids_1" id="person_kids_1" class="imp_ sub-input" oninput="number(this)" maxlength="2" placeholder="0명">
												</li>
												<li>
													<span class="person-text">7세</span>
													<input type="tel" name="person_kids_2" id="person_kids_2" class="imp_ sub-input" oninput="number(this)" maxlength="2" placeholder="0명">
												</li>
												<li>
													<span class="person-text">8세</span>
													<input type="tel" name="person_kids_3" id="person_kids_3" class="imp_ sub-input" oninput="number(this)" maxlength="2" placeholder="0명">
												</li>
												<li>
													<span class="person-text">9세</span>
													<input type="tel" name="person_kids_4" id="person_kids_4" class="imp_ sub-input" oninput="number(this)" maxlength="2" placeholder="0명">
												</li>
												<li>
													<span class="person-text">10세</span>
													<input type="tel" name="person_kids_5" id="person_kids_5" class="imp_ sub-input" oninput="number(this)" maxlength="2" placeholder="0명">
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="table-row">
									<ul>
										<li>
											<span class="title">신청인원(인솔자)</span>
											<input type="text" name="person_teacher" id="person_teacher" class="imp_ inputBox" oninput="number(this)" maxlength="2" placeholder="0명">
											<p class="information">* 어린이 10명당 인솔자 1명 권장</p>
										</li>
										<li>
											<span class="title">총 인원 수</span>
											<input type="tel" name="person_total" id="person_total" class="inputBox" placeholder="0명">
										</li>
									</ul>
								</div>
								<div class="table-row w-100">
									<ul>
										<li>
											<span class="title">기타문의사항</span>
											<textarea name="res_boardBox" id="res_boardBox" class="inputText" placeholder="기타 문의사항을 입력해 주세요."></textarea>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="reserv-btn">
							<button type="submit" class="reserveBtn" onclick="return checked();">예약하기</button>
							<a href="javascript:history.back()" class="cancleBtn">취소하기</a>
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
<script>
    function selectAll(selectAll)  {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        
        checkboxes.forEach((checkbox) => {
            checkbox.checked = selectAll.checked;
        })
    }
</script>
<script>
	function checkedfrm() {
		var f = document.reservationInnerFrm;

		if (!f.agreement.checked) {
			alert('개인정보 수집및 이용에 대해 체크해주세요.');
			return false;
		}
		if (!f.agreement2.checked) {
			alert('안전관리 동의서를 체크해주세요.');
			return false;
		}
		if ($.trim($("#user_name").val()) == '') {
			alert("예약자 성명을 입력해주세요.");
			$("#user_name").select();
			return false;
		}
		if ($.trim($("#user_tel").val()) == '') {
			alert("휴대전화번호를 입력해주세요.");
			$("#user_tel").select();
			return false;
		}
		if ($.trim($("#user_tel").val()).length < 10 || $.trim($("#user_tel").val()).length > 13) {
			alert("휴대번호는 10~13자리 입니다.");
			$("#user_tel").select();
			return false;
		}
		if ($.trim($("#user_group").val()) == '') {
			alert("단체예약명을 입력해주세요.");
			$("#user_group").select();
			return false;
		}
		if ($.trim($("#group_tel").val()) == '') {
			alert("단체 전화번호를 입력해주세요.");
			$("#group_tel").select();
			return false;
		}
		if ($.trim($("#person_teacher").val()) < '1') {
			alert("인솔자는 1명이상이 필요합니다.");
			$("#person_teacher").select();
			return false;
		}

		if (confirm("예약 신청 하시겠습니까?")) {

		} else {
			return false;
		}
	}

</script>

</html>
