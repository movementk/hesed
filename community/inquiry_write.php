<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php');?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/community.css">
</head>
<body class="sub community">
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');?>
    
    <!-- page-header -->
    <div class="page-header"></div>
    <!-- Content -->
    <main id="content">
        <div class="container">
            <div class="row priority">
                <div class="col-3">
                    <nav id="lnb">
                        <div class="lnb-title">
                            <h3>커뮤니티</h3>
                            <small>Nursing Center Hesed House</small>
                        </div>
                        <ul>
                            <li class="active"><a href="/community/inquiry_list.php">상담문의</a></li>
                            <li><a href="/community/photo_list.php">포토앨범</a></li>
                            <li><a href="/community/foot_table.php">주간식단표</a></li>
                            <li><a href="/community/notice_list.php">공지사항</a></li>
                            <li><a href="/community/free_board_list.php">자유게시판</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-9">
                    <section class="inquiry-write">
                        <div class="section-header">
                            <h4>상담문의</h4>
                        </div>
                        <div class="section-content">
                            <div class="table-wrap write-form">
                                <form action="#">
                                    <table class="table">
                                        <colgroup>
                                            <col style="width: 170px;">
                                            <col style="width: ;">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <th><label for="u-title">제목</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="u-title" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-name">이름</label></th>
                                                <td class="short">
                                                    <div class="form-group">
                                                        <input type="text" id="u-name" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-pw">비밀번호</label></th>
                                                <td class="short">
                                                    <div class="form-group">
                                                        <input type="password" id="u-pw" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-content">내용</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="u-content"></textarea>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="u-link">링크</label></th>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="text" id="u-link" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>자동등록방지</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th><label for="file2">첨부파일</label></th>
                                                <td class="file">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control file" id="txt2" name="txt2" readonly="">
                                                        <label for="txt2" class="sr-only">업로드된 파일명</label>
                                                        <input type="button" value="파일첨부" onclick="document.getElementById('file2').click();">
                                                        <input type="file" id="file2" name="file2" onchange="document.getElementById('txt2').value = this.value">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-area">
                                        <p>
                                            <button type="submit" class="btn btn-default">등록하기</button>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>