<!-- Header Sub.html -->
<div id="sub-top">
	<div class="location">
		<a href="/" class="home">홈</a>
		<a href="#">메뉴1</a>
		<a href="#" class="here">메뉴2</a>
	</div>
	<div class="tit_area">
		<h2>
			<?php if(getDepthId($pagePath, 0) == "rnd"){ ?>
				<?php if(getDepthId($pagePath, 1) == "info"){ ?>
					기술혁신개발 사업안내
				<?php } else if(getDepthId($pagePath, 1) == "join"){ ?>
					기술혁신개발 회원가입 안내
				<?php } else if(getDepthId($pagePath, 1) == "invest"){ ?>
					&nbsp;
				<?php } ?>
			<?php } else if(getDepthId($pagePath, 0) == "sub2"){ ?>
				<?php if(getDepthId($pagePath, 1) == "1"){ ?>
					창업성장 투자연계멘토링과제 사업안내
				<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
					창업성장 투자연계멘토링과제 회원가입 안내
				<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
					&nbsp;
				<?php } ?>
			<?php } else if(getDepthId($pagePath, 0) == "sub4"){ ?>
				정보마당
			<?php } else if(getDepthId($pagePath, 0) == "sub5"){ ?>
				<?php if(getDepthId($pagePath, 1) == "1"){ ?>
					협의회안내
				<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
					&nbsp;
				<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
					&nbsp;
				<?php } ?>
			<?php } ?>
		</h2>
		<p>
			<?php if(getDepthId($pagePath, 0) == "rnd"){ ?>
				<?php if(getDepthId($pagePath, 1) == "info"){ ?>
					투자유망 전략제품에 대해 민간 투자유치를 조건으로 R&amp;D 및 사업화를 지원하는 사업
				<?php } else if(getDepthId($pagePath, 1) == "join"){ ?>
					투자유망 전략제품에 대해 민간 투자유치를 조건으로 R&amp;D 및 사업화를 지원하는 사업
				<?php } else if(getDepthId($pagePath, 1) == "invest"){ ?>
					&nbsp;
				<?php } ?>
			<?php } else if(getDepthId($pagePath, 0) == "sub2"){ ?>
				<?php if(getDepthId($pagePath, 1) == "1"){ ?>
					투자기관으로부터 투자연계를 조건으로 하는 투자와 멘토링이 연계된 기술개발과제
				<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
					투자기관으로부터 투자연계를 조건으로 하는 투자와 멘토링이 연계된 기술개발과제
				<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
					&nbsp;
				<?php } ?>
			<?php } else if(getDepthId($pagePath, 0) == "sub4"){ ?>
				&nbsp;
			<?php } else if(getDepthId($pagePath, 0) == "sub5"){ ?>
				<?php if(getDepthId($pagePath, 1) == "1"){ ?>
					한국벤처캐피탈협회 부설 R&amp;D사업화투자협의회
				<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
					&nbsp;
				<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
					&nbsp;
				<?php } ?>
			<?php } ?>
		
		
		</p>
	</div>
	<?php if(getDepthId($pagePath, 0) == "rnd"){ ?>
		<?php if(getDepthId($pagePath, 1) == "info"){ ?>
			<ul class="snb list3">
				<li<?php if(getDepthId($pagePath, 2) == "1"){ ?> class="on"<?php } ?>><a href="rnd-info-1.php"><span>투자연계과제안내</span></a></li>
				<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="on"<?php } ?>><a href="rnd-info-2.php"><span>진행절차 소개</span></a></li>
				<li<?php if(getDepthId($pagePath, 2) == "3"){ ?> class="on"<?php } ?>><a href="rnd-info-3.php"><span>제출서류 및 관련규정</span></a></li>
			</ul>
		<?php } else if(getDepthId($pagePath, 1) == "join"){ ?>
			<ul class="snb list2">
				<li<?php if(getDepthId($pagePath, 2) == "1"){ ?> class="on"<?php } ?>><a href="rnd-join-1.php"><span>회원가입 안내</span></a></li>
				<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="on"<?php } ?>><a href="rnd-join-2.php"><span>투자기관 회원가입</span></a></li>
			</ul>
		<?php } ?>
	<?php } else if(getDepthId($pagePath, 0) == "sub2"){ ?>
		<?php if(getDepthId($pagePath, 1) == "1"){ ?>
			<ul class="snb list3">
				<li<?php if(getDepthId($pagePath, 2) == "1"){ ?> class="on"<?php } ?>><a href="sub2-1-1.php"><span>투자연계멘토링과제안내</span></a></li>
				<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="on"<?php } ?>><a href="sub2-1-2.php"><span>진행절차 소개</span></a></li>
				<li<?php if(getDepthId($pagePath, 2) == "3"){ ?> class="on"<?php } ?>><a href="sub2-1-3.php"><span>과제평가 및 선정절차</span></a></li>
			</ul>
		<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
			
		<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
			
		<?php } ?>
	<?php } else if(getDepthId($pagePath, 0) == "sub4"){ ?>
		<ul class="snb list4">
			<li<?php if(getDepthId($pagePath, 1) == "1"){ ?> class="on"<?php } ?>><a href="sub4-1.php"><span>공지사항</span></a></li>
			<li<?php if(getDepthId($pagePath, 1) == "2"){ ?> class="on"<?php } ?>><a href="sub4-2.php"><span>자료실</span></a></li>
			<li<?php if(getDepthId($pagePath, 1) == "3"){ ?> class="on"<?php } ?>><a href="sub4-3.php"><span>FAQ</span></a></li>
			<li<?php if(getDepthId($pagePath, 1) == "4"){ ?> class="on"<?php } ?>><a href="sub4-4.php"><span>상담신청</span></a></li>
		</ul>
	<?php } else if(getDepthId($pagePath, 0) == "sub5"){ ?>
		<?php if(getDepthId($pagePath, 1) == "1"){ ?>
			<ul class="snb list2">
				<li<?php if(getDepthId($pagePath, 2) == "1"){ ?> class="on"<?php } ?>><a href="sub5-1-1.php"><span>협의회안내</span></a></li>
				<li<?php if(getDepthId($pagePath, 2) == "2"){ ?> class="on"<?php } ?>><a href="sub5-1-2.php"><span>찾아오시는길</span></a></li>
			</ul>
		<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
			
		<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
			
		<?php } ?>
	<?php } ?>
</div>
<div id="content">
<!-- //Header Sub.html -->
