<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="sub-content">
<h3 class="point-check">투자연계멘토링과제 사업 안내</h3>


<img src="<?php echo $config["resourcesDir"]; ?>/images/page/sub2-1-2.png" alt="진행절차 소개 다이어그램" />






<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>