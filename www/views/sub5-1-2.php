<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>


<div class="tac"><img src="<?php echo $config["resourcesDir"]; ?>/images/page/sub5-1-2.jpg" alt="R&amp;D사업화투자협의회 지도" class="way_map"></div>


<div class="sub-content">
<div class="way-address">
<span class="image-1"></span>
<h3 class="title">주소안내</h3>

<p><strong>주소 :</strong> 06595 서울특별시 서초구 서초대로 45길 16 VR빌딩 R&amp;D사업화투자협의회</p>

<h4>R&amp;D 사업화투자협의회가 위치한 건물은 <strong class="spot">차량5부제를 시행</strong>하고 있습니다. 
대중교통을 이용해 주시기 바랍니다.</h4>
</div>
<div class="way-address">
<span class="image-2"></span>
<h3 class="title">교통편안내</h3>

<p><strong>지하철 :</strong> 지하철 2호선 서초역 하차, 7번 출구로 나오셔서 약 300미터 거리(4분 소요)</p>
<p><strong>버스 :</strong> 파란간선 730, 초록지선 시내버스 406,3412,5413, 초록지선 마을버스 02,09
그 외 교대역과 서초역 사이 정차버스 11,12,21</p>

</div>
</div>

<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>