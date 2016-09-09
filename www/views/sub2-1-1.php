<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="sub-content">
<h3 class="point-check">투자연계멘토링과제 사업 안내</h3>

<img src="<?php echo $config["resourcesDir"]; ?>/images/page/sub2-1-1.jpg" alt="창업기업의 지속적인 성장을 촉진하고, 일자리 창출을 도모하기 위해 투자기관으로부터 투자연계를 조건으로 하는 투자와 멘토링이 연계된 기술개발과제" />







<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>