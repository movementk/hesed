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
                    <article class="pw-confirm">
                        <div class="article-header">
                            <figure>
                                <img src="/assets/images/community/icon_lock.jpg" alt="">
                                <figcaption>
                                    <strong>비밀번호를 확인해주세요</strong>
                                    <p>
                                        작성자만 글을 수정할 수 있습니다.<br>
                                        글 작성시 입력한 비밀번호를 입력하여 글을 수정해주세요.
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="article-content">
                            <form action="#">
                                <div class="form-group">
                                    <label for="u-pw" class="sr-only">비밀번호입력</label>
                                    <input type="password" id="u-pw" class="form-control">
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <button type="submit" class="btn btn-sm btn-blue">확인</button>
                                        <a href="#" class="btn btn-sm btn-gray" role="button">취소</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php');?>
</body>
</html>