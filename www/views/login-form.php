<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="sub-content">
    <div id="login-box">
        <h1>기술헉신 로그인  <span>신청기업</span></h1>
        <div class="text-box">
            <p>중소기업기술혁신개발사업 투자연계과제를 신청 완료하셨습니까?<br>
                협의회에서 안내 받으신 아이디와 임시비밀번호를 입력하시고,
                비밀번호 변경 후 신청 기업정보(투자심사신청)를 입력하세요.</p>
            <span class="point-login">기술혁신개발사업 투자연계과제 신청기업</span>
        </div>
        <div class="form-login">
            <form action="">
                <table cellpadding="0">
                    <tbody>
                    <tr>
                        <th><label for="form-login-id">아이디</label></th>
                        <td width="150"><input type="text" id="form-login-id" class=""/></td>
                        <td rowspan="3"><a href="#none" class="btn btn-login"/><span class="sr-only">로그인</span></td>
                    </tr>
                    <tr style="margin-top:20px;">
                        <th width="150"><label for="form-login-id">비밀번호</label></th>
                        <td><input type="password" id="form-login-id" class=""/></td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <a href="#none" class="btn btn-login-close"><span class="sr-only">close</span></a>
    </div>
    <!-- /#login-box -->
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>