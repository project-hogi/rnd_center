<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="sub-content">


<form action="">
<fieldset>
	<h3 class="point-form_title point-sub-pencil point-spot">회사정보 입력</h3>

	<table class="table table-form">
		<col width="167" />
		<col />
		<tbody>
			<tr>
				<th><label for="">회원구분</label></th>
				<td><label for="join-form-00">멘토</label><input type="radio" id="join-form-00" name="join-form-00"><label for="join-form-001" class="ml20">전문가</label><input type="radio" id="join-form-001" name="join-form-00" class=""><label for="join-form-002" class="ml20">회계법인</label><input type="radio" id="join-form-002" name="join-form-00" class=""></td>
			</tr>
			<tr>
				<th><label for="join-form-01">회원아이디</label></th>
				<td><input type="text" id="join-form-01" class="form form-lg"><a class="btn btn-default custom-button1">중복검사</a><span class="point-explain">영문,숫자,특수문자 혼합 8자 이상 12자 이내</span></td>
			</tr>
			<tr>
				<th><label for="join-form-02">비밀번호</label></th>
				<td><input type="password" id="join-form-02" class="form form-lg"></td>
			</tr>
			<tr>
				<th><label for="join-form-03">비밀번호 확인</label></th>
				<td><input type="password" id="join-form-03" class="form form-lg"></td>
			</tr>
			<tr>
				<th><label for="join-form-04">회사/소속명</label></th>
				<td><input type="text" id="join-form-04" class="form form-xl"></td>
			</tr>
			<tr>
				<th><label for="join-form-05">대표자명</label></th>
				<td><input type="text" id="join-form-05" class="form form-xl"></td>
			</tr>
			<tr>
				<th><label for="join-form-06">사업자번호</label></th>
				<td><input type="text" id="join-form-06" class="form form-xs"><span class="form-space">-</span><input type="text" class="form form-xs"><span class="form-space">-</span><input type="text" class="form form-xs"></td>
			</tr>
			<tr>
				<th><label for="join-form-07">전화번호</label></th>
				<td><input type="text" id="join-form-07" class="form form-xs"><span class="form-space">-</span><input type="text" class="form form-xs"><span class="form-space">-</span><input type="text" class="form form-xs"></td>
			</tr>
			<tr>
				<th><label for="join-form-08">팩스번호</label></th>
				<td><input type="text" id="join-form-08" class="form form-xs"><span class="form-space">-</span><input type="text" class="form form-xs "><span class="form-space">-</span><input type="text" class="form form-xs "></td>
			</tr>
		</tbody>
	</table>
	
	<h3 class="point-form_title point-sub-document point-spot1">담당자정보 입력</h3>	
	
	<table class="table table-form">
		<col width="167" />
		<col />
		<tbody>
			<tr>
				<th><label for="join-form-09">성명 (담당자1)</label></th>
				<td><input type="text" id="join-form-09" class="form form-lg"></td>
			</tr>
			<tr>
				<th><label for="join-form-10">전화번호</label></th>
				<td><input type="text" id="join-form-10" class="form form-xs"><span class="form-space">-</span><input type="text" class="form form-xs "><span class="form-space">-</span><input type="text" class="form form-xs "></td>
			</tr>
			<tr>
				<th><label for="join-form-11">이메일</label></th>
				<td><input type="text" id="join-form-11" class="form form-md"><span class="form-space">@</span><input type="text" class="form form-md "><select name="email-type1" id="" class="select ml20"><option>직접입력</option><option>Google.com</option><option>Naver.com</option></select></td>
			</tr>
		</tbody>
		<tbody>
			<tr>
				<th><label for="join-form-12">성명 (담당자2)</label></th>
				<td><input type="text" id="join-form-12" class="form form-xl"></td>
			</tr>
			<tr>
				<th><label for="join-form-13">전화번호</label></th>
				<td><input type="text" id="join-form-13" class="form form-xs"><span class="form-space">-</span><input type="text" class="form form-xs "><span class="form-space">-</span><input type="text" class="form form-xs "></td>
			</tr>
			<tr>
				<th><label for="join-form-14">이메일</label></th>
				<td><input type="text" id="join-form-14" class="form form-md"><span class="form-space">@</span><input type="text" class="form form-md "><select name="email-type1" id="" class="select ml20"><option>직접입력</option><option>Google.com</option><option>Naver.com</option></select></td>
			</tr>
		</tbody>
	</table>
	<div class="tac next-chapter">
		<a href="#none" class="btn btn-lg point-spot1 point-width-md">회원가입</a>
		<a href="#none" class="btn btn-lg point-spot2 point-width-md">다시작성</a>
	</div>
	

</fieldset>
</form>












<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>