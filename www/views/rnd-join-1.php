<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="sub-content">
<h3 class="point-check">회원가입안내</h3>
<h4 class="point-low next-chapter">기술혁신개발사업 투자연계과제 신청기업</h4>

<ul class="listbox-default">
	<li>ㆍ 온라인 회원가입은 과제접수 완료 후 협의회 관리자가 직접 등록하여 ID와 임시비밀번호를 신청기업 담당자께 안내드립니다.</li>
	<li>ㆍ ID와 임시비밀번호를 부여 받으신 후 로그인하시어 기업 상세정보 및 투자유치관련 작성내용을 입력하시면 됩니다.</li>
</ul>

<h4 class="point-low next-chapter">투자기관</h4>
<ul class="listbox-default">
	<li>ㆍ 가입신청서를 다운로드 받은 후  작성하여 투자기관 명판 및 인감 날인합니다.</li>
	<li>ㆍ 가입신청서를 Fax로 송부합니다.(02-2156-2140) <a href="#none" class="btn-sm btn-primary btn-download">회원가입 신청서</a></li>
	<li>ㆍ 협의회 담당자가 ID와 패스워드 등록 후 안내드립니다.</li>
	<li>ㆍ 부여 받은 ID와 비밀번호로 로그인하여 회사 상세정보를 입력합니다.</li>
	<li>ㆍ 투자유치를 신청한 기업들의 정보를 열람합니다.</li>
</ul>


<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>