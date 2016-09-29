<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="sub-content">
<h3 class="point-check">투자연계과제 안내</h3>

<img src="<?php echo $config["resourcesDir"]; ?>/images/page/sub1-1-1.jpg" alt="미래 성장유망 20대 전략분야 중 벤처캐피탈이 선정한 투자유망 전략제품에 대해 민간 투자유치를 조건으로 R&D 및 사업화를 지원하는 사업" />




<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>