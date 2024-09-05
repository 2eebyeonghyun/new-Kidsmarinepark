<?php $_dep = array(2,2);?>
<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/common.php"; ?>

<body class="">
	<? include $_SERVER['DOCUMENT_ROOT']."/kidsmarinepark/inc/header.php"; ?>
	
	<div id="wrap" class="sub-page">
		<section>
			<article class="sub_top-area">
				<div class="text-wrap">
					<h1 class="title">전시안내</h1>
				</div>
				<div class="visual-wrap">
					<img class="clip" src="<?=DIR?>/img/svis/svis2.png" alt="키즈마린파크 탑이미지#2">
				</div>
				<div class="svis-inner">
					<ul class="svis-step">
						<li><a href="<?=DIR?>/"><span></span><p>HOME</p></a></li>
						<li><a href="<?=DIR?>/information/"><span></span><p>이용안내</p></a></li>
						<li><a href="<?=DIR?>/information/exhibition.php"><span></span><p>전시안내</p></a></li>
					</ul>
				</div>
			</article>
		</section>
		<section class="contents">
			<article class="cont cont1">
				<div class="inner">
					<div class="text-wrap">
						<span class="nameTag">exhibition</span>
					</div>
					<div class="introduce-wrap">
						<p class="title-intro">키즈마린파크 <b class="ft-sb ft-blue">실내 체험공간을 소개</b>합니다.</p>
						<p class="sub-intro"></p>
					</div>
				</div>
			</article>
			<article class="cont cont2">
				<div class="inner">
					<div class="exhibition-planground">
						<div class="lef">
							<img class="planground-img" src="<?=DIR?>/img/information/exhibition_map.png" alt="키즈마린파크 실내공간 이미지">
							<ul class="markerbox-wrap">
								<li class="marker marker1">
									<a href="#exhibition-popup" class="innerBtn marker-1">
										<i class="maico marker-ico"></i>
										<span class="hover">
											<span class="marker-info">키즈마린파크 로비</span>
										</span>
									</a>
								</li>
								<li class="marker marker2">
									<a href="#none" class="marker-1">
										<i class="maico marker-ico"></i>
										<span class="hover">
											<span class="marker-info">1. 야호! 반가운 바다 친구들</span>
										</span>
									</a>
								</li>
								<li class="marker marker3">
									<a href="#none" class="marker-1">
										<i class="maico marker-ico"></i>
										<span class="hover">
											<span class="marker-info">2. 이상한 바다 여행</span>
										</span>
									</a>
								</li>
								<li class="marker marker4">
									<a href="#none" class="marker-1">
										<i class="maico marker-ico"></i>
										<span class="hover">
											<span class="marker-info">3. 어디에서 왔을까?</span>
										</span>
									</a>
								</li>
								<li class="marker marker5">
									<a href="#none" class="marker-1">
										<i class="maico marker-ico"></i>
										<span class="hover">
											<span class="marker-info">4. 바다생물 연구센터</span>
										</span>
									</a>
								</li>
								<li class="marker marker6">
									<a href="#none" class="marker-1">
										<i class="maico marker-ico"></i>
										<span class="hover">
											<span class="marker-info">5. 날아라 그린원정대</span>
										</span>
									</a>
								</li>
								<li class="marker marker7">
									<a href="#none" class="marker-1">
										<i class="maico marker-ico"></i>
										<span class="hover">
											<span class="marker-info">6. 돌아온 바다 친구들</span>
										</span>
									</a>
								</li>
								<li class="marker marker8">
									<a href="#none" class="marker-1">
										<i class="maico marker-ico"></i>
										<span class="hover">
											<span class="marker-info">7. 바다지킴이 스튜디오</span>
										</span>
									</a>
								</li>
								<li class="marker marker9">
									<a href="#none" class="marker-1">
										<i class="maico marker-ico"></i>
										<span class="hover">
											<span class="marker-info">8. 바다지킴이 교실</span>
										</span>
									</a>
								</li>
								<li class="marker marker10">
									<a href="#none" class="marker-1">
										<i class="maico marker-ico"></i>
										<span class="hover">
											<span class="marker-info">9. 바다와 나</span>
										</span>
									</a>
								</li>
								<li class="marker marker11">
									<a href="#none" class="marker-1">
										<i class="maico marker-ico"></i>
										<span class="hover">
											<span class="marker-info">10. 출동 바다히어로</span>
										</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="rig">
							<div class="titlebox">
								<h4>체험관 시설안내 및 상세보기</h4>
							</div>
							<ul id="exhibition-list" class="exhibition-list">
								<li>
									<h5 class="exhibition-name">1. 야호! 반가운 바다 친구들</h5>
									<div class="infomation-box">
										<div class="lef">
											<p class="exhibition-info">
												샌드크래프트로 만나는 바다와 해양보호생물! 모래를 변화시켜 물길을 만들면, 바다가 생기고 해양보호생물들이 나타나 인사합니다.<br>
												여러분이 만든 바닷길을 따라 해양보호생물들이 움직이는 모습을 살펴보아요.
											</p>
											<ul class="tag-wrap">
												<li>#해양오염</li>
												<li>#바다생물</li>
												<li>#거북이</li>
												<li>#플라스틱 줄이기</li>
											</ul>
										</div>
										<div class="rig">
											<a href="#exhibition-popup" class="innerBtn">상세보기<i class="axi axi-arrow-right"></i></a>
										</div>
									</div>
								</li>
								<li>
									<h5 class="exhibition-name">2. 이상한 바다 여행</h5>
									<div class="infomation-box">
										<div class="lef">
											<p class="exhibition-info">
												요트를 타고 떠나는 여행! 푸른 바다가 펼쳐진 하와이, 하얗고 신비로운 북극의 풍경을 상상한 우리 눈 앞에 생각지도 못한 풍경이 펼쳐집니다.<br>
												과연 무슨 일이 생긴걸까요?
											</p>
											<ul class="tag-wrap">
												<li>#해양오염</li>
												<li>#바다여행</li>
												<li>#쓰레기 섬</li>
												<li>#플라스틱 줄이기</li>
											</ul>
										</div>
										<div class="rig">
											<a href="#none" class="innerBtn">상세보기<i class="axi axi-arrow-right"></i></a>
										</div>
									</div>
								</li>
								<li>
									<h5 class="exhibition-name">3. 어디에서 왔을까?</h5>
									<div class="infomation-box">
										<div class="lef">
											<p class="exhibition-info">
												바다에 있는 쓰레기들은 어디서 왔을까요? 해양오염과 우리는 어떤 관련이 있을까요?<br>
												공이 레일을 따라 굴러가는 모습을 보며 해양오염의 원인과 결과를 알아보아요.
											</p>
											<ul class="tag-wrap">
												<li>#해양오염</li>
												<li>#해양생물</li>
												<li>#바다</li>
												<li>#플라스틱 줄이기</li>
											</ul>
										</div>
										<div class="rig">
											<a href="#none" class="innerBtn">상세보기<i class="axi axi-arrow-right"></i></a>
										</div>
									</div>
								</li>
								<li>
									<h5 class="exhibition-name">4. 바다생물 연구센터</h5>
									<div class="infomation-box">
										<div class="lef">
											<p class="exhibition-info">
												바다로 유입되는 플라스틱 쓰레기들이 바다생물의 생존과 해양생태계에 악영향을 미치고 있다는 것! 알고 있나요?<br>
												이곳 연구센터에서 우리가 버린 쓰레기로 인해 바다생물들이 얼마나 고통받고 있는지 엑스레이(X-ray)판독, 미세현미경 관찰 등의 체험을 통해 알아봅시다.
											</p>
											<ul class="tag-wrap">
												<li>#해양오염</li>
												<li>#해양생태계</li>
												<li>#해양연구센터</li>
												<li>#플라스틱 줄이기</li>
											</ul>
										</div>
										<div class="rig">
											<a href="#none" class="innerBtn">상세보기<i class="axi axi-arrow-right"></i></a>
										</div>
									</div>
								</li>
								<li>
									<h5 class="exhibition-name">5. 날아라 그린원정대</h5>
									<div class="infomation-box">
										<div class="lef">
											<p class="exhibition-info">
												친환경 미래 이동수단을 타고 그린에너지 세상으로 출발!<br>
												수소가 차세대 에너지원으로 주목받는 이유를 알아보고 여행을 떠나봅니다.<br>
												바다 위를 떠다니는 해양부유쓰레기를 수거하여 깨끗한 바다를 만들어주는 체험을 통해 우리 지구를 지켜주세요.
											</p>
											<ul class="tag-wrap">
												<li>#해양오염</li>
												<li>#친환경 미래 이동수단</li>
												<li>#그린에너지</li>
												<li>#차세대 에너지원</li>
											</ul>
										</div>
										<div class="rig">
											<a href="#none" class="innerBtn">상세보기<i class="axi axi-arrow-right"></i></a>
										</div>
									</div>
								</li>
								<li>
									<h5 class="exhibition-name">6. 돌아온 바다 친구들</h5>
									<div class="infomation-box">
										<div class="lef">
											<p class="exhibition-info">
												우리가 함께 만드는 바다 속 세상!<br>
												예술과 디지털을 융합한 화려하고 컬러풀한 미디어아트 체험을 통해 내가 꾸민 해양보호생물이 생동감있게 살아 움직이는 신기한 모습을 살펴보세요.
											</p>
											<ul class="tag-wrap">
												<li>#해양오염</li>
												<li>#미디어아트 체험</li>
												<li>#멸정위기보호생물</li>
												<li>#플라스틱 줄이기</li>
											</ul>
										</div>
										<div class="rig">
											<a href="#none" class="innerBtn">상세보기<i class="axi axi-arrow-right"></i></a>
										</div>
									</div>
								</li>
								<li>
									<h5 class="exhibition-name">7. 바다지킴이 스튜디오</h5>
									<div class="infomation-box">
										<div class="lef">
											<p class="exhibition-info">
												해양환경에 관련된 다양한 이슈 중 하나를 선택하여 바다지킴이로서 본인의 역할을 이야기해 보아요.<br>
												자신의 모습과 합성된 나만의 해양환경 포스터와 영상을 만들어 보세요.
											</p>
											<ul class="tag-wrap">
												<li>#해양환경</li>
												<li>#바다지킴이</li>
												<li>#플라스틱 줄이기</li>
											</ul>
										</div>
										<div class="rig">
											<a href="#none" class="innerBtn">상세보기<i class="axi axi-arrow-right"></i></a>
										</div>
									</div>
								</li>
								<li>
									<h5 class="exhibition-name">8. 바다지킴이 교실</h5>
									<div class="infomation-box">
										<div class="lef">
											<p class="exhibition-info">
												화면을 통하여 쓰레기 재활용이 어떻게 이루어지는지 살펴보고 컨베이어벨트에서 플라스틱 분리를 체험해보아요.<br>
												바다를 괴롭히는 쓰레기들을 정리하여 깨끗한 바다를 만드는 거죠.<br>
												정해진 시간 내 완료하면 성공!
											</p>
											<ul class="tag-wrap">
												<li>#재활용</li>
												<li>#바다지킴이</li>
												<li>#정리 정돈</li>
												<li>#플라스틱 줄이기</li>
											</ul>
										</div>
										<div class="rig">
											<a href="#none" class="innerBtn">상세보기<i class="axi axi-arrow-right"></i></a>
										</div>
									</div>
								</li>
								<li>
									<h5 class="exhibition-name">9. 바다와 나</h5>
									<div class="infomation-box">
										<div class="lef">
											<p class="exhibition-info">
												거울로 된 방에서 끝없이 펼쳐지는 바다를 만나고, 바다와 하나가 되어보세요.<br>
												우리의 발걸음을 따라 움직이는 해양생물의 신기한 모습을 관찰하고 느껴보아요.
											</p>
											<ul class="tag-wrap">
												<li>#거울방</li>
												<li>#바다생물</li>
											</ul>
										</div>
										<div class="rig">
											<a href="#none" class="innerBtn">상세보기<i class="axi axi-arrow-right"></i></a>
										</div>
									</div>
								</li>
								<li>
									<h5 class="exhibition-name">10. 출동 바다히어로</h5>
									<div class="infomation-box">
										<div class="lef">
											<p class="exhibition-info">
												키즈마린파크에서의 체험을 기억하며 포토타임을 가져보아요.<br>
												바다지킴이로 변신한 멋진 모습을 사진 속에 담아봅시다.<br>
												준비되셨나요? 하나, 둘, 셋! ‘우리는 바다히어로!’
											</p>
											<ul class="tag-wrap">
												<li>#포토존</li>
												<li>#바다지킴이</li>
												<li>#바다친구들</li>
											</ul>
										</div>
										<div class="rig">
											<a href="#none" class="innerBtn">상세보기<i class="axi axi-arrow-right"></i></a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</article>
		</section>
		
		<div class="exhibtion_popLayer">
			<div class="popup-backBG"></div>
			<div id="exhibition-popup" class="exhibtion_popLayer2">
				<div class="pop-container">
					<div class="popup-contents">
						<div class="popImg-wrap">
							<img src="<?=DIR?>/img/information/exhibition/exhibition01.png" alt="야호! 반가운 바다 친구들">
						</div>
						<div class="text-wrap">
							<h4 class="exhibition-name">야호! 반가운 바다 친구들</h4>
							<p class="infomation">
								샌드크래프트로 만나는 바다와 해양보호생물! 모래를 변화시켜 물길을 만들면, 바다가 생기고 해양보호생물들이 나타나 인사합니다. 여러분이 만든 바닷길을 따라 해양보호생물들이 움직이는 모습을 살펴보아요.
							</p>
							<ul class="tag_list">
								<li>#해양오염</li>
								<li>#바다생물</li>
								<li>#거북이</li>
								<li>#플라스틱 줄이기</li>
							</ul>
						</div>
						<div class="popBtn-wrap">
							<a href="#" class="btn-layerClose innerBtn">창 닫기</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
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
	$('.innerBtn').click(function(e) {
		e.preventDefault();
		
		var $href = $(this).attr('href');
		var body = $('body');
		
		layer_popup($href);
		body.toggleClass('on');
	});

	function layer_popup(el) {

		var $el = $(el); //레이어의 id를 $el 변수에 저장
		var isDim = $el.prev().hasClass('popup-backBG'); //dimmed 레이어를 감지하기 위한 boolean 변수

		isDim ? $('.exhibtion_popLayer').fadeIn() : $el.fadeIn();

		var $elWidth = ~~($el.outerWidth()),
			$elHeight = ~~($el.outerHeight()),
			docWidth = $(document).width(),
			docHeight = $(document).height();

		// 화면의 중앙에 레이어를 띄운다.


		$el.find('a.btn-layerClose').click(function() {
			isDim ? $('.exhibtion_popLayer').fadeOut() : $el.fadeOut(); // 닫기 버튼을 클릭하면 레이어가 닫힌다.
			return false;
		});

		$('.layer .popup-backBG').click(function() {
			$('.exhibtion_popLayer').fadeOut();
			return false;
		});

	}
</script>
</html>
