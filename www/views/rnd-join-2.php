<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
    <?php require "part/header-sub.php"; ?>
      <div class="sub-content">
        <form action="">
          <fieldset>
            <h3 class="point-form_title point-sub-pencil point-spot mb0">회사정보 입력</h3>
            <table class="table table-form">
            <caption class="tar"><span class="hot-point">*</span>표시는 필수항목입니다. 반드시 기입해주세요</caption>
              <col width="167" />
              <col />
              <tbody>
                <tr>
                  <th><label for="join-form-1-01">회원아이디</label><span class="hot-point">*</span></th>
                  <td><input type="text" id="join-form-1-01" class="form form-lg">
                    <a class="btn btn-default custom-button1">중복검사</a><span class="point-explain">(영문 6자 이상 12자 이내 가능)</span></td>
                </tr>
                <tr>
                  <th><label for="join-form-1-02">비밀번호</label><span class="hot-point">*</span></th>
                  <td><input type="password" id="join-form-1-02" class="form form-lg"><span class="point-explain ml20">* (영문 숫자 포함 8자 이상 16자 이내가능)</span></td>
                </tr>
                <tr>
                  <th><label for="join-form-1-03">비밀번호 확인</label><span class="hot-point">*</span></th>
                  <td><input type="password" id="join-form-1-03" class="form form-lg"></td>
                </tr>
                <tr>
                  <th><label for="join-form-1-04">회사/소속명</label><span class="hot-point">*</span></th>
                  <td><input type="text" id="join-form-1-04" class="form form-xl"></td>
                </tr>
                <tr>
                  <th><label for="join-form-1-05">사업자등록번호</label><span class="hot-point">*</span></th>
                  <td>
                  	<input type="text" id="join-form-1-05" class="form form-xl">
                  </td>
                </tr>
                <tr>
                  <th><label for="join-form-1-06">대표자명</label><span class="hot-point">*</span></th>
                  <td><input type="text" id="join-form-1-06" class="form form-xl"></td>
                </tr>
                <tr>
                  <th><label for="join-form-1-07">전화번호</label><span class="hot-point">*</span></th>
                  <td><select name="join-form-1-07" id="join-form-1-07" class="select form-xs select-type1">
                      <option value="">02</option>
                      <option value="">031</option>
                      <option value="">032</option>
                      <option value="">033</option>
                      <option value="">041</option>
                      <option value="">042</option>
                      <option value="">043</option>
                      <option value="">044</option>
                      <option value="">051</option>
                      <option value="">052</option>
                      <option value="">053</option>
                      <option value="">054</option>
                      <option value="">055</option>
                      <option value="">061</option>
                      <option value="">062</option>
                      <option value="">063</option>
                      <option value="">064</option>
                      <option value="">070</option>
                      <option value="">0505</option>
                    </select>
                    <span class="form-space">-</span>
                    <input type="text" class="form form-xs">
                    <span class="form-space">-</span>
                    <input type="text" class="form form-xs"></td>
                </tr>
                <tr>
                  <th><label for="join-form-1-08">팩스번호</label><span class="hot-point">*</span></th>
                  <td><select name="join-form-1-08" id="join-form-1-08" class="select form-xs select-type1">
                      <option value="">02</option>
                      <option value="">031</option>
                      <option value="">032</option>
                      <option value="">033</option>
                      <option value="">041</option>
                      <option value="">042</option>
                      <option value="">043</option>
                      <option value="">044</option>
                      <option value="">051</option>
                      <option value="">052</option>
                      <option value="">053</option>
                      <option value="">054</option>
                      <option value="">055</option>
                      <option value="">061</option>
                      <option value="">062</option>
                      <option value="">063</option>
                      <option value="">064</option>
                      <option value="">070</option>
                      <option value="">0505</option>
                    </select>
                    <span class="form-space">-</span>
                    <input type="text" class="form form-xs ">
                    <span class="form-space">-</span>
                    <input type="text" class="form form-xs "></td>
                </tr>
                <tr>
                  <th rowspan="3"><label for="join-form-1-9">주소</label><span class="hot-point">*</span></th>
                  <td>
                    <input type="text" class="form form-xs" id="join-form-1-9">
                    <span class="form-space">-</span>
                    <input type="text" class="form form-xs">
                    <a class="btn btn-default custom-button1">우편번호</a>
                  </td>
                </tr>
                <tr>
               	  <td class="border-none">
                   	<input type="text" id="join-form-1-06" class="form form-xl">
                  </td>
                </tr>
                <tr>
               	  <td class="border-none">
                   	<input type="text" id="join-form-1-06" class="form form-xl" placeholder="나머지 상세주소 입력">
                  </td>
                </tr>
              </tbody>
            </table>
            <h3 class="point-form_title point-sub-document point-spot1">담당자정보 입력</h3>
            <table class="table table-form">
              <col width="167" />
              <col />
              <tbody>
                <tr>
                  <th><label for="join-form-2-01">성명 (담당자1)</label><span class="hot-point">*</span></th>
                  <td><input type="text" id="join-form-2-01" class="form form-lg"></td>
                </tr>
                <tr>
                  <th><label for="join-form-2-02">전화번호</label><span class="hot-point">*</span></th>
                  <td><select name="join-form-2-02" id="join-form-2-02" class="select form-xs select-type1">
                      <option value="">010</option>
                      <option value="">011</option>
                      <option value="">016</option>
                      <option value="">017</option>
                      <option value="">018</option>
                      <option value="">019</option>
                    </select>
                    <span class="form-space">-</span>
                    <input type="text" class="form form-xs ">
                    <span class="form-space">-</span>
                    <input type="text" class="form form-xs "></td>
                </tr>
                <tr>
                  <th><label for="join-form-2-03">이메일</label><span class="hot-point">*</span></th>
                  <td><input type="text" id="join-form-2-03" class="form form-md">
                    <span class="form-space">@</span>
                    <input type="text" class="form form-md">
                    <select name="email-type1" id="" class="select form-md select-type1 ml20">
                      <option>직접입력</option>
                      <option>Google.com</option>
                      <option>Naver.com</option>
                    </select></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <th><label for="join-form-2-04">성명 (담당자2)</label></th>
                  <td><input type="text" id="join-form-2-04" class="form form-xl"></td>
                </tr>
                <tr>
                  <th><label for="join-form-2-05">전화번호</label></th>
                  <td><select name="join-form-2-13" id="join-form-2-05" class="select form-xs select-type1">
                      <option value="">010</option>
                      <option value="">011</option>
                      <option value="">016</option>
                      <option value="">017</option>
                      <option value="">018</option>
                      <option value="">019</option>
                    </select>
                    <span class="form-space">-</span>
                    <input type="text" class="form form-xs ">
                    <span class="form-space">-</span>
                    <input type="text" class="form form-xs "></td>
                </tr>
                <tr>
                  <th><label for="join-form-2-06">이메일</label></th>
                  <td><input type="text" id="join-form-2-06" class="form form-md">
                    <span class="form-space">@</span>
                    <input type="text" class="form form-md">
                    <select name="email-type1" id="" class="select form-md select-type1 ml20">
                      <option>직접입력</option>
                      <option>Google.com</option>
                      <option>Naver.com</option>
                    </select></td>
                </tr>
              </tbody>
            </table>
            <div class="tac next-chapter"> <a href="#none" class="btn btn-lg point-spot1 point-width-md">회원가입</a> <a href="#none" class="btn btn-lg point-spot2 point-width-md">다시작성</a> </div>
          </fieldset>
        </form>
        <?php require "part/footer-sub.php"; ?>
    <?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>