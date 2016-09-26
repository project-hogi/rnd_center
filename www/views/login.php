<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="sub-content">
    <ul class="login-option-check">
        <li class="eq-01 on">
            <a href="#none">
                <span>신청기업</span>
            </a>
        </li>
        <li class="eq-02">
            <a href="#none">
                <span>선정기업(지원)</span>
            </a>
        </li>
        <li class="eq-03">
            <a href="#none">
                <span>투자기관</span>
            </a>
        </li>
        <li class="eq-04">
            <a href="#none">
                <span>선정기업(창업)</span>
            </a>
        </li>
        <li class="eq-05">
            <a href="#none">
                <span>멘토</span>
            </a>
        </li>
        <li class="eq-06">
            <a href="#none">
                <span>전문</span>
            </a>
        </li>
        <li class="eq-07">
            <a href="#none">
                <span>회계법인</span>
            </a>
        </li>
    </ul>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>