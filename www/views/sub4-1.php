<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <?php require "part/header-sub.php"; ?>
      <div class="sub-content">
        <h3 class="point-check">공지사항</h3>
        <div class="board-default">
          <table class="table table-striped table-primary">
            <thead>
            <th width="57">번호</th>
              <th>구분</th>
              <th>제목</th>
              <th>대상</th>
              <th>등록일</th>
              <th>조회수</th>
                </thead>
            <tbody>
              <tr>
                <td>92</td>
                <td>기술혁신</td>
                <td class="tal ti10"><a href="sub4-1-detail.php">「기술혁신개발사업 투자연계과제」사후지원 ...</a></td>
                <td>'08~15년도 주관기관 전체(총 323개 과제)</td>
                <td>2016-06-22</td>
                <td>43</td>
              </tr>
              <tr>
                <td>91</td>
                <td>일반</td>
                <td class="tal ti10"><a href="sub4-1-detail.php">중소중견기업 M&amp;A컨퍼런스 개최 안내</a></td>
                <td>전체</td>
                <td>2016-06-22</td>
                <td>10</td>
              </tr>
              <tr>
                <td>90</td>
                <td>일반</td>
                <td class="tal ti10"><a href="sub4-1-detail.php">[입찰공고] 정부위탁 사업 운영을 위한 회계법..</a></td>
                <td>회계법인</td>
                <td>2016-06-22</td>
                <td>35</td>
              </tr>
              <tr>
                <td>89</td>
                <td>일반</td>
                <td class="tal ti10"><a href="sub4-1-detail.php">2016년 「강원 벤처투자로드쇼」개최안내</a></td>
                <td>전체</td>
                <td>2016-06-22</td>
                <td>37</td>
              </tr>
              <tr>
                <td>88</td>
                <td>일반</td>
                <td class="tal ti10"><a href="sub4-1-detail.php">중소기업중앙회_16년 정부 R&amp;D지원사업 활용 ...</a></td>
                <td>전체</td>
                <td>2016-06-22</td>
                <td>99</td>
              </tr>
              <tr>
                <td>87</td>
                <td>기술혁신</td>
                <td class="tal ti10"><a href="sub4-1-detail.php">2016년도 중소기업 기술혁신개발사업 투자연계..</a></td>
                <td>과제 참여희망기업 및 투자기관 등</td>
                <td>2016-06-22</td>
                <td>178</td>
              </tr>
              <tr>
                <td>86</td>
                <td>기술혁신</td>
                <td class="tal ti10"><a href="sub4-1-detail.php">15년도 이머징 테크놀로지 포럼 개최 안내</a></td>
                <td>투자자</td>
                <td>2016-06-22</td>
                <td>27</td>
              </tr>
              <tr>
                <td>85</td>
                <td>창업성장</td>
                <td class="tal ti10"><a href="sub4-1-detail.php">15년도 멘토(투자자) 컨퍼런스 개최 안내</a></td>
                <td>투자자</td>
                <td>2016-06-22</td>
                <td>49</td>
              </tr>
              <tr>
                <td>84</td>
                <td>창업성장</td>
                <td class="tal ti10"><a href="sub4-1-detail.php">15년도 창업성장기술개발사업 주관기관 세미나..</a></td>
                <td>선정기업</td>
                <td>2016-06-22</td>
                <td>41</td>
              </tr>
              <tr>
                <td>83</td>
                <td>창업성장</td>
                <td class="tal ti10"><a href="sub4-1-detail.php">"SK텔레콤 4기 브라보리스타트 창업공모...</a></td>
                <td>기업</td>
                <td>2016-06-22</td>
                <td>15</td>
              </tr>
            </tbody>
          </table>
          <!-- /.table-primary -->
          
          <div class="board-pager fll">
            <div class="detail"> <a href="#none" class="on">1</a> <a href="#none">2</a> <a href="#none">3</a> <a href="#none">4</a> <a href="#none">5</a> <a href="#none">6</a> <a href="#none">7</a> <a href="#none">8</a> <a href="#none">9</a> <a href="#none">10</a> </div>
            <div class="control"> <a href="#none" class="prev"></a><a href="#none" class="next"></a> </div>
          </div>
          <div class="search flr">
            <select name="" id="" class="select select-type2 form-xs">
              <option>제목+내용</option>
              <option>제목+내용</option>
              <option>제목+내용</option>
              <option>제목+내용</option>
              <option>제목+내용</option>
            </select>
            <input type="text" id="search-bar" class="form form-md">
            <label for="search-bar" class="sr-only">검색창</label>
            <a href="#none" class="btn-search"><span class="sr-only">검색</span></a> </div>
        </div>
        <?php require "part/footer-sub.php"; ?>
    <?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>