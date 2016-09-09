<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>

<div id="visual">
	<div class="visual-content">
		<ul>
			<li>
				
				<a href="#none" class="btn-visual">협의회 안내 바로가기 <span>&gt;</span></a>
			</li>
		</ul>
		<div class="visual-pager">
			<a href="#none"></a>
			<a href="#none"></a>
			<a href="#none"></a> 
		</div>
		<div class="visual-control">
			<a href="#prev" class="btn-prev"><span class="sr-only">이전</span></a>
			<a href="#next" class="btn-next"><span class="sr-only">다음</span></a>
		</div>
	</div>
</div>
<!-- /#visual -->
<div class="main-banner">
	<ul>
		<li class="eq-01">
			<a href="#none">
				<strong>투자지원사업</strong>
				<p>바로가기<span class="spot">&gt;</span></p>
			</a>
		</li>
		<li class="eq-02">
			<a href="#none">
				<strong>기술혁신 투자연계</strong>
				<p>바로가기<span class="spot">&gt;</span></p>
			</a>
		</li>
		<li class="eq-03">
			<a href="#none">
				<strong>창업성장 투자연계</strong>
				<p>바로가기<span class="spot">&gt;</span></p>
			</a>
		</li>
		<li class="eq-04">
			<a href="#none">
				<strong>Online IR</strong>
				<p>바로가기<span class="spot">&gt;</span></p>
			</a>
		</li>
	</ul>
</div>
<!-- /.main-banner -->
<div class="container">
<div class="row" id="content">
	<div class="con1 col-xs-4">
		<h3><strong>공지사항</strong></h3>
		<ul>
			<li>
				<a href="#none">
					[입찰공고] 정부위탁 사업 운영을 위한 회계법...
				</a>
				<img src="<?php echo $config["resourcesDir"]; ?>/images/main/con1-1.png" alt="2015년 이머징 테크놀로지 포럼 개최 안내" />
				<span class="date">2016.08.18</span>
			</li>
			<li>
				<a href="#none">
					2016년 「강원 벤처투자로드쇼」개최안내
				</a>
				<span class="date">2016.02.12</span>
			</li>
			<li>
				<a href="#none">
					2016년도 중소기업 기술혁신개발사업 투자연계...
				</a>
				<span class="date">2016.02.08</span>
			</li>
			<li>
				<a href="#none">
					중소기업중앙회 16년 정부 R&amp;D지원사업 활용...
				</a>
				<span class="date">2016.02.06</span>
			</li>
		</ul>
		<a href="#more" class="btn-more">더보기 <span class="spot">&gt;</span></a>
	</div>
	<div class="con2 col-xs-4">
		<h3><strong>행사일정</strong></h3>
		<ul>
			<li>
				<div class="day">
					<strong>18</strong>
					<span>06.05월</span>
				</div>
				<a href="#none">
					전기·수소차 개발 산실, 울산그린카기술센터 개소 예정
				</a>
				<span>울산그린카기술센터</span>
			</li>
			<li>
				<div class="day">
					<strong>14</strong>
					<span>06.03월</span>
				</div>
				<a href="#none">
					'R&amp;D 성과를 시장으로' 대학 기술사업화
				</a>
				<span>대학 TMC(기술관리센터)</span>
			</li>
			<li>
				<div class="day on">
					<strong>06</strong>
					<span>06.05월</span>
				</div>
				<a href="#none">
					유전체 교정 기술벤처 툴젠, 희귀난치 유전질환 치료제 개발!
				</a>
				<span>최병옥 성균관대 의대 교수</span>
			</li>
			<li>
				<div class="day">
					<strong>02</strong>
					<span>06.03월</span>
				</div>
				<a href="#none">
					사물인터넷(IoT) 기술 적용 공기질 측정기에어가드 K OAQ 스테이션
				</a>
				<span>LG유플러스 &amp; 케이웨더</span>
			</li>
		</ul>
		<a href="#more" class="btn-more">더보기 <span class="spot">&gt;</span></a>
	</div>
	<div class="con3 banner col-xs-4">
		<div class="banner1">
			<a href="#none" class="btn-join">등록하기</a>
		</div>
		<div class="banner2 roll-banner">
			<a href="#none"><span class="sr-only">간편서비스 이메일상담 신청하기</span></a>
			<div class="roll-banner-pager">
				<a href="#none" class="on"></a>
				<a href="#none"></a>
				<a href="#none"></a>
			</div>
		</div>
	</div>
	<div class="con4 col-xs-4">
		<a href="#none">
			<h3>벤처투자 <strong>로드쇼</strong></h3>
			<p>우수기업 발굴을 통한 지방투자 촉진 및<br>투자유치에 대한 정보네크워크</p>
			<span class="btn-next"></span>
		</a>
	</div>
	<div class="con5 col-xs-4">
		<a href="#none">
			<h3>벤처투자 <strong>사랑방</strong></h3>
			<p>정보제공을 통한 상호간 이해증진 및 <br>상생도모 공간입니다.</p>
			<span class="btn-next"></span>
		</a>
	</div>
	<div class="con6 col-xs-4">
		<a href="#none">
			<h3>중소기업청 <strong>멘토링</strong></h3>
			<p>투자와 멘토링이 연계된 중소기업을 위한<br>기술개발지원사업</p>
			<span class="btn-next"></span>
		</a>
	</div>
	
</div>
<!-- /.row -->


<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>















