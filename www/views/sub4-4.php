<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="sub-content">


<h3 class="point-check">상담신청</h3>
<form action="">
<table class="table-primary">
<tr>
	<th><label for="form1-address">보낸주소</label></th>
	<td class="tal"><input type="" name="" class="form form-500" id="form1-address"></td>
</tr>
<tr>
	<th><label for="form1-name">보낸사람(업체명)</label></th>
	<td class="tal"><input type="text" class="form form-500" id="form1-name"/></td>
</tr>
<tr>
	<th><label for="form1-title">제목</label></th>
	<td class="tal"><input type="text" class="form form-500" id="form1-title"/></td>
</tr>
<tr>
	<th><label for="form1-content">내용</label></th>
	<td class="tal"><textarea name="" class="form" cols="84" rows="10" id="form1-content"></textarea></td>
</tr>
</table>
<p class="tar next-chapter">
<a href="" class="btn btn-md btn-default point-spot1">보내기</a>
<a href="" class="btn btn-md btn-default point-spot">취소</a>
</p>
</form>





<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>