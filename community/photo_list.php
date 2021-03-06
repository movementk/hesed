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
                            <li><a href="/community/inquiry_list.php">상담문의</a></li>
                            <li class="active"><a href="/community/photo_list.php">포토앨범</a></li>
                            <li><a href="/community/foot_table.php">주간식단표</a></li>
                            <li><a href="/community/notice_list.php">공지사항</a></li>
                            <li><a href="/community/free_board_list.php">자유게시판</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-9">
                    <section class="photo-list">
                        <div class="section-header">
                            <h4>포토앨범</h4>
                        </div>
                        <div class="section-content">
                            <div class="board-type-1">
                                <ul class="row">
                                    <li class="col-4">
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/community/img_photo01.jpg" alt="">
                                                <figcaption>09월의 보호자참여행사</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/community/img_photo02.jpg" alt="">
                                                <figcaption>09월의 특별공연_색소폰 연주</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/community/img_photo03.jpg" alt="">
                                                <figcaption>09월의 생신잔치</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/community/img_photo04.jpg" alt="">
                                                <figcaption>이미용서비스</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/community/img_photo05.jpg" alt="">
                                                <figcaption>08월의 특별공연_난타공연</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                    <li class="col-4">
                                        <a href="#">
                                            <figure>
                                                <img src="/assets/images/community/img_photo06.jpg" alt="">
                                                <figcaption>아로마테라피</figcaption>
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <nav class="paging" aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="first">
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-double-left">
                                                <span class="sr-only">첫 페이지</span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="prev">
                                        <a href="#" aria-label="Previous">
                                            <i class="icon-angle-left">
                                                <span class="sr-only">이전 페이지</span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next">
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-right">
                                                <span class="sr-only">다음 페이지</span>
                                            </i>
                                        </a>
                                    </li>
                                    <li class="last">
                                        <a href="#" aria-label="Next">
                                            <i class="icon-angle-double-right">
                                                <span class="sr-only">마지막 페이지</span>
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="search-form">
                                <form action="#">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>제목</option>
                                            <option>제목2</option>
                                        </select>
                                        <label for="search" class="sr-only">검색영역</label>
                                        <input type="text" id="search" class="form-control">
                                        <button type="submit" class="btn btn-search">
                                            <i class="icon-search">
                                                <span class="sr-only">검색버튼</span>
                                            </i>
                                        </button>
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